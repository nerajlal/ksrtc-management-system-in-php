<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form name="form" method="post" enctype="multipart/form-data">
			<input type="hidden" name="hide" value="h">
	<table>
		{foreach from=$photo item="s"}
		<tr>
			<td><img src="uploads/{$s.tkey}/{$s.photo}" height="120px"></td>
		</tr>
		{/foreach}
		<tr><td><input type="file" name="photo"></td></tr>
		<tr><td><input type="submit" name="change" value="Change" class="btn btn-success"></td></tr>

	</table>
	</form>
</center>
</body>
</html>
