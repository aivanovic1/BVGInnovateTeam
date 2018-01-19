<?php
require 'conn.php';
$company = "Long and Mcquade";
$category = "tuba";
$mysql_qry = "select * from index_logging where company like '$company' and category like '$category';";

$result = mysqli_query($conn, $mysql_qry);

if(mysqli_num_rows($result) > 0){
	echo "check success";

}else{
	echo "check not success";

}
?>