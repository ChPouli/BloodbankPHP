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
 
 $fetch = mysql_query("SELECT * 
						FROM  patient")
			or die(mysql_error());
			
// check for empty result
if (mysql_num_rows($fetch) > 0) {
    while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
        $row_array["Id"] = $row["Id"];
		$row_array["Lname"] = $row["Lname"];
		$row_array["Fname"]= $row["Fname"];
		$row_array["Fathername"]=$row["Fathername"];
		
		
		// push a row into final response array
        array_push($return_array, $row_array);
    }
	
    //echo json_encode(JSON_UNESCAPED_UNICODE);
    echo json_encode($return_array,JSON_UNESCAPED_UNICODE);

}
?>


