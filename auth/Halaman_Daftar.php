<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SavingApp - Daftar</title>
    <link rel="stylesheet" href="../Styles.css">
</head>
<body class="auth-page-body">
    <div class="auth-card">
        <h1>SavingApp</h1>
        <p>Selamat Datang!</p>
        <hr>
        <h2>Daftar</h2>
        <form action="submit_daftar.php" method="post" id="auth-form">
            <input type="email" placeholder="Alamat Email" name="email" required>
            <input type="password" placeholder="Kata Sandi" name="password" id="password-field" required>
            <div class="password-toggle">
                <input type="checkbox" id="show-password" onclick="showPassword()">
                <label for="show-password">Tampilkan Kata Sandi</label>
            </div>
            <button type="submit" href="Halaman_Beranda.php">Daftar</button>
            <a href="Halaman_Masuk.php">Sudah punya akun? Masuk di sini</a>
        </form>
    </div>
    <script src="../script.js"></script>
</body>
</html>