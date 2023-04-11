<?php /* Smarty version 2.6.26, created on 2022-02-19 10:52:36
         compiled from comedit.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" >
			<input type="hidden" name="hide" value="h">
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
				    	<tr><td>Complaint Subject</td><td><input type="text" name="subject" class="form-control" value="<?php echo $this->_tpl_vars['c']['subject']; ?>
"></td></tr>
				    	<tr><td>Complaint</td><td><textarea name="complaint" class="form-control"><?php echo $this->_tpl_vars['c']['complaint']; ?>
</textarea></td></tr>
				    <tr><td></td><td><input type="submit" value="Change" class="btn btn-success"></td></tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
			</form>
		</body>
		</html>