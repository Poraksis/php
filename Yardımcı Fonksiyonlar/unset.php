<?php

/*

unset() aldığı değişkeni listeyi(veya içindeki elemanı) session(oturumu)ı silme özelliğine sahiptir.Silmek istediğin değer birden fazla ise virgülle ayırabilirsin.

*/

$liste=array("meslek"=>"öğrenci","yaş"=>"15","cinsiyet"=>"erkek","isim"=>"onur");
$degisken= "Onur";
$_SESSION["Kullanıcı"]  = "Cw";

echo $degisken;
echo $_SESSION["Kullanıcı"];
print_r($liste);


unset($degisken,$liste["meslek"],$_SESSION["Kullanıcı"]);
print_r($liste);
unset($liste);
print_r($liste);
echo $degisken;
echo $_SESSION["Kullanıcı"];

?>
