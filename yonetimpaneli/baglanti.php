<?php
include_once(SINIF."VT.php");
$VT=new VT();
$sitebilgileri=$VT->VeriGetir("ayarlar","WHERE ID=?",array(1),"ORDER BY ID ASC",1);

if($sitebilgileri!=false){
$sitebaslik=stripcslashes($sitebilgileri[0]["baslik"]);
$siteanahtar=stripcslashes($sitebilgileri[0]["anahtar"]);
$sitedescription=stripcslashes($sitebilgileri[0]["aciklama"]);
$siteurl=stripcslashes($sitebilgileri[0]["url"]);
$sitetelefon=stripcslashes($sitebilgileri[0]["telefon"]);
$siteadres=stripcslashes($sitebilgileri[0]["adres"]);
$sitemail=stripcslashes($sitebilgileri[0]["mail"]);



}
else
{
	echo "Lütfen bağlantı bilgilerinizi kontrol edinizi.";
	exit();
}
?>