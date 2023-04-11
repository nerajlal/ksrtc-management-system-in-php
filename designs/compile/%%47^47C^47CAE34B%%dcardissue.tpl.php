<?php /* Smarty version 2.6.26, created on 2022-05-02 12:10:39
         compiled from dcardissue.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dc']):
?>
			<tr><td>Full Name</td><td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['dc']['fullname']; ?>
" readonly></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control" readonly><?php echo $this->_tpl_vars['dc']['address']; ?>
</textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control" value="<?php echo $this->_tpl_vars['dc']['pincode']; ?>
" readonly></td></tr>
			<tr><td>District</td><td><select name="district" class="form-control" readonly>
				<option><?php echo $this->_tpl_vars['dc']['district']; ?>
</option>
				</select></td></tr>
				<tr><td>City</td><td><input type="text" name="city" class="form-control" value="<?php echo $this->_tpl_vars['dc']['city']; ?>
" readonly></td></tr>
				    <tr><td>Contact No</td><td><input type="text" name="contact_no" class="form-control" value="<?php echo $this->_tpl_vars['dc']['contactno']; ?>
" readonly></td></tr>
			<tr><td>Card Type</td><td><select name="cardtype" class="form-control" readonly><option><?php echo $this->_tpl_vars['dc']['cardtype']; ?>
</option>
			</select></td></tr>
			<tr><td>Depo</td><td><input type="text" name="depo" class="form-control" value="<?php echo $this->_tpl_vars['dc']['depot']; ?>
" readonly></td></tr>
				<tr><td>Amount</td><td><input type="text" name="amount" class="form-control" value="<?php echo $this->_tpl_vars['dc']['amount']; ?>
" readonly></td></tr>
				<tr><td>Source</td><td><input type="text" name="source" class="form-control" value="<?php echo $this->_tpl_vars['dc']['source']; ?>
" readonly></td></tr>
				    <tr><td>Destination</td><td><input type="text" name="dest" class="form-control" value="<?php echo $this->_tpl_vars['dc']['destination']; ?>
" readonly></td></tr>
				     <tr><td>Depot</td><td><input type="text" name="dest" class="form-control" value="<?php echo $this->_tpl_vars['dc']['depot']; ?>
" readonly></td></tr>
				<tr><td>No Of Months</td><td><select name="month" class="form-control" readonly><option><?php echo $this->_tpl_vars['dc']['month']; ?>
</option>
			</select></td></tr>
				    <tr><td></td><td><input type="submit" value="Issue" name="submit" class="btn btn-success"></td></tr>
				</table>
				<?php endforeach; endif; unset($_from); ?>
			</form>
		</body>
		</html>