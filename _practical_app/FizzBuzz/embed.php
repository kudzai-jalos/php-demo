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

  for ($i = 1; $i < 100; $i++) {
    $result = "";

    if ($i % 3 == 0)
      $result = "Fizz";
    if ($i % 5 == 0)
      $result .= "Buzz";
  
    if (strlen($result)>0)
      echo $i . " - " . $result . "<br>";
    else 
      echo $i . "<br>";
  }
  ?>
</body>

</html>