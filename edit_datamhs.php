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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Mahasiswa</title>
</head>
<body>
    <div class="container w-75">
    <h1 class="my-4">Form Edit Data Mahasiswa</h1>
    <form action="pertemuan7proses.php" method="POST">
    <div class="control-group">
        <label class="control-label" for="NPM">Nama Mahasiswa :</label>
        <div class="controls">
            <input type="hidden" class="input-xlarge focused" id="NPM" name="nama" 
            value="<?php echo isset($data_edit['id']) ? htmlspecialchars($data_edit['id']) : ''; ?>">

            <input type="text" class="input-xlarge focused" id="NPM" name="nama" 
            value="<?php echo isset($data_edit['nama_mahasiswa']) ? htmlspecialchars($data_edit['nama_mahasiswa']) : ''; ?>">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="NPM">Prodi Mahasiswa :</label>
        <div class="controls">
            <input type="text" class="input-xlarge focused" id="NPM" name="prodi" 
            value="<?php echo isset($data_edit['prodi']) ? htmlspecialchars($data_edit['prodi']) : ''; ?>">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="NPM">Ulangi :</label>
        <div class="controls">
        <input type="text" class="input-xlarge focused" id="NPM" name="ulangi" value="">
            </div>
        </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="JenisKelamin">Jenis Kelamin</label>
    <div class="controls">
        <label class="radio-inline">
            <input type="radio" name="jenis_kelamin" value="Laki-laki" 
            value <?php echo (isset($data_edit['jenis_kelamin']) && $data_edit['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?>> Laki-laki
        </label>
        <label class="radio-inline">
            <input type="radio" name="jenis_kelamin" value="Perempuan" 
            value <?php echo (isset($data_edit['jenis_kelamin']) && $data_edit['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?>> Perempuan
        </label>
            <label class="radio-inline">
            <input type="radio" name="jenis_kelamin" value="Tidak diketahui" 
            value <?php echo (isset($data_edit['jenis_kelamin']) && $data_edit['jenis_kelamin'] == 'Tidak diketahui') ? 'checked' : ''; ?>> Tidak diketahui
            </label>
        </div>
    </div>

    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
    <a class="btn btn-warning my-4" href="./pertemuan9.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>