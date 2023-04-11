<?php /* Smarty version 2.6.26, created on 2022-02-13 20:37:08
         compiled from complaint.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<tr><td>Depot</td><td><select name="depot" class="form-control">
				<option>---Select---</option>
				<?php $_from = $this->_tpl_vars['depot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['da']):
?>
				<option><?php echo $this->_tpl_vars['da']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select></td></tr>
				    	<tr><td>Complaint Subject</td><td><input type="text" name="subject" class="form-control"></td></tr>
				    	<tr><td>Complaint</td><td><textarea name="complaint" class="form-control"></textarea></td></tr>
				    <tr><td></td><td><input type="submit" value="Submit" class="btn btn-success"></td></tr>
				</table>
			</form>
		</body>
		</html>