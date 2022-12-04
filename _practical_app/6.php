<?php 

if (isset($_POST["submit"])) {
  $query = $_POST["query"];

  echo 'You searched for "'. $query . '"' . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: rgb(200, 220, 209);
    }

    h1 {
      color: blue;
      font-family: sans-serif;
      width: 550px;
      max-width: 100%;
      margin: 0 auto;
      margin-bottom: 2rem;

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
      border: none;
      border-radius: 5px;
      padding: .4rem;
      margin: .5rem 0;
      box-shadow: 0 2px 2px 2px rgba(0, 0, 0, .25);
      font-size: 1.2rem;

    }

    .form-error {
      color: darkred;
      padding: .3rem;
      /* background-color: #e2a3b3; */
      width: 550px;
      max-width: 100%;
      margin: 0 auto;
    }

    input[type="submit"] {
      border: none;
      background-color: blue;
      color: white;
      border-radius: 5px;
      padding: .3rem 2rem;
      align-self: left;
      width: fit-content;
      font-size: 1.5rem;
    }
  </style>


</head>

<body>
  <h1>Search</h1>
  <form action="6.php" method="POST">
    <input type="text" name="query" placeholder="Enter query">
    <input type="submit" name="submit" value="Submit">
  </form>


</body>

</html>