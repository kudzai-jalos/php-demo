<?php

    if (isset($_POST['submit'])) {
      $username  = $_POST["username"];
      $password  = $_POST["password"];
      echo "submitted" . "<br>";
      echo "Username: " . $username . "<br>";
      echo "Password: " . $password . "<br>";
    }

    // if (isset($_POST['username'])) {
    //   echo "Username" . $_POST["username"];
    // }

    // if (isset($_POST['password'])) {
    //   echo "Password" . $_POST["password"];
    // }


  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    h1 {
      text-align: center;
      color: blue;
      font-family: sans-serif;
    }

    form {

      width: 550px;
      max-width: 100%;
      display: flex;
      flex-direction: column;
      padding: 0rem 1rem;
      margin: 0 auto;
    }

    input {
      border:none;
      padding: .2rem;
      margin: .5rem 0;
      box-shadow: 0 2px 2px 2px rgba(0, 0, 0, .25);
    }
  </style>


</head>
<body>
  <h1>Login</h1>
  <form action="embed.php" method="POST">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password">
    <input type="submit" name="submit" value="Submit">
  </form>
  
  
</body>
</html>