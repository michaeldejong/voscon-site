<?php require("../includes/translation.php"); ?>
<?php require("../includes/header.php"); ?>
<?php require("../includes/menu.php"); ?>
			<div class="container">
				<div id="sub-menu-bar">
					<a class="nav" href="/production/#production"><?php if (show('nl')) { ?>Productie<?php } elseif (show('en')) { ?>Production<?php } ?></a>
				</div>
				<div id="items">
					<div class="item background-10 rounded-top" style="padding-bottom: 500px;">
						<div class="header">
							<a name="production"></a>
							<h2><?php if (show('nl')) { ?>Productie<?php } elseif (show('en')) { ?>Production<?php } ?></h2>
							<a class="nav" href="#"><?php if (show('nl')) { ?>Terug naar boven<?php } elseif (show('en')) { ?>Back to top<?php } ?></a>
						</div>
                        <div class="content columns-1">
<?php if (show('nl')) { ?>
                            <p>Euromet B.V. beschikt over een goed uitgeruste werkplaats met een ruim buitenterrein.
                                Het verwerken van staal en roestvaststaal gebeurt in gescheiden werkplaatsen.</p>
                                <ul>
                                    <li>Lassen doen wij onder andere met MIG/MAG en TIG.</li>
                                    <li>Platen kunnen wij in eigen beheer knippen, ponzen en zetten.</li>
                                    <li>Tevens hebben we o.a. een zaagbank, kolomboor en overige machines voor dagelijks gebruik in onze werkplaats.</li>
                                </ul>
                            </p>

                            <p>Voorbeelden van veel voorkomende werkzaamheden die in onze werkplaats plaatsvinden zijn:</p>
							<ul>
								<li>Supporting in staal of roestvrijstaal naar ontwerp van de klant of van onze eigen engineering afdeling.</li>
								<li>Constructiewerk op basis van plaat en/of profiel in staal, roestvrijstaal en aluminium zoals fundaties,
									bordessen, machine frames en draagconstructies. Alles in &eacute;&eacute;n hand: engineering, productie,
									conservering en montage, dus optimale effici&euml;ntie en flexibiliteit.</li>
							</ul>
<?php } elseif (show('en')) { ?>
                            <p>Euromet B.V. posesses a well-equiped workshop with a spacious outside terrain.
                                Processing steel and stainless steel happens in separated workshop areas.</p>
                                <ul>
                                    <li>We can weld with both MIG/MAG and TIG.</li>
                                    <li>We can cut, punch, and place sheets ourselves.</li>
                                    <li>In addition we have our own saw, drill, and other machines for daily use in our workshop.</li>
                                </ul>
                            </p>

                            <p>Example of common activities that occur in our workshop are:</p>
							<ul>
								<li>Supporting in steel and stainless steel from the customer's design to our own engineering department.</li>
								<li>Construction based on sheets and/or profiles of steel, stainless steel, or aluminium into foundations,
									terrasses, machine frames en load-bearing constructions. Everything done in one place: engineering, production,
									maintenance and assembly. In short, optimal efficiency and flexibility.</li>
							</ul>
<?php } ?>
                        </div>
		            </div>
                </div>
            </div>
<?php require("../includes/footer.php"); ?>
