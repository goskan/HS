<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Form İşlemleri</title>
</head>
<body>
<form action="" method="post"> 
<ul>
<li>Adınız    <input type="text" name="ad" value="Çağatay Çalı"></li> 
<li>Yaşınız   <input type="text" name="yas" value="17"></li>
<select size="1" name="kod">
<option value="-1" selected="selected">Lütfen Seçin</option>
<option value="1">Erkek</option>
<option value="2">Bayan</option>
</select>
<input type="submit" name="Gonder">
<?php
if(isset($_POST['ad']) && isset($_POST['yas'])) {
$isim=$_POST['ad'];
$yasi=$_POST['yas'];
$kodcumuz=$_POST['kod'];
 /*Hadi birkaç bilgimizi pekiştirelim. eğer bu veriler girilmişse POST ile gelen verileri işleyelim dedik ve yeni değişkenlere atadık.
 Gelen yeni bilgilerimizide değişkenlere atadıktan sonra gönül rahatlığıyla yazdırmaya başlayabiliriz..*/

echo $isim,$yasi;
// Oda ne? kodcumuz seçenekli olduğu için sonuç numerik çıkıyor.Fakat 1-2 bizim için birşey ifade etmiyor.Bu 1-2 leri dilimize uyarlamalıyız.Bunuda aşağıda yaptık iyice inceleyin.
if($kodcumuz="1"){
echo "Erkektir.";
if(!$kodcumuz="1")
echo "Bayandır";
}
}
?>
<style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
<img src="form1.jpg" alt="Form Örneği1 Ekran Görüntüsü"><br/>
<body background="arkaplan.jpg"></body>
<input type="button" value="Geri Dön" onclick="history.back();">
</body>
</html>