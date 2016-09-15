<?php
require ('d_base_/conn.php');

ob_start();
//enable cross domain requests
header("Access-Control-Allow-Origin: *");
//enable json output
header("Content-Type: application/json");

//retrieve the query string from the url
$module_id=$_REQUEST['mid'];

//query the database for list of assignments  partainig to a specific module
$sql = "SELECT * FROM `assignment_tbl` WHERE `Module_id` LIKE '".$module_id."' ORDER BY `Due_date` ASC";
$result=mysql_query($sql);

$i=1;

 $assignment_array='[';
 if($result){
 $num = mysql_num_rows($result);
 while($assignment_list=mysql_fetch_array($result)){
 	if($i != $num)
	{
    //encode result into json format
$assignment_array.='{'.json_encode('Module_id').':'.json_encode($assignment_list['Module_id']).','.json_encode('Assignment_id').':'.json_encode($assignment_list['Assignment_id']).','.json_encode('Title').':'.json_encode($assignment_list['Title']).','.json_encode('Due_date').':'.json_encode($assignment_list['Due_date']).'},';
}
else
{
$assignment_array.='{'.json_encode('Module_id').':'.json_encode($assignment_list['Module_id']).','.json_encode('Assignment_id').':'.json_encode($assignment_list['Assignment_id']).','.json_encode('Title').':'.json_encode($assignment_list['Title']).','.json_encode('Due_date').':'.json_encode($assignment_list['Due_date']).'}';
}
$i++;
 }
 }
 $assignment_array.=']';
 //output json data
 echo $assignment_array;

?>
