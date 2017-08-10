<?php
header("Content-type:text/html;charset=utf-8");
$username = array(1,2,3,4)

$json_arr = array("ydata"=>$username);
$json_obj = json_encode($json_arr);
echo $json_obj;
?>