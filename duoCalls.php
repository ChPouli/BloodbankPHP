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
	
	$return_array = array();

 $fetch = mysql_query("INSERT INTO `session`( `Pressure`, `HbHt`, `Status`, `Reactions`, `Id_user`, `Id_donor`)
							VALUES ('$Pressure','$HbHt','$Status','$Reactions','$Id_user','$Id_donor')")
			or die(mysql_error());
		
$fetch2 = mysql_query("SELECT * FROM `session` WHERE date(Time)=CURDATE() && id_donor='$Id_donor'")
			or die(mysql_error());

			if (mysql_num_rows($fetch2) > 0) {
				while ($row = mysql_fetch_array($fetch2, MYSQL_ASSOC)) {
					$row_array["Id"] = $row["Id"];
					//$row_array["Time"] = $row["Time"];
					$row_array["Id_user"] = $row["Id_user"];
					$row_array["Id_donor"] = $row["Id_donor"];
					
		
		
		// push a row into final response array
				array_push($return_array, $row_array);
				}
	
	
    //echo json_encode(JSON_UNESCAPED_UNICODE);
   // echo json_encode($return_array,JSON_UNESCAPED_UNICODE);

}
 echo json_encode($return_array,JSON_UNESCAPED_UNICODE);
?>