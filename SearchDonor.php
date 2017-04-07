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


// array for JSON response
 $return_array = array();
$AT=$_POST['AT'];
 
 $fetch = mysql_query("SELECT * 
						FROM donor 
						WHERE AT='$AT'")
			or die(mysql_error());
			
		//$response['status'] = 'SUCCESS';	
// check for empty result
if (mysql_num_rows($fetch) > 0) {
    while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
        $row_array["Id"] = $row["Id"];
		$row_array["Lname"] = $row["Lname"];
		$row_array["Fname"]= $row["Fname"];
		$row_array["FatherName"]= $row["FatherName"];
		$row_array["BirthYear"]= $row["BirthYear"];
		$row_array["Phone"]= $row["Phone"];
		$row_array["Address"]= $row["Address"];
		$row_array["AT"]=$row["AT"];
		$row_array["Occupation"]= $row["Occupation"];
		$row_array["BirthPlace"]= $row["BirthPlace"];
		$row_array["BloodType"]= $row["BloodType"];
		$row_array["Rh"]= $row["Rh"];
				
		
		// push a row into final response array
        array_push($return_array, $row_array);
		
    }
	
	
    //echo json_encode(JSON_UNESCAPED_UNICODE);
    

}
 echo json_encode($return_array,JSON_UNESCAPED_UNICODE);
?>