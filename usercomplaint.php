<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$lkey=$_COOKIE['lkey'];
	$de=$obj->fetch_userdepot();
	$smartyObj->assign("depot",$de);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['depot'])AND($_POST['depot'])!=NULL)
	{
		if(isset($_POST['subject'])AND($_POST['subject'])!=NULL)
		{
			if(isset($_POST['complaint'])AND($_POST['complaint'])!=NULL)
			{
					$a=trim($_POST['depot']);
					$b=trim($_POST['subject']);
					$c=trim($_POST['complaint']);
					$obj->usercomplaint($a,$b,$c,$lkey);
				}
			else
				echo"<script>alert('Complaint is empty')</script>";
		}
		else
			echo"<script>alert('Subject is empty')</script>";
	}
	else
		echo"<script>alert('Depot is empty')</script>";
}
$smartyObj->display('pubsubheader.tpl');	
$smartyObj->display('usercomplaint.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

?>