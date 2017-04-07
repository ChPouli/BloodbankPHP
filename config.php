<?php
$host="localhost";
$user_name="root";
$password="";
$dbname="bloodbank";
$tablename="patient";
$conn=mysqli_connect($host,$user_name,$password);
$bd=mysqli_select_db($conn,$dbname);
mysqli_set_charset($conn, "utf8");


?>