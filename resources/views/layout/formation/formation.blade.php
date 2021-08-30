@extends('template/template')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nom</th>

        <th scope="col">Description</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row"><a href="{{route('showformation', $item->id)}}">{{$item->nom}}</a></th>

            <td>{{$item->description}}</td>
            <td><form action="{{route('destroyformation', $item->id)}}" method="post">
                @method("DELETE")
                @csrf
                <button type="submit">Delete</button>
            </form></td>

          </tr>
        @endforeach


    </tbody>
  </table>
@endsection
