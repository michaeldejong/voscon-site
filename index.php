<?php

	require_once("includes/sessions.php");
	require_once("includes/db.php");
	require_once("smarty.php");
	
	$page = "home";
	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}
	
	$smarty->assign("page_title", $page);
	$smarty->assign("pages", Pages::listPages());
	$smarty->display("index.tpl");
	
	
?>
