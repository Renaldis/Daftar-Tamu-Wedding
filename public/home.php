<?php
session_start();

require_once __DIR__ . "/../Config/db.php";
$conn = getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['code-rsvp'])) {
      $code_rsvp = trim($_POST['code-rsvp']);

      try {
          // Koneksi ke database
          $pdo = getConnection();
          if (!$pdo) {
              throw new Exception("Koneksi ke database gagal.");
          }

          // Query untuk mengecek kode RSVP
          $stmt = $pdo->prepare("SELECT * FROM guests WHERE code_rsvp = :code_rsvp");
          $stmt->bindParam(':code_rsvp', $code_rsvp, PDO::PARAM_STR);
          $stmt->execute();

          if ($stmt->rowCount() > 0) {
            $guest = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['guest_data'] = $guest;
            $_SESSION['code-rsvp'] = $code_rsvp;
            $_SESSION['valid_code'] = true;
            header("Location: registration-view.php");
            exit();
        } else {
            echo "<script>alert('Kode RSVP tidak ditemukan. Mohon periksa kembali.');</script>";
            echo "<p class='error'>Kode RSVP tidak ditemukan. Mohon periksa kembali.</p>";
        }
      } catch (PDOException $e) {
          echo "Terjadi kesalahan pada sistem: " . $e->getMessage();
          exit();
      }
  } else {
      echo "Kode RSVP tidak diinputkan.";
  }
}
    // Hapus session sebelumnya
    if(isset($_SESSION['guest_data'])){
      header("Location: home.php");
      unset($_SESSION['guest_data']);
      exit();
    }

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/userUI.css">
  <link rel="stylesheet" href="assets/home.css">
  <link rel="stylesheet" href="style/home-mobile.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&amp;family=Roboto&amp;display=swap"
    rel="stylesheet" />
  <title>Daftar Tamu Pernikahan</title>
</head>

