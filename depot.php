<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['name'])AND($_POST['name'])!=NULL)
	{
		if(isset($_POST['district'])AND($_POST['district'])!=NULL)
		{
			$a=trim($_POST['name']);
			$b=trim($_POST['district']);
			$obj->depot($a,$b);
		}
		else
			echo"<script>alert('address is empty')</script>";
	}
	else
		echo"<script>alert('name is empty')</script>";
}
$smartyObj->display('adminheader.tpl');	
$smartyObj->display('depot.tpl');
$smartyObj->display('adminfooter.tpl');
?>