<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$keys=$_COOKIE['lkey'];
$key=$_GET['key'];
$dep=$obj->depotedit($key);
$smartyObj->assign("view",$dep);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
  	if(isset($_POST['name'])AND($_POST['name'])!=NULL)
		{
			if(isset($_POST['district'])AND($_POST['district'])!=NULL)
		{
			$a=trim($_POST['name']);
			$b=trim($_POST['district']);
			$obj->depotedit1($a,$b,$key);
		}
		else
	    echo"<script>alert('District is empty')</script>";
}
	else
	    echo"<script>alert('Name is empty')</script>";
}
$smartyObj->display('adminheader.tpl');
$smartyObj->display('depotedit.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	Header("location:login.php");
}

?>

	