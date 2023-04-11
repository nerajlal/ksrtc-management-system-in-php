<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<table align="center">
			<input type="hidden" name="hide" value="h">
			{foreach from=$views item="t"}
			<tr><td>Photo</td><td><a href="photo.php?key={$t.tkey}" class="btn btn-warning">Update</a></td>
			<!-- <td><img src={$t.path} width="80px" height="100px"></td>
			 --><tr><td>Institution Name</td><td><select name="name" class="form-control">
				<option>{$t.instname}</option>
				{foreach from=$institution item="i"}
				<option>{$i.name}</option>
				{/foreach}
				</select></td></tr>
				
				    <tr><td>Depot</td><td><select name="depot" class="form-control">
				    	<option>{$t.depot}</option>
				    	{foreach from=$depot item="da"}
				<option>{$da.name}</option>
				{/foreach}
				</select></td></tr>
				        <tr><td>Source</td><td><input type="text" name="source" class="form-control" value="{$t.source}"></td></tr>
				    <tr><td>Destination</td><td><input type="text" name="dest" class="form-control" value="{$t.destination}"></td></tr>
				    <tr><td>No Of Months</td><td><input type="text" name="month" class="form-control" value="{$t.month}"></td></tr>
				    <tr><td>No Of Kilometers</td><td><input type="text" name="meter" class="form-control" value="{$t.meter}"></td></tr>
				    <tr><td>Confirmation Letter</td><td><a href="photo.php?key={$t.tkey}" class="btn btn-warning">Update</a></td>
			
				    <tr><td></td><td><input type="submit" value="Edit" class="btn btn-success"></td>
</tr>

{/foreach}
				</table>
			</form>
		</body>
		</html>
