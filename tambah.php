<?php
    require 'functions.php';
    // check apakah tombol submit sudah ditekan atau belum
    if ( isset($_POST["submit"])) {
        // check apakah data berhasil di tambahkan atau tidak
        if (tambah($_POST) > 0) {
            echo "
                <script> 
                    alert('data Berhasil!!!');
                    document.location.href = 'index.php';
                </script>
            ";
        }else {
            echo "
                <script> 
                    alert('data GAGAL!!!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data siswa</title>
</head>
<body>
        <h1>Tambah data siswa</h1>
        <form action="" method="post">
        <ul>
            <li>
                <label for="nis">Nis</label>
                <input type="text" name="nis" id="nis" required>
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">email</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">gambar</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
</form>
</body>
</html>

