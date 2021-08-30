@extends('template/template')

@section('content')
<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{$data->nom}}</li>
        <form action="{{route('destroytypeformation', $data->id)}}" method="post">
        @method("DELETE")
        @csrf
        <button class="btn btn-danger" type="submit">Delete</button>
        <a class="btn btn-primary" href="{{route('edittypeformation',$data->id)}}">Edit</a>
        </form>
    </ul>
  </div>
@endsection
