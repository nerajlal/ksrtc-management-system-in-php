<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
			
			<tr>
			<th>Notification</th>
			<th>Date</th>
				</tr>
				{foreach from=$views item="no"}
			<tr>
				<td>{$no.notification}</td>
				<td>{$no.currentdate}</td>
				<td><a href="atonotview.php?key={$no.notification}&&key1={$no.nkey}"></a></td>
				</tr>
				   {/foreach}
							</table>
			</form>
		</body>
		</html>
