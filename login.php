<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>
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
    width: 350px;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(0,0,0,.2);
}
.card h2 {
    text-align: center;
    margin-bottom: 20px;
}
input {
    width: 100%;
    padding: 12px;
    margin-bottom: 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
}
button {
    width: 100%;
    padding: 12px;
    background: #000000ff;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}
button:hover {
    background: #051046ff;
}
</style>
</head>
<body>

<div class="card">
    <h2>Login</h2>
    <form method="POST" action="proses_login.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
