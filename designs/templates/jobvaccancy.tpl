<html>
<head><title> </title></head> 
<body>
	<form method="post" action="">
		<table align="center">
			
			<input type="hidden" name="hide" value="h">
			<tr><td>Job category</td><td><input type="text" name="job" class="form-control"></td></tr>
			<tr><td>Job Details</td><td><textarea name="details" class="form-control"></textarea></td></tr>
			<tr><td>Depot</td><td><select name="depot" class="form-control">
				<option>{$d.depot}</option>
				<option>Ariankavu</option>
				<option>Kottarakara</option>
				<option>Chadayamangalam</option>
				<option>Thenmala</option>
				</select></td></tr>
				
			<tr><td>Salary</td><td><input type="text" name="salary" class="form-control"></td></tr>
			<tr><td>Qualification</td><td><textarea name="qdetails" class="form-control"></textarea></td></tr>
			<tr><td>Last Day For Apply</td><td><input type="date" name="apply" class="form-control"></td></tr>
		  <tr><td></td><td><input type="submit" value="Upload" class="btn btn-success"></td></tr>
		</table>
		
	</form>
</body>
</html>