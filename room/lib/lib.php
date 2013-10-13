<?php
	//lib
	
	class db {
		
		public function checkMsg () {
			
		}

		public function dbConnect () {
			require_once 'db_conf.php';
			//$createRoomPdo = new PDO("mysql:localhost; dbname=ideapod", "root", "bachibachi");
			$createRoomPdo = new PDO("mysql:dbname=ideapod; host=localhost", "root", "bachibachi");			
		}
	
		public function dbQuery ($query, $query_kind) {
			if ($query_kind === "insert") {
				$result = $createRoomPdo->exec($query);
			} else {
				$result = $createRoomPdo->query($query);
			}

			return $result;
		}

		public function dbCut () {
			unset($createRoomPdo);
		}
	}
	
	class check {

		public function checkMsg ($msg) {
			htmlspecialchars($msg);
		}
	}

	class createTemplate {
		public function setTemplate () {
			
		}
	}
?>
