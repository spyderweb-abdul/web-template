// JavaScript Document
/* Set the width of the side navigation to 180px and the left margin of the page content to 180px */
function openNav() {
    document.getElementById("mySidenav").style.width = "180px";
    document.getElementById("main").style.marginLeft = "180px";
	document.getElementById("open").style.display = "none";
	document.getElementById("close").style.display = "inline";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
	document.getElementById("open").style.display = "inline";
	document.getElementById("close").style.display = "none";
}
//

<!-- For Animation.css -->
   $.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
       }
    });

$("#spyder-pix").animateCss('fadeIn');
$("#cnt1").animateCss('zoomIn');
$("#cnt2").animateCss('fadeIn');



//$("#jobs1").focus(function(){
  $("#jobs1").animateCss('zoomIn');
  $("#jobs2").animateCss('zoomIn');
  $("#jobs3").animateCss('zoomIn');
  $("#jobs4").animateCss('zoomIn');
  $("#jobs5").animateCss('zoomIn');
  $("#jobs6").animateCss('zoomIn');
  $("#jobs7").animateCss('zoomIn');
  $("#jobs8").animateCss('zoomIn');

//});
$(document).ready(function()
{
    $('#facebook').tooltip(); 
	$('#twitter').tooltip();
	$('#google-plus').tooltip();
	$('#instagram').tooltip();
	$('#linkedin').tooltip();
	$('#github').tooltip();

});




//Smooth Scrolling

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 600, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


//Scroll Top

$(document).ready(function() {
 
var offset = 250; 
var duration = 300;
 
$(window).scroll(function() {
 
if($(this).scrollTop() > offset)
{ 
$('.back-to-top').fadeIn(duration);
} 
else { $('.back-to-top').fadeOut(duration); }
});

$('.back-to-top').click(function(event){
event.preventDefault();
 
$('html, body').animate({scrollTop: 0}, duration); 
return false;
})
 
});
 



 
