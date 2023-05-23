<!DOCTYPE html>
<html>
<head>
  <title>Bar Chart Example</title>
  <!-- include Chart.js library -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>ISPAAD</title>
    <style>
        body {
        background-image: url("images/image\ 1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        }
    </style>
</head>
<body>
  <canvas id="myChart"></canvas>
  
  <script>
    // get data from records HTML page
    var records = document.getElementById("records").innerHTML;
    
    // parse records data to JSON format
    var data = JSON.parse(records);
    
    // extract data for bar chart
    var labels = [];
    var values = [];
    for (var i = 0; i < data.length; i++) {
      labels.push(data[i].name);
      values.push(data[i].count);
    }
    
    // create bar chart using Chart.js library
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: '# of Records',
                data: values,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
  </script>
</body>
</html>

