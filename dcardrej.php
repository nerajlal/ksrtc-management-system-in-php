<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key4=$_GET['key'];
$obj->dcardrej($key4);
?>