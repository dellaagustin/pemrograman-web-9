<h2> Data Hasil Perikanan Tangkap </h2>

<?php
$tampil = "select * from hasil_perikanan";
$q_buat = mysql_query($tampil);
?>

<table border=1>
    <tr>
        <th>Nomor</th>
        <th>Nama Nelayan</th> 
        <th>Provinsi</th> 
        <th>Nomor Kapal</th> 
        <th>Jenis Kelamin</th>
        <th>Jenis Perairan</th> 
        <th>Jenis Ikan Tangkapan</th>
        <th>Jumlah Hasil Tangkapan</th>
        <th>Catatan</th>
    </tr>
<?php
$x = 1;
while ($row = mysql_fetch_array ($q_buat)) {
    echo ("<tr><td align=\"right\">".$x."</td>");
    echo ("<td align=\"right\">".$row['nama']."</td>");
    echo ("<td align=\"left\">".$row['provinsi']."</td>");
    echo ("<td align=\"right\">".$row['nk']."</td>");
    echo ("<td align=\"right\">".$row['jk']."</td>");
    echo ("<td align=\"left\">".$row['jp']."</td>");
    echo ("<td align=\"right\">".$row['ikan []']."</td>");
    echo ("<td align=\"left\">".$row['jml']."</td>");
    echo ("<td align=\"right\">".$row['catatan']."</td></tr>");
    $x++;
}
?>
</table>