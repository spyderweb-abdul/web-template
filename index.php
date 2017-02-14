<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/favicon.png" />

<title> Spyderweb - Template </title>



<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="animate.css-master/animate.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!-- Angular Material style sheet -->
<link rel="stylesheet" href="angular-material-1.1.3/angular-material.min.css">
<link rel="stylesheet" href="css/style.css" type="text/css" />

<style type="text/css">


  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0px;
      width: 100%;	 
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
/*body, html, .main {
    height: 100%;
}*/
body, html {
    height: 100%;
	
}
section {
    min-height: 100%;
}
a:hover {
	text-decoration: none !important;
}
a: hover .fa
{
	text-decoration:none !important;
}
  </style>
</head>

<body ng-app="BlankApp" ng-cloak>

<div id="mySidenav" class="sidenav">
  <a href="#about"> Who I am </a>
  <a href="#jobs"> Jobs & Experiences</a>
  <a href="#project"> Projects </a>
  <a href="#hobbies"> Hobbies </a>
  <a href="#contact"> Contact </a>
  <a href=""> Blog </a>


</div>



<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
<div class="container">


<!-- Header Content --> <?php include('includes/navbar.php'); ?> <!-- Header ends here -->

<!--  Body Proper -->

<!-- first segment -->
<div class="row" style="min-height:100% !important; width:auto; " id="top">
<div class="col-md-4" >
<img src="images/spyder1.png" id="spyder-pix"/>
</div>
<div class="col-md-6 divContent1">
<p class="writeUp1" id="cnt1"> Hello World! </p>
<p class="writeUp2" id="cnt2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum eget felis eu rhoncus. Donec elit massa, malesuada et orci eget, posuere malesuada erat. Donec laoreet laoreet euismod. Nullam convallis posuere neque, ut maximus risus mollis ut. Duis et dui non est fringilla ullamcorper. Vivamus accumsan gravida sem ut viverra. Aenean nunc nisl, vestibulum quis lobortis eu, cursus a ante. Duis consequat sem id auctor porttitor. Ut in mollis risus. Nulla pellentesque, eros vel tempor sagittis, eros sapien dignissim eros, in congue lacus turpis pharetra urna. In non tempus leo, quis pretium quam. Sed in feugiat lorem. Nulla eu blandit leo.


<p style="display:block; text-align:center;"> <a href="#about"> <i class="fa fa-angle-double-down"></i> </a> </p>
</div>
</div>
<!-- first segment ends -->

<!-- second segment -->
<div class="row sec2 arrow_box_sec2" id="about">

<p class="heading_white"> Who I am </p>
<p class="sec2-content">
<a href="#" target="_blank">  <i class="fa fa-twitter"> </i> <span style="color:#F60;"> @twitter handle</span> </a> <br/><br/>
<i class="fa fa-angle-double-right"></i> Simply put, let's just say; <span style="color:#F66;"> 'I do quite amazing things with the web' </span> and...I code well too! I have good number of years of experience <span style="color:#669;"> developing stuffs; </span> <span style="color:#F60;"> supervising projects; </span> administering systems; <span style="color:#F66;">learning and exploring new stuff. </span><br/><br/>
<i class="fa fa-angle-double-right"></i> I have a Bachelors Degree in <span style="color:#F66;"> Computer Science, </span> a Postgraduate Diploma in <span style="color:#F60;"> Management Science </span> and a <span style="color:#669;">Masters Degree in ICT Law. </span><br/><br/>
Strengths<span style="color:#F66;"><i class="fa fa-angle-double-right"></i></span> HTML5, CSS3, SASS, <span style="color:#669;">Php, MySQL, jQuery, Ajax, </span> Twitter Bootstrap, AngularJS, Angular Material, Web APIs, <span style="color:#F60;">Joomla, Drupal (themeing & module), Wordpress </span> and lots of other frameworks. 
I do <span style="color:#F66;"> e-Commerce system </span> development/integration and well-muscled in <span style="color:#F60;"> online payment systems; </span>very experienced in all <span style="color:#F60;">Nigerian payment gateway APIs.</span><br/>
<i class="fa fa-angle-double-right"></i>  Also do stuffs on <span style="color:#F66;"> ERP, CRM, SEO </span> and provide training and resource guide on <span style="color:#F66;"> Google based cloud solutions. </span> <br/><br/>
Interests<span style="color:#F66;"><i class="fa fa-angle-double-right"></i></span> Going forward, I want to concentrate on <span style="color:#669;">Information and Communications Technology Law </span> with strong research focus on <span style="color:#F66;"> Legal Laws relating to: Cyber; Artificial Intelligence; and Cryptosystems </span>...on a trivial level, I love footbal; I support <a href="https://www.twitter.com/ManUtd" target="_blank"> <i class="fa fa-twitter"> </i>  @ManUtd </a>. I love <span style="color:#F60;">Politics; I'm an aspiring occupant of the State House. </span> Yes!, why not?!
<br/>
<p style="display:block; text-align:center;"> <a href="#jobs"> <i class="fa fa-angle-double-down"></i> </a> </p>

</p>

