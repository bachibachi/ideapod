<?php
  function connectDB(){
  
    $link = mysql_connect('localhost', 'root', '1192');
    if (!$link) {
       die('接続失敗です。'.mysql_error());
    }

    $db_selected = mysql_select_db('mention', $link);
    if (!$db_selected){
       die('データベース選択失敗です。'.mysql_error());
    }
  }
  
  function excuteSQL($query){
    $result = mysql_query($query);
    if (!$result) {
       die('SELECTクエリーが失敗しました。'.mysql_error());
    }
  }


  function insertMessgae($user_name){
    $message = $_POST["message"];
    $room_id = 1;
    $query="insert into mention values (".
    	    $room_id.","
	    ."'".$user_name."',"
	    ."'".$message."',".
	    "now())";
   
    return $query;
  }
  



  ini_set( 'display_errors', 1 ); 
  $user_name="test";
  if ($_POST["user_name"]){
    $user_name=$_POST["user_name"];
  }

  connectDB();  
  $query = insertMessgae($user_name);
 
  excuteSQL($query);
  

?>