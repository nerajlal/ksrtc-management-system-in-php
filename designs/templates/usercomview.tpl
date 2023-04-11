<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped"><tr>
				<th>Depot</th>
				<th>Complaint Subject</th>
				<th>Complaints</th>
				<th>Reply</th>
				<th>CurrentDate</th>
				</tr>
			{foreach from=$views item="u"}
			<tr>
				<td>{$u.depot}</td>
				<td>{$u.subject}</td>
				<td>{$u.complaint}</td>
				{if $u.reply!=null}
				<th>{$u.reply}</th>
				{else}
				<td>Waiting for reply</td>
				{/if}
				<td>{$u.currentdate}</td>
				<td><a href="usercomedit.php?key={$u.okey}" class="btn btn-warning">Edit</a></td>
				<td><a href="usercomdel.php?key={$u.okey}" class="btn btn-danger">Delete</a></td>
			</tr>
				   {/foreach}
							</table>
			</form>
		</body>
		</html>
