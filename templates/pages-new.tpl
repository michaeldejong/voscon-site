{include file='admin-header.tpl'}
			<h2>Nieuwe pagina</h2>
{if isset($warnings)}
	{foreach $warnings as $warning}
			<div class="alert alert-error">{$warning}</div>
	{/foreach}
{/if}

{if isset($notifications)}
	{foreach $notifications as $notification}
			<div class="alert alert-success">{$notification}</div>
	{/foreach}
{/if}
			<form class="form-inline" action="" method="post">
				<div class="control-group">
					<label class="control-label" for="title">Titel</label>
					<input type="text" id="title" name="title" class="xlarge">
				</div>
{if isset($pages) && count($pages) > 0}
				<div class="control-group">
					<label class="control-label" for="after">Invoegen na</label>
					<select name="after" class="xlarge">
	{foreach $pages as $page name=pages}
		{if $smarty.foreach.pages.last}
						<option value="{$page->getRank()}" selected="selected">{$page->getTitle()}</option>
		{else}
						<option value="{$page->getRank()}">{$page->getTitle()}</option>
		{/if}
	{/foreach}
					</select>
				</div>
{else}
				<input type="hidden" name="after" value="0">
{/if}
				<div class="control-group right">
					<input type="submit" id="create" name="create" class="btn btn-success" value="Aanmaken">
				</div>
			</form>
{include file='admin-footer.tpl'}
