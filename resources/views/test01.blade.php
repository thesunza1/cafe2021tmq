@extends('layouts.app')

@section('content')

@isset($Statuses)
    @foreach ($Statuses as $Status)
        <img src=" {{ asset("$Status->image") }} " alt="">
        <p> {{ $Status->status }} </p>
    @endforeach
@endisset


@endsection
