<?php /* Smarty version 2.6.26, created on 2022-04-22 09:09:45
         compiled from institutionup.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
			<tr><td>Institution Type</td>
				<?php if ($this->_tpl_vars['i']['institution'] == 'school'): ?>
					<td><input type="radio" name="institution" value="school" checked>
					School
				<input type="radio" name="institution" value="college">
				    College</td></tr>
							</td>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['i']['institution'] == 'college'): ?>
					<td><input type="radio" name="institution" value="school">
					School
				<input type="radio" name="institution" value="college" checked>
				    College</td></tr>
							</td>
			<?php endif; ?>
			<tr><td>Institution Name</td><td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['i']['name']; ?>
"></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control"><?php echo $this->_tpl_vars['i']['address']; ?>
</textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control" value="<?php echo $this->_tpl_vars['i']['pincode']; ?>
"></td></tr>
			<tr><td>District</td><td><select name="district" class="form-control">
				<option><?php echo $this->_tpl_vars['i']['district']; ?>
</option>
				<option>Trivandrum</option>
				<option>Kollam</option><option>Pathanamthitta</option><option>Alapuzha</option><option>Kottayam</option><option>Idukki</option><option>Ernakulam</option><option>Thrissur</option><option>Palakkad</option><option>Malappuram</option><option>Kozhikode</option><option>Wayanad</option><option>Kannur</option><option>Kasargod</option></select></td></tr>
				<tr><td>City</td><td><input type="text" name="city" class="form-control" value="<?php echo $this->_tpl_vars['i']['city']; ?>
"></td></tr>
				    <tr><td>Contact No</td><td><input type="text" name="contact" class="form-control" value="<?php echo $this->_tpl_vars['i']['contact']; ?>
"></td></tr>
				    <tr><td>Email ID</td><td><input type="email" name="email" class="form-control" value="<?php echo $this->_tpl_vars['i']['email']; ?>
"></td></tr>
				    <tr><td></td><td><input type="submit" value="Update" class="btn btn-success"></td></tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
			</form>
		</body>
		</html>