</div>
<!-- Second segment ends here -->

<!-- Parallax scrolling -->
<div class="parallax-img" style="display:block; padding:100px 0; text-align:center;"> 

<span class="download"> <i class="fa fa-2x fa-download"></i>  Download </span><br/>
<button type="button" class="button" data-toggle="modal" data-target="#template"> <span> This Web Template </span></button> &nbsp; <a href="docx/cv.pdf" target="_blank" class="button"> <span> My Resume </span></a>

</div>
<!-- Parallax ends here -->

<!-- Third segment -->
<div class="row sec3 arrow_box_sec3" id="jobs" >
<p class="heading_black"> Jobs & Experiences </p><br/>

<div class="col-md-3">
  <div class="contain" id="jobs1" tabindex="-1">
    <i class="fa fa-briefcase"> </i> Employer's Name #1
    <div class="overlay"> Position #1 </div> 
  </div>
</div>

<div class="col-md-3">
  <div class="contain" id="jobs2" tabindex="-1">
    <i class="fa fa-briefcase"> </i> Employer's Name #2
    <div class="overlay"> Position #2</div> 
  </div>
</div>

<div class="col-md-3">
  <div class="contain" id="jobs3" tabindex="-1">
    <i class="fa fa-briefcase"> </i> Employer's Name #3
    <div class="overlay"> Position #3 </div> 
  </div>
</div>
 
 <div class="col-md-3">
  <div class="contain" id="jobs4" tabindex="-1">
    <i class="fa fa-briefcase"> </i> Employer's Name #4
    <div class="overlay"> Position #4 </div> 
  </div>
</div>

<div class="col-md-3">
  <div class="contain" id="jobs5" tabindex="-1">
    <i class="fa fa-briefcase"> </i> Employer's Name #5
    <div class="overlay"> Position #5 </div> 
  </div>
</div>

<div class="col-md-3">
  <div class="contain" id="jobs6" tabindex="-1">
    <i class="fa fa-briefcase"> </i> Employers's Name #6
    <div class="overlay"> Position #6 </div> 
  </div>
</div>


<div class="col-md-3">
  <div class="contain" id="jobs7" tabindex="-1">
    <i class="fa fa-briefcase"> </i> Employer's Name #7
    <div class="overlay"> Position #7 </div> 
  </div>
</div>

<div class="col-md-3">
  <div class="contain" id="jobs8" tabindex="-1">
    <i class="fa fa-briefcase"> </i> Employer's Name #8
    <div class="overlay"> Position #8 </div> 
  </div>
</div>

</div>
<!-- Third segment ends here -->


<!-- Fourth segment ends here -->
<div class="row sec4" id="project">

<p class="heading_white"> Projects </p><br/>

<div>
<?php include('includes/carousel-animation.php'); ?>
</div>
<br/>
<p style="display:block; text-align:center;"> <a href="#contact"> <i class="fa fa-angle-double-down"></i> </a> </p>

</div>
<!-- Fourth segment ends here -->

<!-- Fifth segment ends here -->
<div class="row sec5" id="hobbies">
<p class="heading_black"> Hobbies </p><br/>

<div class="col-md-2"> <span class="hobby_img"> Reading <img src="images/Library-512.png" /> </span> </div>
<div class="col-md-2"> <span class="hobby_img"> Coding <img src="images/coding.png" /> </span></div>
<div class="col-md-2"> <span class="hobby_img"> Working Out <img src="images/gym.png" /> </span></div>
<div class="col-md-2"> <span class="hobby_img"> Watching Football <img src="images/watching.png" /> </span></div>
<div class="col-md-2"> <span class="hobby_img"> Travelling <img src="images/vacation_25-512.png" /> </span></div>



</div>
<!-- Fifth segment ends here -->

<!-- Sixth segment ends here -->
<div class="row sec6 arrow_box_sec6" id="contact">
<p class="heading_black"> Contact </p><br/>

<div class="col-md-7 contact_content">
Like what you are seeing? Or you feel we can work on something together? Why not feed me back:
<form name="feedbackForm" id="feedbackForm" > 
 <div ng-controller="DemoCtrl" layout="column" layout-padding="" ng-cloak="" class="inputdemoIcons buttonBasic" ng-app="BlankApp">

  <br>
  <md-content class="md-no-momentum">
    <md-input-container class="md-block" flex="50">
      <label>Name</label>
      <md-icon class="material-icons"> face </md-icon>
      <input ng-model="user.name" id="name" name="name" type="text" ng-required="true">
    </md-input-container>

    <md-input-container class="md-block" flex="50">
      <md-icon class="material-icons"> call </md-icon>
      <input ng-model="user.phone" id="phone" name="phone" type="text" placeholder="Phone Number">
    </md-input-container>

    <md-input-container class="md-block" flex="50">
      <md-icon class="material-icons"> email </md-icon>
      <input ng-model="user.email" type="email" id="email" name="email" placeholder="Email (required)" ng-required="true">
    </md-input-container>

    <md-input-container class="md-block" flex="50" >
    <label> Feedback/Comment </label>
      <textarea ng-model="user.comment" id="comment" name="comment" md-maxlength="200" rows="4" ng-required="true"> </textarea>
    </md-input-container>
    
    <input class="md-button md-raised md-primary" type="submit" id="save" value="Send Feedback">


  </md-content>

