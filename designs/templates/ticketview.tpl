

<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" " enctype="multipart/form-data">
		<table align="center" class="table table-striped">
			<input type="hidden" name="hide" value="h">
			<tr>
			<th>Photo</th>
			<th>Institution Name</th>
			<th>Depot</th>
			<th>Source</th>
			<th>Destination</th>
			<th>No Of Months</th>
			<th>No Of Kilometers</th>
			<th>Confirmation Letter</th>
			<th>Status</th>
			<th>Download Concession </th>
				<th>Download Concession </th>
			
		</tr>
		{foreach from=$views item="a"}
		<tr>
			<td>{$a.photo0}</td>
			<td>{$a.instname}</td>
			<td>{$a.depot}</td>
			<td>{$a.source}</td>
			<td>{$a.destination}</td>
			<td>{$a.month}</td>
			<td>{$a.meter}</td>
			<td>{$a.photo1}</td>


				{if $a.status==1}
				<td>Approved</td>
				{if $a.paymentstatus==0}
				<td><a href="payment.php?key={$a.tkey}&& amount={$a.amounts}" class="btn btn-success">Payment</a></td>
				{/if}
				{if $a.file1!=null}
			<td><a href="uploads/{$a.tkey}/{$a.file1}" class="btn btn-success" download> Front Card</a></td>
			<td>	<a href="uploads/{$a.tkey}/{$a.file2}" class="btn btn-success" download> Back Card</a></td>
			{/if}
			
				{elseif $a.status==2}
				<td>Rejected</td>
				{else}
				<td>Pending</td>
				{/if}
				<!-- <td><a href="ticketcancel.php?key={$a.tkey}" class="btn btn-warning">Cancel</a></td>
			 --><td><a href="ticketedit.php?key={$a.tkey}" class="btn btn-primary">Edit</a></td>
				<td><a href="ticketcancel.php?key={$a.tkey}" class="btn btn-danger">Cancel</a></td>
			{/foreach}
				</table>
				
			</form>
		</body>
		</html>	   