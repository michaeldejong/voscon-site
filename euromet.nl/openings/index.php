<?php require("../includes/translation.php"); ?>
<?php require("../includes/header.php"); ?>
<?php require("../includes/menu.php"); ?>
			<div class="container">
				<div id="sub-menu-bar">
					<a class="nav" href="#open-sollicitaties"><?php if (show('nl')) { ?>Open sollicitaties<?php } elseif (show('en')) { ?>Applying<?php } ?></a>
				</div>
                    <div id="items">
                        <div class="item rounded-bottom">
                            <div class="header">
                                <a name="open-sollicitaties"></a>
                                <h2><?php if (show('nl')) { ?>Open sollicitaties<?php } elseif (show('en')) { ?>Applying<?php } ?></h2>
								<a class="nav" href="#"><?php if (show('nl')) { ?>Terug naar boven<?php } elseif (show('en')) { ?>Back to top<?php } ?></a>
                            </div>
<?php if (show('nl')) { ?>
                            <div class="content columns-1">
                                <p>Euromet heeft op dit moment geen openstaande vacatures.</p>
                                <p>Voor een open sollicitatie kunt u uw CV en motivatie opsturen naar
                                    <a href="mailto:n.boender@voscon.nl">mevr. N. Boender</a></p>
                            </div>
<?php } elseif (show('en')) { ?>
							<div class="content columns-1">
								<p>Euromet currently does not have any openings.</p>
								<p>If you wish to submit an open job application, please send your CV and motivation to
									<a href="mailto:n.boender@voscon.nl">N. Boender</a></p>
							</div>
<?php } ?>
                        </div>
                    </div>
				</div>
			</div>
<?php require("../includes/footer.php"); ?>
