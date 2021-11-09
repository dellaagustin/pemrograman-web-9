<?php

session_start();
include ("koneksi.php");

$nokapal = $_GET ['nomorkapal'];
$hapus= "DELETE FROM hasil_perikanan WHERE nomor_kapal = '".$nokapal."'";
$q_buat = mysql_query($hapus,$sambung);

echo "<script>alert('Hapus data dengan nomor kapal=".$nokapal." berhasil') </script>";
