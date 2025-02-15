
<div class="box-body">

        <h2 class="judul">Data Pelanggaran</h2>
        <a href="?hal=pelanggaran_tambah" class="tombol"><b>Tambah</b></a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelanggaran</th>
                  <th>Jenis Pelanggaran</th>
                  <th>Poin</th>
                  <th>Kode Pl</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            <?php
                $query = "select * from pelanggaran order by id_pelanggaran desc";
                $result = mysqli_query($con,$query);
                $no = 0;
                while($data = mysqli_fetch_array($result)){
                    $no++;
                
            ?>
            <tr>
              <td><?= $no ?></td>
                <td><?= $data['nama_pelanggaran'] ?></td>
                <td><?= $data['jenis_pelanggaran'] ?></td>
                <td><?= $data['poin'] ?></td>
                <td><?= $data['kode'] ?></td>
              <td>
                <a href="?hal=pelanggaran_edit&id=<?= $data['id_pelanggaran'] ?>" class="tombol edit"> Edit </a>
                <a href="?hal=pelanggaran_hapus&id=<?= $data['id_pelanggaran'] ?>" class="tombol hapus"> Hapus </a>
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