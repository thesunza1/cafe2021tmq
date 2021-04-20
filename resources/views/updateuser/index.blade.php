@extends('layouts.app')
@section('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/updateuser/updateuser.css') }} ">
@endsection

@section('scripts')
    <script src="{{ asset('js/updateuser/updateuser.js') }}"></script>
@endsection
@section('content')
<div class="wh-cten">
    <div class="wh-hl1">
        <h1>updateuser</h1>
        <br>
    </div>
       @isset($success)
           <div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $success }}</strong>
    </div>
       @endisset


 <table class="table" id="addDrinks">

    <tr class="row header green">
        <td class="cell">
           stt
        </td>

        <td class="cell">
           username
        </td>
        <td class="cell">
          name
        </td>
        <td class="cell">
           phone
        </td>
        <td class="cell">
            role
        </td>
        <td class="cell">
           create at
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
    @foreach ($users as $item)
    <tr class="row ">
        <td class="cell">
            {{ $item->id }}
        </td>
        <td class="cell">
           {{ $item->username }}
        </td>
        <td class="cell">
           {{ $item->name}}
        </td>
        <td class="cell">
           {{ $item->phone }}
        </td>
        <td class="cell">
            @if ($item->role_id==1)
               staff
            @else
               admin
            @endif

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
                <h2 class="stt">update updateuser </h2>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <br>
                    <form action="{{ route('home.updateuser.update') }}" method="post">
                        @csrf
                        <input type="hidden" id="wh_id" name="id" value="1">
                        <div class="wh-fm-ud">
                            <div class="nit">
                                <h2>username:</h2>
                                <input type="text" id="up_username"  name="username" >
                            </div>
                            <div class="nit">
                                <h2>password:</h2>
                                <input type="text" id="up_pass" name="pass" >
                            </div>
                            <div class="nit">
                                <h2>name:</h2>
                                <input type="text" id="up_name" name="name" >
                            </div>
                            <div class="nit">
                                <h2>phone:</h2>
                                <input type="text" id="up_phone"  name="phone" >
                            </div>
                            <div class="nit">
                                <h2>role:</h2>
                                <input type="text" id="up_role" name="role" disabled>
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
                <h2 class="stt">create updateuser </h2>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <br>
                    <form action="{{ route('home.updateuser.store') }}" method="post">
                        @csrf
                        <input type="hidden" id="wh_cr_id" name="id" value="1">
                        <div class="wh-fm-ud">
                            <div class="nit">
                                <h2>username:</h2>
                                <input type="text" id="cr-username"  name="username" required>
                            </div>
                            <div class="nit">
                                <h2>password:</h2>
                                <input type="text" id="cr_pass" name="pass"  >
                            </div>
                            <div class="nit">
                                <h2>name :</h2>
                                <input type="text" id="cr_name"  name="name" >
                            </div>
                            <div class="nit">
                                <h2>phone:</h2>
                                <input type="text" id="cr_phone"  name="phone" >
                            </div>
                            <div class="nit">
                                <h2>role:</h2>

                                <input type="text" id="cr_role" name="role" disabled value="staff">
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
                <h2 class="stt">create updateuser </h2>
            </div>
            <div class="modal-body">
                <div class="panel">
                    <br>
                    <form action="{{ route('home.updateuser.delete') }}" method="post">
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


