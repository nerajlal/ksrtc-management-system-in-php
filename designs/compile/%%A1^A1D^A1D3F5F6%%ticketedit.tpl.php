<?php /* Smarty version 2.6.26, created on 2022-04-24 10:11:41
         compiled from ticketedit.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
			<tr><td>Photo</td><td><a href="photo.php?key=<?php echo $this->_tpl_vars['t']['tkey']; ?>
" class="btn btn-warning">Update</a></td>
			<!-- <td><img src=<?php echo $this->_tpl_vars['t']['path']; ?>
 width="80px" height="100px"></td>
			 --><tr><td>Institution Name</td><td><select name="name" class="form-control">
				<option><?php echo $this->_tpl_vars['t']['instname']; ?>
</option>
				<?php $_from = $this->_tpl_vars['institution']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
				<option><?php echo $this->_tpl_vars['i']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select></td></tr>
				
				    <tr><td>Depot</td><td><select name="depot" class="form-control">
				    	<option><?php echo $this->_tpl_vars['t']['depot']; ?>
</option>
				    	<?php $_from = $this->_tpl_vars['depot']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['da']):
?>
				<option><?php echo $this->_tpl_vars['da']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select></td></tr>
				        <tr><td>Source</td><td><input type="text" name="source" class="form-control" value="<?php echo $this->_tpl_vars['t']['source']; ?>
"></td></tr>
				    <tr><td>Destination</td><td><input type="text" name="dest" class="form-control" value="<?php echo $this->_tpl_vars['t']['destination']; ?>
"></td></tr>
				    <tr><td>No Of Months</td><td><input type="text" name="month" class="form-control" value="<?php echo $this->_tpl_vars['t']['month']; ?>
"></td></tr>
				    <tr><td>No Of Kilometers</td><td><input type="text" name="meter" class="form-control" value="<?php echo $this->_tpl_vars['t']['meter']; ?>
"></td></tr>
				    <tr><td>Confirmation Letter</td><td><a href="photo.php?key=<?php echo $this->_tpl_vars['t']['tkey']; ?>
" class="btn btn-warning">Update</a></td>
			
				    <tr><td></td><td><input type="submit" value="Edit" class="btn btn-success"></td>
</tr>

<?php endforeach; endif; unset($_from); ?>
				</table>
			</form>
		</body>
		</html>