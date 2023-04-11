<?php /* Smarty version 2.6.26, created on 2022-01-14 07:33:01
         compiled from stdproup.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" ">
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['st']):
?>
			<tr><td>Student Name</td><td><input type="text" name="student_name" class="form-control"value="<?php echo $this->_tpl_vars['st']['name']; ?>
"></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control" ><?php echo $this->_tpl_vars['st']['address']; ?>
</textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control" value="<?php echo $this->_tpl_vars['st']['pincode']; ?>
"></td></tr>
			<tr><td>District</td><td><select name="district" class="form-control">
				<option><?php echo $this->_tpl_vars['st']['district']; ?>
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
				<tr><td>Gender</td>
					<?php if ($this->_tpl_vars['st']['gender'] == 'male'): ?>
					<td><input type="radio" name="gender" value="male" checked>
					Male
				<input type="radio" name="gender" value="female">Female
			</td>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['st']['gender'] == 'female'): ?>
			<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female" checked>Female
			</td>
			<?php endif; ?>
				    </tr>
				    <tr>
				    	<td>Date of Birth</td>
				    	<td><input type="date" name="date_of_birth" class="form-control" value="<?php echo $this->_tpl_vars['st']['dateofbirth']; ?>
" ></td>
				    </tr>
				    <tr><td>Institution Name</td><td><input type="text" name="institution" class="form-control" value="<?php echo $this->_tpl_vars['st']['institution']; ?>
"></td></tr>
				    <tr><td>Course/Section</td><td><input type="text" name="course" class="form-control" value="<?php echo $this->_tpl_vars['st']['course']; ?>
"></td></tr>
				    <tr><td>Semester/Class</td><td><input type="text" name="semester" class="form-control" value="<?php echo $this->_tpl_vars['st']['semester']; ?>
"></td></tr>
				    <tr><td>Contact No</td><td><input type="text" name="contact" class="form-control" value="<?php echo $this->_tpl_vars['st']['contactno']; ?>
"></td></tr>
				    <tr><td>Email</td><td><input type="email" name="email" class="form-control" value="<?php echo $this->_tpl_vars['st']['email']; ?>
"></td></tr>
				    <tr><td></td><td><input type="submit" value="Update" class="btn btn-success"></td></tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
			</form>
</body>
</html>