<?php
if (!defined('INDEX')) die();
// Pastikan form telah terkirim
$id       = $_POST['id'];
$nama      = $_POST['nama_siswa'];  // Pastikan id dikirim dalam form POST
$tgl      = date('Y-m-d H:i:s'); // Menggunakan fungsi PHP untuk mendapatkan tanggal saat ini
$kode     = $_POST['tebus'];
$nis      = $_POST['nis'];
  // Ambil kode tebus dari form
// Periksa apakah kode tebus ada dalam database
// var_dump($_POST);   
// Mengambil poin dari tabel tebus berdasarkan kode
$query = "SELECT poin_tebus FROM tebus WHERE kode_tebus = '$kode'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
$poin = $data['poin_tebus'];  // Ambil poin dari tebus

// Menyimpan riwayat tebus
$query = "INSERT INTO rw_tebus (nis, nama, tanggal, kode, poin) VALUES ('$nis','$nama', '$tgl', '$poin', '$kode')";
$result = mysqli_query($con, $query);

// var_dump($poin, $data);


// Update poin siswa
$query = "UPDATE siswa SET poin_sis = poin_sis - $poin WHERE id_siswa = '$id'";
$result = mysqli_query($con, $query);

// Menampilkan hasil
if ($result) {
    echo "Dia <b>$nama</b> Telah Menggugurkan Poin. Data berhasil disimpan!";
    echo "<meta http-equiv='refresh' content='2; url=?hal=tebus'>";
} else {
    echo "Tidak dapat menyimpan data!<br>";
    echo mysqli_error($con);
}
?>
