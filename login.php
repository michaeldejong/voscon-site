<?php

	define("salt", "==A#8(@n.,si!");

	require_once("includes/sessions.php");
	require_once("includes/db.php");
	require_once("smarty.php");

	if (isset($_SESSION["username"])) {
		displayAlreadyLoggedInScreen();
		return;
	} 
	else if (isset($_POST) && isset($_POST["username"]) && isset($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$username_safe = mysql_real_escape_string($username);
		$password_safe = mysql_real_escape_string(sha1($password . constant("salt") . $username));
		
		$sql = "SELECT * FROM users WHERE username = '" . $username_safe
			 . "' AND password = '" . $password_safe . "' LIMIT 1;";
		
		$query = mysql_query($sql);
		if (mysql_num_rows($query) == 0) {
			displayFailedLoginAttempt();
			return;
		}
		
		$_SESSION["username"] = mysql_result($query, 0, "username");
		header("Location: pages.php");
	}
	else {
		displayLoginScreen();
		return;
	}
	
	function displayAlreadyLoggedInScreen() {
		$smarty = new Smarty();
		$smarty->assign("message", "U bent al ingelogd!");
		$smarty->assign("hide_login_form", true);
		$smarty->display("login.tpl");
	}
	
	function displayFailedLoginAttempt() {
		$smarty = new Smarty();
		$smarty->assign("error", "Ongeldige gebruikersnaam / wachtwoord combinatie!");
		$smarty->assign("hide_login_form", false);
		$smarty->display("login.tpl");
	}
	
	function displayLoginScreen() {
		$smarty = new Smarty();
		$smarty->assign("hide_login_form", false);
		$smarty->display("login.tpl");
	}

?>