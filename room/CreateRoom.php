<?php
	require "db_conf.php";
	$file_name = "tmpl.php";
	$roomName = $_POST['roomname'];
	$share    = $_POST['share'];


	try {
		$createRoomPdo = new PDO("mysql:host=localhost;  dbname=ideapod; charset=utf8" "bachibachi", "bachibachi");
		$query = "insert into room (roomname, share) values ('{$rooName}', '{$share}')";
		$createRoomPdo->exec($query);
	} catch(PDOException $e){
		echo "失敗しました。<br>";
	}

	$file_name = $roomName + ".php";
	if(!file_exists($file_name)){
		touch($file_name);
		$file = file_get_contents($file_tmpl);
		$file .= <<<EOL
				<html>
					<head>
					</head>
					<body>
					</body>
					
				</html>
EOL;
	file_put_contents($file_name, $file);
	} else {
		exit();
	}
	chmod($file_name, 0666);
	echo "<link rel='room' href='/room?name={$roomname}'>";


?>
