<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$pv=$obj->dcardpubpay();
$smartyObj->assign("views",$pv);
$smartyObj->display('pubsubheader.tpl');
$smartyObj->display('dcardpubpay.tpl');
$smartyObj->display('footer.tpl');
?>