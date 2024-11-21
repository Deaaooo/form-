<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $alamat = htmlspecialchars(trim($_POST['alamat']));
    $agama = htmlspecialchars(trim($_POST['agama']));
    $prodi = htmlspecialchars(trim($_POST['prodi']));
    $asal_sekolah = htmlspecialchars(trim($_POST['asal_sekolah']));
    $jurusan = htmlspecialchars(trim($_POST['jurusan']));
    $nama_ayah = htmlspecialchars(trim($_POST['nama_ayah']));
    $nama_ibu = htmlspecialchars(trim($_POST['nama_ibu']));
    $penghasilan_ortu = htmlspecialchars(trim($_POST['penghasilan_ortu']));
    $telepon_ortu = htmlspecialchars(trim($_POST['telepon_ortu']));

    // Example: Display the submitted data
    echo "<h2>Data Registrasi Mahasiswa Baru</h2>";
    echo "<strong>Nama Lengkap:</strong> $name<br>";
    echo "<strong>Jenis Kelamin:</strong> $gender<br>";
    echo "<strong>Email:</strong> $email<br>";
    echo "<strong>Nomor Telepon:</strong> $phone<br>";
    echo "<strong>Alamat:</strong> $alamat<br>";
    echo "<strong>Agama:</strong> $agama<br>";
    echo "<strong>Prodi:</strong> $prodi<br>";
    echo "<strong>Asal Sekolah:</strong> $asal_sekolah<br>";
    echo "<strong>Jurusan:</strong> $jurusan<br>";
    echo "<strong>Nama Ayah:</strong> $nama_ayah<br>";
    echo "<strong>Nama Ibu:</strong> $nama_ibu<br>";
    echo "<strong>Penghasilan Ortu:</strong> $penghasilan_ortu<br>";
    echo "<strong>Nomor Telepon Orang Tua:</strong> $telepon_ortu<br>";

    // Here you can add code to save the data to a database
    // or send an email, etc.
} else {
    echo "Invalid request method.";
}
?>
