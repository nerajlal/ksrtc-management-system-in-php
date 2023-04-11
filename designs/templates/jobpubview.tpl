<html>
<head><title></title></head>
<body>
	<form method="post" action=" ">
		<center>
			<table class="table table-striped">
				<tr>
				<th>Job Category</th>
				<th>Job Details</th>
				<th>Depot</th>
				<th>Salary</th>
				<th>Qualification</th>
				<th>Last Day For Apply</th> 
				<th>Status</th>
			</tr>
			{foreach from=$views item="j"}
			<tr>
				<td>{$j.job}</td>
				<td>{$j.details}</td>
				<td>{$j.depot}</td>
				<td>{$j.salary}</td>
				<td>{$j.qdetails}</td>
				<td>{$j.apply}</td>
				{if $j.jstatus==1}
				<td>Approved</td>
				{elseif $j.jstatus==2}
				<td>Rejected</td>
				{else}
				<td>Pending</td>
				{/if}
				<td><a href="jobcancel.php?key={$j.jakey}" class="btn btn-warning">Cancel</a></td>
				{if $j.jstatus==1}
				<td><a href="uploads/{$j.jakey}/{$j.interview}" class="btn btn-success" download>Download</a></td>
	{/if}			
				</tr>
				{/foreach}
			</table>
		</center>
	</form>
</body>
</html>
