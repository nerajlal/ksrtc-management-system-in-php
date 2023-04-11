<html>
<head><title> </title></head> 
<body>	
		<table class="table table-stripped">
            <tr>
            <th>Certificate</th>
            <th>Semester</th>		
			
             </tr>
             {foreach from=$view item="v"}
             <tr>
             	<!-- <td><img src="{$v.path}" width="80px" height="80px"></td> -->             	
             	<td><a href="{$v.path}" download="">Click here to download</a></td>
                  <td>{$v.semester}</td>
             </tr>
             {/foreach}
		</table>
		
</body>
</html>