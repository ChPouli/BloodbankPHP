<?php
$connection_mysql= mysqli_connect("localhost","root","","bloodbank");
// Check connection
if (mysqli_connect_errno($connection_mysql))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	//$bd=mysqli_select_db($connection_mysql,$dbname);
	mysqli_set_charset($connection_mysql, "utf8");


$return_array = array();
$sql = "INSERT INTO `session`( `Pressure`, `HbHt`, `Status`, `Reactions`, `Id_user`, `Id_donor`)
							VALUES ('12','3','1','μπλα','2','6'); SELECT * FROM `session` WHERE date(Time)=CURDATE() && id_donor='6'";

							
							
 if (mysqli_multi_query($connection_mysql,$sql)){
      do{
         if ($result=mysqli_store_result($connection_mysql)){
            while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
				$row_array["Id"] = $row["Id"];
				$row_array["Reactions"] = $row["Reactions"];
				
		
		// push a row into final response array
        array_push($return_array, $row_array);
            }
			echo json_encode($return_array,JSON_UNESCAPED_UNICODE);
            mysqli_free_result($connection_mysql);
         }
      }while (mysqli_next_result($connection_mysql));
   }
   mysqli_close($connection_mysql);


?>