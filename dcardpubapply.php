<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$lkey=$_COOKIE['lkey'];
$key=$_GET['key'];
$amount=$_GET['amount'];
$dav=$obj->fetch_dcarddepot();
$smartyObj->assign("dcardapply",$dav);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['depot'])AND($_POST['depot'])!=NULL)
	{
		if(isset($_POST['source'])AND($_POST['source'])!=NULL)
		{
			if(isset($_POST['dest'])AND($_POST['dest'])!=NULL)
			{
				if(isset($_POST['month'])AND($_POST['month'])!=NULL)
				{
					if(isset($_POST['kilometer'])AND($_POST['kilometer'])!=NULL)
					{
						$a=trim($_POST['depot']);
						$b=trim($_POST['source']);
						$c=trim($_POST['dest']);
						$d=trim($_POST['month']);
						$e=trim($_POST['kilometer']);
						$obj->dcardpubapply($a,$b,$c,$d,$e,$lkey,$key,$amount);
					}
					else
						echo"<script>alert('Kilometer is empty')</script>";
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
								echo "<script>alert('Depot is empty')</script>";
						    }
$smartyObj->display('pubsubheader.tpl');	
$smartyObj->display('dcardpubapply.tpl');
$smartyObj->display('footer.tpl');
?>