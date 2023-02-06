@extends('layouts.main_layout')

@section('content')
    <h1>{{$person->firstName}} {{$person->lastName}}</h1>
    <h3>{{$person->dateOfBirth}}</h3>
    @isset($person->height)
        <h2>{{$person->height}}cm</h2>
    @endisset
    <a href="{{route('home')}}">BACK</a>
@endsection