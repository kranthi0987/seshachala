<?php
	error_reporting(0);
	include("config.php");
	$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");
	mysql_select_db("trail",$my_connection) or die("cant select db");
	session_start();
	
	if(isset($_SESSION['auth123']))
		{
			
						
						header ("Location: index.php");
						exit;
			
			?>
			

			<?php
		}
	else
		{
			$query = "select * from lgdetails  ";
			$result = mysql_query( $query , $my_connection) or die(mysql_error());
			//echo $_GET['name'];
			//echo $_GET['pass'];
			$row = mysql_fetch_array($result);
			//echo $_GET['name'] . "==" . $row['name'];
			if($row['name'] == $_GET['name'] && $_GET['pass'] == $row['pass'])
				{
					// store session data
					$_SESSION['auth123']=1245862;
					header ("Location: index.php");
					/* Make sure that code below does not get executed when we redirect. */
					exit ;
				}
			else
				{
					die("authentication failed");
					
				}
			
			
		}
?>