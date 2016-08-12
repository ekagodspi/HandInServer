<?php
require ('d_base_/conn.php');
//if (!isset($_
ob_start();
header("Content-Type: application/json");
$assignment_id=$_REQUEST['ass_id'];

//function show_modules($year){
//$sql = "SELECT * FROM  `assignment_tbl` WHERE  `Module_id` =  $module_id";
//SELECT * FROM `assignment_tbl` WHERE `Module_id` LIKE 'MB101' ORDER BY `Module_id` ASC

$sql = "SELECT * FROM `assignment_tbl` WHERE `Assignment_id` LIKE '".$assignment_id."'";
$result=mysql_query($sql);

$i=1;

 $assignment_array='[';
 if($result){
// $num = mysql_num_rows($result);
 //while(
 $assignment_list=mysql_fetch_array($result);
 //{
 //	if($i != $num)
//	{
//$assignment_array.='{'.json_encode('Module_id').':'.json_encode($assignment_list['Module_id']).','.json_encode('Assignment_id').':'.json_encode($assignment_list['Assignment_id']).','.json_encode('Title').':'.json_encode($assignment_list['Title']).','.json_encode('Due_date').':'.json_encode($assignment_list['Due_date']).'},';
//}
//else
//{
$assignment_array.='{'.json_encode('Module_id').':'.json_encode($assignment_list['Module_id']).','.json_encode('Assignment_id').':'.json_encode($assignment_list['Assignment_id']).','.json_encode('Title').':'.json_encode($assignment_list['Title']).','.json_encode('Max_words').':'.json_encode($assignment_list['Max_words']).','.json_encode('Due_date').':'.json_encode($assignment_list['Due_date']).','.json_encode('Description').':'.json_encode($assignment_list['Description']).','.json_encode('Faculty_name').':'.json_encode($assignment_list['Faculty_name']).','.json_encode('Faculty_Email').':'.json_encode($assignment_list['Faculty_Email']).'}';
//}
//$i++;
 //}
 }
 $assignment_array.=']';
 echo $assignment_array;
//}

//show_modules();




?>
