<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "zulham" && $password == "zulham123") {

    $_SESSION['login']    = true;
    $_SESSION['NIM'] = "2311468875";
    $_SESSION['nama']     = "Dzulhamsyah";
    $_SESSION['email']    = "zulhamsyh04@gmail.com";
    $_SESSION['Prodi']   = "Sistem Informasi";
    $_SESSION['Konsentrasi']   = "SIM";



    // FOTO LANGSUNG ADA
    $_SESSION['foto'] = "Zulham.jpg";

    header("Location: dashboard.php");
} else {
    echo "<script>alert('Login gagal');location='login.php';</script>";
}
