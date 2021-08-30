@extends('template/template')

@section('content')
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$data->nom}}</li>
      <li class="list-group-item">{{$data->description}}</li>
        <form action="{{route('destroyformation', $data->id)}}" method="post">
            @csrf
            @method("DELETE")
        <button class="btn btn-danger" type="submit">Delete</button>
        <a class="btn btn-primary" href="{{route('editformation',$data->id)}}">Edit</a>
        </form>
    </ul>
  </div>
@endsection
