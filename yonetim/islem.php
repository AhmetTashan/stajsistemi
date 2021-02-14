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
 
	
    <link rel="stylesheet" href="jqtransform/jqtransformplugin/jqtransform.css" type="text/css" media="all" />
	<link rel="stylesheet" href="jqtransform/demo.css" type="text/css" media="all" />
	<script type="text/javascript" src="jqtransform/requiered/jquery.js" ></script>
	<script type="text/javascript" src="jqtransform/jqtransformplugin/jquery.jqtransform.js" ></script>
    <script type="text/javascript" src="js/modernizr.custom.63321.js" ></script>
   
    <script language="javascript">
	
		$(function(){
			$('form').jqTransform({imgPath:'jqtransformplugin/img/'});
		});
	</script>
 
</head>

<body>
<div id="bg"> 
    <?php 
  
  include('menu.php');
  include('bag.php');
  
  ?>
  
 <div id="orta">
 <?php 
 $bil=$_GET['bil'];
 
 switch($bil)
 {
	 case d:	 
	 echo '<form id="form1" name="form1" method="post" action="vislem.php?bil=g">'; break;
	 case g:
     echo '<form id="form1" name="form1" method="post" action="guncelle.php?durum=d">';
	 $sicil= $_GET['d_s'];
	 $adi= $_GET['d_a'];
	 $sifre= $_GET['d_si'];
	 $posta=$_GET['d_ep'];
	  break;
	 
 }
 ?> 

   <table width="100%" border="0"   class="tablo">
     <tr  class="gunc">
       <td width="14%" height="49">Sicil No</td>
       <td width="2%">:</td>
       <td width="61%">
         <label for="s_no"></label>
         <input name="s_no" type="text" id="s_no" value="<?php echo $sicil; ?>"  placeholder="Sicil No Yazınız" />
      </td>
       <td width="23%">&nbsp;</td>
     </tr>


     <tr  class="gunc">
       <td width="14%" height="49">Adı Soyadı</td>
       <td width="2%">:</td>
       <td width="61%">
         <label for="sifre"></label>
         <input name="adi" type="text" id="adi" value="<?php echo $adi; ?>"  />
       </td>
       <td width="23%">&nbsp;</td>
     </tr>


     <tr  class="gunc">
       <td width="14%" height="49">Bölüm Adı</td>
       <td width="2%">:</td>
       <td width="61%">
       <div class="rowElem">
         <label for="bolum"></label>
         <select name="bolum" id="bolum">
           <option>Bölümü Seçiniz</option>
           
           <?php $bolumcek=mysql_query("Select * From bolumler");
		   while($bsatir = mysql_fetch_array($bolumcek))
     { ?>
     <option value="<?php echo $bsatir[0];?>" ><?php echo $bsatir[1];?></option>
          <?php }?>
         </select></div>
      </td>
       <td width="23%"><input type="hidden" name="gizle" id="hiddenField"  value="<?php echo $sicil;?>"/>
         
      </td>
         <tr  class="gunc">
       <td width="14%" height="49">E-posta</td>
       <td width="2%">:</td>
       <td width="61%">
         <label for="posta"></label>
         <input name="posta" type="text" id="sifre" value="<?php echo $posta; ?>"  />
       </td>
       <td width="23%">&nbsp;</td>
     </tr>
      <tr  class="gunc">
       <td width="14%" height="49">Şifre</td>
       <td width="2%">:</td>
       <td width="61%">
         <label for="sifre"></label>
         <input name="sifre" type="text" id="sifre" value="<?php echo $sifre; ?>"  />
       </td>
       <td width="23%">&nbsp;</td>
     </tr>
     </tr>
     <tr  class="gunc">
       <td width="14%" height="49">&nbsp;</td>
       <td width="2%">&nbsp;</td>
       <td width="61%">
         <label for="s_no">
           <input name="button" type="submit" id="button" value="Kaydet" />
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