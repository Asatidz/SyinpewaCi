
<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "SELECT * FROM siswa WHERE id_siswa = '$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
?>

<h2 class="judul">Edit Pegawai</h2>
<form action="?hal=siswa_update" method="post" enctype="multipart/form-data">

    <!-- Input ID -->
    <input type="hidden" name="id" value="<?=$data['id_siswa']?>">
    
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto">
                <img src="images/<?=$data['foto']?>" alt="" width="100">
            </div>
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?=$data['nama_siswa']?>" placeholder="Enter Nama" >
            </div>
            <div class="form-group">
                <label for="nis">Nis</label>
                <input type="number" class="form-control" name="nis" id="nis" value="<?=$data['nis']?>" placeholder="Enter Nis" readonly>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Enter tanggal" value="<?=$data['tanggal_lahir']?>">
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <br>
                        <!-- Pengecekan kelas -->
                <?php
                if($data['kelas']=="10"){
                    $l=" checked";
                    $p="";
                    $s="";
                }if($data['kelas']=="11"){
                    $l="";
                    $p=" checked";
                    $s="";
                }else{
                    $l="";
                    $p="";
                    $s=" checked";
                }
                ?>
                <input type="radio" name="kelas" id="kelas" value="10" <?= $l ?>>10
                <input type="radio" name="kelas" id="kelas" value="11" <?= $p ?>>11
                <input type="radio" name="kelas" id="kelas" value="12" <?= $s ?>>12
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <br>
                <!-- Pengecekan jurusan -->
                <?php
                if($data['jurusan']=="AKL"){
                    $ak=" checked";
                    $pl="";
                }else{
                    $ak="";
                    $pl=" checked";
                }
                ?>

                <input type="radio" name="jurusan" id="jurusan" value="AKL" <?= $ak ?>> AKL
                <input type="radio" name="jurusan" id="jurusan" value="PPLG" <?= $pl ?>> PPLG
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <br>
                <?php
                if($data['gender']=="L"){
                    $i=" checked";
                    $n="";
                }else{
                    $i="";
                    $n=" checked";
                }
                ?>
                <input type="radio" name="gender" id="gender" value="L" <?= $i ?>>Laki-Laki
                <input type="radio" name="gender" id="gender" value="P" <?= $n ?>>Perempuan
            </div>

            <div class="box-footer">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>