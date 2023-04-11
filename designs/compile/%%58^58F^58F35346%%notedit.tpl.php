<?php /* Smarty version 2.6.26, created on 2022-01-19 08:25:30
         compiled from notedit.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
<table align="center" class="table table-striped"><input type="hidden" name="hide" value="h">
			
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
				<tr><td>Notification</td><td><textarea name="notification" class="form-control"><?php echo $this->_tpl_vars['n']['notification']; ?>
</textarea></td></tr>
			    <tr><td></td><td><input type="submit" value="Change" class="btn btn-success"></td></tr>
							</table>
			  <?php endforeach; endif; unset($_from); ?>
							
			</form>
		</body>
		</html>