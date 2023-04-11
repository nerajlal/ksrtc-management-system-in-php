<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$smartyObj->display('institutionsubheader.tpl');
$smartyObj->display('help6.tpl');
$smartyObj->display('footer.tpl');
?>