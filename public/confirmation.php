<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $guests_count = $_POST['guests_count'];
    $food_preference = $_POST['food_preference'];
    $notes = $_POST['notes'];

    // Menyimpan data tamu ke database
    $stmt = $pdo->prepare("INSERT INTO guests (name, email, phone, guests_count, food_preference, notes) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $guests_count, $food_preference, $notes]);

    echo "<h1>Terima Kasih!</h1>";
    echo "<p>Pendaftaran Anda berhasil. Berikut adalah informasi Anda:</p>";
    echo "<p>Nama: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Telepon: $phone</p>";
    echo "<p>Jumlah Tamu: $guests_count</p>";
    echo "<p>Preferensi Makanan: $food_preference</p>";
    echo "<p>Catatan: $notes</p>";
    echo '<a href="event-info.php" class="button">Kembali ke Informasi Acara</a>';
} else {
    echo "Data tidak valid.";
}
?>