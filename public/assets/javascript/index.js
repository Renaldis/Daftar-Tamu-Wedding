const button = document.querySelector("button");

const buttonInvitation = document.querySelector(".openInvitation");
buttonInvitation.addEventListener("click", function () {
  document.body.classList.add("animate-up");

  setTimeout(function () {
    window.location.href = "home.php";
  }, 500);
});

// DIBAWAH INI UNTUK BERANDA

// Memeriksa apakah pengunjung berasal dari halaman sebelumnya
if (sessionStorage.getItem("fromAnimation") === "true") {
  document.body.classList.add("animate-in");
  sessionStorage.removeItem("fromAnimation");
} else {
}

// Menangkap event klik pada tombol
const buttonOpenInvitation = document.getElementById("openInvitation");
buttonOpenInvitation.addEventListener("click", function () {
  sessionStorage.setItem("fromAnimation", "true");
  document.body.classList.add("animate-up");

  setTimeout(function () {
    window.location.href = "home.php";
  }, 500);
});
