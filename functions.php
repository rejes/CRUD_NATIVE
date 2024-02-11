<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "belajardata" );
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query) ;
    // menyediakan wadahnya
    $rows =[];
    // yg akan di ambil setiap data
    while ( $row = mysqli_fetch_assoc($result)) {
    // menambahkan elemen baru setiap array
        $rows[] = $row;
    }
    //mengembalikan data, rows bentuknya sudah array assosiatif
    return $rows;
}
    function tambah ($data) {
        global $conn ;
    // ambil data dari tiap elemen dalam form
        $nis        = htmlspecialchars($data["nis"]);
        $nama       = htmlspecialchars($data["nama"]);
        $email      = htmlspecialchars($data["email"]);
        $jurusan    = htmlspecialchars($data["jurusan"]);
        $gambar     = htmlspecialchars($data["gambar"]);
    // query insert data
    $query = "INSERT INTO siswa
                VALUES
                ('','$nis', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id") ;

    return mysqli_affected_rows($conn);
}
    function update($data){
        global $conn;

        $id         = $data["id"];
        $nis        = htmlspecialchars($data["nis"]);
        $nama       = htmlspecialchars($data["nama"]);
        $email      = htmlspecialchars($data["email"]);
        $jurusan    = htmlspecialchars($data["jurusan"]);
        $gambar     = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = " UPDATE siswa SET
                nama    = '$nama',
                nis     = '$nis',
                email   = '$email',
                jurusan = '$jurusan',
                gambar  = '$gambar'
            WHERE id    = $id
                ";

mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
    }
?>


