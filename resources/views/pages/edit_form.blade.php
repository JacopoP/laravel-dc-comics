@extends('layouts.main_layout')

@section('content')
    <form action="{{route('person.change', $person)}}" method="POST">
        @csrf
        <label for="firstName">Nome</label>
        <input type="text" name="firstName" value="{{$person->firstName}}">
        <label for="lastName">Cognome</label>
        <input type="text" name="lastName" value="{{$person->lastName}}">
        <label for="dateOfBirth">Data di nascita</label>
        <input type="date" name="dateOfBirth" value="{{$person->dateOfBirth}}">
        <label for="height">Altezza</label>
        <input type="number" name="height" value="{{$person->height}}">
        <input type="submit" value="CREA">
    </form>
@endsection