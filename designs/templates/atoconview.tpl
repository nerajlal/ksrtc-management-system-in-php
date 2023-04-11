<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
		<tr>
			<th>Student Name</th>
			<th>Address</th>
			<th>Gender</th>
	    	<th>DOB</th>
			<th>Contact No</th>
			<th>Photo</th>
			<!-- <th>Institution Name</th>
			 --><th>Depot</th>
			<th>Source</th>
			<th>Destination</th>
			<th>No Of Months</th>
			<th>Confirmation Letter</th>
		</tr>
		{foreach from=$views item="a"}
		<tr>
			<td>{$a.name}</td>
			<td>{$a.address}</td>
			<td>{$a.gender}</td>
			<td>{$a.dateofbirth}</td>
			<td>{$a.contactno}</td>
			<td>{$a.photo0}</td>
			<!-- <td>{$a.instname}</td> -->
			<td>{$a.depot}</td>
			<td>{$a.source}</td>
			<td>{$a.destination}</td>
			<td>{$a.month}</td>
			<td><a href="uploads/{$a.tkey}/{$a.photo1}" class="btn btn-success" download>Download</a></td>
				{if $a.cstatus == 0}
					<td><a href="conapp.php?key={$a.tkey}" class="btn btn-primary">Approve</a></td>
					<td><a href="conrej.php?key={$a.tkey}" class="btn btn-danger">Reject</a></td>
					{elseif $a.status == 1 }
{if $a.paymentstatus==1}
					<td><a href="issue.php?key={$a.lkey}" class="btn btn-warning">Issue</a></td>{/if}
					<td><a href="ticketupload.php?key={$a.lkey}" class="btn btn-primary">Upload</a></td>
	      <td><a href="conrej.php?key={$a.tkey}" class="btn btn-danger">Reject</a></td>
           {elseif $a.status == 2}
            <td><a href="conapp.php?key={$a.tkey}" class="btn btn-primary">Approve</a></td>
          <td ><a class="btn btn-danger">Rejected</a></td>
					{/if}

				</tr>		
		
		{/foreach}
		</table>
	</form>
</body>
</html>
