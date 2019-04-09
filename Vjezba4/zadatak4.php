<html>
<head>
<script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
</head>
<body>
<canvas id="canvas" style="max-width:600px"></canvas>
<script>
     var config = {
          type: 'line',
          data: {
               labels: ['January', 'February', 'March', 'April', 'May'],
               datasets: [{
                    label: 'My First dataset',
                    borderColor: 'red',
                    backgroundColor: 'red',
                    data: [
                         25,30,27,40,43
                    ],
               }, { fill: false,
                    label: 'My Second dataset',
                    fill: false,
                    borderColor: 'blue',
                    backgroundColor: 'blue',
                    data: [
                         8,50,19,45,35
                    ],
}] }
};
     window.onload = function() {
          var ctx = document.getElementById('canvas').getContext('2d');
          window.myLine = new Chart(ctx, config);
     };
</script>
</body>
</html>
