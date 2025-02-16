   <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Siswa</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="?hal=siswa_tambah" class="tombol"><b>Tambah</b></a>
                  <table id="example2"class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Gender</th>
                        <th>Poin</th>
                        <th>Action</th>
                    </tr>
                    </thead>
        <tbody>
                    <?php
        $query = "SELECT * FROM siswa ORDER BY id_siswa DESC";
        $result = mysqli_query($con,$query);
        $no = 0;
        while($data = mysqli_fetch_array($result)){
            $no++;
        ?>

<tr>
    <td><?=$no?></td>
    <td><img src="images/<?=$data['foto']?>" alt="" width="90"></td>
    <td><?=$data['nama_siswa']?></td>
    <td><?=$data['nis']?></td>
    <td><?=$data['tanggal_lahir']?></td>
    <td><?=$data['kelas']?></td>
    <td><?=$data['jurusan']?></td>
    <td><?=$data['gender']?></td>
    <td><?=$data['poin_sis']?></td>
    <td>
        <a href="?hal=siswa_edit&id=<?=$data['id_siswa']?>"
        class="tombol edit">Edit</a>
        <a href="?hal=siswa_hapus&id=<?=$data['id_siswa']?>&foto=<?=$data['foto']?>"
        class="tombol hapus">Hapus</a>
    </td>
</tr>

<?php
}
?>
    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>

