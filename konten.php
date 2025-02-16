<?php
    if(!defined('INDEX'));

    $halaman = [
    "dashboard",
    "pelanggaran",
    "pelanggaran_tambah",
    "pelanggaran_insert",
    "pelanggaran_edit",
    "pelanggaran_update",
    "pelanggaran_hapus",
    "siswa",
    "siswa_tambah",
    "siswa_insert",
    "siswa_edit",
    "siswa_update",
    "siswa_hapus",
    "siswa_tebus",
    "siswa_proses",
    "riwayat",
    "riwayat_tambah",
    "riwayat_tebus",
    "riwayat_insert",
    "prosesdata",
    "riwayat_hapus",
    "tebus",
    "tebus_tambah",
    "tebus_insert",
    ];

if (isset($_GET['hal'])) {
    $hal = $_GET['hal'];
} else {
    $hal = 'dashboard';
}

foreach($halaman as $h) {
    if ($hal == $h) {
        include "content/$h.php";
        break;
    }
}
?>