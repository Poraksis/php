<?php

/*

var_export()  : Herhangi bir veri ile ilgili detaylı çıktı sağlar bilmediğimiz kütüphaneleri daha iyi anlamak için kullanılabilir.

*/

$liste=array("meslek"=>"öğrenci","yaş"=>"15","cinsiyet"=>"erkek","isim"=>"onur");
$degisken= "Onur";
$_SESSION["Kullanıcı"]  = "Cw";


/**
 * 
 */
class ClassName
{
	public $deger = "Sınıf özelliği";
	
	function __construct()
	{
		return "yapıcı";
	}
	public function method(){
		$veri1=45;
		return $veri1 . "cavap";
	}
}

$sinif = new ClassName;
var_export($sinif->deger);
var_export($sinif->method());
var_export($sinif);
