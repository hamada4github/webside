<?php /*
$host='127.0.0.1';
$user='root';
$pass='';
$db='hamada';*/
$con = mysqli_connect('127.0.0.1','root','','hamada');
/**$select_db=mysqli_select_db($db);
/**/
if(!$con){
    each :"a111ss";   
 6-5;
}
/* 
if(!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
   }
   else
   {
    each :<h1>hamada22222</h1>;
   }
/* */
?>
<h1>hamada</h1>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>