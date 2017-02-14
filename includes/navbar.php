<?php

//<!--   Navbar Starts Here -->
echo '<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  
  <div class="container-fluid">';
   
   //<!-- Brand and toggle get grouped for better mobile display -->
   
   echo '<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>';
	  
     //<!-- <a class="navbar-brand" href="#">Brand</a>-->
    
	echo '</div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
		<ul class="nav navbar-nav navbar-left">';
 	    // Use any element to open the sidenav
           echo '<li id="open" style="display:inline;" onclick="openNav()">
           <div id="openMenu"> <b class="fa fa-list"></b> MENU </div>		
			</li>
			
			 <li id="close" style="display:none;" class="closebtn" onclick="closeNav()">
			 <div id="closeMenu"> <b class="fa fa-close"></b> CLOSE </div>
			 </li>

			<li><a href="#top"> <span class="logo">  Your Site Name </span> </a> </li>
		 </ul>';
		   
           /*<ul class="nav navbar-nav navbar-right">
           <li><a href="#" id="facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook Official"> <i class="fa fa-2x fa-facebook"></i> </a> </li>
           <li><a href="#" id="twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter Official"> <i class="fa fa-2x fa-twitter"></i> </a></li>
           <li><a href="#" id="google-plus" data-toggle="tooltip" data-placement="bottom" title="Google Plus Official"> <i class="fa fa-2x fa-google-plus"></i> </a></li>
		   <li><a href="#" id="linkedin" data-toggle="tooltip" data-placement="bottom" title="LinkedIn Official"> <i class="fa fa-2x fa-linkedin"></i> </a></li>
		   <li><a href="#" id="instagram" data-toggle="tooltip" data-placement="bottom" title="Instagram Official"> <i class="fa fa-2x fa-instagram"></i> </a></li>
		   <li><a href="#" id="github" data-toggle="tooltip" data-placement="bottom" title="GitHub"> <i class="fa fa-2x fa-github"></i> </a></li>
           </ul>*/
      echo '</div>';
	  
	  //<!--.navbar-collapse -->
	  
	   //<!--container-fluid -->
   echo '</div>  
    </nav>';
	
	?>
