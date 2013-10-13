<?php
	require_once 'lib.php';
	class createRoomModel {

		public function createRoom () {
			$db = new db();
			$db->dbConnect();
			$db->dbQuery($query, $queryKind);
			$db->dbCut();	
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
