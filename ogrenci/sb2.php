<h1> Staj2 Başvurusu Formu</h1>
<form  method="post" id="registerForm"  action="islem.php?islem=sb2">
				<ul>
					<ul>
                    <li><span>Staj Başlangıç Tarih :</span>
					    <input name="sbt" type="text" style="width: 335px"  id="datepicker" />
				      </li>
                      <li><span>Staj Bittiş Tarih :</span>
					    <input name="sbtt" type="text" id="tarih"style="width: 335px" />
				      </li>
					  <li><span>Staj Yapılacak Kurum :</span>
					    <input name="syk" type="text" id="tc_no"style="width: 335px" />
				      </li>
					  <li><span>Kurum Yetkilisi:</span>
					    <span>
				        <input name="ky" type="text" id="ogr_no"style="width: 335px" /></span>
				      </li>
					  <li><span>Kurum Telfon:</span>
					    <span>
					    <input name="kt" type="text" id="kt" style="width: 335px" /></span>
					    <ul>
					      <li><span>Kurum Yetkili E-posta:</span>
					        <span>
				            <input name="kye" type="text" id="kye" style="width: 335px" /></span>
					        
				          </li>
				        </ul>
				      </li>
				  </ul>
                    <li>
						<span>Kurum Adres:</span>
					  <span>
					  <textarea name="ka" id="ka" style="width: 335px; height:80px;"></textarea>
					  </span>
				      <input type="hidden" name="ogr_tc" id="ogr_tc" value="<?php echo $ogr_tc;?>" />
                  </li>
                  <li><span><button type="submit">Başvur</button></span></li>
  </ul>
				
</form>