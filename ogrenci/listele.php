<?php 

include('bag.php');

if($_POST['il'])
{
	$il=$_POST['il'];
	 echo '<option value="" >İlçeniz Seçiniz</option>';
     $sorgu=mysql_query("Select * From ilce Where il_id='$il'");
	 while($satir=mysql_fetch_array($sorgu))
	 {
 echo '<option value="'.$satir[2].'" >'.$satir[2].'</option>';	 
     }
	
  }

if($_POST['bolum'])
{
$bolum_no=$_POST['bolum'];
 echo '<option value="" >Danışman Seç</option>';
 $bolumcek=mysql_query("Select * From danisman Where d_bolum='$bolum_no'");
  while($bsatir = mysql_fetch_array($bolumcek))
   { ?>
      <option value="<?php echo $bsatir[0];?>"><?php echo $bsatir[1];?></option>
   <?php }}
   ?>


