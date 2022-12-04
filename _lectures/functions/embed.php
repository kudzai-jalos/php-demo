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

  function saySomething($name) {
    echo $name;
  }

  function add(...$nums){
    $sum = 0;
    foreach($nums as $num)
    {
      $sum+=$num;
    }
    return $sum;
  }

  function addRec(...$nums){
    if (count($nums) == 1) {
      return $nums[array_key_first($nums)];
    }
    return $nums[array_key_first($nums)] + add(...array_splice($nums,1));
  }

  saySomething(add(1,2,3,4,5,6,7));

  ?>
</body>

</html>