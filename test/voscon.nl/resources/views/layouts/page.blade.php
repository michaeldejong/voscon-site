<!DOCTYPE html>
<html>
	<head>
		<title>Euromet BV.</title>
		<meta name="viewport" content="width=960">
		<link rel="stylesheet" href="/css/app.css" />
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="content">
			<div id="top-menu">
				<div class="container">
					<div id="ribbon">
						<a href="/"><img src="/images/logo.png" /></a>
					</div>
					<div class="menu-container">
						<div id="menu-bar">
							<a class="menu-btn" href="/engineering">{{ trans('menu.engineering') }}</a>
							<a class="menu-btn" href="/production">{{ trans('menu.production') }}</a>
							<a class="menu-btn" href="/assembly">{{ trans('menu.assembly') }}</a>
							<a class="menu-btn" href="/service">{{ trans('menu.service') }}</a>
							<a class="menu-btn" href="/certification">{{ trans('menu.certification') }}</a>
							<a class="menu-btn" href="/projects">{{ trans('menu.projects') }}</a>
							<a class="menu-btn" href="/openings">{{ trans('menu.openings') }}</a>
							<a class="menu-btn" href="/contact">{{ trans('menu.contact') }}</a>
						</div>
					</div>
				</div>
			</div>
            @yield('content')
            <div id="footer">
                <div class="container">
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <ul>
                            <li><a class="nav" href="/engineering">{{ trans('menu.engineering') }}</a></li>
                            <li><a class="nav" href="/engineering#engineering">{{ trans('menu.engineering') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <ul>
                            <li><a class="nav" href="/production"><a class="nav" href="#">{{ trans('menu.production') }}</a></a></li>
                            <li><a class="nav" href="/production#production">{{ trans('menu.production') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <ul>
                            <li><a class="nav" href="/assembly">{{ trans('menu.assembly') }}</a></li>
                            <li><a class="nav" href="/assembly#assembly">{{ trans('menu.assembly') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <ul>
                            <li><a class="nav" href="/certification">{{ trans('menu.certification') }}</a></li>
                            <li><a class="nav" href="/certification#iso9001">ISO-9001</a></li>
                            <li><a class="nav" href="/certification#vca">VCA*</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <ul>
                            <li><a class="nav" href="/service">{{ trans('menu.service') }}</a></li>
                            <li><a class="nav" href="/service#service">{{ trans('menu.service') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <ul>
                            <li><a class="nav" href="/projects">{{ trans('menu.projects') }}</a></li>
                            <li><a class="nav" href="/projects/filter-cabinet">{{ trans('menu.projects.filter_cabinet') }}</a></li>
                            <li><a class="nav" href="/projects/filtration-tower">{{ trans('menu.projects.filtration_tower') }}</a></li>
                            <li><a class="nav" href="/projects/floating-pontoon">{{ trans('menu.projects.floating_pontoon') }}</a></li>
                            <li><a class="nav" href="/projects/spiral-staircase">{{ trans('menu.projects.spiral_staircase') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <ul>
                            <li><a class="nav" href="/openings">{{ trans('menu.openings') }}</a></li>
                            <li><a class="nav" href="/openings#apply">{{ trans('menu.openings.applying') }}</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                        <ul>
                            <li><a class="nav" href="/contact">{{ trans('menu.contact') }}</a></li>
                            <li><a class="nav" href="/contact#contact-us">{{ trans('menu.contact.contact_us') }}</a></li>
                            <li><a class="nav" href="/contact#contactform">{{ trans('menu.contact.contactform') }}</a></li>
                            <li><a class="nav" href="/contact#directions">{{ trans('menu.contact.directions') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 language-selector">
                    <form action="" method="get">
                        <label>{{ trans('menu.switch_to_lang') }}:</label><br />
                        <select name="lang" onchange="submit()" style="width: 150px;">
                            <?php if (App::getLocale() == 'nl') { ?>
                                <option value="nl">{{ trans('menu.switch_to_lang.dutch') }}</option>
                                <option value="en">{{ trans('menu.switch_to_lang.english') }}</option>
                            <?php } else { ?>
                                <option value="en">{{ trans('menu.switch_to_lang.english') }}</option>
                                <option value="nl">{{ trans('menu.switch_to_lang.dutch') }}</option>
                            <?php } ?>
                        </select>
                    </form>
                </div>
            </div>
		</div>
        <script src="/javascript/jquery.min.js"></script>
        <script src="/javascript/bootstrap.min.js"></script>
        <script src="/javascript/navigation.js"></script>
        <script src="/javascript/slider.js"></script>
	</body>
</html>
