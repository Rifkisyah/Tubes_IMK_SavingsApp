<?php
$conn = new mysqli("localhost", "root", "root", "saving_app_db");

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("SELECT * FROM users_tb WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows === 1){
    $user = $result->fetch_assoc();

    if(password_verify($_POST['password'], $user['password'])){
        session_start();
        $_SESSION['user_id'] = $user['uid'];
        $_SESSION['email'] = $user['email'];
        header("Location: ../Halaman_Beranda.php");
    } else {
        echo "Kata sandi salah!";
    }
} else {
    echo "Pengguna tidak ditemukan!";
}

?>