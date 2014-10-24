<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Vergi Hesapla Otomasyon</title>
</head>
<body>
<form action "" method="post">
Miktar <input type="text" name="giris" value="5000">
<input type="submit" name="gonder"></form>
<?php
if(isset($_POST["giris"])) {
function vergimiktari($miktar){
$vergidusulmus=(($miktar/100)*20);
return $vergidusulmus;
}
echo "$giris Tl paranın içindeki vergi :";
echo vergimiktari($_POST["giris"]);
echo "TL'dir.";
}
?>
<input type="button" value="Geri Dön" onclick="javascript: history.back();">
<style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
<img src="otovergi.jpg" alt="Vergi Otomasyon Ekran Görüntüsü">
<body background="arkaplan.jpg"></body>
</body>
</html>