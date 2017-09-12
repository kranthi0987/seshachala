<?php
if($_GET['lname']=='talakona')
	{
		
		include("config.php");
		$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
			mysql_select_db("trail",$my_connection) or die("cant select db");
		$query="SELECT COUNT(*) AS count FROM `trail`.`talakona_bookings` WHERE room_name = '$_GET[rname]' AND booked_on = '$_GET[date]';";
		$result = mysql_query( $query , $my_connection) or die(mysql_error());
		while($row = mysql_fetch_array($result)) {
			$check = $row['count'];
			//echo $check;
		}
		if($check == 0){
			
			$query="INSERT INTO  `trail`.`talakona_bookings` (
			`tb_id` ,
			`room_name` ,
			`booked_on` , 
			`registered_on` ,
			`name` ,
			`mobile` ,
			`email` ,
			`no_of_people` ,
			`address`
			)
			VALUES (
			NULL ,  '$_GET[rname]',  '$_GET[date]', '$_GET[rdate]',  '$_GET[name]',  '$_GET[mobile]',  '$_GET[email]',   '$_GET[persons]' , '$_GET[add]'
			)";
			
			
			$result = mysql_query( $query , $my_connection) or die(mysql_error());
			
			 $to = $_GET[email];
			 $subject = "your status conformation";
			
			 $body = "Hi," . $_GET['name'] . "\n accomodation for you has been booked at talakona on date:" . $_GET['date'] .  "\n to cancel booking please click this link: " . "http://seshachalavanadarshani.com/cancel.php?date=" . $_GET[date] . "&rname=". $_GET[rname] . "&mail=" . $_GET[email].
			 
	
	"
	
	
	
	            RULES SHOULD BE FOLLOWED BY THE VISITORS
	
	
	
	1.     Check-in Time: Afternoon 3:00 P.M. and after.
	2.     Check-Out Time: Afternoon 2:30 P.M.
	3.     Four persons are allowed for one room and Rs. 100/- will be charged for each extra guest, maximum limit is 6 No’s per room.
	4.     Alcohol is Strictly Prohibited.
	5.     No room service will be provided.
	6.     Please carry photo identity proof.
	7.     Co-operate with the CBET Members for the better service.
	8.     The Visitors should not argue with the CBET members.
	9.     There will be no refund for any unforeseen calamities which may occur during the event.
	10.    CBET is not responsible for any damage or loss of properties of the tourists.
	11.    Fares are exclusive of Food charges.
	12.    In case of any dispute, the decision of the Asst. Conservator of Forests, Wildlife Management Circle, Tirupati is final.
	13.    If there is any type of Office or Official meeting the rooms will be cancelled and our coordinator will inform you before two days in advance. Please cooperate with him.
	14.    The visitors are allowed to occupy the room only after 3:00 P.M.
	15.    The visitors will be charged with the cost of replacement or repaid for any damage made by them during their stay in the guest house.
	16.    Any violation of rules of A.P. Forest Act 1967 and Wildlife Protection Act 1972 will be charged with provisions prescribed in the said acts.
	17.    Contact our coordinator only during 9AM - 6PM.
	18.    If the Visitor wants to order the Food Arrangements in Talakona they should Contact 9963695406. If the Visitor wants to know any details of Talakona they may Contact 8978080433.
        19.    If the visitor wants to order the Food Arrangements and any Details about Mamandur Visitors should Contact 9618350557. 

	
	
	";
	
	
			 $headers = "From: booking@seshachalavanadarshani.com" . "\r\n" .
			"CC: somebodyelse@example.com";
			mail($to, $subject, $body,$headers);
			 /*if (mail($to, $subject, $body,$headers)) {
			   echo("<p>Message successfully sent!</p>");
			  } else {
			   echo("<p>Message delivery failed...</p>");
			  }*/
			header ("Location: booked.html");
			/* Make sure that code below does not get executed when we redirect. */
			exit ;
		}
		else{
			//echo "no database insertion";
			header ("Location: cantbook.html");
			/* Make sure that code below does not get executed when we redirect. */
			exit ;
		}
	}
	
