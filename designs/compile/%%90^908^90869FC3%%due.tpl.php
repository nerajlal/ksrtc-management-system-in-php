<?php /* Smarty version 2.6.26, created on 2020-12-22 05:18:18
         compiled from due.tpl */ ?>
<html>
<head><title>    </title></head>
<body>
	<form method="post"  action=" ">
	<table border="1">
    <tr>
			<th>Name</th>
			<th>Address</th>
			<th>Gender</th> 
			<th>Email</th>
		</tr>
		<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['b']['name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['address']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['gender']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['email']; ?>
</td>
			<td><a href="update.php?key=<?php echo $this->_tpl_vars['b']['lkey']; ?>
">update</a></td>
			<td><a href="delete.php?key=<?php echo $this->_tpl_vars['b']['lkey']; ?>
">delete</a></td>

        </tr>
		<?php endforeach; endif; unset($_from); ?>

	</table>
	<a href="logout.php">logout</a>
	</body>
	</html>