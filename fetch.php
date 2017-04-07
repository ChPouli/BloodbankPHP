<?php
include_once("config.php");

$query=mysqli_query($conn,"SELECT * FROM ".$tablename);
$array;
while($result=mysqli_fetch_assoc($query)){
$array[]=$result;
}
echo json_encode($array,JSON_UNESCAPED_UNICODE);

?>