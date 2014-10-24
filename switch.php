<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Switch</title>
</head>
<body>
	<?php
   $araba = "Mercedes";

   switch( $araba )
   {
      case "Mercedes":
         echo "Bu araba Mercedes!";
         break;
      case "BMW":
         echo "Bu araba BMW!";
         break;
      default:
         echo "Bu model veritabanımızda bulunmamakta .. :/ )";
   }
?>
<style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
<body background="arkaplan.jpg"></body>
<img src="switch.jpg" alt="Switch Ekran Görüntüsü">
<input type="button" value="Geri Dön" onclick="javascript: history.back();">
</body>
</html>


