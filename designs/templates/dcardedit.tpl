<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" >
			<input type="hidden" name="hide" value="h">
			{foreach from=$view item="da"}
			<tr><td>Card Type</td><td><select name="cardtype" class="form-control">
				<option>{$da.cardtype}</option>
				<option>Bronze</option>
				<option>Silver</option>
				<option>Gold</option>
				<option>Platinum</option>
				</select></td></tr>
				<tr><td>Amount</td><td><input type="text" name="amount" class="form-control" value="{$da.amount}"></td></tr>
				<tr><td>No Of Months</td><td><select name="month" class="form-control">
				<option>{$da.month}</option>
				<option>1</option>
				<option>3</option>
				<option>6</option>
				</select></td></tr>
				<tr><td>Card Details</td><td><input type="text" name="carddetails" class="form-control" value="{$da.carddetails}"></td></tr>
				    <tr><td></td><td><input type="submit" value="Change" class="btn btn-success"></td></tr>
				    {/foreach}
				</table>
			</form>
		</body>
		</html>
