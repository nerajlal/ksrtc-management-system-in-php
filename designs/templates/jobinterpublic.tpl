<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" accept=" ">
		<center>
			<table class="table table-striped">
				<tr>
					<th>Job Category</th>
					<th>Last Day For Apply</th>
				</tr>
				{foreach from=$views item="j"}
				<tr>
					<td><a href="certificate.php?key={$j.jkey}" class="btn btn-primary">Apply Now</a></td>
				</tr>
				{/foreach}
			</table>
		</center>
	</form>
</body>
</html>