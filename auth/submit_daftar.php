<?php
$conn = new mysqli("localhost", "root", "root", "saving_app_db");

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("insert into users_tb (email, password) values (?, ?)");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

if($email == "" || $password == ""){
    echo "error";
    exit();
} else {
    header("Location: ../Halaman_selamat_datang.php");
    $stmt->close();
}

?>