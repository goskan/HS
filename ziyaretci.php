<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Ziyaretci Defteri</title>
</head>
<body>
	<form method="post" action="">
        <ul><li>Adı Soyadı<input name="adsoyad" type="text"><br/></li>
            <li>Mail      <input name="mail" type="text"><br/></li>
            <li>Mesajınız:<textarea rows="3" cols="20" name="mesaj"></textarea><li>
            <input type="submit" value="Gönder" /><br /></ul>

    </form><br />
    <style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
    <body background="arkaplan.jpg"></body>
    <?php
    include ("mesajlar.txt");
    $adsoyad = $_POST["adsoyad"];
    $mail = $_POST["mail"];
    $mesaj = $_POST["mesaj"];
    $buton = $_POST["gonder"];
    if($adsoyad=="" or $mesaj=="" or $mail=="") {
        die( "<b>Ad Soyad, Mesaj ve E-Mail alanlarını boş bırakmayınız!</b><br><a href=index.php>Anasayfa</a>");
    }
    echo '<b>Mesajınız eklendi.</b><br><br><input type="button" value="Geri Dön" onclick="javascript: history.back();">';
    $dbdosya = "mesajlar.txt";
    $dosya = fopen ($dbdosya, 'a+') or die ("<b>Veritabanı dosyası açılamadı!</b><br><a href=index.php>Anasayfa</a>");
    $tarih = date("Y-m-d");
    $goster = "<b>Tarih:</b> ".$tarih."<br><b>Yazan:</b> $adsoyad<br><b>E-Mail:</b> <a href=mailto:".$mail.">$mail</a><br><b>Mesajı: </b>$mesaj<br><hr>";
    fwrite ($dosya, $goster) ;
    fclose ($dosya);
    ?>
    <style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
    <body background="arkaplan.jpg"></body>
    <input type="button" value="Geri Dön" onclick=": history.back();">
</body>
</html>