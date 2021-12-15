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

$a=11; $b=0; $c=0; $space = 1;
  $space = $a - 1;
  for ($c = 1; $c <= $a; $c++)
  {
    for ($b = 1; $b <= $space; $b++)
    echo " &nbsp;&nbsp;&nbsp;   ";

     for ($b = 1; $b <= 2*$c-1; $b++)
     printf("<font size='11' color='black'> * </font> ");
     printf("<br>");
       $space=$space-1;
  }
  $space = 1;
  for ($c = 1; $c <= $a - 1; $c++)
  {
    for ($b = 1; $b <= $space; $b++){
     echo " &nbsp;&nbsp;&nbsp;  ";
     }
    $space++;
    for ($b = 1 ; $b <= 2*($a-$c)-1; $b++) {
      printf("<font size='11' color='black'> * </font> ");
   }
     echo "<br>";
  }
  ?>
</body>
</html>