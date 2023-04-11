<?php /* Smarty version 2.6.26, created on 2022-05-05 09:15:36
         compiled from issue.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center">
	<form method="post" action="" enctype="multpart/form-data">
		<input type="hidden" name="hide" value="h">

		<tr><td>Front File &nbsp &nbsp &nbsp</td><td><a href="conissue.php?key=<?php echo $this->_tpl_vars['key']; ?>
" class="btn btn-warning">Generate</a></td></tr>
			<tr><td>Back File</td><td><a href="ticketback.php?key=<?php echo $this->_tpl_vars['key']; ?>
" class="btn btn-warning">Generate</a></td></tr>
			<!-- <td><input type="submit" value="Upload" class="btn btn-success"></td></tr> -->
	</form>
</table>
</body>
</html>