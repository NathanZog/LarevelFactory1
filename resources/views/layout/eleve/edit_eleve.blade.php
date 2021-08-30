@extends('template/template')

@section('content')
<form action="{{route('updateeleve', $data->id)}}" method="post" class="container">
    @csrf

    Nom: <input type="text" value="{{$data->nom}}" name="nom">
    Prénom: <input type="text" value="{{$data->prénom}}" name="prénom">
    âge: <input type="number" value="{{$data->age}}" name="age">
    Demandeur d'emploi: <input type="checkbox" value="{{$data->état}}" name="état">
    description: <input type="text" value="{{$data->description}}" name="description">
    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
