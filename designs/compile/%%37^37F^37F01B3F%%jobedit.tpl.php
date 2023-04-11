<?php /* Smarty version 2.6.26, created on 2022-02-19 06:28:13
         compiled from jobedit.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
			<tr><td>Job Category</td><td><input type="text" name="job" class="form-control" value="<?php echo $this->_tpl_vars['j']['job']; ?>
"></td></tr>
			<tr><td>Job Details</td><td><input type="text" name="details" class="form-control" value="<?php echo $this->_tpl_vars['j']['details']; ?>
"></td></tr>
			<tr><td>Depot</td><td><select name="depot" class="form-control">
				<option><?php echo $this->_tpl_vars['j']['depot']; ?>
</option>
				<option>Ariankavu</option>
				<option>Kottarakara</option>
				<option>Chadayamangalam</option>
				<option>Thenmala</option>
				</select></td></tr>
			<tr><td>Salary</td><td><input type="text" name="salary" class="form-control" value="<?php echo $this->_tpl_vars['j']['salary']; ?>
"></td></tr>	
			<tr><td>Qualification</td><td><input type="text" name="qdetails" class="form-control" value="<?php echo $this->_tpl_vars['j']['qdetails']; ?>
"></td></tr>
			<tr><td>Last Day For Apply</td><td><input type="text" name="apply" class="form-control" value="<?php echo $this->_tpl_vars['j']['apply']; ?>
"></td></tr>
			 <tr><td></td><td><input type="submit" value="Upload" class="btn btn-success"></td></tr>
				   <?php endforeach; endif; unset($_from); ?>
				</table>
			</form>
		</body>
		</html>