if($_GET[lname]==mamandur)
	{
		include("config.php");
		$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
			mysql_select_db("trail",$my_connection) or die("cant select db");
		
		$query="SELECT COUNT(*) AS count FROM `trail`.`mamandur_bookings` WHERE room_name = '$_GET[rname]' AND booked_on = '$_GET[date]';";
		$result = mysql_query( $query , $my_connection) or die(mysql_error());
		while($row = mysql_fetch_array($result)) {
			$check = $row['count'];
			//echo $check;
		}
		if($check == 0){
			
			$query="INSERT INTO  `trail`.`mamandur_bookings` (
			`mb_id` ,
			`room_name` ,
			`booked_on` ,
			`registered_on` ,
			`name` ,
			`mobile` ,
			`email` ,
			`no_of_people` ,
			`address`
			)
			VALUES (
			NULL ,  '$_GET[rname]',  '$_GET[date]', '$_GET[rdate]',  '$_GET[name]',  '$_GET[mobile]',  '$_GET[email]',   '$_GET[persons]' , '$_GET[add]'
			)";
			
			$result = mysql_query( $query , $my_connection) or die(mysql_error());
			
			$to = $_GET[email];
			 $subject = " your status conformation";
			
			 $body = "Hi," . $_GET['name'] . "\n accomodation for you has been booked at Mamandur on date:" . $_GET['date'] .  "\n to cancel booking please click this link: " . "http://seshachalavanadarshani.com/mamandurcancel.php?date=" . $_GET[date] . "&rname=". $_GET[rname] . "&mail=" . $_GET[email].
			 
			 
	"
	
	
	
	            RULES SHOULD BE FOLLOWED BY THE VISITORS
	
	
	1.     Check-in Time: Afternoon 3:00 P.M. and after.
	2.     Check-Out Time: Afternoon 2:30 P.M.
	3.     Four persons are allowed for one room and Rs. 100/- will be charged for each extra guest, maximum limit is 6 No’s per room.
	4.     Alcohol is Strictly Prohibited.
	5.     No room service will be provided.
	6.     Please carry photo identity proof.
	7.     Co-operate with the CBET Members for the better service.
	8.     The Visitors should not argue with the CBET members.
	9.     There will be no refund for any unforeseen calamities which may occur during the event.
	10.    CBET is not responsible for any damage or loss of properties of the tourists.
	11.    Fares are exclusive of Food charges.
	12.    In case of any dispute, the decision of the Asst. Conservator of Forests, Wildlife Management Circle, Tirupati is final.
	13.    If there is any type of Office or Official meeting the rooms will be cancelled and our coordinator will inform you before two days in advance. Please cooperate with him.
	14.    The visitors are allowed to occupy the room only after 3:00 P.M.
	15.    The visitors will be charged with the cost of replacement or repaid for any damage made by them during their stay in the guest house.
	16.    Any violation of rules of A.P. Forest Act 1967 and Wildlife Protection Act 1972 will be charged with provisions prescribed in the said acts.
	17.    Contact our coordinator only during 9AM - 6PM.
	18.    If the Visitor wants to order the Food Arrangements in Talakona they should Contact 9963695406. If the Visitor wants to know any details of Talakona they may Contact 8978080433.
        19.    If the visitor wants to order the Food Arrangements and any Details about Mamandur Visitors should Contact 9618350557. 

	
	";
			 $headers = "From: booking@seshachalavanadarshani.com" . "\r\n" .
			"CC: somebodyelse@example.com";
			mail($to, $subject, $body,$headers);
			 /*if (mail($to, $subject, $body,$headers)) {
			   echo("<p>Message successfully sent!</p>");
			  } else {
			   echo("<p>Message delivery failed...</p>");
			  }*/
			
			
			header ("Location: booked.html");
			/* Make sure that code below does not get executed when we redirect. */
			exit ;
			
		}
		else{
			//echo "no database insertion";
			header ("Location: cantbook.html");
			/* Make sure that code below does not get executed when we redirect. */
			exit ;
		}
	}
?>