<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped"><tr>
				<th>Complaint Subject</th>
				<th>Complaints</th>
				<th>Reply</th>
				<th>Currentdate</th>
			</tr>
			{foreach from=$views item="c"}
			<tr>
				<td>{$c.subject}</td>
				<td>{$c.complaint}</td>
				{if $c.reply!=null}
				<th>{$c.reply}</th>
				{else}
				<td>Waiting for reply</td>
				{/if}
				<td>{$c.currentdate}</td>
				
				<td><a href="comedit.php?key={$c.okey}" class="btn btn-warning">Edit</a></td>
				<td><a href="complaintdel.php?key={$c.okey}" class="btn btn-danger">Delete</a></td>
				
			</tr>
				   {/foreach}
							</table>
			</form>
		</body>
		</html>
