<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$nov=$_COOKIE['lkey'];
	$von=$obj->atonotview($nov);
	$smartyObj->assign('views',$von);
	if(isset($_POST['hide'])AND($_POST['hide'])=='h')
	{
		if(isset($_POST['notification'])AND($_POST[' notification'])!=NULL)
		{
			$a=trim($_POST['notification']);
			$obj->atonotview($a,$nov);
		}
		else
			echo"<script>alert('Notification is empty')</script>";
	}
	$smartyObj->display('atosubheader.tpl');	
	$smartyObj->display('atonotview.tpl');
	$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}
?>