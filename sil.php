<?php
	include ("baslik.php");

	include ("vtbaglan.php");
?>

<?php
    $sec=mysqli_query($baglanti,"SELECT * from rezervasyon  ORDER BY uçuş_no ASC");
    
    echo '<center><table style="background: aliceblue;" border="1" cellpadding="0" cellspacing="0"><tr style="background: #f57c31; color: white;">';
    echo "<th>Uçuş No</th><th>Kalkış Zamanı</th><th>Varış Zamanı</th><th>Şehir</th><th>Kullanıcı Adı</th><th>Koltuklar</th><th>Kalkış Tarihi</th><th>Kalkış Şehir</th><th>Varış Şehir</th><th>Kategori</th><th>Durum</th><th>Ücret</th><th>Sil</th>";
    while($dizi=mysqli_fetch_array($sec))
    {
        echo ("<tr> <td style='background: #f57c31; color: white;'>$dizi[0]</td> <td>$dizi[1]</td> <td>$dizi[2]</td> <td>$dizi[3]</td>");
        echo ("<td>$dizi[4]</td> <td>$dizi[5]</td><td>$dizi[6]</td><td>$dizi[7]</td><td>$dizi[8]</td><td>$dizi[9]</td><td>$dizi[10]</td><td>$dizi[11]</td><td><a href='verisil.php?uçuş_no=$dizi[0]'> X </a></td></tr>");
    }
    echo "</table>";
    $say=mysqli_num_rows($sec);
    echo "<br>Toplam yolcu  Sayınız : ". $say . "<center>";
?>
