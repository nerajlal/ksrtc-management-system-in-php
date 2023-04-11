<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$key=$_GET['key'];
$s=$obj->getphotodetails($key);
$smartyObj->assign("photo",$s);
//$lkey=$_COOKIE['lkey'];

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	$obj->photo($_FILES['photo'],$key);
}
$smartyObj->display('studsubheader.tpl');	
$smartyObj->display('photo.tpl');
$smartyObj->display('footer.tpl');
?>