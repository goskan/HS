<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Değişkenler</title>
</head>
<body>
	<?php
   $degisken = "Kitap"; //İlk değişkenimiz kitap olsun. 

   $ad = "Çağatay Çalı"; //İsmimizi yazdıracağımız için bir değişkenimiz ad olsun.

   $degisken2 = 1996; //İkinci değişkenimiz sayısal bir değer olucak yaşımızı yazdıracağız.
   
   $degisken3 = " İzmir/Konak ";
	
   //Basit bir şekilde yazdırma işlemi gerçekleştirelim.
   
   echo " AD : $ad </br>"; // </br> kodu bir alt satıra geçmeyi sağlar.
   echo " $ad , $degisken2 $degisken3 doğumludur. </br> En sevdiği şey $degisken okumaktır " //Basit bir şekilde önyazı yazdık.
?>
<style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
<body background="arkaplan.jpg"></body>
<img src="degisken.jpg" alt="Değişkenler Ekran Görüntüsü">
<input type="button" value="Geri Dön" onclick="javascript: history.back();">
</body>
</html>

