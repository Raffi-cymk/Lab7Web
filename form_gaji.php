<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Gaji PHP</title>
</head>
<body>
<h2>Form Data Diri</h2>
<form method="post">
    Nama: <input type="text" name="nama"><br><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir"><br><br>
    Pekerjaan:
    <select name="pekerjaan">
        <option value="Programmer">Programmer</option>
        <option value="Desainer">Desainer</option>
        <option value="Manager">Manager</option>
        <option value="Admin">Admin</option>
    </select><br><br>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $tgl = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    // Hitung umur
    $lahir = new DateTime($tgl);
    $hari_ini = new DateTime();
    $umur = $hari_ini->diff($lahir)->y;

    // Tentukan gaji berdasarkan pekerjaan
    switch ($pekerjaan) {
        case "Programmer": $gaji = 8000000; break;
        case "Desainer": $gaji = 6000000; break;
        case "Manager": $gaji = 12000000; break;
        case "Admin": $gaji = 5000000; break;
        default: $gaji = 0;
    }

    echo "<h3>Hasil:</h3>";
    echo "Nama: $nama <br>";
    echo "Umur: $umur tahun <br>";
    echo "Pekerjaan: $pekerjaan <br>";
    echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
}
?>
</body>
</html>
