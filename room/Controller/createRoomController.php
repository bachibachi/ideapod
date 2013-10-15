<?php
	require_once 'createRoomModel.php';
	require_once 'lib.php';

	$roomName = $_POST['roomname'];
	$share = $_POST['share'];
	$pass = $_POST['pass'];

	$model = new createRoomModel();
	$check = new check();
	
	$roomName = $check->checkMsg($roomName);
	$share = $check->checkMsg($share);
	$pass = $check->checkMsg($pass);
	
	$room['roomName'] = $roomName;
	$room['scope'] = $share;
	$room['roomPassword'] = $pass;
	
	$result = $model->createRoom($room);
	$model->setTemplate($room['roomName']);
	require_once 'createRoomView.php';

?>
