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

  $preRow = array(1);
  $count = 29;

  foreach ($preRow as $index => $value) {
    echo $value . " ";
  }
  echo "<br>";

  while ($count > 0) {
    echo  "Row " . (30 - $count) . "<br>";

    $nextRow = array();

    for ($i = 0; $i < count($preRow); $i++) {

      array_push($nextRow, $preRow[$i] + ($i == 0 ? 0 : $preRow[$i - 1]));
    }
    array_push($nextRow, 1);

    foreach ($nextRow as $index => $value) {
      echo $value . " ";
    }
    echo "<br>";
    $preRow = $nextRow;

    $count--;
  }

  ?>
</body>

</html>