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