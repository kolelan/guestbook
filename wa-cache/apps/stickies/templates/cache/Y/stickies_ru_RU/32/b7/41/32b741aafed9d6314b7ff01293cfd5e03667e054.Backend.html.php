<?php /*%%SmartyHeaderCode:1207870025d319005248d12-12405408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32b741aafed9d6314b7ff01293cfd5e03667e054' => 
    array (
      0 => '/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-apps/stickies/templates/actions/backend/Backend.html',
      1 => 1452519805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1207870025d319005248d12-12405408',
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
    'stick_colors_css' => 0,
    'color_key' => 0,
    'color' => 0,
    'sheet_backgrounds' => 0,
    'background_key' => 0,
    'background' => 0,
    'wa_url' => 0,
    'stick_min_size' => 0,
    'stick_max_size' => 0,
    'wa_app_url' => 0,
    'stick_colors' => 0,
    'color_value' => 0,
    'rights_add_sheet' => 0,
    'name' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5d319005335824_26498734',
  'cache_lifetime' => 1800,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d319005335824_26498734')) {function content_5d319005335824_26498734($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Стикеры — TopSicretPuff</title>
<link href="/wa-content/css/wa/wa-1.3.css?v1.11.7" rel="stylesheet" type="text/css" >
<!--[if IE 9]><link type="text/css" href="/wa-content/css/wa/wa-1.0.ie9.css" rel="stylesheet"><![endif]-->
<!--[if IE 8]><link type="text/css" href="/wa-content/css/wa/wa-1.0.ie8.css" rel="stylesheet"><![endif]-->
<!--[if IE 7]><link type="text/css" href="/wa-content/css/wa/wa-1.0.ie7.css" rel="stylesheet"><![endif]-->
<link type="text/css" rel="stylesheet" href="/wa-content/font/ruble/arial/fontface.css">
<meta name="viewport" content="width=device-width, initial-scale=1" />


<link type="text/css" rel="stylesheet" href="/wa-apps/stickies/css/stickies.css?v=1.1.1.1">

<style type="text/css">

/* default */
.sticky-default .sticky-inner { background-color:#fef49c; border-color: #bca902; }
.sticky-default .sticky-header {  background-color:#feea3d ; border-color: #bca902;}
i.sticky-default { background:#fef49c}

/* pink */
.sticky-pink .sticky-inner { background-color:#ffc7c7; border-color: #e27575; }
.sticky-pink .sticky-header {  background-color:#ffb2b2 ; border-color: #e27575;}
i.sticky-pink { background:#ffc7c7}

/* blue */
.sticky-blue .sticky-inner { background-color:#adf4ff; border-color: #02bcd7; }
.sticky-blue .sticky-header {  background-color:#89f0ff ; border-color: #02bcd7;}
i.sticky-blue { background:#adf4ff}

/* lightblue */
.sticky-lightblue .sticky-inner { background-color:#b6caff; border-color: #7591dc; }
.sticky-lightblue .sticky-header {  background-color:#9bb6fe ; border-color: #7591dc;}
i.sticky-lightblue { background:#b6caff}

/* grey */
.sticky-grey .sticky-inner { background-color:#ddd; border-color: #aaa; }
.sticky-grey .sticky-header {  background-color:#ccc ; border-color: #aaa;}
i.sticky-grey { background:#ddd}

/* green */
.sticky-green .sticky-inner { background-color:#bbffaa; border-color: #76b865; }
.sticky-green .sticky-header {  background-color:#9bf884 ; border-color: #76b865;}
i.sticky-green { background:#bbffaa}

/* cork */
i.bg-cork {background: url("/wa-apps/stickies/img/corkboardbackground.jpg"); }
#stickies.cork {background: url("/wa-apps/stickies/img/corkboardbackground.jpg") !important; }

/* clothes */
i.bg-clothes {background: url("/wa-apps/stickies/img/clothes.jpg"); }
#stickies.clothes {background: url("/wa-apps/stickies/img/clothes.jpg") !important; }

/* jeans */
i.bg-jeans {background: url("/wa-apps/stickies/img/jeans.jpg"); }
#stickies.jeans {background: url("/wa-apps/stickies/img/jeans.jpg") !important; }

/* noisyblue */
i.bg-noisyblue {background: url("/wa-apps/stickies/img/noisyblue.jpg"); }
#stickies.noisyblue {background: url("/wa-apps/stickies/img/noisyblue.jpg") !important; }

/* noisygreen */
i.bg-noisygreen {background: url("/wa-apps/stickies/img/noisygreen.jpg"); }
#stickies.noisygreen {background: url("/wa-apps/stickies/img/noisygreen.jpg") !important; }

/* brick */
i.bg-brick {background: url("/wa-apps/stickies/img/brick.jpg"); }
#stickies.brick {background: url("/wa-apps/stickies/img/brick.jpg") !important; }

</style>

<script type="text/javascript" src="/wa-content/js/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/wa-content/js/jquery-ui/jquery-ui.custom.min.js?v1.11.7.418"></script>
<script type="text/javascript" src="/wa-apps/stickies/js/wa.stickiescontroller.min.js?v1563529221"></script>



</head>

<body id="stickies">

<div id="wa">


		<div id="wa-app-stickies-stickies" class="stickies-content">
<!-- sticky placeholder -->
<!-- sticky settings placeholder -->
		</div><!-- wa-app-stickies-stickies -->


<!-- account & navigation -->
		



<script>
$(function() {
    });
</script>
<script type="text/javascript">var backend_url = "/webasyst/";</script><div id="wa-header"><div id="wa-account"><a href="/webasyst/" class="wa-dashboard-link"><h3 title="TopSicretPuff">TopSicretPuff</h3><span class="gray">Пятница, 19 июля</span></a></div><div id="wa-usercorner" data-user-id="1"><div class="profile image32px"><div class="image"><a href="/webasyst/?module=profile"><img width="32" height="32" src="/wa-content/img/userpic32@2x.jpg" alt=""></a></div><div class="details"><a href="/webasyst/?module=profile" id="wa-my-username">Site Admin</a><p class="status"></p><a class="hint" href="/webasyst/?action=logout">выйти</a></div></div></div><div id="wa-applist" class="counts-cached"><ul><li id="wa-app-webasyst-settings" data-app="webasyst.settings" ><a href="/webasyst/webasyst/settings/"><img data-src2="/wa-content/img/wa-settings/settings-96.png?v=1.11.7" src="/wa-content/img/wa-settings/settings-48.png?v=1.11.7" alt="">Настройки</a></li><li id="wa-app-blog" data-app="blog" ><a href="/webasyst/blog/"><img data-src2="/wa-apps/blog/img/blog96.png?v=1.4.2" src="/wa-apps/blog/img/blog.png?v=1.4.2" alt="">Блог</a></li><li id="wa-app-contacts" data-app="contacts" ><a href="/webasyst/contacts/"><img data-src2="/wa-apps/contacts/img/contacts96.png?v=1.1.6" src="/wa-apps/contacts/img/contacts.png?v=1.1.6" alt="">Контакты</a></li><li id="wa-app-installer" data-app="installer" ><a href="/webasyst/installer/"><img data-src2="/wa-apps/installer/img/installer-96.png?v=1.11.7" src="/wa-apps/installer/img/installer-48.png?v=1.11.7" alt="">Инсталлер</a></li><li id="wa-app-site" data-app="site" ><a href="/webasyst/site/"><img data-src2="/wa-apps/site/img/site96.png?v=2.5.9" src="/wa-apps/site/img/site.png?v=2.5.9" alt="">Сайт</a></li><li id="wa-app-stickies" data-app="stickies"  class="selected"><a href="/webasyst/stickies/"><img data-src2="/wa-apps/stickies/img/stickies96.png?v=1.1.1" src="/wa-apps/stickies/img/stickies.png?v=1.1.1" alt="">Стикеры</a></li><li id="wa-app-team" data-app="team" ><a href="/webasyst/team/"><img data-src2="/wa-apps/team/img/team96.png?v=1.0.10" src="/wa-apps/team/img/team48.png?v=1.0.10" alt="">Команда</a></li><li><a href="#" id="wa-moreapps"></a></li></ul>

            </div>
</div>
<script id="wa-header-js" type="text/javascript" src="/wa-content/js/jquery-wa/wa.header.js?1.11.7.418" data-determine-timezone="1"></script>







<!-- app toolbar, menu & body -->

	<div id="wa-app">

		<div class="stickies-sidebar" id="stickies-events">
			<div class="block sticky-createnew">
				<ul class="menu-v" id="wa-app-stickies-add">
<!-- add sticky placeholder -->
					<li>&nbsp;</li>
				</ul>
			</div>
			<div class="stickies-sidebar-scrolable">

			<div class="block" id="stickies-sheets">
				<ul class="menu-v" id="wa-app-stickies-sheets">
<!-- sheet list placeholder -->
<!-- sheet add placeholder -->
					<li>&nbsp;</li>
				</ul>
			</div>
		</div>


		<div id="wa-system-notice" style="display: none;">
		</div>
		</div>

	</div><!-- wa -->
</div><!-- wa-app -->

<script type="text/x-jquery-tmpl" id="sticky-template-js">
<!-- begin sticky-template-js  -->
			<div class="sticky{{if sticky.color}} sticky-${sticky.color}{{/if}} sticky-${sticky.color}"
				id="sticky_${sticky.id}"
				style="top: ${sticky.position_top}%;
					left: ${sticky.position_left}%;
					height:${Math.max(122,Math.min(422,parseInt(sticky.size_height)+22))}px;
					width:${Math.max(105,Math.min(405,parseInt(sticky.size_width)+5))}px;
					z-index: ${zindex||1};">
				<div class="sticky-inner" style="display:block;height: 100%; width:100%;">
					<div class="sticky-header">
						<a
							href="/webasyst/stickies/#/sticky/delete/${sticky.id}"
							class="stick-delete js-menu-item js-menu-no-proceed"
							title="Удалить"
						>
							<i class="icon10 close"><\/i>
						<\/a>
						<a
							href="/webasyst/stickies/#/sticky/settings/${sticky.id}"
							title="Параметры"
							class="sticky-setting js-menu-item js-menu-no-proceed"
						>
							<i class="icon10 settings"><\/i>
						<\/a>
						<span class="sticky-status" id="sticky_status_${sticky.id}" title="Статус стикера"><\/span>
					<\/div>
					<div class="sticky-content" style="display:block;  height:${sticky.size_height-20}px; width:${sticky.size_width-6}px;">
						<textarea name="content"
							class="sticky-content"
							id="sticky_content_${sticky.id}"
							cols="40" rows="5"
							style="font-size: ${sticky.font_size}px; line-height: ${sticky.font_size}px;">${sticky.content}<\/textarea>
					<\/div>
					<div class="sticky-resizable-se"><\/div>
				<\/div>
			<\/div>
<!--  end sticky-template-js -->
</script>
<script type="text/x-jquery-tmpl" id="sticky-settings-template-js">
<!-- begin sticky-settings-template-js  -->
			<div  class="stickies-settings-form" id="sticky-settings-${sticky.id}" style="display:none;height: 100%; width: 100%;">
				<div class="wa-ui-form-content">
					<h5>Цвет<\/h5>
					<ul class="thumbs color-vars" id="color-vars-${sticky.id}">
<!-- default -->
						<li
							id="color-vars-${sticky.id}-default"
							class="{{if sticky.color == 'default'}}selected{{/if}}"
						>
							<a

								class="js-menu-item js-menu-no-proceed"
								href="/webasyst/stickies/#/sticky/color/${sticky.id}/default"
								title="default"
							>
								<i class="sticky-default"><\/i>
							<\/a>
						<\/li>
<!-- pink -->
						<li
							id="color-vars-${sticky.id}-pink"
							class="{{if sticky.color == 'pink'}}selected{{/if}}"
						>
							<a

								class="js-menu-item js-menu-no-proceed"
								href="/webasyst/stickies/#/sticky/color/${sticky.id}/pink"
								title="pink"
							>
								<i class="sticky-pink"><\/i>
							<\/a>
						<\/li>
<!-- blue -->
						<li
							id="color-vars-${sticky.id}-blue"
							class="{{if sticky.color == 'blue'}}selected{{/if}}"
						>
							<a

								class="js-menu-item js-menu-no-proceed"
								href="/webasyst/stickies/#/sticky/color/${sticky.id}/blue"
								title="blue"
							>
								<i class="sticky-blue"><\/i>
							<\/a>
						<\/li>
<!-- lightblue -->
						<li
							id="color-vars-${sticky.id}-lightblue"
							class="{{if sticky.color == 'lightblue'}}selected{{/if}}"
						>
							<a

								class="js-menu-item js-menu-no-proceed"
								href="/webasyst/stickies/#/sticky/color/${sticky.id}/lightblue"
								title="lightblue"
							>
								<i class="sticky-lightblue"><\/i>
							<\/a>
						<\/li>
<!-- grey -->
						<li
							id="color-vars-${sticky.id}-grey"
							class="{{if sticky.color == 'grey'}}selected{{/if}}"
						>
							<a

								class="js-menu-item js-menu-no-proceed"
								href="/webasyst/stickies/#/sticky/color/${sticky.id}/grey"
								title="grey"
							>
								<i class="sticky-grey"><\/i>
							<\/a>
						<\/li>
<!-- green -->
						<li
							id="color-vars-${sticky.id}-green"
							class="{{if sticky.color == 'green'}}selected{{/if}}"
						>
							<a

								class="js-menu-item js-menu-no-proceed"
								href="/webasyst/stickies/#/sticky/color/${sticky.id}/green"
								title="green"
							>
								<i class="sticky-green"><\/i>
							<\/a>
						<\/li>
<!--  end  color variants -->
					<\/ul>
				<\/div>
			<\/div>
<!--  end sticky-settings-template-js -->
</script>
<script type="text/x-jquery-tmpl" id="add-sticky-template-js">
<!-- begin add-sticky-template-js  -->
					<li>
					  	<a href="/webasyst/stickies/#/sticky/add/${sheet_id}" class="wa-ui-icon-link js-menu-item js-menu-no-proceed">
							<i class="icon16 add"><\/i>
							Новый стикер
						<\/a>
					<\/li>
<!--  end add-sticky-template-js -->
</script>
<script type="text/x-jquery-tmpl" id="sheet-template-js">
<!-- begin sheet-template-js  -->
					<li id="sheet_item_${sheet.id}" class="js-sheet-item {{if current_sheet_id == sheet.id}}selected{{else}}{{/if}}">
						<span class="count">
							<i class="icon16 loading" style="display: none;"><\/i>
<!-- 						{{if current_sheet_id == sheet.id}} -->
							<a
								href="/webasyst/stickies/#/sheet/edit/${sheet.id}"
								class="inline-icon js-menu-item js-menu-no-proceed"
								title="Параметры"
							>
								<i class="icon16 settings"><\/i>
							<\/a>
<!-- 							{{else}} -->
								${sheet.qty}
<!--							{{/if}} -->
						<\/span>
						<a
							id="sheet_item_name_${sheet.id}"
							href="/webasyst/stickies/#/sheet/${sheet.id}"
						>{{if sheet.name}}${sheet.name}{{else}}&lt;без названия&gt;{{/if}} <\/a>
<!--						{{if current_sheet_id == sheet.id}} -->
						<div class="stickies-settings-form">
							<form
								id="sheet_item__settings_${sheet.id}"
								class="js-form-submit"
								action="/webasyst/stickies/#/sheet/save/${sheet.id}"
							>
							<p><label for="sticky-name-${sheet.id}">Название<\/label><\/p>
							<p><input name="name" type="text" value="${sheet.name}" id="sticky-name-${sheet.id}"><\/p>
<!--  avaliable backgrounds list -->
							<p>Фон<\/p>
							<ul class="thumbs background-vars" id="background-vars-${sheet.id}">
<!-- cork -->

								<li id="background-vars-${sheet.id}-cork" {{if sheet.background_id=='cork'}}class="selected"{{/if}} >
									<a	class="js-menu-item js-menu-no-proceed"
										href="/webasyst/stickies/#/sheet/background/${sheet.id}/cork"
										title="cork"
									>
										<i class="bg-cork"><\/i>
									<\/a>
								<\/li>
<!-- clothes -->

								<li id="background-vars-${sheet.id}-clothes" {{if sheet.background_id=='clothes'}}class="selected"{{/if}} >
									<a	class="js-menu-item js-menu-no-proceed"
										href="/webasyst/stickies/#/sheet/background/${sheet.id}/clothes"
										title="clothes"
									>
										<i class="bg-clothes"><\/i>
									<\/a>
								<\/li>
<!-- jeans -->

								<li id="background-vars-${sheet.id}-jeans" {{if sheet.background_id=='jeans'}}class="selected"{{/if}} >
									<a	class="js-menu-item js-menu-no-proceed"
										href="/webasyst/stickies/#/sheet/background/${sheet.id}/jeans"
										title="jeans"
									>
										<i class="bg-jeans"><\/i>
									<\/a>
								<\/li>
<!-- noisyblue -->

								<li id="background-vars-${sheet.id}-noisyblue" {{if sheet.background_id=='noisyblue'}}class="selected"{{/if}} >
									<a	class="js-menu-item js-menu-no-proceed"
										href="/webasyst/stickies/#/sheet/background/${sheet.id}/noisyblue"
										title="noisyblue"
									>
										<i class="bg-noisyblue"><\/i>
									<\/a>
								<\/li>
<!-- noisygreen -->

								<li id="background-vars-${sheet.id}-noisygreen" {{if sheet.background_id=='noisygreen'}}class="selected"{{/if}} >
									<a	class="js-menu-item js-menu-no-proceed"
										href="/webasyst/stickies/#/sheet/background/${sheet.id}/noisygreen"
										title="noisygreen"
									>
										<i class="bg-noisygreen"><\/i>
									<\/a>
								<\/li>
<!-- brick -->

								<li id="background-vars-${sheet.id}-brick" {{if sheet.background_id=='brick'}}class="selected"{{/if}} >
									<a	class="js-menu-item js-menu-no-proceed"
										href="/webasyst/stickies/#/sheet/background/${sheet.id}/brick"
										title="brick"
									>
										<i class="bg-brick"><\/i>
									<\/a>
								<\/li>
<!-- end variants -->
							<\/ul>
<!-- end avaliable backgrounds list -->
							<p>
								<input type="hidden" name="sheet_id" value="${sheet.id}" />
								<input type="submit" value="Сохранить"/>
								<a class="js-menu-item js-menu-no-proceed" href="/webasyst/stickies/#/sheet/delete/${sheet.id}">Удалить доску<\/a>
							<\/p>
							<\/form>
						<\/div>
<!--					{{/if}} -->
					<\/li>
<!--  end sheet-template-js -->
</script>
<script type="text/x-jquery-tmpl" id="sheet-add-template-js">
<!-- begin sheet-add-template-js  -->
<!--  Allow add new board -->
					<li class="top-padded">
						<a class="small inline-link js-menu-item js-menu-no-proceed" href="/webasyst/stickies/#/sheet/add">
							<i class="icon10 add"><\/i>
							<b><i>Новая доска<\/i><\/b>
						<\/a>
					<\/li>
<!--  -->
<!--  end sheet-add-template-js -->
</script>

<script type="text/javascript">
translate['Empty server responce'] = 'Пустой ответ сервера';
translate['AJAX request error'] = 'Ошибка AJAX-запроса';
translate['Invalid server responce'] = 'Нераспознанный ответ сервера';
translate['Delete board with all stickies?'] = 'Удалить доску вместе со всеми стикерами на ней?';
translate['Error occurred while sorting boards'] = 'Произошла ошибка в процессе сортировки досок';
translate['no name'] = 'без названия';
translate['Stickies'] = 'Стикеры';

var accountName = 'TopSicretPuff';
var default_background = 'cork';
$(document).ready( function() {

	$( function() {
		$.wa.stickiescontroller.init();
	});

});
</script>
</body>
</html>
<?php }} ?>