<?php
	require_once 'lib.php';
	class createRoomModel {

		public function createRoom ($room) {
			$db = new db();
			$db->dbConnect();
			$query = "insert into room (name, share, pass) values ('{$room['roomName']}', '{$room['share']}', '{$room['roomPassword']}');";
			$result = $db->dbQuery($query, "insert");
			$db->dbCut();
			return $result;	
		}

		public function setTemplate ($roomName) {
			$fileName = $roomName . ".php";
			if (!file_exists($fileName)) {
				touch($fileName);
				$file .= <<<EOL
						<html>
						<head>
						</head>
						<body>
						</body>
						</html>
EOL;
				file_put_contents($fileName, $file);
			} else {
				exit();
			}
		}
	}
?>
