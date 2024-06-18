<?php
    //membuat variabel
    $nama_mahasiswa = "Henny Christine";
    $nama_kamu = "Richard";
    $pekerjaaan = "Ibu rumah tangga";

    if($nama_mahasiswa == "Henny Christine"){
        if($pekerjaaan == "Aktris"){
            $jenis_kelamin = "Perempuan";
            $penghasilan_perbulan = 10000000;
        }else{
            $jenis_kelamin = "Perempuan";
            $penghasilan_perbulan = 20000000;
        }
            
    }else if($nama_kamu == "Richard"){
        $jenis_kelamin = "Laki-laki";
    }else{
        $jenis_kelamin = "??";
    }

    echo "Hallo ".$nama_mahasiswa." Selamat <br> datang, saya ".$nama_kamu."
            jenis kelamin kamu adalah ".$jenis_kelamin." penghasilan anda ".$penghasilan_perbulan;


?>

<html>
    <head>
        <title>pertemuan5</title>
    </head>

    <body>
        <br>
        Hai, kenalin aku Hennyy...
    </body>
</html>