<body>
  <!-- Audio element for background music -->
  <audio id="bg-music" autoplay loop>
    <source src="./assets/music/L-O-V-E.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>

  <!-- Navbar -->
  <nav class="navbar">
    <ul>
      <li><a href="index.html"><i class="fas fa-home"></i>Beranda</a></li>
    </ul>
    <li><a href="#couple"><i class="fas fa-heart"></i>Pasangan</a></li>
    <li><a href="#information"><i class="fas fa-calendar-alt"></i>Acara</a></li>
    <li><a href="#rsvp"><i class="fas fa-envelope"></i>Undangan</a></li>
    <li><a href="#comments"><i class="fas fa-comments"></i>Ucapan Selamat</a></li>
  </nav>
  <!-- Navbar -->

  <main>
    <!-- Content -->
    <section class="content">
      <h1>Assalamualaikum Wr. Wb</h1>
      <p>Dengan penuh cinta dan kasih karunia, kami dengan hormat mengundang Anda untuk menghadiri Perayaan Pernikahan kami.</p>
    </section>
    <section id="couple">
      <div class="groom-bride-section">
        <img alt="Background image of the groom and bride" class="wedding-image" src="assets/img/womenNman.jpeg"
          width="1200" />
        <div class="overlay">
          <h2>Pengantin Pria dan Wanita</h2>
          <div class="profile-wrap">
            <div class="profile">
              <img alt="Groom's profile picture" src="assets/img/man.jpeg" />
              <h3>M Fiqri Anies</h3>
              <p>Putra dari Bapak Muhammad Fauzan dan Ibu Ratna Dewi Kusuma.</p>
              <a href="" target="_blank"><i class="fab fa-instagram fa-fw"></i>@Fiqri Anies</a>
            </div>
            <div class="profile and">
              <span>&</span>
            </div>
            <div class="profile">
              <img alt="Bride's profile picture" src="assets/img/women.jpeg" />
              <h3>Meiliza Dwi Putri S.E</h3>
              <p>Putri tercinta dari Bapak Nirwan Iskandar dan Ibu Elivo Nasution.</p>
              <a href="" target="_blank"><i class="fab fa-instagram fa-fw"></i>@Meiliza</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content -->


    <!-- Information -->
    <section id="information" class="information">
      <h2>Catat Tanggal</h2>
      <h3 class="saturday">Selasa</h3>
      <div class="dates">
        <p class="date">21</p>
        <p class="month">Januari<br>2025</p>
      </div>
      <div class="information-wrapping">
        <article class="event">
          <h2 class="title">Akad</h2>
          <p class="time">09:30 - 11:00 <span>WIB</span></p>
          <button onclick="window.open('https://calendar.app.google/XxHeHqAhkWJqhgx26', '_blank');"><i
              class="fas fa-calendar-alt"></i> Tambah ke Kalender</button>
        </article>
        <article class="event">
          <h2 class="title">Resepsi</h2>
          <p class="time">12:00 - 14:30 <span>WIB</span></p>
          <button onclick="window.open('https://calendar.app.google/jmEKWWNQFWVKaNZH6', '_blank');"><i
              class="fas fa-calendar-alt"></i> Tambah ke Kalender</button>
        </article>
        <article class="event">
          <h2 class="title">Perayaan Pernikahan</h2>
          <h3>DRESS CODE : COCKTAIL ATTIRE</h3>
          <p class="time">19:30 - 22:00 <span>WIB</span></p>
          <button onclick="window.open('https://calendar.app.google/HzuhBo1Jm62LA3EC9', '_blank');"><i
              class="fas fa-calendar-alt"></i> Tambah ke Kalender</button>
        </article>
        <article class="location">
          <h2>The St. Regis Jakarta</h2>
          <p>Jalan Haji R. Rasuna Said 4, Setia Budi, Kecamatan Setiabudi</p>
          <p>Kota Jakarta Selatan</p>
          <button onclick="window.open('https://maps.google.com/?cid=8982988377651589278', '_blank');"><i
              class="fas fa-map-marker-alt"></i> Lihat Peta</button>
        </article>
      </div>
    </section>
    <!-- Information -->
    <!-- GALLERY -->
    <section class="gallery">
      <img alt="Couple holding hands, man in white shirt and woman in silver dress" height="400"
        src="./assets/img/banner-hero1.jpg" width="600" />
      <img alt="Couple in black attire, woman wearing pearl necklace" height="400" src="./assets/img/banner-hero2.jpg"
        width="600" />
      <img alt="Couple in black attire, woman wearing pearl necklace" height="400" src="./assets/img/banner-hero3.jpg"
        width="600" />
      <img alt="Woman in black dress" height="400" src="./assets/img/banner-hero3.jpg" width="600" />
      <img alt="Couple in black attire, woman wearing pearl necklace" height="400" src="./assets/img/banner-hero2.jpg"
        width="600" />
      <img alt="Couple holding hands, man in white shirt and woman in silver dress" height="400"
        src="./assets/img/banner-hero1.jpg" width="600" />
    </section>
    <!-- GALLERY -->
    <!-- RSVP -->
    <section id="rsvp">
      <article class="rsvp">
        <h1>RSVP</h1>
        <p>Masukkan kode undangan 6 digit Anda</p>
        <form method="post" class="rsvpButton">
          <input type="text" placeholder="Kode RSVP" name="code-rsvp" required minlength="6">
          <button type="submit">RSVP</button>

        </form>

      </article>
      <article class="countdown-wrapping countdown">
        <h2>21 Januari 2025</h2>
        <div class="countdown-timer">
        <div>
            <span id="days">0</span>
            <p>Days</p>
        </div>
        <div>
            <span id="hours">0</span>
            <p>Hours</p>
        </div>
        <div>
            <span id="minutes">0</span>
            <p>Minutes</p>
        </div>
        <div>
            <span id="seconds">0</span>
            <p>Seconds</p>
        </div>
    </div>
      </article>
    </section>
    <!-- RSVP -->
    <!-- COMMENTS -->
    <section id="comments" class="comments">
      <h1>Harapan Terhangat Anda</h1>
      <div id="comment-list">
        <!-- Komentar yang ada akan ditampilkan di sini -->
        <?php
        require_once '../Config/db.php';
        $sql = "SELECT * FROM guests ORDER BY created_at DESC";
        $stmt = $pdo->query($sql);
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($comments as $comment) {
          if($comment['notes'] != null){
            echo '<div class="comment">';
            echo '<div class="name">' . htmlspecialchars($comment['name']) . '</div>';
            echo '<div class="text">' . htmlspecialchars($comment['notes']) . '</div>';
            echo '<div class="time">' . date('d M Y H:i', strtotime($comment['created_at'])) . '</div>';
            echo '</div>';
          }else{
            echo "";
          }
        }
        ?>
      </div>
    </section>
    <!-- COMMENTS -->
    <!-- MUSIC -->
    <div class="music-control">
      <button id="play-button" class="music-button">
        <img src="./assets/img/play.png" alt="Play Music">
      </button>
      <button id="stop-button" class="hide music-button">
        <img src="./assets/img/stop.png" alt="Stop Music">
      </button>
    </div>
    <!-- MUSIC -->
  </main>
  <footer></footer>
  <script src="assets/javascript/index.js"></script>
  <script src="assets/javascript/home.js"></script>
</body>

</html>