<html>
<head>
    <title>laravel google line chart tutorial example - NiceSnippets.com</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

    <div>
        <form action="{{ route('home.statistical') }}" method="post">
            @csrf
            <input type="date" name="formday" id="formday">
            <input type="date" name="today" id="today">
            <button type="submit">choose time </button>

        </form>
    </div>
    <h1 style="margin:50px 0px 0px 130px;">totalprice in warehouse </h1>
    <div id="linechart" style="width: 900px; height: 500px;"></div>
    <h1 style="margin:50px 0px 0px 130px;">totalprice in order</h1>
    <div id="lineOrder" style="width: 900px; height: 500px;"></div>
    <script type="text/javascript">
        var priceOrder =  <?php echo $priceOrder; ?>;
        var totalprice = <?php echo $totalprice; ?>;
        console.log(totalprice);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(totalprice);
            var options = {
                title: 'Site totalprice Line Chart',
                curveType: 'function',
                legend: { position: 'bottom' }
            };
            var chart = new google.visualization.LineChart(document.getElementById('linechart'));
            chart.draw(data, options);
            // Order
            var orderData = google.visualization.arrayToDataTable(priceOrder);
            var orderChart = new google.visualization.LineChart(document.getElementById('lineOrder'));
            orderChart.draw(orderData,options);
        }
    </script>
</body>
</html>
