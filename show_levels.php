<?php
require ('d_base_/conn.php');

ob_start();
//enable cross domain requests
header("Access-Control-Allow-Origin: *");
//enable json output
header("Content-Type: application/json");

//query the database to retrieve list of levels
$sql = "SELECT * FROM  `level_tbl`";
$result=mysql_query($sql);


$records = array();

while($row = mysql_fetch_assoc($result)) {
	$records[] = $row;
}
//encode and display json data
echo $_GET['jsoncallback'] . '(' . json_encode($records) . ');';

?>
