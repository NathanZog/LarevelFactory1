@extends('template/template')

@section('content')
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$data->nom}}</li>
      <li class="list-group-item">{{$data->prénom}}</li>
      <li class="list-group-item">{{$data->description}}</li>
      <li class="list-group-item">{{$data->age}}</li>
      <li class="list-group-item">{{$data->état}}</li>
        <form action="{{route('destroyeleve', $data->id)}}" method="post">
            @csrf
            @method("DELETE")
        <button class="btn btn-danger" type="submit">Delete</button>
        <a class="btn btn-primary" href="{{route('editeleve',$data->id)}}">Edit</a>
        </form>

    </ul>
  </div>
@endsection
