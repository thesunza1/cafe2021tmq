@extends('layouts.app')
@section('styles')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/updatetable/updatetable.css') }}">
    <style>
    .st-hl1 h1 {
        text-align: center;
        width: 80%;
        margin-left: 10%;
        color: white;background-color: #2195f3;
    }
    </style>
@endsection


@section('content')
    <div class="st-hl1">
        <h1>update table</h1>
    </div>
    <div class="contain">
        <div class="item">
            <button class="create green" onclick="md_cr()" id="create">create table</button>
        </div>
        <div class="item">
            <button class="delete red" onclick="md_dl()" id="delete">delete table </button>
        </div>
        <div class="item">
            <button class="restore blue" onclick="md_re()" id="restore">restore table</button>
        </div>
    </div>


    {{-- modelbox  --}}
    <div id="cr-table" class="modal">
        <div class="modal-content">
            <br>
            <h1>choose number to create tabel</h1>
            <br>
            <form action="{{ route('home.updatetable.store') }}" method="post">
                @csrf
                <input type="number" name="num" value="1" min="1" id="num-tbl">
                <button type="submit" class="button green">create</button>
            </form>
            <br>
            <br>
        </div>
    </div>
    <div id="dl-table"  class="modal">
        <div class="modal-content">
                <br>
                <div>
                    <form action="  {{ route('home.updatetable.delete') }}" method="post">
                    @csrf
                    @foreach ($cdl as $item)
                            <div class="form-check form-check-inline checkboxs">
                                <input class="form-check-input " type="checkbox" name="gettable[]" value="{{ $item->id }}">
                                <label class="form-check-label" for="inlineCheckbox1"> {{ $item->id }} </label>
                            </div>
                    @endforeach
                    <br>
                    <button type="submit" class="button red">delete table</button>
                    </form>
                </div>
                <br>
        </div>
    </div>
    <div id="md-restore" class="modal">
        <div class="modal-content">
                <div>
                    <br>
                    <form action="  {{ route('home.updatetable.restore') }}" method="post">
                    @csrf
                    @foreach ($restore as $item)
                            <div class="form-check form-check-inline checkboxs">
                                <input class="form-check-input " type="checkbox" name="gettable[]" value="{{ $item->id }}">
                                <label class="form-check-label" for="inlineCheckbox1"> {{ $item->id }} </label>
                            </div>
                    @endforeach
                    @if ( $restore->count() == 0)
                    <br> <br>
                            <h1>non have restore table </h1>
                    @else
                            <button type="submit" class="button blue">restore table</button>
                    @endif
                    <br>
                    </form>
                </div>
                <br>
        </div>
    </div>


@endsection
@section('scripts')
    <script src="{{ asset('js/table/updatetable.js') }}"></script>
@endsection
