<?php /* Smarty version 2.6.26, created on 2022-01-18 18:12:01
         compiled from depotedit.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<tr><td>Depot Name</td><td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['d']['name']; ?>
"></td></tr>
			<tr><td>District</td><td><select name="district" class="form-control">
				<option><?php echo $this->_tpl_vars['d']['district']; ?>
</option>
				<option>Trivandrum</option>
				<option>Kollam</option><option>Pathanamthitta</option><option>Alapuzha</option><option>Kottayam</option><option>Idukki</option><option>Ernakulam</option><option>Thrissur</option><option>Palakkad</option><option>Malappuram</option><option>Kozhikode</option><option>Wayanad</option><option>Kannur</option><option>Kasargod</option></select></td></tr>
				   <tr><td></td><td><input type="submit" value="Change" class="btn btn-success"></td></tr>
				   <?php endforeach; endif; unset($_from); ?>
				</table>
			</form>
		</body>
		</html>