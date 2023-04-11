<?php /* Smarty version 2.6.26, created on 2022-01-19 08:22:51
         compiled from atonotview.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
			
			<tr>
			<th>Notification</th>
			<th>Date</th>
				</tr>
				<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['no']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['no']['notification']; ?>
</td>
				<td><?php echo $this->_tpl_vars['no']['currentdate']; ?>
</td>
				<td><a href="atonotview.php?key=<?php echo $this->_tpl_vars['no']['notification']; ?>
&&key1=<?php echo $this->_tpl_vars['no']['nkey']; ?>
"></a></td>
				</tr>
				   <?php endforeach; endif; unset($_from); ?>
							</table>
			</form>
		</body>
		</html>