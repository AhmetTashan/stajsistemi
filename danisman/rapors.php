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

<script src="http://code.jquery.com/jquery-1.8.3.js"></script>




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
 
   <div id="o_pencer" style="width:400px">Staj Not Listesi </div>
   <div class="CSSTableGenerator" >
<table  border="0"   >
  
    </tbody>
 
  <tr>
       <td  >Sıra No </td>
       <td >Öğrenci No</td>
       <td>Adı Soyadı  </td>
       <td>Staj Notu</td>
       <td >Harflendirme</td>
       <td>Durum</td>
       
   
      
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
     <tr>
       <td ><?php echo $sayac;?></td>
       <td><?php echo $ogr_no; ?></td>
       <td><?php echo $ogr_adi; ?></td>
       <td><?php echo $satirl[11];?></td>
       <td>
         <?php $not=$satirl[11];
	           if($not>=90) echo "AA";
			   if($not>=85 & $not<=89) echo "BA";
			    if($not>=75 & $not<=84) echo "BB";
				if($not>=70 & $not<=74) echo "CB";
				if($not>=60 & $not<=69) echo "CC";
				if($not>=55 & $not<=59) echo "DC";
				if($not>=50 & $not<=54) echo "DD";
				if($not>=40 & $not<=49) echo "FD";
				if($not>=0 & $not<=39) echo "FF";
			   
			   
			   
	   
	   ?>
       
       </td>
       <td>
      <?php $not= $satirl[11];
       if($not >59)
	   {
	echo "Başarlı";
	 }
	   else
	   {
	echo "Başarsız";	   
		   
	 }
	   
       ?>
       
       </td>

      
      
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
  <script language="javascript">
$(document).ready(function() {
    //set initial state.
  

    $('#t').change(function() {
		
		$('#goster').toggle(2000);
		$('taner').hide();
		$('#gizle,#t').hide(200);
		
				
    });

    
});
 </script>
 </div>
  <table width="1000" border="0">
    <tr>
      <td width="40">&nbsp;</td>
      <td width="114"><taner>Listeyi Kaydet</taner></td>
      <td width="20">
        <input type="checkbox" id="t"/>
      </td>
      <td width="808"> <div id="gizle">
<input name="button2" type="submit" class="btnd" style="color:#333 "  disabled="disabled" id="button2" value="Yazdır" /></div><div id="goster" style="display:none">
  <input type="submit" class="btnd" style="color:#333" name="button" id="button" onclick="yazdir()"   value="Yazdır" />
</div></td>
    </tr>
  </table>
  <script language="JavaScript">
    function yazdir() {
        var basilacakIcerik= document.getElementById('orta').innerHTML;
        var orjinalSayfa= document.body.innerHTML;
        document.body.innerHTML = basilacakIcerik;
        window.print();
        document.body.innerHTML = orjinalSayfa;
    } </script>

<span class="kutu">



 
 
</span>
</body>
</html>
<?php 
}
else 
{
	echo'<meta http-equiv="refresh" content="0;URL=index.php">';
}
?>