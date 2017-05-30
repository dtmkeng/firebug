<?php
session_start();
include_once("../../config/database.inc.php");
$username = $_POST['name'];
$password = $_POST['pass'];
	$sql_command = mysql_query("SELECT * FROM member WHERE member_username = '$username'");
	$check_user__ = mysql_num_rows($sql_command);
	if($check_user__){
		$sql_math_Ch = mysql_query("SELECT * FROM member WHERE member_password = '$password' AND member_username = '$username'");
		if(mysql_num_rows($sql_math_Ch)){
			echo json_encode(array('name' => $_POST['name'],'status'=> 1));
			$_SESSION["login"] = mysql_fetch_array($sql_math_Ch);
			//
		}else{
			echo json_encode(array('status'=> 0,'message'=>'password not match!!' ));
		}
	}else{
		echo json_encode(array('name' => $_POST['name'],'status'=> 0,'message' => 'Undefined user!!'));
	}
	//echo json_encode("erroewffdr");
?>