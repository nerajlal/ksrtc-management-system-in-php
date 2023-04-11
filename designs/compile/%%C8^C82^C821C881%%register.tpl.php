<?php /* Smarty version 2.6.26, created on 2020-12-22 01:40:54
         compiled from register.tpl */ ?>
<html>
<head><title>    </title></head>
<body>
<h2><center><u>Registration</u></center></h2><br>
<form method="post" action=" ">
	<table align="center">
	<input type="hidden" name="hide" value="h">
<tr><td>Name</td><td><input type="text" name="name"></td></tr>
<tr><td>Address</td><td><textarea name="addr"></textarea></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gender" value="male">
male
<input type="radio" name="gender" value="female">
female</td></tr>
<tr><td>Email</td><td><input type="email" name="email"></td></tr>
<tr><td>Password</td><td><input type="password" name="password"></td></tr>
<tr><td></td><td><input type="submit" value="Register"></td></tr>
</table>
</form>
</body>
</html>