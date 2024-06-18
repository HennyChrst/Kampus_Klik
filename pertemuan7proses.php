<?php
        
        include_once "./pertemuan10koneksi.php";

        //mengambil data inputan
        $nama_mhs = $_POST["nama"];
        $prodi_mhs = $_POST["prodi"];
        $perulangan = isset($_POST["ulangi"]) ? $_POST["ulangi"] : 0;
        $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : ''; 

        if ($jenis_kelamin === '') {
            die("<script>
                alert('Jenis kelamin tidak boleh kosong');
                window.location.href='pertemuan9.php';
            </script>");
        }

        $proses = mysqli_query($koneksi,"INSERT INTO mahasiswa (nama_mahasiswa, prodi, jenis_kelamin) VALUE ('$nama_mhs','$prodi_mhs','$jenis_kelamin') ")
        or die (mysqli_error($koneksi));

        if($proses){
            echo "
                <script>
                    alert('Data berhasil dismpan')
                    window.location.href='pertemuan9.php';
                </script>";
        }else echo "<script>
                    alert('Data gagal dismpan')
                    window.location.href='pertemuan9.php';
                </script>";

    if($nilai_mhs != "") {

        if( $nilai_mhs >= 85){
            $huruf_mutu = 'A';
        }else if($nilai_mhs >= 75){
            $huruf_mutu = 'B';
        }else if($nilai_mhs >= 65){
            $huruf_mutu = 'C';
        }else{
            $huruf_mutu = 'E';
        }

        for($x = 0; $x <= $perulangan;$x++) {
            echo $npm_mhs."Nilai mata kuliah anda adalah : ".$huruf_mutu."<br>";

        }

    }  
        
?>