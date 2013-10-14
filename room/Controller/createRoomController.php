<?php
	echo "test";
	require_once 'createRoomModel.php';
	require_once 'lib.php';
	$roomName = $_POST['roomname'];
	$share = $_POST['share'];
	$pass = $_POST['pass'];
	echo "Controller";
	var_dump($roomName);
	var_dump($share);
	var_dump($pass);
	$model = new createRoomModel();
	$check = new check();
	var_dump($check);
	$roomName = $check->checkMsg($roomName);
	$share = $check->checkMsg($share);
	$pass = $check->checkMsg($pass);
	$room['roomName'] = $roomName;
	$room['scope'] = $share;
	$room['roomPassword'] = $pass;
	$result = $model->createRoom($room);

	require_once 'creatRoomView.php';

?>
