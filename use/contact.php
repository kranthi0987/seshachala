<!DOCTYPE html><html lang="en"><head> <meta charset="utf-8"> <title>Web Application | todo</title> <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"> <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <link rel="stylesheet" href="css/app.v1.css"> <link rel="stylesheet" href="css/font.css" cache="false"> <!--[if lt IE 9]> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/html5.js" cache="false"></script> <script src="js/ie/fix.js" cache="false"></script> <![endif]--></head><body> 

<section class="hbox stretch"> 

<aside class="bg-primary aside-sm" id="nav"> 

<section class="vbox"> 

<header class="dker nav-bar"> 

<a href="#" class="nav-brand" data-toggle="fullscreen">Admin</a> <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-user"> <i class="icon-comment-alt"></i> </a> </header> <footer class="footer b-r bg-gradient hidden-xs"> <a href="logout.php"  class="btn btn-sm btn-link m-r-n-xs pull-right"> <i class="icon-off"></i> </a> <a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm"> <i class="icon-reorder"></i> </a> </footer> <section> <div class="bg-success nav-user hidden-xs pos-rlt"> <div class="nav-avatar pos-rlt"> <a href="#" class="thumb-sm avatar animated rollIn" data-toggle="dropdown"> <i class="icon-user"></i> <span class="caret caret-white"></span> </a> <ul class="dropdown-menu m-t-sm animated fadeInLeft"> <span class="arrow top"></span>  <li class="divider"></li> <li> <a href="docs.html">Help</a> </li> <li> <a href="signin.html">Logout</a> </li> </ul> <div class="visible-xs m-t m-b"> <a href="#" class="h3">John.Smith</a> <p><i class="icon-map-marker"></i> London, UK</p> </div> </div> <div class="nav-msg"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="badge badge-white count-n">2</b> </a> <section class="dropdown-menu m-l-sm pull-left animated fadeInRight"> <div class="arrow left"></div> <section class="panel bg-white"> <header class="panel-heading"> <strong>You have <span class="count-n">2</span> notifications</strong> </header> <div class="list-group"> <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <i class="icon-user" class="img-circle"></i> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">28 Aug 13</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">27 Aug 13</small> </span> </a> </div> <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="icon-cog"></i></a> <a href="#">See all the notifications</a> </footer> </section> </section> </div> </div> <nav class="nav-primary hidden-xs"> <ul class="nav"> <li> <a href="index.html"> <i class="icon-eye-open"></i> <span>Over view</span> </a> </li> <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-suitcase"></i> <span>Bookings</span> </a> <ul class="dropdown-menu"> <li> <a href="#">Talakona</a> </li> <li> <a href="icons.html"> <b class="badge pull-right">30</b>Mamandur </a> </li>  </ul> </li> 

    <li class="dropdown-submenu" class="active">



    <a class="dropdown-toggle"  "data-toggle="dropdown" href="#">

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



</li>  </nav> </section> </section> </aside> <!-- /.aside --> <!-- .vbox --> 



 <section id="content">

 <section class="hbox stretch">

 <!-- .aside --> <aside class="aside"> <section class="vbox"> <header class="bg-primary dk header">  <p class="h4">Notifications</p> </header> <section> <section> <section id="mail-nav" class="hidden-xs"> <ul class="nav nav-pills nav-stacked no-radius"> <li class="active"> <a href="#"> <i class="icon-envelope-alt"></i> contact </a> </li> <li> <a href="#">  <i class="icon-bookmark-empty"></i> Events</a> </li>  </ul> 

</section> </section> </section> </section> </aside> <!-- /.aside --> <!-- .aside --> <aside class="bg-light lter"> <section class="vbox"> <header class="bg-primary header clearfix"> <div class="btn-toolbar"> <div class="btn-group select">   <ul class="dropdown-menu text-left text-sm"> <li><a href="#">Read</a></li> <li><a href="#">Unread</a></li> <li><a href="#">Starred</a></li> <li><a href="#">Unstarred</a></li> </ul> </div> <div class="btn-group"> <button title="" data-original-title="" class="btn btn-sm btn-white" data-toggle="tooltip" data-placement="bottom" data-title="Refresh"><i class="icon-refresh"></i></button> </div> </div> </header> <footer class="footer b-t"> <form class="m-t-sm"> <div class="input-group"> <input class="input-sm form-control input-s-sm" placeholder="Search" type="text"> <div class="input-group-btn"> <button class="btn btn-sm btn-white"><i class="icon-search"></i></button> </div> </div> </form> </footer> 

<section class="scrollable"> 

<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-alt list-group-lg">  

<li class="list-group-item animated bounceInLeft" href="#email-content" data-toggle="class:show"> <a href="#" class="thumb-xs pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">1 hour ago</small> <strong>Jonathan George</strong> <span>Morbi nec nunc condimentum...<span class="text-danger">click me</span></span> </a> </li> 

 </ul>

 </section>

 </section> </aside> <!-- /.aside --> 



<!-- .aside --> 

<aside class="bg-white hide col-lg-6 b-l" id="email-content"> <section class="vbox"> <section class="scrollable"> <div class="wrapper b-b"> <a href="#" data-toggle="class" class="pull-left"><i class="icon-star-empty icon-xlarge text"></i><i class="icon-star text-warning icon-xlarge text-active"></i></a> <a href="#email-content" data-toggle="class:show" class="pull-right text"> <i class="icon-trash"></i> </a> <h4 class="m-n">Kickoff meeting</h4> </div> <div class="text-sm padder m-t"> <div class="block clearfix m-b"> <a href="#" class="thumb-xs inline"><img src="images/avatar.jpg" class="img-circle"></a> <span class="inline m-t-xs">Mika Sokeil &lt;mica_sokeil@gmail.com&gt; to me</span> <div class="pull-right inline">May 12 (<em>4 days ago</em>) <div class="btn-group"> <button title="" data-original-title="" class="btn btn-white btn-xs" data-toggle="tooltip" data-title="Reply"><i class="icon-reply"></i></button> <button class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button> <ul class="dropdown-menu pull-right"> <li><a href="#"><i class="icon-reply"></i> Reply</a></li> <li><a href="#"><i class="icon-signout"></i> Forward</a></li> <li><a href="#">Add Mika Sokeil to contact list</a></li> <li><a href="#">Mark as unread</a></li> <li class="divider"></li> <li><a href="#">Delete this message</a></li> <li><a href="#">Report spam</a></li> </ul> </div> </div> </div> <div class="line pull-in"></div> <p>Mr. Soe</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p> <blockquote> <em>Morbi nec nunc condimentum, egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula. Nunc placerat purus quam, ac adipiscing arcu rutrum eu. Vestibulum adipiscing ut augue ut auctor. Vestibulum nec lorem imperdiet nibh mollis gravida ut a justo.<br><br>Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis</em> </blockquote> <div class="show"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p> <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p> <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend</p> </div> <p>Best Regards<br>Mical</p> </div> <div class="padder"> <div class="panel text-sm bg-light"> <div class="panel-body"> Click here to <a href="#">Reply</a> or <a href="#">Forward</a> </div> </div> </div> </section> </section> </aside>



</section>

</section>

  

<script src="css/app.v1.js"></script>

  </body></html>