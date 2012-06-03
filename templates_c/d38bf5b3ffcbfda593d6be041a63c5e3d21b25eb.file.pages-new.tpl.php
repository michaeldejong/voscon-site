<?php /* Smarty version Smarty-3.1.8, created on 2012-06-03 14:15:33
         compiled from "./templates/pages-new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17282370044fc24c8c554478-00283280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd38bf5b3ffcbfda593d6be041a63c5e3d21b25eb' => 
    array (
      0 => './templates/pages-new.tpl',
      1 => 1338725726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17282370044fc24c8c554478-00283280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc24c8c59f112_14290652',
  'variables' => 
  array (
    'warnings' => 0,
    'warning' => 0,
    'notifications' => 0,
    'notification' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc24c8c59f112_14290652')) {function content_4fc24c8c59f112_14290652($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<h2>Nieuwe pagina</h2>
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
			<form class="form-inline" action="" method="post">
				<div class="control-group">
					<label class="control-label" for="title">Titel</label>
					<input type="text" id="title" name="title" class="xlarge">
				</div>
<?php if (isset($_smarty_tpl->tpl_vars['pages']->value)&&count($_smarty_tpl->tpl_vars['pages']->value)>0){?>
				<div class="control-group">
					<label class="control-label" for="after">Invoegen na</label>
					<select name="after" class="xlarge">
	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['page']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['page']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->iteration++;
 $_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['pages']['last'] = $_smarty_tpl->tpl_vars['page']->last;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['pages']['last']){?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['page']->value->getRank();?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>
</option>
		<?php }else{ ?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['page']->value->getRank();?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>
</option>
		<?php }?>
	<?php } ?>
					</select>
				</div>
<?php }else{ ?>
				<input type="hidden" name="after" value="0">
<?php }?>
				<div class="control-group right">
					<input type="submit" id="create" name="create" class="btn btn-success" value="Aanmaken">
				</div>
			</form>
<?php echo $_smarty_tpl->getSubTemplate ('admin-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>