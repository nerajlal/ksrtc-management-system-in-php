<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" " enctype="multipart/form-data">
		<table align="center">
			<input type="hidden" name="hide" value="h">
		{foreach from=$views item="d"}
			<tr><td>Depot</td><td><select name="depot" class="form-control">
				    	<option>--Select--</option>
				    	
				    	{foreach from=$dcardapply item="da"}
				<option>{$da.name}</option>
				{/foreach}
				</select></td></tr>
				         <tr><td>Source</td><td><input type="text" name="source" class="form-control" value="{$d.source}"></td></tr>
				    <tr><td>Destination</td><td><input type="text" name="dest" class="form-control" value="{$d.destination}"></td></tr>
				    <tr><td>No Of Months</td><td><input type="text" name="month" class="form-control" value="{$d.months}"></td></tr>
				    <tr><td>No Of Kilometers</td><td><input type="text" name="kilometer" class="form-control" value="{$d.kilometer}"></td></tr>
				   <tr><td></td><td><input type="submit" value="Edit" class="btn btn-success"></td></tr>
				</table>
				{/foreach}
			</form>
		</body>
		</html>	   