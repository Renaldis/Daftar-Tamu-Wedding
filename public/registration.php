<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pendaftaran Tamu</title>
</head>
<body>
    <h1>Pendaftaran Tamu</h1>
    <form action="confirmation.php" method="POST">
        <input type="text" name="name" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Alamat Email" required>
        <input type="text" name="phone" placeholder="Nomor Telepon (opsional)">
        <input type="number" name="guests_count" placeholder="Jumlah Tamu yang Dibawa (opsional)">
        <input type="text" name="food_preference" placeholder="Preferensi Makanan (opsional)">
        <textarea name="notes" placeholder="Catatan Tambahan (opsional)"></textarea>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>