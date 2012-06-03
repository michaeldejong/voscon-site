{include file='admin-header.tpl'}
			<h2>Pagina aanpassen</h2>
{include file='notifications.tpl'}
			<form class="form-inline" action="" method="post">
				<div class="control-group">
					<label class="control-label" for="title">Titel</label>
					<input type="hidden" id="id" name="id" value="{$page->getId()}">
					<input type="text" id="title" name="title" class="xlarge" value="{$page->getTitle()}">
				</div>
				<div class="control-group right">
					<input type="submit" id="edit" name="edit" class="btn btn-success" value="Aanpassen">
				</div>
			</form>
{include file='admin-footer.tpl'}
