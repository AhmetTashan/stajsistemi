<?php 
function backup_tables($host,$user,$pass,$name,$tables = '*')
{
	
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($name,$link);
	
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$result = mysql_query('SHOW TABLES');
		while($row = mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//cycle through
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		
		$return.= 'DROP TABLE '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	//save file
	$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);
}

echo '<div id="menu">
   <div id="ekle">
      <div id="ic_logo"><a href="anasayfa.php"><img src="images/ana.png" width="29" height="27" alt="d_ekle" /></a></div>
      <div id="ekle_yazi"><a href="anasayfa.php"> Anasayfa </a></div>
         </div>
		 
    <div id="ekle">
      <div id="ic_logo"><a href="danismanlar.php"><img src="images/ekle.png" width="29" height="34" alt="d_ekle" /></a></div>
      <div id="ekle_yazi"><a href="danismanlar.php"> Danışman İşlemleri </a></div>
         </div>
          		 
		 <div id="ekle">
      <div id="ic_logo"><a href="bolumler.php"><img src="images/bolum.png" width="29" height="34" alt="d_ekle" /></a></div>
      <div id="ekle_yazi"><a href="bolumler.php"> Bölümler İşlemleri </a></div>
         </div>
        
		 
		  <div id="ekle">
      <div id="ekle_yazi"><a href="sistem.php"> Sistem İşlemleri</a></div>
         </div>
		
		 
         <div id="kullanci_bil"> <div id="kullanci_resim"> <a href="#"><img src="images/k_resim.png" width="29" height="34" alt="d_ekle" /></a></div><div id="kullanci_adi"><a href="cikis.php">Çıkış</a> </div>
         
                  <div id="kullanci_adi"><a href="#">Ümit Albayrak</a> </div>
         </div>
    
  </div>';


?>