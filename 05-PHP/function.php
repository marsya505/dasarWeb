<?php

function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Marsya","Hallo");

echo "<hr>";

$saya = "Zulfa";
$ucapanSalam = "Selamat Pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);

?>