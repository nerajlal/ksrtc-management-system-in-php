<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['lkey'];
// echo $key;exit();
 $key=$_GET['key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 	$obj->interview($_FILES['interview'],$key);
}
$smartyObj->display('adminheader.tpl');
$smartyObj->display('jinterview.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

 ?>