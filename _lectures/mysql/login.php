<?php

if (isset($_POST["submit"])) {
  # extract data
  $username = $_POST["username"];
  $password = $_POST["password"];

  # validate data
  // if ($username && $password) {
  //   echo $username;
  //   echo $password;
  // } else {
  //   echo "Username or password cannot be empty.";
  // }

  $connection = mysqli_connect("localhost", "root", "", "loginapp");

  if ($connection) {
    echo "We are connected";
  } else {
    die("Database connection failed");
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
  <!-- <h1>Login</h1>
  <form action="form_process.php" method="POST">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password">
    <input type="submit" name="submit" value="Submit">
  </form> -->
  <div class="container">
    <div class="col-sm-6">
      <form action="login.php" method="POST">
        <h1>Login</h1>
        <div class="form-group mb-3">
          <label for="username">Username</label>
          <input class="form-control" type="text" name="username" placeholder="Enter Username">
        </div>
        <div class="form-group mb-3">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" placeholder="Enter Password">
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </div>


      </form>
    </div>
  </div>

</body>

</html>