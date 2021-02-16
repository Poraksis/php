<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
	header('Content-Type: application/json;charset:utf8');
    header('WWW-Authenticate: Basic realm="Giriş"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'İşlem iptal edildi';
    exit;
	}
try{

	$db = new PDO("mysql:host=localhost;charset=utf8","root","");

	}catch(PDOException $Hata){

	die("Hata:   <br>" . $Hata->getMessage());
	}


$denetim = $db->query("SELECT * FROM phplogin.accounts",PDO::FETCH_ASSOC);
if(null !== ($_SERVER['PHP_AUTH_PW'] && $_SERVER['PHP_AUTH_USER'])){
	$statu=false;
	foreach ($denetim as $kullanicilar) {
		
		if($_SERVER['PHP_AUTH_PW'] == $kullanicilar['password'] and $_SERVER['PHP_AUTH_USER'] == $kullanicilar['username']){
			$statu=true;
		}
	}
	
}else{
	die("Alan boş geçilemez");
}

if($statu==true){
	$istek = $db->query("SELECT * FROM blog.category",PDO::FETCH_ASSOC);
	$liste= array();
	foreach ($istek as $deger) {
		//print_r($deger);
		$sira    = $deger['id'];
		$kategori= $deger['kategoriadi'];
		$tarih   = $deger['tarih'];
		array_push($liste,[$sira,$kategori,$tarih]);
	}

	echo json_encode($liste,true);

}else{
	die();
}

