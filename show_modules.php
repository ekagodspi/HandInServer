<?php
require ('d_base_/conn.php');

ob_start();
//enable cross domain requests
header("Access-Control-Allow-Origin: *");
//enable json output
header("Content-Type: application/json");

//retrieve the query string from the url
$year=$_REQUEST['yr'];

//query the database for module list for a specific level
$sql = "SELECT * FROM  `Modules_tbl` WHERE  `Level_id` =  $year";
$result=mysql_query($sql);

$modules = array();

while($row = mysql_fetch_assoc($result)) {
	$modules[] = $row;
}
//encode and display json data
echo $_GET['jsoncallback'] . '(' . json_encode($modules) . ');';

?>
