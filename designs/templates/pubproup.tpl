<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			{foreach from=$views item="p"}
			<tr><td>Full Name</td><td><input type="text" name="name" class="form-control" value="{$p.fullname}"></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control" >{$p.address}</textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control" value="{$p.pincode}"></td></tr>
			<tr><td>Gender</td>
				{if $p.gender == Male}
		<td>
			<input type="radio" name="gender" value="Male" checked>Male
			<input type="radio" name="gender" value="Female">Female
		</td>
		{else}
		<td>
			<input type="radio" name="gender" value="Male" >Male
			<input type="radio" name="gender" value="Female" checked>Female
		</td>
		{/if}
					    </tr>
				    <tr><td>Date of Birth</td><td><input type="date" name="date_of_birth" class="form-control" value="{$p.date_of_birth}"></td></tr>
			  <tr><td>District</td><td><select name="district" class="form-control">
				<option>{$p.district}</option>
				<option>Trivandrum</option>
				<option>Kollam</option><option>Pathanamthitta</option><option>Alapuzha</option><option>Kottayam</option><option>Idukki</option><option>Ernakulam</option><option>Thrissur</option><option>Palakkad</option><option>Malappuram</option><option>Kozhikode</option><option>Wayanad</option><option>Kannur</option><option>Kasargod</option></select></td></tr>
				<tr><td>City</td><td><input type="text" name="city" class="form-control"  value="{$p.city}"></td></tr>
				    <tr><td>Contact No</td><td><input type="text" name="contact_no" class="form-control" value="{$p.contactno}"></td></tr>
				    <tr><td>Email ID</td><td><input type="email" name="email_id" class="form-control" value="{$p.email}"></td></tr>
				    <tr><td></td><td><input type="submit" name="register" value="Update" class="btn btn-success"></td></tr>
				</table>
				{/foreach}
			</form>
		</body>
		</html>
