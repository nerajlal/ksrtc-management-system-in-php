<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$in=$_COOKIE['lkey'];
$inst=$obj->institutionpro($in);
$smartyObj->assign('views',$inst);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['institution'])AND($_POST['institution'])!=NULL)
	{
		if(isset($_POST['name'])AND($_POST['name'])!=NULL)
		{
			if(isset($_POST['addr'])AND($_POST['addr'])!=NULL)
			{
				if(isset($_POST['pincode'])AND($_POST['pincode'])!=NULL)
				{
					if(isset($_POST['district'])AND($_POST['district'])!=NULL)
					{
						if(isset($_POST['city'])AND($_POST['city'])!=NULL)
						{
							if(isset($_POST['contact'])AND($_POST['contact'])!=NULL)
							{
								if(isset($_POST['email'])AND($_POST['email'])!=NULL)
								{
											$a=trim($_POST['institution']);
											$b=trim($_POST['name']);
											$c=trim($_POST['addr']);
											$d=trim($_POST['pincode']);
											$e=trim($_POST['district']);
											$f=trim($_POST['city']);
											$g=trim($_POST['contact']);
											$h=trim($_POST['email']);
											$obj->institutionup($a,$b,$c,$d,$e,$f,$g,$h);
										} 
								else
									echo"<script>alert('email is empty')</script>";
							}	
							else
								echo"<script>alert('contact is empty')</script>";
						}
						else
							echo"<script>alert('city is empty')</script>";
					}
					else
						echo"<script>alert('district is empty')</script>";
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
	else
		echo"<script>alert('institution is empty')</script>";
}
$smartyObj->display('institutionsubheader.tpl');	
$smartyObj->display('institutionup.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

?>