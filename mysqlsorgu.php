<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Mysql Sorgulama</title>
</head>
<body>
<form action "" method="post">
<input type="text" name="host" value="Host">
<input type="text" name="kullaniciadi" value="Kullanıcı adı">
<input type="text" name="sifre" value="sifre">
<input type="text" name="db" value="VeriTabanı adı">
<input type="submit" name="gonder">
<?php
if(isset($_POST['gonder'])){
$s1=$_POST['host'];
$s2=$_POST['kullaniciadi'];
$s3=$_POST['sifre'];
$s4=$_POST['db'];

$baglanti = mysql_connect( "$s1", "$s2", "$s3" );
   if ( !$baglanti )
	exit( "Bağlantı sağlanamadı." );

   mysql_select_db( "$s4" );
   echo "<strong>Bağlantı başarılı.";
   mysql_close();
}
?>
<input type="button" value="Geri Dön" onclick="javascript: history.back();">
<style> body, a, a:hover { cursor:url('http://s3.postimg.org/olhgjevdb/icon.png'), auto }</style>
<img src="mysqlsorgu.jpg" alt="mySQL Bağlanma Ekran Görüntüsü">
<body background="arkaplan.jpg"></body>
</body>
</html>