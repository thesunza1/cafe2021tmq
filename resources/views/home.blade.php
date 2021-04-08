@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


    <style>


    </style>
@endsection

@section('scripts')


    <script src="{{ asset('js/home/home.js') }}"></script>
    <script>

        //chose drink .
        function chose_drk(row) {
            //get this row
            var thisrow = row.parentNode.parentNode.parentNode;
            //get row chose drinks
            var Nrow = thisrow.rowIndex;
            //get value drink
            var idDrink = row.value;

            //get json form laravel
            var Drinks_json = @json($drinks) ;
            //var Drinks_arr = JSON.parse('Drinks_json');
            //find price for drink
            var priceDrk= 0;
            Drinks_json.forEach(function(drink,index) {
                if(drink.id==idDrink) priceDrk=drink.price;
                //console.log(drink.id);

            });
            //console.log(priceDrk);
            //get cell  for change
            var price = document.getElementById('addDrinks').rows[Nrow].cells[1];
            price.innerHTML = '<h2>'+ priceDrk +'</h2>';

            //change total price ;

            var num = thisrow.cells[2].getElementsByTagName('input')[0].value ;
            //console.log(num);
            var prices = thisrow.cells[1];
            var price = prices.getElementsByTagName('h2')[0];
            var totalprice = thisrow.cells[5];
            // console.log(price.innerHTML);

            totalprice.innerHTML = num * price.innerHTML + " vnd";

        }
    </script>
@endsection



{{-- @section('navs')
<div class="topnav" id="myTopnav">
    <a href=" {{ route('home')}}" class="active">tables</a>
    <a href=" {{route('menu')}} " >menu</a>
    @if (Auth::user()->role_id == 0)
        <a href="#contact">statistical</a>
        <a href="#about">admin page</a>
    @endif

 </div>
@endsection --}}



@section('content')



<br>
<h1 class="noti_table">being none:</h1>
@foreach ($tables as $table)
    @if ($table->idStatus==1)
    <div class="tables inline">
        <button class="bnt_tables" onclick="getval(this)" name="bnt_table" value=" {{ $table->id }} ">

            <input type="hidden" class="idstatus" name="idstatus" value="{{ $table->idStatus }}">
            <img class="img_table" src="{{ $table->image }}" alt="">
            <h2 style="color:black;">table {{ $table->id }}</h2>
        </button>
    </div>
    @endif

@endforeach
<br>
<h1 class="noti_table">being have: </h1>
@foreach ($tables as $table)
    @if ($table->idStatus==2)
    <div class="tables inline">
        <button class="bnt_tables" onclick="getval(this)" name="bnt_table" value=" {{ $table->id }} ">
            <input type="hidden" class="idstatus" name="idstatus" value="{{ $table->idStatus }}">
            <img class="img_table" src="{{ $table->image }}" alt="">
            <h2 style="color:black;">table {{ $table->id }}</h2>

        </button>

    </div>
    @endif

@endforeach
<br>
<h1 class="noti_table">being group:</h1>
@foreach ($tables as $table)
    @if ($table->idStatus==3 && $table->addTable != '')
    {{-- <script>console.log("{{$table->addTable}}");</script> --}}
    @php
        $stradd = trim($table->addTable, ' ') ;
        $tableadd = explode(' ',$stradd) ;

    @endphp
    <div class="tables inline">
        <button class="bnt_tables" onclick="getval(this)" name="bnt_table" value=" {{ $table->id }} ">
            <input type="hidden" name="idstatus" class="idstatus" value="{{ $table->idStatus }}">
            <img class="img_table" src="{{ $table->image }}" alt="">

            <h2 style="color:black;">table {{ $table->id }}
                @foreach ($tableadd as $items )
                     {{ ' | table '.$items }}
                @endforeach
            </h2>
        </button>
    </div>
    @endif

