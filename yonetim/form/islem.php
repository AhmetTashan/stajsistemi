<?php
session_start();
$toplabunlari = $_POST["kontrol"];
if($toplabunlari == $_SESSION["toplamasorusu"]) {
echo "başarılı";
} else {
echo "işlem yanlış";	
}
?>