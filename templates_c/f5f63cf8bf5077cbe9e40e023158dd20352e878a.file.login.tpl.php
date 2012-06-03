<?php /* Smarty version Smarty-3.1.8, created on 2012-05-18 21:03:49
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6101920784fb01cc56cb093-62801334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1337367827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6101920784fb01cc56cb093-62801334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb01cc56e8123_94972445',
  'variables' => 
  array (
    'error' => 0,
    'message' => 0,
    'hide_login_form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb01cc56e8123_94972445')) {function content_4fb01cc56e8123_94972445($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>Voscon BV.</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/css/admin.css" />
	</head>
	<body>
		<div class="content-container main_container">
			<div class="content block rounded">
				<form action="" method="post">
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
					<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
					</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?>
					<div class="alert alert-success">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						<strong><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</strong>
					</div>
<?php }?>
<?php if (!isset($_smarty_tpl->tpl_vars['hide_login_form']->value)||!$_smarty_tpl->tpl_vars['hide_login_form']->value){?>
					<div>
						<label for="username">Gebruikersnaam:</label>
						<input type="text" name="username" />
						<label for="password">Wachtwoord:</label>
						<input type="password" name="password" />
					</div>
					<div>
						<button type="submit" class="btn">Inloggen</button>
					</div>
<?php }?>
				</form>
			</div>
		</div>
		<script src="/js/jquery-1.7.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>
<?php }} ?>