<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
		<table align="center" class="table table-striped">
		<tr>
			<th>Public Name</th>
			<th>Address</th>
			<th>Contact No</th>
			<th>Cardtype</th>
			<th>Amount</th>
			<th>No of Months</th>
			<th>Depot</th>
			<th>Source</th>
			<th>Destination</th>
			
			</tr>
		{foreach from=$views item="a"}
		<tr>
			<td>{$a.fullname}</td>
			<td>{$a.address}</td>
			<td>{$a.contactno}</td>
			<td>{$a.cardtype}</td>
			<td>{$a.amount}</td>
			<td>{$a.month}</td>
			<td>{$a.depot}</td>
			<td>{$a.source}</td>
			<td>{$a.destination}</td>
			
			{if $a.dcardstatus == 0}
					<td><a href="dcardapp.php?key={$a.vkey}" class="btn btn-primary">Approve</a></td>
					<td><a href="dcardrej.php?key={$a.vkey}" class="btn btn-danger">Reject</a></td>
					{elseif $a.dcardstatus == 1}
					 <td ><a class="btn btn-success">Approved</a></td>
						{if $a.paymentstatus==1}
					 <td><a href="dcardissue.php?key={$a.vkey}" class="btn btn-warning">Issue</a></td>
					 <td><a href="dcardupload.php?key={$a.vkey}" class="btn btn-primary">Upload</a></td>
	     	
					 {/if}
					<!-- <td><a href="dcardupload.php?key={$a.vkey}" class="btn btn-primary">Upload</a></td>
	     	 -->

          <td><a href="dcardrej.php?key={$a.vkey}" class="btn btn-danger">Reject</a></td>
           {elseif $a.dcardstatus == 2 }
            <td><a href="dcardapp.php?key={$a.vkey}" class="btn btn-primary">Approve</a></td>
          <td ><a class="btn btn-danger">Rejected</a></td>
					{/if}

				</tr>		
		
	{/foreach}
		</table>
		</form>
</body>
</html>
