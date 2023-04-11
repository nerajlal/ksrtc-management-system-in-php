	<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$us=$_COOKIE['lkey'];
	$user=$obj->atousercomview($us);
	$smartyObj->assign('views',$user);
	if(isset($_POST['hide'])AND($_POST['hide'])=='h')
	{
		if(isset($_POST['subject'])AND($_POST['subject'])!=NULL)
		{
			if(isset($_POST['complaint'])AND($_POST['complaint'])!=NULL)
			{
				$a=trim($_POST['subject']);
				$b=trim($_POST['complaint']);
				$obj->atousercomview($a,$b,$user);
			}
			else
				echo"<script>alert('Complaint is empty')</script>";
		}
		else
			echo"<script>alert('Subject is empty')</script>";
	}
	$smartyObj->display('atosubheader.tpl');	
	$smartyObj->display('atousercomview.tpl');
	$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}
?>