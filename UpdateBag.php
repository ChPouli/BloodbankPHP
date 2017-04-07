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

	
	$Kind=$_POST['Kind'];
	$Bloodtype=$_POST['Bloodtype'];
	$Rh=$_POST['Rh'];
	$Checked=$_POST['Checked'];
	$TagRfid=$_POST['TagRfid'];
	$available=$_POST['available'];
	
	
	
	
	
	 $fetch = mysql_query("UPDATE `bloodbag`
							SET `Checked` = '$Checked', Kind='$Kind', Bloodtype='$Bloodtype',Rh='$Rh',available='$available'
							WHERE `bloodbag`.`TagRfid` = '$TagRfid'")
			or die(mysql_error());

?>