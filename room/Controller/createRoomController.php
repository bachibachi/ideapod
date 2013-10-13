<?php
	echo "test";
	require_once 'createRoomModel.php';
	require_once 'lib.php';
	$roomName = $_POST['roomname'];
	$share = $_POST['share'];
	$pass = $_POST['pass'];
	echo "Controller";
	$model = new createRoomModel();
	$check = new check();
	$msg = $check->check($msg);
	$msg = $check->check($roomName);
	$msg = $check->check($share);
	$msg = $check->check($pass);
	$model->dbConect();
	//データベース
	$results = $model->dbQuery($msg, "select");
	$model->dbCut();

	require_once 'creatRoomView.php';

?>
