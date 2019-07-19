<?php /* Smarty version Smarty-3.1.14, created on 2019-07-19 12:40:23
         compiled from "/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-system/page/templates/Button.html" */ ?>
<?php /*%%SmartyHeaderCode:14287315335d319007b97087-12004538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2874ab3554bf1c892a858714d86cfcd6afc016ac' => 
    array (
      0 => '/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-system/page/templates/Button.html',
      1 => 1550133481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14287315335d319007b97087-12004538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cheat_sheet_name' => 0,
    'data' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5d319007ba3640_56176582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d319007ba3640_56176582')) {function content_5d319007ba3640_56176582($_smarty_tpl) {?><div class="wa-cheatsheet-dropdown">
    <div class="wa-drop-link">
        <a class="inline-link" id="wa-editor-help-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cheat_sheet_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" href="#">
            <i class="icon16 cheatsheet"></i><b><i>Шпаргалка</i></b>
            <i class="icon10 uarr no-overhanging"></i>
        </a>
        <div id="wa-editor-help-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cheat_sheet_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="wa-cheatsheet-dropdown-block"></div>
        <script type="text/javascript">
            (function () {
                "use strict";
                var cheat_sheet_name = <?php echo json_encode($_smarty_tpl->tpl_vars['cheat_sheet_name']->value);?>
;
                $.cheatsheet = $.cheatsheet || { };
                $.cheatsheet[cheat_sheet_name] = {
                    data: <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value);?>
,
                    init: function () {
                        this.getHelpEvent();
                        this.insertVarEvent();
                    },
                    getHelpEvent: function () {
                        $("#wa-editor-help-link-" + cheat_sheet_name).click(function () {
                            var $help = $("#wa-editor-help-" + cheat_sheet_name),
                                data = $.cheatsheet[cheat_sheet_name].data;

                            if ($help.is(":visible")) {
                                $help.hide();
                                return false;
                            }

                            var loadHelp = function (afterLoad) {
                                $help.load('<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
?module=backendCheatSheet&action=cheatSheet', data, afterLoad);
                            };

                            var showHelp = function () {
                                $help.show();
                                var f = function (e) {
                                    if ($(e.target).attr('id') == 'wa-editor-help-' + cheat_sheet_name || $(e.target).parents('#wa-editor-help-' + cheat_sheet_name).length) {
                                        $(document).one('click', f);
                                    } else {
                                        $("#wa-editor-help-" + cheat_sheet_name).hide();
                                    }
                                };
                                $(document).one('click', f);
                            };

                            if (!data.need_cache || !$help.data('loaded')) {
                                loadHelp(function () {
                                    showHelp();
                                    $help.data('loaded', 1);
                                    $(document).trigger('wa_cheatsheet_load.' + cheat_sheet_name);
                                });
                            } else {
                                showHelp();
                            }

                            return false;
                        });
                    },
                    insertVarEvent: function () {
                        $("#wa-editor-help-" + cheat_sheet_name).on('click', "div.fields a.inline-link", function () {
                            var el = $(this).find('i');
                            if (el.children('b').length) {
                                el = el.children('b');
                            }
                            if ($("#wa-design-content").length) {
                                //If the design reactor is turned on and the html editor is selected
                                if ($(".el-rte").length && $(".el-rte").is(':visible')) {
                                    try {
                                        $("#wa-design-content").elrte()[0].elrte.selection.insertHtml(el.text());
                                    } catch (e) {

                                    }
                                } else {
                                    //If the design reactor is turned and text editor is selected
                                    try {
                                        wa_editor.insert(el.text());
                                    } catch (e) {

                                    }
                                }
                            } else {
                                //If only text editor is selected
                                try {
                                    wa_editor.insert(el.text());
                                } catch (e) {

                                }
                            }
                            if ($('#wa-page-content').length) {
                                $.wa_editor_ready.then(function (method) {
                                    $('#wa-page-content')[method]('insert', el.text());
                                });
                            }
                            return false;
                        });
                    }
                };
                $(document).trigger('wa_cheatsheet_init.' + cheat_sheet_name);
                $.cheatsheet[cheat_sheet_name].init()
            }());
        </script>
    </div>
</div>


<?php }} ?>