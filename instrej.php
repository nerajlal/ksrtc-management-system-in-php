<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key6=$_GET['key'];
$obj->instrej($key6);
?>