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
