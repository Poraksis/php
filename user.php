
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Deneme</title>
</head>
<body>

<?php
if (isset($_FILES['dosya'])){
	$dosya=$_FILES['dosya'];
	$dosyatmp=$_FILES['dosya']['tmp_name'];
	$dosyaname=$_FILES['dosya']['name'];
	$yol ="a/".$dosyaname;
	move_uploaded_file($dosyatmp, "a/".$dosyaname);

	echo "<img src='{$yol}'>";
	}else{}

?>


<div>
	<form method="post" enctype="multipart/form-data">
      <input type="file" name="dosya" required="required" />
       
       <button type="submit" class="btn btn-primary btn-block btn-large">Dosya yükle</button>
    </form>

</div>



</body>
</html>
