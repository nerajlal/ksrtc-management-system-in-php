<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$smartyObj->display('atosubheader.tpl');
$smartyObj->display('help2.tpl');
$smartyObj->display('footer.tpl');
?>