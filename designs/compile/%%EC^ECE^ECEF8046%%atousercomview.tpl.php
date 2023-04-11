<?php /* Smarty version 2.6.26, created on 2022-04-22 09:59:49
         compiled from atousercomview.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
			<tr>
			<th>Name</th>
			<th>Contact No</th>
				<th>Complaint Subject</th>
				<th>Complaints</th>
				<th>Date</th>
				</tr>
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['c']['fullname']; ?>
</td>
				<td><?php echo $this->_tpl_vars['c']['contact']; ?>
</td>
				<td><?php echo $this->_tpl_vars['c']['subject']; ?>
</td>
				<td><?php echo $this->_tpl_vars['c']['complaint']; ?>
</td>
				<td><?php echo $this->_tpl_vars['c']['currentdate']; ?>
</td>
				<td><a href="atocomview.php?key=<?php echo $this->_tpl_vars['c']['complaint']; ?>
&&key1=<?php echo $this->_tpl_vars['c']['okey']; ?>
"></a></td>
				<?php if ($this->_tpl_vars['c']['reply'] == ""): ?>
				<td><a href="atostudreply.php?key=<?php echo $this->_tpl_vars['c']['okey']; ?>
" class="btn btn-primary">Reply</a></td>
					<?php else: ?>
					<td><a href=" " class="btn btn-success">Replied</a></td>
				</tr>
				<?php endif; ?>
				   <?php endforeach; endif; unset($_from); ?>
							</table>
			</form>
		</body>
		</html>