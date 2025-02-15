<?php
if(!defined('INDEX')) die();
?>
<h2 class="judul">Tambah Pegawai</h2>
<form action="?hal=siswa_insert" method="post" enctype="multipart/form-data">
  
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>

                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" name="foto" id="foto">
                </div>
        <div class="box-body">
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Enter Nama" required>
        </div>
                <div class="form-group">
                  <label for="nis">Nis</label>
                  <input type="number" class="form-control" name="nis" id="nis" placeholder="Enter Nis" required>
                </div>
        <div class="box-body">
            <div class="form-group">
                <label for="tanggal">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Enter tanggal" required>
        </div>

    <div class="form-group">
        <label for="kelas">Kelas</label>
        <br>
        <input type="radio" name="kelas" id="kelas" value="10" required>10
        <input type="radio" name="kelas" id="kelas" value="11" required>11
        <input type="radio" name="kelas" id="kelas" value="12" required>12
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <br>
        <input type="radio" name="jurusan" id="jurusan" value="AKL" required>AKL
        <input type="radio" name="jurusan" id="jurusan" value="PPLG" required>PPLG
    </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <br>
        <input type="radio" name="gender" id="gender" value="L" required>Laki-Laki
        <input type="radio" name="gender" id="gender" value="P" required>Perempuan
    </div>

                  <div class="box-footer">
                <input type="submit" value="Simpan" class="btn btn-primary">
              </div>
            </form>

    