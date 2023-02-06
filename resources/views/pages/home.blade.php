@extends('layouts.main_layout')

@section('content')
    <ul>
        @foreach ($people as $person)
            <li>
                <a href="{{route('person.show', $person)}}">{{$person->firstName}} {{$person->lastName}}</a>
            </li>
        @endforeach
    </ul>
@endsection