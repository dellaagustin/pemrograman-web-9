<?php
session_start();
include("koneksi.php");
?>
<!
<!DOCTYPE>
<html>
    <head>
        <title> Hasil Perikanan Tangkap</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <div class="container mt-3">
    <body class="bg-light text-dark">

        <table><tr><td><h3> Form Hasil Perikanan Tangkap </h3></td>
        <td><img class="img-fluid" src="https://www.wallpapers13.com/wp-content/uploads/2016/02/Pelagic-fish-rainbow-runners-hd-wallpapers-for-mobile-phones-and-laptops-1920x1440.jpg" alt="Ikan" width="75" height="75"> </td></tr></table>
        </div>
        <form action="data.php" method = "POST">
        <hr>
            <table align="center">
            <tr>
                <td>Nama Nelayan</td>
                <td>:</td>
                <td><input type= "text" name="nama"/></td>
            </tr>
            <tr>
                <td>Provinsi </td>
                <td>:</td>
                <td><input type= "text" name="provinsi"/></td>
            </tr>
            <tr>
                <td>Nomor Kapal</td>
                <td>:</td>
                <td><input type= "text" name="nomor_kapal"/></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type= "radio" name="jenis_kelamin" value="Laki-laki"/>Laki-laki<br>
                    <input type= "radio" name="jenis_kelamin" value="Perempuan"/>Perempuan<br>
                </td>
            </tr>
            <tr>
                <td>Jenis Perairan</td>
                <td>:</td>
                <td>
                    <select name="jenis_perairan"> 
                        <option value= "darat">Perairan Umum Daratan</option>
                        <option value= "laut">Perairan Laut</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td>Jenis Ikan Tangkapan</td>
                <td>:</td>
                <td>
                    <input type= "checkbox" name="jenis_ikan[]" value="Bawal"/> Bawal <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Cakalang"/> Cakalang <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Cucut"/> Cucut <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Cumi-Cumi"/> Cumi-Cumi <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Gabus"/> Gabus <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Gurita"/> Gurita <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Kakap"/> Kakap <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Kerapu"/> Kerapu <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Kuwe"/> Kuwe <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Layang"/> Layang <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Lobster"/> Lobster <br>
                    <input type= "checkbox" name="jenis_ikan[]" value="Teri"/> Teri <br>
                </td>
            </tr>
            <tr>
                <td>Jumlah Hasil Tangkapan (kg)</td>
                <td>:</td>
                <td><input type= "number" name="jumlah"/></td> 
            </tr>
            <tr>
                <td>Catatan</td>
                <td>:</td>
                <td>
                    <textarea name="catatan" rows=5 cols=30> </textarea>
                </td>
            </tr>
            <tr>
                <td colspan=3 align="right">
                <a href="http://localhost/[Semester 3] Pemrograman Web/Pemrograman Web 9/tampil.php">Kembali</a> 
                &nbsp; &nbsp;
                <input type="reset" value="Reset"/> 
                &nbsp; &nbsp;
                <input type="submit" value="Masukkan"/></td>
            </tr>
            </table>
</form>
</body>
</div>
</html>