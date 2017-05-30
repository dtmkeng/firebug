<?php
$name__ = "root"; //username 
$password__= ""; //pasword
$hostName__= "localhost";  //hostname or ip
$databaseName__ = "sutrobotcloud"; // database name
	if($link_con__ = mysql_connect($hostName__,$name__,$password__)){
		$db_selected  =  mysql_select_db($databaseName__,$link_con__);
		if($db_selected){
			mysql_query("SET NAMES UTF-8");
		}
		else{
			echo "can't select database please checking ";
		}
	}
	else{
		echo "please check config";
	}
//database config sut robot
?> 