<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$keys=$_COOKIE['lkey'];
$key=$_GET['key'];
$jo=$obj->jobedit($key);
$smartyObj->assign("view",$jo);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['job'])AND($_POST['job'])!=NULL)
	{
		if(isset($_POST['details'])AND($_POST['details'])!=NULL)
		{
			if(isset($_POST['depot'])AND($_POST['depot'])!=NULL)
			{
				if(isset($_POST['salary'])AND($_POST['salary'])!=NULL)
				{
					if(isset($_POST['qdetails'])AND($_POST['qdetails'])!=NULL)
					{
						if(isset($_POST['apply'])AND($_POST['apply'])!=NULL)
						{
								$a=trim($_POST['job']);
								$b=trim($_POST['details']);
								$c=trim($_POST['depot']);
								$d=trim($_POST['salary']);
								$e=trim($_POST['qdetails']);
								$f=trim($_POST['apply']);
								$obj->jobedit1($a,$b,$c,$d,$e,$f,$key);
						}
						else
					echo"<script>alert('apply is empty')</script>";
			}
			else
				echo"<script>alert('qdetails is empty')</script>";
		}
		else
				echo"<script>alert('salary is empty')</script>";
		}
		else
				echo"<script>alert('depot is empty')</script>";
		}
		else
				echo"<script>alert('details is empty')</script>";
		}
		else
			echo"<script>alert('job is empty')</script>";
}
$smartyObj->display('adminheader.tpl');	
$smartyObj->display('jobedit.tpl');
$smartyObj->display('adminfooter.tpl');
}
else
{
	Header("location:login.php");
}

?>