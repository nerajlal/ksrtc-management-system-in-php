<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key5=$_GET['key'];
$obj->instapp($key5);
?>