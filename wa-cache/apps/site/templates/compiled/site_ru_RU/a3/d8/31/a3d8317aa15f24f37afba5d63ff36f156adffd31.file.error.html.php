<?php /* Smarty version Smarty-3.1.14, created on 2019-07-19 12:40:30
         compiled from "/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-apps/site/themes/default/error.html" */ ?>
<?php /*%%SmartyHeaderCode:4687688535d31900e1fd820-82762023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3d8317aa15f24f37afba5d63ff36f156adffd31' => 
    array (
      0 => '/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-apps/site/themes/default/error.html',
      1 => 1540900316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4687688535d31900e1fd820-82762023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5d31900e202b94_98041796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d31900e202b94_98041796')) {function content_5d31900e202b94_98041796($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>