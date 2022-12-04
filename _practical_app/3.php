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

  use function PHPSTORM_META\type;

  if (1 + 1 == 1) echo "I love PHP";
  else if (1 + 1 == 11) echo "I will enjoy coding with php";
  else echo "bruh";

  echo "<br>";
  for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
  }
  $variable = "";
  switch (gettype($variable)) {
    case "array":
      echo "This is an array";
      break;
    case "string":
      echo "This is a str";
      break;
    case "integer":
      echo "This is a int";
      break;
    case "NULL":
      echo "This is a NULL";
      break;
    case "float":
      echo "This is a float";
      break;
    default:
      echo "I don't know this type";
      break;
  }
  ?>
</body>

</html>