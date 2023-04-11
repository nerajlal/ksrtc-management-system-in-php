<?php /* Smarty version 2.6.26, created on 2022-05-07 11:26:29
         compiled from ticketview.tpl */ ?>


<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" " enctype="multipart/form-data">
		<table align="center" class="table table-striped">
			<input type="hidden" name="hide" value="h">
			<tr>
			<th>Photo</th>
			<th>Institution Name</th>
			<th>Depot</th>
			<th>Source</th>
			<th>Destination</th>
			<th>No Of Months</th>
			<th>No Of Kilometers</th>
			<th>Confirmation Letter</th>
			<th>Status</th>
			<th>Download Concession </th>
				<th>Download Concession </th>
			
		</tr>
		<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['photo0']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['instname']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['depot']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['source']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['destination']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['month']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['meter']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['photo1']; ?>
</td>


				<?php if ($this->_tpl_vars['a']['status'] == 1): ?>
				<td>Approved</td>
				<?php if ($this->_tpl_vars['a']['paymentstatus'] == 0): ?>
				<td><a href="payment.php?key=<?php echo $this->_tpl_vars['a']['tkey']; ?>
&& amount=<?php echo $this->_tpl_vars['a']['amounts']; ?>
" class="btn btn-success">Payment</a></td>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['a']['file1'] != null): ?>
			<td><a href="uploads/<?php echo $this->_tpl_vars['a']['tkey']; ?>
/<?php echo $this->_tpl_vars['a']['file1']; ?>
" class="btn btn-success" download> Front Card</a></td>
			<td>	<a href="uploads/<?php echo $this->_tpl_vars['a']['tkey']; ?>
/<?php echo $this->_tpl_vars['a']['file2']; ?>
" class="btn btn-success" download> Back Card</a></td>
			<?php endif; ?>
			
				<?php elseif ($this->_tpl_vars['a']['status'] == 2): ?>
				<td>Rejected</td>
				<?php else: ?>
				<td>Pending</td>
				<?php endif; ?>
				<!-- <td><a href="ticketcancel.php?key=<?php echo $this->_tpl_vars['a']['tkey']; ?>
" class="btn btn-warning">Cancel</a></td>
			 --><td><a href="ticketedit.php?key=<?php echo $this->_tpl_vars['a']['tkey']; ?>
" class="btn btn-primary">Edit</a></td>
				<td><a href="ticketcancel.php?key=<?php echo $this->_tpl_vars['a']['tkey']; ?>
" class="btn btn-danger">Cancel</a></td>
			<?php endforeach; endif; unset($_from); ?>
				</table>
				
			</form>
		</body>
		</html>	   