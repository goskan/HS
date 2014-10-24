<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Denizli Hackerspace</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="styles.css" />
<style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
</head>
<body>
<div id="container">
<div id="header"><h1><a href="index.php"></a></h1></div>
  <div id="wrapper">
    <div id="content">
      <p><strong>Denizli HackerSpace </strong></p>
      <p>Sağ taraftaki menüden sırasıyla çalışmalara erişebilir;kodları inceleyebilir ve kullanabilirsiniz.</p>
    </div>
  </div>
  <div id="navigation">
    <p><strong>Araç çubuğu</strong></p>
    <ul>
      <li><a href="index.php?">Anasayfa</a></li>
        <li><a href="kurulum.php?">Php & MySQL Kurulum</a></li>
      <li><a href="merhaba.php">Merhaba Dünya</a></li>
	  <li><a href="degiskenler.php">Değişkenler</a></li>
	  <li><a href="op.php?">Php Operatörleri</a></li>
	  <li><a href="if.php?">İf-Else</a></li>
	  <li><a href="switch.php?">Switch</a></li>
	  <li><a href="vergi.php?">Vergi Miktari</a></li>
	  <li><a href="hesap.php?">Hesap Makinesi</a></li>
	  <li><a href="mysql.php?">MySQL İşlemleri</a></li>
	  <li><a href="form.php?">Form İşlemleri</a></li>
	  <li><a href="vergioto.php?">Vergi Hesapla</a></li>
	  <li><a href="mysqlsorgu.php?">MySQL Sorgu</a></li>
      <li><a href="dosya.php?">Dosya İşlemleri</a></li>
      <li><a href="ziyaretci.php?">Ziyaretci Defteri</a></li>
    </ul>
  </div>
  <div id="extra">
    <p><strong>HackerSpace Nedir:</strong></p>
    <p>Hackerspace; elektronik, bilgisayar, teknoloji, internet, diy ve benzeri konulara ilgi duyan insanlar için; beraber çalışabilecekleri ve etkinlikler düzenleyebilecekleri bir sosyal ortam, projelerini veya çalışmalarını yürütebilecekleri bir atölyedir. Sadece bir mekandan ziyade el birliği ile toplanan teknik imkanlar bulunabilen bir yer. Birçok ülkede hackerspaceler bulunuyor; daha fazla bilgi: <a href="http://en.wikipedia.org/wiki/Hackerspace">WİKİ.</a></p>
  </div>
  <div id="extra">
    <p><strong>Kod arşivi:</strong><p>
    <p>Sitenin bütün kodlarını içeren arşivdir.Umarım benim gibi yeni başlayanlara yol gösterici olur..<h2><a href="https://yadi.sk/d/OwCSEOO4bXYCA"><u>Kod arşivi</u></a></h2><img src="hs.jpg" alt="HackerSpace"><br/></p><?php

      $son_degisiklik = getlastmod();

      $goster = date("d.m.Y - g:i", $son_degisiklik);

      echo "Sayfanın en son değiştirilme tarihi: ".$goster."<br>";
      echo $_SERVER['HTTP_USER_AGENT'];
      ?>
</div>
<div id="footer">
    <p><a href="http://denizlihs.org/">HackerSpace Anasayfa</a>||<a href="http://www.calicagatay.com/">Çağatay Çalı</a><?php
        echo date("d/m/Y G:i:s");
        ?></p>
</div>
</div>

<body background="arkaplan.jpg"></body>
</body>
</html>
