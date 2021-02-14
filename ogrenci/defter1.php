<div class="form" style="float: right; width: 600px; padding-left: 10px">
	    <table width="610" border="0" cellspacing="10">
	      <tr>
	        <td colspan="3"><h1>&nbsp;</h1></td>
          </tr>
	      <tr>
	        <td colspan="3"><h3>Staj Defteriniz Aşağıdakiler sıraya göre tek bir PDF döküman haline getirilerek sisteme yükleyiniz. </h3>
            <p>&nbsp;</p>
            <p>1-Staj Defteri ilk sayfası </p>
            <p>2-Staj Defteri Normal sayfalar en az 30 adte tam dolu sayfa olacak </p>
            <p>3-İş yeri devam çizgiseli </p></td>
          </tr>
	      <tr>
	        <td colspan="3"><h2>
	          <label for="dosya"></label>
	        Dosya Yükleme Merkezi</h2></td>
          </tr>
	      <tr>
	        <td width="266"><h4>
            
            
	        </h4></td>
          </tr>
	      <tr><form action="anasayfa.php?icerik=defter1" method="post" enctype="multipart/form-data">
	        <td><input type="file" name="dosya" id="dosya"  /></td>
	        <td>&nbsp;</td>
	        <td width="300"><a href="formlar1/form1.php" target="_blank">
	          <input type="submit" name="button" id="button" value="Defteri Yükle" class="btnd"  style=" height:30px;"/>
	        </a></td></form>
          </tr>
	      <tr>
	        <td colspan="3"><ul>
	          <?php 
			
			 if($_POST)
			 {
				 
             $gelen=$_FILES["dosya"]['tmp_name'];
			 $uzun=strlen($_FILES["dosya"]['name']);
			
			
				if(!empty($gelen))
				{
				 
				 if(is_uploaded_file($gelen))
				 {      if($boyut <(1024*1024*1)){
					 $hedef="dosya1/".$ogr_no.".docx";
   				  move_uploaded_file($gelen,$hedef);
				  
				  mysql_query("UPDATE staj SET dosya='$hedef' Where ogr_tc='$ogr_tc' and staj_turu='1'");
				  
				   	echo "Defteriz Yüklendi";  
				  } 
				  else
				  {
					echo "Defteriniz 1 MB Büyük Olamaz";  
				  }
				 } 
				 else 
				 {
			      echo "Dosya Yüklenmedi";
				  }   
				 
 
				}
				else
				{
				echo "Dosya Yükleme Başarşız";	
			   }}

			
			?></td>
          </tr>
        </table>
	  </div>