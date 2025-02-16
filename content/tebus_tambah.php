<h1>Cek Data</h1>
<form action="" method="get">
    <input type="hidden" name="hal" value="tebus_tambah">
    <input type="number" name="nis" id="nis" placeholder="NIS" value="<?= isset($_GET['nis']) ? $_GET['nis'] : '' ?>">
    <input type="submit" value="Cek">
</form>
<hr>

<h2>Detail</h2>

        <?php
        if(isset($_GET['nis']) && !empty($_GET['nis'])){
            $nis = $_GET['nis'];

            $query = "SELECT * FROM siswa where nis = '$nis'";
            $result = mysqli_query($con,$query);
            $no = 0;
            if($data = mysqli_fetch_assoc($result)){
                $no++;?>
                
<form action="?hal=tebus_insert" method="post">

    <input type="hidden" name="id" value="<?=$data['id_siswa']?>">

    <div class="form-group">
        <label for="nis">NIS</label>
            <input type="number" name="nis" id="nis" value="<?=$data['nis']?>" readonly>
        </div>

                    <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?=$data['nama_siswa']?>" readonly>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" value="<?=$data['gender']?>"readonly>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" name="kelas" id="kelas" value="<?=$data['kelas']?>"  readonly>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?=$data['jurusan']?>"  readonly>
            </div>
            <div class="form-group">
                <label for="tebus">Penebusan</label>
                <select class="form-control select2" style="width: 100%;" name="tebus" id="tebus">
                  <option value=""> - Pilih Penebusan - </option>
<?php
$query = "SELECT * FROM tebus";
$result = mysqli_query($con,$query);
while($data = mysqli_fetch_assoc($result)){
    echo "<option value='$data[kode_tebus]'> $data[nama_tebus] | $data[poin_tebus] </option>";
}
?>
                </select>
              </div>


              <div class="box-footer">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
              </div>

 <?php

}

}
?>