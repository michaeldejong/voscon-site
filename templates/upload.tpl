{include file='admin-header.tpl'}
			<h2>Media uploaden</h2>
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

			Merk op dat enkel JPG bestanden van maximaal {$max_limit} MB kunnen worden verzonden!
			<form action="" method="post" enctype="multipart/form-data">
				<div>
					<input type="file" name="upload" />
				</div>
				<button type="submit" class="btn">Uploaden</button>
			</form>
{include file='admin-footer.tpl'}
