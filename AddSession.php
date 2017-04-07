<?php
$host="localhost";
$user_name="root";
$password="";
$dbname="bloodbank";


// Connect to database server
	$conn=mysql_connect($host, $user_name,$password) or die (mysql_error());
        
	mysql_query("SET character_set_results=utf8", $conn);
	mysql_query("SET NAMES 'utf8'", $conn);
	mysql_select_db($dbname,$conn);
	
	$Pressure=$_POST['Pressure'];
	$HbHt=$_POST['HbHt'];
	$Status=$_POST['Status'];
	$Reactions=$_POST['Reactions'];
	$Id_user=$_POST['Id_user'];
	$Id_donor=$_POST['Id_donor'];

 $fetch = mysql_query("INSERT INTO `session`( `Pressure`, `HbHt`, `Status`, `Reactions`, `Id_user`, `Id_donor`)
							VALUES ('$Pressure','$HbHt','$Status','$Reactions','$Id_user','$Id_donor')")
			or die(mysql_error());
		


?>