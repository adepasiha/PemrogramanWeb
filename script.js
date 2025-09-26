// Ambil elemen body dan tombol
const body = document.body;
const toggleBtn = document.getElementById("mode-toggle");

// Event listener klik tombol
toggleBtn.addEventListener("click", () => {
  body.classList.toggle("dark-mode");

  if (body.classList.contains("dark-mode")) {
    toggleBtn.textContent = "☀️ Light Mode";
  } else {
    toggleBtn.textContent = "🌙 Dark Mode";
  }
});


// Tampilkan sneakers sesuai merek yang dipilih
document.addEventListener("DOMContentLoaded", () => {
  const brandBtns = document.querySelectorAll(".brand-btn");
  const brandDisplay = document.getElementById("brand-display");

  // Data sneakers per brand (contoh)
  const sneakers = {
    Nike: ["Air Force 1", "Air Jordan 1", "Nike Dunk Low"],
    Adidas: ["Superstar", "Ultraboost", "Yeezy 350"],
    Converse: ["Chuck Taylor", "Run Star Hike", "One Star"],
    Vans: ["Old Skool", "Sk8-Hi", "Slip-On"]
  };

  brandBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      const brand = btn.dataset.brand;
      const list = sneakers[brand]
        .map(item => `<li>${item}</li>`)
        .join("");

      brandDisplay.innerHTML = `
        <h3>${brand}</h3>
        <ul>${list}</ul>
      `;
    });
  });
});






