<?php

    $names = ["Harry","Draco","Dobbi3","Hermit"];
    if (isset($_POST['submit'])) {
      $username  = $_POST["username"];
      $password  = $_POST["password"];
      // echo "submitted" . "<br>";
      // echo "Username: " . $username . "<br>";
      // echo "Password: " . $password . "<br>";

      $min = 5;
      $max = 10;

      if (strlen($username) < $min) {
        echo '<p class="form-error">Username has to be longer than 5 characters.</p>' . "<br>";
      }

      if (strlen($username) > $max) {
        echo '<p class="form-error">Username cannot be longer than 10 characters.</p>' . "<br>";
      }

      if (!in_array($username,$names)) {
        echo '<p class="form-error">Sorry, you are not authorized</p>' . "<br>";
      }
      else {
        echo '<p>Welcome </p>';
      }
    }

    


  ?>