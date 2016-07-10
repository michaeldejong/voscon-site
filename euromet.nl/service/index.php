<?php require("../includes/translation.php"); ?>
<?php require("../includes/header.php"); ?>
<?php require("../includes/menu.php"); ?>
			<div class="container">
				<div id="sub-menu-bar">
					<a class="nav" href="/service/#service">Service</a>
				</div>
				<div id="items">
					<div class="item background-12 rounded-top" style="min-height: 750px;">
						<div class="header">
							<a name="service"></a>
							<h2>Service</h2>
							<a class="nav" href="#"><?php if (show('nl')) { ?>Terug naar boven<?php } elseif (show('en')) { ?>Back to top<?php } ?></a>
						</div>
<?php if (show('nl')) { ?>
						<div class="content columns-1-1">
                            Euromet biedt de industrie een service die zich onderscheidt in betrouwbaarheid, kwaliteit
                            en snelheid. Het verhelpen van een storing of repareren van schade aan een installatie is
                            &eacute;&eacute;n, maar wij beschouwen het zoeken naar de beste oplossing om toekomstige
                            storingen te voorkomen als ons eigenlijke werk. Euromet's service staat voor een
                            oplossingsgerichte dienstverlening door toegewijde, gekwalificeerde vakmensen. Wij doen er
                            alles aan om u snel van dienst te zijn met het oplossen van reparaties en storingen en/of
                            het leveren van onderdelen. U wordt met voorrang behandeld bij storingen en reparaties als u
                            in het bezit bent van een onderhoudscontract (ook buiten werktijd!)
                        </div>
<?php } elseif (show('en')) { ?>
						<div class="content columns-1-1">
							Euromet offers the industry a service which distinguishes itself in reliability, quality,
							and speed. Resolving a malfunction, or repairing a damaged installation is one thing, but
							we consider looking for the best solution, and preventing future malfunctions to be our
							actual job. Euromet's service stands for a solution-focused approach to service by
							dedicated and qualified craftsmen. We do everything to be of service, and help you as
							quickly as possible with repairs, malfunctions, or delivering parts. You'll receive priority
							treatment when you posses a maintenance constract (even outside of office hours).
						</div>
<?php } ?>
					</div>
				</div>
			</div>
<?php require("../includes/footer.php"); ?>
