<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$keys=$_COOKIE['lkey'];
	$key=$_GET['key'];
	$dcr=$obj->dcardedit($key);
	$smartyObj->assign("view",$dcr);
	if(isset($_POST['hide'])AND($_POST['hide'])=='h')
	{
		if(isset($_POST['cardtype'])AND($_POST['cardtype'])!=NULL)
		{
			if(isset($_POST['amount'])AND($_POST['amount'])!=NULL)
			{
				if(isset($_POST['month'])AND($_POST['month'])!=NULL)
				{
					if(isset($_POST['month'])AND($_POST['month'])!=NULL)
					{
						$a=trim($_POST['cardtype']);
						$b=trim($_POST['amount']);
						$c=trim($_POST['month']);
						$d=trim($_POST['carddetails']);
						$obj->dcardedit1($a,$b,$c,$d,$key);
					}
					else
						echo"<script>alert('Card Details is empty')</script>";
				}
				else
					echo"<script>alert('Month is empty')</script>";
			}
			else
				echo"<script>alert('Amount is empty')</script>";
		}
		else
			echo"<script>alert('Cardtype is empty')</script>";
	}
	$smartyObj->display('adminheader.tpl');	
	$smartyObj->display('dcardedit.tpl');
	$smartyObj->display('adminfooter.tpl');
}
else
{
	Header("location:login.php");
}
?>