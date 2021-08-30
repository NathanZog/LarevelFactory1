@extends('template/template')

@section('content')

<form action="{{route('storetypeformation')}}" method="post" class="container">
    @csrf

    Nom: <input type="text" value="" name="nom">


    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
