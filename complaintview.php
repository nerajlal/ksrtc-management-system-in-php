<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$co=$_COOKIE['lkey'];
$com=$obj->complaintview($co);
$smartyObj->assign('views',$com);
// $at=$obj->atoreply($co);
// 	$smartyObj->assign("views",$at);

$smartyObj->display('studsubheader.tpl');	
$smartyObj->display('complaintview.tpl');
$smartyObj->display('footer.tpl');
}
else
{
	Header("location:login.php");
}
?>