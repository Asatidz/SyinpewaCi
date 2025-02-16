   <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Riwayat Pelanggaran</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="?hal=riwayat_tambah" class="tombol"><b>Tambah</b></a>
                  <table id="example2"class="table table-bordered table-striped">
            <tr>
              <th>No</th>
              <th>Nisn</th>
              <th>Nama</th>
              <th>Tanggal Melanggar</th>
              <th>Kode pelanggaran</th>
              <th>Poin</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
                        <?php
                $query = "select * from riwayat_pelanggaran order by id_riwayat desc";
                $result = mysqli_query($con,$query);
                $no = 0;
                while($data = mysqli_fetch_array($result)){
                    $no++;
                
            ?>
            <tr>
              <td><?= $no ?></td>
                <td><?= $data['nis'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['tanggal_riw'] ?></td>
                <td><?= $data['kode_pl'] ?></td>
                <td><?= $data['poin_plg'] ?></td>
              <td>
                <a href="?hal=riwayat_hapus&id=<?= $data['id_riwayat'] ?>" class="tombol hapus"> Hapus </a>
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
      </section>