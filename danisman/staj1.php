<?php
  ob_start();
  session_start();
 $dsk=$_SESSION['dkadi'];
 $dss=$_SESSION['dsifre'];
 include('bag.php');
$dent=mysql_query( "select * from danisman where  dsicil_no='$dsk' and d_sifre='$dss'");
$kontrol=mysql_num_rows($dent);

if($kontrol==1)
{?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"> </script>

</head>
<body>




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yönetim Paneli</title>
 <link rel="stylesheet" type="text/css" href="css/stil.css" />
 <?php include('yukle.php')?>
 <style type="text/css">
 a:link {
	text-decoration: none;
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
}
 </style>
</head>

<body>
<div id="bg"> 
  <?php 
  
  include('menu.php');
  include('bag.php');
  ?>
  
  
  <?php $sorgu=mysql_query("Select * From ogr Where ogr_danisman='$dsk'");?>
  
  
 <div id="orta">

  <div id="o_pencer" style="width:250px"> Staj1 Başvuru İşlemleri</div>
       <div class="CSSTableGenerator" >

<table>

  <tr >
       <td >Sıra No </td>
       <td >Öğrenci No</td>
       <td>Adı Soyadı</td>
       <td >Kurum</td>
       <td >Başlangıç Tarihi</td>
       <td >Bittiş Tarihi</td>
       <td >Detay </td>
       <td colspan="3">İşlemler</td>
      </tr>
	 <?php 
	 $sayac=0;
	 if(mysql_num_rows($sorgu)!=0)
	 while($satir = mysql_fetch_array($sorgu))
     { 
	 #Dğişkenler
	 	$ogr_tc= $satir[0];
		$ogr_no= $satir[1];
		$ogr_adi= $satir[2];
		$ogr_mail= $satir[4];
	  $sorgus=mysql_query("Select * From staj Where ogr_tc=$ogr_tc and staj_turu=1 and is_onay='b'");
	  while($satirl = mysql_fetch_array($sorgus))
     {
		 $sayac=$sayac+1;
	  
	 ?>
     <tr>
       <td  ><?php echo $sayac;?></td>
       <td><?php echo $ogr_no; ?>
    
      
        
   

       <td><?php echo $ogr_adi; ?></td>
       <td><?php echo $satirl[2]; ?></td>
       <td><?php echo $satirl[6]; ?></td>
       <td><?php echo $satirl[7]; ?></td>
      
      
       <td><div id="sil"><a id="various2" href="detay.php?tc=<?php echo $ogr_tc;?>"><img src="images/detay.png" width="25"  alt="detay" /></a></div></td>
       <td width="5%"><div id="sil"><a href="onay.php?islem=s1&o_tc=<?php echo $satir[0];?>&posta=<?php echo $satir[4];?>&ad=<?php echo $satir[2]; ?>"><img src="images/onay.png" alt="Onayla" width="25"/></a></div>
        </td>
         <form  action="onay.php?islem=red1"  method="post"  name="redici">
       <td width="22%">
    
   
       <select name="neden" >
         <option selected="selected">Red Nedeni</option>
         <option value="1">Staj Yapılacak Kurum Uygun Değil</option>
         <option value="2">Staj yapım Tarihleri Uygun Değil </option>
       </select>
       <input name="tc" id="tc"  type="hidden"  value="<?php echo $satir[0];?>"/>
       <input type="hidden" name="ogradi" id="ogradi"  value="<?php echo $ogr_adi; ?>" /></td>
       <input name="ogr_adi" id="ogr_adi"  type="hidden"  value="<?php echo  $ogr_adi;?>"/></td>
        <input name="email" id="email"  type="hidden"  value="<?php echo $ogr_mail;?>"/></td>
      
       <td width="5%"><div id="red">
         <input name="button" type="submit"  class="red" id="button" value="    " />

       </div></td></form>
     </tr>
	<?php 
	 }}
   else
	{
		
     echo '<tr><p style="color:#e3dada; font-family: Arial, Helvetica, sans-serif;font-size:15px; margin-left:300px; ">Herhangi Öğrenci Kaydı Bulunmiyor</p> </br></tr>';
  
	}
	
	?>
	
 </table> 
 </div>
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