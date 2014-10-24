<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Dosya İşlemleri</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<?php
$dosya = "benioku.txt";
if(file_exists($dosya))
{
    echo "Klasör var.";
}
else
{
    echo "Klasör yok.";
}
$dosya=fopen($dosya,"a");
$veri_yazdir="deneme123 ";
fwrite($dosya, $veri_yazdir);
echo "veri yazdırıldı.";
fclose($dosya);
?>
    <iframe src="veriyazdirma.php" frameborder="0" width="700" height="700" scrolling="no"></iframe>
<body background="arkaplan.jpg"></body>
<style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
<input type="button" value="Geri Dön" onclick="history.back();">
<body>
</html>
