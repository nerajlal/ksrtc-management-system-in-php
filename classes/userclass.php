<?php
class userclass
{
    function fetch_atodepot()
    {
        // $id=keytoid("login","lkey",$key);
      $qr="select * from depot";
        $ex1=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex1))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }

    function ins($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l)
	{
		$enc=md5($k);
		$ema=uniquekey("login","lkey");
		$qr="insert into login (lkey,email,password,usertype)values('".$ema."','".$j."','".$enc."','1')";
		$exq=mysql_query($qr);	
		$id=keytoid("login","lkey",$ema);
		$key=uniquekey("ato","akey");
		$qry="insert into ato(akey,name,address,pincode,district,city,gender,dateofbirth,depot,contact,loginid)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$id."')";
		$exe=mysql_query($qry);
		if($exe&&$exq)
		{
        	echo"<script>alert('Registartion Successful')</script>";
		}
		else
		{
			echo"<script>alert('Registration Unsuccessful')</script>";
		}
	}
	function stud($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m)
	{
    		$enc=md5($l);
		$ema=uniquekey("login","lkey");
		$qr="insert into login(lkey,email,password,usertype,status)values('".$ema."','".$k."','".$enc."','2','1')";
		$exq=mysql_query($qr);
		$id=keytoid("login","lkey",$ema);
		$key=uniquekey("student","skey");
		$qry="insert into student(skey,name,address,pincode,district,gender,dateofbirth,institution,course,semester,contactno,loginid)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$id."')";
       //echo $qry;exit;
		$exe=mysql_query($qry);
		if($exe&&$exq)
		{
        	echo"<script>alert('Registartion Successful')</script>";
		}
		else
		{
			echo"<script>alert('Registration Unsuccessful')</script>";
		}
	}
	function pub($a,$b,$c,$j,$k,$d,$e,$f,$g,$h,$i)
	{
		$enc=md5($h);
		$em=uniquekey("login","lkey");
		$qr="insert into login(lkey,email,password,usertype,status)values('".$em."','".$g."','".$enc."','3','1')";
		$exq=mysql_query($qr);
		$id=keytoid("login","lkey",$em);
		$key=uniquekey("public","pkey");
		$qry="insert into public(pkey,fullname,address,pincode,gender,date_of_birth,district,city,contactno,loginid)values('".$key."','".$a."','".$b."','".$c."','".$j."','".$k."','".$d."','".$e."','".$f."','".$id."')";
		$exe=mysql_query($qry);
		if($exe&&$exq)
		{
        	echo"<script>alert('Registartion Successful')</script>";
		}
		else
		{
			echo"<script>alert('Registration Unsuccessful')</script>";
		}
	}
	function login($a,$b)
	{
		$enc=md5($b);
		$qr="select lkey,usertype from login where email='".$a."'and password='".$enc."'";
		$ex=mysql_query($qr);
		$key=NULL;
		$c=0;
		while ($rr=mysql_fetch_array($ex))
		{
			$c=$c+1;
         	$key=$rr['lkey'];
           	$u=$rr['usertype'];
       	}
		if($c>0)
		{
			setcookie("lkey",$key);
			setcookie("logined",1);
			if($u==0)
				header("location:admin.php");
			elseif($u==1)
				header("location:atohome.php");
			elseif($u==2)
				header("location:studhome.php");
            elseif($u==3)
                header("location:publichome.php");
			else
				header("location:institutionhome.php");
		}
		else
		{
			echo"<script>alert('Invalid User')</script>";
		}
	}
	 function atoprofile($at)
	{
    	$id=keytoid("login","lkey",$at);
    	$q1="select * from ato inner join login on login.id=ato.loginid where loginid='".$id."'";

    	$e1=mysql_query($q1);
    	//echo $q1;$exit;
    	$a1=array();
    	while($r1=mysql_fetch_array($e1))
    	{
     		$a1[]=$r1;
    	}
     return $a1;
	}
    function fetch_atoupdepot()
    {
        // $id=keytoid("login","lkey",$key);
      $qr="select * from depot";
        $ex1=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex1))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }

    function atoupdate($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$at)
    {
    	$id=keytoid("login","lkey",$at);
    	$q2="update ato set name='".$a."',address='".$b."',pincode='".$c."',district='".$d."',city='".$e."',gender='".$f."',dateofbirth='".$g."',depot='".$h."',contact='".$i."' where loginid='".$id."'";
    	$e2=mysql_query($q2);
    	$q3="update login set email='".$j."' where id='".$id."'";
    	$e3=mysql_query($q3);
    	// echo $q3;exit;
    	if($e3&&$e2)
    	{
			echo"<script>alert('Updation Successful')
			window.location.href='atoproup.php';
			</script>";
    	}
    	else
    	{
    		echo"<script>alert('Updation Unsuccessful');
    		</script>";
    	} 
    }
    function studprofile($st)
	{
    	$id=keytoid("login","lkey",$st);
        $q3="select * from student inner join login on login.id=student.loginid where login.id='".$id."'";
        $e4=mysql_query($q3);
        //
        $a2=array();
        while($r2=mysql_fetch_array($e4))
        {
     		$a2[]=$r2;
     	}
        return $a2;
	}
	function studupdate($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$st)
    {
		$id=keytoid("login","lkey",$st);
    	$q4="update student set name='".$a."',address='".$b."',pincode='".$c."',district='".$d."',gender='".$e."',dateofbirth='".$f."',institution='".$g."',course='".$h."',semester='".$i."',contactno='".$j."' where loginid='".$id."'";
    	$e6=mysql_query($q4);
    	// echo $q4;exit;
    	$q3="update login set email='".$k."' where id='".$id."'";
    	$e5=mysql_query($q3);
    	
    	if($e6&&$e5)
    	{
			echo"<script>alert('Updation Successful');
			window.location.href='stdproup.php';
			</script>";
    	}
    	else
    	{
    		echo"<script>alert('Updation Unsuccessful');
    		</script>";
    	}
    }
    function pubprofile($p)
	{
    	$id=keytoid("login","lkey",$p);
        $q5="select * from public inner join login on login.id=public.loginid where loginid='".$id."'";
        $e7=mysql_query($q5);
        $a3=array();
        while($r3=mysql_fetch_array($e7))
        {
     		$a3[]=$r3;
        }
        return $a3;
	}
	function pubupdate($a,$b,$c,$d,$e,$f,$g,$h,$i,$p)
	{
    	$id=keytoid("login","lkey",$p);
    	$q6="update public set fullname='".$a."',address='".$b."',pincode='".$c."',gender='".$d."',date_of_birth='".$e."',district='".$f."',city='".$g."',contactno='".$h."'  where loginid='".$id."'";
    	$e9=mysql_query($q6);
    	// echo $q6;exit;
    	$q7="update login set email='".$i."' where id='".$id."'";
    	$e8=mysql_query($q7);
    	
    	if($e9&&$e8)
    	{
			echo"<script>alert('Updation Successful')
			window.location.href='pubproup.php';
			</script>";
    	}
    	else
    	{
    		echo"<script>alert('Updation Unsuccessful');
    		</script>";
    	}
    }
    function apr()
    {
        $q11="select * from ato inner join login on login.id=ato.loginid";
        $e12=mysql_query($q11);
        $a4=array();
        while ($r4=mysql_fetch_array($e12))
         {
            $a4[]=$r4;
        }
        return $a4;
    }
    function atoapp($key1)
    {
    	$id=keytoid("login","lkey",$key1);
    	$q9="update login set status='1' where id='".$id."'";
    	$e10=mysql_query($q9);
    	echo "<script>alert('Data Approved')
    	window.location.href='adminatoview.php';
    	</script>";
    }
    function atorej($key2)
    {
    	$id=keytoid("login","lkey",$key2);
    	$q10="update login set status='2' where id='".$id."'";
    	$e11=mysql_query($q10);
    	echo "<script>alert('Data Rejected')
    	window.location.href='adminatoview.php';
    	</script>";
    }
     function std()
    {
        $q12="select * from student inner join login on login.id=student.loginid where status='1'";
        $e13=mysql_query($q12);
        $a5=array();
        while ($r5=mysql_fetch_array($e13))
         {
            $a5[]=$r5;
        }
        return $a5;
    }
     function pubview()
    {
        $q13="select * from public inner join login on login.id=public.loginid where status='1'";
        $e14=mysql_query($q13);
        $a6=array();
        while ($r6=mysql_fetch_array($e14))
         {
            $a6[]=$r6;
        }
        return $a6;
    }

   function depot($a,$b)
    {
        $key=uniquekey("depot","dkey");
        $qry="insert into depot(dkey,name,district)values('".$key."','".$a."','".$b."')";
        //echo "$qry";exit;
        $exe=mysql_query($qry);
        if($exe)
        {
            echo"<script>alert('Data added Successfully')</script>";
        }
        else
        {
            echo"<script>alert('Data added Unsuccessfully')</script>";
        }
    }
    function depotview()
    {
        $qr="select * from depot order by id desc";
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;    
    }
     function depotedit($key)
    {
        $id=keytoid("depot","dkey",$key);
        $qry="select * from depot where id='".$id."'";
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
    function depotedit1($a,$b,$key)
    {
        $id=keytoid("depot","dkey",$key);
          $qr="update depot set name='".$a."',district='".$b."' where id='".$id."'";
         // echo $qr;exit;
        $ex=mysql_query($qr);
        if($ex)
        {
          echo"<script>alert('Updation Successfully');
          window.location.href='depotview.php';
          </script>";
        }
        else
        {
            echo"<script>alert('Updation Unsuccessfully');
            window.location.href='depotview.php';
            </script>";
        }
    }
    
   function depotdel($key)
    {
        $id=keytoid("depot","dkey",$key);
        $qry="delete from depot where id='".$id."'";
        $exq=mysql_query($qry);
        echo "<script>alert('Deletion Successful');
        window.location.href='depotview.php';
        </script>";

    }
function dcard($a,$b,$c,$d)
    {
        $key=uniquekey("dcard","ckey");
        $qry="insert into dcard(ckey,cardtype,amount,month,carddetails)values('".$key."','".$a."','".$b."','".$c."','".$d."')";
        //echo $qry;exit;
        $exe=mysql_query($qry);
        if($exe)
        {
            echo"<script>alert('Registartion Successful')</script>";
        }
        else
        {
            echo"<script>alert('Registration Unsuccessful')</script>";
        }
    }
     function dcardview()
    {
        $qr="select * from dcard order by id desc";
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;    
    }
   function dcardedit($key)
    {
        $id=keytoid("dcard","ckey",$key);
        $qry="select * from dcard where id='".$id."'";
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
    function dcardedit1($a,$b,$c,$d,$key)
    {
        $id=keytoid("dcard","ckey",$key);
          $qr="update dcard set cardtype='".$a."', amount='".$b."',month='".$c."',carddetails='".$d."' where id='".$id."'";
        $ex=mysql_query($qr);
        if($ex)
        {
          echo"<script>alert('Updation Successful');
          window.location.href='dcardview.php';
          </script>";
        }
        else
        {
            echo"<script>alert('Updation Unsuccessful');
            window.location.href='dcardview.php';
            </script>";
        }
    }
    
   function dcarddel($key)
    {
        $id=keytoid("dcard","ckey",$key);
        $qry="delete from dcard where id='".$id."'";
        $exq=mysql_query($qry);
        echo "<script>alert('Deletion Successful');
        window.location.href='dcardview.php';
        </script>";

    }
    function institution($a,$b,$c,$d,$e,$f,$g,$h,$i,$j)
    {
        $enc=md5($i);
        $ema=uniquekey("login","lkey");
        $qr="insert into login (lkey,email,password,usertype,status)values('".$ema."','".$h."','".$enc."','4','1')";
        $exq=mysql_query($qr);  
        $id=keytoid("login","lkey",$ema);
        $key=uniquekey("institution","ikey");
        $qry="insert into institution(ikey,institution,name,address,pincode,district,city,contact,loginid)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$id."')";
        $exe=mysql_query($qry);
        //echo $qry;exit;
        if($exe&&$exq)
        {
            echo"<script>alert('Registartion Successful')</script>";
        }
        else
        {
            echo"<script>alert('Registration Unsuccessful')</script>";
        }
    }
     function institutionpro($in)
    {
        $id=keytoid("login","lkey",$in);
        $q1="select * from institution inner join login on login.id=institution.loginid where loginid='".$id."'";

        $e1=mysql_query($q1);
        //echo $q1;$exit;
        $a1=array();
        while($r1=mysql_fetch_array($e1))
        {
            $a1[]=$r1;
        }
     return $a1;
    }
    function institutionup($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$at)
    {
        $id=keytoid("login","lkey",$in);
        $q2="update institution set institution='".$a."',name='".$b."',address='".$c."',pincode='".$d."',district='".$e."',city='".$f."',contact='".$g."' where loginid='".$id."'";
        $e2=mysql_query($q2);
        $q3="update login set email='".$h."' where id='".$id."'";
        $e3=mysql_query($q3);
        // echo $q3;exit;
        if($e3&&$e2)
        {
            echo"<script>alert('Updation Successful')
            window.location.href='institutionup.php';
            </script>";
        }
        else
        {
            echo"<script>alert('Updation Unsuccessful');
            </script>";
        } 
    }

     function inst()
    {
        $q11="select * from institution inner join login on login.id=institution.loginid";
        $e12=mysql_query($q11);
        $a4=array();
        while ($r4=mysql_fetch_array($e12))
         {
            $a4[]=$r4;
        }
        return $a4;
    }
   
 function instapp($key5)
    {
        $id=keytoid("login","lkey",$key5);
        $q9="update login set status='1' where id='".$id."'";
        $e10=mysql_query($q9);
        echo "<script>alert('Data Approved')
        window.location.href='admininstview.php';
        </script>";
    }
    function instrej($key6)
    {
        $id=keytoid("login","lkey",$key6);
        $q10="update login set status='2' where id='".$id."'";
        $e11=mysql_query($q10);
        echo "<script>alert('Data Rejected')
        window.location.href='admininstview.php';
        </script>";
    }
    function fetch_complaintdepot()
    {
        // $id=keytoid("login","lkey",$key);
      $qr1="select * from depot";
        $ex2=mysql_query($qr1);
        $arr1=array();
        while($rr1=mysql_fetch_array($ex2))
        {
            $arr1[]=$rr1;
        }
        return $arr1;        
    }

    function complaint($a,$b,$c,$lkey)
    {
        $id=keytoid("login","lkey",$lkey);
        $key=uniquekey("complaints","okey");
        $date=date('Y-m-d');
        $qry="insert into complaints(okey,depot,subject,complaint,currentdate,loginid,usertype)values('".$key."','".$a."','".$b."','".$c."','".$date."','".$id."','1')";
        // echo $qry;exit;
        $exe=mysql_query($qry);
        if($exe)
        {
            echo"<script>alert('Complaint Added Successful')</script>";
        }
        else
        {
            echo"<script>alert('Complaint Added Unsuccessful')</script>";
        }
    }
    function complaintview($key)
    {
        $id=keytoid("login","lkey",$key);
      $qr="select * from complaints inner join student on student.loginid=complaints.loginid where usertype='1'  order by complaints.id desc";
      // echo $qr;exit;
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
   function complaintedit($key)
    {
        $id=keytoid("complaints","okey",$key);
        $qry="select * from complaints where usertype='1' and id='".$id."'";
        // echo($qry);exit();
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
    function complaintedit1($a,$b,$c,$key)
    {
        $id=keytoid("complaints","okey",$key);
          $qr="update complaints set depot='".$a."', subject='".$b."',complaint='".$c."' where id='".$id."'";
        $ex=mysql_query($qr);
        if($ex)
        {
          echo"<script>alert('Updation Successful');
          window.location.href='complaintview.php';
          </script>";
        }
        else
        {
            echo"<script>alert('Updation Unsuccessful');
            window.location.href='complaintview.php';
            </script>";
        }
    }
    
   function complaintdel($key)
    {
        $id=keytoid("complaints","okey",$key);
        $qry="delete from complaints where id='".$id."'";
        $exq=mysql_query($qry);
        echo "<script>alert('deletion is successful');
        window.location.href='complaintview.php';
        </script>";

    }
function atocomview($key)
    {
     
        $id=keytoid("login","lkey",$key);
      $qr="select * from complaints inner join  ato on ato.depot=complaints.depot  inner join student on student.loginid=complaints.loginid where ato.loginid='".$id."'  order by complaints.id desc";
      //echo $qr;exit();
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
     function fetch_userdepot()
    {
        // $id=keytoid("login","lkey",$key);
      $qr1="select name from depot";
        $ex2=mysql_query($qr1);
        $arr1=array();
        while($rr1=mysql_fetch_array($ex2))
        {
            $arr1[]=$rr1;
        }
        return $arr1;        
    }

function usercomplaint($a,$b,$c,$lkey)
    {
        $id=keytoid("login","lkey",$lkey);
        $key=uniquekey("complaints","okey");
        $date=date('Y-m-d');
        $qry="insert into complaints(okey,depot,subject,complaint,currentdate,loginid,usertype)values('".$key."','".$a."','".$b."','".$c."','".$date."','".$id."','1')";
        // echo $qry;exit;
        $exe=mysql_query($qry);
        if($exe)
        {
            echo"<script>alert('Complaint Added Successfully')</script>";
        }
        else
        {
            echo"<script>alert('Complaint Added Unsuccessful')</script>";
        }
    }
 function usercomview($key)
    {
        $id=keytoid("login","lkey",$key);
      $qr="select * from complaints inner join  public on public.loginid=complaints.loginid where public.loginid='".$id."'  order by complaints.id desc";
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
 function usercomedit($key)
    {
        $id=keytoid("complaints","okey",$key);
        $qry="select * from complaints where id='".$id."'";
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
function usercomedit1($a,$b,$c,$key)
    {
        $id=keytoid("complaints","okey",$key);
          $qr="update complaints set depot='".$a."', subject='".$b."',complaint='".$c."' where id='".$id."'";
        $ex=mysql_query($qr);
        if($ex)
        {
          echo"<script>alert('Updation Successful');
          window.location.href='usercomview.php';
          </script>";
        }
        else
        {
            echo"<script>alert('Updation Unsuccessful');
            window.location.href='usercomview.php';
            </script>";
        }
    }
    
function usercomdel($key)
    {
        $id=keytoid("complaints","okey",$key);
        $qry="delete from complaints where id='".$id."'";
        $exq=mysql_query($qry);
        echo "<script>alert('Deletion Successful');
        window.location.href='usercomview.php';
        </script>";

    }
function atousercomview($key)
    {
         $id=keytoid("login","lkey",$key);
      $qr="select * from complaints inner join  ato on ato.depot=complaints.depot  inner join public on public.loginid=complaints.loginid where ato.loginid='".$id."'  order by complaints.id desc";
     // echo$qr;exit;
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
 function notification($a)
    {
        $key=uniquekey("notification","nkey");
        $date=date('Y-m-d');
          $qry="insert into notification(nkey,notification,currentdate)values('".$key."','".$a."','".$date."')";
        //echo "$qry";exit;
        $exe=mysql_query($qry);
        if($exe)
        {
            echo"<script>alert('Data added Successfully')</script>";
        }
        else
        {
            echo"<script>alert('Data added Unsuccessfully')</script>";
        }
    }
   function notview()
    {

        $qr="select * from notification order by id desc";
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;    
    }
     function notedit($key)
    {
        $id=keytoid("notification","nkey",$key);
        $qry="select * from notification where id='".$id."'";
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
    function notedit1($a,$key)
    {
        $id=keytoid("notification","nkey",$key);
          $qr="update notification set notification='".$a."' where id='".$id."'";
         //echo $qr;exit;
        $ex=mysql_query($qr);
        if($ex)
        {
          echo"<script>alert('Updation Successfully');
          window.location.href='notview.php';
          </script>";
        }
        else
        {
            echo"<script>alert('Updation Unsuccessfully');
            window.location.href='notview.php';
            </script>";
        }
    }
     function notdel($key)
    {
        $id=keytoid("notification","nkey",$key);
        $qry="delete from notification where id='".$id."'";
         // echo  $qry;exit;
        $exq=mysql_query($qry);
         // $arr=array();
if($exq)
{
        echo "<script>alert('Deletion Successful');
        window.location.href='notview.php';
        </script>";
}
else
echo "<script>alert('deletion Unsuccessfull')</script>";
    }
    function atonotview($key)
    {
        // $id=keytoid("login","lkey",$key);
      $qr="select * from notification order by id desc";
        $ex1=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex1))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }

 function fetch_institution($key)
    {
    $id=keytoid("login","lkey",$key);
      $qr="select institution.name from institution inner join student on student.institution=institution.name where student.loginid='".$id."'";
        $ex1=mysql_query($qr);
//echo $qr;exit;
        $arr=array();
        while($rr=mysql_fetch_array($ex1))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
 function fetch_depot()
    {
        // $id=keytoid("login","lkey",$key);
      $qr="select * from depot";
        $ex1=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex1))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }

function ticket($c,$d,$e,$f,$g,$key,$arr)
    {
      // $id1=keytoid("login","lkey",$key1);
         $id=keytoid("login","lkey",$key);
         //$key=uniquekey("concession","tkey");
                $date=date('Y-m-d');

       $a=$g/2.5;
       $b=$a*10;
        $fe=$b-0.02;
         $qry="insert into concession(tkey,depot,source,destination,month,meter,amounts,currentdate,loginid,paymentstatus)values('".$key."','".$c."','".$d."','".$e."','".$f."','".$g."','".$fe."','".$date."','".$id."','1')";
         
        $exe=mysql_query($qry);
        // $qr="select name from institution where loginid='".$id."'";
        // $ex=mysql_query($qr);  $h="uploads/".$lkey;
        // mkdir($h);
        $num=0;
 $xx=count($arr);
        $h="uploads/".$key;

        foreach ($arr as $a)
        {
            $qry1 ="update concession set photo".$num." = '".$a['name']."' where loginid = '".$id."' ";
            $exe1 = mysql_query($qry1);
        //echo $qry1;exit;
            if($exe1)
            {
                move_uploaded_file($a["tmp_name"], $h."/".$a["name"]);
            }
$num++;
                    }

        if($exe)
        {
 echo"<script>alert('Concession will be Processed after Approvation')</script>";
        }
        else
        {
            echo"<script>alert('Data added Unsuccessfully')</script>";
        }
    }
  function atoconview($key)
    {
     
        $id=keytoid("login","lkey",$key);
      $qr="select *,concession.status as cstatus from concession inner join ato on ato.depot=concession.depot inner join student on student.loginid=concession.loginid inner join login on login.id=concession.loginid where ato.loginid='".$id."' order by concession.id desc";
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
 function conapp($key3)
    {
        $id=keytoid("concession","tkey",$key3);
        $q10="update concession set status='1' where id='".$id."'";
       // echo $q10;exit;
        $e11=mysql_query($q10);
        echo "<script>alert('Data Approved')
        window.location.href='atoconview.php';
        </script>";
    }
    function conrej($key4)
    {
        $id=keytoid("concession","tkey",$key4);
        $q10="update concession set status='2' where id='".$id."'";
        $e11=mysql_query($q10);
        echo "<script>alert('Data Rejected')
        window.location.href='atoconview.php';
        </script>";
    }
    function conissue($key)
    {
        $id=keytoid("login","lkey",$key);
        $qry="select * from student inner join concession on concession.loginid=student.loginid where concession.loginid='".$id."' and status='1'";
        //echo $qry;exit;
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $path="uploads/".$rr['tkey']."/".$rr["photo0"];
        $rr['path']=$path;
            $arr[]=$rr;
        }
        return $arr;
    }
     function ticketback($key)
    {
        $id=keytoid("login","lkey",$key);
        $qry="select * from student inner join concession on concession.loginid=student.loginid where concession.loginid='".$id."' and status='1'";
        //echo $qry;exit;
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $path="uploads/".$rr['tkey']."/".$rr["photo0"];
        $rr['path']=$path;
            $arr[]=$rr;
        }
        return $arr;
    }
   function dcardpubpay()
    {
        $q16="select * from dcard";
        $e15=mysql_query($q16);
        $a7=array();
        while ($r6=mysql_fetch_array($e15))
         {
            $a7[]=$r6;
        }
        return $a7;
    } 
    function fetch_dcarddepot()
    {
        // $id=keytoid("login","lkey",$key);
      $qr1="select * from depot";
        $ex2=mysql_query($qr1);
        $arr1=array();
        while($rr1=mysql_fetch_array($ex2))
        {
            $arr1[]=$rr1;
        }
        return $arr1;        
    }
 function dcardpubapply($a,$b,$c,$d,$e,$lkey,$key,$amount)
    {//echo $amount;exit;
        $id=keytoid("login","lkey",$lkey);
        $id1=keytoid("dcard","ckey",$key);
        $key=uniquekey("dcardapply","vkey");
       // $qr="select * from dcard inner join on ";
        $date=date('Y-m-d');
        $df=$e*$amount;
        $qry="insert into dcardapply(vkey,depot,source,destination,months,kilometer,amount,currentdate,loginid,dcardid)values('".$key."','".$a."','".$b."','".$c."','".$d."','".$e."','".$df."','".$date."','".$id."','".$id1."')";
       //echo "$qry";exit;
       
        $exe=mysql_query($qry);

        if($exe)
        {
           echo"<script>alert('D-Card will be Approved after confirmation');
            window.location.href='dcardpubpay.php';</script>";
               }
        else
        {
            echo"<script>alert('Data added Unsuccessfully')</script>;
            window.location.href='dcardpubapply.php';</script>";
            
        }
    }
function payment($a,$b,$c,$d,$k,$key,$amount)
     {
  
        $qry1="select id,totalamount from bank where cardno='".$b."'AND cvv='".$c."'";
        $e1=mysql_query($qry1);
        $arr=array();
        while($rr=mysql_fetch_array($e1))
        {
            $arr=$rr['id'];
            $ar1=$rr['totalamount'];
        }
        // echo $arr;exit();
        // echo $fe;exit();

        if($arr!=null)
        {
           
            if($ar1>$amount)
            {
            $id=keytoid("login","lkey",$k);
            $f=uniquekey("payment","pakey");
            $date=date('Y-m-d');
            $qry="insert into payment(pakey,cardno,nameoncard,cvv,expirydate,amount,currentdate,loginid)values('".$f."','".$b."','".$a."','".$c."','".$d."','".$amount."','".$date."','".$id."')";
          //  echo $qry;exit;
            $ar2=$ar1-$amount;
            
            $qry2="update bank set totalamount='".$ar2."'where id='".$arr."'";
            $exq=mysql_query($qry2);
            $exe=mysql_query($qry);
            if($exe&&$exq)
            {
                echo"<script>alert('Payment is Successful');
                window.location.href='ticketproof.php?ke=$key';
          </script>";
            }
            else
            {
                echo "<script>alert('Payment is Unsuccessful');
            window.location.href='ticketproof.php';
                </script>";
            }
        }
        else
        {
            echo"<script>alert('Insufficent Balance')</script>";
        }
     }
}
function dcardpayment($a,$b,$c,$d,$k,$amount,$key)
     {
  
        $qry1="select id,totalamount from bank where cardno='".$b."'AND cvv='".$c."'";
        $e1=mysql_query($qry1);
        $arr=array();
        while($rr=mysql_fetch_array($e1))
        {
            $arr=$rr['id'];
            $ar1=$rr['totalamount'];
        }
        // echo $arr;exit();
        // echo $fe;exit();

        if($arr!=null)
        {
           
            if($ar1>$amount)
            {
            $id=keytoid("login","lkey",$k);
            $f=uniquekey("payment","pakey");
            $date=date('Y-m-d');
            $qry="insert into payment(pakey,cardno,nameoncard,cvv,expirydate,amount,currentdate,loginid)values('".$f."','".$b."','".$a."','".$c."','".$d."','".$amount."','".$date."','".$id."')";
          //  echo $qry;exit;
            $ar2=$ar1-$amount;
            
            $qry2="update bank set totalamount='".$ar2."'where id='".$arr."'";
            $exq=mysql_query($qry2);
            $exe=mysql_query($qry);
            if($exe&&$exq)
            {
                echo"<script>alert('Payment is Successful');
                window.location.href='dcardproof.php?ke=$key';</script>";
            }
            else
            {
                echo "<script>alert('Payment is Unsuccessful');
                window.location.href='dcardproof.php';</script>";
            }
        }
        else
        {
            echo"<script>alert('Insufficent Balance')</script>";
        }
     
 }
}
 function atodcardview($key)
    {
     
        $id=keytoid("login","lkey",$key);
      $qr="select *, dcardstatus from dcardapply inner join ato on ato.depot=dcardapply.depot inner join public on public.loginid=dcardapply.loginid inner join dcard on dcard.id=dcardapply.dcardid inner join login on login.id=dcardapply.loginid where ato.loginid='".$id."' order by dcardapply.id desc"; 
      //echo $qr;exit;
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
 
 function dcardapp($key3)
    {
        $id=keytoid("dcardapply","vkey",$key3);
        $q10="update dcardapply set dcardstatus='1' where id='".$id."'";
       // echo $q10;exit;
        $e11=mysql_query($q10);
        echo "<script>alert('Data Approved')
        window.location.href='atodcardview.php';
        </script>";
    }
    function dcardrej($key4)
    {
        $id=keytoid("dcardapply","vkey",$key4);
        $q10="update dcardapply set dcardstatus='2' where id='".$id."'";
        //echo $q10;exit;
        $e11=mysql_query($q10);
        echo "<script>alert('Data Rejected')
        window.location.href='atodcardview.php';
        </script>";
    }
    function dcardissue($key)
    {
        $id=keytoid("dcardapply","vkey",$key);
        $qry="select * from public inner join dcardapply on dcardapply.loginid=public.loginid inner join dcard on dcard.id=dcardapply.dcardid where dcardapply.id='".$id."' and dcardstatus='1'";
        // echo $qry;exit;
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
     function dcardpubview($key)
    {
        $id=keytoid("login","lkey",$key);
      $qr="select * from dcardapply inner join public on public.loginid=dcardapply.loginid where public.loginid='".$id."'  order by dcardapply.id desc";
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
 function dcardpubedit($key)
    {
        $id=keytoid("dcardapply","vkey",$key);
        $qry="select * from dcardapply where id='".$id."'";
        // echo $qry;exit;
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
    function fetch_ticketdepot($key)
    {

       // $id=keytoid("depot","dkey",$key);
        $qry="select name from depot" ;
        // echo $qry;exit;
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
 
    function dcardpubedit1($a,$b,$c,$d,$e,$key)
    {
         $id=keytoid("dcardapply","vkey",$key);
        // $id=keytoid("login","lkey",$key);
               // echo $id;exit;
          $qr="update dcardapply set depot='".$a."', source='".$b."',
          destination='".$c."',months='".$d."',
          kilometer='".$e."' where id='".$id."'";
          // echo $qr;exit;
        $ex=mysql_query($qr);
        if($ex)
        {
          echo"<script>alert('Updation Successful');
          window.location.href='dcardpubview.php';
          </script>";
        }
        else
        {
            echo"<script>alert('Updation Unsuccessful');
            window.location.href='dcardpubview.php';
            </script>";
        }
    }
   
   // function dcardpubdel($key)
   //  {
   //      $id=keytoid("dcardapply","vkey",$key);
   //      $qry="delete from dcardapply where id='".$id."'";
   //      $exq=mysql_query($qry);
   //      echo "<script>alert('Deletion is Successful');
   //      window.location.href='dcardpubview.php';
   //      </script>";

   //  }   
    function dcardpubcancel($key)
    {
        $id=keytoid("dcardapply","vkey",$key);
        $qry="delete from dcardapply where id='".$id."'";
        $exq=mysql_query($qry);
        echo "<script>alert('Deletion is Successful');
        window.location.href='dcardpubview.php';
        </script>";

    }  
     function ticketview($key)
    {
        $id=keytoid("login","lkey",$key);
      $qr="select * from concession inner join student on student.loginid=concession.loginid where student.loginid='".$id."'  order by concession.id desc";
     // echo $qr;exit;
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
    function fetch_ticketinstitution($key)
    {
        // $id=keytoid("login","lkey",$key);
      $qr="select name from institution";
        $ex1=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex1))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
function fetch_concessiondepot($key)
    {
        // $id=keytoid("login","lkey",$key);
      $qr1="select name from depot";
        $ex2=mysql_query($qr1);
        $arr1=array();
        while($rr1=mysql_fetch_array($ex2))
        {
            $arr1[]=$rr1;
        }
        return $arr1;        
    }
 function ticketedit($key)
    {
        $id=keytoid("concession","tkey",$key);
        $qry="select * from concession where id='".$id."'";
        //echo $qry;exit;
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
    function ticketedit1($b,$c,$d,$e,$f,$g,$key)
    {
         $id=keytoid("concession","tkey",$key);
        // $id=keytoid("login","lkey",$key);
               // echo $id;exit;
          $qr="update concession set instname='".$b."', depot='".$c."', source='".$d."',destination='".$e."',month='".$f."',meter='".$g."' where id='".$id."'";
         // echo $qr;exit;
         // $h="uploads/".$key;
         $ex=mysql_query($qr);
        if($ex)
        {
           // mkdir($h);
           //  move_uploaded_file($file["tmp_name"],$h."/".$file["name"]);
        
          echo"<script>alert('Updation Successful');
          window.location.href='ticketview.php';
          </script>";
        }
        else
        {
            echo"<script>alert('Updation Unsuccessful');
            window.location.href='ticketview.php';
            </script>";
        }
    }
    function photo($file=null,$key)
    {
         $id=keytoid("concession","tkey",$key);
        // $id=keytoid("login","lkey",$key);
               // echo $id;exit;
          $qr="update concession set photo='".$file['name']."' where id='".$id."'";
          $h="uploads/".$key;
         $ex=mysql_query($qr);
        if($ex)
        {
           mkdir($h);
            move_uploaded_file($file["tmp_name"],$h."/".$file["name"]);
        
          echo"<script>alert('Updation Successful');
          window.location.href='ticketview.php';
          </script>";
        }
        else
        {
            echo"<script>alert('Updation Unsuccessful');
            window.location.href='ticketview.php';
            </script>";
        }
    }

    //  function ticketdel($key)
    // {
    //     $id=keytoid("concession","tkey",$key);
    //     $qry="delete from concession where id='".$id."'";
    //     $exq=mysql_query($qry);
    //     echo "<script>alert('Deletion is Successful');
    //     window.location.href='ticketview.php';
    //     </script>";

    // }   
    function ticketcancel($key)
    {
        $id=keytoid("concession","tkey",$key);
        $qry="delete from concession where id='".$id."'";
        $exq=mysql_query($qry);
        echo "<script>alert('Deletion is Successful');
        window.location.href='ticketview.php';
        </script>";

    }  
// function dcardpubstatus($key1)
//     {
//         $id=keytoid("login","lkey",$key1);
//         $qry="select * from dcardapply inner join public on public.id=dcardapply.dcardid where dcardapply.loginid='".$id."' order by dcardapply.id desc";
//         $ex=mysql_query($qry);
//         $arr=array();
//         while($rr=mysql_fetch_array($ex))
//         {
//             $arr[]=$rr;
//         }
//         return $arr;    
//     }
 function jobpost($a,$b,$c,$d,$e,$f)
    {
          //  $id=keytoid("login","lkey",$key);
            $t=uniquekey("job","jkey");
            $date=date('Y-m-d');
            $qry="insert into job(jkey,job,details,depot,salary,qdetails,apply,currentdate)values('".$t."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$date."')";
            $exe=mysql_query($qry);
            if($exe)
            {
                echo"<script>alert('Job vaccancy successful')</script>";
            }
            else
            {
                echo "<script>alert('Job vaccancy unsuccessful')</script>";
            }
        }
        function jobview()
        {
         $qr="select * from job order by id desc";
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;    
    }
    
     function jobedit($key)
    {
        $id=keytoid("job","jkey",$key);
        $qry="select * from job where id='".$id."'";
        //echo $qry;exit;
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
    function jobedit1($a,$b,$c,$d,$e,$f,$key)
    {
        $id=keytoid("job","jkey",$key);
          $qr="update job set job='".$a."',details='".$b."',depot='".$c."',salary='".$d."',qdetails='".$e."',apply='".$f."'where id='".$id."'";
         // echo $qr;exit;
        $ex=mysql_query($qr);
        if($ex)
        {
          echo"<script>alert('updated is successful');
          window.location.href='jvaccancyview.php';
          </script>";
        }
        else
        {
            echo"<script>alert('updated is unsuccessful');
            window.location.href='jvaccancyview.php';
            </script>";
        }
    }
    function jobdel($key)
    {
        $id=keytoid("job","jkey",$key);
        $qry="delete from job where id='".$id."'";
        $exq=mysql_query($qry);
        echo "<script>alert('deletion is successful');
        window.location.href='jvaccancyview.php';
        </script>";

    }
    function jobpubview($key)
    {
        $id=keytoid("login","lkey",$key);
        $qry="select * from job order by id desc";
        $ex=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;    
    }
    function certify($file=null,$key,$key1)
    {
        
         $id=keytoid("login","lkey",$key);
         $id1=keytoid("job","jkey",$key1);
        $k=uniquekey("jobapply","jakey");
        $date=date('Y-m-d');
        $qry="insert into jobapply(jakey,jobid,certificate,currentdate,loginid)values('".$k."','".$id1."','".$file['name']."','".$date."','".$id."')";
        $exe=mysql_query($qry);
        $d='uploads/'.$k;
        if($exe)
        {
            mkdir($d);
            move_uploaded_file($file["tmp_name"],$d."/".$file["name"]);
            echo"<script>alert(' successful');
           window.location.href='certificate.php?key=$key1';
           </script>";
        }
    
    else
    {
        echo"<script>alert(' unsuccessful');
        window.location.href='certificate.php?key=$key1';
        </script>";
    }
}
   function jadview($key)
   {
    $qr="select * from jobapply inner join job on job.id=jobapply.jobid inner join public on public.loginid=jobapply.loginid order by jobapply.id desc";
    //echo $qr;exit;
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;
   }
    function adminapp($key1)
    {
        $id=keytoid("jobapply","jakey",$key1);
        $q="update jobapply set jstatus='1' where id='".$id."'";
        // echo $q;exit;
        $exe=mysql_query($q);
        echo "<script>alert('Data Approved')
        window.location.href='jadminview.php';
        </script>";
    }
    function adminrej($key2)
    {
        $id=keytoid("jobapply","jakey",$key2);
        $qr="update jobapply set jstatus='2' where id='".$id."'";
        $e11=mysql_query($qr);
        echo "<script>alert('Data Rejected')
        window.location.href='jadminview.php';
        </script>";
    }
    function jobview1($key1)
    {
        $id=keytoid("login","lkey",$key1);
        $qry="select * from jobapply inner join job on job.id=jobapply.jobid where jobapply.loginid='".$id."' order by jobapply.id desc";
        $ex=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;    
    }
    function cancel($key1)
    {
        $id=keytoid("jobapply","jakey",$key1);
        $qr="delete from jobapply where id='".$id."'";
      //  echo $qr;exit;
        $exq=mysql_query($qr);
        echo "<script>alert('deletion is successful');
        window.location.href='jobpubview.php';
        </script>";

    }
    function request($a,$b,$k)
    {
            $id=keytoid("login","lkey",$k);
            $t=uniquekey("request","rkey");
            $date=date('Y-m-d');
            $qr="select id from request where studloginid='".$id."'";
            $ex=mysql_query($qr);
            $id1=null;
            while($rr=mysql_fetch_array($ex))
            {
                $id1=$rr['id'];
            }
            if($id1==null)
            {
            $qry="insert into request(rkey,depotname,request,studloginid,currentdate)values('".$t."','".$a."','".$b."','".$id."','".$date."')";
           // echo $qry;exit;
            $exe=mysql_query($qry);
            if($exe)
            {
                echo"<script>alert('Request successful')</script>";
            }
            else
            {
                echo "<script>alert('Request unsuccessful')</script>";
            }
        }
        else
        {
            echo"<script>alert('Already Requested')</script>";
        }
        }
    function rclgview($key1)
    {
        $id=keytoid("login","lkey",$key1);
        $qry="select  student.name,student.address,student.gender,student.dateofbirth,student.institution,student.course,student.semester,request.depotname,request.request,request.currentdate,request.rkey from student inner join request on request.studloginid=student.loginid order by student.id='desc'";
        $ex=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;    
    }
     function confirm11($file=null,$key,$key1)
    {
        $id1=keytoid("request","rkey",$key1);
         $id=keytoid("login","lkey",$key);
        //$k=uniquekey("request","rkey");
        $date=date('Y-m-d');
        $qry="update request set confirmltr='".$file['name']."', loginid='".$id."' where id='".$id1."' ";
        // echo $qry;exit;
        $exe=mysql_query($qry);
        $d='uploads/'.$key1;
        if($exe)
        {
            mkdir($d);
            move_uploaded_file($file["tmp_name"],$d."/".$file["name"]);
            echo"<script>alert(' successful');
           window.location.href='confirm.php?key=$key1';
           </script>";
        }
    
    else
    {
        echo"<script>alert(' unsuccessful');
        window.location.href='confirm.php?key=$key1';
        </script>";
    }
    }
    function certdown($key)
{
    $id=keytoid("login","lkey",$key);
    $qr4="select * from certificate inner join student on student.loginid=certificate.studentloginld where studentloginld='".$id."'";
        $ex4=mysql_query($qr4);
        $a1=array();
    while($r1=mysql_fetch_array($ex4))
    {
    
        $path="uploads/".$r1['cfkey']."/".$r1["certificate"];
        $r1['path']=$path;
        $a1[]=$r1;
    }
    return $a1;
}
 function compstud($a,$b,$key)
    {
        $id=keytoid("login","lkey",$key);
        $key=uniquekey("complaints","okey");
        $date=date('Y-m-d');
        $qry="insert into complaints(okey,subject,complaint,currentdate,loginid,usertype)values('".$key."','".$a."','".$b."','".$date."','".$id."','0')";
    // echo $qry;exit;
        $exe=mysql_query($qry);
        if($exe)
        {
            echo"<script>alert('complaint Successful')</script>";
        }
        else
        {
            echo"<script>alert('complaint Unsuccessful')</script>";
        }
    }
     function comview()
    {
        $qr="select * from student inner join complaints on complaints.loginid=student.loginid where complaints.usertype='0'";
         // echo $qr;exit;

        $ex=mysql_query($qr);
        $ar=array();
        while ($rr=mysql_fetch_array($ex))
         {
            $ar[]=$rr;
        }
        return $ar;
    }
    function view2($key)
    {
        $id=keytoid("login","lkey",$key);
      $qr="select * from complaints inner join student on student.loginid=complaints.loginid where usertype='0' order by complaints.id desc";
      // echo $qr;exit;
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
    function edit($key)
    {
        $id=keytoid("complaints","okey",$key);
        $qry="select * from complaints where usertype='0'";
        // echo $qry;exit();
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;
    }
    function edit1($b,$c,$key)
    {
        $id=keytoid("complaints","okey",$key);
          $qr="update complaints set subject='".$b."',complaint='".$c."' where id='".$id."'";
        $ex=mysql_query($qr);
        if($ex)
        {
          echo"<script>alert('Updation Successful');
          window.location.href='comview.php';
          </script>";
        }
        else
        {
            echo"<script>alert('Updation Unsuccessful');
            window.location.href='comview.php';
            </script>";
        }
    }
    function del12($key)
    {
        $id=keytoid("complaints","okey",$key);
        $qry="delete from complaints where usertype='0'";
        $exq=mysql_query($qry);
        echo "<script>alert('deletion is successful');
        window.location.href='comview.php';
        </script>";

    }
 function interview($file=null,$key)
    {
        
        // $id=keytoid("login","lkey",$key);
         $id=keytoid("jobapply","jakey",$key);
         //$k=uniquekey("jobapply","jakey");
        // echo $id;exit;
       // $date=date('Y-m-d');
        $qr="update jobapply set interview='".$file['name']."' where id='".$id."'";
        // echo $qr;exit;
        $exe=mysql_query($qr);
        $d='uploads/'.$k;
        if($exe)
        {
            mkdir($d);
            move_uploaded_file($file["tmp_name"],$d."/".$file["name"]);
            echo"<script>alert(' successful');
           window.location.href='jinterview.php';
           </script>";
        }
    
    else
    {
        echo"<script>alert(' unsuccessful');
        window.location.href='jinterview.php';
        </script>";
    }
}
function getphotodetails($key)
{
    $id=keytoid("concession","tkey",$key);
    $qry="select * from concession where id='".$id."'";
        // echo $qry;exit();
        $exq=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($exq))
        {
            $arr[]=$rr;
        }
        return $arr;

}
 function reqstdview($key)
    {
     
        $id=keytoid("login","lkey",$key);
      $qr="select * from request inner join student on student.loginid=request.studloginid where student.loginid='".$id."'  order by request.id desc";
     // echo $qr;exit;
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
 function reqremove($key)
    {
        $id=keytoid("request","rkey",$key);
        $qry="delete from request where id='".$id."'";
        $exq=mysql_query($qry);
        echo "<script>alert('Deletion is Successful');
        window.location.href='reqstdview.php';
        </script>";

    }   
 function logout($key)
{
$id=keytoid("login","lkey",$key);
$qry="update login set onlinestatus='0' where id='".$id."'";
$exe=mysql_query($qry); 
}
  function studreply($a,$key)
  {
    $id=keytoid("complaints","okey",$key);
    $qry="update complaints set reply='".$a."' where usertype='1' AND id='".$id."'";
  //  echo $qry;exit;
    $exe=mysql_query($qry);
        echo "<script>alert('Request updated')
        window.location.href='atocomview.php';
        </script>";
    }
function userreply($a,$key)
  {
    $id=keytoid("complaints","okey",$key);
    $qry="update complaints set reply='".$a."' where usertype='1' AND id='".$id."'";
  //  echo $qry;exit;
    $exe=mysql_query($qry);
        echo "<script>alert('Request updated')
        window.location.href='atousercomview.php';
        </script>";
    }
 function adminstudreply($a,$key)
  {
    $id=keytoid("complaints","okey",$key);
    $qry="update complaints set reply='".$a."' where usertype='0' AND id='".$id."'";
  //  echo $qry;exit;
    $exe=mysql_query($qry);
        echo "<script>alert('Request updated')
        window.location.href='compadminview.php';
        </script>";
    }

  
  function repnot($key)
  {
    $id=keytoid("login","lkey",$key);
    $qr="select id from request where studloginid='".$id."' and confirmltr !=null";
        $ex=mysql_query($qr);
        $arr=array();
        while($rr=mysql_fetch_array($ex))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }  
function ticketproof($key)
{
   $id=keytoid("login","lkey",$key);
        $q1="select  student.name,student.contactno,concession.depot,concession.amounts,concession.currentdate from student inner join concession on concession.loginid=student.loginid where student.loginid='".$id."'";
        // echo$q1;exit();
        $e1=mysql_query($q1);
         $arr=array();
        while($rr=mysql_fetch_array($e1))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }
    function dcardproof($key)
{
   $id=keytoid("dcardapply","vkey",$key);
        $q1="select  public.fullname,public.contactno,dcardapply.depot,dcardapply.amount,dcardapply.currentdate,dcard.cardtype from public inner join dcardapply on dcardapply.loginid=public.loginid inner join dcard on dcard.id=dcardapply.dcardid where dcardapply.id='".$id."'";
        $e1=mysql_query($q1);
         $arr=array();
        while($rr=mysql_fetch_array($e1))
        {
            $arr[]=$rr;
        }
        return $arr;        
    }

     function adminreply($key)
     {
        $id=keytoid("login","lkey",$key);
       
        $qry="select * from complaints where loginid='".$id."' and usertype='1' order by id desc";
        // echo $qry;
        $exe=mysql_query($qry);
        while($rr=mysql_fetch_array($exe))
        {
            $arr[]=$rr;
        }
        return $arr;
   }
   // function fetch_depot($lkey)
   //  {
   //  $id=keytoid("login","lkey",$lkey);
   //    $qr1="select depot from complaints usertype='0'";
   //      $ex2=mysql_query($qr1);
   //      $arr1=array();
   //      while($rr1=mysql_fetch_array($ex2))
   //      {
   //          $arr1[]=$rr1;
   //      }
   //      return $arr1;        
   //  }

    function atoreply($key)
     {
        $id=keytoid("login","lkey",$key);
       
        $qry="select * from complaints where loginid='".$id."' and usertype='0' order by id desc";
        // echo $qry;
        $exe=mysql_query($qry);
        while($rr=mysql_fetch_array($exe))
        {
            $arr[]=$rr;
        }
        return $arr;
   }
    function useradminreply($key)
     {
        $id=keytoid("login","lkey",$key);
       
        $qry="select * from complaints where loginid='".$id."' and usertype='1' order by id desc";
        // echo $qry;
        $exe=mysql_query($qry);
        while($rr=mysql_fetch_array($exe))
        {
            $arr[]=$rr;
        }
        return $arr;
   }
   function upload($arr,$key,$key1)
    {
       // print_r($arr);exit;
        $id1=keytoid("login","lkey",$key1);
         $id=keytoid("login","lkey",$key);
        //$k=uniquekey("request","rkey");
        //$date=date('Y-m-d');
        $num=1; 
        $xx=count($arr);
        $d="uploads/".$key1;

        foreach($arr as $aa)
        {
         $query="update concession set file".$num."='".$aa['name']."' where loginid='".$id1."'";
        //  echo $query;exit;
         $res=mysql_query($query);
    
            if($res)
              {
                  move_uploaded_file($aa["tmp_name"],$d."/".$aa["name"]);
              }
                $num++;
      }
            echo"<script>alert(' Concession Uploaded');
           window.location.href='ticketupload.php?key=$key1';
           </script>";
        }
     function cardupload($file=null,$key,$key1)
    {
        $id1=keytoid("dcardapply","vkey",$key1);
         $id=keytoid("login","lkey",$key);
        $qry="update dcardapply set uploadcard='".$file['name']."' where id='".$id1."' ";
        //echo $qry;exit;
        $exe=mysql_query($qry);
        $d='uploads/'.$key1;
        if($exe)
        {
           mkdir($d);
            move_uploaded_file($file["tmp_name"],$d."/".$file["name"]);
            echo"<script>alert(' Successfully Uploaded');
           window.location.href='atodcardview.php?key=$key1';
           </script>";
        }
    
    else
    {
        echo"<script>alert(' Unsuccessful');
        window.location.href='atodcardview.php?key=$key1';
        </script>";
    }
    }
   function atocount()
     {
        $qry="select count(id) from ato ";
        // echo $qry;
        $exe=mysql_query($qry);
        $v= null;
        while($rr=mysql_fetch_array($exe))
        {
            $v=$rr['count(id)'];
        }
        return $v;
   }
function stdcount()
     {
        $qry="select count(id) from student ";
        // echo $qry;
        $exe=mysql_query($qry);
        $v= null;
        while($rr=mysql_fetch_array($exe))
        {
            $v=$rr['count(id)'];
        }
        return $v;
   }
function pubcount()
     {
        $qry="select count(id) from public ";
        // echo $qry;
        $exe=mysql_query($qry);
        $v= null;
        while($rr=mysql_fetch_array($exe))
        {
            $v=$rr['count(id)'];
        }
        return $v;
   }
function inscount()
     {
        $qry="select count(id) from institution ";
        // echo $qry;
        $exe=mysql_query($qry);
        $v= null;
        while($rr=mysql_fetch_array($exe))
        {
            $v=$rr['count(id)'];
        }
        return $v;
   }

} 
?>