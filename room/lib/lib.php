<?php
	//lib
	
	class db {
		
		public function dbConnect () {
			require_once 'db_conf.php';
			$createRoomPdo = new PDO("mysql:dbname=ideapod; host=localhost", "root", "bachibachi");			
			return $createRoomPdo;
		}
	
		public function dbQuery ($Pdo, $query, $query_kind) {
			if ($query_kind === "insert") {
				$result = $Pdo->exec($query);
			} else {
				$result = $Pdo->query($query);
			}

			return $result;
		}

		public function dbCut ($Pdo) {
			unset($Pdo);
		}
	}
	
	class check {

		public function checkMsg ($msg) {
			$checked_msg = htmlspecialchars($msg);
			return $checked_msg;
		}
	}

	class createTemplate {
		public function setTemplate () {
			
		}
	}
?>
