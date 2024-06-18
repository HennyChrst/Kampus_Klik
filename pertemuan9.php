<?php

    include "pertemuan11tampilkanData.php";
    include "pertemuan13editData.php";

    $data_edit = mysqli_fetch_assoc($proses_ambil);

?>


<html>
    <head>
        <title>PERTEMUAN 12</title>
        <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="library/assets/styles.css" rel="stylesheet" media="screen">
        <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body>
        <div class="span9" id="content">
                  <!-- morris stacked chart -->
                <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Input Data Mahasiswa</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">

                            <?php
                                if (isset($_GET["id"])) {
                                    //proses edit data  
                            ?>
                                <form action="pertemuan13editData.php<?php echo $data_edit['id']?>&proses=1" method="POST">
                            <?php
                                }else{   
                            ?>
                                <form action="pertemuan7proses.php" method="POST">
                            <?php
                                }
                            ?>
                            
                                <fieldset>
                                    <legend>Input Data Mahasiswa</legend>

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
                                        <button type="submit" class="btn btn-primary">PROSES DATA</button>
                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                            </form> 
                            
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Data Mahasiswa</div>
                        </div>

                        <div class="block-content collapse in">
                            <div class="span12">
                                  <table class="table">
                                  <thead>
                                    <tr>
                                      <th>NPM Mahasiswa</th>
                                      <th>Nama Mahasiswa</th>
                                      <th>Prodi Mahasiswa</th>
                                      <th>Jenis Kelamin</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                  <?php
                                        while($data = mysqli_fetch_assoc($proses)){
    
                                  ?>

                                    <tr>
                                      <td><?php echo $data['id'] ?></td>
                                      <td><?php echo $data['nama_mahasiswa'] ?></td>
                                      <td><?php echo $data['prodi'] ?></td>
                                      <td><?php echo $data['jenis_kelamin'] ?></td>
                                      <td> 
                                        <a href="edit_datamhs.php?id=<?php echo $data['id'] ?>"> Edit </a> | 
                                        <a href="pertemuan12hapusData.php?id=<?php echo $data['id'] ?>"> Hapus</td></a>
                                        
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>

            </div>

    </body>
</html>