<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" >
<table align="center" class="table table-striped"><input type="hidden" name="hide" value="h">
			
{foreach from=$view item="n"}
				<tr><td>Notification</td><td><textarea name="notification" class="form-control">{$n.notification}</textarea></td></tr>
			    <tr><td></td><td><input type="submit" value="Change" class="btn btn-success"></td></tr>
							</table>
			  {/foreach}
							
			</form>
		</body>
		</html>
