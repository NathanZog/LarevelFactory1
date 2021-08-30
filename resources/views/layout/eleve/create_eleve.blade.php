@extends('template/template')

@section('content')

<form action="{{route('storeeleve')}}" method="post" class="container">
    @csrf

    Nom: <input type="text" value="" name="nom">
    Prénom: <input type="text" value="" name="prénom">
    âge: <input type="number" value="" name="age">
    Demandeur d'emploi: <input type="checkbox" value="" name="état">
    description: <input type="text" value="" name="description">
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
