<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$p=$_COOKIE['lkey'];
$pub=$obj->pubprofile($p);
$smartyObj->assign('views',$pub);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['name'])AND($_POST['name'])!=NULL)
	{
		if(isset($_POST['addr'])AND($_POST['addr'])!=NULL)
		{
			if(isset($_POST['pincode'])AND($_POST['pincode'])!=NULL)
			{
				if(isset($_POST['gender'])AND($_POST['gender'])!=NULL)
				{
					if(isset($_POST['date_of_birth'])AND($_POST['date_of_birth'])!=NULL)
					{
				if(isset($_POST['district'])AND($_POST['district'])!=NULL)
				{
					if(isset($_POST['city'])AND($_POST['city'])!=NULL)
					{
						if(isset($_POST['contact_no'])AND($_POST['contact_no'])!=NULL)
						{
							if(isset($_POST['email_id'])AND($_POST['email_id'])!=NULL)
							{
								$a=trim($_POST['name']);
								$b=trim($_POST['addr']);
								$c=trim($_POST['pincode']);
								$d=trim($_POST['gender']);
								$e=trim($_POST['date_of_birth']);
								$f=trim($_POST['district']);
								$g=trim($_POST['city']);
								$h=trim($_POST['contact_no']);
								$i=trim($_POST['email_id']);
								$obj->pubupdate($a,$b,$c,$d,$e,$f,$g,$h,$i,$p);
							}
							else
								echo"<script>alert('email_id is empty')</script>";
						}							
						else
							echo"<script>alert('contact_no is empty')</script>";
					}
	              	else
						echo"<script>alert('city is empty')</script>";
				}
				else
					echo"<script>alert('district is empty')</script>";
			}
			else
					echo"<script>alert('date_of_birth is empty')</script>";
			}
			else
					echo"<script>alert('gender is empty')</script>";
			}
			else
				echo"<script>alert('pincode is empty')</script>";
		}
		else
			echo"<script>alert('address is empty')</script>";
	}
	else
		echo"<script>alert('name is empty')</script>";
}
$smartyObj->display('pubsubheader.tpl');	
$smartyObj->display('pubproup.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

?>