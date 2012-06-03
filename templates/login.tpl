<!DOCTYPE html>
<html>
	<head>
		<title>Voscon BV.</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/css/admin.css" />
	</head>
	<body>
		<div class="content-container main_container">
			<div class="content block rounded">
				<form action="" method="post">
{if isset($error)}
					<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						<strong>{$error}</strong>
					</div>
{/if}
{if isset($message)}
					<div class="alert alert-success">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						<strong>{$message}</strong>
					</div>
{/if}
{if !isset($hide_login_form) || !$hide_login_form}
					<div>
						<label for="username">Gebruikersnaam:</label>
						<input type="text" name="username" />
						<label for="password">Wachtwoord:</label>
						<input type="password" name="password" />
					</div>
					<div>
						<button type="submit" class="btn">Inloggen</button>
					</div>
{/if}
				</form>
			</div>
		</div>
		<script src="/js/jquery-1.7.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>
