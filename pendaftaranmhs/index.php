<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label { 
            margin: 10px 0 5px;
        }
        input, select {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrasi Mahasiswa Baru <br> Politeknik Purbaya 2024/2025</h2>
        <form action="submit_form.php" method="POST">
            <h3>Data Mahasiswa</h3>
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>

            <label for="gender">Jenis Kelamin:</label>
            <select id="gender" name="gender" required>
                <option value="">Pilih</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Nomor Telepon:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="agama">Agama:</label>
            <select id="agama" name="agama" required>
                <option value="">Pilih</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
                <option value="konghuchu">Konghuchu</option>
            </select>

            <label for="prodi">Prodi:</label>
            <select id="prodi" name="prodi" required>
                <option value="">Pilih</option>
                <option value="Teknik_Informatika">Teknik Informatika</option>
                <option value="Teknik_Mesin">Teknik Mesin</option>
            </select>

            <label for="asal_sekolah">Asal Sekolah:</label>
            <input type="text" id="asal_sekolah" name="asal_sekolah" required>

            <label for="jurusan">jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" required>


            <h3>Data Orang Tua</h3>
            <label for="nama_ayah">Nama Ayah:</label>
            <input type="text" id="nama_ayah" name="nama_ayah" required>

            <label for="nama_ibu">Nama Ibu:</label>
            <input type="text" id="nama_ibu" name="nama_ibu" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="penghasilan_ortu">Penghasilan Ortu:</label>
            <select id="penghasilan_ortu" name="penghasilan_ortu" required>
                <option value="">Pilih</option>
                <option value="500rb-1jt">Rp 500.000 - Rp 2.000.000</option>
                <option value="1jt-2jt">Rp 1.000.000 - Rp 2.000.000</option>
                <option value="2jt-3jt">Rp 2.000.000 - Rp 3.000.000</option>
                <option value="3jt-4jt">Rp 3.000.000 - Rp 4.000.000</option>
                <option value="4jt-5jt">Rp 4.000.000 - Rp 5.000.000</option>
                <option value="5jt-10jt">Rp 5000.000 - Rp 10.000.000</option>
                <option value="lebih_dari_10jt">Lebih Dari Rp 10.000.000</option>
            </select>


            <label for="telepon_ortu">Nomor Telepon Orang Tua:</label>
            <input type="tel" id="telepon_ortu" name="telepon_ortu" required>

            <button type="submit">Daftar</button>
        </form>
    </div>
</body>
</html>
