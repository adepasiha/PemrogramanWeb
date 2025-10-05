<?php
session_start();

// Kalau sudah login, langsung redirect ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sneakers Hub — Landing Page</title>
  <meta name="description" content="Landing page sederhana untuk project Sneakers Hub.">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1 class="logo">Sneakers ADEZBROOMENN</h1>
      <nav aria-label="Navigasi utama">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#brands">Merek</a></li>
          <li><a href="#about">Profil</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
      <button id="mode-toggle">☀️ Light Mode</button>
    </div>
  </header>

  <main>
    <!-- Hero Section -->
    <section id="hero" class="hero">
      <div class="container">
        <h2>Temukan Sneakers Favoritmu</h2>
        <p>Platform untuk para sneakerheads — penuh inspirasi, tren terbaru, dan pilihan merek populer.</p>
        <a href="#brands" class="btn">Lihat Merek</a>
      </div>
    </section>

    <!-- Brands Section -->
    <section id="brands" class="brands">
      <div class="container">
        <h2>Pilih Merek</h2>
        <div class="brand-list">
          <button class="brand-btn" data-brand="Nike">Nike</button>
          <button class="brand-btn" data-brand="Adidas">Adidas</button>
          <button class="brand-btn" data-brand="Converse">Converse</button>
          <button class="brand-btn" data-brand="Vans">Vans</button>
        </div>
        <div id="brand-display" class="brand-display">
          <p>Klik salah satu merek untuk melihat sneakersnya.</p>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
      <div class="container">
        <h2>Profil Sneakers Hub</h2>
        <p>Sneakers Hub hadir untuk kamu yang ingin selalu update dengan dunia sneakers. Kami percaya setiap sneakers punya vibe tersendiri, sesuai dengan gaya hidup pemiliknya.</p>
        <p><strong>Website ini dibuat oleh ADE PASIHA TANGKE ALLO.</strong></p>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
      <div class="container">
        <h2>Hubungi Kami</h2>
        <form action="#" method="post">
          <label for="name">Nama:</label>
          <input type="text" id="name" name="name" placeholder="Nama lengkap">

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="nama@gmail.com">

          <label for="message">Pesan:</label>
          <textarea id="message" name="message" rows="4" placeholder="Tuliskan pesanmu..."></textarea>

          <button type="submit" class="btn">Kirim</button>
        </form>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>© <span id="year">2025</span> Sneakers Hub [Adezbro]</p>
    </div>
  </footer>

  <!-- Javascript -->
  <script src="darkmode.js"></script>
  <script src="brands.js"></script>
  <script src="script.js"></script>
</body>
</html>
