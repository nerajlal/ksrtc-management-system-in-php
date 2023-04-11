<html>
<head><title></title></head>
<body>
	<form method="post" action=" ">
		<center>
			<table class="table table-striped">
				<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Institution Name</th>
				<th>Course/Section</th>
				<th>Semester/Class</th> 
				<th>Depot Name</th> 
				<th>Request</th>
				<th>Date</th> 
			</tr>
			{foreach from=$views item="s"}
			<tr>
				<td>{$s.name}</td>
				<td>{$s.address}</td>
				<td>{$s.gender}</td>
				<td>{$s.date_of_birth}</td>
				<td>{$s.institution}</td>
				<td>{$s.course}</td>
				<td>{$s.semester}</td>
				<td>{$s.depotname}</td>
				<td>{$s.request}</td>
				<td>{$s.currentdate}</td>
				{if $s.rkey!=null}
				<td><a href="confirm.php?key={$s.rkey}"class="btn btn-primary">Upload Confirmation</a></td>
				{elseif $s.rkey==null}
				<td><a href="confirm.php?key={$s.rkey}"class="btn btn-warning">Remove Confirmation</a></td>
				{/if}
				</tr>
				{/foreach}
			</table>
		</center>
	</form>
</body>
</html>
