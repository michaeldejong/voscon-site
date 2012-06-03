{include file='admin-header.tpl'}
			<h2>Pagina overzicht</h2>
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
			<form action="" method="post">
				<table class="table table-striped table-bordered table-condensed">
					<thead>
						<tr>
							<th class="nano_column"><input type="checkbox" id="all"></th>
							<th>Titel</th>
						</tr>
					</thead>
					<tbody>
{if isset($pages) && count($pages) > 0}
	{foreach $pages as $page}
						<tr>
							<td class="nano_column">
								<input type="checkbox" class="item" name="ids[]" value="{$page->getId()}"></td>
							<td>
								{$page->getTitle()}
								<div class="right">
									<a href="/pages.php?action=move-up&id={$page->getId()}" class="up"><i class="icon-arrow-up"></i></a>
									<a href="/pages.php?action=move-down&id={$page->getId()}" class="down"><i class="icon-arrow-down"></i></a>
								</div>
							</td>
						</tr>
	{/foreach}
{else}
						<tr>
							<td colspan=2><i>Er zijn nog geen pagina's aangemaakt!</i></td>
						</tr>
{/if}
					</tbody>
				</table>
				<div class="control-group right">
					<a id="edit" class="btn disabled">Aanpassen</a>
					<input type="hidden" name="action" value="remove" />
					<input type="submit" id="remove" name="remove" class="btn btn-danger disabled" value="Verwijderen">
				</div>
			</form>
{assign var="script" value="pages-overview.js"}
{include file='admin-footer.tpl'}
