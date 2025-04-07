<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SavingApp - Beranda</title>
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
        
        <button onclick="toggleSavingsModal()" id="floating-button">Tambah Tabungan</button>
        
        <div class="chart_and_calender">
            <div class="chart">
                <h1>Grafik</h1>
            </div>
            <div class="calender">
                <h2>kalender</h2>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 SavingApp</p>
    </div>

    <div class="black-opacity" id="black-opacity">
        <div class="savings-modal" id="savings-modal">
            <span class="close-modal" onclick="closeSavingsModal()">x</span>
            <div class="modal-content">
                <h3>Tambah Tabungan</h3>
                <hr>
                <form action="">
                    <input type="text" name="savings-name" id="savings-name" placeholder="Masukan Nama Tabungan">
                    <input type="number" name="savings-amount" id="savings-amount" placeholder="Masukan Jumlah Target Tabungan" onkeypress="return /[0-9]/.test(event.key)"/>
                    <button type="button" onclick="addBoxContent()">Tambah</button>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>