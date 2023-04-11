<?php /* Smarty version 2.6.26, created on 2022-05-05 09:22:57
         compiled from ticketback.tpl */ ?>
<html>
<head>
<title>Concession Generation</title>
</head>
<body>
<table align="center">
<form method="post" action="" enctype="multipart/form-data">
  <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>

<tr><td>Month</td><td><select name="month"class="form-control" value="<?php echo $this->_tpl_vars['b']['month']; ?>
" readonly>
<option><?php echo $this->_tpl_vars['b']['month']; ?>
</option>
<tr><td>No. of Km</td><td><input type="text" name="distance" class="form-control" value="<?php echo $this->_tpl_vars['b']['meter']; ?>
" readonly></tr></td>
<tr><td>Institution</td><td><select name="inst"class="form-control" value="<?php echo $this->_tpl_vars['b']['institution']; ?>
" readonly>
          <option><?php echo $this->_tpl_vars['b']['institution']; ?>
</option> </select></td>
<tr><td>Total Amount</td><td><input type="text" name="amount" class="form-control" value="<?php echo $this->_tpl_vars['b']['amounts']; ?>
" readonly></tr></td>
</td><td></td>
<td><input class="btn btn-success" type="submit" value="Generate Card" name="submit"></td><td></td>
<?php endforeach; endif; unset($_from); ?>
</form>
</center>
</table>
</body>
</html>