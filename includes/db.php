<?php

	error_reporting(E_ALL);

	mysql_select_db("voscon", mysql_connect("localhost", "root", "root")) or die(mysql_error());
	
	class Pages {
		
		static function loadPage($id) {
			$safeId = mysql_real_escape_string(htmlentities(strip_tags($id)));
			$result = mysql_query("SELECT * FROM pages WHERE id = '".$safeId."' LIMIT 1;");
			if($row = mysql_fetch_assoc($result)) {
				$page = new Page();
				$page->setId($row["id"]);
				$page->setTitle($row["title"]);
				$page->setRank($row["rank"]);
				return $page;
			}
			return null;
		}
	
		static function listPages() {
			$pages = array();
			$result = mysql_query("SELECT * FROM pages ORDER BY rank ASC;");
			while($row = mysql_fetch_assoc($result)) {
				$page = new Page();
				$page->setId($row["id"]);
				$page->setTitle($row["title"]);
				$page->setRank($row["rank"]);
				array_push($pages, $page);
			}
			return $pages;
		}
		
		static function incrementRankOfPages($rank) {
			$safeRank = mysql_real_escape_string(htmlentities(strip_tags($rank)));
			mysql_query("UPDATE pages SET rank = rank + 1 WHERE rank > '".$safeRank."';");
		}
		
		static function deletePages($ids) {
			for ($i = 0; $i < count($ids); $i++) {
				$ids[$i] = mysql_real_escape_string(htmlentities(strip_tags($ids[$i])));
			}
			
			mysql_query("DELETE FROM pages WHERE id IN ('" . implode("', '", $ids) . "');");
		}
	}
		
	class Page {
		
		private $id;
		private $title;
		private $rank;
		
		public function setId($newId) {
			$this->id = $newId;
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function setTitle($newTitle) {
			$this->title = $newTitle;
		}
		
		public function getUrl() {
			$url = strtolower($this->title);
			$url = str_replace("&amp;", "en", $url);
			$url = str_replace(" ", "-", $url);
			return $url;
		}
		
		public function getTitle() {
			return $this->title;
		}
		
		public function setRank($newRank) {
			$this->rank = $newRank;
		}
		
		public function getRank() {
			return $this->rank;
		}
		
		public function swapRankWith(Page $other) {
			$myRank = getRank();
			setRank($other->getRank());
			$other->setRank($myRank);
		}
		
		public function save() {
			$safeId 	= mysql_real_escape_string(htmlentities(strip_tags($this->id)));
			$safeTitle 	= mysql_real_escape_string(htmlentities(strip_tags($this->title)));
			$safeRank 	= mysql_real_escape_string(htmlentities(strip_tags($this->rank)));
			
			if (isset($this->id)) {
				mysql_query("UPDATE pages SET title = '".$safeTitle."', rank = '".$safeRank."' WHERE id = '".$safeId."' LIMIT 1;");
			}
			else {
				mysql_query("INSERT INTO pages (title, rank) VALUES ('".$safeTitle."', '".$safeRank."');");
				$this->id = mysql_insert_id();
			}
		}
	}
	
?>