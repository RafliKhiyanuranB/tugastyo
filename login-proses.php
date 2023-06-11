<?php

session_start();

include('koneksi.php');

$email = $_POST['email'];
$user_password = $_POST['user_password'];

$sql = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

if($row) {
    // verifikasi password
    if(password_verify($user_password, $row['user_password'])) {
        $_SESSION['email'] = $email;
        header("Location: index.php");
    } else {
        header("Location: error.php");
    }
} else {
    header("Location: error.php");
}

?>
