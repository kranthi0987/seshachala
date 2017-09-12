<?php
header('Access-Control-Allow-Origin: *');
//echo $_GET["month"];
$response = "";
$rooms = array("harini", "mayuri", "japali", "dormetry");

include("config.php");
$my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");
mysql_select_db("trail", $my_connection) or die("cant select db");
//$date  = $_GET["date"] . "/" . $_GET["month"] . "/" . $_GET["year"];
$query = "SELECT room_types FROM `rooms` where location='mamandur'";
$result = mysql_query($query, $my_connection) or die(mysql_error());
$data = array();
while($row = mysql_fetch_array($result))
{
//    $data[] = $row;
//    echo $data;
 $data[]=$row['room_types'];
//    echo $data;
}
print_r($data);
//echo $rooms;
$date = $_GET["date"];
for ($x = 0; $x < count($data); $x++) {

//    echo "hi";
    $query = "SELECT * FROM  `mamandur_bookings` WHERE room_name =  '$data[$x]' AND booked_on='$date' ";
//    echo $query;
    $result = mysql_query($query, $my_connection) or die(mysql_error());
    if ($row = mysql_fetch_array($result)) {
//
        echo 0;
        echo ",";
    } else {
        echo 1;
        echo ",";
    }

}
echo $response;
//