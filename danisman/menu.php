<?php 
 while($satirdb = mysql_fetch_array($dent))
    {
			
	$dan_adi=$satirdb[1];
		
    }
echo 	"<div id='cssmenu'>
<ul>
   <li ><a href='anasayfa.php'><span>Anasayfa</span></a></li>
   <li><a href='onaybekliyen.php'><span>Onay Bekliyenler </span></a></li>
   <li class='has-sub'><a href='#'><span>Staj1 İşlemleri</span></a>
      

   
      <ul>
         <li><a href='staj1.php'><span>Staj Başvuru Onay/Red İşlemleri</span></a></li>
         <li><a href='rapor1.php'><span>Staj Yeri Başvuru Listesi İşlemleri</span></a></li>
         <li class='last'><a href='not.php'><span>Staj Not Giriş İşlemleri</span></a></li>
		 <li class='last'><a href='rapors.php'><span>Staj Not Listesi İşlemleri</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Staj2 İşlemleri</span></a>
      <ul>
         <li><a href='#'><span>Staj Başvuru Onay/Red İşlemleri</span></a></li>
         <li><a href='#'><span>Staj Yeri Başvuru Listesi İşlemleri</span></a></li>
         <li class='last'><a href='#'><span>Staj Not Giriş İşlemleri</span></a></li>
		  <li class='last'><a href='#'><span>Staj Not Listesi İşlemleri</span></a></li>

      </ul>
   </li>
  
   <li class='has-sub'><a href='toplumsj.php'><span>Toplu Mesaj Gönderme</span></a>
   <li><a href='kullanci.php'><span>Kullanıcı  İşlemleri</span></a></li>
   <li class='active'><a  href='#'><span> Danışman: <font size='2'>$dan_adi</font></span></a></li>
   <li class='last'><a href='cikis.php'><span>Çıkış</span></a></li>
   
</ul>
</div>";


?>