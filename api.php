<?php
require ('d_base_/conn.php');

//call to the passed function
  if(function_exists($_GET['method'])){
$_GET['method']();

  }




//method to retrieve modules given a year
function show_modules(){
  $sql = mysql_query("SELECT * FROM  `Modules_tbl` WHERE  `Level_id` = 1");
  //$result=mysql_query();
  $modules = array();

  while($module = mysql_fetch_array($sql) ){
        $modules[]=$module;
  }
$modules=json_encode($modules);
echo $GET['jsoncallback'].'('.$modules.')';

}

?>
