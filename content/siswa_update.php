<?php
if(!defined('INDEX')) die();

$foto   = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];
$tipe   = $_FILES['foto']['type'];
$ukuran = $_FILES['foto']['size'];

$id         = $_POST['id'];
$nama       = $_POST['nama_siswa'];
$nis         = $_POST['nis'];
$tgl        = $_POST['tanggal'];
$kelas      = $_POST['kelas'];
$jurusan        = $_POST['jurusan'];
$gender        = $_POST['gender'];

$error = "";

if($foto == ""){
    $query  = "update siswa SET ";
    $query .= "nama_siswa = '$nama', ";
    $query .= "nis = '$nis', ";
    $query .= "tanggal_lahir = '$tgl', ";
    $query .= "kelas = '$kelas', ";
    $query .= "jurusan = '$jurusan', ";
    $query .= "gender = '$gender'";
    $query .= "WHERE id_siswa = '$id'";

    $result = mysqli_query($con,$query);
} else {
    if($tipe != "image/jpeg" and $tipe != "image/jpg" and $tipe != "image/png"){
        $error = "Maaf, tipe file tidak didukung!";
    } elseif($ukuran >= 1000000){
        echo $ukuran;
        $error = "Ukuran file terlalu besar (lebih dari 1 MB)!";
    } else {

        // Menghapus foto sebelumnya
        $query = "SELECT * FROM siswa WHERE id_siswa ='$id'";
        $result = mysqli_query($con,$query);
        $data = mysqli_fetch_assoc($result);
        
        if(file_exists("images/$data[foto]")){
            unlink("images/$data[foto]");
        }

        move_uploaded_file($lokasi,"images/".$foto);

    $query  = "UPDATE siswa SET ";
    $query .= "foto = '$foto', ";
    $query .= "nama_siswa = '$nama', ";
    $query .= "nis = '$nis', ";
    $query .= "tanggal_lahir = '$tgl', ";
    $query .= "kelas = '$kelas', ";
    $query .= "jurusan = '$jurusan', ";
    $query .= "gender = '$gender'";
    $query .= "WHERE id_siswa = '$id'";
    
        $result = mysqli_query($con,$query);
    }
}

if($error != ""){
    echo $error;
    echo "<meta http-equiv='refresh' content='2; url=?hal=siswa_edit&id=$id'>";
} elseif ($query){
    echo "Berhasil memperbaharui data Siswa <b>$nama</b>";
    echo "<meta http-equiv='refresh' content='1; url=?hal=siswa'>";
} else {
    echo "Tidak dapat menyimpan data!<br>";
    echo mysqli_error();
}
?>