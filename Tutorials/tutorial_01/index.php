<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
<table class="content">
  <?php
    for($row=1;$row<=8;$row++)
    {
      echo "<tr>";
      for($col=1;$col<=8;$col++)
		  {
        $total=$row+$col;
        if($total%2==0)
		    {
          echo "<td class='white'></td>";
        }
		    else
        {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
        }
      }
        echo "</tr>";
    }
  ?>
</table> <!-- /.table---->
</body>
</html>