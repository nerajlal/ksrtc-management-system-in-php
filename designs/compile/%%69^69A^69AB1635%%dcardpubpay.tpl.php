<?php /* Smarty version 2.6.26, created on 2022-04-24 19:11:59
         compiled from dcardpubpay.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
			<tr>
				<th>Card Type</th>
				<th>Amount</th>
				<th>Card Details</th>
			</tr>
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dp']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['dp']['cardtype']; ?>
</td>
				<td><?php echo $this->_tpl_vars['dp']['amount']; ?>
</td>
				<td><?php echo $this->_tpl_vars['dp']['carddetails']; ?>
</td>
				<td><a href="dcardpubapply.php?key=<?php echo $this->_tpl_vars['dp']['ckey']; ?>
&&amount=<?php echo $this->_tpl_vars['dp']['amount']; ?>
" class="btn btn-warning">Apply</a></td>
					</tr>
				   <?php endforeach; endif; unset($_from); ?>
				</table>
			</form>
		</body>
		</html>