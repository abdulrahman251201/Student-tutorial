 <?php 
 session_start();
 include 'php/koneksi.php';
 
 $username = $_POST['username'];
 $password = md5($_POST['password']);

 $result = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($result);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $username;
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];

    header("location: dashboard/dashboard.php");
}else{
    header("location: index.php?pesan=Data tidak ditemukan ");
}
 