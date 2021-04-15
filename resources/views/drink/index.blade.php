@extends('layouts.app')
@section('styles')

    {{-- <link rel="stylesheet" href="{{ asset('css/home/home.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/drink/menu.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

@endsection

@section('navs')
 {{-- <div class="topnav" id="myTopnav">
    <a href=" {{ route('home')}} " >tables</a>
    <a href=" {{route('menu')}} " class="active">menu</a>
    <a href="#contact">statistical</a>
    <a href="#about">admin page</a>
</div> --}}
@endsection



@section('content')
<br>
<h1 class="noti_table">all menu:</h1>
@foreach ($drinks as $drink)
    <div class="tables inline">
        <button class="bnt_tables"   name="drink_id" value=" {{ $drink->id }} ">
            <img class="img_table"  src="{{ $drink->image }}" alt="">
            <br> <br>
            <h2 style="color:black;">{{ $drink->name }}</h2>
        </button>
    </div>

@endforeach


    {{-- modelbox  --}}
    <div id="myModal" class="modal">

        <!-- Modal content -->


    </div>


    @csrf

@endsection


@section('scripts')
    <script src="{{ asset('js/drink/menu.js') }}"></script>
    <script>
        $(document).ready(function() {
        $('.bnt_tables').click(function(even) {
        var drink_id = $(this).attr("value");
        $.get("menu/getdrink/"+drink_id, function(data) {
            $('#myModal').html(data);
        });
        $('#myModal').show();
    });
});
    </script>
@endsection

