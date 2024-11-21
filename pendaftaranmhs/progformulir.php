<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        // echo $_POST['nama_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $nik= $_POST['nik'];
        $tempat= $_POST['tempat'];
        $tanggal= $_POST['tanggal'];
        $agama= $_POST['agama'];
        $jenis_kelamin= $_POST['jenis kelamin'];
        $alamat= $_POST['alamat'];
        $no_hp= $_POST['no_hp'];
    }
    
</body>
</html>