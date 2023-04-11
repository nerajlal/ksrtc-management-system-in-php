<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			{foreach from=$views item="i"}
			<tr><td>Institution Type</td>
				{if $i.institution == "school"}
					<td><input type="radio" name="institution" value="school" checked>
					School
				<input type="radio" name="institution" value="college">
				    College</td></tr>
							</td>
			{/if}
			{if $i.institution == "college"}
					<td><input type="radio" name="institution" value="school">
					School
				<input type="radio" name="institution" value="college" checked>
				    College</td></tr>
							</td>
			{/if}
			<tr><td>Institution Name</td><td><input type="text" name="name" class="form-control" value="{$i.name}"></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control">{$i.address}</textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control" value="{$i.pincode}"></td></tr>
			<tr><td>District</td><td><select name="district" class="form-control">
				<option>{$i.district}</option>
				<option>Trivandrum</option>
				<option>Kollam</option><option>Pathanamthitta</option><option>Alapuzha</option><option>Kottayam</option><option>Idukki</option><option>Ernakulam</option><option>Thrissur</option><option>Palakkad</option><option>Malappuram</option><option>Kozhikode</option><option>Wayanad</option><option>Kannur</option><option>Kasargod</option></select></td></tr>
				<tr><td>City</td><td><input type="text" name="city" class="form-control" value="{$i.city}"></td></tr>
				    <tr><td>Contact No</td><td><input type="text" name="contact" class="form-control" value="{$i.contact}"></td></tr>
				    <tr><td>Email ID</td><td><input type="email" name="email" class="form-control" value="{$i.email}"></td></tr>
				    <tr><td></td><td><input type="submit" value="Update" class="btn btn-success"></td></tr>
				</table>
				{/foreach}
			</form>
		</body>
		</html>
