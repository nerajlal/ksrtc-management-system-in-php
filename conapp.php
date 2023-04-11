<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key3=$_GET['key'];
$obj->conapp($key3);
?>