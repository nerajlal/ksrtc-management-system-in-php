<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<tr><td>Photo</td><td><input type="file" name="photo0" class="form-control"></td></tr>
			{foreach from=$institution item="p"}
			
			<tr><td>Institution Name</td><td><input type="text" name="instname" class="form-control" value="{$p.name}" readonly></td></tr>
			{/foreach}
				    	    <tr><td>Depot</td><td><select name="depot" class="form-control">
				    	<option>--Select--</option>
				    	
				    	{foreach from=$depot item="d"}
				<option>{$d.name}</option>
				{/foreach}
				</select></td></tr>
				    <tr><td>Source</td><td><input type="text" name="source" class="form-control"></td></tr>
				    <tr><td>Destination</td><td><input type="text" name="dest" class="form-control"></td></tr>
				    <tr><td>No Of Months</td><td><select name="month" class="form-control">
				    	<option>--Select--</option>
				    	    	<option>1</option>
				    	    	<option>3</option>
				<option>6</option>
				</select></td></tr>
				    <tr><td>No Of Kilometers</td><td><input type="text" name="meter" class="form-control"></td></tr>
				    <tr><td>Confirmation Letter</td><td><input type="file" name="photo1" class="form-control"></td></tr>
				    <tr><td></td><td><input type="submit" value="Submit" class="btn btn-success"></td>
</tr>


				</table>
			</form>
		</body>
		</html>
