<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" " enctype="multipart/form-data">
		<table align="center" class="table table-striped">
			<input type="hidden" name="hide" value="h">
			<th>Depot</th>
				<th>Source</th>
				<th>Destination</th>
				<th>No Of Months</th>
				<th>No Of Kilometers</th>
				<th>Status</th>
				</tr>
			{foreach from=$views item="c"}
			<tr>
				<td>{$c.depot}</td>
				<td>{$c.source}</td>
				<td>{$c.destination}</td>
				<td>{$c.months}</td>
				<td>{$c.kilometer}</td>
				{if $c.dcardstatus==1}
				<td>Approved</td>
				<td><a href="dcardpayment.php?key={$c.vkey}&& amount={$c.amount}" class="btn btn-success">Payment</a></td>
				{if $c.uploadcard!=null}
			<td><a href="uploads/{$c.vkey}/{$c.uploadcard}" class="btn btn-success" download> Download</a></td>
			{/if}
			
				{elseif $c.dcardstatus==2}
				<td>Rejected</td>
				{else}
				<td>Pending</td>
				{/if}
				
				<!-- {if $a.paymentstatus==0}
				
				<td><a href="dcardpayment.php?key={$c.vkey}&& amount={$c.amount}" class="btn btn-success">Payment</a></td>
				{else}
				<td>Paid</td>
				{/if} -->
				
				<!-- <td><a href="dcardpubcancel.php?key={$c.vkey}" class="btn btn-warning">cancel</a></td>
			 --><td><a href="dcardpubedit.php?key={$c.vkey}" class="btn btn-primary">Edit</a></td>
				<td><a href="dcardpubcancel.php?key={$c.vkey}" class="btn btn-danger">Cancel</a></td>
			{/foreach}
				</table>
				
			</form>
		</body>
		</html>	   