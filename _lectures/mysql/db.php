
<?php


function connect()
{
  $connection = mysqli_connect("localhost", "root", "", "loginapp");

  if ($connection) {
    // echo "We are connected";
  } else {
    die("Database connection failed");
  }

  return $connection;
}

$connection = connect();

?>