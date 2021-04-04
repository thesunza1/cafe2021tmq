@extends('layouts.app')
@section('styles')

    <link rel="stylesheet" href="{{ asset('css/warehouse/warehouse.css') }} ">
@endsection

@section('scripts')

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
    @foreach ($collection as $item)

    @endforeach
    <tr class="row ">
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

</table>


</div>

@endsection


