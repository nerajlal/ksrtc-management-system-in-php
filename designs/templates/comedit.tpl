<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" >
			<input type="hidden" name="hide" value="h">
			{foreach from=$view item="c"}
				    	<tr><td>Complaint Subject</td><td><input type="text" name="subject" class="form-control" value="{$c.subject}"></td></tr>
				    	<tr><td>Complaint</td><td><textarea name="complaint" class="form-control">{$c.complaint}</textarea></td></tr>
				    <tr><td></td><td><input type="submit" value="Change" class="btn btn-success"></td></tr>
				</table>
				{/foreach}
			</form>
		</body>
		</html>
