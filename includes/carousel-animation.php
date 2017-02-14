<?php
echo '<div class="container main-container">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">';
      // Indicators -->
   echo'<ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		<li data-target="#carousel-example-generic" data-slide-to="4"></li>
		<li data-target="#carousel-example-generic" data-slide-to="5"></li>
		        

      </ol>';//<!-- Indicator ends -->

      // Wrapper for slides -->
      echo' <div class="carousel-inner" role="listbox">';

        // First slide -->
       echo '<div class="item active">

            <div> <img src="images/carousel1.png" /> </div>  
         
            </div>'; //<!-- Item -->

        //Second slide -->
       echo '<div class="item">
              <div> <img src="images/carousel2.png" />   </div>
            </div>'; //<!-- /.item -->     
       
        //<!-- Third slide -->
        echo '<div class="item">
                 <div>  <img src="images/carousel3.png" /> </div>
            
              </div>'; //<!-- /.item -->
         
         
         // <!-- Fourth Slide -->
        echo '<div class="item">
          
		   <div> <img src="images/carousel4.png" />  </div>
             
			  </div>'; //<!-- /.item -->
			  
	           
         // <!-- Fifth Slide -->
        echo '<div class="item">
          
		   <div> <img src="images/carousel5.png" />  </div>
             
			  </div>'; //<!-- /.item -->
			 

      
	  echo '</div>'; //<!-- /.carousel-inner -->

     // <!-- Controls -->
      echo '<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-circle-arrow-left"aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
			
           <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
           <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
           </a>
	  
    </div>'; //<!-- /.carousel -->

echo '</div>'; //<!-- /.container -->