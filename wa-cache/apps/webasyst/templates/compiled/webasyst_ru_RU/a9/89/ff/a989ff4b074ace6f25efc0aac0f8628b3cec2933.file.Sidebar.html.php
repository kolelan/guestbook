<?php /* Smarty version Smarty-3.1.14, created on 2019-07-19 12:41:19
         compiled from "/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-system/webasyst/templates/actions/settings/sidebar/Sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:17366371185d31903fb72196-28874929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a989ff4b074ace6f25efc0aac0f8628b3cec2933' => 
    array (
      0 => '/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-system/webasyst/templates/actions/settings/sidebar/Sidebar.html',
      1 => 1541168107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17366371185d31903fb72196-28874929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    '_id' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5d31903fb77a48_62784881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d31903fb77a48_62784881')) {function content_5d31903fb77a48_62784881($_smarty_tpl) {?><div class="s-sidebar-block" id="s-sidebar-block">
    <ul class="menu-v with-icons">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <li data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                    <i class="icon16 ws <?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<?php }} ?>