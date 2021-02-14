<?php 
ob_start();

 ob_start();
 session_start();
 $sk=$_SESSION['ogr_tc'];
 $ss=$_SESSION['ogr_no'];
 include('bag.php');
$dent=mysql_query( "select * from  ogr where tc_no='$sk' and ogr_no='$ss'");
$kontrol=mysql_num_rows($dent);

if($kontrol==1)
{
$ogr_tcs=$_SESSION['ogr_tc'];
$sorguc=mysql_query("select * from ogr where tc_no='$ogr_tcs'");

	 while($satirc = mysql_fetch_array($sorguc))
     {
		 $ogr_tc=$satirc[0];
		 $ogr_no=$satirc[1];
		 $ogr_adi=$satirc[2];
		 $ogr_tel=$satirc[3];
		 $ogr_e_pos=$satirc[4];
	 }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Ilgın Myo Staj Sistemi</title>
		<meta name="description" content="Senin dünyan, Senin Linkler.in / Link Saklama Servisi ile artık linklerinizi kaybetmeyecek ve daha fazla yeni linkler keşfedeceksiniz.." />
		<meta name="keywords" content="link, url" />	<meta name="author" content="">
	<meta property="og:image" content="http://linkler.in/theme/default/images/link2.png" />
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="js/jquery-1.8.3.js"></script>
  <script src="js/jquery-ui.js"></script>
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript">
	  $(function() {
    $( "#datepicker" ).datepicker();
	  $("#tarih" ).datepicker()
  });
  </script>
	</script>
</head>
<body>

<!-- Content -->
<div id="content">

	<!-- Header -->
  <!--#Header -->	
		
		<!-- Login -->
  <div id="mainLogin">
	  <div class="form" style="float: right; width: 600px; padding-left: 10px">
	    <table width="610" border="0" cellspacing="10">
	      <tr>
	        <td colspan="3"><h1>Gerkli Formlar</h1></td>
          </tr>
	      <tr>
	        <td colspan="3"><p>Çıktı almanız gerken formlar Aşağıda listelenmektedir.</p>
            <p>Aşağdaki Formların çıktılarını aldıktan sonra yanında yazan gereksimleri yerine getirek </p>
            <p>danışmanınız elden teslim ediniz.</p></td>
          </tr>
	      <tr>
	        <td colspan="3"><h2>Staj Başvurusu Sırasında Teslim Edilecek Formlar</h2></td>
          </tr>
	      <tr>
	        <td width="151"><h4>Formun Adi </h4></td>
	        <td width="347"><h4>Açiklama</h4></td>
	        <td width="66"><h4>Yazdırma</h4></td>
          </tr>
	      <tr>
	        <td>Forum 1 </td>
	        <td><ul>
	          <li>Tarih ve imzanızı atmayı unutmayınız </li>
	        </ul></td>
	        <td><a href="formlar1/form1.php" target="_blank" class="btnd">Çıktı Al</a></td>
          </tr>
	      <tr>
	        <td>Forum 2</td>
	        <td>Staj Yapcağınız iş yerine mühürletip imza atırmayı unutmayınız.</td>
	        <td><a href="formlar1/form2.php" target="_blank" class="btnd">Çıktı Al</a></td>
          </tr>
	      <tr>
	        <td>Forum 3</td>
	        <td><ul>
	          <li>Diğer Formlarla Beraber danışmanıza teslim etmeyi unutmayınız. Bu Forumdan 2 Adet Çıktı alınız.</li>
	        </ul></td>
	        <td><a href="formlar1/form3.php" target="_blank" class="btnd">Çıktı Al</a></td>
          </tr>
	      <tr>
	        <td colspan="3"><h2>Staj Başvurusu Sırasında Teslim Edilecek Formlar</h2></td>
          </tr>
	      <tr>
	        <td><h4>Formun Adi</h4></td>
	        <td><h4>Açiklama</h4></td>
	        <td><h4>Yazdırma</h4></td>
          </tr>
	      <tr>
	        <td>Staj Defter Kapağı</td>
	        <td>Staj Defteri kapağınızı A3 boyutunda karton çıktı alıp tüm çıktıları sırasıyla içersine yerleştirek ciltlemeyi unutmayınız.</td>
	        <td><a href="formlar1/kapak.php" target="_blank" class="btnd">Çıktı Al</a></td>
          </tr>
	      <tr>
	        <td>Staj Defter İlk Sayfası</td>
	        <td>İlgili Alana vesikalık fotoğrafınız yapıştırmayı unutmayınız.</td>
	        <td><a href="formlar1/ilksayfa.php" target="_blank" class="btnd">Çıktı Al</a></td>
          </tr>
	      <tr>
	        <td>Staj Defter Normal Sayfası</td>
	        <td>Staj yaptığınız her bir gün için en az 1(bir) adet çıktı alıp doldurmayı unutmayınız.</td>
	        <td><a href="formlar1/normalsayfa.php" target="_blank" class="btnd">Çıktı Al</a></td>
          </tr>
	      <tr>
	        <td>İş Yeri Devam Çizgiseli</td>
	        <td>Staj Yaptığınız her bir iş günü için iş adalarını tarihleri doldurup yetkiliye imzalatımayı unutmayınız.</td>
	        <td><a href="formlar1/isdevamcizgiseli.php" target="_blank" class="btnd">Çıktı Al</a></td>
          </tr>
	      <tr>
	        <td>İş Veren Raporu </td>
	        <td>Staj Yaptığınız yerdeki yetkili kişi tarafında doldurulup sizin göremeyceğiniz şekilde zarfa içersine konularak defterinizle birlikte kargoya veriniz.</td>
	        <td><a href="formlar1/isverenraporu.php" target="_blank" class="btnd">Çıktı Al</a></td>
          </tr>
        </table>
	  </div>
	
	<div style="float: left; width: 200px; margin-left:15px;">
	  <div class="form">
		   <h2><a href="anasayfa.php"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Anasayfa</a> </h2>
		   <p>&nbsp;</p>
	    <div id="login" class="margin">
	      <h3 class="title">Staj 1 İşlemleri</h3>
		<ul class="profil-link">
			<li><a href="anasayfa.php?icerik=sb1"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span> Staj Başvurusu</a></li>
			<li><a href="anasayfa.php?icerik=gun1"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Bilgi Güncelleme</a></li>
            <li><a href="formlar.php"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Gerkli Formlar</a></li>
             <li><a href="anasayfa.php?icerik=gun1"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Oline Defter Gönderimi</a></li>
		</ul>
          <h3 class="title">Staj 2 İşlemleri</h3>
          <ul class="profil-link">
			<li><a href="anasayfa.php?icerik=sb2"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span> Staj Başvurusu</a></li>
			<li><a href="anasayfa.php?icerik=gun2"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Bilgi Güncelleme</a></li>
            <li><a href="anasayfa.php?icerik=gun1"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>GerkliFormlar</a></li>
              <li><a href="anasayfa.php?icerik=gun1"><span style="position: relative; top: -2px; margin-right: 5px; display: inline">»</span>Oline Defter Gönderimi</a></li>
		</ul>
	    </div>
	  </div>
         <a href="cikis.php" style="color: #a10808; margin-left:20px; ">  Çıkış Yap</a>
		    <div id="login" style="margin-top: 30px"></div> 
    </div>
  </div>
	<!--#Login -->
		
	<div style="clear: both"></div>
	
		<!-- Avatar Show -->
	<!--#Avatar Show -->
		
  <div style="clear: both"></div>

	<!-- Footer -->
<div id="footer">
	<div class="copyright">
		Tüm Hakları Saklıdır. &copy; 2012 -Ilgın M.y.o<br />
		Bilgi işlem darie başkanlığı</div>
</div>
<!--#Footer -->	
</div>
<!--#Content -->

</body>
</html><?php 

}
else 
{
	echo'<meta http-equiv="refresh" content="0;URL=index.php">';
}
?>