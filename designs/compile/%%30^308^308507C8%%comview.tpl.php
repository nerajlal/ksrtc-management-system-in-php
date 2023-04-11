<?php /* Smarty version 2.6.26, created on 2022-04-28 08:28:27
         compiled from comview.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped"><tr>
				<th>Complaint Subject</th>
				<th>Complaints</th>
				<th>Reply</th>
				<th>Currentdate</th>
			</tr>
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['c']['subject']; ?>
</td>
				<td><?php echo $this->_tpl_vars['c']['complaint']; ?>
</td>
				<?php if ($this->_tpl_vars['c']['reply'] != null): ?>
				<th><?php echo $this->_tpl_vars['c']['reply']; ?>
</th>
				<?php else: ?>
				<td>Waiting for reply</td>
				<?php endif; ?>
				<td><?php echo $this->_tpl_vars['c']['currentdate']; ?>
</td>
				
				<td><a href="comedit.php?key=<?php echo $this->_tpl_vars['c']['okey']; ?>
" class="btn btn-warning">Edit</a></td>
				<td><a href="complaintdel.php?key=<?php echo $this->_tpl_vars['c']['okey']; ?>
" class="btn btn-danger">Delete</a></td>
				
			</tr>
				   <?php endforeach; endif; unset($_from); ?>
							</table>
			</form>
		</body>
		</html>