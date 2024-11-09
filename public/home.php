<?php
session_start();

// Cek jika ada parameter 'code-rsvp' dalam URL
if(isset($_POST['code-rsvp'])){
    $code = $_POST['code-rsvp'];
    if($code == '123456'){
        header('Location: registration-view.php');
        exit();
    } else {
      echo "<p>Salah Input Code RSVP</p>";
    }
}
    // Hapus session sebelumnya
    if(isset($_SESSION['guest_data'])){
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&amp;family=Roboto&amp;display=swap"
    rel="stylesheet" />
  <title>Daftar Tamu Pernikahan</title>
</head>

<body >
  <!-- Navbar -->
  <nav class="navbar">
    <ul>
      <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
      <li><a href="#couple"><i class="fas fa-heart"></i>Couple</a></li>
      <li><a href="#information"><i class="fas fa-calendar-alt"></i>Events</a></li>
      <li><a href="#rsvp"><i class="fas fa-envelope"></i>Invitation</a></li>
      <li><a href="#comments"><i class="fas fa-comments"></i>Comments</a></li>
    </ul>
  </nav>
  <!-- Navbar -->

  <main>
    <!-- Content -->
    <section class="content">
      <h1>Assalamualaikum Wr. Wb</h1>
      <p>By love and the grace of love, we cordially invite you to attend the Wedding Celebration of</p>
    </section>
    <section id="couple">
      <div class="groom-bride-section">
        <img alt="Background image of the groom and bride" class="wedding-image"
          src="assets/img/womenNman.jpeg"
          width="1200" />
        <div class="overlay">
          <h2>Groom and Bride</h2>
          <div class="profile-wrap">
            <div class="profile">
              <img alt="Groom's profile picture" src="assets/img/man.jpeg"/>
              <h3>M Fiqri Anies BBA. MoC</h3>
              <p>Son of Mr. M Anies Hasan & Mrs Eva Elisa Wibisono</p>
                <a href="" target="_blank"><i class="fab fa-instagram fa-fw"></i>@renaldiisptr</a>
            </div>
            <div class="profile and">
              <span>&</span>
            </div>
            <div class="profile">
              <img alt="Bride's profile picture" src="assets/img/women.jpeg"/>
              <h3>Meiliza Dwi Putri S.E</h3>
              <p>Daughter of Mr. Nirwan Iskandar (Alm) & Mrs Elivo Nasution</p>
              <a href="" target="_blank"><i class="fab fa-instagram fa-fw"></i>@renaldiisptr</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content -->

    <!-- Information -->
    <section id="information" class="information">
      <h2>Save The Date</h2>
      <h3 class="saturday">Saturday</h3>
      <div class="dates">
        <p class="date">29</p>
        <p class="month">June<br>2024</p>
      </div>
      <div class="event">
        <h2 class="title">Akad</h2>
        <p class="time">09:30 - 11:00 <span>WIB</span></p>
        <button><i class="fas fa-calendar-alt"></i> Add to Calendar</button>
      </div>
      <div class="event">
        <h2 class="title">Reception</h2>
        <p class="time">12:00 - 14:30 <span>WIB</span></p>
        <button><i class="fas fa-calendar-alt"></i> Add to Calendar</button>
      </div>
      <div class="event">
        <h2 class="title">Wedding Celebration</h2>
        <h3>DRESS CODE : COCKTAIL ATTIRE</h3>
        <p class="time">19:30 - 22:00 <span>WIB</span></p>
        <button><i class="fas fa-calendar-alt"></i> Add to Calendar</button>
      </div>
      <div class="location">
        <h2>The St. Regis Jakarta</h2>
        <p>Jalan Haji R. Rasuna Said 4, Setia Budi, Kecamatan Setiabudi</p>
        <p>Kota Jakarta Selatan</p>
        <button><i class="fas fa-map-marker-alt"></i> View Map</button>
      </div>
    </section>
    <!-- Information -->
     <!-- GALLERY -->
    <section class="gallery">
   <img alt="Couple holding hands, man in white shirt and woman in silver dress" height="400" src="https://storage.googleapis.com/a1aa/image/9dAE1ng8Sf3RIyBNJEu6Y8Qziw3U6naCIJg0AuTOrt93wo3JA.jpg" width="600"/>
   <img alt="Couple in black attire, woman wearing pearl necklace" height="400" src="https://storage.googleapis.com/a1aa/image/Npj79tzNxV5kNRem6TuO0pPna7BOeJR5ycQHtB3TgnluhRvTA.jpg" width="600"/>
   <img alt="Couple in black attire, woman wearing pearl necklace" height="400" src="https://storage.googleapis.com/a1aa/image/Npj79tzNxV5kNRem6TuO0pPna7BOeJR5ycQHtB3TgnluhRvTA.jpg" width="600"/>
   <img alt="Woman in black dress" height="400" src="https://storage.googleapis.com/a1aa/image/0nva0Sid0ObLFdS93YzSmbhJNX331Z2pysFuOltEJFRcY07E.jpg" width="600"/>
   <img alt="Couple in black attire, woman wearing pearl necklace" height="400" src="https://storage.googleapis.com/a1aa/image/Npj79tzNxV5kNRem6TuO0pPna7BOeJR5ycQHtB3TgnluhRvTA.jpg" width="600"/>
   <img alt="Couple holding hands, man in white shirt and woman in silver dress" height="400" src="https://storage.googleapis.com/a1aa/image/9dAE1ng8Sf3RIyBNJEu6Y8Qziw3U6naCIJg0AuTOrt93wo3JA.jpg" width="600"/>
  </section>
     <!-- GALLERY -->
      <!-- RSVP -->
  <section id="rsvp">
    <article class="rsvp">
        <h1>RSVP</h1>
        <p>Put your 6 digits invitation code</p>
        <form method="post" class="rsvpButton">
          <input type="text" placeholder="Invitation Code" name="code-rsvp" required minlength="6">
          <button type="submit">RSVP</button>
          
        </form>

    </article>
    <article class="countdown-wrapping">
        <h2>June 29<sup>th</sup>, 2024</h2>
        <div class="countdown">
            <div>
                <span>0</span>
                <p>Days</p>
            </div>
            <div>
                <span>0</span>
                <p>Hours</p>
            </div>
            <div>
                <span>0</span>
                <p>Minutes</p>
            </div>
            <div>
                <span>0</span>
                <p>Seconds</p>
            </div>
        </div>
    </article>
  </section>
      <!-- RSVP -->
       <!-- COMMENTS -->
       <section id="comments" class="comments">
        <h1>Your Warmest Wishes</h1>
        <div class="form-group">
            <input type="text" placeholder="Name">
        </div>
        <div class="form-group">
            <textarea placeholder="Say something..."></textarea>
        </div>
        <div class="comment">
            <div class="name">ahmad</div>
            <div class="text">congratss</div>
            <div class="time">16 seconds ago</div>
        </div>
        <div class="comment">
            <div class="name">Ahmad Zaky <span class="status"><i class="fas fa-check-circle"></i> GOING</span></div>
            <div class="text">BarakAllah fii kum, semoga mendapatkan rahmat Allah dalam membina keluarga sakinah, mawaddah, warrahmah. Aamiin Allahumma aamiin.</div>
            <div class="time">4 months ago</div>
        </div>
        <div class="comment">
            <div class="name">Lia Apriliyati Eviant <span class="status"><i class="fas fa-check-circle"></i> GOING</span></div>
            <div class="text">Selamat mei & fiqri ♡♡♡♡♡ semoga lancar acaranya, bahgia selau kalian ♡♡♡♡♡</div>
            <div class="time">4 months ago</div>
        </div>
    </section>
       <!-- COMMENTS -->
  </main>



  <a href="event-info.php" class="button">Daftar Tamu</a>

  <script src="assets/javascript/index.js"></script>
  <script src="assets/javascript/home.js"></script>
</body>

</html>