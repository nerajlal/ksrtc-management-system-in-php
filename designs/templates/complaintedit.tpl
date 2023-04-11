<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" >
			<input type="hidden" name="hide" value="h">
			{foreach from=$view item="c"}
			<tr><td>Depot</td><td><select name="depot" class="form-control">
				<option>{$c.depot}</option>
				<option>Ariankavu</option>
				<option>Kottarakara</option>
				<option>Chadayamangalam</option>
				<option>Thenmala</option>
				<option>kayamkulam</option>
				</select></td></tr>
				    	<tr><td>Complaint Subject</td><td><input type="text" name="subject" class="form-control" value="{$c.subject}"></td></tr>
				    	<tr><td>Complaint</td><td><textarea name="complaint" class="form-control">{$c.complaint}</textarea></td></tr>
				    <tr><td></td><td><input type="submit" value="Change" class="btn btn-success"></td></tr>
				</table>
				{/foreach}
			</form>
		</body>
		</html>
