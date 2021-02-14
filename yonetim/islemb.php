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
   <?php include('menu.php'); ?>
  
 <div id="orta"> 
  <?php 
  
  
  if(isset($_GET['b_no']))
  {
   $b_no=$_GET['b_no'];
   $b_adi=$_GET['b_adi'];
   	 echo  '<form id="form1" name="form1" method="post" action="guncelle.php?durum=b">';
 }
 else 
 echo '<form id="form1" name="form1" method="post" action="bislem.php">';
  
  
  ?>
   <table width="100%" border="0"   class="tablo">


     <tr  class="gunc">
       <td width="14%" height="49">Bolum Adi </td>
       <td width="2%">:</td>
       <td width="61%">
         <label for="b_adi"></label>
         <input name="b_adi" type="text" class="kutu" id="b_adi" value="<?php echo $b_adi;?>"/>
         <input name="b_no" type="hidden" class="kutu" id="b_no"  value="<?php echo $b_no;?>"/>
        </td>
       <td width="23%">&nbsp;</td>
     </tr>
     <tr  class="gunc">
       <td width="14%" height="49">&nbsp;</td>
       <td width="2%">&nbsp;</td>
       <td width="61%">
         <label for="b_no">
           <input name="button" type="submit" class="buton" id="button" value="Kaydet" />
          </label></td>
       <td width="23%">&nbsp;</td>
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
}else 
{
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}

?>