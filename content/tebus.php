 <div class="box-body">
 <h2 class="judul">Riwayat Tebusan</h2>
        <a href="?hal=tebus_tambah" class="tombol"><b>Tambah</b></a>

<table id="example2" class="table table-bordered table-hover">
            <tr>
              <th>No</th>
              <th>Nisn</th>
              <th>Nama</th>
              <th>Tanggal Melanggar</th>
              <th>Kode pelanggaran</th>
              <th>Poin</th>
            </tr>
          </thead>
          <tbody>
                        <?php
                $query = "select * from rw_tebus order by id_rwt desc";
                $result = mysqli_query($con,$query);
                $no = 0;
                while($data = mysqli_fetch_array($result)){
                    $no++;
                
            ?>
            <tr>
              <td><?= $no ?></td>
                <td><?= $data['nis'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['tanggal'] ?></td>
                <td><?= $data['kode'] ?></td>
                <td><?= $data['poin'] ?></td>

            </tr>
        <?php
        }
        ?>
          </tbody>
        </table>