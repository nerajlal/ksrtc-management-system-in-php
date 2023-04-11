<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$smartyObj->display('pubsubheader.tpl');
$smartyObj->display('help5.tpl');
$smartyObj->display('footer.tpl');
?>