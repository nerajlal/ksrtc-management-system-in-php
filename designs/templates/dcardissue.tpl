<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			{foreach from=$view item="dc"}
			<tr><td>Full Name</td><td><input type="text" name="name" class="form-control" value="{$dc.fullname}" readonly></td></tr>
			<tr><td>Address</td><td><textarea name="addr" class="form-control" readonly>{$dc.address}</textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control" value="{$dc.pincode}" readonly></td></tr>
			<tr><td>District</td><td><select name="district" class="form-control" readonly>
				<option>{$dc.district}</option>
				</select></td></tr>
				<tr><td>City</td><td><input type="text" name="city" class="form-control" value="{$dc.city}" readonly></td></tr>
				    <tr><td>Contact No</td><td><input type="text" name="contact_no" class="form-control" value="{$dc.contactno}" readonly></td></tr>
			<tr><td>Card Type</td><td><select name="cardtype" class="form-control" readonly><option>{$dc.cardtype}</option>
			</select></td></tr>
			<tr><td>Depo</td><td><input type="text" name="depo" class="form-control" value="{$dc.depot}" readonly></td></tr>
				<tr><td>Amount</td><td><input type="text" name="amount" class="form-control" value="{$dc.amount}" readonly></td></tr>
				<tr><td>Source</td><td><input type="text" name="source" class="form-control" value="{$dc.source}" readonly></td></tr>
				    <tr><td>Destination</td><td><input type="text" name="dest" class="form-control" value="{$dc.destination}" readonly></td></tr>
				     <tr><td>Depot</td><td><input type="text" name="dest" class="form-control" value="{$dc.depot}" readonly></td></tr>
				<tr><td>No Of Months</td><td><select name="month" class="form-control" readonly><option>{$dc.month}</option>
			</select></td></tr>
				    <tr><td></td><td><input type="submit" value="Issue" name="submit" class="btn btn-success"></td></tr>
				</table>
				{/foreach}
			</form>
		</body>
		</html>
