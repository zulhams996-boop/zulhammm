<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<style>
body {
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #000000ff, #051046ff);
    font-family: 'Segoe UI', sans-serif;
}
.card {
    background: #fff;
    width: 380px;
    padding: 30px;
    border-radius: 16px;
    text-align: center;
    box-shadow: 0 15px 30px rgba(0,0,0,.25);
}
.card img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
}
.card h3 {
    margin-bottom: 5px;
}
.card p {
    margin: 6px 0;
    color: #555;
}
.logout {
    margin-top: 15px;
    display: inline-block;
    padding: 10px 20px;
    background: #000000ff;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
}
.logout:hover {
    background: #051046ff;
}
</style>
</head>
<body>

<div class="card">
    <img src="<?= $_SESSION['foto']; ?>" alt="Foto Profil">

    <h3><?= $_SESSION['nama']; ?></h3>
    <p><b>NIM:</b> <?= $_SESSION['NIM']; ?></p>
    <p><b>Email:</b> <?= $_SESSION['email']; ?></p>
    <p><b>Prodi:</b> <?= $_SESSION['Prodi']; ?></p>
    <p><b>Konsentrasi:</b> <?= $_SESSION['Konsentrasi']; ?></p>


    <a href="logout.php" class="logout">Logout</a>
</div>

</body>
</html>
