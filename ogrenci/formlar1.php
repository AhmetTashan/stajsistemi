<div class="form" style="float: right; width: 600px; padding-left: 10px">
          <?php 
           if($durumdefter==0)
		   {
		   echo '<script>
		   var degerler="olstur="+1;
		   $.ajax({	
		   type:"post",
	       url:"staj1/formlar.php",
	       data:degerler,
	     
		 } )
		   </script>';
           
		   }
		   if($durumdefter==1)
		   {
          echo ' <script>
		   var degerler="olstur="+1;
		   $.ajax({	
		   type:"post",
	       url:"staj1/defter.php",
	       data:degerler,
	        
		 } )
		   </script>';
		   }
          ?>
           
	    <table width="610" border="0" cellspacing="10">
		<?php 
		if($durumdefter==1)
		   {
		echo'
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
	        <td width="414"><h4>Açiklama</h4></td>
	        <td width="-1">&nbsp;</td>
          </tr>
	      <tr>
	        <td>Forum 1 </td>
	        <td><ul>
	          <li>Tarih ve imzanızı atmayı unutmayınız </li>
	        </ul></td>
	        <td>&nbsp;</td>
          </tr>
	      <tr>
	        <td>Forum 2</td>
	        <td>Staj Yapcağınız iş yerine mühürletip imza atırmayı unutmayınız.</td>
	        <td>&nbsp;</td>
          </tr>
	      <tr>
	        <td>Forum 3</td>
	        <td><ul>
	          <li>Diğer Formlarla Beraber danışmanıza teslim etmeyi unutmayınız. Bu Forumdan 2 Adet Çıktı alınız.</li>
            </ul></td>
	        <td>&nbsp;</td>
          </tr>
	      <tr>
	        <td>&nbsp;</td>
	        <td><a href="staj1/'.$ogr_no.'.docx" target="_blank" class="btnd">Formlar İndir</a></td>
	        <td>&nbsp;</td>
          </tr>';
		  ?>
          <?php
		   }
          if($durumdefter==0)
		   {
	     echo ' <tr>
	        <td colspan="3"><h2>Staj Başvurusu Sırasında Teslim Edilecek Formlar</h2></td>
          </tr>
	      <tr>
	        <td><h4>Formun Adi</h4></td>
	        <td><h4>Açiklama</h4></td>
	        <td>&nbsp;</td>
          </tr>
	      <tr>
	        <td>Staj Defter Kapağı</td>
	        <td>Staj Defteri kapağınızı A3 boyutunda karton çıktı alıp tüm çıktıları sırasıyla içersine yerleştirek ciltlemeyi unutmayınız.</td>
	        <td>&nbsp;</td>
          </tr>
	      <tr>
	        <td>Staj Defter İlk Sayfası</td>
	        <td>İlgili Alana vesikalık fotoğrafınız yapıştırmayı unutmayınız.</td>
	        <td>&nbsp;</td>
          </tr>
	      <tr>
	        <td>Staj Defter Normal Sayfası</td>
	        <td>Staj yaptığınız her bir gün için en az 1(bir) adet çıktı alıp doldurmayı unutmayınız.</td>
	        <td>&nbsp;</td>
          </tr>
	      <tr>
	        <td>İş Yeri Devam Çizgiseli</td>
	        <td>Staj Yaptığınız her bir iş günü için iş adalarını tarihleri doldurup yetkiliye imzalatımayı unutmayınız.</td>
	        <td>&nbsp;</td>
          </tr>
	      <tr>
	        <td>İş Veren Raporu </td>
	        <td>Staj Yaptığınız yerdeki yetkili kişi tarafında doldurulup sizin göremeyceğiniz şekilde zarfa içersine konularak defterinizle birlikte kargoya veriniz</td>
	        <td>&nbsp;</td>
          </tr>
	      <tr>
	        <td>&nbsp;</td>
	        <td><a href="staj1/d'.$ogr_no.'.docx" target="_blank" class="btnd">Defter İndir</a></td>
	        <td>&nbsp;</td>
          </tr>';
		   }
		  ?>
        </table>
      
	  </div>