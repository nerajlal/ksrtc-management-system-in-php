<?php /* Smarty version 2.6.26, created on 2022-05-02 09:26:32
         compiled from conissue.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" " enctype="multipart/form-data">
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
			<tr><td>Photo</td><td><input type="text" name="photo" class="form-control" value="<?php echo $this->_tpl_vars['c']['path']; ?>
" readonly></td></tr>
			<tr><td>Student Name</td><td><input type="text" name="student_name" class="form-control" value="<?php echo $this->_tpl_vars['c']['name']; ?>
" readonly></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control" readonly><?php echo $this->_tpl_vars['c']['address']; ?>
</textarea></td></tr>
			<tr><td>Gender</td>
					<td><input type="text" name="gender" class="form-control" value="<?php echo $this->_tpl_vars['c']['gender']; ?>
" readonly></td>
				    </tr>
				    <tr>
				    	<td>Date of Birth</td>
				    	<td><input type="text" name="date_of_birth" class="form-control" value="<?php echo $this->_tpl_vars['c']['dateofbirth']; ?>
" readonly></td>
				    </tr>
				    <tr><td>Institution Name</td><td><input type="text" name="institution" class="form-control" value="<?php echo $this->_tpl_vars['c']['institution']; ?>
" readonly></td></tr>
			 <tr><td>Source</td><td><input type="text" name="source" class="form-control" value="<?php echo $this->_tpl_vars['c']['source']; ?>
" readonly></td></tr>
				    <tr><td>Destination</td><td><input type="text" name="dest" class="form-control" value="<?php echo $this->_tpl_vars['c']['destination']; ?>
" readonly></td></tr>
				    <tr><td>No Of Months</td><td><input type="text" name="month" class="form-control" value="<?php echo $this->_tpl_vars['c']['month']; ?>
" readonly></td></tr>
				    <tr><td></td><td><input type="submit" name="submit" value="Issue" class="btn btn-success"></td></tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
			</form>
		</body>
		</html>	   