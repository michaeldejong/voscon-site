<?php /* Smarty version Smarty-3.1.8, created on 2012-05-27 17:48:22
         compiled from "./templates/admin-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14315781504fb6a313bb37e3-73676050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e235f6b8e0cebc4ec9d2bc6ab9671f477aa6a20d' => 
    array (
      0 => './templates/admin-header.tpl',
      1 => 1338133698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14315781504fb6a313bb37e3-73676050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb6a313bb50e5_09228316',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb6a313bb50e5_09228316')) {function content_4fb6a313bb50e5_09228316($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>Voscon BV.</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/css/admin.css" />
	</head>
	<body>
		<div class="menu well">
			<h6>Pagina's</h6>
			<ul>
				<li><a href="pages.php">Overzicht</a>
				<li><a href="pages.php?action=new">Nieuwe pagina</a>
			</ul>
			<h6>Secties</h6>
			<ul>
				<li><a href="sections.php">Overzicht</a>
				<li><a href="new-section.php">Uploaden</a>
			</ul>
			<h6>Media</h6>
			<ul>
				<li><a href="media.php">Overzicht</a>
				<li><a href="upload.php">Uploaden</a>
			</ul>
			<h6>Account</h6>
			<ul>
				<li><a href="">Wachtwoord aanpassen</a>
				<li><a href="logout.php">Uitloggen</a>
			</ul>
		</div>
		<div class="content"><?php }} ?>