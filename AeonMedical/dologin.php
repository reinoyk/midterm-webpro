<?php
require "config/main.php";

$user  = mysqli_real_escape_string($connection, $_POST['tUser']);
$pwd   = mysqli_real_escape_string($connection, $_POST['tPwd']);

$query = "SELECT * FROM admin WHERE username='$user'";
$hasil = mysqli_query($connection, $query);
$data  = mysqli_fetch_array($hasil);

if (password_verify($pwd, $data['password'])) {
    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['nama']     = $data['nama'];
    header('Location:index.php');
} else {
    echo "<script>alert('Failed..!!!!!, Please try again'); window.location = 'login.php'</script>";
}
?>
