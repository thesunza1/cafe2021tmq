@extends('layouts/app')
@section('styles')
    <title>laravel google line chart tutorial example - NiceSnippets.com</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="{{ asset('css/statistical/statistical.css') }}">
    <style>
        div.div-st {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 2px black ;

        }
        .btn {
            border: none; /* Remove borders */
            color: white; /* Add a text color */
            padding: 11px 28px; /* Add some padding */
            cursor: pointer; /* Add a pointer cursor on mouse-over */
        }
        .info {
            margin-left: 400px !important;
            background-color: #2196F3;} /* Blue */
        .info:hover {background: #0b7dda;
                    color: white;
        }
        .st-hl1 h1 {
            background-color: #2196F3;
            color: white !important;
        }
    </style>
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
            <br>
            <h3>statistical to : </h3>
            <input type="date" name="today" id="today" value="{{ $today }}">
            <br>
            <br>
            <button type="submit" class="btn info" style="margin-left: 20%">choose time  </button>
        </form>

    </div>
    <h1 style="margin:50px 0px 0px 130px;">inquantity for drinks</h1>
    <br>
    <div id="columnDrink" class="div-st" style="width: 90%; height: 500px; margin-left: 5%;"></div>
    <h1 style="margin:50px 0px 0px 130px;">totalprice in warehouse </h1>
    <br>
    <hr>
    <div id="linechart" class="div-st" style="width: 90%; height: 500px; margin-left: 5%;"></div>
    {{-- <h1 style="margin:50px 0px 0px 130px;">totalprice in order</h1> --}}
    {{-- <br> --}}
    <div id="lineOrder" class="div-st" style="width: 90%; height: 500px; margin-left: 5%;"></div>
    <br>
    <hr>

    </div>
@endsection

@section('scripts')
   <script type="text/javascript">
        var priceOrder =  <?php echo $priceOrder; ?>;
        var totalprice = <?php echo $totalprice; ?>;
        var drinkQuantitys = <?php echo $drinkQuantity; ?>;
        //console.log(totalprice);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(totalprice);
            var optionsWarehouse = {
                backgroundColor:"#B7BDFB",
                title: 'Site totalprice for warehouse',
                curveType: 'function',
                colors:['red'],
                legend: { position: 'bottom' }
            };
            var optionsOrder = {
                backgroundColor:"#B1C2EE",

                title: 'Site totalprice for orders',
                curveType: 'function',
                legend: { position: 'bottom' }
            };
            var optionsQuantity = {
                backgroundColor:"#B1C2EE",
                title: 'total of inquantity sell',
                colors: ['#EC2116'],
            };
            var chart = new google.visualization.LineChart(document.getElementById('linechart'));
            chart.draw(data, optionsWarehouse);
            // Order
            var orderData = google.visualization.arrayToDataTable(priceOrder);
            var orderChart = new google.visualization.LineChart(document.getElementById('lineOrder'));
            orderChart.draw(orderData,optionsOrder);

            var quantityData = google.visualization.arrayToDataTable(drinkQuantitys);
            var chart = new google.visualization.ColumnChart(
            document.getElementById('columnDrink'));
            chart.draw(quantityData, optionsQuantity);
        }
    </script>
@endsection




