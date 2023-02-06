@extends('layouts.main_layout')

@section('content')
    <ul>
        @foreach ($people as $person)
            <li>
                {{$person->firstName}} {{$person->lastName}}
            </li>
        @endforeach
    </ul>
@endsection