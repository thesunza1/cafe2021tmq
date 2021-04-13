@extends('layouts.app')
@section('styles')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init ({
            selector:'#status-up'
        });
        tinymce.init ({
            selector:'#status-cr'
        });
    </script>

    <link rel="stylesheet" href=" {{ asset('css/drink/create.css') }} ">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/menulist/menulist.css') }} ">
@endsection

@section('scripts')
    <script src="{{ asset('js/menulist/menulist.js') }}"></script>
@endsection
@section('content')
<div class="wh-cten">
    <div class="wh-hl1">
        <h1>menulist</h1>
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
           image
        </td>
        <td class="cell">
           status
        </td>
        <td class="cell">
            created at
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
    @foreach ($menulist as $item)
    <tr class="row ">
        <td class="cell">
            {{ $item->id }}
        </td>
        <td class="cell">
           {{ $item->name }}
        </td>
        <td class="cell">
           {{ $item->price}}
        </td>
        <td class="cell">
           {!! $item->status!!}
        </td>
        <td class="cell">
            <img class="img-drink" src="{{ asset($item->image)}}" alt="">

        </td>
        <td class="cell">
            <p>{{ $item->created_at }}</p>
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
                <h2 class="stt">update menulist </h2>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <br>
                    <form action="{{ route('home.menulist.post_update') }}" enctype="multipart/form-data" method="post">
                        @csrf
                                <input type="hidden" name="id" id="ml-up-id">
                                <label for="names"><b>name of drink:</b></label>
                                <input name="names" id="ml-up-name" type="text" required>


                                <label for="price"> price: </label>
                                <input type="number" name="price" required id="ml-up-price">

                                <b>image for drink:  </b>

                                <label for="imgs1" class="file">

                                    <input type="file" name="imgs1" id="actual-btn1" hidden  accept="image/*">
                                    <label for="actual-btn1">Choose File</label>
                                    <span id="file-chosen">
                                        <img src="" id="ml-up-img" alt="">
                                    </span>
                                </label>

                                <br>

                                <label for="status"> status for drink: </label>
                                <textarea name="status" id="status-up" cols="50 "  rows="10"></textarea>


                            <div class="divbt">
                                <button type="submit" class="signupbtn">update it</button>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" id="md-create">
        <div class="modal-content ">
            <div class="modal-header">
                <h2 class="stt">create menulist </h2>
            </div>
            <div class="modal-body">
                <div class="panel cr-wh">
                        <h1>them nuoc</h1>
                        <hr>
                        <form action="{{ route('menu.store' ) }}" method="post" enctype="multipart/form-data">
                            @csrf

                                <label for="names"><b>name of drink:</b></label>
                                <input name="names"type="text" required>


                                <label for="price"> price: </label>
                                <input type="number" name="price" required id="price ">

                                <b>image for drink:  </b>

                                <label for="imgs" class="file">

                                    <input type="file" name="imgs" id="actual-btn"  hidden  accept="image/*">
                                    <label for="actual-btn">Choose File</label>
                                    <span id="file-chosen">
                                        <img src="" alt="" id="ml-cr-img">
                                    </span>
                                </label>

                                <br>

                                <label for="status"> giới thiệu nuớc:</label>
                                <textarea name="status" id="status-cr" cols="50 "  rows="10"></textarea>


                            <div class="divbt">
                                <button type="submit" class="signupbtn">them vao </button>

                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal" id="md-delete">
        <div class="modal-content dl-content">
            <div class="modal-header red">
                <h2 class="stt">create menulist </h2>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <br>
                    <form action="{{ route('home.menulist.delete') }}" method="post">
                        @csrf
                        <input type="hidden" id="wh_dl_id" name="id" value="1">
                        <h1><center>do you want delete it?</center></h1>
                        <br>
                        <table class="wh-tb-delete ">
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