@endforeach

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2 id="tbl_name">table </h2>
        </div>
        <div class="modal-body">
            <button class="accordion">add drinks</button>
            <div class="panel">
                <br>
                <form action="{{ route('order.store') }}" method="post">
                    @csrf
                    <input type="hidden" class="Ntable" name="Ntable" value="1">
                    <input type="hidden" class="idStatus" name="idstatus" value="1">
                    <table class="table" id="addDrinks">

                        <tr class="row header green">
                            <td class="cell">
                                Drinks
                            </td>
                            <td class="cell">
                                Unit Price
                            </td>
                            <td class="cell">
                                Quantity
                            </td>
                            <td class="cell">
                                Date Sold
                            </td>
                            <td class="cell">
                                Status
                            </td>
                            <td class="cell">
                                total price
                            </td>
                            <td class="cell">
                                delete
                            </td>
                        </tr>

                        <tr class="row">
                            <td class="cell">
                                <div class="select">
                                    <select onchange="chose_drk(this) "  name="drk_id[]">
                                        @foreach ($drinks as $drink)
                                            <option value="{{ $drink->id }}">{{ $drink->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </td>
                            <td class="cell">
                                <h2>18000</h2>
                            </td>
                            <td class="cell">
                                <input type="number" min="1" value="1" name="quanitity[]" onchange="changeprice(this)" id="">
                            </td>
                            <td class="cell">
                                03/15/2014
                            </td>
                            <td class="cell">
                               <input type="text" name="status[]" class="text">
                            </td>
                            <td class="cell">
                                18000 vnd
                            </td>
                            <td class="cell">
                                <button class="red" onclick="deleteRow(this)">delete</button>
                            </td>
                        </tr>
                    </table>
                    <div>
                        <button type="submit" class="bnt_table">add Drinks</button>
                    </div>
                </form>
                    <button class="bnt_table black" onclick="insRow()">add row</button>
                    <br>
                </div>

                <button class="accordion">get bill</button>
                <div class="panel ">
                    <div id="bill"></div>

                <div>
                    <form action="{{ route('home.sendbill') }}" method="POST">
                    @csrf
                    <input type="hidden" class="Ntable" name="Ntable" value="1">
                    <button type="submit" class="bnt_table">pay all</button>

                    </form>

                </div>

                </div>
            <button class="accordion">change table</button>
            <div class="panel">
                <br>
                <form action="{{ route('home.changeTable') }}" method="post">
                   <div class="select">
                    <select onchange="chose_drk(this)" name="changetbl">
                       @foreach ($tables as $table )
                            @if ($table->idStatus !=3)
                                <option value="{{ $table->id }}" >{{ $table->id }}</option>
                            @endif
                        @endforeach
                          </select>
                       </div>
                     @csrf
                    <input type="hidden" class="Ntable" name="Ntable" value="1">

                    <button type="submit" class="bnt_table">change table</button>
                </form>

                <br>
            </div>

            <button class="accordion">add table to group</button>

            <div class="panel">
                <br>
                <form action="  {{ route('home.addgroup') }}" method="post">
                    @csrf
                    @foreach ($tables as $table)
                        @if ($table->idStatus==3 && $table->addTable != '')
                            <div class="form-check form-check-inline checkboxs">
                                <input class="form-check-input" type="checkbox" name="gettable[]" value="{{ $table->id }}">
                                <label class="form-check-label" for="inlineCheckbox1"> {{ $table->id }} </label>
                            </div>
                        @endif
                        @if ($table->idStatus == 1 || $table->idStatus ==2 )
                            <div class="form-check form-check-inline checkboxs">
                                <input class="form-check-input " type="checkbox" name="gettable[]" value="{{ $table->id }}">
                                <label class="form-check-label" for="inlineCheckbox1"> {{ $table->id }} </label>
                            </div>
                        @endif
                    @endforeach
                    <input type="hidden" class="Ntable" name="Ntable" value="1">
                    <button type="submit" class="bnt_table">add group</button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <h3></h3>
        </div>
    </div>

</div>

<!-- //model box -->
@endsection
