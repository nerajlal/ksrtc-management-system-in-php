<?php /* Smarty version 2.6.26, created on 2022-05-06 18:58:21
         compiled from dcardpubview.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" " enctype="multipart/form-data">
		<table align="center" class="table table-striped">
			<input type="hidden" name="hide" value="h">
			<th>Depot</th>
				<th>Source</th>
				<th>Destination</th>
				<th>No Of Months</th>
				<th>No Of Kilometers</th>
				<th>Status</th>
				</tr>
			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['c']['depot']; ?>
</td>
				<td><?php echo $this->_tpl_vars['c']['source']; ?>
</td>
				<td><?php echo $this->_tpl_vars['c']['destination']; ?>
</td>
				<td><?php echo $this->_tpl_vars['c']['months']; ?>
</td>
				<td><?php echo $this->_tpl_vars['c']['kilometer']; ?>
</td>
				<?php if ($this->_tpl_vars['c']['dcardstatus'] == 1): ?>
				<td>Approved</td>
				<td><a href="dcardpayment.php?key=<?php echo $this->_tpl_vars['c']['vkey']; ?>
&& amount=<?php echo $this->_tpl_vars['c']['amount']; ?>
" class="btn btn-success">Payment</a></td>
				<?php if ($this->_tpl_vars['c']['uploadcard'] != null): ?>
			<td><a href="uploads/<?php echo $this->_tpl_vars['c']['vkey']; ?>
/<?php echo $this->_tpl_vars['c']['uploadcard']; ?>
" class="btn btn-success" download> Download</a></td>
			<?php endif; ?>
			
				<?php elseif ($this->_tpl_vars['c']['dcardstatus'] == 2): ?>
				<td>Rejected</td>
				<?php else: ?>
				<td>Pending</td>
				<?php endif; ?>
				
				<!-- <?php if ($this->_tpl_vars['a']['paymentstatus'] == 0): ?>
				
				<td><a href="dcardpayment.php?key=<?php echo $this->_tpl_vars['c']['vkey']; ?>
&& amount=<?php echo $this->_tpl_vars['c']['amount']; ?>
" class="btn btn-success">Payment</a></td>
				<?php else: ?>
				<td>Paid</td>
				<?php endif; ?> -->
				
				<!-- <td><a href="dcardpubcancel.php?key=<?php echo $this->_tpl_vars['c']['vkey']; ?>
" class="btn btn-warning">cancel</a></td>
			 --><td><a href="dcardpubedit.php?key=<?php echo $this->_tpl_vars['c']['vkey']; ?>
" class="btn btn-primary">Edit</a></td>
				<td><a href="dcardpubcancel.php?key=<?php echo $this->_tpl_vars['c']['vkey']; ?>
" class="btn btn-danger">Cancel</a></td>
			<?php endforeach; endif; unset($_from); ?>
				</table>
				
			</form>
		</body>
		</html>	   