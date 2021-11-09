<?php

$nama_db = "database_form";
$server = "localhost";

$sambung = mysql_connect ($server);

mysql_select_db($nama_db, $sambung) or die("Koneksi ke $nama_db gagal");

?>