
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Taalakona accomodation booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="Yeshwanth" />
 
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.css" rel="stylesheet" />
      <link href="font/stylesheet.css" rel="stylesheet" />
      <link href="css/flexslider.css" rel="stylesheet" />
      <link href="css/style.css" rel="stylesheet" />
      <link href="css/prettyPhoto.css" rel="stylesheet" />
 
      <!-- Theme skin -->
      <link href="skin/green.css" rel="stylesheet" />
     
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
 
    <!-- Fav and touch icons -->
    <!-- fav end -->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.uniform.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      $(function(){
        $("input:checkbox, input:radio, input:file, select").uniform();
      });
    </script>
    
    <link href="./css/uni-form.css" media="screen" rel="stylesheet"/>
    <link href="./css/default.uni-form.css" title="Default Style" media="screen" rel="stylesheet"/>
    <link href="./css/demo.css" media="screen" rel="stylesheet"/>
    <style type="text/css">
	.post {
	margin-bottom: 10px;
	
}

.container{
	width: 100%;
	position: relative;
	text-align: left;
}
    </style>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-44222061-1', 'seshachalavanadarshani.com');
	  ga('send', 'pageview');

    </script>
</head>
 
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : 'YOUR_APP_ID',                        // App ID from the app dashboard
      channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel file for x-domain comms
      status     : true,                                 // Check Facebook Login status
      xfbml      : true                                  // Look for social plugins on the page
    });

    // Additional initialization code such as adding Event Listeners goes here
  };

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div class="wrapper">
      <header>
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="navbar-inner" style="padding:0px;	">
				<div class="container">			
					<a class="brand" style="padding:0px;" href="index.html"><img  src="img/logo3.png" alt="" /></a>
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>					
					<!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</header>
      <div id="dropdown-contact">        
            <div class="container">
                  <a href="#" class="contact-close">X</a>
                  <div class="row">
                        <div class="span6 hidden-phone">
					<div class="contact-intro">
						<h3>Contact</h3>
						<p>
						Want to speak with our community coordinator for further enquiry or complaints, please use the below numbers.
						</p>
					</div>
					<div class="row-fluid margintop20">
						<div class="span6">
							<label>Seshachalam Bio Lab</label>
							<p>
							Kapilatertham compound<br />
							K.T Road<br />
							Tirupati-517 501<br />
							
							</p>						
						</div>
						<div class="span6">
							<label>Coordinator contacts</label>
							<p>
							7382966794 (9AM - 6PM)<br />
							contact@Talakona.com<br />
							
							</p>						
						</div>						
					</div>
                        </div>
                        <div class="span6">
					<form id="ajaxform" action="contacthandler.php" name="contact" class="cantact-form">
						<div class="row-fluid">
							<div class="span6">
                            <input class="input-block-level" id="none" name="name" type="text" placeholder="Your Name">
                            </div>
                            <div class="span6">
								<input class="input-block-level" id="mone" name =" mobile"type="text" placeholder="Mobile">
							</div>
								<input class="input-block-level" id="eone" name="mail" type="text" placeholder="Email">						
						</div>
						<textarea rows="6" class="input-block-level" name ="message" placeholder="Write your words here"></textarea>
						<button class="vbtn1 vbtn1-medium vbtn1-color btn-block" type="submit">Submit your message</button>
					</form>
				</div>                       
                  </div>
            </div>           
      </div>     
     
      <section id="contain">
            <div class="container">
                  <div class="row">
                        <div class="span3">
                              <aside>
                                    
                                    <div class="widget">
							<h4>Connect with us</h4>
							<ul class="photostream">
								
<style> .facebook { overflow: hidden; } </style> 
<div class="span3" style="margin:0px; height:240px; overflow:hidden;" > <iframe class="photostream" widht:20%; height:240px; src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Ftalakonawaterfalls&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:270px;" allowTransparency="true" "></iframe> </div>

							</ul>
						</div>
						<div class="widget">
							<h4>Popular tags</h4>
							<ul class="tag-widget">
								<li><a href="" class="tag" data-toggle="dropdown"><span>Talakona</span></a>
								<li><a href="" class="tag" data-toggle="dropdown"><span>Waterfalls</span></a>
								<li><a href="" class="tag" data-toggle="dropdown"><span>Pulicat lake</span></a>
								<li><a href="" class="tag" data-toggle="dropdown"><span>forest</span></a>
								<li><a href="" class="tag" data-toggle="dropdown"><span>Mamandur</span></a>
								<li><a href="" class="tag" data-toggle="dropdown"><span>CBET</span></a>
								<li><a href="" class="tag" data-toggle="dropdown"><span>accommodation</span></a>
																
							</ul>						
						</div>
						<div class="widget">
							<h4>Other attractions</h4>
							<ul class="cat">
										  
										  <li><a href="talakona-waterfalls-near-tirupathi.html">Talakona</a></li>
                                          <li><a href="mamandur-forest-area.html">Mamandur</a></li>
                                          <li><a href="pulicat-lake-birds-paradise.html">Pulicat</a></li>
                                          <li><a href="kailasakona-waterfall-place-to-visit-near-tirupathi.html">Kailasa kona</a></li>
                                          <li><a href="nelapattu-bird-sanctury-in-ap.html">Nelapattu</a></li>
                                          <li><a href="thumbalabailu-waterfalls-beautiful.html">Thumbalabailu</a></li>
							</ul></div>
                                                                              
                              </aside>
                        </div>                 
                        <div class="span9">
                              <article>
                                    <h3><a>Accomodation booking form</a></h3>
                                    <div class="divider"></div>
                                    <div class="well">
                                         
                                          
                                          <form action="formhand.php" class="uniForm" method="get">
            
      <fieldset>
        <h3></h3>
        <div class="ctrlHolder">
          <label for=""><em>*</em> Registration date</label>
          <input name="rdate" id="rdate" value="<?php
