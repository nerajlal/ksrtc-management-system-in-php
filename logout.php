<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_COOKIE['lkey'];
$obj->logout($key);
session_unset();
session_destroy();
setcookie("logined",null);
Header("location:index.php");
?>