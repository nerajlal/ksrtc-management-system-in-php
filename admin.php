<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$a=$obj->atocount();
	$smartyObj->assign("ato",$a);
	$a=$obj->stdcount();
	$smartyObj->assign("student",$a);
$p=$obj->pubcount();
	$smartyObj->assign("public",$p);
$i=$obj->inscount();
	$smartyObj->assign("institution",$i);
$smartyObj->display('admin.tpl');
?>