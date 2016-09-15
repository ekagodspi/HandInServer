<?php
require ('d_base_/conn.php');

ob_start();
//enable cross domain requests
header("Access-Control-Allow-Origin: *");
//enable json output
header("Content-Type: application/json");

//retrieve the query string from the url
$assignment_id=$_REQUEST['ass_id'];

//query the database for assignment details partainig to a specific assigments
$sql = "SELECT * FROM `assignment_tbl` WHERE `Assignment_id` LIKE '".$assignment_id."'";
$result=mysql_query($sql);

$i=1;

 $assignment_array='[';
 if($result){

 $assignment_list=mysql_fetch_array($result);

//encode list into json format
$assignment_array.='{'.json_encode('Module_id').':'.json_encode($assignment_list['Module_id']).','.json_encode('Assignment_id').':'.json_encode($assignment_list['Assignment_id']).','.json_encode('Title').':'.json_encode($assignment_list['Title']).','.json_encode('Max_words').':'.json_encode($assignment_list['Max_words']).','.json_encode('Due_date').':'.json_encode($assignment_list['Due_date']).','.json_encode('Description').':'.json_encode($assignment_list['Description']).','.json_encode('Faculty_name').':'.json_encode($assignment_list['Faculty_name']).','.json_encode('Faculty_Email').':'.json_encode($assignment_list['Faculty_Email']).'}';

 }
 $assignment_array.=']';

 //output the json data
 echo $assignment_array;

?>