echo date("d/m/Y") ?>" size="35" maxlength="50" type="text" readonly="readonly" class="textInput required"/>
          <p class="formHint">*Taken automatically</p>
        </div>
        <div class="ctrlHolder">
          <label for=""><em>*</em>Cottage booking date</label>
          <input name="date" id="date" value="<?php
echo $_GET["date"] ?>" size="35" maxlength="50" type="text" readonly="readonly" class="textInput required"/>
          <p class="formHint">*Taken automatically</p>
        </div>
        <div class="ctrlHolder">
          <label for=""><em>*</em>Cottage name</label>
          <input name="rname" id="rname" value="<?php
echo $_GET["rname"] ?>" size="35" maxlength="50" type="text" readonly="readonly" class="textInput required"/>
          <p class="formHint">*Taken automatically</p>
        </div>
        <div class="ctrlHolder">
          <label for=""><em>*</em>tourist location</label>
          <input name="lname" id="lname" value="<?php
echo $_GET["lname"] ?>" size="35" maxlength="50" type="text" readonly="readonly" class="textInput required"/>
          <p class="formHint">*Taken automatically</p>
        </div>
        <div class="ctrlHolder">
          <label for=""><em>*</em> Your name</label>
          <input name="name" id="name" data-default-value="Placeholder text" size="35" maxlength="50" type="text" class="textInput required"/>
          <p class="formHint">Required including sirname</p>
        </div>
        
        <div class="ctrlHolder">
          <label for=""><em>*</em> Your email</label>
          <input name="email" id="email" data-default-value="Placeholder text" size="35" maxlength="50" type="text" class="textInput required validateEmail"/>
          <p class="formHint">email address</p>
        </div>
        
         <div class="ctrlHolder">
          <label for=""><em>*</em> phone number</label>
          <input name="mobile" id="mobile" data-default-value="Placeholder text" size="35" maxlength="50" type="text"   class="required validateNumber validateMinLength val-10 validateMaxLength val-10"/>
          <p class="formHint">phone number</p>
        </div>
         <div class="ctrlHolder">
           <label for=""><em>*</em> number of persons</label>
          <input name="persons" id="a_number" data-default-value="Placeholder text" size="35" maxlength="10" type="text" class="textInput required validateInteger validateMin val-1 validateMax val-10"/>
          <p class="formHint">*required</p>
      </div>
		
        <div class="ctrlHolder">
          <label for=""><em>*</em> address</label>
          
          <textarea  rows="4" cols="100" name="add" id="add" data-default-value="Placeholder text" size="35" maxlength="600" type="text" class="required ">

</textarea>
          <p class="formHint">*required</p>
        </div>
        

        <div class="ctrlHolder">
          <p class="label" style="padding:5px;">Privacy agreement</p>
          <ul class="blockLabels">
            <li><label for=""><input type="checkbox" name="agreement" class="required"> I have read the rules and agree</label></li>
          </ul>
        </div>

      </fieldset>
      
      <div class="buttonHolder">
        
        <button type="submit" class="primaryAction">Submit</button>
      </div>

    </form>

                                          
                                         
                                    </div>
                                   
                                    
                                   
                                    
                              </article>
                              <div class="clearfix"></div>
                              
                                                           
                                                           
                        </div>
                  </div>
            </div>
      </section>
      <footer>
            <div class="container">
                  <div class="row">
                        <div class="span3" style="margin:0px;>    
                              <a href=""><img src="img/logo3.png" class="marginbot15" style="margin-left:15px;" alt="" /></a>
                              <p>
                              Forest DEPT, 
                              Kapila tertham, 
                              Tirupati.
                              </p>
                              <span>Copyright &copy; 2013 <a href="#">CBET</a></span><br>
							  <span>powered  by <a href="https://www.facebook.com/yyeshwanth4">Yeshwanth</a> | Universal Technologies</span>     
                        </div>
                        <div class="span1 hidden-phone">   
                              <span class="box-spacer"></span>
                        </div>                       
                        <div class="span2" style="margin:0px;">    
                              <ul class="link-list">
                                    <li><a href="index.html" >Home</a></li>
                                    <li><a href="talakona-waterfalls-near-tirupathi.html">Talakona</a></li>
                                    <li><a href="mamandur-forest-area.html">Mamandur</a></li>
                                    <li><a href="attraction of tirupathi surroundings.html">Other Attractions</a></li>
                              </ul>
                        </div>     
                        <div class="span2" style="margin:0px;">    
                              <ul class="link-list">
                                    <li><a href="pulicat-lake-birds-paradise.html">Pulicat</a></li>
                                    <li><a href="kailasakona-waterfall-place-to-visit-near-tirupathi.html">Kailasa kona</a></li>
                                    <li><a href="ubbalamadugu-or-tada-wtaerfalls.html">Ubbalamadugu</a></li>
                                    <li><a href="nelapattu-bird-sanctury-in-ap.html">Nelapattu</a></li>
                              </ul>
                        </div>     
                        <div class="span1 hidden-phone">   
                              <span class="box-spacer"></span>
                        </div>     
                        <div class="span4" style="margin-left:0px">    
                              <p>SUBSCRIBE TO OUR NEWSLETTER</p>
                              <form id="subscribeform" class="form-inline" action="emailcollection.php" method="post">
                                    <input name="mail" class="subscribe" id="appendedPrependedInput" type="text" placeholder="Enter your email address" />
                                    <button class="vbtn2 vbtn1-color" type="submit">Submit</button>
                              </form>    
                              <ul class="social-network">
                                    <li>FOLLOW US</li>
                                    <li class="facebook"><a href="https://www.facebook.com/talakonawaterfalls">Facebook</a></li>
                                    <li class="tweet"><a href="#">Twitter</a></li>
                                    <li class="skype"><a href="#">Skypes</a></li>
                                    
                              </ul>
                        </div>                             
                  </div>
            </div>           
      </footer>
