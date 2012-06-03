<?php /* Smarty version Smarty-3.1.8, created on 2012-06-03 15:29:39
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3516169814f946b6b8fadd5-67580427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1338730176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3516169814f946b6b8fadd5-67580427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f946b6b915e17_73948043',
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f946b6b915e17_73948043')) {function content_4f946b6b915e17_73948043($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>Voscon BV.</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/css/pages.css" />
	</head>
	<body>
		<div id="canvas">
			<div id="top-menu">
				<div class="container">
					<div id="ribbon">
						<a class="nav" href="/">
							<img src="/img/logo.png" />
						</a>
					</div>
					<div id="menu-bar">
						<a class="rounded nav" href="/">Home</a>
<?php if (isset($_smarty_tpl->tpl_vars['pages']->value)&&count($_smarty_tpl->tpl_vars['pages']->value)>0){?>
	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
						<a class="rounded nav" href="/<?php echo $_smarty_tpl->tpl_vars['page']->value->getUrl();?>
/"><?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>
</a>
	<?php } ?>
<?php }?>
						<a class="rounded nav" href="/contact/">Contact</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div id="sub-menu-bar">
					<a class="rounded nav" href="#ontwerpen">Ontwerpen</a>
					<a class="rounded nav" href="#constructie">Constructie</a>
					<a class="rounded nav" href="#oplevering">Oplevering</a>
					<a class="rounded nav" href="#service">Service</a>
				</div>
				<div class="block rounded">
					<div class="item content">
						<a name="ontwerpen"></a>
						<h2>Ontwerpen</h2>
						<a class="nav" href="#">Terug naar boven</a>
					</div>
					<div class="item content">
						<a name="constructie"></a>
						<h2>Constructie</h2>
						<a class="nav" href="#">Terug naar boven</a>
					</div>
					<div class="item content">
						<a name="oplevering"></a>
						<h2>Oplevering</h2>
						<a class="nav" href="#">Terug naar boven</a>
					</div>
					<div class="item content">
						<a name="service"></a>
						<h2>Service</h2>
						<a class="nav" href="#">Terug naar boven</a>
					</div>
				</div>
			</div>
		</div>
		<script src="/js/jquery-1.7.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/navigation.js"></script>
	</body>
</html>
<?php }} ?>