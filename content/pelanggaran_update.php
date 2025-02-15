<?php
if(!defined('INDEX')) die();

$id = $_POST['id'];
$namapl = $_POST['nama'];
$jenispl = $_POST['jenis'];

    $query  = "UPDATE pelanggaran SET ";
    $query .= "nama_pelanggaran = '$namapl', ";
    $query .= "jenis_pelanggaran = '$jenispl' ";

    $query .= "WHERE id_pelanggaran = '$id'";
    $result = mysqli_query($con,$query);
    $hasil = mysqli_affected_rows($con);
    if ($hasil >= 1){
    echo "Pelanggaran berhasil diperbaharui!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=pelanggaran'>";
} else{
    echo "Tidak ada data yang diperbaharui <br>";
    echo "<meta http-equiv='refresh' content='2; url=?hal=pelanggaran'>";
}
?>