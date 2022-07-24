<?php

$ogrenciler = array (
    array("adsoyad" => "Mehmet", "not1" => "60", "not2" => "70"),
    array("adsoyad" => "Ahmet", "not1" => "80", "not2" => "50"),
    array("adsoyad" => "Zeynep", "not1" => "40", "not2" => "50")
);

foreach($ogrenciler as $ogrenci){
    $ortalama = ($ogrenci["not1"] + $ogrenci["not2"])/2;
    if ($ortalama >=60) {
        $sonuc = "Geçti";
    } else {
        $sonuc = "Kaldı";
    }
    echo "Adı Soyadı: " . $ogrenci["adsoyad"] . "<br>";
    echo "Not 1: " . $ogrenci["not1"] . "<br>";
    echo "Not 2: " . $ogrenci["not2"] . "<br>";
    echo "Ortalama: " . $ortalama. "<br>";
    echo "Sonuc: " . $sonuc;
    echo "<br><hr><br>";
}

?>