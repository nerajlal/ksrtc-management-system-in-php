<?php /* Smarty version 2.6.26, created on 2022-05-13 08:28:04
         compiled from rcollegeview.tpl */ ?>
<html>
<head><title></title></head>
<body>
	<form method="post" action=" ">
		<center>
			<table class="table table-striped">
				<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Institution Name</th>
				<th>Course/Section</th>
				<th>Semester/Class</th> 
				<th>Depot Name</th> 
				<th>Request</th>
				<th>Date</th> 
			</tr>
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['s']['name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['s']['address']; ?>
</td>
				<td><?php echo $this->_tpl_vars['s']['gender']; ?>
</td>
				<td><?php echo $this->_tpl_vars['s']['date_of_birth']; ?>
</td>
				<td><?php echo $this->_tpl_vars['s']['institution']; ?>
</td>
				<td><?php echo $this->_tpl_vars['s']['course']; ?>
</td>
				<td><?php echo $this->_tpl_vars['s']['semester']; ?>
</td>
				<td><?php echo $this->_tpl_vars['s']['depotname']; ?>
</td>
				<td><?php echo $this->_tpl_vars['s']['request']; ?>
</td>
				<td><?php echo $this->_tpl_vars['s']['currentdate']; ?>
</td>
				<?php if ($this->_tpl_vars['s']['rkey'] != null): ?>
				<td><a href="confirm.php?key=<?php echo $this->_tpl_vars['s']['rkey']; ?>
"class="btn btn-primary">Upload Confirmation</a></td>
				<?php elseif ($this->_tpl_vars['s']['rkey'] == null): ?>
				<td><a href="confirm.php?key=<?php echo $this->_tpl_vars['s']['rkey']; ?>
"class="btn btn-warning">Remove Confirmation</a></td>
				<?php endif; ?>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</center>
	</form>
</body>
</html>