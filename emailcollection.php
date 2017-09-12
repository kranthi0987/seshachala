<?php
	include("config.php");
	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
	mysql_select_db("trail",$my_connection) or die("cant select db");
	$mail = $_POST["mail"];
 $query = "INSERT INTO `trail`.`mailcollection` (`id`, `mail`) VALUES (NULL, '$mail');";
 mysql_query( $query , $my_connection) or die("no");


	echo "yes";
?>