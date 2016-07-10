<?php require("../includes/translation.php"); ?>
<?php require("../includes/header.php"); ?>
<?php require("../includes/menu.php"); ?>
			<div class="container">
				<div id="sub-menu-bar">
				</div>
				<div id="items">
                    <div class="item">
                        <div class="header">
                            <a name="cargo-tec"></a>
                            <h2><?php if (show('nl')) { ?>Projecten<?php } elseif (show('en')) { ?>Projects<?php } ?></h2>
                            <a class="nav" href="#"><?php if (show('nl')) { ?>Terug naar boven<?php } elseif (show('en')) { ?>Back to top<?php } ?></a>
                        </div>
                        <div class="content projects">
                            <div class="project-bar">
                                <a href="/projects/filterkast/">
                                    <div class="project-item" style="background-image: url(/projecten/filterkast.jpg);">
                                        <div class="project-item-overlay">
                                            <div class="project-item-title"><?php if (show('nl')) { ?>Filterkast<?php } elseif (show('en')) { ?>Filter cabinet<?php } ?></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/projects/filtertoren/" class="pull-right">
                                    <div class="project-item" style="background-image: url(/projecten/filtertoren.jpg);">
                                        <div class="project-item-overlay">
                                            <div class="project-item-title"><?php if (show('nl')) { ?>Filtertoren<?php } elseif (show('en')) { ?>Filter tower<?php } ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="project-bar">
                                <a href="/projects/ponton/">
                                    <div class="project-item" style="background-image: url(/projecten/ponton.jpg);">
                                        <div class="project-item-overlay">
                                            <div class="project-item-title"><?php if (show('nl')) { ?>Drijvens ponton<?php } elseif (show('en')) { ?>Floating pontoon<?php } ?></div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/projects/spiltrap/" class="pull-right">
                                    <div class="project-item" style="background-image: url(/projecten/spiltrap.jpg);">
                                        <div class="project-item-overlay">
                                            <div class="project-item-title"><?php if (show('nl')) { ?>Spiltrap<?php } elseif (show('en')) { ?>Spiral staircase<?php } ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
<?php require("../includes/footer.php"); ?>
