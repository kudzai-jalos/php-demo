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

  $num1 = 10;
  $num2 = 20;

  echo $num1 . " + " . $num2 . " = " . ($num1 + $num2);

  $values = array($num1, $num2, $num1 + $num2);
  $asValues = array("num1" => $num1, "num2" => $num2, "sum" => $num1 + $num2);

  echo "<br>";
  print_r($values);

  echo "<br>";
  print_r($asValues);
  ?>
</body>

</html>