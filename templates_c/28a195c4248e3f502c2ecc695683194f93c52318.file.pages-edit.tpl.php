<?php /* Smarty version Smarty-3.1.8, created on 2012-06-03 17:10:30
         compiled from "./templates/pages-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13413492004fcb7e662a8902-11749172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28a195c4248e3f502c2ecc695683194f93c52318' => 
    array (
      0 => './templates/pages-edit.tpl',
      1 => 1338734409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13413492004fcb7e662a8902-11749172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fcb7e662d6a40_02121357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcb7e662d6a40_02121357')) {function content_4fcb7e662d6a40_02121357($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<h2>Pagina aanpassen</h2>
<?php echo $_smarty_tpl->getSubTemplate ('notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<form class="form-inline" action="" method="post">
				<div class="control-group">
					<label class="control-label" for="title">Titel</label>
					<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->getId();?>
">
					<input type="text" id="title" name="title" class="xlarge" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>
">
				</div>
				<div class="control-group right">
					<input type="submit" id="edit" name="edit" class="btn btn-success" value="Aanpassen">
				</div>
			</form>
<?php echo $_smarty_tpl->getSubTemplate ('admin-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>