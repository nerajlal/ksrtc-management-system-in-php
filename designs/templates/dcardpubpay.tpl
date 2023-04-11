<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
			<tr>
				<th>Card Type</th>
				<th>Amount</th>
				<th>Card Details</th>
			</tr>
			{foreach from=$views item="dp"}
			<tr>
				<td>{$dp.cardtype}</td>
				<td>{$dp.amount}</td>
				<td>{$dp.carddetails}</td>
				<td><a href="dcardpubapply.php?key={$dp.ckey}&&amount={$dp.amount}" class="btn btn-warning">Apply</a></td>
					</tr>
				   {/foreach}
				</table>
			</form>
		</body>
		</html>
