<?php /* Smarty version Smarty-3.1.8, created on 2012-05-13 22:30:16
         compiled from "templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13491960964fb0137c986310-16168021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a0270564c79ee7a1c4f40d2a5e8bcfac7e3570' => 
    array (
      0 => 'templates/login.tpl',
      1 => 1336941009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13491960964fb0137c986310-16168021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb0137c9fa990_58329585',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb0137c9fa990_58329585')) {function content_4fb0137c9fa990_58329585($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>Voscon BV.</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/css/admin.css" />
	</head>
	<body>
		<div class="container">
			<div class="content block rounded">
				<form action="" method="post">
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
					<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="#">x</a>
						<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
					</div>
<?php }?>
					<div>
						<label for="username">Gebruikersnaam:</label>
						<input type="text" name="username" />
						<label for="password">Wachtwoord:</label>
						<input type="password" name="password" />
					</div>
					<div>
						<button type="submit" class="btn">Inloggen</button>
					</div>
				</form>
			</div>
		</div>
		<script src="/js/jquery-1.7.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>
<?php }} ?>