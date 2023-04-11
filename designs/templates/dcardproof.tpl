<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			{foreach from=$view item="dc"}
			<tr><td>Full Name</td><td><input type="text" name="name" class="form-control" value="{$dc.fullname}" readonly></td></tr>
			<tr><td>Contact No</td><td><textarea name="contactno" class="form-control" readonly>{$dc.contactno}</textarea></td></tr>
			<tr><td>Depot</td><td><input type="text" name="depot" class="form-control" value="{$dc.depot}" readonly></td></tr>
			<tr><td>D-Card</td><td><input type="text" name="dcard" class="form-control" value="{$dc.cardtype}" readonly></td></tr>
				<tr><td>Amount</td><td><input type="text" name="amount" class="form-control" value="{$dc.amount}" readonly></td></tr>
				 <tr><td>Date Of Bill</td><td><input type="text" name="date" class="form-control" value="{$dc.currentdate}" readonly></td></tr>
				  <tr><td></td><td><input type="submit" value="Generate" name="generate" class="btn btn-success"></td></tr>
				  </table>
				  
				{/foreach}
			</form>
		</body>
		</html>
