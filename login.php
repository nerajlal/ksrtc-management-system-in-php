<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['Name'])AND($_POST['Name'])!=NULL)
	{
		if(isset($_POST['Password'])AND($_POST['Password'])!=NULL)
		{
			$a=trim($_POST['Name']);
			$b=trim($_POST['Password']);
			$obj->login($a,$b);
		}
		else
			echo"<script>alert('password is empty')</script>";
	}
	else
		echo"<script>alert('name is empty')</script>";
}
$smartyObj->display('login.tpl');
?>