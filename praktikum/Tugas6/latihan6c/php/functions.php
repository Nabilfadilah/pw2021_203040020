<?php 
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040020");

    return $conn;
}

// function untuk melakukan query dan memasukannya kedalam array
function query($sql) 
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function untuk menambah data produk
function tambah($data) 
{
    $conn = koneksi();

    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);
    $produk = htmlspecialchars($data['produk']);

    $query = "INSERT INTO tabel_product VALUES
                ('', '$img', '$nama', '$ukuran', '$deskripsi', '$harga', '$stok', '$produk')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function untuk menghapus data produk
function hapus($id) 
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE * FROM tabel_product WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// function untuk mengubah data produk
function ubah($data) 
{
    $conn = koneksi();
    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $stok = htmlspecialchars($data['stok']);
    $produk = htmlspecialchars($data['produk']);

    $query = "UPDATE tabel_product
                SET 
                img = '$img',
                nama = '$nama',
                ukuran = '$ukuran',
                deskripsi = '$ukuran',
                harga = '$harga',
                stok = '$stok',
                produk = '$produk',
                WHERE id = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function untuk registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru 
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>