<?php
	if (isset($_POST['submit'])) {
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$body = htmlspecialchars($_POST['body']);
		$params = null;
		if (strpos($email, '@') !== false) {
			$params = "-f " . $email;
		}
		if (mail("info@euromet.nl", "Nieuw bericht via euromet.nl",
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
					<div class="item rounded-top background-4" style="min-height: 920px;">
						<div class="header">
							<a name="contact-opnemen"></a>
							<h2>Contact opnemen</h2>
							<a class="nav" href="#">Terug naar boven</a>
						</div>
						<div class="content columns-1-0">
							<table class="table table-condensed">
								<thead>
									<tr><td colspan="2">Euromet</td></tr>
								</thead>
								<tbody>
                                    <tr>
                                        <td><strong>Bezoek adres:</strong></td>
                                        <td><strong>Post adres:</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Energieweg 21F</td>
                                        <td>Energieweg 25</td>
                                    </tr>
                                    <tr>
                                        <td>3133 EB, Vlaardingen</td>
                                        <td>3133 EC, Vlaardingen</td>
                                    </tr>
                                    <tr><td colspan="2"></td></tr>
									<tr><td colspan="2">Fax: 010-4451118</td></tr>
									<tr><td colspan="2">Tel: 010-4451111</td></tr>
									<tr><td colspan="2">E-mail: info@euromet.nl</td></tr>
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
							<iframe class="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11195.083426181875!2d4.337536929120424!3d51.9008015285152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c44afbcee3399b%3A0xc16d4fa50a60806e!2sEuromet+B.V.!5e0!3m2!1snl!2snl!4v1447509949613"></iframe>
						</div>
					</div>
				</div>
			</div>
<?php require("../includes/footer.php"); ?>
