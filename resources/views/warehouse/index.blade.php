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
    <tr class="row">
        <td class="cell">

        </td>

        <td class="cell">

        </td>
        <td class="cell">

        </td>
        <td class="cell">

        </td>
        <td class="cell">

        </td>
        <td class="cell">

        </td>
        <td class="cell">

        </td>
        <td class="cell">
            <button  class="button wh-bt-cr" onclick="md_cr()">create</button>
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
            <button class="button wh-bt-dl" onclick="md_dl({{ $item->id }})">delete it</button>
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
            <div class="modal-header blue">
                <h2 class="stt">update warehouse </h2>
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
    <div class="modal" id="md-create">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="stt">create warehouse </h2>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <br>
                    <form action="{{ route('home.warehouse.store') }}" method="post">
                        @csrf
                        <input type="hidden" id="wh_cr_id" name="id" value="1">
                        <div class="wh-fm-ud">
                            <div class="nit">
                                <h2>name goods :</h2>
                                <input type="text" id="cr_name"  name="name" required>
                            </div>
                            <div class="nit">
                                <h2>price :</h2>
                                <input type="number" id="cr_price" name="price" min="1" value="1000" >
                            </div>
                            <div class="nit">
                                <h2>inquantity :</h2>
                                <input type="number" id="cr_inquanti" min="1" value="1" name="inquantity" >
                            </div>
                            <div class="nit">
                                <h2>total price :</h2>
                                <input type="number" id="cr_tt" name="ttprice" value="1000" disabled >
                            </div>
                            <div class="nit">
                                <h2>created at :</h2>
                                <input type="text" id="cr_times" name="createdat" disabled >
                            </div>
                            <div class="nit">
                                <h2>updated at :</h2>
                                <input type="text" id="cr_up_time" name="updatedat" disabled >
                            </div>
                            <br>
                            <div class="nit">
                                <h2></h2>
                                <button type="submit" class="button">create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="md-delete">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="stt">create warehouse </h2>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <br>
                    <form action="{{ route('home.warehouse.delete') }}" method="post">
                        @csrf
                        <input type="hidden" id="wh_dl_id" name="id" value="1">
                        <h1><center>do you want delete it?</center></h1>
                        <br>
                        <table class="wh-tb-delete">
                            <tr class="">
                                <td class="">
                                    <div></div>
                                </td>
                                <td class="">

                                    <button type="submit" class="button red">delete</button>

                                </td>
                            </tr>
                        </table><br>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


