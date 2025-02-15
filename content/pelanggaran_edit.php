<?php
if(!defined('INDEX')) die();

$id = $_GET['id'];
$query = "SELECT * FROM pelanggaran WHERE id_pelanggaran = '$id'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
?>

<h2 class="judul">Tambah Pelanggaran</h2>
<form action="?hal=pelanggaran_update" method="post" role="form">
    <input type="hidden" name="id" value="<?=$data['id_pelanggaran']?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Pl</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" value="<?=$data['nama_pelanggaran']?>">
                </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Jenis Pl</label>
                <select class="form-control select2" style="width: 100%;" name="jenis" id="jenis" value="<?=$data['jenis_pelanggaran']?>">
                  <option selected="selected">Ringan</option>
                  <option>Sedang</option>
                  <option>Berat</option>
                </select>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="poin">Poin</label>
                  <input type="number" class="form-control" id="poin" name="poin" placeholder="Enter Poin" value="<?=$data['poin']?>" disabled>
                </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="kode">Kode</label>
                  <input type="number" class="form-control" id="kode" name="kode" placeholder="Enter Kode" value="<?=$data['kode']?>" disabled>
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->

              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" value="Simpan" class="btn btn-primary">
              </div>
            </form>
