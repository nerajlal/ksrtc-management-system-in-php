<?php /* Smarty version 2.6.26, created on 2022-05-02 08:34:00
         compiled from dcardproof.tpl */ ?>
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
			<tr><td>Contact No</td><td><textarea name="contactno" class="form-control" readonly><?php echo $this->_tpl_vars['dc']['contactno']; ?>
</textarea></td></tr>
			<tr><td>Depot</td><td><input type="text" name="depot" class="form-control" value="<?php echo $this->_tpl_vars['dc']['depot']; ?>
" readonly></td></tr>
			<tr><td>D-Card</td><td><input type="text" name="dcard" class="form-control" value="<?php echo $this->_tpl_vars['dc']['cardtype']; ?>
" readonly></td></tr>
				<tr><td>Amount</td><td><input type="text" name="amount" class="form-control" value="<?php echo $this->_tpl_vars['dc']['amount']; ?>
" readonly></td></tr>
				 <tr><td>Date Of Bill</td><td><input type="text" name="date" class="form-control" value="<?php echo $this->_tpl_vars['dc']['currentdate']; ?>
" readonly></td></tr>
				  <tr><td></td><td><input type="submit" value="Generate" name="generate" class="btn btn-success"></td></tr>
				  </table>
				  
				<?php endforeach; endif; unset($_from); ?>
			</form>
		</body>
		</html>