<?php /* Smarty version 2.6.26, created on 2022-01-14 16:08:22
         compiled from adminview.tpl */ ?>
<html>
<head><title> </title></head>
<body>
	<form method="post" action="">
		<center>
			<table class="table table-striped">
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Pincode</th>
					<th>District</th>
					<th>City</th>
					<th>Gender</th>
					<th>Date Of Birth</th>
					<th>Depot</th>
					<th>Contact No</th>
					<th>Email</th>
				</tr>
				<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ap']):
?>
				<tr>
					<td><?php echo $this->_tpl_vars['ap']['name']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ap']['address']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ap']['pincode']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ap']['district']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ap']['city']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ap']['gender']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ap']['dateofbirth']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ap']['contactno']; ?>
</td>
					<td><?php echo $this->_tpl_vars['ap']['email']; ?>
</td>
					<td><a href="atoapp.php?key=<?php echo $this->_tpl_vars['ap']['lkey']; ?>
" class="btn btn-primary">Approve</a></td>
					<td><a href=" atorej.php?key=<?php echo $this->_tpl_vars['ap']['lkey']; ?>
" class="btn btn-danger">Reject</a></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</center>
	</form>
</body>
</html>