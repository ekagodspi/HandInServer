<?php
require ('d_base_/conn.php');
//if (!isset($_SESSION)){
 //session_start();
//}

ob_start();
header("Content-Type: application/json");
//$year=$_REQUEST['yr'];

//function show_modules($year){
$sql = "SELECT * FROM  `level_tbl`";
$result=mysql_query($sql);

$i=1;

 $level_array='[';
 if($result){
 $num = mysql_num_rows($result);
 while($level_list=mysql_fetch_array($result)){
 	if($i != $num)
	{
$level_array.='{'.json_encode('level_id').':'.json_encode($level_list['Level_id']).','.json_encode('Level_name').':'.json_encode($level_list['Level_name']).'},';
}
else
{
$level_array.='{'.json_encode('level_id').':'.json_encode($level_list['Level_id']).','.json_encode('Level_name').':'.json_encode($level_list['Level_name']).'}';
}
$i++;
 }
 }
 $level_array.=']';
 echo $level_array;
//}

//show_modules();




?>
