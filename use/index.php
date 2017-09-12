<?
error_reporting(0);
session_start();
	if(isset($_SESSION['auth123']))
	//if(true)
	{
?>

<?php
	

				//echo "notifications";

										

				include("config.php");

				$my_connection = mysql_connect($db_host , $db_user , $db_pass) or die("connection cont be made");

				mysql_select_db("trail",$my_connection) or die("cant select db");

				

				

				$query ="select * from contact_table order by c_id desc  limit 0,40";

				$result = mysql_query( $query , $my_connection) or die(mysql_error());

				$num=mysql_numrows($result);

				$i=0;

					

?>



<!DOCTYPE html><html lang="en"><head> <meta charset="utf-8"> <title>CBET usage</title> <link rel="stylesheet" href="css/app.v1.css"> <link rel="stylesheet" href="css/font.css" cache="false"> <!--[if lt IE 9]> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/html5.js" cache="false"></script> <script src="js/ie/fix.js" cache="false"></script> <![endif]--></head><body> 





<section class="hbox stretch"> 

<aside class="bg-primary aside-sm" id="nav"> 

<section class="vbox"> 

<header class="dker nav-bar"> 

<a href="#" class="nav-brand" data-toggle="fullscreen">Admin</a> <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user"> <i class="icon-comment-alt"></i> </a> </header> <footer class="footer b-r bg-gradient hidden-xs"> <a href="logout.php"  class="btn btn-sm btn-link m-r-n-xs pull-right"> <i class="icon-off"></i> </a> <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm"> <i class="icon-reorder"></i> </a> </footer> <section> <div class="bg-success nav-user hidden-xs pos-rlt"> <div class="nav-avatar pos-rlt"> <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown">  <img src="images/avatar_default.jpg" class="img-circle">   <span class="caret caret-white"></span> </a> <ul class="dropdown-menu m-t-sm animated fadeInLeft"> <span class="arrow top"></span>  <li class="divider"></li> <li> <a href="docs.html">Help</a> </li> <li> <a href="signin.html">Logout</a> </li> </ul> <div class="visible-xs m-t m-b"> <a href="#" class="h3">John.Smith</a> <p><i class="icon-map-marker"></i> London, UK</p> </div> </div> <div class="nav-msg"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="badge badge-white count-n">2</b> </a> <section class="dropdown-menu m-l-sm pull-left animated fadeInRight"> <div class="arrow left"></div> <section class="panel bg-white"> <header class="panel-heading"> <strong>You have <span class="count-n">2</span> notifications</strong> </header> <div class="list-group"> <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <i class="icon-user" class="img-circle"></i> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">28 Aug 13</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">27 Aug 13</small> </span> </a> </div> <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="icon-cog"></i></a> <a href="#">See all the notifications</a> </footer> </section> </section> </div> </div> <nav class="nav-primary hidden-xs"> <ul class="nav"> 

<li class="active"> <a href="index.php"> <i class="icon-eye-open"></i> <span>Over view</span> </a> </li> 

<li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-suitcase"></i> <span>Bookings</span> </a> <ul class="dropdown-menu"> 

<li> <a href="talakonabook.php">Talakona</a> </li> <li> <a href="mamandurbook.php"> <b class="badge pull-right">30</b>Mamandur </a> </li>  </ul> </li> 

    <li >



    <a  href="contactsnotif.php">

        <i class="icon-envelope-alt"></i>

        <span>Notif </span>

    </a>

    

    <li class="dropdown-submenu">



    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="icon-inr"></i>
        <span>Revenue </span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="talakona-revenue.php"> Talakona </a>
        </li>
        <li><a href="mamandur-revenue.php"> Mamandur </a> </li>
        <li>
            <a href="#"> Papavinasanam </a>
        </li>
    </ul>

    <li class="dropdown-submenu">



    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

        <i class="icon-stackexchange"></i>

        <span>Expenditure </span>

    </a>

    <ul class="dropdown-menu">

        <li>

            <a href="#"> Talakona </a>

        </li>

        <li><a href="#"> Mamandur </a> </li>

        <li>

            <a href="#"> Papavinasanam </a>

        </li>

    </ul>

    <li class="dropdown-submenu">



    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

        <i class="icon-calendar"></i>

        <span>Calander</span>

    </a>

    <ul class="dropdown-menu">

        <li>

            <a href="#"> Talakona </a>

        </li>

        <li><a href="#"> Mamandur </a> </li>

        <li>

            <a href="#"> Papavinasanam </a>

        </li>

    </ul>



</li>  </nav> </section> </section> </aside> <!-- /.aside --> <!-- .vbox --> <section id="content"> <section class="vbox"> <header class="header bg-white b-b"> <p>Welcome Prudhvi Raj</p> </header> <section class="scrollable"> <section class="hbox stretch"> <aside class="aside-lg bg-light lter b-r"> <section class="vbox"> <section class="scrollable"> <div class="wrapper"> <div class="clearfix m-b"> <a href="#" class="pull-left thumb m-r"> <i class="icon-user" class="img-circle"></i> </a> <div class="clear"> <div class="h3 m-t-xs m-b-xs">Prudhvi</div> <small class="text-muted"><i class="icon-map-marker"></i> Cordinator, CBET</small> </div> </div> <div class="btn-group btn-group-justified m-b"> <a class="btn btn-success btn-rounded" data-toggle="button"> <span class="text">  Talakona </span> <span class="text-active"> <i class="icon-eye-open"></i>  </span> </a> <a class="btn btn-info btn-rounded"> <span class="text">  Mamandur </span> <span class="text-active"> <i class="icon-eye-open"></i>  </span>  </a> </div> <div> <small class="text-uc text-xs text-muted">Designation</small> <p>Community Coordinator</p> <small class="text-uc text-xs text-muted">Activities</small> <p><i class="icon-list-alt"></i>  Organise room booking activities in communities of Talakona and mamandur.<br /><i class="icon-file"></i> Handle's account's data for Papavinasanam, Talakona & Mamandur.</p> <div class="line"></div> <small class="text-uc text-xs text-muted">connection</small> <p class="m-t-sm"> <a href="twitter.com" class="btn btn-rounded btn-twitter btn-icon"><i class="icon-twitter"></i></a> <a href="Facebook.com" class="btn btn-rounded btn-facebook btn-icon"><i class="icon-facebook"></i></a> <a href="google.com" class="btn btn-rounded btn-gplus btn-icon"><i class="icon-google-plus"></i></a> </p> </div> </div> </section> </section> </aside> <aside class="bg-white"> <section class="vbox"> <header class="header bg-light bg-gradient"> <ul class="nav nav-tabs nav-white"> <li class="active"><a href="#contact" data-toggle="tab">Contact notification</a></li> <li class=""><a href="#events" data-toggle="tab">Events notification</a></li>  </ul> </header> <section class="scrollable"> <div class="tab-content"> 

<div class="tab-pane active" id="contact"> 



<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 



<?php



while($row = mysql_fetch_array($result)) {

					$i++;

?>

<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right"><?php echo $row['time']; ?></small> <strong class="block"><?php echo $row['name']; ?> </strong> <small> <?php echo " ".$row['message'] . " " ;?> </i></small> </a> </li> 

<?php	

					}

			

					?>



</ul> 



</div> 

<div class="tab-pane active" id="events"> 



<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border"> 



<?php

$query ="select * from activity order by a_id desc  limit 0,40";

				$result = mysql_query( $query , $my_connection) or die(mysql_error());



while($row = mysql_fetch_array($result)) {

					$i++;

?>

<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right"><?php echo $row['date']; ?></small> <strong class="block"><?php echo $row['name']; ?> </strong> <small> <?php echo " ".$row['message'] . " " ;?> </i></small> </a> </li> 

<?php	

					}

			

					?>



</ul> 



</div> 

 

 </div>  </div> </section>

 </section> </aside> <aside class="col-lg-4 b-l"> 

<section class="vbox"> 

<section class="scrollable">

<?php



$tlog = 0;

$tdor = 0;

$datelist[0] = date("d/m/Y");



for($x = 1; $x<10; $x++)

{

	$datelist[$x] = date("d/m/Y",strtotime(-$x." days"));

} 

for($x = 0; $x<10; $x++)

{

	//echo $datelist[$x] . " " ;

	$query ="select * from talakona_bookings where  booked_on =  '$datelist[$x]' ";

	

	$result = mysql_query( $query , $my_connection) or die(mysql_error());

	

	$tc[$x] = mysql_num_rows($result);

	//echo $td[$x] . " ";

	while($row = mysql_fetch_array($result)) {

		//$i++;

		

		if(strpos($row['room_name'], 'loghut') !== FALSE)

		{

			$tlog++;

			$td[$x] += 500;

		}

		else{

			$tdor++;

			$td[$x] += 1000;

			

		}

		

	}

} 

$mdor = 0;

	$mlog = 0;

for($x = 0; $x<10; $x++)

{

	//echo $datelist[$x] . " " ;

	$query ="select * from mamandur_bookings where  booked_on =  '$datelist[$x]' ";

	

	$result = mysql_query( $query , $my_connection) or die(mysql_error());

	

	$mc[$x] = mysql_num_rows($result);

	//echo $td[$x] . " ";

	$md[$x] = 0;

	while($row = mysql_fetch_array($result)) {

		//$i++;

		

		if(strpos($row['room_name'], 'dormet') !== FALSE)

		{

			$mdor++;

			$md[$x] += 1000;

		}

		else{

			$mlog++;

			$md[$x] += 500;

			

		}

		

	}

	//echo $md[$x] . " ";

} 







					

					

?>



 

<div class="wrapper"> 

 <section class="panel no-borders"> <header class="panel-heading bg-success lter"> <span class="pull-right">Last 10 days</span> <span class="h4"><?php echo array_sum($td) ?><br> <small class="text-muted">Collected from Talakona</small> </span> <div class="text-center padder m-b-n-sm m-t-sm"> <div class="sparkline" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="2" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-data="[<?php echo $td[0] . "," . $td[1] . "," . $td[2] . "," . $td[3] . "," . $td[4] . "," . $td[5] . "," . $td[6] . "," . $td[7] . "," . $td[8] . "," . $td[9] ?>]"></div> <div class="sparkline inline" data-type="bar" data-height="45" data-bar-width="6" data-bar-spacing="10" data-bar-color="#92cf5c"><?php echo $tc[0] . "," . $tc[1] . "," . $tc[2] . "," . $tc[3] . "," . $tc[4] . "," . $tc[5] . "," . $tc[6] . "," . $tc[7] . "," . $tc[8] . "," . $tc[9] ?></div> </div> </header> <div class="panel-body"> <div> <span class="text-muted">Total booked:</span> <span class="h3 block"><?php echo array_sum($tc) ?></span> </div> <div class="row m-t-sm"> <div class="col-xs-4"> <small class="text-muted block">loghuts</small> <span><?php echo $tlog ?></span> </div> <div class="col-xs-4"> <small class="text-muted block">Dormetry</small> <span><?php echo $tdor ?></span> </div> </div> </div> </section>

 <section class="panel no-borders"> <header class="panel-heading bg-success lter"> <span class="pull-right">Last 10 days</span> <span class="h4"><?php echo array_sum($md) ?><br> <small class="text-muted">Collected from Mamandur</small> </span> <div class="text-center padder m-b-n-sm m-t-sm"> <div class="sparkline" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="2" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-data="[<?php echo $md[0] . "," . $md[1] . "," . $md[2] . "," . $md[3] . "," . $md[4] . "," . $md[5] . "," . $md[6] . "," . $md[7] . "," . $md[8] . "," . $md[9] ?>]"></div> <div class="sparkline inline" data-type="bar" data-height="45" data-bar-width="6" data-bar-spacing="10" data-bar-color="#92cf5c"><?php echo $mc[0] . "," . $mc[1] . "," . $mc[2] . "," . $mc[3] . "," . $mc[4] . "," . $mc[5] . "," . $mc[6] . "," . $mc[7] . "," . $mc[8] . "," . $mc[9] ?></div> </div> </header> <div class="panel-body"> <div> <span class="text-muted">Total booked:</span> <span class="h3 block"><?php echo array_sum($mc) ?></span> </div> <div class="row m-t-sm"> <div class="col-xs-4"> <small class="text-muted block">normal rooms</small> <span><?php echo $mlog ?></span> </div> <div class="col-xs-4"> <small class="text-muted block">Dormetry</small> <span><?php echo $mdor ?></span> </div> </div> </div> </section>

 <section class="panel no-borders"> <header class="panel-heading bg-success lter"> <span class="pull-right">Last 3 months</span> <span class="h4">$540<br> <small class="text-muted">collected from Papavinasanam</small> </span> <div class="text-center padder m-b-n-sm m-t-sm"> <div class="sparkline" data-type="line" data-resize="true" data-height="65" data-width="100%" data-line-width="2" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-data="[400,210,200,325,250,460,345,250,250,250,400,380]"></div> <div class="sparkline inline" data-type="bar" data-height="45" data-bar-width="6" data-bar-spacing="10" data-bar-color="#92cf5c">9,9,11,10,11,10,12,10,9,10,11,9,8</div> </div> </header> <div class="panel-body"> <div> <span class="text-muted">Sales in June:</span> <span class="h3 block">$2500.00</span> </div> <div class="row m-t-sm">  </div> </div> </section>

 <section class="panel"> <div class="text-center wrapper"> <div class="sparkline inline" data-type="pie" data-height="150" data-slice-colors="['#acdb83','#fb6b5b']"><?php echo array_sum($td) . "," . array_sum($md) ?></div> </div> <ul class="list-group list-group-flush no-radius alt"> <li class="list-group-item"> <span class="pull-right"><?php echo array_sum($td) ?></span> <span class="label bg-success">1</span> Talakona </li> <li class="list-group-item"> <span class="pull-right"><?php echo array_sum($md) ?></span> <span class="label bg-danger">2</span> Mamandur </li>  </ul> </section> 

  

</section> </section> </aside> </section> </section> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="body"></a> </section> <!-- /.vbox --> </section><script src="css/app.v1.js"></script> <!-- Bootstrap --> <!-- App --> <!-- fuelux --> <!-- datatables --> <!-- Sparkline Chart --> <!-- Easy Pie Chart --> 





  </body></html>
  
  
  <?php
  }
	else{
		header ("Location: usage.html");
		echo "please login <a href='usage.html'> here</a>";
	}
  
  ?>

