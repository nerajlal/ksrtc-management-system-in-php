<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$keys=$_COOKIE['lkey'];
$key=$_GET['key'];
$not=$obj->notedit($key);
$smartyObj->assign("view",$not);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
  	if(isset($_POST['notification'])AND($_POST['notification'])!=NULL)
		{
			
			$a=trim($_POST['notification']);
			$obj->notedit1($a,$key);
		}
		else
	    echo"<script>alert('Notification is empty')</script>";
}
	
$smartyObj->display('adminheader.tpl');
$smartyObj->display('notedit.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	Header("location:login.php");
}

?>

	