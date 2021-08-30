@extends('template/template')

@section('content')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Age</th>
        <th scope="col">Demandeur d'emploi</th>
        <th scope="col">Description</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row"><a href="{{route('showeleve', $item->id)}}">{{$item->nom}}</a></th>
            <td>{{$item->prénom}}</td>
            <td>{{$item->age}}</td>
            <td> @if ($item->état== 1)
                Oui
            @else
            non
            @endif</td>
            <td>{{$item->description }}</td>
            <td><form action="{{route('destroyeleve', $item->id)}}" method="post">
                @method("DELETE")
                @csrf
                <button type="submit">Delete</button>
            </form></td>

          </tr>
        @endforeach


    </tbody>
  </table>
@endsection
