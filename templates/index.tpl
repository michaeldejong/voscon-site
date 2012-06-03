<!DOCTYPE html>
<html>
	<head>
		<title>Voscon BV.</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/css/pages.css" />
	</head>
	<body>
		<div id="canvas">
			<div id="top-menu">
				<div class="container">
					<div id="ribbon">
						<a class="nav" href="/">
							<img src="/img/logo.png" />
						</a>
					</div>
					<div id="menu-bar">
						<a class="rounded nav" href="/">Home</a>
{if isset($pages) && count($pages) > 0}
	{foreach $pages as $page}
						<a class="rounded nav" href="/{$page->getUrl()}/">{$page->getTitle()}</a>
	{/foreach}
{/if}
						<a class="rounded nav" href="/contact/">Contact</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div id="sub-menu-bar">
					<a class="rounded nav" href="#ontwerpen">Ontwerpen</a>
					<a class="rounded nav" href="#constructie">Constructie</a>
					<a class="rounded nav" href="#oplevering">Oplevering</a>
					<a class="rounded nav" href="#service">Service</a>
				</div>
				<div class="block rounded">
					<div class="item content">
						<a name="ontwerpen"></a>
						<h2>Ontwerpen</h2>
						<a class="nav" href="#">Terug naar boven</a>
					</div>
					<div class="item content">
						<a name="constructie"></a>
						<h2>Constructie</h2>
						<a class="nav" href="#">Terug naar boven</a>
					</div>
					<div class="item content">
						<a name="oplevering"></a>
						<h2>Oplevering</h2>
						<a class="nav" href="#">Terug naar boven</a>
					</div>
					<div class="item content">
						<a name="service"></a>
						<h2>Service</h2>
						<a class="nav" href="#">Terug naar boven</a>
					</div>
				</div>
			</div>
		</div>
		<script src="/js/jquery-1.7.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/navigation.js"></script>
	</body>
</html>
