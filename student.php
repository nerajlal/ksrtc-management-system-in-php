<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$year=date('Y');
$Y=$year-10;
$previous=$Y.'-'.'12'.'-'.'31';
$smartyObj->assign('date',$previous);
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
										if(isset($_POST['contact_no'])AND($_POST['contact_no'])!=NULL)
										{
											if(isset($_POST['email'])AND($_POST['email'])!=NULL)
											{
												if(isset($_POST['password'])AND($_POST['password'])!=NULL)
												{
													if(isset($_POST['confirm_password'])AND($_POST['confirm_password'])!=NULL)
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
														$j=trim($_POST['contact_no']);
														$k=trim($_POST['email']);
														$l=trim($_POST['password']);
												  	 	$m=trim($_POST['confirm_password']);
												  	 	$obj->stud($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m);
													}
												else
													echo"<script>alert('confirm_password is empty')</script>";
											}
											else
												echo"<script>alert('password is empty')</script>";
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
	$smartyObj->display('subheader.tpl');
	$smartyObj->display('student.tpl');
	$smartyObj->display('footer.tpl');
?>