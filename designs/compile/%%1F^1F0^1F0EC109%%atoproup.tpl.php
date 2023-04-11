<?php /* Smarty version 2.6.26, created on 2022-05-12 18:47:09
         compiled from atoproup.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<table align="center" >
			<input type="hidden" name="hide" value="h">
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['at']):
?>
			<tr><td>Name</td><td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['at']['name']; ?>
"></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control"><?php echo $this->_tpl_vars['at']['address']; ?>
</textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control" value="<?php echo $this->_tpl_vars['at']['pincode']; ?>
"></td></tr>
			<tr><td>District</td><td><select name="district" class="form-control"><option><?php echo $this->_tpl_vars['at']['district']; ?>
</option>
				<option>Trivandrum</option>
				<option>Kollam</option>
				<option>Pathanamthitta</option>
				<option>Alapuzha</option>
				<option>Kottayam</option>
				<option>Idukki</option>
				<option>Ernakulam</option>
				<option>Thrissur</option>
				<option>Palakkad</option>
				<option>Malappuram</option>
				<option>Kozhikode</option>
				<option>Wayanad</option>
				<option>Kannur</option>
				<option>Kasargod</option></select></td></tr>
				<tr><td>City</td><td><input type="text" name="city" class="form-control" value="<?php echo $this->_tpl_vars['at']['city']; ?>
"></td></tr>
				<tr><td>Gender</td>
					<?php if ($this->_tpl_vars['at']['gender'] == 'male'): ?>
					<td><input type="radio" name="gender" value="male" checked>
					Male
				<input type="radio" name="gender" value="female">Female
			</td>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['at']['gender'] == 'female'): ?>
			<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female" checked>Female
			</td>
			<?php endif; ?>
				    </tr>
				    <tr><td>Date of Birth</td><td><input type="date" max="<?php echo $this->_tpl_vars['date']; ?>
" name="date_of_birth" class="form-control" value="<?php echo $this->_tpl_vars['at']['dateofbirth']; ?>
"></td></tr>
			  <tr><td>Depot</td><td><select name="depot" class="form-control">
				<?php $_from = $this->_tpl_vars['depot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
				<option><?php echo $this->_tpl_vars['d']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select></td></tr>
				   <tr><td>Contact No</td><td><input type="text" name="contact_no" class="form-control" value="<?php echo $this->_tpl_vars['at']['contact']; ?>
"></td></tr>
				    <tr><td>Email ID</td><td><input type="email" name="email" class="form-control" value="<?php echo $this->_tpl_vars['at']['email']; ?>
"></td></tr>
			        <tr><td></td><td><input type="submit" name="register" value="Update"  class="btn btn-success"></td></tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
	</form>
</body>
</html>