<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Not Kaydetme</title>
 <script src="js/jquery-1.8.3.js"></script>

<script src="msj/jquery.msgBox.js" type="text/javascript"></script>
<link href="msj/msgBoxLight.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php 

include('bag.php');

$islem=$_GET['islem'];
function mesaj($turu,$msjm,$yonledirme)
{
	echo '
       <script>				
	   $.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "'.$msjm.'",
      type: "'.$turu.'",
      buttons: [{ value: "Tamam" }],
      success: function (result) {
        if (result == "Tamam") {
            window.location="'.$yonledirme.'.php";;
        }
        }
       });		
    </script>';
   
}

switch($islem)
{
	case "s1n":
	

  $sorgus=mysql_query("Select * From staj Where staj_turu=1 and is_onay='o'");
	  while($satir = mysql_fetch_array($sorgus))
     { 
	         $tc=$satir[1];
			 $not=$_POST[$tc];
			 if(!empty($not))
			 {
			 $sorgul=mysql_query("UPDATE staj SET is_not='$not'  WHERE ogr_tc='$tc' and staj_turu='1'  ");
			 

			 }
			 else
			 {			 
			 	 mesaj('error',$tc. 'TC NO lu Öğrencini Notunda Problem Meydan Geldi','not');
		     }
				
		 
	 }
	 
	 mesaj('ok','Öğrenci Notları Başarlı Bir Şekilde Kaydedildi','not');
	
	 }

?>
</body>
</html>
