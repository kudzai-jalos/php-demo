<?php

// function makeQuery($query)
// {

// }

function findAll()
{
  global $connection;
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query failed" . mysqli_error($connection));
  }

  return $result;
}

function createAccount()
{
  if (isset($_POST["submit"])) {
    global $connection;
    # extract data
    $username = $_POST["username"];
    $password = $_POST["password"];

    # Sanitize data
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);


    # Encrypt password
    $hashFormat = "$2y$10$";
    $salt = "thefridaygrindbeginlay";

    $hashF_and_salt = $hashFormat . $salt;

    $password = crypt($password, $hashF_and_salt);


    # validate data
    // if ($username && $password) {
    //   echo $username;
    //   echo $password;
    // } else {
    //   echo "Username or password cannot be empty.";
    // }



    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES('$username', '$password')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed" . mysqli_error($connection));
    } else {
      echo "Account created";
    }
  }
}


function updateAccount()
{
  if (isset($_POST['submit'])) {
    global $connection;

    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    # Sanitize data
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    $id = mysqli_real_escape_string($connection, $id);

    # Encrypt password
    $hashFormat = "$2y$10$";
    $salt = "thefridaygrindbeginlay";

    $hashF_and_salt = $hashFormat . $salt;

    $password = crypt($password, $hashF_and_salt);

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed" . mysqli_error($connection));
    } else {
      echo "Account updated";
    }
  }
}

function deleteAccount()
{
  if (isset($_POST['submit'])) {
    $id = $_POST['id'];

    global $connection;

    $query = "DELETE FROM users ";
    $query .= "WHERE id='$id'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed" . mysqli_error($connection));
    } else {
      echo "Account deleted successfully";
    }
  }
}


function showIdOptions()
{
  $result = findAll();

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}

function showAllData()
{
  $result = findAll();

  while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);
  }
}

function showAdminData()
{
  $result = findAll();

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
?>
    <pre><?php print_r($row); ?></pre>
    <form class="mb-3" action="login_delete.php" method="post">
      <?php echo "<input type='hidden' value='$id' name='id' />" ?>
      <input name="submit" class="btn btn-danger" type="submit" value="Delete">
    </form>

<?php
  }
}
