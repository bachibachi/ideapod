<?php
	require_once 'lib.php';
	class createRoomModel {

		public function createRoom ($room) {
			$db = new db();
			$createRoomPdo = $db->dbConnect();
			$query = "insert into room (room_name, share, password) values ('{$room['roomName']}', '{$room['scope']}', '{$room['roomPassword']}')";
			$result = $db->dbQuery($createRoomPdo, $query, "insert");
			$db->dbCut($createRoomPdo);
			return $result;	
		}

		public function setTemplate ($roomName) {
			$fileName = $roomName . ".php";
			if (!file_exists($fileName)) {
				touch($fileName);
				$file .= <<<EOL
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
</head>
<body>
<a><?php echo room['roomName']></a>
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
