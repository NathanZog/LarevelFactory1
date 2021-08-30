@extends('template/template')

@section('content')

<form action="{{route('updatetypeformation', $data->id)}}" method="post" class="container">
    @csrf

    Nom: <input type="text" value="{{$data->id}}" name="nom">
    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
 </form>


@endsection
