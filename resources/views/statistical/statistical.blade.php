@extends('layouts/app')
@section('styles')
    <title>laravel google line chart tutorial example - NiceSnippets.com</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="{{ asset('css/statistical/statistical.css') }}">
@endsection
@section('content')
<div class="st-cter">
    <div class="st-hl1">
        <h1>statistical</h1>
    </div>

    <div class="st-fm-date">
        <form action="{{ route('home.statistical') }}" method="post">
            @csrf
            <h3>statistical form :  </h3>
            <input type="date" name="formday" id="formday" value="{{ $formday }}">
            <br>

            <h3>statistical to : </h3>
            <input type="date" name="today" id="today" value="{{ $today }}">
            <br>
            <button type="submit" style="margin-left: 20%">choose time  </button>
        </form>

    </div>
    <h1 style="margin:50px 0px 0px 130px;">totalprice in warehouse </h1>
    <br>
    <div id="linechart" style="width: 90%; height: 500px; margin-left: 5%;"></div>
    <h1 style="margin:50px 0px 0px 130px;">totalprice in order</h1>
    <br>
    <div id="lineOrder" style="width: 90%; height: 500px; margin-left: 5%;"></div>

    </div>
@endsection

@section('scripts')
   <script type="text/javascript">
        var priceOrder =  <?php echo $priceOrder; ?>;
        var totalprice = <?php echo $totalprice; ?>;
        console.log(totalprice);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(totalprice);
            var optionsWarehouse = {
                title: 'Site totalprice for warehouse',
                curveType: 'function',
                colors:['red'],
                legend: { position: 'bottom' }
            };
            var optionsOrder = {
                title: 'Site totalprice for orders',
                curveType: 'function',
                legend: { position: 'bottom' }
            };
            var chart = new google.visualization.LineChart(document.getElementById('linechart'));
            chart.draw(data, optionsWarehouse);
            // Order
            var orderData = google.visualization.arrayToDataTable(priceOrder);
            var orderChart = new google.visualization.LineChart(document.getElementById('lineOrder'));
            orderChart.draw(orderData,optionsOrder);
        }
    </script>
@endsection




