<?php /* Smarty version 2.6.26, created on 2022-04-21 11:32:07
         compiled from jobpubview.tpl */ ?>
<html>
<head><title></title></head>
<body>
	<form method="post" action=" ">
		<center>
			<table class="table table-striped">
				<tr>
				<th>Job Category</th>
				<th>Job Details</th>
				<th>Depot</th>
				<th>Salary</th>
				<th>Qualification</th>
				<th>Last Day For Apply</th> 
				<th>Status</th>
			</tr>
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['j']['job']; ?>
</td>
				<td><?php echo $this->_tpl_vars['j']['details']; ?>
</td>
				<td><?php echo $this->_tpl_vars['j']['depot']; ?>
</td>
				<td><?php echo $this->_tpl_vars['j']['salary']; ?>
</td>
				<td><?php echo $this->_tpl_vars['j']['qdetails']; ?>
</td>
				<td><?php echo $this->_tpl_vars['j']['apply']; ?>
</td>
				<?php if ($this->_tpl_vars['j']['jstatus'] == 1): ?>
				<td>Approved</td>
				<?php elseif ($this->_tpl_vars['j']['jstatus'] == 2): ?>
				<td>Rejected</td>
				<?php else: ?>
				<td>Pending</td>
				<?php endif; ?>
				<td><a href="jobcancel.php?key=<?php echo $this->_tpl_vars['j']['jakey']; ?>
" class="btn btn-warning">Cancel</a></td>
				<?php if ($this->_tpl_vars['j']['jstatus'] == 1): ?>
				<td><a href="uploads/<?php echo $this->_tpl_vars['j']['jakey']; ?>
/<?php echo $this->_tpl_vars['j']['interview']; ?>
" class="btn btn-success" download>Download</a></td>
	<?php endif; ?>			
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</center>
	</form>
</body>
</html>