<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" name="atoreg" onsubmit = "return(validate());" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<tr><td>Name</td><td><input type="text" name="name" id="name" class="form-control" required></td></tr>
			<tr><td>Address</td><td><textarea name="addr" id="addr" class="form-control" required></textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" maxlength="6" id="pincode" class="form-control" required></td></tr>
			<tr><td>District</td><td><select name="district" id="district" class="form-control" required>
				<option>---Select---</option>
				<option>Trivandrum</option>
				<option>Kollam</option><option>Pathanamthitta</option><option>Alapuzha</option><option>Kottayam</option><option>Idukki</option><option>Ernakulam</option><option>Thrissur</option><option>Palakkad</option><option>Malappuram</option><option>Kozhikode</option><option>Wayanad</option><option>Kannur</option><option>Kasargod</option></select></td></tr>
				<tr><td>City</td><td><input type="text" name="city" id="city" class="form-control" required></td></tr>
				<tr><td>Gender</td><td><input type="radio" name="gender" id="gender" value="male">
					Male
				<input type="radio" name="gender" id="gender" value="female">
				    Female</td></tr>
				    <tr><td>Date of Birth</td><td><input type="date" max="{$date}" name="date_of_birth" id="date_of_birth" class="form-control" required></td></tr>
				    <tr><td>Depot</td><td><select name="depot" id="depot" class="form-control" required>
				<option>---Select---</option>
				{foreach from=$depot item="d"}
				<option>{$d.name}</option>
				{/foreach}
				</select></td></tr>
				        <tr><td>Contact No</td><td><input type="text" name="contact_no" maxlength="12" id="contact_no" class="form-control" required></td></tr>
				    <tr><td>Email ID</td><td><input type="email" name="email_id" id="email_id" class="form-control" required></td></tr>
				    <tr><td>Password</td><td><input type="password" name="password" id="password" class="form-control" required></td></tr>
				    <tr><td>Confirm Password</td><td><input type="password" name="confirm_password" class="form-control" required></td></tr>
				    <tr><td></td><td><input type="submit" value="Register" class="btn btn-success"></td></tr>
				</table>
			</form>
		</body>
		</html>
		{literal}
<script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() 
      {
      
         if( document.atoreg.name.value == "" || !isNaN( document.atoreg.name.value ))
          {
            alert( "Please provide your name!" );
            document.atoreg.name.focus() ;
            return false;
         }
         if( document.atoreg.addr.value == "" ) {
            alert( "Please provide your Address!" );
            document.atoreg.addr.focus() ;
            return false;
         }
         
         
         if( document.atoreg.pincode.value == "" || isNaN( document.atoreg.pincode.value ) ||
            document.atoreg.pincode.value.length != 6 ) {
            
            alert( "Please provide a pincode in the format #####." );
            document.atoreg.pincode.focus() ;
            return false;
         }
         if( document.atoreg.district.value == "" ) {
            alert( "Please provide your district!" );
            document.atoreg.district.focus() ;
            return false;
        }
        if( document.atoreg.city.value == "" ) {
            alert( "Please provide your city!" );
            document.atoreg.city.focus() ;
            return false;
        }
         if( document.atoreg.gender.value == "" ) {
            alert( "Please provide your gender!" );
            document.atoreg.gender.focus() ;
            return false;
        }
        if( document.atoreg.date_of_birth.value == "" ) {
            alert( "Please provide your date_of_birth!" );
            document.atoreg.date_of_birth.focus() ;
            return false;
        }
        if( document.atoreg.depot.value == "" ) {
            alert( "Please provide your depot!" );
            document.atoreg.depot.focus() ;
            return false;
        }
       
        if( document.atoreg.contact_no.value == "" || isNaN( document.atoreg.contact_no.value ) ||
            document.atoreg.contact_no.value.length !=10  && document.atoreg.contact_no.value.length !=12 ) {
            
            alert( "Please provide contact number!" );
            document.atoreg.contact_no.focus() ;
            return false;
         
         }
         if( document.myForm.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
        //  if( document.atoreg.reg.value == "" ) {
        //     alert( "Please provide your Aadhar number!" );
        //     document.atoreg.reg.focus() ;
        //     return false;
        // }

         if( document.atoreg.password.value == "" ) {
            alert( "Please provide your password!" );
            document.atoreg.password.focus() ;
            return false;
       }
        

         return( true );
      }
   //-->
</script>	
{/literal}


