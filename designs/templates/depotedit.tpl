<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			{foreach from=$view item="d"}
			<tr><td>Depot Name</td><td><input type="text" name="name" class="form-control" value="{$d.name}"></td></tr>
			<tr><td>District</td><td><select name="district" class="form-control">
				<option>{$d.district}</option>
				<option>Trivandrum</option>
				<option>Kollam</option><option>Pathanamthitta</option><option>Alapuzha</option><option>Kottayam</option><option>Idukki</option><option>Ernakulam</option><option>Thrissur</option><option>Palakkad</option><option>Malappuram</option><option>Kozhikode</option><option>Wayanad</option><option>Kannur</option><option>Kasargod</option></select></td></tr>
				   <tr><td></td><td><input type="submit" value="Change" class="btn btn-success"></td></tr>
				   {/foreach}
				</table>
			</form>
		</body>
		</html>
