<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$st=$_COOKIE['lkey'];
$std=$obj->studprofile($st);
$smartyObj->assign('views',$std);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['student_name'])AND($_POST['student_name'])!=NULL)
	{
		if(isset($_POST['addr'])AND($_POST['addr'])!=NULL)
		{
			if(isset($_POST['pincode'])AND($_POST['pincode'])!=NULL)
			{
				if(isset($_POST['district'])AND($_POST['district'])!=NULL)
				{
					if(isset($_POST['gender'])AND($_POST['gender'])!=NULL)
					{
						if(isset($_POST['date_of_birth'])AND($_POST['date_of_birth'])!=NULL)
						{
							 if(isset($_POST['institution'])AND($_POST['institution'])!=NULL)
							{
								if(isset($_POST['course'])AND($_POST['course'])!=NULL)
								{
									if(isset($_POST['semester'])AND($_POST['semester'])!=NULL)
						 			{
										if(isset($_POST['contact'])AND($_POST['contact'])!=NULL)
										{
											if(isset($_POST['email'])AND($_POST['email'])!=NULL)
											{
												
														$a=trim($_POST['student_name']);
														$b=trim($_POST['addr']);
														$c=trim($_POST['pincode']);
														$d=trim($_POST['district']);
														$e=trim($_POST['gender']);
														$f=trim($_POST['date_of_birth']);
														$g=trim($_POST['institution']);
														$h=trim($_POST['course']);
														$i=trim($_POST['semester']);
														$j=trim($_POST['contact']);
														$k=trim($_POST['email']);
														$obj->studupdate($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$st);
													} 
													else
														echo"<script>alert('email is empty')</script>";
												}
												else
													echo"<script>alert('contact_no is empty')</script>";
											}
											else
												echo"<script>alert('semester is empty')</script>";
										}	
										else
											echo"<script>alert('course is empty')</script>";
									}
									else
										echo"<script>alert('institution is empty')</script>";
								}
								else
									echo"<script>alert('date_of_birth is empty')</script>";
							}
							else
								echo"<script>alert('gender is empty')</script>";
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
				echo"<script>alert('student_name is empty')</script>";

}
	$smartyObj->display('studsubheader.tpl');
	$smartyObj->display('stdproup.tpl');
	$smartyObj->display('footer.tpl');
	}
else
{
	Header("location:login.php");
}

?>