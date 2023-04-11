<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$keys=$_COOKIE['lkey'];
	$key=$_GET['key'];
	$comp=$obj->edit($key);
	$smartyObj->assign("view",$comp);
	if(isset($_POST['hide'])AND($_POST['hide'])=='h')
	{
		if(isset($_POST['subject'])AND($_POST['subject'])!=NULL)
		{
			if(isset($_POST['complaint'])AND($_POST['complaint'])!=NULL)
			{
				$b=trim($_POST['subject']);
				$c=trim($_POST['complaint']);
				$obj->edit1($b,$c,$key);
			}
			else
				echo"<script>alert('Complaint is empty')</script>";
		}
		else
			echo"<script>alert('Subject is empty')</script>";
	}
	$smartyObj->display('studsubheader.tpl');	
	$smartyObj->display('comedit.tpl');
	$smartyObj->display('footer.tpl');
else
{
	Header("location:login.php");
}
?>