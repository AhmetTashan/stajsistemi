<h1> Staj1 Güncellem Formu</h1>
<?php 
$sorgus=mysql_query("Select * From staj Where ogr_tc=$ogr_tc and staj_turu=1 and is_onay='b'");
	  while($satirl = mysql_fetch_array($sorgus))
     {
		
		 
	
		 
		 ?>
<form  method="post" id="registerForm"  action="islem.php?islem=gun1">
				<ul>
					<ul>
                    <li><span>Staj Başlangıç Tarih :</span>
					    <input name="sbt" type="text" style="width: 335px"  id="datepicker" value="<?php echo $satirl[6]; ?>" />
				      </li>
                      <li><span>Staj Bittiş Tarih :</span>
					    <input name="sbtt" type="text" id="tarih"style="width: 335px" value="<?php echo $satirl[7]; ?> " />
				      </li>
					  <li><span>Staj Yapılacak Kurum :</span>
					    <input name="syk" type="text" id="tc_no"style="width: 335px" value="<?php echo $satirl[2]; ?> " />
				      </li>
					  <li><span>Kurum Yetkilisi:</span>
					    <span>
				        <input name="ky" type="text" id="ogr_no"style="width: 335px" value="<?php echo $satirl[8]; ?> " /></span>
				      </li>
					  <li><span>Kurum Telfon:</span>
					    <span>
					    <input name="kt" type="text" id="kt" style="width: 335px" value="<?php echo $satirl[4]; ?> " /></span>
					    <ul>
					      <li><span>Kurum Yetkili E-posta:</span>
					        <span>
				            <input name="kye" type="text" id="kye" style="width: 335px" value="<?php echo $satirl[5]; ?> " /></span>
					        
				          </li>
				        </ul>
				      </li>
				  </ul>
                    <li>
						<span>Kurum Adres:</span>
					  <span>
					  <textarea name="ka" id="ka" style="width: 335px; height:80px;"  ><?php echo $satirl[3]; ?> </textarea>
					  </span>
				      <input type="hidden" name="ogr_tc" id="ogr_tc" value="<?php echo $ogr_tc;?>" />
                  </li>
                  <li><span><button type="submit">Güncelle</button></span></li>
  </ul>
				
</form>
<?php }?>