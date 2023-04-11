<?php /* Smarty version 2.6.26, created on 2022-05-07 11:22:33
         compiled from atodcardview.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
		<tr>
			<th>Public Name</th>
			<th>Address</th>
			<th>Contact No</th>
			<th>Cardtype</th>
			<th>Amount</th>
			<th>No of Months</th>
			<th>Depot</th>
			<th>Source</th>
			<th>Destination</th>
			
			</tr>
		<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['fullname']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['address']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['contactno']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['cardtype']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['amount']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['month']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['depot']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['source']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['destination']; ?>
</td>
			
			<?php if ($this->_tpl_vars['a']['dcardstatus'] == 0): ?>
					<td><a href="dcardapp.php?key=<?php echo $this->_tpl_vars['a']['vkey']; ?>
" class="btn btn-primary">Approve</a></td>
					<td><a href="dcardrej.php?key=<?php echo $this->_tpl_vars['a']['vkey']; ?>
" class="btn btn-danger">Reject</a></td>
					<?php elseif ($this->_tpl_vars['a']['dcardstatus'] == 1): ?>
					 <td ><a class="btn btn-success">Approved</a></td>
						<?php if ($this->_tpl_vars['a']['paymentstatus'] == 1): ?>
					 <td><a href="dcardissue.php?key=<?php echo $this->_tpl_vars['a']['vkey']; ?>
" class="btn btn-warning">Issue</a></td>
					 <td><a href="dcardupload.php?key=<?php echo $this->_tpl_vars['a']['vkey']; ?>
" class="btn btn-primary">Upload</a></td>
	     	
					 <?php endif; ?>
					<!-- <td><a href="dcardupload.php?key=<?php echo $this->_tpl_vars['a']['vkey']; ?>
" class="btn btn-primary">Upload</a></td>
	     	 -->

          <td><a href="dcardrej.php?key=<?php echo $this->_tpl_vars['a']['vkey']; ?>
" class="btn btn-danger">Reject</a></td>
           <?php elseif ($this->_tpl_vars['a']['dcardstatus'] == 2): ?>
            <td><a href="dcardapp.php?key=<?php echo $this->_tpl_vars['a']['vkey']; ?>
" class="btn btn-primary">Approve</a></td>
          <td ><a class="btn btn-danger">Rejected</a></td>
					<?php endif; ?>

				</tr>		
		
	<?php endforeach; endif; unset($_from); ?>
		</table>
		</form>
</body>
</html>