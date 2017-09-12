<?php
 	header('Access-Control-Allow-Origin: *');
 	$mail  = $_GET["mail"];
 	$response  = "";
 	include("config.php");
	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("Server busy try after some time");
	mysql_select_db("trail",$my_connection) or die("Server busy try after some time");
	$query = "INSERT INTO `trail`.`subscription_mails` (`mail` ,`time`)VALUES ( '$mail', 'start')";
	//echo $query;
	mysql_query( $query , $my_connection) or die(mysql_error());
	echo "Your subscription is accepted";
 
 ?>