
<!--databse connection, i put it in a seperate file, because i will require it in different files-->
<?php
//four variables to connect to the database
$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database = "test";

//create a database connection instance
$mysqli = new mysqli($host,$username,$user_pass,$database);
?>