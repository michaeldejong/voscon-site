<?php /* Smarty version Smarty-3.1.8, created on 2012-06-03 14:14:43
         compiled from "./templates/pages-overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14539438024fc20e54b86ca2-28150177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b38cde62fc67b766cf1e216bb2ef6829819f8f3' => 
    array (
      0 => './templates/pages-overview.tpl',
      1 => 1338725680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14539438024fc20e54b86ca2-28150177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc20e54c573a9_62346392',
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
<?php if ($_valid && !is_callable('content_4fc20e54c573a9_62346392')) {function content_4fc20e54c573a9_62346392($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<h2>Pagina overzicht</h2>
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
			<form action="" method="post">
				<table class="table table-striped table-bordered table-condensed">
					<thead>
						<tr>
							<th class="nano_column"><input type="checkbox" id="all"></th>
							<th>Titel</th>
						</tr>
					</thead>
					<tbody>
<?php if (isset($_smarty_tpl->tpl_vars['pages']->value)&&count($_smarty_tpl->tpl_vars['pages']->value)>0){?>
	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
						<tr>
							<td class="nano_column">
								<input type="checkbox" class="item" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->getId();?>
"></td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>

								<div class="right">
									<a href="/pages.php?action=move-up&id=<?php echo $_smarty_tpl->tpl_vars['page']->value->getId();?>
" class="up"><i class="icon-arrow-up"></i></a>
									<a href="/pages.php?action=move-down&id=<?php echo $_smarty_tpl->tpl_vars['page']->value->getId();?>
" class="down"><i class="icon-arrow-down"></i></a>
								</div>
							</td>
						</tr>
	<?php } ?>
<?php }else{ ?>
						<tr>
							<td colspan=2><i>Er zijn nog geen pagina's aangemaakt!</i></td>
						</tr>
<?php }?>
					</tbody>
				</table>
				<div class="control-group right">
					<a id="edit" class="btn disabled">Aanpassen</a>
					<input type="hidden" name="action" value="remove" />
					<input type="submit" id="remove" name="remove" class="btn btn-danger disabled" value="Verwijderen">
				</div>
			</form>
<?php $_smarty_tpl->tpl_vars["script"] = new Smarty_variable("pages-overview.js", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>