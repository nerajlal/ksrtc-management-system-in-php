<?php /* Smarty version 2.6.26, created on 2022-02-19 06:16:50
         compiled from jpublicview.tpl */ ?>
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
				<td><a href="certificate.php?key=<?php echo $this->_tpl_vars['j']['jkey']; ?>
"class="btn btn-primary">Apply Now</a></td>

				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</center>
	</form>
</body>
</html>