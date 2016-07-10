<?php require("../includes/translation.php"); ?>
<?php require("../includes/header.php"); ?>
<?php require("../includes/menu.php"); ?>
			<div class="container">
				<div id="sub-menu-bar">
					<a class="nav" href="/engineering/#engineering">Engineering</a>
				</div>
				<div id="items">
					<div class="item background-14 rounded" style="min-height: 900px;">
						<div class="header">
							<a name="engineering"></a>
							<h2>Engineering</h2>
							<a class="nav" href="#"><?php if (show('nl')) { ?>Terug naar boven<?php } elseif (show('en')) { ?>Back to top<?php } ?></a>
						</div>
						<div class="content columns-1-1">
<?php if (show('nl')) { ?>
                            Euromet BV heeft zijn eigen engineering afdeling in huis. Onze engineers bedenken,
                            ontwikkelen, tekenen en berekenen eenvoudige en complexe oplossingen. Wij kunnen U
                            ondersteunen in alle fases: van meedenken over het proces, ook wel concept-engineering,
                            tot het vormgeven ervan. Bij het maken van opstellingen, de lay-out, voor complete
                            productielijnen tot detailwerk. Met gebruikmaking van 3D-software van SolidWorks, zijn
                            we in staat uw project compleet vorm te geven en de precieze maatvoering en detaillering
                            aan te leveren. Bovendien waarborgt onze aanpak dat u goed het overzicht weet te houden,
                            hoe complex een project ook is. In het stadium van de detail engineering beperken we ons
                            niet alleen tot het cre&euml;ren van de optimale condities voor de bouw of verbouw. Euromet BV
                            houdt ook al rekening met toekomstig onderhoud.

                            <div style="margin-top: 10px;">
                                <a href="http://www.youtube.com/watch?v=YPf8l9yYvM8&hd=1" target="_blank">
                                    <img src="/img/play-icon-dark.png">
                                    <h3 style="black: white; vertical-align: -15px; display: inline-block;">Bekijk een impressie van <br/>ons 3D-ontwerp process</h3>
                                </a>
                            </div>
<?php } elseif (show('en')) { ?>
							Euromet BV has its own engineering department in-house. Our engineers conceive, develop,
							draw, and calculate both simple and complex solutions. We can support you in all phases of
							development: from thinking along about the process, also known as concept-engineering, to
							shaping it. With building arrangements, and layouts, from complete production lines to
							details. Using SolidWorks' 3D-software we are able to give shape to your complete project,
							and build and deliver it with precision and an eye for detail. In addition, our approach
							ensures that you'll have a good overview no matter how complex the project is. At the stage
							of detail engineering, we do not limit ourselves to creating the optimal conditions for
							construction or reconstruction. Euromet BV even accounts for future maintenance.

							<div style="margin-top: 10px;">
								<a href="http://www.youtube.com/watch?v=YPf8l9yYvM8&hd=1" target="_blank">
									<img src="/img/play-icon-dark.png">
									<h3 style="black: white; vertical-align: -15px; display: inline-block;">View an impression of <br/>our 3D-design process</h3>
								</a>
							</div>
<?php } ?>
                        </div>
					</div>
				</div>
			</div>
<?php require("../includes/footer.php"); ?>
