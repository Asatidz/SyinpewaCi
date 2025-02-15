 <div class="box-body">
 <h2 class="judul">Riwayat Pelanggaran</h2>
        <a href="?hal=riwayat_tambah" class="tombol"><b>Tambah</b></a>

<table id="example2" class="table table-bordered table-hover">
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