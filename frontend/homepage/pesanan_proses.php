<?php
session_start();

$idmakanan = $_GET['id'];
$iduser = $_SESSION['id_user'];

$dsn = "mysql:host=localhost;dbname=uts_kelompok1";
$kunci = new PDO($dsn, "root", "");

$sql = "INSERT INTO pesanan (id_user, id_makanan) VALUES (:iduser, :idmakanan)";

$stmt = $kunci->prepare($sql);

$stmt->bindParam(':iduser', $iduser);
$stmt->bindParam(':idmakanan', $idmakanan);

if ($stmt->execute()) {
    header("Location: menu.php");
} else {
    echo "Gagal menambahkan data.";
}
?>