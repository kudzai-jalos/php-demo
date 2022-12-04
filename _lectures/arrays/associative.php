<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  // normal arrays
  // has indicies
  $numbers = array("a", 1, "b", 3, "c");
  echo $numbers[2];
  echo "<br>";
  print_r($numbers);
  echo "<br>";

  // associative arrays
  // has labels
  $names = array("first_name" => "Harry", "last_name" => "Weasly");

  echo "<br>";
  print_r($names);
  echo "<br>";
  echo $names["first_name"] . " " . $names["last_name"]
  

  ?>
</body>

</html>