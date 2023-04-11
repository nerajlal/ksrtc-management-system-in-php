<?php /* Smarty version 2.6.26, created on 2022-02-12 10:17:28
         compiled from dcardpubedit.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" " enctype="multipart/form-data">
		<table align="center">
			<input type="hidden" name="hide" value="h">
		<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<tr><td>Depot</td><td><select name="depot" class="form-control">
				    	<option>--Select--</option>
				    	
				    	<?php $_from = $this->_tpl_vars['dcardapply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['da']):
?>
				<option><?php echo $this->_tpl_vars['da']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
				</select></td></tr>
				         <tr><td>Source</td><td><input type="text" name="source" class="form-control" value="<?php echo $this->_tpl_vars['d']['source']; ?>
"></td></tr>
				    <tr><td>Destination</td><td><input type="text" name="dest" class="form-control" value="<?php echo $this->_tpl_vars['d']['destination']; ?>
"></td></tr>
				    <tr><td>No Of Months</td><td><input type="text" name="month" class="form-control" value="<?php echo $this->_tpl_vars['d']['months']; ?>
"></td></tr>
				    <tr><td>No Of Kilometers</td><td><input type="text" name="kilometer" class="form-control" value="<?php echo $this->_tpl_vars['d']['kilometer']; ?>
"></td></tr>
				   <tr><td></td><td><input type="submit" value="Edit" class="btn btn-success"></td></tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
			</form>
		</body>
		</html>	   