</div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
      <script src="js/bootstrap.js"></script>
 
      <script src="js/google-code-prettify/prettify.html"></script>    
      <script src="js/jquery.easing.1.3.js"></script>
 
      <!-- flexslider -->    
      <script src="js/flexslider/jquery.flexslider.js"></script>
      <script src="js/flexslider/setting.js"></script>
     
      <!-- prettyPhoto -->
      <script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>     
      <script src="js/prettyPhoto/setting.js"></script>
 
      <!-- Ui to top -->     
      <script src="js/uitotop/smoothscroll.js"></script>
      <script src="js/uitotop/jquery.ui.totop.js"></script>
      <script src="js/uitotop/setting.js"></script>  
 
      <script src="js/custom.js"></script>
     
            <!-- work -->    
      <script >
     
      jQuery(document).ready(function($) {           
                  // Work hover          
                  $('.portfolio-area li').hover(
                  function() {                 
                        $(this).find('.work-caption').stop().fadeTo(900, 1);
                        $('.zoom', this).stop().animate({left:'48%'},{queue:false,duration:380});
                       
                        return false;
                  },
                  function() {
                        $(this).find('.work-caption').stop().fadeTo(900, 0);
                        $('.zoom', this).stop().animate({left:'0'},{queue:false,duration:300});
                        $('.link', this).stop().animate({right:'0'},{queue:false,duration:300});
                        return false;
                  }
            )
})(jQuery);
      </script>
 
  <script id="source" language="javascript" type="text/javascript">
	$(function() {  
	$("#ajaxform").submit(function(e)
	{
		e.preventDefault(); //STOP default action
		if(validateEmail($("#eone").val())==false && $("#none").val()!='' && $("#mone").val()!=''){
			
					var postData = $(this).serializeArray();
					var formURL = $(this).attr("action");
					
					$.ajax(
					{
						url : formURL,
						type: "POST",
						data : postData,
						success:function(data, textStatus, jqXHR) 
						{
							
							//data: return data from server
							//alert(data);
							if(data == "yes")
							{
								alert("submitted!. our coordinator will respond shortly");	
							}
							else{
								alert("server is busy try after some tme");	
							}
							
						},
						error: function(jqXHR, textStatus, errorThrown) 
						{
							alert("server is busy try after some tme");
							//if fails      
						}
					});
			
		}
		else{
			alert("fill your details");	
		}
		
	});
	
	
	 function validateEmail($email) {
			  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			  if( !emailReg.test( $email ) ) {
				return false;
			  } 
			  else {
				return true;
		  	  }
		}

	$("#subscribeform").submit(function(e)
	{
		e.preventDefault(); //STOP default action
		if(validateEmail($("#appendedPrependedInput").val())==false){	
			var postData = $(this).serializeArray();
			var formURL = $(this).attr("action");
			
			$.ajax(
			{
				url : formURL,
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					if(data == "yes")
					{
						alert("Your mail is rgistered for our news and updates");	
					}
					else{
						alert("server is busy try after some tme");	
					}
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
					alert("server is busy try after some tme");
						  
				}
			});
		}
		else
		{
			alert("enter valid email");	
		}
		e.preventDefault(); //STOP default action
	});
	 
	//$("#ajaxform").submit(); //Submit  the FORM
	})
  </script>
  
  
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="./js/uni-form-validation.jquery.js" charset="utf-8"></script>
    <script type="text/javascript" src="./localization/es.js" charset="utf-8"></script>
    <script>
      $(function(){
        $('form.uniForm').uniform({
          prevent_submit : true
        });
      });
    </script>

</body>

</html>