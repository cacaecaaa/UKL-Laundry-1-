<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Laundry</title>
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
  <div id = "particles-js">
    <div class="center">
      <h1>SignUp</h1>
      <form action="proses_signup.php" method="post">
        <div class="txt_field">
          <input type="text" name="nama" required>
          <span></span>
          <label><i class="fas fa-pen"></i>&nbsp;Nama</label>
        </div>

        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label><i class="fas fa-user"></i>&nbsp;Username</label>
        </div>

        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label><i class="fas fa-key"></i>&nbsp;Password</label>
        </div>

        <div class = "txt_field">
          <input type="text" name="alamat" required>
          <span></span>
          <label><i class="fas fa-user"></i>&nbsp;Alamat</label>
        </div>

        <div class="txt_field">
          <select name="role">
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
          </select>
        </div>
        <input type="submit" name="signup" value="SignUp">
        <div class="login_link">
          Have account? <a href="login.php">Login</a>
        </div>
      </form>
    </div>
  </div>
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>
</body>
</html>