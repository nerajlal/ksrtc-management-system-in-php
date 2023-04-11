<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$year=date('Y');
$Y=$year-25;
$previous=$Y.'-'.'12'.'-'.'31';
$smartyObj->assign('date',$previous);
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
										if(isset($_POST['password'])AND($_POST['password'])!=NULL)
										{
											if(isset($_POST['confirm_password'])AND($_POST['confirm_password'])!=NULL)
											{
													$a=trim($_POST['name']);
													$b=trim($_POST['addr']);
													$c=trim($_POST['pincode']);
													$j=trim($_POST['gender']);
													$k=trim($_POST['date_of_birth']);
													
													$d=trim($_POST['district']);
													$e=trim($_POST['city']);
													$f=trim($_POST['contact_no']);
													$g=trim($_POST['email_id']);
													$h=trim($_POST['password']);
												    $i=trim($_POST['confirm_password']);
												    $obj->pub($a,$b,$c,$j,$k,$d,$e,$f,$g,$h,$i);
												}
												else
													echo"<script>alert('confirm_password is empty')</script>";
											}
											else
											 echo"<script>alert('password is empty')</script>";
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
$smartyObj->display('subheader.tpl');	
$smartyObj->display('publicreg.tpl');
$smartyObj->display('footer.tpl');
?>