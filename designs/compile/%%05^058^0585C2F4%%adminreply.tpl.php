<?php /* Smarty version 2.6.26, created on 2022-04-28 07:54:44
         compiled from adminreply.tpl */ ?>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action=" ">
<center>
	<table class="table table-striped">
		<tr>
			<th>Reply</th>
			<th>Date</th>
		</tr>
		<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['reply']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['currentdate']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
</center> </form>
</body>
</html>