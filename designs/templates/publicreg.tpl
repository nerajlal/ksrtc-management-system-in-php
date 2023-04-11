<html>
<head><title>  </title></head>
<body>
	<form method="post" action="" name="publicreg" onsubmit = "return(validate());">
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<tr><td>Full Name</td><td><input type="text" name="name" id="name" class="form-control" required></td></tr>
			<tr><td>Address</td><td><textarea name="addr" id="addr" class="form-control" required></textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" maxlength="6" id="pincode" class="form-control" required></td></tr>
			<tr><td>Gender</td><td><input type="radio" name="gender" id="gender" value="male">
					Male
				<input type="radio" name="gender" id="gender" value="female">
				    Female</td></tr>
				    <tr><td>Date of Birth</td><td><input type="date" max="{$date}" name="date_of_birth" id="date_of_birth" class="form-control" required></td></tr>
			<tr><td>District</td><td><select name="district" id="district" class="form-control" required>
				<option>---Select---</option>
				<option>Trivandrum</option>
				<option>Kollam</option><option>Pathanamthitta</option><option>Alapuzha</option><option>Kottayam</option><option>Idukki</option><option>Ernakulam</option><option>Thrissur</option><option>Palakkad</option><option>Malappuram</option><option>Kozhikode</option><option>Wayanad</option><option>Kannur</option><option>Kasargod</option></select></td></tr>
				<tr><td>City</td><td><input type="text" name="city" id="city" class="form-control" required></td></tr>
				    <tr><td>Contact No</td><td><input type="text" name="contact_no" maxlength="12" id="contact_no" class="form-control" required></td></tr>
				    <tr><td>Email ID</td><td><input type="email" name="email_id" id="email_id" class="form-control" required></td></tr>
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
         if( document.publicreg.name.value == "" ) {
            alert( "Please provide your name!" );
            document.publicreg.name.focus() ;
            return false;
         }
         if( document.publicreg.addr.value == "" ) {
            alert( "Please provide your Address!" );
            document.publicreg.addr.focus() ;
            return false;
         }
         
         
         if( document.publicreg.pincode.value == "" || isNaN( document.publicreg.pincode.value ) ||
            document.publicreg.pincode.value.length != 6 ) {
            
            alert( "Please provide a pincode in the format #####." );
            document.publicreg.pincode.focus() ;
            return false;
         }
         if( document.publicreg.district.value == "" ) {
            alert( "Please provide your district!" );
            document.publicreg.district.focus() ;
            return false;
        }
        if( document.publicreg.city.value == "" ) {
            alert( "Please provide your city!" );
            document.publicreg.city.focus() ;
            return false;
        }
        if( document.publicreg.contact_no.value == "" || isNaN( document.publicreg.contact_no.value ) ||
            document.publicreg.contact_no.value.length !=10  && document.publicreg.contact_no.value.length !=12 ) {
            
            alert( "Please provide contact number!" );
            document.publicreg.contact_no.focus() ;
            return false;
         
         }
         if( document.myForm.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
    

         if( document.publicreg.password.value == "" ) {
            alert( "Please provide your password!" );
            document.publicreg.password.focus() ;
            return false;
       }
        

         return( true );
      }
   //-->
</script>	
{/literal}


