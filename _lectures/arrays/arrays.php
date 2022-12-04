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

  $numberList = [234, 12313, 635, "2342", 234, "<h1>Hello</h1>"];

  // for ($i=0; $i < count($numberList) ; $i++) { 
  //   echo $numberList[$i];
  //   echo "<br>";
  // }

  foreach ($numberList as $key => $value) {
    # code...
    echo $key . "-" . $value;
    echo "<br>";
    
  }

  ?>
</body>

</html>