<?php /* Smarty version 2.6.26, created on 2022-05-12 19:57:15
         compiled from atoconview.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
		<tr>
			<th>Student Name</th>
			<th>Address</th>
			<th>Gender</th>
	    	<th>DOB</th>
			<th>Contact No</th>
			<th>Photo</th>
			<!-- <th>Institution Name</th>
			 --><th>Depot</th>
			<th>Source</th>
			<th>Destination</th>
			<th>No Of Months</th>
			<th>Confirmation Letter</th>
		</tr>
		<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a']):
?>
		<tr>
			<td><?php echo $this->_tpl_vars['a']['name']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['address']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['gender']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['dateofbirth']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['contactno']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['photo0']; ?>
</td>
			<!-- <td><?php echo $this->_tpl_vars['a']['instname']; ?>
</td> -->
			<td><?php echo $this->_tpl_vars['a']['depot']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['source']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['destination']; ?>
</td>
			<td><?php echo $this->_tpl_vars['a']['month']; ?>
</td>
			<td><a href="uploads/<?php echo $this->_tpl_vars['a']['tkey']; ?>
/<?php echo $this->_tpl_vars['a']['photo1']; ?>
" class="btn btn-success" download>Download</a></td>
				<?php if ($this->_tpl_vars['a']['cstatus'] == 0): ?>
					<td><a href="conapp.php?key=<?php echo $this->_tpl_vars['a']['tkey']; ?>
" class="btn btn-primary">Approve</a></td>
					<td><a href="conrej.php?key=<?php echo $this->_tpl_vars['a']['tkey']; ?>
" class="btn btn-danger">Reject</a></td>
					<?php elseif ($this->_tpl_vars['a']['status'] == 1): ?>
<?php if ($this->_tpl_vars['a']['paymentstatus'] == 1): ?>
					<td><a href="issue.php?key=<?php echo $this->_tpl_vars['a']['lkey']; ?>
" class="btn btn-warning">Issue</a></td><?php endif; ?>
					<td><a href="ticketupload.php?key=<?php echo $this->_tpl_vars['a']['lkey']; ?>
" class="btn btn-primary">Upload</a></td>
	      <td><a href="conrej.php?key=<?php echo $this->_tpl_vars['a']['tkey']; ?>
" class="btn btn-danger">Reject</a></td>
           <?php elseif ($this->_tpl_vars['a']['status'] == 2): ?>
            <td><a href="conapp.php?key=<?php echo $this->_tpl_vars['a']['tkey']; ?>
" class="btn btn-primary">Approve</a></td>
          <td ><a class="btn btn-danger">Rejected</a></td>
					<?php endif; ?>

				</tr>		
		
		<?php endforeach; endif; unset($_from); ?>
		</table>
	</form>
</body>
</html>