<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Hesap Makinesi</title>
</head>
<body>
<form action="" method="post">
<ul>
<li>İlk sayı    <input type="text" name="birincisayi" value="Birinci Sayıyı Giriniz"></li> 
<li>İkinci sayı <input type="text" name="ikincisayi" value="İkinci Sayıyı Giriniz">  </li>
<select size="1" name="kod">
<option value="-1" selected="selected">Lütfen Seçin</option>
<option value="1">Toplama</option>
<option value="2">Çıkarma</option>
<option value="3">Çarpma</option>
<option value="4">Bölme</option>
<option value="5">Ortalama</option>
<li><input type="submit" name="Hesapla"></li>
</ul>
</form>
</select>
<?php
if(isset($_POST["Hesapla"])){     //İsset komutu kontrol komutudur.Okurken:Eğer hesapladan komut geldiyse aşağıdaki işlemi başlat anlamına gelir.
function islem($birincisayi,$ikincisayi,$kod){
switch($kod)    //işlemleri en iyi switch ile yapabiliyoruz.
{
case 1 : $sonuc=$birincisayi + $ikincisayi; break;
case 2 : $sonuc=$birincisayi - $ikincisayi; break;
case 3 : $sonuc=$birincisayi * $ikincisayi; break;
case 4 : $sonuc=$birincisayi / $ikincisayi; break;
case 5 : $sonuc=(($birincisayi + $ikincisayi)/ 2); break;
}
return $sonuc;  //sonuçları alacağımız kısımdır süslü parantezlere dikkat .
}
$s1=$_POST['birincisayi'];
$s2=$_POST['ikincisayi'];
$kod=$_POST['kod'];
echo islem($s1,$s2,$kod);
echo " ==> <strong>Cevabınız.";
}
?>
<br/>
<style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
<body background="arkaplan.jpg"></body>
<img src="hesap.jpg" alt="Hesap Makinesi Ekran Görüntüsü"><br/>
<input type="button" value="Geri Dön" onclick="javascript: history.back();">
</body>
</html>