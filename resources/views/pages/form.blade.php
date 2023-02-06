@extends('layouts.main_layout')

@section('content')
    <form action="{{route('person.save')}}" method="POST">
        @csrf
        <label for="firstName">Nome</label>
        <input type="text" name="firstName">
        <label for="lastName">Cognome</label>
        <input type="text" name="lastName">
        <label for="dateOfBirth">Data di nascita</label>
        <input type="date" name="dateOfBirth">
        <label for="height">Altezza</label>
        <input type="number" name="height">
        <input type="submit" value="CREA">
    </form>
@endsection