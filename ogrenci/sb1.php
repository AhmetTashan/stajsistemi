

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script>



</script>

<h1> Staj1 Başvurusu Formu</h1>
<form  method="post" id="registerForm"  action="islem.php?islem=sb1">
				<ul>
					<ul>
                    <li><span>Staj Başlangıç Tarihi :</span><span id="sprytextfield1">
                      <input name="sbt" type="text" style="width: 335px"  id="datepicker"/>
                      </span></li>
                      <li><span>Staj Bittiş Tarihi :</span><span id="sprytextfield2">
                        <input name="sbtt" type="text" id="tarih" style="width: 335px" />
                      </span></li>
					  <li><span>Staj Yapılacak Kurum :</span><span id="sprytextfield3">
					    <input name="syk" type="text" id="tc_no"style="width: 335px" />
				      </span></li>
					  <li><span>Kurum Yetkilisi:</span><span id="sprytextfield4">
					    <input name="ky" type="text" id="ogr_no"style="width: 335px" />
				      </span></li>
					  <li><span>Kurum Telefon:</span><span id="sprytextfield5">
					    <input name="kt" type="text" id="kt" style="width: 335px" maxlength="11" />
					    </span>
					    <ul>
					      <li><span>Kurum Yetkili E-posta:</span><span id="sprytextfield6">
					        <input name="kye" type="text" id="kye" style="width: 335px" />
				          </span></li>
				        </ul>
				      </li>
				  </ul>
                    <li>
						<span>Kurum Adres:</span><span id="sprytextarea1">
						<textarea name="ka" id="ka" style="width: 335px; height:80px;"></textarea>
						</span>
						<input type="hidden" name="ogr_tc" id="ogr_tc" value="<?php echo $ogr_tc;?>" />
                  </li>
                  <li>
                  <span>İliniz</span>
                  <input name="gil" type="hidden" id="gil" value="" />
                  <label for="il"></label>
                  <span id="spryselect1">
                  <select name="il" size="1" id="il" style="width: 335px;" onchange="listela();">
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
                   <span> İlçe </span><span id="spryselect2">
                   <select name="ilce" id="ilce" style="width: 335px;">
                   </select>
                   </span></li>
                  <li><span><button type="submit">Başvur</button></span></li>
  </ul>
				
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
</script>
