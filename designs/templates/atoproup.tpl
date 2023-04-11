<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<table align="center" >
			<input type="hidden" name="hide" value="h">
			{foreach from=$views item="at"}
			<tr><td>Name</td><td><input type="text" name="name" class="form-control" value="{$at.name}"></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control">{$at.address}</textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control" value="{$at.pincode}"></td></tr>
			<tr><td>District</td><td><select name="district" class="form-control"><option>{$at.district}</option>
				<option>Trivandrum</option>
				<option>Kollam</option>
				<option>Pathanamthitta</option>
				<option>Alapuzha</option>
				<option>Kottayam</option>
				<option>Idukki</option>
				<option>Ernakulam</option>
				<option>Thrissur</option>
				<option>Palakkad</option>
				<option>Malappuram</option>
				<option>Kozhikode</option>
				<option>Wayanad</option>
				<option>Kannur</option>
				<option>Kasargod</option></select></td></tr>
				<tr><td>City</td><td><input type="text" name="city" class="form-control" value="{$at.city}"></td></tr>
				<tr><td>Gender</td>
					{if $at.gender == "male"}
					<td><input type="radio" name="gender" value="male" checked>
					Male
				<input type="radio" name="gender" value="female">Female
			</td>
			{/if}
			{if $at.gender == "female"}
			<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female" checked>Female
			</td>
			{/if}
				    </tr>
				    <tr><td>Date of Birth</td><td><input type="date" max="{$date}" name="date_of_birth" class="form-control" value="{$at.dateofbirth}"></td></tr>
			  <tr><td>Depot</td><td><select name="depot" class="form-control">
				{foreach from=$depot item="d"}
				<option>{$d.name}</option>
				{/foreach}
				</select></td></tr>
				   <tr><td>Contact No</td><td><input type="text" name="contact_no" class="form-control" value="{$at.contact}"></td></tr>
				    <tr><td>Email ID</td><td><input type="email" name="email" class="form-control" value="{$at.email}"></td></tr>
			        <tr><td></td><td><input type="submit" name="register" value="Update"  class="btn btn-success"></td></tr>
				</table>
				{/foreach}
	</form>
</body>
</html>
