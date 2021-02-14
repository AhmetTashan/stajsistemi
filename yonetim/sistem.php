<?php
include('bag.php');
ob_start();
session_start();
 $sk=$_SESSION['kadi'];
 $ss=$_SESSION['sifre'];
$dent=mysql_query( "select * from yonetim where k_adi='$sk' and k_sifre='$ss'");
$kontrol=mysql_num_rows($dent);

if($kontrol==1)
{
	?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yönetim Paneli</title>
 <link rel="stylesheet" type="text/css" href="css/stil.css" />

</head>

<body>
<div id="bg"> 
  <?php 
  
  include('menu.php');
  include('bag.php');
  
  ?>
  
  
  
 <div id="orta"> 
   

 
   <table>
     <tr >
       <td  >&nbsp;</td>
       <td  >&nbsp;</td>
       <td  >&nbsp;</td>
       <td  >&nbsp;</td>
       <td  >&nbsp;</td>
     </tr>
     <tr >
       <td width="4%"  >&nbsp;</td>
       <td   ><?php 
	   
	   
	   if(isset($_GET['durum']))
	   {
		   $gelen=$_GET['durum'];
		   switch($gelen)
		   {
			    case y:

		
 if(backup_tables('localhost','ilginmyo_user','imyo123456','ilginmyo_staj'))
 {
	 

 }
else
{
		 			   	echo '<meta http-equiv="refresh" content="5;URL=sistem.php">';

}
			   
			   
break;
			   
			   case a:
			   
			   mysql_query("UPDATE sistem  SET durum='a'");
			   	echo '<meta http-equiv="refresh" content="0;URL=sistem.php">';

			   
			   break;
			   
			   case k:
			   
			   mysql_query("UPDATE sistem  SET durum='k'");
			   	echo '<meta http-equiv="refresh" content="0;URL=sistem.php">';

			   
			   break;
			   
			   case g:
			   
			   $sorgub= mysql_query("Select * From ogr Where ogr_sinif='1-B'");
			   
			   while($satirb=mysql_fetch_array($sorgub))
			   {
				   
				    echo $idb=$satirb['0'];
				   
				   mysql_query("UPDATE ogr  SET ogr_sinif='2-B' Where tc_no='$idb'");

        	   }
			   
			   
			   $sorgu= mysql_query("Select * From ogr Where ogr_sinif='1-A'");
			   
			   while($satir=mysql_fetch_array($sorgu))
			   {
				   
				    echo $id=$satir['0'];
				   
				   mysql_query("UPDATE ogr  SET ogr_sinif='2-A' Where tc_no='$id'");
        	   }
			   
			   	echo '<meta http-equiv="refresh" content="0;URL=sistem.php">';

			   break;
			   
			}
		   
	   }
	   
	   $durum=mysql_query( "select * from sistem where durum='a'");
       $kontrol=mysql_num_rows($durum);

if($kontrol==1)
{
	

	   ?>
         <a  class="btnd" style=" color:#333;  padding-bottom:10px; padding-top:10px;  font-size:21px;" href="sistem.php?durum=k">Sistemi Kapat</a>
        <?php 
}
	   else
	   {
		   
		echo        '<a class="btnd" style=" color:#333;  padding-bottom:10px; padding-top:10px;  font-size:21px;" href="sistem.php?durum=a">Sistemi Aç</a>';

         }
	   ?></td>
       <td><?php 
	   
	  		echo '<a  class="btnd" style=" color:#333;  padding-bottom:10px; padding-top:10px;  font-size:21px;" href="sistem.php?durum=g">Sınıfları Güncelle</a>';

	   
	   
	   ?></td>
       <td>
       <a class="btnd" style=" color:#333;  padding-bottom:10px; padding-top:10px;  font-size:21px;" href="log.php">Logları Aç</a></td>
       <td width="20%" height="50"  ><?php 	  		
	   echo '<a  class="btnd" style=" color:#333;  padding-bottom:10px; padding-top:10px;  font-size:21px;" href="sistem.php?durum=y">Yedek Al</a>'; 
	   ?>
       </td>
      </tr>
    
   </table>
  
   <p>&nbsp;</p>
   <p>&nbsp;</p>
 </div>

</div>
</body>
</html>
<?php 
}else 
{
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}

?>