<?php /* Smarty version 2.6.26, created on 2022-04-30 08:13:18
         compiled from usercomview.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped"><tr>
				<th>Depot</th>
				<th>Complaint Subject</th>
				<th>Complaints</th>
				<th>Reply</th>
				<th>CurrentDate</th>
				</tr>
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['u']['depot']; ?>
</td>
				<td><?php echo $this->_tpl_vars['u']['subject']; ?>
</td>
				<td><?php echo $this->_tpl_vars['u']['complaint']; ?>
</td>
				<?php if ($this->_tpl_vars['u']['reply'] != null): ?>
				<th><?php echo $this->_tpl_vars['u']['reply']; ?>
</th>
				<?php else: ?>
				<td>Waiting for reply</td>
				<?php endif; ?>
				<td><?php echo $this->_tpl_vars['u']['currentdate']; ?>
</td>
				<td><a href="usercomedit.php?key=<?php echo $this->_tpl_vars['u']['okey']; ?>
" class="btn btn-warning">Edit</a></td>
				<td><a href="usercomdel.php?key=<?php echo $this->_tpl_vars['u']['okey']; ?>
" class="btn btn-danger">Delete</a></td>
			</tr>
				   <?php endforeach; endif; unset($_from); ?>
							</table>
			</form>
		</body>
		</html>