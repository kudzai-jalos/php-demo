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

  function whoWon($board)
  {
    $xWin = false;
    $oWin = false;

    //Rows and columns
    for ($i = 0; $i < count($board); $i++) {
      $rowWin = true;
      $colWin = true;

      $rowValue = $board[$i][0];
      $colValue = $board[0][$i];

      for ($j = 0; $j < count($board); $j++) {
        $rowWin = $rowWin && $board[$i][$j] == $rowValue;
        $colWin = $colWin && $board[$j][$i] == $colValue;
      }

      $xWin = $xWin || ($rowWin && $rowValue == "X") || ($colWin && $colValue == "X");
      $oWin = $oWin || ($rowWin && $rowValue == "O") || ($colWin && $colValue == "O");
    }

    $bdWin = true;
    $fdWin = true;

    $bdValue = $board[0][0];
    $fdValue = $board[0][2];

    for ($i = 0; $i < count($board); $i++) {
      $bdWin = $bdWin && $board[$i][$i] == $bdValue;
      $fdWin = $fdWin && $board[$i][count($board) - 1 - $i] == $fdValue;
    }
    $xWin = $xWin || ($bdWin && $bdValue == "X") || ($fdWin && $fdValue == "X");
    $oWin = $oWin || ($bdWin && $bdValue == "O") || ($fdWin && $fdValue == "O");

    if ($xWin == $oWin) return "Tie";
    if ($xWin) return "X";
    else return "O";
  }

  $board = [["X","O","X"],["X","O","O"],["X","O","X"]];
  echo "<br>";

  foreach ($board as $key => $row) {
    foreach ($row as $key2 => $value) {
      echo $value . " ";
    }
    echo "<br>";
  }
  echo whoWon($board);
  ?>
</body>

</html>