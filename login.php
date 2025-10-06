<?php
session_start();

// Kredensial yang valid
$valid_username = "adepasiha";
$valid_password = "109";

$error = "";

// Jika form dikirim
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username === $valid_username && $password === $valid_password) {
        // Login sukses
        $_SESSION["username"] = $username;
        header("Location: dhasboard.php");
        exit();
    } else {
        // Login gagal
        $error = "Username atau password salah!";
    }
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sneakers Hub</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 350px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .btn {
      width: 100%;
      background-color: #222;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    .btn:hover {
      background-color: #444;
    }
    .error {
      color: red;
      text-align: center;
      margin-bottom: 10px;
    }
    .link {
      text-align: center;
      margin-top: 10px;
    }
    a {
      color: #222;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Sneakers Hub</h2>

    <?php if ($error): ?>
      <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="POST" action="">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" placeholder="Masukkan username" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Masukkan password" required>

      <button type="submit" class="btn">Login</button>
    </form>

    <div class="link">
      <a href="index.php">← Kembali ke Beranda</a>
    </div>
  </div>
</body>
</html>
