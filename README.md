Digital Wedding RSVP
Ini adalah aplikasi untuk pendaftaran tamu digital pada acara pernikahan. Tamu dapat mengisi konfirmasi rsvp dengan memasukkan kode rsvp yang valid.

Prasyarat
Sebelum menjalankan proyek ini, pastikan Anda sudah menginstal perangkat lunak berikut:

PHP: Pastikan PHP sudah terinstal di sistem Anda. Anda bisa mengunduhnya di https://www.php.net/.
Web Server: Gunakan web server seperti Apache atau Nginx. Anda juga bisa menggunakan XAMPP, WAMP, atau MAMP untuk kemudahan pengaturan server lokal.
Langkah-langkah untuk Menjalankan Proyek

1. Clone Repositori (Jika Anda belum memiliki proyek ini)
Jika Anda belum memiliki salinan lokal proyek ini, Anda dapat meng-clone repositorinya menggunakan Git:
git clone https://github.com/Renaldis/Daftar-Tamu-Wedding.git

2. Pindahkan Ke Direktori Proyek
Setelah clone repositori, buka terminal atau command prompt dan pindah ke direktori proyek:
cd path/to/your-project

3. Konfigurasi Database (Jika Diperlukan)
Pastikan Anda telah menyiapkan database yang diperlukan oleh proyek ini. Anda bisa menggunakan MySQL atau MariaDB. Jika diperlukan, buat database baru dan impor file SQL yang sudah disediakan.
buat database dengan nama wedding_db. lalu import file wedding_db.sql ke dalam database wedding_db.

4. Menjalankan Web Server
Jika Anda menggunakan XAMPP atau MAMP, Anda dapat menempatkan proyek ini di dalam folder htdocs (untuk XAMPP) atau www (untuk MAMP). Kemudian jalankan Apache melalui kontrol panel XAMPP atau MAMP.
Jika Anda menggunakan PHP secara manual, jalankan server PHP menggunakan perintah berikut di terminal:
php -S localhost:8000
Ini akan menjalankan server lokal di http://localhost:8000.

5. Akses Aplikasi
Setelah server berjalan, buka browser dan kunjungi http://localhost:8000 (atau http://localhost/[folder_project] jika Anda menggunakan XAMPP/MAMP). Aplikasi akan terbuka, dan Anda dapat mengakses fungsionalitas pendaftaran tamu digital.

Fitur
-Pendaftaran Tamu: Tamu dapat mengisi nama, email, dan nomor telepon untuk RSVP dll. Harus memasukkan kode rsvp dahulu
-Login sebagai admin
-Register sebagai admin
-Dashboard Admin: Admin dapat melihat data tamu, menghapus tamu, mengedit data tamu, mengubah status kehadiran, atau menambah tamu secara manual.
