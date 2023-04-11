<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$k=$_COOKIE['lkey'];
// $r=$_GET['key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['depotname'])AND($_POST['depotname'])!=NULL)
	{
		if(isset($_POST['request'])AND($_POST['request'])!=NULL)
		{
			$a=trim($_POST['depotname']);
			$b=trim($_POST['request']);
			$obj->request($a,$b,$k);
		}
		else
		echo"<script>alert('request is empty')</script>";
	}
	else
	echo"<script>alert('depotname is empty')</script>";
}
$smartyObj->display('studsubheader.tpl');
$smartyObj->display('request.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

?>