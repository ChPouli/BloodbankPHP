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
 $Fathername=$_POST['Fathername'];
 $BirthYear=$_POST['BirthYear'];
 $Phone=$_POST['Phone'];
 $Address=$_POST['Address'];
 $AT=$_POST['AT'];
 $Clinic=$_POST['Clinic'];
 $Diagnosis=$_POST['Diagnosis'];
 $Bloodtype=$_POST['Bloodtype'];
 $Rh=$_POST['Rh'];
 $Fenotypos=$_POST['Fenotypos'];
 $Antisomata=$_POST['Antisomata'];



 $fetch = mysql_query("INSERT INTO patient (Id, Lname, Fname, Fathername,BirthYear, Phone, Address, AT, Clinic, Diagnosis, Bloodtype, Rh, Fenotypos, Antisomata)
 VALUES (NULL, '$Lname', '$Fname', '$Fathername', '$BirthYear', '$Phone', '$Address', '$AT', '$Clinic', '$Diagnosis', '$Bloodtype', '$Rh', '$Fenotypos', '$Antisomata')")
			or die(mysql_error());
		


?>