<?php

$conn=mysqli_connect("localhost","root","", "shopping");
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Gender', 'Age', 'Income']
          <?php
          $query="select * from survey";
          $res=mysqli_query($conn,$query);
          while($data-mysqli_fetch_array($res)){
            $gender=$data['gender'];
            $age=$data['age'];
            $income=$data['income'];
            ?>
            ['<?php echo $gender ?>',<?php echo $age ?>, <?php echo $income ?>],
            <?php
          }
          ?>
        ]);

        var options = {
          chart: {
            title: 'Shopping n Rent Survey Report',
            subtitle: '',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html>
