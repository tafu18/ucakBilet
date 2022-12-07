<?php 
    include ("vtbaglan.php");
    if($_POST){

        $kalkis_zamani = $_POST['kalkis_zamani'];
        $varis_zamani= $_POST['varis_zamani'];
        $sehir = $_POST['sehir'];
        $Kullanici_adi = $_POST['Kullanici_adi'];
        $Koltuklar = $_POST['koltuklar'];
        $kalkis_tarihi = $_POST['kalkis_tarihi'];
        $kalkis_sehir = $_POST['kalkis_sehir'];
        $varis_sehir = $_POST['varis_sehir'];
        $kategori = $_POST['kategori'];
        $durum = $_POST['durum'];
        $ucret = $_POST['ucret'];
         
        $sonuc = mysqli_query($baglanti,"INSERT INTO `rezervasyon` (kalkış_zamanı, varış_zamanı, şehir, Kullanıcı_adı, Koltuklar, kalkış_tarihi, kalkış_şehir, varış_şehir, kategori, durum, ücret) VALUES ('$kalkis_zamani','$varis_zamani','$sehir','$Kullanici_adi','$Koltuklar','$kalkis_tarihi','$kalkis_sehir','$varis_sehir','$kategori','$durum','$ucret')");
                 
        if(!$sonuc) echo "Hata Mesajı: " . mysqli_error($baglanti);
        header("location: listele.php");
    }
    include ("vtkapat.php");
 ?>   
