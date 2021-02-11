<?php
	$Uye=array("Onur","12345");
	if (isset($_POST['p'])){
		$sifre=$_POST['p'];
		$isim=$_POST['u'];
		if ($sifre==$Uye[1] && $isim==$Uye[0]){
			header('Location: user.php'); exit; 
		}else{echo "Yönlendirme başarısız";}
	}
	else{
		
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Deneme</title>
</head>
<body>
	

<div class="login">
  <h1>Login</h1>
    <form method="post">
      <input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Giriş</button>
    </form>
</div>


</body>
</html>




