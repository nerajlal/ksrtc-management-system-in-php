<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<tr><td>Depot</td><td><select name="depot" class="form-control">
				<option>---Select---</option>
				{foreach from=$depot item="de"}
				<option>{$de.name}</option>
				{/foreach}
				</select></td></tr>
				    	<tr><td>Complaint Subject</td><td><input type="text" name="subject" class="form-control"></td></tr>
				    	<tr><td>Complaint</td><td><textarea name="complaint" class="form-control"></textarea></td></tr>
				    <tr><td></td><td><input type="submit" value="Submit" class="btn btn-success"></td></tr>
				</table>
			</form>
		</body>
		</html>
