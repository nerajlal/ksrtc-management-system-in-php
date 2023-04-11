<?php /* Smarty version 2.6.26, created on 2022-02-19 08:38:19
         compiled from photo.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form name="form" method="post" enctype="multipart/form-data">
			<input type="hidden" name="hide" value="h">
	<table>
		<?php $_from = $this->_tpl_vars['photo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
		<tr>
			<td><img src="uploads/<?php echo $this->_tpl_vars['s']['tkey']; ?>
/<?php echo $this->_tpl_vars['s']['photo']; ?>
" height="120px"></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr><td><input type="file" name="photo"></td></tr>
		<tr><td><input type="submit" name="change" value="Change" class="btn btn-success"></td></tr>

	</table>
	</form>
</center>
</body>
</html>