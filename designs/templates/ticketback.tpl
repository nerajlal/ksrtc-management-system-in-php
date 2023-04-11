<html>
<head>
<title>Concession Generation</title>
</head>
<body>
<table align="center">
<form method="post" action="" enctype="multipart/form-data">
  {foreach from=$view item="b"}

<tr><td>Month</td><td><select name="month"class="form-control" value="{$b.month}" readonly>
<option>{$b.month}</option>
<tr><td>No. of Km</td><td><input type="text" name="distance" class="form-control" value="{$b.meter}" readonly></tr></td>
<tr><td>Institution</td><td><select name="inst"class="form-control" value="{$b.institution}" readonly>
          <option>{$b.institution}</option> </select></td>
<tr><td>Total Amount</td><td><input type="text" name="amount" class="form-control" value="{$b.amounts}" readonly></tr></td>
</td><td></td>
<td><input class="btn btn-success" type="submit" value="Generate Card" name="submit"></td><td></td>
{/foreach}
</form>
</center>
</table>
</body>
</html>