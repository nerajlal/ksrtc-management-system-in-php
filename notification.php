<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['notification'])AND($_POST['notification'])!=NULL)
	{
			$a=trim($_POST['notification']);
			$obj->notification($a);
		}
		else
			echo"<script>alert('Notification is empty')</script>";
	}
$smartyObj->display('adminheader.tpl');	
$smartyObj->display('notification.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	Header("location:login.php");
}

?>