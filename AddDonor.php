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
	

	
 $Lname =$_POST['Lname'];
 $Fname=$_POST['Fname'];
 $FatherName=$_POST['FatherName'];
 $BirthYear=$_POST['BirthYear'];
 $Phone=$_POST['Phone'];
 $Address=$_POST['Address'];
 $AT=$_POST['AT'];
 $Occupation=$_POST['Occupation'];
 $BirthPlace=$_POST['BirthPlace'];
 $Bloodtype=$_POST['BloodType'];
 $Rh=$_POST['Rh'];
 



 $fetch = mysql_query("INSERT INTO donor (Id, Lname, Fname, FatherName,BirthYear, Phone, Address, AT, Occupation, BirthPlace, BloodType, Rh)
 VALUES (NULL, '$Lname', '$Fname', '$FatherName', '$BirthYear', '$Phone', '$Address', '$AT', '$Occupation', '$BirthPlace', '$Bloodtype', '$Rh')")
			or die(mysql_error());
		


?>