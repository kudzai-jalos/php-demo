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

  $count = 10;
  $preNum1 = 1;
  $preNum2 = 1;
  echo $preNum1 . "<br>";
  echo $preNum2 . "<br>";

  while ($count > 2) {
    $count--;
    $next = $preNum1 + $preNum2;
    echo $next . "<br>";

    $preNum2 = $preNum1;
    $preNum1 = $next;
  }


  ?>
</body>

</html>