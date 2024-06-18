<?php
    
    include "pertemuan10koneksi.php";

    $npm = isset($_GET['id']) ? $_GET['id'] : '';
    $apakah_proses = isset($_GET['proses']) ? $_GET['proses'] : ''; 
    
    $proses_ambil = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id = '".$npm."'") 
                            or die (mysqli_error($koneksi));
                    
    if($apakah_proses == 1){
        $nm_mhs = $_POST['nama'];
        $prodi_mhs = $_POST['prodi'];
        $jenis_kelamin = $_POST['jk'];
                        
        $proses_update_data = mysqli_query($koneksi,"UPDATE mahasiswa SET nama_mahsiswa = '$nm_mhs', prodi = '$prodi_mhs', jk = '$jenis_kelamin' WHERE id = '".$npm."'") 
            or die (mysqli_error($koneksi));

        if($proses_update_data){
            echo "
                <script>
                    alert('Data Berhasil Diupdate');
                    window.location.href='pertemuan9.php';
                </script>";
        } else echo "<script>
                    alert('Data Gagal Diupdate');
                    window.location.href='pertemuan9.php';
                    </script>";
    }                

?>

