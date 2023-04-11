<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$key=$_GET['key'];
	if(isset($_POST['hide'])AND($_POST['hide'])=='h')
	{
		if(isset($_POST['reply'])AND($_POST['reply'])!=NULL)
		{
			$a=trim($_POST['reply']);
			$obj->adminstudreply($a,$key);
		}
		else
			echo"<script>alert('Reply is empty')</script>";
	}
	$smartyObj->display('subheader.tpl');	
	$smartyObj->display('adminstudreply.tpl');
	$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}
?>