<?php

	$roomName = $_POST['roomname'];
	$share    = $_POST['share'];

	try {
		$createRoomPdo = new PDO("mysql:host=localhost;  dbname=ideapod; charset=utf8" "bachibachi", "bachibachi");
		$query = "insert into room (roomname, share) values ('{$rooName}', '{$share}')";
		$createRoomPdo->exec($query);
	} catch(PDOException $e){
		echo "失敗しました。<br>";
	}


	echo "<link rel='room' href='http://www/room?name={$roomname}'>";

?>
