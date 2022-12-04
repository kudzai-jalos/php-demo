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

  function freqCheck($arr, $el, $lvl)
  {
    $result = [$lvl => 0];

    foreach ($arr as $key => $value) {
      if (gettype($value) == "array") {
        $nextLvlFreq = freqCheck($value, $el, $lvl + 1);
        foreach ($nextLvlFreq as $key => $value) {
          if (!array_key_exists($key + 1, $result)) {

            $result[$key + 1] = $value;
          } else $result[$key + 1] += $value;
        }
      } else if ($value == $el) {
        $result[$lvl]++;
      }
    }

    return $result;
  }

  function freqCount($arr, $el)
  {
    echo "Nested Array: \n";
    echo "Value: " . $el . "\n";
    print_r($arr);
    $frequencies = freqCheck($arr, $el, 0);
    $result = [];
    foreach ($frequencies as $key => $value) {
      array_push($result, [$key, $value]);
    }
    echo "Result: \n";
    print_r($result);

    return $result;
  }




  ?>
</body>

</html>