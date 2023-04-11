<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			{foreach from=$view item="j"}
			<tr><td>Job Category</td><td><input type="text" name="job" class="form-control" value="{$j.job}"></td></tr>
			<tr><td>Job Details</td><td><input type="text" name="details" class="form-control" value="{$j.details}"></td></tr>
			<tr><td>Depot</td><td><select name="depot" class="form-control">
				<option>{$j.depot}</option>
				<option>Ariankavu</option>
				<option>Kottarakara</option>
				<option>Chadayamangalam</option>
				<option>Thenmala</option>
				</select></td></tr>
			<tr><td>Salary</td><td><input type="text" name="salary" class="form-control" value="{$j.salary}"></td></tr>	
			<tr><td>Qualification</td><td><input type="text" name="qdetails" class="form-control" value="{$j.qdetails}"></td></tr>
			<tr><td>Last Day For Apply</td><td><input type="text" name="apply" class="form-control" value="{$j.apply}"></td></tr>
			 <tr><td></td><td><input type="submit" value="Upload" class="btn btn-success"></td></tr>
				   {/foreach}
				</table>
			</form>
		</body>
		</html>
