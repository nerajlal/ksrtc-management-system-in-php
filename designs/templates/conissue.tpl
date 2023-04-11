<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" " enctype="multipart/form-data">
		<table align="center">
			<input type="hidden" name="hide" value="h">
			{foreach from=$view1 item="c"}
			<tr><td>Photo</td><td><input type="text" name="photo" class="form-control" value="{$c.path}" readonly></td></tr>
			<tr><td>Student Name</td><td><input type="text" name="student_name" class="form-control" value="{$c.name}" readonly></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control" readonly>{$c.address}</textarea></td></tr>
			<tr><td>Gender</td>
					<td><input type="text" name="gender" class="form-control" value="{$c.gender}" readonly></td>
				    </tr>
				    <tr>
				    	<td>Date of Birth</td>
				    	<td><input type="text" name="date_of_birth" class="form-control" value="{$c.dateofbirth}" readonly></td>
				    </tr>
				    <tr><td>Institution Name</td><td><input type="text" name="institution" class="form-control" value="{$c.institution}" readonly></td></tr>
			 <tr><td>Source</td><td><input type="text" name="source" class="form-control" value="{$c.source}" readonly></td></tr>
				    <tr><td>Destination</td><td><input type="text" name="dest" class="form-control" value="{$c.destination}" readonly></td></tr>
				    <tr><td>No Of Months</td><td><input type="text" name="month" class="form-control" value="{$c.month}" readonly></td></tr>
				    <tr><td></td><td><input type="submit" name="submit" value="Issue" class="btn btn-success"></td></tr>
				</table>
				{/foreach}
			</form>
		</body>
		</html>	   