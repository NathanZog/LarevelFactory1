@extends('template/template')

@section('content')

<form action="{{route('storeformation')}}" method="post" class="container">
    @csrf

    Nom: <input type="text" value="" name="nom">
    description: <input type="text" value="" name="description">

    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
