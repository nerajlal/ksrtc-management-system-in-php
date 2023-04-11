<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$k=$_COOKIE['lkey'];
$key=$_GET['key'];
$amount=$_GET['amount'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['name'])AND($_POST['name'])!=NULL)
	{
		if(isset($_POST['number'])AND($_POST['number'])!=NULL)
		{
			if(isset($_POST['cvv'])AND($_POST['cvv'])!=NULL)
			{
				if(isset($_POST['expiry_date'])AND($_POST['expiry_date'])!=NULL)
				{
					$a=trim($_POST['name']);
					$b=trim($_POST['number']);
					$c=trim($_POST['cvv']);
					$d=trim($_POST['expiry_date']);
					$obj->dcardpayment($a,$b,$c,$d,$k,$amount,$key);
				}
				else
					echo"<script>alert('expiry_date is empty')</script>";
			}
			else
				echo"<script>alert('securitycode is empty')</script>";
		}
		else
			echo"<script>alert('number is empty')</script>";
	}
	else
		echo"<script>alert('name is empty')</script>";
}
$smartyObj->display('payment.tpl');

?>