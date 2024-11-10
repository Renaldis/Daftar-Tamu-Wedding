// untuk membuat navbar item icon nya aktif tergantung dari scrollan

window.addEventListener("scroll", function () {
  const sections = document.querySelectorAll("section"); // Ambil semua elemen section
  const navLinks = document.querySelectorAll(".navbar a"); // Ambil semua link di navbar

  sections.forEach((section) => {
    const rect = section.getBoundingClientRect();
    // Jika bagian tersebut dalam jendela viewport
    if (rect.top >= 0 && rect.top < window.innerHeight) {
      navLinks.forEach((link) => {
        link.classList.remove("active"); // Hapus aktif dari semua link
        // Cek ID dari bagian yang dilihat
        if (link.getAttribute("href") === `#${section.id}`) {
          link.classList.add("active"); // Menambahkan aktif untuk link
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
  music.currentTime = 0; // Set waktu ke awal
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
