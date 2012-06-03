<?php

	require_once("includes/sessions.php");
	require_once("includes/db.php");
	require_once("smarty.php");
	
	$GLOBALS["warnings"] = array();
	$GLOBALS["notifications"] = array();
	
	if (!isset($_SESSION["username"])) {
		header("Location: logout.php");
		return;
	}
	
	$action = "overview";
	if (isset($_POST["action"])) {
		$action = $_POST["action"];
	}
	else if (isset($_GET["action"])) {
		$action = $_GET["action"];
	}
	
	if ($action == "overview") {
		showOverview();
	}
	else if ($action == "new") {
		if (processNewPageRequest()) {
			header("Location: pages.php");
			return;
		}
		showCreateNewPage();
	}
	else if ($action == "edit") {
		showEditPage();
	}
	else if ($action == "remove") {
		deletePages();
		header("Location: pages.php");
		return;
	}
	else if ($action == "move-up") {
		moveUp();
		header("Location: pages.php");
		return;
	}
	else if ($action == "move-down") {
		moveDown();
		header("Location: pages.php");
		return;
	}
	
	function showOverview() {
		$smarty = new Smarty();
		$smarty->assign("notifications", $GLOBALS["notifications"]);
		$smarty->assign("warnings", $GLOBALS["warnings"]);
		$smarty->assign("pages", Pages::listPages());
		$smarty->display("pages-overview.tpl");
	}
	
	function showCreateNewPage() {
		$smarty = new Smarty();
		$smarty->assign("notifications", $GLOBALS["notifications"]);
		$smarty->assign("warnings", $GLOBALS["warnings"]);
		$smarty->assign("pages", Pages::listPages());
		$smarty->display("pages-new.tpl");
	}
	
	function processNewPageRequest() {
		if (!isset($_POST["create"])) {
			return false;
		}
		
		if (!isset($_POST["title"]) || strlen($_POST["title"]) < 4) {
			array_push($GLOBALS["warnings"], "De titel moet uit minimaal 4 karakters bestaan!");
			return false;
		}
		
		if (!isset($_POST["after"]) || !preg_match("/^[0-9]+$/", $_POST["after"])) {
			array_push($GLOBALS["warnings"], "Het veld 'Invoegen na' heeft een ongeldige waarde!");
			return false;
		}
		
		Pages::incrementRankOfPages($_POST["after"]);

		$page = new Page();
		$page->setTitle($_POST["title"]);
		$page->setRank($_POST["after"]);
		$page->save();
		
		return true;
	}
	
	function showEditPage() {
		if (isset($_POST["edit"])) {
			$page = Pages::loadPage($_GET['id']);
			$page->setTitle($_POST["title"]);
			$page->save();
			header("Location: pages.php");
		}
		else {
			$smarty = new Smarty();
			$smarty->assign("page", Pages::loadPage($_GET['id']));
			$smarty->display("pages-edit.tpl");
		}
	}
	
	function deletePages() {
		if (!isset($_POST["remove"])) {
			return;
		}
		
		if (!isset($_POST["ids"])) {
			array_push($GLOBALS["warnings"], "Er zijn geen pagina's geselecteerd om te verwijderen!");
			return false;
		}
		
		$ids = $_POST["ids"];
		if (!is_array($_POST["ids"])) {
			$ids = array($_POST["ids"]);
		}
		
		Pages::deletePages($ids);
		
		return true;
	}
	
	function moveUp() {
		if (!isset($_GET["id"]) || !preg_match("/^[0-9]+$/", $_GET["id"])) {
			return;
		}
		
		$pages = listPages();
		$prevRank = 0;
		$prevId = 0;
		
		for ($i = 0; $i < count($pages); $i++) {
			$page = $pages[$i];
			$rank = $page->getRank();
			$id = $page->getId();
			
			if ($id == $_GET["id"]) {
				swap($pages, $id, $prevId);
				return;
			}
			
			$prevId = $id;
			$prevRank = $rank;
		}
	}
	
	function moveDown() {
		if (!isset($_GET["id"]) || !preg_match("/^[0-9]+$/", $_GET["id"])) {
			return;
		}
		
		$id = 0;
		$rank = 0;
		$prevId = 0;
		$prevRank = 0;
		$matched = false;
		
		$pages = listPages();
		for ($i = 0; $i < count($pages); $i++) {
			$page = $pages[$i];
			$rank = $page->getRank();
			$id = $page->getId();
			
			if ($matched) {
				swap($pages, $id, $prevId);
				return;
			}
			
			if ($id == $_GET["id"]) {
				$matched = true;
			}
			
			$prevId = $id;
			$prevRank = $rank;
		}

		if ($matched) {
			swap($pages, $id, $prevId);
		}
	}
	
	function swap($pages, $id1, $id2) {
		$page1 = getPage($pages, $id1);
		$page2 = getPage($pages, $id2);
		
		$page1->swapRankWith($page2);
		
		$page1->save();
		$page2->save();
	}
	
	function getPage($pages, $id) {
		for ($i = 0; $i < count($pages); $i++) {
			$current = $pages[$i];
			if ($current->getId() == $id) {
				return $current;
			}
		}
		return null;
	}
	
?>