<?php /* Smarty version Smarty-3.1.14, created on 2019-07-19 12:36:39
         compiled from "/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-system/webasyst/templates/actions/login/LoginFirst.html" */ ?>
<?php /*%%SmartyHeaderCode:10067939085d318f27b8b658-88870136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1e0395e0351d1249b00ff96fb62108104c3ec99' => 
    array (
      0 => '/home/prg/PhpstormProjects/webasyst_guestbook/webasyst-framework/wa-system/webasyst/templates/actions/login/LoginFirst.html',
      1 => 1541778477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10067939085d318f27b8b658-88870136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5d318f27c01857_33722586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d318f27c01857_33722586')) {function content_5d318f27c01857_33722586($_smarty_tpl) {?><!DOCTYPE html><html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
	<?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

	<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js" type="text/javascript"></script>
</head>

<body>

	<div id="wa-installer">

		<div class="dialog height450px ignore-esc" id="wa-install-dialog">
			<div class="dialog-background"></div>
			<div class="dialog-window">
				<form method="post" action="">

				<?php $_smarty_tpl->tpl_vars['errors'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['errors']->value)===null||$tmp==='' ? array() : $tmp), null, 0);?>

				<div class="dialog-content">
					<div class="dialog-content-indent">					
												
						<h1>Вход в Вебасист <i class="icon16 lock"></i></h1>
						<p>
							Создайте первого пользователя-администратора.
							<span class="gray">Информация, введенная в этой форме, будет сохранена только внутри этой установки Webasyst и не будет отправлена за пределы вашего сервера.</span>
						</p>
						<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['all'])){?>
						<p class="i-error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['all'];?>
</p>
						<?php }?>
						<div class="fields form">
						  <div class="field-group">
							<div class="field">
								<div class="name">
									<strong>Логин *</strong>
								</div>
								<div class="value">
									<input type="text" class="large<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['login'])){?> error<?php }?>" name="login" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->request('login');?>
" autocomplete="off" />
									<em class="errormsg"><?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['login'])){?><?php echo $_smarty_tpl->tpl_vars['errors']->value['login'];?>
<?php }?></em>
								</div>
							</div>
							<div class="field">
								<div class="name">
									<strong>Пароль *</strong>
								</div>
								<div class="value">
									<input type="password" name="password" class="large<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['password'])){?> error<?php }?>" />
									<em class="errormsg"></em>
								</div>
							</div>
							<div class="field">
								<div class="name">
									<strong>Подтвердите пароль *</strong>
								</div>
								<div class="value">
									<input type="password" name="password_confirm" class="large<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['password'])){?> error<?php }?>" />
									<em class="errormsg"><?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['password'])){?><?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>
<?php }?></em>
								</div>
							</div>
						  </div>
						  <div class="field-group">
							<div class="field">
                                  <div class="name">
                                      Имя
                                  </div>
                                  <div class="value">
                                      <input type="text" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->request('firstname');?>
" />
                                  </div>
                            </div>
                            <div class="field">
                                  <div class="name">
                                      Фамилия
                                  </div>
                                  <div class="value">
                                      <input type="text" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->request('lastname');?>
" />
                                  </div>
                            </div>						  
							<div class="field">
								<div class="name">
									Email *
								</div>
								<div class="value">
									<input type="text" <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['email'])){?>class="error"<?php }?> name="email" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->request('email');?>
" />
									<em class="errormsg"><?php if (!empty($_smarty_tpl->tpl_vars['errors']->value['email'])){?><?php echo $_smarty_tpl->tpl_vars['errors']->value['email'];?>
<?php }?></em>
								</div>
							</div>
                            <div class="field">
                                <div class="name">
                                    Название компании
                                </div>
                                <div class="value">
                                    <input type="text" name="account_name" value="<?php echo $_smarty_tpl->tpl_vars['wa']->value->request('account_name',_ws('Webasyst'));?>
" />
                                </div>
                            </div>							
						  </div>

						</div>
									
					</div>
				</div>

				<div class="dialog-buttons">
					<div class="dialog-buttons-gradient">		
						<input type="submit" value="Войти" class="button green" />

					</div>
				</div>
				</form>				
			</div>			

	
		</div> <!-- .dialog -->
		
	</div> <!-- #wa-login -->

</body>

</html>
<?php }} ?>