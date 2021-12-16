<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chess Board</title>
</head>

<body>
  <?php

  $num = 11;
  $star= 0;
  $string = 0;
  $space = 1;
  $space = $num - 1;
  for ($string = 1; $string <= $num; $string++) {
    for ($star = 1; $star <= $space; $star++)
      echo " &nbsp;&nbsp;&nbsp;   ";

    for ($star = 1; $star <= 2 * $string - 1; $star++)
      printf("<font size='11' color='black'> * </font> ");
    printf("<br>");
    $space = $space - 1;
  }
  $space = 1;
  for ($string = 1; $string <= $num - 1; $string++) {
    for ($star = 1; $star <= $space; $star++) {
      echo " &nbsp;&nbsp;&nbsp;  ";
    }
    $space++;
    for ($star = 1; $star <= 2 * ($num - $string) - 1; $star++) {
      printf("<font size='11' color='black'> * </font> ");
    }
    echo "<br>";
  }
  ?>
</body>

</html>