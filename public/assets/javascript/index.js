const button = document.querySelector("button");

button.addEventListener("mouseover", () => {
  button.style.backgroundColor = "#333"; // Ganti dengan warna baru saat hover
  button.style.color = "white";
});

button.addEventListener("mouseout", () => {
  button.style.backgroundColor = "transparent"; // Kembali ke warna awal saat tidak hover
  button.style.color = "#333";
});

const buttonInvitation = document
  .querySelector(".openInvitation")

  .addEventListener("click", function () {
    // Menambahkan class untuk animasi
    document.body.classList.add("animate-up");

    // Tunggu animasi selesai
    setTimeout(function () {
      // Setelah animasi selesai, arahkan ke halaman baru
      window.location.href = "beranda.php"; // Ganti dengan URL halaman yang diinginkan
    }, 500); // Durasi yang sama seperti waktu animasi
  });

// DIBAWAH INI UNTUK BERANDA

// Memeriksa apakah pengunjung berasal dari halaman sebelumnya
if (sessionStorage.getItem("fromAnimation") === "true") {
  // Jika benar, tambahkan kelas animate-in ke body
  document.body.classList.add("animate-in");
  sessionStorage.removeItem("fromAnimation"); // Hapus item session untuk tidak memicu lagi ketika refresh
} else {
  // Jika tidak, maka tidak ada animasi yang ditambahkan
}

// Menangkap event klik pada tombol
document
  .getElementById("openInvitation")
  .addEventListener("click", function () {
    // Menambahkan sessionStorage
    sessionStorage.setItem("fromAnimation", "true");

    // Menerapkan animasi
    document.body.classList.add("animate-up");

    // Tunggu animasi selesai
    setTimeout(function () {
      window.location.href = "beranda.php"; // Arahkan ke beranda setelah animasi
    }, 500);
  });
