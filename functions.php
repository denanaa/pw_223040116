<?php    

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040116') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

/* KATEGORI */
function tambah($data) {
  $conn = koneksi();

  $nama_kategori = htmlspecialchars ($data['nama_kategori']);

  $category = query("SELECT * FROM kategori WHERE nama_kategori = '{$nama_kategori}'");
  
  if(count($category) >= 1){
    return 0;
  }

  $gambar_kategori = upload ();
  if( !$gambar_kategori ) {
    return false;
  }

  $deskripsi_kategori = htmlspecialchars ($data['deskripsi_kategori']);

  $query = "INSERT INTO 
              kategori
            VALUES 
              (null, '$nama_kategori', '$gambar_kategori', '$deskripsi_kategori')";

  mysqli_query($conn, $query) or die (mysqli_error($conn));

  return mysqli_affected_rows($conn);
} 

function upload() {
  $conn = koneksi();

  $namaFile = $_FILES['gambar_kategori']['name'];
  $ukuranFile = $_FILES['gambar_kategori']['size'];
  $error = $_FILES['gambar_kategori']['error'];
  $tmpName = $_FILES['gambar_kategori']['tmp_name'];

  if ( $error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
          </script>";
    return false;
  }

  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if ( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
            alert('yang anda upload bukan gambar!');
          </script>";
    return false;
  }

  if($ukuranFile > 2000000) {
    echo "<script>
            alert('ukuran gambar terlalu besar!');
          </script>";
    return false;
  }

  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'image/' . $namaFileBaru);

  return $namaFileBaru;

}

function hapusKategori($id_kategori) {
  $conn = koneksi();
  $tempat = query("SELECT * FROM tempat WHERE id_kategori = '$id_kategori'");
  
  foreach($tempat as $tempat)
  {
    $tempat = mysqli_query($conn, "DELETE FROM tempat WHERE id_kategori = '$id_kategori'"); 
  }

  $kategori = mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori = '$id_kategori'");

  return $kategori;
}

function ubah($data) {
  $conn = koneksi();

  $id_kategori = $data["id_kategori"];
  $nama_kategori = htmlspecialchars($data['nama_kategori']);
  $gambar_kategori = $data['gambar_kategori'];
  $deskripsi_kategori = htmlspecialchars($data['deskripsi_kategori']);

  $query = "UPDATE kategori SET
              nama_kategori = '$nama_kategori',
              gambar_kategori = '$gambar_kategori',
              deskripsi_kategori = '$deskripsi_kategori'
            WHERE id_kategori = $id_kategori
          ";

  mysqli_query($conn, $query) or die (mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

/* TEMPAT */
function insert($data) {
  $conn = koneksi();

  $nama_tempat = htmlspecialchars ($data['nama_tempat']);
  $id_kategori = ($data['id_kategori']);

  $gambar_tempat = uploadImage ();
  if( !$gambar_tempat ) {
    return false;
  }

  $harga_tempat = htmlspecialchars ($data['harga_tempat']);
  $deskripsi_tempat = htmlspecialchars ($data['deskripsi_tempat']);
  $rating_tempat = htmlspecialchars ($data['rating_tempat']);

  $query = "INSERT INTO 
              tempat
            VALUES 
              (null, '$id_kategori','$nama_tempat', '$gambar_tempat', '$harga_tempat', '$deskripsi_tempat', '$rating_tempat')";

  mysqli_query($conn, $query) or die (mysqli_error($conn));

  return mysqli_affected_rows($conn);
} 

function uploadImage() {
  $conn = koneksi();

  $namaFile = $_FILES['gambar_tempat']['name'];
  $ukuranFile = $_FILES['gambar_tempat']['size'];
  $error = $_FILES['gambar_tempat']['error'];
  $tmpName = $_FILES['gambar_tempat']['tmp_name'];

  if ( $error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
          </script>";
    return false;
  }

  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if ( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
            alert('yang anda upload bukan gambar!');
          </script>";
    return false;
  }

  if($ukuranFile > 2000000) {
    echo "<script>
            alert('ukuran gambar terlalu besar!');
          </script>";
    return false;
  }

  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'image/' . $namaFileBaru);

  return $namaFileBaru;

}

function hapusTempat($id_tempat) {
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM tempat WHERE id_tempat = $id_tempat");

  return mysqli_affected_rows($conn);
}

function ubahTempat($data) {
  $conn = koneksi();
  
    $id_tempat = $data['id_tempat'];
    $nama_tempat = htmlspecialchars($data['nama_tempat']);
    $gambar_tempat = uploadImage ();

  if( !$gambar_tempat ) {
    return false;
  }
  
    $harga_tempat = htmlspecialchars ($data['harga_tempat']);
    $deskripsi_tempat = htmlspecialchars($data['deskripsi_tempat']);
    $rating_tempat = htmlspecialchars ($data['rating_tempat']);
  
    $query = "UPDATE tempat SET
                id_tempat = '$id_tempat',
                nama_tempat = '$nama_tempat',
                gambar_tempat = '$gambar_tempat',
                harga_tempat = '$harga_tempat',
                deskripsi_tempat = '$deskripsi_tempat',
                rating_tempat = '$rating_tempat'
              WHERE id_tempat = $id_tempat
            ";
  
    mysqli_query($conn, $query) or die (mysqli_error($conn));
  
    return mysqli_affected_rows($conn);
  }

function registrasi($data) {
  $conn = koneksi();

  $email = htmlspecialchars ($data['email']);
  $username = strtolower(htmlspecialchars ($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);
  $user = 'user';

  $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

  if( mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah terdaftar!')
    </script>";
    return false;
  }

  if ($password !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai!');
          </script>";
    return false;
  }
  
  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO admin (id, email, username, password, level)
   VALUES(null, '{$email}', '{$username}', '{$password}', '{$user}')");

  return mysqli_affected_rows($conn);

  echo "<script>alert('Register Berhasil');</script>";
  echo "<meta http-equiv='refresh' content='0; url='login.php'>";

}

/* ADMIN */
function hapusAdmin($id) {
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM admin WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubahAdmin($data) {
  $conn = koneksi();

  $id = $data["id"];
  $email = htmlspecialchars($data['email']);
  $username = htmlspecialchars($data['username']);

  $query = "UPDATE admin SET
              email = '$email',
              username = '$username'
            WHERE id = $id
          ";

  mysqli_query($conn, $query) or die (mysqli_error($conn));

  return mysqli_affected_rows($conn);
}




?>