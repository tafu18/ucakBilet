<?php
    include ("vtbaglan.php");

    $uçuş_no = $_GET["uçuş_no"];
         
    $sonuc = mysqli_query($baglanti,"DELETE FROM rezervasyon WHERE uçuş_no = $uçuş_no");
                 
    header("location: listele.php");
?>