<?php /* Smarty version 2.6.26, created on 2022-01-18 18:15:25
         compiled from dcardedit.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" >
			<input type="hidden" name="hide" value="h">
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['da']):
?>
			<tr><td>Card Type</td><td><select name="cardtype" class="form-control">
				<option><?php echo $this->_tpl_vars['da']['cardtype']; ?>
</option>
				<option>Bronze</option>
				<option>Silver</option>
				<option>Gold</option>
				<option>Platinum</option>
				</select></td></tr>
				<tr><td>Amount</td><td><input type="text" name="amount" class="form-control" value="<?php echo $this->_tpl_vars['da']['amount']; ?>
"></td></tr>
				<tr><td>No Of Months</td><td><select name="month" class="form-control">
				<option><?php echo $this->_tpl_vars['da']['month']; ?>
</option>
				<option>1</option>
				<option>3</option>
				<option>6</option>
				</select></td></tr>
				<tr><td>Card Details</td><td><input type="text" name="carddetails" class="form-control" value="<?php echo $this->_tpl_vars['da']['carddetails']; ?>
"></td></tr>
				    <tr><td></td><td><input type="submit" value="Change" class="btn btn-success"></td></tr>
				    <?php endforeach; endif; unset($_from); ?>
				</table>
			</form>
		</body>
		</html>