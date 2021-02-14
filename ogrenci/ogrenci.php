<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<div id="content">

	<!-- Header -->
  <!--#Header -->	
		
		<!-- Login -->
	<div id="mainLogin">
	
		<div class="form" style="float: right; width: 350px; padding-left: 10px">
			<h1>Kayıt Olun!</h1>
			<form  method="post" id="registerForm"  action="index.php?islem=ogr_e">
				<ul>
					<ul>
				      <li><span>T.C Kimlik No:</span><span id="sprytextfield1">
				        <input type="text" name="tc_no" style="width: 335px"  id="tc_no"  maxlength="11" />
				      </span></li>
					  <li><span>Öğrenci No:</span><span id="sprytextfield2">
					    <input type="text" name="ogr_no" style="width: 335px" id="ogr_no" maxlength="9"/>
					  </span></li>
					  <li><span>Ad Soyad:</span><span id="sprytextfield3">
					    <input type="text" name="ogr_adi" style="width: 335px" id="ogr_adi"  />
					  </span>
					    <ul>
					      <li><span>Telfon No:</span><span id="sprytextfield4">
					        <input type="text" name="ogr_tel" style="width: 335px" id="ogr_tel"   />
					      </span></li>
				        </ul>
				      </li>
				  </ul>
                    <li>
						<span>E-Posta:</span><span id="sprytextfield5">
						<input type="text" name="ogr_posta" style="width: 335px" id="ogr_posta" />
						</span></li>
                    <li>
						<span>Adres</span>
					  <span>
					  <label for="ogr_adres"></label>
					  <span id="sprytextarea1">
					  <textarea name="ogr_adres" id="ogr_adres" cols="45"   rows="5"></textarea>
					  </span></span>
					</li>
					<li>
						<span>Bölüm:</span><span id="spryselect1">
						<select name="ogr_bolum" style="width: 349px" id="ogr_bolum" onchange="listela() ">
						  <option selected="selected">Bölüm Seçiniz</option>
						  <?php $bolumcek=mysql_query("Select * From bolumler");
		                        while($bsatir = mysql_fetch_array($bolumcek))
                                 { ?>
						  <option value="<?php echo $bsatir[0];?>" ><?php echo $bsatir[1];?></option>
						  <?php }?>
					    </select>
						</span></li>
                    <li>
						<span>Danışman:</span><span id="spryselect2">
						<select name="ogr_danisman" style="width: 349px" id="ogr_danisman">
					    </select>
						</span></li>
                     <li>
						<span>Sınıf:</span><span id="spryselect4">
						<select name="ogr_sinif" style="width: 349px" id="ogr_sinif">
						  <option selected="selected">Sınıfınız Seçiniz</option>
						  <option value="1-A">1-A</option>
						  <option value="1-B">1-B</option>
						  <option value="2-A">2-A</option>
						  <option value="2-B">2-B</option>
						  <option value="Altan">Diğer</option>
					    </select>
						</span></li>
                     <li>
						<span>Öğretim Türü</span><span id="spryselect3">
						<select name="ogr_ogretim" style="width: 349px" id="ogr_ogretim">
						  <option selected="selected">Öğretim Türünüz Seçiniz</option>
						  <option value="1">1.Öğretim</option>
						  <option value="2">2.Öğretim</option>
					    </select>
						</span></li>
					<li>
						<span><button type="submit" >Kayıt Ol</button></span>
					</li>
				</ul>
				
			</form>
		</div>
	
		<div style="float: left; width: 500px"><br/>
			 <ul>
			   <li>
			     <h1>Ilgın Meslek Yüksekokulu Staj Sistemi</h1>
		       </li>
	      </ul>
			 <br />
		  <p style="font-size:17px; font-stretch:expanded; color:#666";>Sisteme giriş yapabilmeniz için sağdaki panel aracılığı ile kayıt işlemini gerçekleştiriniz.</p>
            <p style="font-size:17px; font-stretch:expanded; color:#666">Gerçekleştirdiğiniz başvuru danışman onayına sunulacaktır.</p>
             <p style="font-size:17px; font-stretch:expanded; color:#666">Başvuru sahiplerine, &quot;danışman onayı&quot; e-posta ile bildirildikten sonra  sisteme giriş yapabilirler.</p>
          <p>&nbsp;</p>
			<div style="float: right; margin-right: -50px; margin-top: 20px"><img src="images/map.png" alt="" usemap="#Map" border="0"/>
              
			</div>
			<div id="login" style="margin-top: 30px">
				<h1 style="font-size: 20px">Öğrenci Giriş Paneli</h1>
				<form action="analiz.php" method="post">
					<ul>
					  T.C Kimlik No:
					  <li><span>
							<input type="text" name="ogr_tc" style="width: 250px" id="kullanci" maxlength="11"   /></span>
					  </li>
						<li>Öğrenci No:<span></span>
							<input type="password" name="ogr_no" style="width: 250px" id="sifre"  maxlength="9"  /></span>
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
    </body>
</html>