// untuk membuat navbar item icon nya aktif tergantung dari scrollan

window.addEventListener("scroll", function () {
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".navbar a");

  sections.forEach((section) => {
    const rect = section.getBoundingClientRect();
    if (rect.top >= 0 && rect.top < window.innerHeight) {
      navLinks.forEach((link) => {
        link.classList.remove("active");
        if (link.getAttribute("href") === `#${section.id}`) {
          link.classList.add("active");
        }
      });
    }
  });
});

// music control
// button start and stop
const startButton = document.getElementById("play-button");
const stopButton = document.getElementById("stop-button");
const music = document.getElementById("bg-music");

// Kontrol pemutaran musik
startButton.onclick = function () {
  music.play();
  startButton.classList.add("hide");
  stopButton.classList.remove("hide");
};

stopButton.onclick = function () {
  music.pause();
  music.currentTime = 0;
  startButton.classList.remove("hide");
  stopButton.classList.add("hide");
};

// Event listener untuk menampilkan pesan di console saat musik mulai diputar
music.addEventListener("play", function () {
  console.log("Music sudah terplay");
  startButton.classList.add("hide");
  stopButton.classList.remove("hide");
});
// music control

// Set tanggal target untuk countdown
const weddingDate = new Date("December 31, 2024 19:30:00").getTime();

// Update countdown setiap 1 detik
const countdownFunction = setInterval(function () {
  const now = new Date().getTime();
  const distance = weddingDate - now;

  // Perhitungan waktu
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Menampilkan hasil
  document.getElementById("days").textContent = days;
  document.getElementById("hours").textContent = hours;
  document.getElementById("minutes").textContent = minutes;
  document.getElementById("seconds").textContent = seconds;

  // Jika countdown berakhir
  if (distance < 0) {
    clearInterval(countdownFunction);
    document.querySelector(".countdown-timer").innerHTML =
      "The event has started!";
  }
}, 1000);

// Countdown Timer