</div>
</form>

<p id="response"> </p>
</div>

<div class="col-md-5 contact_content">
 <p> Why not let me handle your next online job? Contact me: </p><br/>
 <p> <i class="fa fa-2x fa-envelope-square"> </i> Your Email Address </p><br/>
 <p> <i class="fa fa-2x fa-phone"> </i> Your Phone Number </p><br/>
 <p> <a href="#" target="_blank"> <i class="fa fa-2x fa-twitter-square contact"> </i> </a> &nbsp; &nbsp; <a href="#" target="_blank"> <i class="fa fa-2x fa-linkedin-square contact"> </i> </a>
 &nbsp; &nbsp; <a href="#" target="_blank"> <i class="fa fa-2x fa-github-square contact" style="text-decoration:none;"> </i> </a> &nbsp; &nbsp; <a href="#" target="_blank"> <i class="fa fa-2x fa-facebook-square contact"> </i> </a>
 &nbsp; &nbsp; <a href="#" target="_blank"> <i class="fa fa-2x fa-instagram contact"> </i> </a> </p><br/>
 <p> <a href="https://www.google.com.ng/maps/place/Usmanu+Danfodiyo+University/@13.1264383,5.196973,17z/data=!3m1!4b1!4m5!3m4!1s0x11b7e78ca067c44d:0x423e109e43a67621!8m2!3d13.1264383!4d5.1991617?hl=en" target="_blank">
 <i class="fa fa-2x fa-map-marker"> </i> Your Address </a>
 </p>

</div>



</div>
<!-- Sixth segment ends here -->

<div class="row footer"> &copy; 2017 Spyderweb-Template. All rights reserved. <br/><br/> built by <span style="color:#00CCCC"> <a href="#" target="_blank">  <i class="fa fa-twitter"> </i> @Twitter Handle </a> | <a href="javascript.void()" data-toggle="modal" data-target="#disclaimer"> Disclaimer </a></span> </div>

<!-- Body ends here -->


</div> <!-- container -->
</div> <!-- Main -->


<!-- Modal Overlay - Template Download -->
<div id="template" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Download this web template for free!</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum eget felis eu rhoncus. Donec elit massa, malesuada et orci eget, posuere malesuada erat. Donec laoreet laoreet euismod. Nullam convallis posuere neque, ut maximus risus mollis ut. Duis et dui non est fringilla ullamcorper. Vivamus accumsan gravida sem ut viverra. Aenean nunc nisl, vestibulum quis lobortis eu, cursus a ante. Duis consequat sem id auctor porttitor. Ut in mollis risus. Nulla pellentesque, eros vel tempor sagittis, eros sapien dignissim eros, in congue lacus turpis pharetra urna. In non tempus leo, quis pretium quam. Sed in feugiat lorem. Nulla eu blandit leo.
           </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal Ends -->

<!-- Modal Overlay - Disclaimer -->
<div id="disclaimer" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Disclaimer</h4>
      </div>
      <div class="modal-body">
        <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum eget felis eu rhoncus. Donec elit massa, malesuada et orci eget, posuere malesuada erat. Donec laoreet laoreet euismod. Nullam convallis posuere neque, ut maximus risus mollis ut. Duis et dui non est fringilla ullamcorper. Vivamus accumsan gravida sem ut viverra. 
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal Ends -->

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/js-script.js" ></script>

 <!-- Angular Material requires Angular.js Libraries -->
  <script src="angular-1.5.5/angular.min.js"></script>
  <script src="angular-1.5.5/angular-animate.min.js"></script>
  <script src="angular-1.5.5/angular-aria.min.js"></script>
  <script src="angular-1.5.5/angular-messages.min.js"></script>

  <!-- Angular Material Library -->
  <script src="angular-material-1.1.3/angular-material.min.js"></script>
  
  <script type="text/javascript">    
    
  angular.module('BlankApp',['ngMaterial', 'ngMessages']).controller('DemoCtrl', function($scope) {
    $scope.user = {
      name: '',
      email: '',
      phone: '',
      comment: '',
    };
  });



$('#save').click(function(event){
	event.defaultPrevented;
	
	if(($('#name').val() != '') && ($('#email').val() != '') && ($('#comment').val() != ''))
	{
	$('#response').html('<img src="images/wait.gif" />')
	
	  var dataString = $('#feedbackForm').serialize();
	  $.ajax({
		   
		      type: 'POST',
			  url: 'ajaxCalls/feedbackResponse.php',
			  dataType: 'html',
			  data: dataString,
			  success: function(msg)
			  {
				  $('#response').empty();
				  $('#response').html(msg);
				  
			  },
			  error: function()
			  {
				  alert('Operation Failed. Please Re-try');
			  }
		  
		  
	  });
	}
	else
	{
		alert('You must fill all required fields.')
 	}
	
	});

</script>


</body>
</html>