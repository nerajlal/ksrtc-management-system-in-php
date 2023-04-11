<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$smartyObj->display('studsubheader.tpl');
$smartyObj->display('help4.tpl');
$smartyObj->display('footer.tpl');
?>