<?php require("includes/translation.php"); ?>
<?php require("includes/header.php"); ?>
<?php require("includes/menu.php"); ?>
		<div class="container">
			<div id="menu-image-slider" class="image-slider">
				<div class="slider-container">
					<div class="layover">
						<img src="/img/certificates.png" />
					</div>
					<div class="images">
						<img class="active" src="/img/main-slider-0.jpg" />
                        <img class="inactive" src="/img/main-slider-1.jpg" />
                        <img class="inactive" src="/img/main-slider-2.jpg" />
						<img class="inactive" src="/img/main-slider-3.jpg" />
					</div>
					<div class="controls">
						<i class="active"></i> 
						<i class="inactive"></i>
                        <i class="inactive"></i>
                        <i class="inactive"></i>
                    </div>
				</div>
			</div>
			<div id="items">
				<div class="item rounded background-4" style="min-height: 920px;">
					<div class="header">
						<a name="main"></a>
						<h2>Euromet</h2>
						<a class="nav" href="#"><?php if (show('nl')) { ?>Terug naar boven<?php } elseif (show('en')) { ?>Back to top<?php } ?></a>
					</div>
<?php if (show('nl')) { ?>
					<div class="content columns-1-1"> 
                        <p>Euromet B.V. is een allround constructie- en servicebedrijf dat zich heeft gespecialiseerd
                            in het ontwerpen, fabriceren en monteren van allerhande constructiewerk, leidingen en
                            supporting alsmede plaatwerk.</p>

                        <p>Wij bieden de mogelijkheid aan onze afnemers om hun volledige wens over te nemen en in
                            eigen beheer uit te voeren. Vanaf ontwerp tot afname of montage (eventueel op locatie)
                            heeft u &eacute;&eacute;n aanspreekpunt.Het ondersteunen van klanten en partners bij het
                            realiseren van hun doelstellingen en het aangaan van langdurige relaties met afnemers en
                            leveranciers op basis van vertrouwen staat centraal. Onze opdrachtgevers zijn veelal
                            eindgebruikers in de (petro-)chemie, on- en offshore, industri&euml;le dienstverlening
                            en aannemers.</p>

                        <p>Met ingang van 01 November 2014 is Euromet BV overgenomen door de directie van Voscon BV.
                            Voscon BV is een bekende naam op het gebied van constructiewerken en heeft, net als
                            Euromet BV, kwaliteit en service hoog in het vaandel staan. Euromet BV zal blijven
                            doorgaan als een volledige dochteronderneming van Voscon BV. Meer informatie kunt u
                            vinden op de website van <a href="http://voscon.nl">Voscon BV</a>.</p>
					</div>
<?php } elseif (show('en')) { ?>
					<div class="content columns-1-1">
						<p>Euromet B.V. is an allround construction and service company that has specialized itself in
							designing, constructing, and assembling all kinds of constructions, piping, as well as
							sheet working.</p>

						<p>We offer the option to our clients, to in-source all their construction and assembly desires.
							From design to deliver or assembly (even on location), you'll have one liason. Supporting
							our customers and partners in realizing their targets and forming long-term relationships
							with both our customers and suppliers with a central basis of trust. Our clients are
							usually also the end-users of our works in (petro-)chemical, on and offshore, industrial
							services and contractors.</p>

						<p>Starting 1st of November 2014, Euromet BV. has been acquired by Voscon BV. Voscon BV. is a
							well-known name when it comes to construction works, and has just like Euromet BV. a focus
							on quality and service. Euromet BV. will continue to operate as an independent subsidiary
							of Voscon BV. More information can be found on the website of
							<a href="http://voscon.nl">Voscon BV</a>.</p>
					</div>
<?php } ?>
				</div>
			</div>
		</div>
<?php require("includes/footer.php"); ?>
