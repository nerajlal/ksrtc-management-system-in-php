<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$key1=$_GET['key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 	$obj->upload($_FILES,$key,$key1);
 	
 }
$smartyObj->display('atosubheader.tpl');
$smartyObj->display('ticketupload.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}
?>