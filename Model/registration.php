<?php 
session_start();
require_once __DIR__ . "/../Config/db.php";
$conn = getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $guests_count = $_POST['guests_count'];
    $notes = $_POST['notes'];
    $confirm = isset($_POST['confirm']) ? 1 : 0;

    if (!isset($_SESSION['valid_code']) || $_SESSION['valid_code'] !== true) {
        header("Location: home.php");
        exit();
    }
    $code_rsvp = $_SESSION['code-rsvp'];

    try {
        // Cek koneksi
        $pdo = getConnection();
        if (!$pdo) {
            throw new Exception("Koneksi ke database gagal.");
        }

        // Update data tamu
        $stmt = $pdo->prepare("
            UPDATE guests SET
                name = :name,
                email = :email,
                phone = :phone,
                guests_count = :guests_count,
                notes = :notes,
                confirm = :confirm
            WHERE code_rsvp = :code_rsvp
        ");

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':guests_count', $guests_count, PDO::PARAM_INT);
        $stmt->bindParam(':notes', $notes, PDO::PARAM_STR);
        $stmt->bindParam(':confirm', $confirm, PDO::PARAM_INT);
        $stmt->bindParam(':code_rsvp', $code_rsvp, PDO::PARAM_STR);

        // Eksekusi query update
        $stmt->execute();
        $_SESSION['guest_data'] = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'guests_count' => $guests_count,
            'notes' => $notes,
            'confirm' => $confirm,
        ];
        // Hapus valid_code untuk mencegah penggunaan ulang kode RSVP
        unset($_SESSION['valid_code']);
        header("Location: ../public/confirmation.php");
        exit();
    } catch (Exception $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
        exit();
    }
}

?>