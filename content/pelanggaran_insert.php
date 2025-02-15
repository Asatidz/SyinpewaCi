<?php
if(!defined('INDEX')) die();


$nama       = $_POST['nama'];
$jpl         = $_POST['jenis'];
$poin       = $_POST['poin'];
$kode = $_POST['kode'];

        $query  = "INSERT INTO pelanggaran SET ";
        $query .= "nama_pelanggaran = '$nama', ";
        $query .= "jenis_pelanggaran = '$jpl', ";
        $query .= "poin = '$poin', ";
        $query .= "kode = '$kode' ";
    
    $result = mysqli_query($con,$query);
if ($result) {
    echo "Pelanggaran <b>$nama</b> Berhasil Disimpan!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=pelanggaran'>";
} else {
    echo "Tidak dapat menyimpan data!<br>";
    echo mysqli_error();
}