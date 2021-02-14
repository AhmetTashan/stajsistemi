<h1>Bilgilerin</h1>
<form  method="post" id="registerForm"  action="islem.php?islem=ogr_e">
				<ul>
					<ul>
					  <li><span>Tc No:</span>
					    <input name="tc_no" type="text" disabled="disabled" id="tc_no"  value="<?php echo $ogr_tc;?>" style="width:335px; background-color:#f1f1f0;"  />
				      </li>
					  <li><span>Öğrenci No:</span>
					    <span>
				        <input name="ogr_no" type="text" disabled="disabled" id="ogr_no"  value="<?php echo $ogr_no;?>" style="width: 335px; background-color:#f1f1f0; " /></span>
				      </li>
					  <li><span>Ad Soyad:</span>
					    <span><input name="ogr_adi" type="text" disabled="disabled" id="ogr_adi" value="<?php echo $ogr_adi;?>" style="width: 335px; background-color:#f1f1f0; " /></span>
					    <ul>
					      <li><span>Tel No:</span>
					        <span>
				            <input name="ogr_tel" type="text" disabled="disabled" id="ogr_tel" value="<?php echo $ogr_tel;?>" style="width: 335px; background-color:#f1f1f0;" /></span>
					        
				          </li>
				        </ul>
				      </li>
				  </ul>
                    <li>
						<span>E-Posta:</span>
						<span><input name="ogr_posta" type="text" disabled="disabled" id="ogr_posta" value="<?php echo $ogr_e_pos;?>" style="width: 335px; background-color:#f1f1f0;" /></span>
					</li>
                  <li></li>
				</ul>
				
			</form>