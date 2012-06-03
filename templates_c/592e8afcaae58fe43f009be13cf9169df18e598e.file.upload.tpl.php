<?php /* Smarty version Smarty-3.1.8, created on 2012-05-18 22:36:41
         compiled from "./templates/upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16382908514fb69b519916b9-13123665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '592e8afcaae58fe43f009be13cf9169df18e598e' => 
    array (
      0 => './templates/upload.tpl',
      1 => 1337373399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16382908514fb69b519916b9-13123665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb69b519f6559_23017896',
  'variables' => 
  array (
    'warnings' => 0,
    'warning' => 0,
    'notifications' => 0,
    'notification' => 0,
    'max_limit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb69b519f6559_23017896')) {function content_4fb69b519f6559_23017896($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<h2>Media uploaden</h2>
<?php if (isset($_smarty_tpl->tpl_vars['warnings']->value)){?>
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
<?php }?>

			Merk op dat bestanden van maximaal <?php echo $_smarty_tpl->tpl_vars['max_limit']->value;?>
 MB kunnen worden verzonden!
			<form action="" method="post" enctype="multipart/form-data">
				<div>
					<input type="file" name="upload" />
				</div>
				<button type="submit" class="btn">Uploaden</button>
			</form>
<?php echo $_smarty_tpl->getSubTemplate ('admin-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>