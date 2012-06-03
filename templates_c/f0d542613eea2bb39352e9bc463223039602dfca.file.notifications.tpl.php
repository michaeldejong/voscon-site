<?php /* Smarty version Smarty-3.1.8, created on 2012-06-03 17:10:30
         compiled from "./templates/notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9021598644fcb7e662dbf60-55957632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d542613eea2bb39352e9bc463223039602dfca' => 
    array (
      0 => './templates/notifications.tpl',
      1 => 1338734419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9021598644fcb7e662dbf60-55957632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warnings' => 0,
    'warning' => 0,
    'notifications' => 0,
    'notification' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fcb7e6630b4f4_00338919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcb7e6630b4f4_00338919')) {function content_4fcb7e6630b4f4_00338919($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['warnings']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value){
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
			<div class="alert alert-error"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</div>
	<?php } ?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['notification'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notification']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->key => $_smarty_tpl->tpl_vars['notification']->value){
$_smarty_tpl->tpl_vars['notification']->_loop = true;
?>
			<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</div>
	<?php } ?>
<?php }?><?php }} ?>