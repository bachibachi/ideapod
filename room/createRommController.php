<?php
	require_once 'createRoomModel.php';
	require_once 'lib.php';
	$msg = $_GET['msg'];
	$roomName = $_GET['roomname'];
	$share = $_GET['share'];
	$pass = $_GET['pass'];

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
