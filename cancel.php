<?php
 header('Access-Control-Allow-Origin: *');
//echo $_GET["month"];
	
	include("config.php");
	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
	mysql_select_db("trail",$my_connection) or die("cant select db");
	
	if(isset($_GET["date"])){
		$date = $_GET["date"];
		$email = $_GET["mail"];
		$rname = $_GET["rname"];
	$query="DELETE   FROM  `talakona_bookings` WHERE booked_on = '$date' AND `email` = '$email' AND `room_name` = '$rname'  ; ";
		
		 mysql_query( $query , $my_connection) or die(mysql_error());
	}
	
	header("Location: http://seshachalavanadarshani.com/canceled.html");
	exit;
	
?>