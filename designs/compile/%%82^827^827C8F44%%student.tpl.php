<?php /* Smarty version 2.6.26, created on 2023-01-27 14:24:33
         compiled from student.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
	<form method="post" action=" " name="student" onsubmit="return(validate());">
		<table align="center">
			<input type="hidden" name="hide" value="h">
			<tr><td>Student Name</td><td><input type="text" name="student_name" id="student_name" class="form-control" required></td></tr>
			<tr><td>Address</td><td><textarea name="addr" id="addr" class="form-control" required></textarea></td></tr>
			<tr><td>Pincode</td><td><input type="text" name="pincode" maxlength=
        "6" id="pincode" class="form-control" required></td></tr>
			<tr><td>District</td><td><select name="district" id="district" class="form-control" required>
				<option>---Select---</option>
				<option>Trivandrum</option>
				<option>Kollam</option>
				<option>Pathanamthitta</option>
				<option>Alapuzha</option>
				<option>Kottayam</option>
				<option>Idukki</option>
				<option>Ernakulam</option>
				<option>Thrissur</option>
				<option>Palakkad</option>
				<option>Malappuram</option>
				<option>Kozhikode</option>
				<option>Wayanad</option>
				<option>Kannur</option>
				<option>Kasargod</option></select></td></tr>
				<tr><td>Gender</td><td><input type="radio" name="gender" id="gender" value="male">
					Male
				<input type="radio" name="gender" id="gender" value="female">
				    Female</td></tr>
				    <tr><td>Date of Birth</td><td><input type="date" max="<?php echo $this->_tpl_vars['date']; ?>
" name="date_of_birth" id="date_of_birth" class="form-control" required></td></tr>
				    <tr><td>Institution Name</td><td><input type="text" name="institution" id="institution" class="form-control" required></td></tr>
				    <tr><td>Course/Section</td><td><input type="text" name="course" id="course" class="form-control" required></td></tr>
				    <tr><td>Semester/Class</td><td><input type="text" name="semester" id="semester" class="form-control" required></td></tr>
				    <tr><td>Contact No</td><td><input type="text" name="contact_no" maxlength="12" id="contact_no" class="form-control" required></td></tr>
				    <tr><td>Email</td><td><input type="email" name="email" id="email" class="form-control" required></td></tr>
				    <tr><td>Password</td><td><input type="password" name="password" id="password" class="form-control" required></td></tr>
				    <tr><td>Confirm Password</td><td><input type="password" name="confirm_password" id="confirm_password" class="form-control" required></td></tr>
				    <tr><td></td><td><input type="submit" value="Register" class="btn btn-success"></td></tr>
				</table>
			</form>
</body>
</html>
<?php echo '
<script type = "text/javascript">
      function validate() 
      {
       if( document.student.student_name.value == "" || isAlpha( document.student.student_name.value ))
          {

         // if( document.student.name.value == "" ) {
            alert( "Please provide your name!" );
            document.student.name.focus() ;
            return false;
         }
         if( document.student.addr.value == "" ) {
            alert( "Please provide your Address!" );
            document.student.addr.focus() ;
            return false;
         }
         
         
          if( document.student.pincode.value == "" || isNaN( document.student.pincode.value ) ||
            document.student.pincode.value.length != 6 ) {

            alert( "Please provide a pincode in the format #####." );
            document.student.pincode.focus() ;
            return false;
         }
         if( document.student.district.value == "" ) {
            alert( "Please provide your district!" );
            document.student.district.focus() ;
            return false;
        }
        // if( document.student.city.value == "" ) {
        //     alert( "Please provide your city!" );
        //     document.student.city.focus() ;
        //     return false;
        // }
         if( document.student.gender.value == "" ) {
            alert( "Please provide your gender!" );
            document.student.gender.focus() ;
            return false;
        }
        if( document.student.date_of_birth.value == "" ) {
            alert( "Please provide your date_of_birth!" );
            document.student.date_of_birth.focus() ;
            return false;
        }
        if( document.student.institution.value == "" ) {
            alert( "Please provide your institution!" );
            document.student.institution.focus() ;
            return false;
        }
        if( document.student.course.value == "" ) {
            alert( "Please provide your course/section!" );
            document.student.course.focus() ;
            return false;
        }
        if( document.student.semester.value == "" ) {
            alert( "Please provide your semester/class!" );
            document.student.semester.focus() ;
            return false;
        }
       
        if( document.student.contact_no.value == "" || isNaN( document.student.contact_no.value ) ||
            document.student.contact_no.value.length !=10  && document.student.contact_no.value.length !=12 ) {
            
            alert( "Please provide contact number!" );
            document.student.contact_no.focus() ;
            return false;
         
         }
         if( document.myForm.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         if( document.student.password.value == "" ) {
            alert( "Please provide your password!" );
            document.student.password.focus() ;
            return false;
       }
        

         return (true) ;
      }
</script>	
'; ?>



