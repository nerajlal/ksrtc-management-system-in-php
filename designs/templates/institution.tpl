<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" name="institution" onsubmit = "return(validate());" >
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<tr><td>Institution Type</td><td><input type="radio" name="institution" id="institution" value="school">
					School
				<input type="radio" name="institution" id="institution" value="college">
				    College</td></tr>
				<tr><td>Institution Name</td><td><input type="text" name="name" id="name" class="form-control" required></td></tr>
			<tr><td>Address</td><td><textarea name="addr" id="addr" class="form-control" required></textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" maxlength="6" id="pincode" class="form-control" required></td></tr>
			<tr><td>District</td><td><select name="district" id="district" class="form-control" required>
				<option>---Select---</option>
				<option>Trivandrum</option>
				<option>Kollam</option><option>Pathanamthitta</option><option>Alapuzha</option><option>Kottayam</option><option>Idukki</option><option>Ernakulam</option><option>Thrissur</option><option>Palakkad</option><option>Malappuram</option><option>Kozhikode</option><option>Wayanad</option><option>Kannur</option><option>Kasargod</option></select></td></tr>
				<tr><td>City</td><td><input type="text" name="city" id="city" class="form-control" required></td></tr>
				    <tr><td>Contact No</td><td><input type="text" name="contact" maxlength="12" id="contact" class="form-control" required></td></tr>
				    <tr><td>Email ID</td><td><input type="email" name="email" id="email" class="form-control" required></td></tr>
				    <tr><td>Password</td><td><input type="password" name="password" id="password" class="form-control" required></td></tr>
				    <tr><td>Confirm Password</td><td><input type="password" name="confirm_password" id="confirm_password" class="form-control" required></td></tr>
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
      
         if( document.institution.institution.value == "" ) {
            alert( "Please provide your name!" );
            document.institution.institution.focus() ;
            return false;
         }
         if( document.institution.name.value == "" ) {
            alert( "Please provide your name!" );
            document.institution.name.focus() ;
            return false;
         }
         if( document.institution.addr.value == "" ) {
            alert( "Please provide your Address!" );
            document.institution.addr.focus() ;
            return false;
         }
         
         
         if( document.institution.pincode.value == "" || isNaN( document.institution.pincode.value ) ||
            document.institution.pincode.value.length != 6 ) {
            
            alert( "Please provide a pincode in the format #####." );
            document.institution.pincode.focus() ;
            return false;
         }
         if( document.institution.district.value == "" ) {
            alert( "Please provide your district!" );
            document.institution.district.focus() ;
            return false;
        }
        if( document.institution.city.value == "" ) {
            alert( "Please provide your city!" );
            document.institution.city.focus() ;
            return false;
        }
        if( document.institution.contact.value == "" || isNaN( document.institution.contact.value ) ||
            document.institution.contact.value.length !=10  && document.institution.contact.value.length !=12 ) {
            
            alert( "Please provide contact number!" );
            document.institution.contact.focus() ;
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

         if( document.institution.password.value == "" ) {
            alert( "Please provide your password!" );
            document.institution.password.focus() ;
            return false;
       }
        

         return( true );
      }
   //-->
</script>	
{/literal}


