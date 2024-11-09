<?php
session_start();
require_once "../Config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $guests_count = $_POST['guests_count'];
    $food_preference = $_POST['food_preference'];
    $notes = $_POST['notes'];

    $stmt = $pdo->prepare("INSERT INTO guests (name, email, phone, guests_count, food_preference, notes) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $guests_count, $food_preference, $notes]);

    // Simpan data ke session
    $_SESSION['guest_data'] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'guests_count' => $guests_count,
        'food_preference' => $food_preference,
        'notes' => $notes
    ];

    header("Location: ../public/confirmation.php");
    exit();
}
?>