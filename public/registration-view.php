<?php
session_start();

require_once __DIR__ . "/../Config/db.php";
$conn = getConnection();

if (!isset($_SESSION['valid_code']) || $_SESSION['valid_code'] !== true) {
    header("Location: home.php");
    exit();
}

$code_rsvp = $_SESSION['code-rsvp'];

try {
    $pdo = getConnection();
    if (!$pdo) {
        throw new Exception("Koneksi ke database gagal.");
    }

    $stmt = $pdo->prepare("SELECT * FROM guests WHERE code_rsvp = :code_rsvp");
    $stmt->bindParam(':code_rsvp', $code_rsvp, PDO::PARAM_STR);
    $stmt->execute();

    $guest = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$guest) {
        echo "Tamu tidak ditemukan.";
        exit();
    }
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
    exit();
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/registration-view.css">
    <link rel="stylesheet" href="./style/registration-mobile.css">
    <title>Pendaftaran Tamu</title>

</head>
<body>
<div class="formulir-rsvp">
<h1>Pendaftaran Tamu</h1>
    <form id="registration-form" action="../Model/registration.php" method="POST" onsubmit="confirmSubmission(event);">
        <input type="text" name="name" value="<?= htmlspecialchars($guest['name']) ?>" placeholder="Nama Lengkap" required maxlength="50">
        <input type="email" name="email" value="<?= htmlspecialchars($guest['email']) ?>" placeholder="Alamat Email" required maxlength="50">
        <input type="text" name="phone" value="<?= htmlspecialchars($guest['phone']) ?>" placeholder="Nomor Telepon" maxlength="15" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
        <input type="number" name="guests_count" value="<?= htmlspecialchars($guest['guests_count']) ?>" placeholder="Jumlah Tamu yang Dibawa (opsional)" maxlength="1" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
        <textarea name="notes" placeholder="Ucapan Selamat (opsional)"><?= htmlspecialchars($guest['notes']) ?></textarea>
        <!-- Checkbox Konfirmasi -->
        <table style="margin-left: 50px;">
            <tr>
                <td><input type="checkbox" name="confirm" id="confirm" value="1" <?= $guest['confirm'] == 1 ? 'checked' : '' ?>> </td>
                <td><label for="confirm">Konfirmasi kehadiran</label></td>
            </tr>
        </table>
        <blockquote>*<strong>Notes:</strong> Ucapan selamat akan ditampilkan di halaman utama</blockquote>
        
        <div>
            <button type="submit">Kirim</button>
        </div>
    </form>
    <!-- Modal Konfirmasi -->
    <div id="confirmation-modal" class="modal">
            <div class="modal-content">
                <span id="close-modal" style="cursor:pointer; float:right;">&times;</span>
                <h2>Konfirmasi Data</h2>
                <p id="confirmation-message"></p>
                <div class="confirm-wrapping">
                    <button id="confirm-button">Ya, Proses Data</button>
                    <button id="cancel-button">Tidak, Batalkan</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/javascript/registration-view.js"></script>
</body>
</html>
