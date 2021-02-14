<?php
  ob_start();
  session_start();
 $dsk=$_SESSION['dkadi'];
 $dss=$_SESSION['dsifre'];
 include('bag.php');
$dent=mysql_query( "select * from danisman where  dsicil_no='$dsk' and d_sifre='$dss'");
$kontrol=mysql_num_rows($dent);


if($kontrol==1)
{
	
	 
 
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yönetim Paneli</title>
 <link rel="stylesheet" type="text/css" href="css/stil.css" />
 <style type="text/css">
 body,td,th {
	color: #000000;
}
 </style>
</head>

<body>
<div id="bg"> 
    <?php 
  
  include('menu.php');
  
  ?>
  
 <div id="orta">
 <?php 
 $bil=$_GET['bil'];
 
 switch($bil)
 {
	 case d:	 
	 echo '<form id="form1" name="form1" method="post" action="vislem.php">'; break;
	 case g:

	 $sicil= $_GET['d_s'];
	 $adi= $_GET['d_a'];
	  break;
	 
 }
 ?> 

   <table width="100%" border="0"   class="tablo">


     <tr  class="gunc">
       <td height="49">&nbsp;</td>
      </tr>
     <tr  class="gunc">
       <td height="49"><?php
	   $staj=$_GET['s_no'];
	  
	   
	   
	   switch($staj)
	   {
		   case 1:
		    $linko = '<a href="staj1.php"  class="sislemler">Staj Başvuru Onay/Red İşlemleri</a>';
	        $linky = '<a href="rapor1.php" class="sislemler">Staj Yeri Başvuru Listesi İşlemleri</a>';
	        $linkn = '<a href="not.php" class="sislemler">Staj Not Giriş İşlemleri</a>';
	        $linknn = '<a href="rapors.php" class="sislemler">Staj Not Listesi İşlemleri</a>';
		   echo "$linko - $linky - $linkn - $linknn ";
		   break;
		   case 2:
		    $linko = '<a href="staj1.php"  class="sislemler">Staj Başvuru Onay/Red İşlemleri</a>';
	        $linky = '<a href="staj1.php" class="sislemler">Staj Yeri Başvuru Listesi İşlemleri</a>';
	        $linkn = '<a href="staj1.php" class="sislemler">Staj Not Giriş İşlemleri</a>';
	        $linknn = '<a href="staj1.php" class="sislemler">Staj Not Listesi İşlemleri</a>';
		  echo "$linko - $linky - $linkn - $linknn ";
		   break;
		   
		   
	   }
	   
	    ?></td>
      </tr>
   </table>
   
     </form>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
 </div>

</div>
</body>
</html>
<?php 
}
else 
{
	echo'<meta http-equiv="refresh" content="0;URL=index.php">';
}
?>