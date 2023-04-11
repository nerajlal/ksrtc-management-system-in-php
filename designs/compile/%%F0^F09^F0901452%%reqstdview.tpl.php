<?php /* Smarty version 2.6.26, created on 2022-02-23 09:37:20
         compiled from reqstdview.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
			<tr>
				<th>Depot Name</th>
				<th>Request</th>
			</tr>
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['de']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['de']['depotname']; ?>
</td>
				<td><?php echo $this->_tpl_vars['de']['request']; ?>
</td>
				<td><a href="reqremove.php?key=<?php echo $this->_tpl_vars['de']['rkey']; ?>
" class="btn btn-warning">Remove</a></td>
				<td><a href="uploads/<?php echo $this->_tpl_vars['de']['rkey']; ?>
/<?php echo $this->_tpl_vars['de']['confirmltr']; ?>
" class="btn btn-success" download>Download</a></td>
			</tr>
				   <?php endforeach; endif; unset($_from); ?>
				</table>
			</form>
		</body>
		</html>