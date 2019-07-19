<?php /* Smarty version Smarty-3.1.14, created on 2019-07-19 12:40:52
         compiled from "/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-apps/blog/themes/default/header.html" */ ?>
<?php /*%%SmartyHeaderCode:3100918525d31902422ed30-51327950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e65de9e13b82794cc721c37c2ab3aedd2f539d24' => 
    array (
      0 => '/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-apps/blog/themes/default/header.html',
      1 => 1540900311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3100918525d31902422ed30-51327950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_url' => 0,
    'blog_query' => 0,
    'wa' => 0,
    'blog' => 0,
    'is_search' => 0,
    'theme_settings' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5d3190242433f2_35733709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d3190242433f2_35733709')) {function content_5d3190242433f2_35733709($_smarty_tpl) {?><!-- search -->
<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
" class="search">
    <div class="search-wrapper">
        <input type="search" name="query" <?php if (!empty($_smarty_tpl->tpl_vars['blog_query']->value)){?>value="<?php echo $_smarty_tpl->tpl_vars['blog_query']->value;?>
"<?php }?> placeholder="Найти запись">
        <button type="submit"></button>
    </div>
    <div class="clear-both"></div>
</form>

<ul class="pages">

    <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->blog->blogs(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('blog_id')==$_smarty_tpl->tpl_vars['blog']->value['id']&&empty($_smarty_tpl->tpl_vars['is_search']->value)){?>selected<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</a>
        </li>
    <?php }
if (!$_smarty_tpl->tpl_vars['blog']->_loop) {
?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->url();?>
">Все записи</a>
        </li>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']!='blog-pages'){?>
        
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->blog->pages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
            <li<?php if (strlen($_smarty_tpl->tpl_vars['page']->value['url'])>1&&strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['page']->value['url'])){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</a></li>
        <?php } ?>
    <?php }?>
    
</ul>


<?php }} ?>