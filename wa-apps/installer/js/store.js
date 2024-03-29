var InstallerStore = (function ($) {

    InstallerStore = function (options) {
        var that = this;

        // DOM
        that.$wrapper = options["$wrapper"];
        that.$frame = that.$wrapper.find('.js-store-frame');
        that.$loading_wrapper = that.$wrapper.find('.js-loading-wrapper');

        // VARS
        that.app_url = options["app_url"];
        that.path_to_module = options["path_to_module"];
        that.store_url = options["store_url"];
        that.store_path = options["store_path"];
        that.store_token = (options["store_token"] || {});
        that.installer_url = options["installer_url"];
        that.in_app = options["in_app"];
        that.no_confirm = options["no_confirm"];
        that.user_locale = options["user_locale"];
        that.locale = options["locale"];
        that.templates = options["templates"];
        that.csrf = options["csrf"];

        that.api_enabled = !!(window.history && window.history.pushState);

        // DYNAMIC VARS

        // INIT
        that.initClass();
    };

    InstallerStore.prototype.initClass = function () {
        var that = this;

        //
        that.initIframe(true);
        //
        that.initEventListener();
    };

    InstallerStore.prototype.postMessage = function(msg) {
        var that = this,
            data = JSON.stringify(msg);

        that.$frame[0].contentWindow.postMessage(data, '*');
    };

    InstallerStore.prototype.initIframe = function (inst_context, error_handling) {
        var that = this,
            iframe_src = that.buildStoreUrl(that.store_path, inst_context, error_handling);

        if (!that.store_url) {
            that.$loading_wrapper.remove();
            return;
        }

        that.$frame.attr('src', iframe_src);
    };

    InstallerStore.prototype.buildStoreUrl = function (store_path, init_request, error_handling) {
        var that = this,
            store_token = that.store_token,
            inst_id_param = (init_request && store_token["inst_id"]) ? store_token["inst_id"] + '/' : '',
            url = that.store_url + inst_id_param + store_path,
            separator = (url.indexOf('?') === -1) ? '?' : '&';

        if (init_request) {
            url += separator; // ? or & in url
            url += 'token_key=' + (store_token["token"] || '');
            url += '&token_sign=' + (store_token["sign"] || '');
            url += '&token_expire_datetime=' + (store_token["remote_expire_datetime"] || '');
            url += '&installer_url=' + (that.installer_url || '');
            url += '&locale=' + (that.user_locale || 'ru_RU');
        }

        if (error_handling) {
            url += '&error_handling=1';
        }

        return url;
    };

    InstallerStore.prototype.initEventListener = function () {
        var that = this;

        if (window.addEventListener) {
            window.addEventListener("message", dispatchMessage, false);
        } else if (window.attachEvent) {
            window.attachEvent("onmessage", dispatchMessage);
        } else {
            console.log('postMessages not supported: https://developer.mozilla.org/ru/docs/Web/API/Window/postMessage');
        }

        function dispatchMessage(event) {
            try {
                var data = $.parseJSON(event.data);

                switch (data.action) {
                    case 'page_loaded':
                        if (data.in_app && data.title) {
                            document.title = data.title;
                            that.$loading_wrapper.remove();
                        } else {
                            that.setUri(data.current_path, data.title);
                        }
                        break;

                    case 'token_invalid':
                        that.$loading_wrapper.remove();
                        that.getNetToken(data.data);
                        break;

                    case 'check_requirements':
                        that.checkRequirements(data.data);
                        break;

                    case 'product_install':
                        that.productInstall(data.data);
                        break;

                    case 'product_update':
                        that.productUpdate(data.data);
                        break;

                    case 'product_remove':
                        that.productRemove(data.data);
                        break;

                    case 'product_rate_init':
                        that.initProductReview(data.data);
                        break;

                    case 'product_rate_submit_response':
                        $(document).trigger('product_rate_submit_response', data.data);
                        break;
                }

            } catch (e) {
                return false;
            }
        }
    };

    InstallerStore.prototype.setUri = function (path, title) {
        var that = this,
            window_path = window.location.href.replace(window.location.origin, ''),
            current_path = that.path_to_module + path,
            is_current_path = window_path == current_path;

        if (title) {
            document.title = title;
        }

        if (that.api_enabled && !is_current_path) {

            // Scroll to top
            $(document).scrollTop(0);

            history.pushState({
                //reload: true,              // force reload history state
                content_uri: current_path    // url, string
            }, "", current_path);

            // Reload sidebar
            if (window.waInstaller && window.waInstaller.sidebar) {
                window.waInstaller.sidebar.reload();
            }
        }

        //that.$loading_wrapper.remove();
    };

    InstallerStore.prototype.getNetToken = function (data) {
        var that = this,
            href = that.path_to_module + '?action=newToken';

        that.store_path = data.current_path;

        $.get(href, function (res) {
            if (res.status == 'ok' && res.data) {
                that.store_token = res.data;

                // If the token is reissued when loading pagination, we stupidly reload the page
                if (data.is_paginator) {
                    window.location.reload();
                    
                // If there is no pagination, restart the iframe
                } else {
                    that.initIframe(true, true);
                }

            } else {
                that.initIframe(false); // If the token is not received, then render an iframe without inst context
            }
        });
    };

    /*
     Сheck the whole pack of system requirements that received by Store
     */
    InstallerStore.prototype.checkRequirements = function(data) {
        var that = this,
            requirements = data.requirements,
            controller_url = that.app_url+'requirements/',
            controller_data = {requirements: requirements},
            warning_requirements = [];

        $.post(controller_url, controller_data, handlerResponse);

        function handlerResponse(res) {
            if (res.status == "fail") {
                warning_requirements = res.errors;
            }

            var post_message = {
                action: 'warning_requirements',
                data: {
                    hash: data.hash,
                    requirements: warning_requirements
                }
            };

            that.postMessage(post_message);
        }
    };

    InstallerStore.prototype.productInstall = function (data) {
        var that = this,
            matches = document.cookie.match(new RegExp("(?:^|; )_csrf=([^;]*)")),
            csrf = matches ? decodeURIComponent(matches[1]) : that.csrf,
            type = data.type,
            url = that.app_url + '?module=update&action=manager',
            fields = [
                { name: 'install', value: 1 },
                //{ name: 'app_id['+ data.slug +']', value: data.vendor },
                { name: '_csrf', value: csrf }
            ];

        var slugs = data.slug; // always string

        // Attempt to decode all available design themes from the theme family.
        if (type == 'theme' && slugs.indexOf(' ') !== -1) {
            slugs = slugs.split(' ');
        } else {
            // If nothing is found, turn it into an array anyway.
            slugs = [slugs];
        }

        $.each(slugs, function (i, slug) {
            fields.push({name: 'app_id['+ slug +']', value: data.vendor});
        });

        if (data.return_url) {
            var return_url = data.return_url.replace('%'+ type +'_id%', data.id);
            fields.push({name: 'return_url', value: return_url});
        }

        // If the Store is open in app (not the Installer) -
        // before installing show the confirm.
        // App can cancel confirmations in the options!
        if (!that.in_app || (that.in_app && that.no_confirm) || (that.in_app && !that.no_confirm && confirm(that.locale.confirm_product_install))) {
            that.initForm(url, fields);
        }
    };

    InstallerStore.prototype.productUpdate = function (data) {
        var that = this,
            matches = document.cookie.match(new RegExp("(?:^|; )_csrf=([^;]*)")),
            csrf = matches ? decodeURIComponent(matches[1]) : that.csrf,
            url = that.app_url + '?module=update&action=manager',
            type = data.type,
            fields = [
                { name: '_csrf', value: csrf }
            ];

        var slugs = data.slug; // always string

        // Attempt to decode all available design themes from the theme family.
        if (type == 'theme' && slugs.indexOf(' ') !== -1) {
            slugs = slugs.split(' ');
        } else {
            // If nothing is found, turn it into an array anyway.
            slugs = [slugs];
        }

        $.each(slugs, function (i, slug) {
            fields.push({name: 'app_id['+ slug +']', value: data.vendor});
        });

        that.initForm(url, fields);
    };

    InstallerStore.prototype.productRemove = function (data) {
        var that = this,
            matches = document.cookie.match(new RegExp("(?:^|; )_csrf=([^;]*)")),
            csrf = matches ? decodeURIComponent(matches[1]) : that.csrf,
            type = data.type,
            url = that.app_url + '?module='+ type +'s&action=remove',
            field = data.type == 'app' ? 'app_id' : 'extras_id',
            fields = [
                { name: '_csrf', value: csrf }
            ];

        var slugs = data.slug; // always string

        // Attempt to decode all available design themes from the theme family.
        if (type == 'theme' && slugs.indexOf(' ') !== -1) {
            slugs = slugs.split(' ');
        } else {
            // If nothing is found, turn it into an array anyway.
            slugs = [slugs];
        }

        $.each(slugs, function (i, slug) {
            fields.push({name: field+'['+ slug +']', value: data.vendor});
        });

        if (confirm(that.locale.confirm_product_remove)) {
            that.initForm(url, fields);
        }
    };

    InstallerStore.prototype.initProductReview = function (data) {
        var that = this,
            is_success = false;

        $.waDialog({
            wrapper: $(that.templates["review_dialog"]),
            onOpen: initDialogContent,
            onClose: function() {
                if (is_success) {
                    location.reload();
                } else {
                    reviewSubmit(null);
                }
            }
        });

        function initDialogContent($wrapper, dialog) {
            // DOM
            var $user_name = $wrapper.find('.js-customer-center-user-name'),
                $logout_link = $wrapper.find('.js-customer-center-logout-link'),
                $content_title = $wrapper.find(".js-content-title"),
                $comment_field = $wrapper.find(".js-comment-field"),
                $errors_place = $wrapper.find('.js-errors-place'),
                $button = $wrapper.find(".js-send-comment");

            $user_name.text(data.user_data.name +' ('+ data.user_data.email +')');
            $logout_link.attr('href', data.logout_url);

            // CONST
            var is_edit = data.is_edit;

            // DYNAMIC VARS
            var is_locked = false;

            $content_title.append(' '+ data.header_locale);

            if (data.text) {
                $comment_field.val(data.text);
            }

            var widget = initRateWidget({
                $wrapper: $wrapper.find(".js-rates-list"),
                rate: data.rate
            });

            $comment_field.on("keyup", function() {
                var is_empty = !$.trim($comment_field.val()).length,
                    text = that.locale["button_default"];

                if (is_empty) {
                    text = (is_edit ? that.locale["button_edit_default"] : that.locale["button_default"]);
                } else {
                    text = (is_edit ? that.locale["button_edit_active"] : that.locale["button_active"]);
                }

                $button.text(text);
            });

            $comment_field.trigger("keyup");

            // EVENTS
            $button.on("click", function(e) {
                e.preventDefault();

                if (!is_locked) {
                    $button.prop("disabled", true);
                    is_locked = true;

                    data.text = $comment_field.val();
                    data.rate = widget.getRate();

                    reviewSubmit(data);
                }
            });

            // Waiting response from the Store Remote Server.
            $(document).on('product_rate_submit_response', function (e, res) {
                handleResponse(res);
            });

            function handleResponse(res) {
                $button.prop("disabled", false);
                is_locked = false;

                if (res.status == 'ok') {
                    $wrapper.find(".i-comment-section").html(that.templates["confirm"]);
                    $button.remove();
                    dialog.resize();

                    is_success = true;
                }

                if (res.status == 'fail' && res.errors) {
                    var errors = res.errors;

                    if (!errors.length) {
                        return false;
                    }

                    $.each(errors, function (i, error) {

                        if (!error.text) {
                            return false;
                        }

                        var $error = $("<div />").addClass("i-error").text(error.text);
                        $errors_place.append($error);

                    });

                    $errors_place.show();
                    dialog.resize();
                }
            }
        }

        function reviewSubmit(data) {
            data = {
               action: 'product_rate_submit',
               data: data
            };
            that.postMessage(data);
        }

        function initRateWidget(options) {
            // DOM
            var $wrapper = options["$wrapper"],
                $rates = $wrapper.find(".js-set-rate");

            // CONST
            var active_rate = options["rate"];

            // EVENTS
            $wrapper.on("click", ".js-set-rate", function(event) {
                event.preventDefault();

                var $rate = $(this),
                    rate = $rate.index() + 1;

                var save = true;
                if (typeof options["onSet"] === "function") {
                    var callback = options["onSet"](rate);
                    if (callback === false) {
                        save = false;
                    }
                }

                setRate(rate, save);
            });

            $wrapper.on("mouseenter", ".js-set-rate", function(event) {
                event.preventDefault();
                var index = $(this).index() + 1;
                setRate(index, false);
            });

            $wrapper.on("mouseleave", function(event) {
                event.preventDefault();

                if (typeof options["onExit"] === "function") {
                    options["onExit"](active_rate);
                }

                setRate(active_rate, false);
            });

            if (active_rate) {
                setRate(active_rate, false);
            }

            return {
                getRate: function() {
                    return active_rate;
                },
                setRate: setRate
            };

            /**
             * @var {Number|Null} index
             * */
            function setRate(rate, save) {
                var active_class = "is-active";

                save = (typeof save === "boolean" ? save : true);

                $rates.each( function(i) {
                    var $rate = $(this);

                    if (i <= rate - 1) {
                        $rate.addClass(active_class);
                    } else {
                        $rate.removeClass(active_class);
                    }
                });

                if (save) {
                    active_rate = rate;
                }
            }
        }
    };

    InstallerStore.prototype.initForm = function (url, fields) {
        var $form = $('<form>', {
            action: url,
            method: 'post'
        });

        $.each(fields, function (i, field) {
            $('<input>').attr({
                type: "hidden",
                name: field.name,
                value: field.value
            }).appendTo($form);
        });

        $form.appendTo('body').submit();
    };

    return InstallerStore;

})(jQuery);