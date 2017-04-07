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

	
	$Bagtype=$_POST['Bagtype'];
	$Anticoagulant=$_POST['Anticoagulant'];
	$Volume=$_POST['Volume'];
	$IdSession=$_POST['IdSession'];
	$TagRfid=$_POST['TagRfid'];
	
	
	
	
	
	
	 $fetch = mysql_query("INSERT INTO bloodbag ( Bagtype,Anticoagulant,Volume,IdSession,TagRfid) 
									VALUES ( '$Bagtype','$Anticoagulant','$Volume','$IdSession','$TagRfid')")
			or die(mysql_error());

?>