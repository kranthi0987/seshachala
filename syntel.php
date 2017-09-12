<?php
	header('Access-Control-Allow-Origin: *');  
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
	$to = "nikhilesh_shinde@syntelinc.com";
	$to = "yyeshwanth4@gmail.com";
	$subject = "Client schedule";
	//$message = "Hello! This is "+$_POST["name"]+" requestinng an appointment";
	$from = $_POST["id"];
	$headers = "From:yeshwanth@syntel.com";
	
	$txt = $_GET["body"];
	$headers = "From:syntel_JH@syntelinc.com" ;
	
$headers = "From: " . "syntel_JH@syntelinc.com" . "\r\n";
$headers .= "Reply-To: ". "syntel_JH@syntelinc.com"  . "\r\n";
$headers .= "CC: ex@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	if (mail($to,$subject,$txt,$headers)) {
	   echo("done");
	  } else {
	   echo("none");
	  }
	
?>