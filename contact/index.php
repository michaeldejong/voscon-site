<?php
	if (isset($_POST['submit'])) {
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$body = htmlspecialchars($_POST['body']);

		$params = null;
		if (strpos($email, '@') !== false) {
			$params = "-f " . $email;
		}

		if (mail("michaelj@minicom.nl", "Nieuw bericht via voscon.nl",
			"E-mail: " . $email . "\nTelefoonnummer: " . $phone . "\n\n" . $body, null, $params)) {

			$success = "Het bericht is verstuurd. We nemen zo snel mogelijk contact met u op!";
		}
		else {
			$error = "Het bericht kon helaas niet worden verstuurd. Neem voor vragen alstublieft contact op met ons per telefoon.";
		}
	}
?>
<?php require("../includes/header.php"); ?>
<?php require("../includes/menu.php"); ?>
			<div class="container">
				<div id="sub-menu-bar">
					<a class="nav" href="/contact/#contact-opnemen">Contact opnemen</a>
					<a class="nav" href="/contact/#contactformulier">Contactformulier</a>
					<a class="nav" href="/contact/#routebeschrijving">Routebeschrijving</a>
				</div>
<?php if (isset($error)) { ?>
				<div class="alert alert-danger"><?php echo $error; ?></div>
<?php } if (isset($success)) { ?>
				<div class="alert alert-success"><?php echo $success; ?></div>
<?php } ?>
				<div id="items">
					<div class="item rounded-top background-4" style="min-height: 680px;">
						<div class="header">
							<a name="contact-opnemen"></a>
							<h2>Contact opnemen</h2>
							<a class="nav" href="#">Terug naar boven</a>
						</div>
						<div class="content columns-1-0">
							<table class="table table-condensed">
								<thead>
									<tr><td>Voscon B.V.</td></tr>
								</thead>
								<tbody>
									<tr><td>Energieweg 25</td></tr>
									<tr><td>3133 EC, Vlaardingen</td></tr>
									<tr><td></td></tr>
									<tr><td>Fax: 010-4451118</td></tr>
									<tr><td>Tel: 010-4451111</td></tr>
									<tr><td>E-mail: info@voscon.nl</td></tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="item">
						<div class="header">
							<a name="contactformulier"></a>
							<h2>Contactformulier</h2>
							<a class="nav" href="#">Terug naar boven</a>
						</div>
						<div class="content">
							<form method="post">
								<div class="control-group">
									<label for="email">E-mailadres</label>
									<div class="controls">
										<input type="email" class="form-control" name="email" id="email" placeholder="E-mailadres">
									</div>
								</div>
								<div class="control-group">
									<label for="phone">Telefoonnummer</label>
									<div class="controls">
										<input type="text" class="form-control" name="phone" id="phone" placeholder="Telefoonnummer">
									</div>
								</div>
								<div class="control-group">
									<label for="body">Bericht</label>
									<div class="controls">
										<textarea class="form-control" name="body" id="body"></textarea>
									</div>
								</div>
								<button type="submit" class="btn" name="submit">Versturen</button>
							</form>
						</div>
					</div>
					<div class="item">
						<div class="header">
							<a name="routebeschrijving"></a>
							<h2>Routebeschrijving</h2>
							<a class="nav" href="#">Terug naar boven</a>
						</div>
						<div class="content">
							<iframe class="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=%22voscon+V.b.s.%22+B.V.,+Energieweg,+Vlaardingen,+Nederland&amp;aq=0&amp;oq=voscon&amp;sll=37.0625,-95.677068&amp;sspn=48.50801,76.025391&amp;ie=UTF8&amp;hq=voscon-vbs+bv&amp;hnear=Energieweg,+Vlaardingen,+Nederland&amp;ll=51.903654,4.325599&amp;spn=0.037166,0.074244&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=3677420965141196609&amp;output=embed"></iframe>
						</div>
					</div>
				</div>
			</div>
<?php require("../includes/footer.php"); ?>
