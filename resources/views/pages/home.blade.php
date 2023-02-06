@extends('layouts.main_layout')

@section('content')
    <a href="{{route('person.create')}}">Crea una nuova persona</a>
    <ul>
        @foreach ($people as $person)
            <li>
                <a href="{{route('person.show', $person)}}">{{$person->firstName}} {{$person->lastName}}</a>
            </li>
        @endforeach
    </ul>
@endsection