<?php
require ('d_base_/conn.php');
//if (!isset($_
ob_start();
header("Content-Type: application/json");
$module_id=$_REQUEST['mid'];

//function show_modules($year){
//$sql = "SELECT * FROM  `assignment_tbl` WHERE  `Module_id` =  $module_id";
//SELECT * FROM `assignment_tbl` WHERE `Module_id` LIKE 'MB101' ORDER BY `Module_id` ASC

$sql = "SELECT * FROM `assignment_tbl` WHERE `Module_id` LIKE '".$module_id."' ORDER BY `Due_date` ASC";
$result=mysql_query($sql);

$i=1;

 $assignment_array='[';
 if($result){
 $num = mysql_num_rows($result);
 while($assignment_list=mysql_fetch_array($result)){
 	if($i != $num)
	{
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
 echo $assignment_array;
//}

//show_modules();




?>
