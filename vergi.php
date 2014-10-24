<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css.css" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Vergiyi Düş</title>
</head>
<body>
<?php
$kazanc=3500;
function vergimiktarı($vergidüsülmüs){
$vergidüsülmüs=(($vergidüsülmüs/100)*20);   //Function kullanımına güzel bir örnektir.Php Operatörlerine güzel bir örnektir.
return $vergidüsülmüs;
}
echo "$kazanc Tl paranın içindeki vergi :</br>";
echo vergimiktarı($kazanc);
echo "TL'dir."


?><li>
<style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
<img src="vergi.jpg" alt="Vergi Miktarı Hesaplayan Kodun Ekran Görüntüsü">
	<body background="arkaplan.jpg"></body>
	<input type="button" value="Geri Dön" onclick="javascript: history.back();">
</body>
</html>