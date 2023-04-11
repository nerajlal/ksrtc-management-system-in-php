<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
			<tr>
				<th>Depot Name</th>
				<th>Request</th>
			</tr>
			{foreach from=$view item="de"}
			<tr>
				<td>{$de.depotname}</td>
				<td>{$de.request}</td>
				<td><a href="reqremove.php?key={$de.rkey}" class="btn btn-warning">Remove</a></td>
				<td><a href="uploads/{$de.rkey}/{$de.confirmltr}" class="btn btn-success" download>Download</a></td>
			</tr>
				   {/foreach}
				</table>
			</form>
		</body>
		</html>
