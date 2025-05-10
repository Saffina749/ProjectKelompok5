<?php
$login_error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Login yang diizinkan
    $email_benar = 'kelima@gmail.com';
    $password_benar = 'kelima67';

    if ($email === $email_benar && $password === $password_benar) {
        header("Location: index.html");
        exit();
    } else {
        $login_error = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="card p-4 shadow-sm" style="width: 100%; max-width: 400px;">
    <h2 class="text-center mb-4">Login ke Sistem</h2>

    <?php if ($login_error): ?>
      <div class="alert alert-danger"><?php echo $login_error; ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required />
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>
</body>
</html>
