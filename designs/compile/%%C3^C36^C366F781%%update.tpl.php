<?php /* Smarty version 2.6.26, created on 2020-12-20 05:16:37
         compiled from update.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" ">
		<input type="hidden" name="hide" value="h">
		<table align="center">
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['b']['name']; ?>
"></td></tr>
<tr><td>Address</td><td><textarea name="addr"><?php echo $this->_tpl_vars['b']['address']; ?>
</textarea></td></tr>
<tr><td>Gender</td><td><select name="gender" value="<?php echo $this->_tpl_vars['b']['gender']; ?>
"><option>Male</option>
	                         <option>Female</option></select></td></tr>
<tr><td>Email</td><td><input type="email" name="email" value="<?php echo $this->_tpl_vars['b']['email']; ?>
"></td></tr>
<tr><td></td><td><input type="submit" value="Edit"></td></tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</form>
</body>
</html>	                         