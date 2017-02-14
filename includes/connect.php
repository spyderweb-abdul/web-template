<?php
$username_db1 = "root";
$password_db1 = "@justweb";
$hostname_db1 = "localhost";
$mydb = mysql_connect($hostname_db1, $username_db1, $password_db1);
mysql_select_db ("me_db", $mydb);


?>
