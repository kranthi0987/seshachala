<?php
	include("config.php");
	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
	mysql_select_db("trail",$my_connection) or die("cant select db");
	$mail = $_POST["mail"];
	$name =  $_POST["name"];
	$message = $_POST["message"];
	$mobile = $_POST["mobile"];
 $query = "INSERT INTO `contact_table` (`c_id`, `name`, `mobile`, `email`, `message`, `time`) VALUES (NULL, '$name', '$mobile', '$mail', '$message', CURRENT_TIMESTAMP);";
 mysql_query( $query , $my_connection) or die("no");


	echo "yes";
?>