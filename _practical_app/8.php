<?php

function encryptMyPassword()
{
  if (isset($_POST["submit"])) {
    $password = $_POST['password'];

    # Encrypt password
    $hashFormat = "$2y$10$";
    $salt = "themondaygrindwillbegin";
    $hashF_and_salt = $hashFormat . $salt;

    $encryptedPassword = crypt($password,$hashF_and_salt);

    echo "Your encrypted password: " . $encryptedPassword;
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

  <div class="container">
    <h2 class="mb-3">Encrypt a password</h2>
    <form action="8.php" method="POST">
      <div class="mb-3 row">
        <label for="password" class="col-4 col-form-label">Your Password</label>
        <div class="col-8">
          <input type="text" class="form-control" name="password" id="password" placeholder="Enter your password">
        </div>
      </div>
      <div class="mb-3 row">
        <div class="offset-sm-4 col-sm-8">
          <input type="submit" name="submit" class="btn btn-primary" value="Encrypt">
        </div>
      </div>
      <div class="mb-3 row">
        <p><?php encryptMyPassword() ?></p>
      </div>

    </form>

  </div>

</body>

</html>