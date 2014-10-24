<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>İf-Else</title>
</head>
<body>
<?php
//Php maceramız İf-Else Kodları ile devam ediyor! Kodları dikkatle inceleyiniz.
//Yukarıdaki yazıları yazdırabilmek için tek tek uğraşmıyoruz.Notepad ++ kullananlar için Zen Coding eklentisini kurun ve sayfaya html:xt yazdıktan sonra ctrl-e kombinasyonu ile yazdırabilirsiniz.
 //Hemen yeni bir komut tanıyalım boş geçmesin :) Rasgele sayı vermesi için rand komutunu kullanırız. =>$rastgele = rand(0,10);
$islem = 4 * 12;  //basit bir çarpma işlemi yaptıralım.İleri derslerde kullanıcı girişli bir hesap makinesi tasarlıyacağız.Dikkatle inceleyiniz.
if ($islem == 48) 
echo "İşlem 4x12 sonuç 48!"
?>
<?php
//İkinci örneğimizde 
   
   $sayi_tut = 6;

   if ( $sayi_tut < 5 )
      echo "Sayım 5'den küçük!";
   elseif ( $sayi_tut > 5 )
      echo "Sayım 5'den büyük!";
   else
      echo "Sayım 5!";


//Sonucu görelim hadi :)
?>
<style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
<body background="arkaplan.jpg"></body>
<img src="if.jpg" alt="İF-ELSE Dünya Ekran Görüntüsü">
<input type="button" value="Geri Dön" onclick="javascript: history.back();">
</body>
</html>