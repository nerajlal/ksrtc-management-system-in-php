<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$year=date('Y');
$Y=$year-30;
$previous=$Y.'-'.'12'.'-'.'31';
$smartyObj->assign('date',$previous);
$d=$obj->fetch_atodepot();
$smartyObj->assign("depot",$d);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
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
						if(isset($_POST['gender'])AND($_POST['gender'])!=NULL)
						{
							if(isset($_POST['date_of_birth'])AND($_POST['date_of_birth'])!=NULL)
							{
								if(isset($_POST['depot'])AND($_POST['depot'])!=NULL)
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
													$d=trim($_POST['district']);
													$e=trim($_POST['city']);
													$f=trim($_POST['gender']);
													$g=trim($_POST['date_of_birth']);
													$h=trim($_POST['depot']);
													$i=trim($_POST['contact_no']);
													$j=trim($_POST['email_id']);
													$k=trim($_POST['password']);
												    $l=trim($_POST['confirm_password']);
												    $obj->ins($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l);
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
								echo "<script>alert('depot is empty')</script>";
						    }
							else
							   echo"<script>alert('date_of_birth is empty')</script>";
						}
						else
							echo"<script>alert('gender is empty')</script>";
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
$smartyObj->display('subheader.tpl');	
$smartyObj->display('atoreg.tpl');
$smartyObj->display('footer.tpl');
?>