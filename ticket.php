<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['lkey'];
//$key1=$_GET['key'];

$i=$obj->fetch_institution($key);
$smartyObj->assign("institution",$i);
$d=$obj->fetch_depot();
$smartyObj->assign("depot",$d);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{

		// if(isset($_POST['name'])AND($_POST['name'])!=NULL)
		// {
			if(isset($_POST['depot'])AND($_POST['depot'])!=NULL)
			{
				if(isset($_POST['source'])AND($_POST['source'])!=NULL)
				{
					if(isset($_POST['dest'])AND($_POST['dest'])!=NULL)
					{
						if(isset($_POST['month'])AND($_POST['month'])!=NULL)
						{
							if(isset($_POST['meter'])AND($_POST['meter'])!=NULL)
						{
						// 	if(isset($_POST['confirmation'])AND($_POST['confirmation'])!=NULL)
						// {
										
											//$b=trim($_POST['name']);
											$c=trim($_POST['depot']);
											$d=trim($_POST['source']);
											$e=trim($_POST['dest']);
											$f=trim($_POST['month']);
											$g=trim($_POST['meter']);
											// $h=trim($_POST['confirmation']);
											$obj->ticket($c,$d,$e,$f,$g,$key,$_FILES);
										// 	}
										// else
										// 	echo"<script>alert('confirmation is empty')</script>";
										}
										else
											echo"<script>alert('Km is empty')</script>";
										}
										else
											echo"<script>alert('Month is empty')</script>";
									}
									else
										echo"<script>alert('Destination is empty')</script>";
								} 
								else
									echo"<script>alert('Source is empty')</script>";
							}	
							else
								echo"<script>alert('Depot is empty')</script>";
						// }
						// else
						// 	echo"<script>alert('Institution Name is empty')</script>";
					
				}
$smartyObj->display('studsubheader.tpl');	
$smartyObj->display('ticket.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}

?>