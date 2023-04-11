<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$keys=$_COOKIE['lkey'];
$key=$_GET['key'];
$div=$obj->dcardissue($key);
$smartyObj->assign("view",$div);
$title = isset($_POST['title']) ? htmlentities($_POST['title']) : "INTERNET ID CARD";
if(!empty($_POST['submit']))
 {
$id = rand('1000000','9999999');
$a=trim($_POST['name']);
$b=trim($_POST['addr']);
$c=trim($_POST['pincode']);
$d=trim($_POST['district']);
$e=trim($_POST['city']);
$f=trim($_POST['contact_no']);
$g=trim($_POST['cardtype']);
$h=trim($_POST['amount']);
$i=trim($_POST['source']);
$j=trim($_POST['dest']);
$k=trim($_POST['month']);
$depo=trim($_POST['depo']);
$issue_date= date('Y-m-d');
$save = 'newcard/images/'.str_replace(" ","_",$a.$id).'.jpg';
$_SESSION['card']=$save; 
if($g=='Bronze')
{
$bgpic = imagecreatefrompng("newcard/bronze1.png");
$textcolor = imagecolorallocate($bgpic,255,255,255);
$infcolor = imagecolorallocate($bgpic,0,0,0);
$stscolor = imagecolorallocate($bgpic,0x00,0x55,0x00);
$ttscolor = imagecolorallocate($bgpic,255,0,0);
$ifscolor = imagecolorallocate($bgpic,0,1,255);
$font="newcard/fonts/verdana.ttf";
$f2="newcard/fonts/sm.ttf";
$f3="newcard/fonts/sign.ttf";
$f4="newcard/fonts/avro.ttf";
imagettftext($bgpic,85, 0,250,500,$infcolor,$f4,$id);
imagettftext($bgpic,85, 0,600,650,$infcolor,$f4,$a);
imagettftext($bgpic,85, 0,600,800,$infcolor,$f4,$depo);
imagettftext($bgpic,85, 0,800,1000,$infcolor,$f4,$issue_date);
imagettftext($bgpic,85, 0,680,1200,$infcolor,$f4,$k);

if(trim($photo!=""))
{
  $imgi = getimagesize($photo);
 if($imgi[0]>0)
  {
      if($imgi[2]==1)
      {
        $av = imagecreatefromgif($photo);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }else if($imgi[2]==2)
      {
        $av = imagecreatefromjpeg($photo);
        imagecopyresized($bgpic, $av,105,160,0,0,175,190,$imgi[0], $imgi[1]);
      }else if($imgi[2]==3)
      {
        $av = imagecreatefrompng($photo);
        imagecopyresized($bgpic, $av,20,100,0,0,150,150,$imgi[0], $imgi[1]);
      }
   }
}
imagepng($bgpic,$save);
imagedestroy($bgpic);
header("Location: ".$save); 
}

elseif($g=='Silver')
{
 // echo $a;exit;
  $bgpic = imagecreatefrompng("newcard/Silver.png");
 $textcolor = imagecolorallocate($bgpic,255,255,255);
$infcolor = imagecolorallocate($bgpic,0,0,0);
$stscolor = imagecolorallocate($bgpic,0x00,0x55,0x00);
$ttscolor = imagecolorallocate($bgpic,255,0,0);
$ifscolor = imagecolorallocate($bgpic,0,1,255);
$font="newcard/fonts/verdana.ttf";
$f2="newcard/fonts/sm.ttf";
$f3="newcard/fonts/sign.ttf";
$f4="newcard/fonts/avro.ttf";
imagettftext($bgpic,85, 0,250,500,$infcolor,$f4,$id);
imagettftext($bgpic,85, 0,600,650,$infcolor,$f4,$a);
imagettftext($bgpic,85, 0,600,800,$infcolor,$f4,$depo);
imagettftext($bgpic,85, 0,800,1000,$infcolor,$f4,$issue_date);
imagettftext($bgpic,85, 0,680,1200,$infcolor,$f4,$k);
if(trim($photo!=""))
{
  $imgi = getimagesize($photo);
 if($imgi[0]>0)
  {
      if($imgi[2]==1)
      {
        $av = imagecreatefromgif($photo);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }else if($imgi[2]==2)
      {
        $av = imagecreatefromjpeg($photo);
        imagecopyresized($bgpic, $av,105,160,0,0,175,190,$imgi[0], $imgi[1]);
      }else if($imgi[2]==3)
      {
        $av = imagecreatefrompng($photo);
        imagecopyresized($bgpic, $av,20,100,0,0,150,150,$imgi[0], $imgi[1]);
      }
   }
}
imagepng($bgpic,$save);
imagedestroy($bgpic);
header("Location: ".$save); 
}

elseif($g=='Gold')
{
  $bgpic = imagecreatefrompng("newcard/Gold.png");
$textcolor = imagecolorallocate($bgpic,255,255,255);
$infcolor = imagecolorallocate($bgpic,0,0,0);
$stscolor = imagecolorallocate($bgpic,0x00,0x55,0x00);
$ttscolor = imagecolorallocate($bgpic,255,0,0);
$ifscolor = imagecolorallocate($bgpic,0,1,255);
$font="newcard/fonts/verdana.ttf";
$f2="newcard/fonts/sm.ttf";
$f3="newcard/fonts/sign.ttf";
$f4="newcard/fonts/avro.ttf";
imagettftext($bgpic,85, 0,250,500,$infcolor,$f4,$id);
imagettftext($bgpic,85, 0,600,650,$infcolor,$f4,$a);
imagettftext($bgpic,85, 0,600,800,$infcolor,$f4,$depo);
imagettftext($bgpic,85, 0,800,1000,$infcolor,$f4,$issue_date);
imagettftext($bgpic,85, 0,680,1200,$infcolor,$f4,$k);
if(trim($photo!=""))
{
  $imgi = getimagesize($photo);
 if($imgi[0]>0)
  {
      if($imgi[2]==1)
      {
        $av = imagecreatefromgif($photo);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }else if($imgi[2]==2)
      {
        $av = imagecreatefromjpeg($photo);
        imagecopyresized($bgpic, $av,105,160,0,0,175,190,$imgi[0], $imgi[1]);
      }else if($imgi[2]==3)
      {
        $av = imagecreatefrompng($photo);
        imagecopyresized($bgpic, $av,20,100,0,0,150,150,$imgi[0], $imgi[1]);
      }
   }
}
imagepng($bgpic,$save);
imagedestroy($bgpic);
header("Location: ".$save); 
}

else
{
    $bgpic = imagecreatefrompng("newcard/Platinum.png");
$textcolor = imagecolorallocate($bgpic,255,255,255);
$infcolor = imagecolorallocate($bgpic,0,0,0);
$stscolor = imagecolorallocate($bgpic,0x00,0x55,0x00);
$ttscolor = imagecolorallocate($bgpic,255,0,0);
$ifscolor = imagecolorallocate($bgpic,0,1,255);
$font="newcard/fonts/verdana.ttf";
$f2="newcard/fonts/sm.ttf";
$f3="newcard/fonts/sign.ttf";
$f4="newcard/fonts/avro.ttf";
imagettftext($bgpic,85, 0,250,500,$infcolor,$f4,$id);
imagettftext($bgpic,85, 0,600,650,$infcolor,$f4,$a);
imagettftext($bgpic,85, 0,600,800,$infcolor,$f4,$depo);
imagettftext($bgpic,85, 0,800,1000,$infcolor,$f4,$issue_date);
imagettftext($bgpic,85, 0,680,1200,$infcolor,$f4,$k);
if(trim($photo!=""))
{
  $imgi = getimagesize($photo);
 if($imgi[0]>0)
  {
      if($imgi[2]==1)
      {
        $av = imagecreatefromgif($photo);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }else if($imgi[2]==2)
      {
        $av = imagecreatefromjpeg($photo);
        imagecopyresized($bgpic, $av,105,160,0,0,175,190,$imgi[0], $imgi[1]);
      }else if($imgi[2]==3)
      {
        $av = imagecreatefrompng($photo);
        imagecopyresized($bgpic, $av,20,100,0,0,150,150,$imgi[0], $imgi[1]);
      }
   }
}
imagepng($bgpic,$save);
imagedestroy($bgpic);
header("Location: ".$save); 
}
  
// $textcolor = imagecolorallocate($bgpic,255,255,255);
// $infcolor = imagecolorallocate($bgpic,0,0,0);
// $stscolor = imagecolorallocate($bgpic,0x00,0x55,0x00);
// $ttscolor = imagecolorallocate($bgpic,255,0,0);
// $ifscolor = imagecolorallocate($bgpic,0,1,255);
// $font="newcard/fonts/verdana.ttf";
// $f2="newcard/fonts/sm.ttf";
// $f3="newcard/fonts/sign.ttf";
// $f4="newcard/fonts/avro.ttf";
// imagettftext($bgpic,15, 0,62,125,$infcolor,$f4,$id);
// imagettftext($bgpic,15, 0,150,425,$infcolor,$f4,$name);
// imagettftext($bgpic,15, 0,150,513,$infcolor,$f4,$addr);
// imagettftext($bgpic,15, 0,560,38,$infcolor,$f4,$pincode);
// imagettftext($bgpic,15, 0,565,80,$infcolor,$f4,$district);
// imagettftext($bgpic,15, 0,540,125,$infcolor,$f4,$city);
// imagettftext($bgpic,15, 0,5,290,$ttscolor,$f4,$contact_no);
// imagettftext($bgpic,15, 0,540,170,$infcolor,$f4,$cardtype);
// imagettftext($bgpic,15, 0,540,210,$infcolor,$f4,$amount);
// imagettftext($bgpic,15, 0,62,125,$infcolor,$f4,$source);
// imagettftext($bgpic,15, 0,150,425,$infcolor,$f4,$dest);
// imagettftext($bgpic,15, 0,540,255,$infcolor,$f4,$month);
// if(trim($photo!=""))
// {
//   $imgi = getimagesize($photo);
//  if($imgi[0]>0)
//   {
//       if($imgi[2]==1)
//       {
//         $av = imagecreatefromgif($photo);
//         imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
//       }else if($imgi[2]==2)
//       {
//         $av = imagecreatefromjpeg($photo);
//         imagecopyresized($bgpic, $av,105,160,0,0,175,190,$imgi[0], $imgi[1]);
//       }else if($imgi[2]==3)
//       {
//         $av = imagecreatefrompng($photo);
//         imagecopyresized($bgpic, $av,20,100,0,0,150,150,$imgi[0], $imgi[1]);
//       }
//    }
// }
// imagepng($bgpic,$save);
// imagedestroy($bgpic);
// header("Location: ".$save); 
// }
}
  $smartyObj->display('atosubheader.tpl');
	$smartyObj->display('dcardissue.tpl');
	$smartyObj->display('footer.tpl');
}
?>