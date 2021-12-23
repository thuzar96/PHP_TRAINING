<?php
$db = mysqli_connect("localhost","root","root","mydb");
//if($db){
//  echo "connected";
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="chart.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['name', 'salary'],
          <?php
            $sql= "SELECT * FROM employees";
            $data= mysqli_query($db,$sql);
            while ($result = mysqli_fetch_assoc($data)) {
              echo "['".$result['name']."',".$result['salary']."],";
            }
          ?>
        ]);

        var options = {
          title: 'Salary Chart'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  <title>Salary Chart</title>
</head>
<body>
<div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>

