<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <title>SavingApp - Katgeori</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>

    <div class="top-nav" id="top-nav">
        <span class="menu-toggle" onclick="toggleSideNav()">☰</span>
        <p>Beranda</p>
    </div>

    <div class="side-nav" id="side-nav">
        <div class="logo">
            <img src="Assets\images\Mini-icon-dummy.png" alt="Logo">avingApp
        </div>
        <div class="profile">
            <img src="Assets\images\default-photo-profile.png" alt="Avatar">
            <p>Profil User</p>
        </div>
        <ul>
            <li><a href="#">🏠 Beranda</a></li>
            <li><a href="#">📁 Kategori</a></li>
            <li><a href="#">🔔 Notifikasi</a></li>
            <li><a href="#">🔑 Ganti Sandi</a></li>
            <li><a href="#">⬅️ Log Out</a></li>
        </ul>
    </div>
    
    <div class="main-container" id="main-container">
        <div class="content-container" id="content-container">
            <h3 id="empty-label">Tabungan Masih Kosong!</h3>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2021 SavingApp</p>
    </div>

    <script src="script.js"></script>
</body>
</html>