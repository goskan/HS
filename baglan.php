<?php
   // Bağlantıyı sağlarız.
   $baglanti = mysql_connect( "calicagatay.com", "ni350030_3sql1", "kalkandere" );

   if ( !$baglanti )
	exit( "Bağlantı sağlanamadı." );

   // Bağlandıktan sonra işlem yapılacak DB adı: veritabanim.
   mysql_select_db( "ni350030_3sql1" );
   echo "<strong>Bağlantı başarılı.";
   // Bağlantıyı kesiyoruz.Burada html ve body kodlarına ihtiyacımız yok çünkü mysql.php dosyasına include() ile aktaracağız.
   mysql_close();
    ?>
	
