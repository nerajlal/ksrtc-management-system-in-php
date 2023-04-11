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
			</tr>
			{foreach from=$views item="j"}
			<tr>
				<td>{$j.job}</td>
				<td>{$j.details}</td>
				<td>{$j.depot}</td>
				<td>{$j.salary}</td>
				<td>{$j.qdetails}</td>
				<td>{$j.apply}</td>
				<td><a href="certificate.php?key={$j.jkey}"class="btn btn-primary">Apply Now</a></td>

				</tr>
				{/foreach}
			</table>
		</center>
	</form>
</body>
</html>
