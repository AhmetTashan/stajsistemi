<?php
ob_start(); 
system("ipconfig /all"); 
 $cominfo=ob_get_contents(); 
ob_clean(); 
$search = "Physical";
$primarymac = strpos($cominfo, $search); 
$mac=substr($cominfo,($primarymac+36),17);//MAC Address
echo $mac;
?>