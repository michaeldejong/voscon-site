<?php

	require_once("includes/sessions.php");
	require_once("includes/db.php");

	session_destroy();
	header("Location: /");

?>