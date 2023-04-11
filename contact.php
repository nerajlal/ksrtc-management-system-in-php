<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$smartyObj->display('subheader.tpl');
$smartyObj->display('contact.tpl');
$smartyObj->display('footer.tpl');
?>