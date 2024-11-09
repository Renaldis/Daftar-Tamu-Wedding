<?php
session_start();
if (isset($_SESSION['guest_data'])) {
    $guest = $_SESSION['guest_data'];

    echo "<h1>Terima Kasih!</h1>";
    echo "<p>Pendaftaran Anda berhasil. Berikut adalah informasi Anda:</p>";
    echo "<p>Nama: {$guest['name']}</p>";
    echo "<p>Email: {$guest['email']}</p>";
    echo "<p>Telepon: {$guest['phone']}</p>";
    echo "<p>Jumlah Tamu: {$guest['guests_count']}</p>";
    echo "<p>Preferensi Makanan: {$guest['food_preference']}</p>";
    echo "<p>Catatan: {$guest['notes']}</p>";

    // Hapus session setelah data ditampilkan
    // unset($_SESSION['guest_data']);
    // dipindahkan ke halaman home
    echo '<button onclick="window.location.href=\'home.php\';">Kembali ke Beranda</button>';
    exit();
} else {
    echo "<h1>Data tidak ditemukan.</h1>";
}
?>