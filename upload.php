<?php

	set_time_limit(300);

	define("destination", "media/");

	require_once("includes/sessions.php");
	require_once("includes/db.php");
	require_once("smarty.php");
	
	$warnings = array();
	$notifications = array();
	
	if (!isset($_SESSION["username"])) {
		header("Location: logout.php");
		return;
	}

	if (isset($_POST)) {
		processFileUpload();
	}
	
	$smarty = new Smarty();
	$smarty->assign("notifications", $notifications);
	$smarty->assign("warnings", $warnings);
	$smarty->assign("max_limit", determineMaxUploadSize());
	$smarty->display("upload.tpl");
	
	function processFileUpload() {
		if (isset($_FILES["upload"])) {
			$upload = $_FILES["upload"];
			$extension = getFileExtension($upload["name"]);
			$destinationFilename = constant("destination") . time() . "." . $extension;
		
			if ($extension != "jpg") {
				array_push($warnings, "Alleen JPG bestanden kunnen worden verzonden!");
				return;
			}
		
			if (move_uploaded_file($upload["tmp_name"], $destinationFilename)) {
				if (validateUpload($destinationFilename)) {
					array_push($notifications, "Het bestand is succesvol verzonden.");
					return;
				}
			}
		
			array_push($warnings, "Kon het verzonden bestand niet verwerken!");
		}
		else {
			array_push($warnings, "Kon het gespecificeerde bestand niet verzenden, waarschijnlijk is deze te groot!");
		}
	}
	
	function determineMaxUploadSize() {
		$max_upload = (int)(ini_get('upload_max_filesize'));
		$max_post = (int)(ini_get('post_max_size'));
		$memory_limit = (int)(ini_get('memory_limit'));
		return min($max_upload, $max_post, $memory_limit);
	}
	
	function getFileExtension($filename) {
		$chunks = explode(".", strtolower($filename));
		return $chunks[count($chunks) - 1];
	}
	
	function validateUpload($filename) {
		return true;
	}

?>