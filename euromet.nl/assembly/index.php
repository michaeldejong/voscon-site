<?php require("../includes/translation.php"); ?>
<?php require("../includes/header.php"); ?>
<?php require("../includes/menu.php"); ?>
			<div class="container">
				<div id="sub-menu-bar">
					<a class="nav" href="/assembly/#montage"><?php if (show('nl')) { ?>Montage<?php } elseif (show('en')) { ?>Assembly<?php } ?></a>
				</div>
				<div id="items">
                    <div class="item background-11" style="min-height: 860px;">
                        <div class="header">
                            <a name="montage"></a>
                            <h2><?php if (show('nl')) { ?>Montage<?php } elseif (show('en')) { ?>Assembly<?php } ?></h2>
                            <a class="nav" href="#"><?php if (show('nl')) { ?>Terug naar boven<?php } elseif (show('en')) { ?>Back to top<?php } ?></a>
                        </div>
                        <div class="content columns-1-1">
<?php if (show('nl')) { ?>
                            <p>Producten worden door onze eigen montage afdeling gemonteerd. De allround constructie-bankwerkers,
                                gekwalificeerde lassers en monteurs zijn in het bezit van een heftruck-, hoogwerker-, veilig hijsen
                                en VCA veiligheidscertificaat. Onze werknemers hebben de beschikking over moderne servicewagens die
                                zijn voorzien van alle benodigde equipment.</p>

                            <p>Wij zijn VCA* gecertificeerd en er wordt een beleid gevoerd gericht op de continue verbetering
                                van VGM en het reduceren van ongevallen, incidenten, materiële- en milieuschade en het
                                bevorderen van een voor een ieder prettige en bovenal veilige werkomgeving.</p>
<?php } elseif (show('en')) { ?>
                            <p>Our products are assembled and installed by our own installers. The allround construction fitters,
                                qualified welders, and installers are all licensed to operate fork-lifts, cherry pickers, and have all
                                obtained safety certificates such as VCA (<i>Safety, Health, and Environment Checklist for Contractors</i>).</p>

                            <p>We are VCA* certified and we focus on continuous improvement of VGM. reducing injuries, incidents,
                                material, and environmental damage, while providing a comfortable and above all safe working environment.</p>
<?php } ?>
                        </div>
					</div>
				</div>
			</div>
<?php require("../includes/footer.php"); ?>
