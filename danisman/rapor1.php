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
  
  
 <div id="orta" >

  <div id="o_pencer" style="width:400px">Staj Yeri Başvuru Listesi </div>
  <div class="CSSTableGenerator" >
  
<table >
 
  <tr >
       <td >Sıra No </td>
       <td >Öğrenci TC No</td>
       <td >Öğrenci No</td>
       <td>Adı Soyadı</td>
       <td >Kurum</td>
       <td>Başlangıç Tarihi</td>
       <td >Bittiş Tarihi</td>
      
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
	  $sorgus=mysql_query("Select * From staj Where ogr_tc=$ogr_tc and staj_turu=1 and is_onay='o'");
	  while($satirl = mysql_fetch_array($sorgus))
     {
		 $sayac=$sayac+1;
	  
	 ?>
     <tr >
       <td><?php echo $sayac;?></td>
       <td ><?php echo $ogr_tc; ?></td>
       <td ><?php echo $ogr_no; ?>
        </td>
       <td ><?php echo $ogr_adi; ?></td>
       <td ><?php echo $satirl[2]; ?></td>
       <td><?php echo $satirl[6]; ?></td>
       <td><?php echo $satirl[7]; ?></td>
      
      
     </tr>
	<?php 
	 }}
   else
	{
		
     echo '<tr><p style="color:#e3dada; font-family: Arial, Helvetica, sans-serif;font-size:15px; margin-left:300px; ">Herhangi Öğrenci Kaydı Bulunmiyor</p> </br></tr>';
  
	}
	
	?>
	
 </table></div>

 
 </div>
 <span class="kutu">
 <script language="JavaScript">
    function yazdir() {
        var basilacakIcerik= document.getElementById('orta').innerHTML;
        var orjinalSayfa= document.body.innerHTML;
        document.body.innerHTML = basilacakIcerik;
        window.print();
        document.body.innerHTML = orjinalSayfa;
    } </script>

 </span>
 <p  align="center"><a href="#" class="btnd" style="color:#333 " onclick="yazdir()">Yazdır</a></p> 
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