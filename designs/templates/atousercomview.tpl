<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
			<tr>
			<th>Name</th>
			<th>Contact No</th>
				<th>Complaint Subject</th>
				<th>Complaints</th>
				<th>Date</th>
				</tr>
			{foreach from=$views item="c"}
			<tr>
				<td>{$c.fullname}</td>
				<td>{$c.contact}</td>
				<td>{$c.subject}</td>
				<td>{$c.complaint}</td>
				<td>{$c.currentdate}</td>
				<td><a href="atocomview.php?key={$c.complaint}&&key1={$c.okey}"></a></td>
				{if $c.reply==""}
				<td><a href="atostudreply.php?key={$c.okey}" class="btn btn-primary">Reply</a></td>
					{else}
					<td><a href=" " class="btn btn-success">Replied</a></td>
				</tr>
				{/if}
				   {/foreach}
							</table>
			</form>
		</body>
		</html>
