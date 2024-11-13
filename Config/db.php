<?php
include 'config.php'; // Pastikan config.php berisi detail koneksi yang benar

function getConnection() {
    global $host, $db, $user, $pass; // Memanggil variabel dari config.php

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null; // Apabila gagal, kembalikan null
    }
}
?>
