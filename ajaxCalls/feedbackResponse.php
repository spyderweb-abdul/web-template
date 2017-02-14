<?php

include_once '../includes/connect.php';

//Form Post

$name = mysql_real_escape_string(trim(htmlspecialchars($_POST['name'])));
$phone = mysql_real_escape_string(trim(htmlspecialchars($_POST['phone'])));
$email = mysql_real_escape_string(trim(htmlspecialchars($_POST['email'])));
$comment = mysql_real_escape_string(trim(htmlspecialchars($_POST['comment'])));

//SQL POST
$sql = mysql_query("INSERT INTO feedback_tbl (name, phone, email, comment) VALUES ('$name', '$phone', '$email', '$comment')", $mydb);
if($sql == TRUE)
{
	echo '<div class="alert alert-success alert-dismissable">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close"> x </a>
	 Thank you! Feedback received. 
	 </div>';
	
}
else
{
	echo '<div class="alert alert-danger alert-dismissable">
     <a href="#" class="close" data-dismiss="alert" aria-label="close"> x </a>
	 Oops! Your message cannot be sent now. Please, try again. 
	 </div>';
}
?>