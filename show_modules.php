<?php
require ('d_base_/conn.php');
//if (!isset($_SESSION)){
 //session_start();
//}

ob_start();
header("Content-Type: application/json");
$year=$_REQUEST['yr'];

//function show_modules($year){
$sql = "SELECT * FROM  `Modules_tbl` WHERE  `Level_id` =  $year";
$result=mysql_query($sql);

$i=1;

 $module_array='[';
 if($result){
 $num = mysql_num_rows($result);
 while($module_list=mysql_fetch_array($result)){
 	if($i != $num)
	{
$module_array.='{'.json_encode('Module_id').':'.json_encode($module_list['Module_id']).','.json_encode('Module_name').':'.json_encode($module_list['Module_name']).','.json_encode('Credits').':'.json_encode($module_list['Credits']).','.json_encode('Level_id').':'.json_encode($module_list['Level_id']).'},';
}
else
{
$module_array.='{'.json_encode('Module_id').':'.json_encode($module_list['Module_id']).','.json_encode('Module_name').':'.json_encode($module_list['Module_name']).','.json_encode('Credits').':'.json_encode($module_list['Credits']).','.json_encode('Level_id').':'.json_encode($module_list['Level_id']).'}';
}
$i++;
 }
 }
 $module_array.=']';
 echo $module_array;
//}

//show_modules();




?>
