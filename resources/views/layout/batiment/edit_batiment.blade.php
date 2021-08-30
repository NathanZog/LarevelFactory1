@extends('template/template')

@section('content')


<form action="{{route('updatebatiment', $data->id)}}" method="post" class="container">
    @csrf

    Nom: <input type="text" value="{{$data->nom}}" name="nom">
    description: <input type="text" value="{{$data->description}}" name="description">
    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
