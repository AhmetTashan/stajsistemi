<?php
 



 ob_start();
 session_start();
 $sk=$_SESSION['ogr_tc'];
 $ss=$_SESSION['ogr_no'];
 include('bag.php');
 include('islem.php');
 
 $banip = $_SERVER['REMOTE_ADDR'];
 $bansorgu=mysql_query("Select * from log where log_ip='$banip' and log_ban='b'");
 if(mysql_num_rows($bansorgu))
 {
     echo "<script>
	  $.msgBox({	  
    title:'Banlama Mesajı',
    content:'İpiniz Banlanmıştır.',
    type:'error'
	
}); 
	 
	 </script>";
	echo '<meta http-equiv="refresh" content="2;URL=http://www.google.com.tr/url?sa=t&rct=j&q=&esrc=s&source=web&cd=5&cad=rja&ved=0CEMQFjAE&url=http%3A%2F%2Fwww.ilginmyo.com%2Fstajsistemi%2Fogrenci%2F&ei=-YlhUa_vIYaHPd6rgPAD&usg=AFQjCNGUT6782UL0cexczfyPTTyVhSMZQg&bvm=bv.44770516,d.ZWU">';

 }
 else
 {
 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<!-- ---------------------------------------------------------------------------------------------->
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 <meta name="keywords" content="oline staj,staj Sistemi,ilgin myo staj,staj başvurusu,staj yapma" />
 <meta name="description" content="online öğrenci staj takipi,Öğrenci Staj Başvurusu" />
 <link rel="canonical" href="http://www.ilginmyo.com/stajsistemi/ogrenci/index.php" />
 <meta name="Author" content="Ilgın Meslek Yüksek Okulu">
 <meta name="viewport" content="width=device-width; initial-scale=1.0" />
 <meta http-equiv="Copyright" content="Copyright  © 2013 Ilgın Meslek Yüksekokulu Web Yönetimi" />
 <meta  name="referrer" content="origin">
 <title>Ilgın Myo Staj Sistemi</title>  
 <!-- ---------------------------------------------------------------------------------------------->
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39777813-1']);
  _gaq.push(['_setDomainName', 'ilginmyo.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>
  
     <!-- Css --> 
    <link rel="stylesheet" href="css/style.css" />
    <!-- Textler boş geçmemesi için js ve css dosyları -->
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
   <!-- Textler boş geçmemesi için js ve css dosyları -->     
   <!-- Checkbox Nesenesin Boş geçilmemesi için nesene -->
   <link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
   <script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
   <!-- Tab Js Css -->
  <link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
  <script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
  <script src="js/jquery.autotab.js" type="text/javascript"></script>  
  <!-- Nesenlerin oto tab ve animasyon Ve Güvenlik Kodu Doğrulama--->
   <script type="text/javascript">
   $(document).ready(function() {
   	$('#tc_no, #ogr_no').autotab_filter('numeric');
	$('#ogr_tel').autotab_filter('numeric');
	
	$('#sifre,#kullanci').autotab_magic().autotab_filter('numeric');
 });

 </script>
 
  <script type="text/javascript">	 	 
     $(document).ready(function() {	
	 var d=0;
	 $('#gkod').keyup(function(){
		
		var kuzunluk=$('#gkod').val().length;
		if(kuzunluk==6)
		    {
		      var kod= $('input[name=gkod]').val();
              var degerler="gkod="+kod;
		
	   $.ajax({	
		  type:"post",
	      url:"kod/kontrol.php",
	      data:degerler,
	      success: function(sonuc)
	      {	  
			if(sonuc=="d")
			{
				$('#ggizle').fadeOut(700);
			}
			else
			{
				$.msgBox({	
      title: "Bilgilendirme Mesajı",
      content: "Lütfen Güvenlik Kodunuz Doğru Bir Şekilde Giriniz",
      type: "error",
     
       });

			}
				
	      }
		
			
		
		})
		
		  
		 }}
		 );
		 		
	 	});
	<!-- -->
                               
    </script>      
    <script type="text/javascript">
		  function ililce()
	 {
		
		    var bolum=$("Select[name=il]" ).text(function(){			
			ill=$(this).find("option:selected").text();			
			$('#gil').val(ill);
			});			
			var lsm=$("Select[name=il]" ).val();
		    var degerler="il="+lsm;
		   $.ajax({	
		   type:"post",
	       url:"listele.php",
	       data:degerler,
	      success: function(sonuc)
	      {			
		     $("#ilce").html(sonuc);
	      }
		
	 })
		
	 }
</script>
    <!-- İl İlçe -->

<!--- Güvenlik Kodu Yenileme -->
<script language="javascript">

	function guvenlikkodu(){
		var yenikod= "<img src='kod/security.php?rnd="+Math.random(5555555)+"' alt='guvenlik' style='border: 1px solid #999999;' />";
		$("#guvenlik").html(yenikod);
		return false;
	}
</script>
<!-- Güvenlik Kodu Yenileme Bitti -->
 
 <!-- Bölüme Göre Danışman Gelmesi Ajax  -->
  <script type="text/javascript">

	function ses()
	{
	var ses=$("input[name=tc_no]").val();
	if(!ses=="")
	{
	alert(ses);
	}
	}
	 
	 function listela()
	 {
		var bolum=$("Select[name=ogr_bolum]" ).val();
		var degerler="bolum="+bolum;
           
		$.ajax({	
		   type:"post",
	       url:"listele.php",
	       data:degerler,
	      success: function(sonuc)
	      {
		     $("#ogr_danisman").html(sonuc);
				
	      }
		
	 })
		
	 }
	
	</script>
    
     

</head>

<body>

<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
       <li class="TabbedPanelsTab" tabindex="0" >Öğrenci Girişi</li>
       <li class="TabbedPanelsTab" tabindex="1">Danışman Girişi</li>
       <li class="TabbedPanelsTab" tabindex="2">Yardım</li>
 </ul>
  <div class="TabbedPanelsContentGroup">
  
  
  <!-- Öğrenci Girişi -->

    <div class="TabbedPanelsContent" >
     <?php   
	 
	       // Sistem Durumu Kontorol Etme Sistem Açıkmı Kapalımı
           $sistem=$sistemdurumu =@mysql_num_rows(@mysql_query("select * from sistem where durum='a'"));
			if($sistem >=1)
			{
             ?>


    <div id="content">
	<!-- Öğrenci Kayıt Formu Başlangıç -->
	<div id="mainLogin">
	 <div class="form" style="float: right; width: 350px; padding-left: 10px">
			<h1>Kayıt Olun!</h1>
			<form  method="post" id="ogr_kayit"  action="index.php?islem=ogr_e">
			  <ul>
				<ul>
                    
				    <li>
                       <span>T.C Kimlik No:</span>
                       <span id="sprytextfield1">
				          <input type="text" name="tc_no" style="width: 335px"  id="tc_no"  maxlength="11" />
				        </span>
                    </li>
                      
				    <li>
                       <span>Öğrenci No:</span>
                       <span id="sprytextfield2">
					    <input type="text" name="ogr_no" style="width: 335px" id="ogr_no" maxlength="9"/>
					   </span>
                   </li>
					  <li>
                       <span>Adi ve Soyad:</span>
                       <span id="sprytextfield3">
					    <input type="text" name="ogr_adi" style="width: 335px" id="ogr_adi"  />
					   </span>
		           <ul>
					   <li>
                           <span>Telefon No:</span><span id="sprytextfield4">
                          
					        <input type="text" name="ogr_tel" style="width: 335px" id="ogr_tel"  maxlength="11"  />
					      </span>
                      </li>
				  </ul>
                 </li>
			 </ul>
                    <li>
						<span>E-Posta:</span>
                        <span id="sprytextfield5">
						<input type="text" name="ogr_posta" style="width: 335px" id="ogr_posta" />
						</span>
                    </li>
                    
                    <li>
						<span>Adres:</span>
					  <span>
					  <label for="ogr_adres"></label>
					  <span id="sprytextarea1">
					  <textarea name="ogr_adres" id="ogr_adres" cols="45"   rows="5"></textarea>
					  </span>
                      
					</li>
                    
                     <li>
                  <span>İliniz</span>
                  <input name="gil" type="hidden" id="gil" value="" />
                  <label for="il"></label>
                  <span id="spryselect6">
                  <select name="il" size="1" id="il" style="width: 335px;" onchange="ililce();">
                    <option>İliniz Seçiniz</option>
                    <?php 
					
					$sorguil=mysql_query("Select *From il");
					
					while($satiril=mysql_fetch_array($sorguil))
					{
						     echo "<option value=".$satiril[0].">".$satiril[1]."</option>";


					}
					
					?>
                  </select>
                  </span></li>
                  <li>
                   <span> İlçe </span><span id="spryselect5">
                   <select name="ilce" id="ilce" style="width: 335px;">
                   </select>
                   </span></li>
                    
					<li>
						<span>Bölüm:</span>
                          <span id="spryselect1">
						  <select name="ogr_bolum" style="width: 349px" id="ogr_bolum" onchange="listela() ">
						  <option selected="selected">Bölüm Seçiniz</option>
						  <?php $bolumcek=mysql_query("Select * From bolumler");
		                        while($bsatir = mysql_fetch_array($bolumcek))
                                 { ?>
						  <option value="<?php echo $bsatir[0];?>" ><?php echo $bsatir[1];?></option>
						  <?php }?>
					    </select>
						</span>
                   </li>
                   
                    <li>
						<span>Danışman:</span>
                        <span id="spryselect2">
						<select name="ogr_danisman" style="width: 349px" id="ogr_danisman">
					    </select>
						</span>
                    </li>
                     <li>
						<span>Sınıf:</span>
                        <span id="spryselect4">
						<select name="ogr_sinif" style="width: 349px" id="ogr_sinif">
						  <option selected="selected">Sınıfınız Seçiniz</option>
						  <option value="1-A">1-A</option>
						  <option value="1-B">1-B</option>
						  <option value="2-A">2-A</option>
						  <option value="2-B">2-B</option>
						  <option value="Altan">Diğer</option>
					    </select>
						</span>
                    </li>
                    
                    <li>
                     
						<span>Öğretim Türü</span><span id="spryselect3">
						<select name="ogr_ogretim" style="width: 349px" id="ogr_ogretim">
						  <option selected="selected">Öğretim Türünüz Seçiniz</option>
						  <option value="1">1.Öğretim</option>
						  <option value="2">2.Öğretim</option>
					    </select>
						</span>
                    </li>
                   <li id="ggizle">   
	                    <span>Güvenlik Kodu</span>
                      <div id="guvenlik" style="width:20px; margin-bottom:5px;"><img src="kod/security.php"></div>
                         
                        <span><span id="sprytextfield7">
                        <input type="text"  name="gkod" id="gkod" maxlength="6"/>
                        <a style="margin-left:5px;" href="javascript:;" onclick="guvenlikkodu();">
                        <img	src="kod/refresh.png"  style="margin-top:5px;"/></a></span>
                        </span>
                        
                  <div id="yenile" style="float:right;"></div>
                  </li>
                        <li>
                      <table>
                      <tr>
                      <td><span id="sprycheckbox1">
                        <input type="checkbox" name="kosul" />
                        <span class="checkboxRequiredMsg"> </span></span></td>
                      <td>
      <h4 style="cursor:pointer; " ><a href="#" onclick="amk();"><font color="#0066CC">Kullanım Koşulları</font></a>nı Kabul Ediyorum</h4>                      </td>
                      </tr>
                   </table>  
                 </li>
			     <li>
						 <span><button type="submit">Kayıt Ol</button> </span>
						
			    </li>
				</ul>
				
			</form>
         <!-- Öğrenci Kayıt Forumu Bittiş  -->
		</div>
	
     
     <!-- Öğrenci Giriş Paneli Başlangıç  -->
    
		<div style="float: left; width: 500px"><br/>
			 <ul>
			   <li>
			     <h1>Ilgın Meslek Yüksekokulu Staj Sistemi</h1>
		       </li>
	          </ul>
			 <br />
		  <p style="font-size:17px; font-stretch:expanded; color:#666";>
          Sisteme giriş yapabilmeniz için sağdaki panel aracılığı ile kayıt işlemini gerçekleştiriniz.
             </p>
        <p style="font-size:17px; font-stretch:expanded; color:#666">
            Gerçekleştirdiğiniz başvuru danışman onayına sunulacaktır.
              </p>
        <p style="font-size:17px; font-stretch:expanded; color:#666">
             Başvuru sahiplerine, &quot;danışman onayı&quot; e-posta ile bildirildikten sonra  sisteme giriş yapabilirler.</p>
          <p>&nbsp;</p>
			<div style="float: right; margin-right: -50px; margin-top: 20px"><img src="images/kilit.png" alt="" usemap="#Map" border="0"/></div>
              
			
			<div id="login" style="margin-top: 30px">
				<h1 style="font-size: 20px">Öğrenci Giriş Paneli</h1>
				<form action="analiz.php" method="post">
					<ul>
					  T.C Kimlik No:
					  <li><span>
							<input type="text" name="ogr_tc" style="width: 250px" id="kullanci" maxlength="11"   /></span>
					  </li>
						<li><span>Öğrenci No:</span>
							<span><input type="password" name="ogr_no" style="width: 250px" id="sifre"  maxlength="9"  /></span>
						</li>
						<li>
						<span><button class="button" type="submit" >Giriş Yap</button>
						</span></li>
					</ul>
					
					<ul>
					  <li> </li>
				  </ul>
				</form>
               
			</div> 
		</div>
		<p>&nbsp;</p>
	
	</div>
	
    
		
	<div style="clear: both"></div>
	
		
  <div style="clear: both"></div>

<div id="footer">
 
 <div class="copyright" style="float:left">
 <a href="../yonetim/index.php"><img  src="images/yonetim.png"   /></a>
 </div>
 
	<div class="copyright" style="cursor:pointer" onclick="as();">
	  <p>Tüm Hakları Saklıdır. ©
	  2013 -Ilgın Meslek Yüksekokulu Web Yönetimi</p>
	</div>
    
</div>

</div>



  <script>
  function as()
  {
     $.msgBox({
	 buttons: [{ value: "Tamam" }],
    title:"Telif",
    content:'Bu Proje <a  href="http://www.umitalbayrak.com/">Öğr.Gör.Ümit ALBAYRAK</a> Danışmanlığında  <a       href="http://www.tanerozel.com/">Taner ÖZEL</a> Tarafından Geliştirilmiştir',
    type:"info"
});
  }
	</script>

<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect5");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect6");

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
<?php 
	}
	
	else 
	{
		echo "<h1>Sistem Kapalı</h2>";
		
	 }
	
	?></div>
    
    <!-- Öğrenci Giriş Paneli Bittiş -->
   
   <!-- Danışman Giriş Paneli Bşlangıç -->
    <div class="TabbedPanelsContent">   
<div id="content">

	<!-- Header -->
  <!--#Header -->	
		
		<!-- Login -->
	<div id="mainLogin">
	
<div style="float: right; width: 350px; height:569px; padding-left: 10px; ">
			
		</div>
	
		<div style="float: left; width: 500px"><br/>
			 <ul>
			   <li>
			     <h1>Ilgın Meslek Yüksekokulu Staj Sistemi
</h1>
		       </li>
	      </ul>
			 <br />
		  <p style="font-size:17px; font-stretch:expanded; color:#666";>Sisteme giriş yapmadan önce sisteme kaydınız yaptırınız.</p>
            <p style="font-size:17px; font-stretch:expanded; color:#666">Sisteme kayıt yaptıktan sonra onay mail gelecektir.</p>
          <p>&nbsp;</p>
			<div style="float: right; margin-right: -50px; margin-top: 20px"><img src="images/kilit.png" alt="" usemap="#Map" border="0"/>
              
			</div>
			<div id="login" style="margin-top: 30px">
				<h1 style="font-size: 20px">Danışman Giriş Paneli</h1>
				<form action="../danisman/kontrol.php" method="post">
					<ul>
					  Sicil No :
					  <li><span>
							<input type="text" name="dkullanci" style="width: 250px" id="kullanci" maxlength="11"   /></span>
					  </li>
						<li>Şifre :<span></span>
							<input type="password" name="dsifre" style="width: 250px" id="sifre"  maxlength="9"  /></span>
						</li>
						<li>
						<span><button class="button" type="submit" >Giriş Yap</button>
						</span></li>
					</ul>
					
					<ul>
					  <li> </li>
				  </ul>
				</form>
               
			</div> 
		</div>
		<p>&nbsp;</p>
	
	</div>
	<!--#Login -->
		
	<div style="clear: both"></div>
	
		<!-- Avatar Show -->
	<!--#Avatar Show -->
		
  <div style="clear: both"></div>

	<!-- Footer -->
<div id="footer">
 <div class="copyright" style="float:left">
 <a href="../yonetim/index.php"><img  src="images/yonetim.png"   /></a>
 </div>

	<div class="copyright" style="cursor:pointer" onclick="as();">
	  <p>Tüm Hakları Saklıdır. ©
	  2013 -Ilgın Meslek Yüksekokulu Web Yönetimi</p>
	</div>
    
</div>

</div>
<!--#Content -->


  <script>
  function as()
  {
$.msgBox({
	 buttons: [{ value: "Tamam" }],
    title:"Telif",
    content:'Bu Proje <a  href="http://www.umitalbayrak.com/">Öğr.Gör.Ümit ALBAYRAK</a> Danışmanlığında  <a  href="http://www.tanerozel.com/">Taner ÖZEL</a> Tarafından Geliştirilmiştir',
    type:"info"
});
  }
	</script>

<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield6");
</script></div>
        <div class="TabbedPanelsContent"><div id="content">

	<!-- Header -->
  <!--#Header -->	
		
		<!-- Login -->
	<div id="mainLogin">
	
		
	
		<div style="float: left; width: 500px"><br/>
			 <ul>
			   <li>
			     <h1>Ilgın Meslek Yüksekokulu Staj Sistemi
</h1>
		       </li>
	      </ul>
			 <br />
		  <p style="font-size:17px; font-stretch:expanded; color:#666";>Sisteme giriş yapmadan önce sisteme kaydınız yaptırınız.</p>
            <p style="font-size:17px; font-stretch:expanded; color:#666">Sisteme kayıt yaptıktan sonra onay mail gelecektir.</p>
          <p>&nbsp;</p>
			<div style="float: right; margin-right: -50px; margin-top: 20px"><img src="images/map.png" alt="" usemap="#Map" border="0"/>
              
			</div>
			<div id="login" style="margin-top: 30px">
				<h1 style="font-size: 20px">Yönetici Giriş Paneli</h1>
				<form action="../yonetim/kontrol.php" method="post">
					<ul>
					  Kullancı Adı:
					  <li><span>
							<input type="text" name="kullanci" style="width: 250px" id="kullanci" maxlength="11"   /></span>
					  </li>
						<li>Kullancı Şifresi:<span></span>
							<input type="password" name="sifre" style="width: 250px" id="sifre"  maxlength="9"  /></span>
						</li>
						<li>
						<span><button class="button" type="submit" >Giriş Yap</button>
						</span></li>
					</ul>
					
					<ul>
					  <li> </li>
				  </ul>
				</form>
               
			</div> 
		</div>
		<p>&nbsp;</p>
	
	</div>
	<!--#Login -->
		
	<div style="clear: both"></div>
	
		<!-- Avatar Show -->
	<!--#Avatar Show -->
		
  <div style="clear: both"></div>

	<!-- Footer -->
<div id="footer">
 <div class="copyright" style="float:left">
 <a href="../yonetim/index.php"><img  src="images/yonetim.png"   /></a>
 </div>

	<div class="copyright" style="cursor:pointer" onclick="as();">
	  <p>Tüm Hakları Saklıdır. ©
	  2013 -Ilgın Meslek Yüksekokulu Web Yönetimi</p>
	</div>
    
</div>

</div>
<!--#Content -->


  <script>
  function as()
  {
$.msgBox({
	 buttons: [{ value: "Tamam" }],
    title:"Telif",
    content:'Bu Proje <a  href="http://www.umitalbayrak.com/">Öğr.Gör.Ümit ALBAYRAK</a> Danışmanlığında  <a  href="http://www.tanerozel.com/">Taner ÖZEL</a> Tarafından Geliştirilmiştir',
    type:"info"
});
  }
	</script>

<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
      </div>

  </div>
</div>

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
</script>
</body>
</html>
<?php 


 //Log İÇin cookie


require_once("../log/geoip.inc");
require_once("../log/geoipregionvars.php");
require_once("../log/geoipcity.inc");
function getIp() {
$ipl = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ipl = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipl = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ipl;
}


//if kontrolü ile "ip" isimli text alanýnýna deðer verilip verilmediðini 
//ve ip adresinin doðru girilip girilmediðini RegularExpressin ile kontrol ediyoruz.

	//ip numarasýný al
	 $ip=getIp();
	//ülke ve bölge bilgisini içeren veri dosyasýný tanýmlý metot ile açýyoruz
	$gicountry = geoip_open("../log/data/GeoIP.dat",GEOIP_STANDARD);
	$gicity = geoip_open("../log/data/GeoIPCity.dat",GEOIP_STANDARD);
	$record = geoip_record_by_addr($gicity,$ip);

    $ulke=($record->country_name);
    $sehir=($record->city);
	 
	//girilen ip'ye göre bulunan ülke kodunu,ülke ismini ve ziyaretçi adresini ekrana bastýrýyoruz.
	if (geoip_country_code_by_addr($gicountry, $ip) )
	{
	
		//ip'ye kayýtlý ISP (internet servise provider) bilgisini içeren veri dosyasýný açýyoruz.
		$giisp = geoip_open("../log/data/GeoIPISP.dat",GEOIP_STANDARD);
		//ISP bilgilarini alýyoruz.
		if ($isp = geoip_org_by_addr($giisp,$ip))
			$saglayci= $isp;
		
	geoip_close($gicity);
	geoip_close($giisp);
	
	}
		
	geoip_close($gicountry);

  $log_adresi=$_SERVER['REQUEST_URI'];
   $log_tarih=strtr(date("d F Y l ,H:i"), $tarih);  



$ua=getBrowser();
$logtarayci=$ua['name'].$ua['version'];
$log_pl=$ua['platform'];


if(isset($_COOKIE['ogr_giris']))
{
	
}
 
else
{
setcookie("ogr_giris", time() + (60*60*24));

echo $_COOKIE['ogr_index'];
mysql_query("insert into  log (log_adresi,log_ip,log_sehir,log_ulke,log_saglayici,log_pl,log_taryaci,log_tarih) values('$log_adresi','$ip','$sehir','$ulke','$saglayci','$log_pl','$logtarayci','$log_tarih')");
 
}
?>