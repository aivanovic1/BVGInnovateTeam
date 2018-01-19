<?php
$db_name = "longlineitis";
$mysql_username = "root";
$mysql_password = "longlineitis";
$server_name = "localhost";

$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

if($conn){
	echo "connection success";
}else{
	echo "connection not success";
}
?>	

