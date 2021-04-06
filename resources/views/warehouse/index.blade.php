@extends('layouts.app')
@section('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/warehouse/warehouse.css') }} ">
@endsection

@section('scripts')
    <script src="{{ asset('js/warehouse/warehouse.js') }}"></script>
@endsection
@section('content')
<div class="wh-cten">
    <div class="wh-hl1">
        <h1>warehouse</h1>
        <br>
    </div>
 <table class="table" id="addDrinks">

    <tr class="row header green">
        <td class="cell">
           stt
        </td>

        <td class="cell">
            name
        </td>
        <td class="cell">
           price
        </td>
        <td class="cell">
            Quantity
        </td>
        <td class="cell">
            Date Sold
        </td>
        <td class="cell">
            total price
        </td>
        <td class="cell">
            delete
        </td>
        <td class="cell">
            update
        </td>
    </tr>
    @foreach ($warehouses as $item)
    <tr class="row ">
        <td class="cell">
            {{ $item->id }}
        </td>
        <td class="cell">
           {{ $item->toName }}
        </td>
        <td class="cell">
           {{ $item->inquantity}}
        </td>
        <td class="cell">
           {{ $item->price }}
        </td>
        <td class="cell">
           {{ $item->totalIn }}
        </td>
        <td class="cell">
            {{ $item->created_at }}
        </td>
        <td class="cell">
            <button class="button wh-bt-dl" onclick="wh_dl({{ $item->id }})">delete it</button>
        </td>
        <td class="cell">
            <button  class="button wh-bt-ud" onclick="md_ud({{ $item->id}})">update</button>
        </td>
    </tr>


    @endforeach


</table>


</div>
    <div class="modal" id="md-update">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="stt">update </h2>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <br>
                    <form action="{{ route('home.warehouse.post_update') }}" method="post">
                        @csrf
                        <input type="hidden" id="wh_id" name="id" value="1">
                        <div class="wh-fm-ud">
                            <div class="nit">
                                <h2>name goods :</h2>
                                <input type="text" id="ud_name"  name="name" >
                            </div>
                            <div class="nit">
                                <h2>price :</h2>
                                <input type="number" id="up_price" name="price" >
                            </div>
                            <div class="nit">
                                <h2>inquantity :</h2>
                                <input type="number" id="up_inquanti" name="inquantity" >
                            </div>
                            <div class="nit">
                                <h2>total price :</h2>
                                <input type="number" id="up_tt" name="ttprice" disabled >
                            </div>
                            <div class="nit">
                                <h2>created at :</h2>
                                <input type="text" id="cr_time" name="createdat" disabled >
                            </div>
                            <div class="nit">
                                <h2>updated at :</h2>
                                <input type="text" id="up_time" name="updatedat" disabled >
                            </div>
                            <br>
                            <div class="nit">
                                <h2></h2>
                                <button type="submit" class="button">update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


