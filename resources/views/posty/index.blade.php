@extends('layout')
@section('tytul')
    WSB - Lista postów
@endsection

@section('podtytul')
    Lista postów
@endsection
@section('tresc')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Lp</th>
        <th scope="col">Tytuł</th>
        <th scope="col">Autor</th>
        <th scope="col">Data utworzenia</th>
        <th scope="col">Akcja</th>
      </tr>
    </thead>
    @if ($posty->count())
    @foreach ($posty as $post)
    <tbody>
      <tr>
        <th scope="row">{{ $post['id'] }}</th>
        <td><a href="{{ route('posty.show', $post->id ) }}">{{ $post->tytul }}</a></td>
        <td>{{ $post['autor'] }}</td>
        <td>{{ date('j F Y H:i:s', strtotime($post->created_at)) }}</td>
        <td><div><a href="{{ route('posty.edit', $post->id) }}"><button type="button" class="btn btn-primary m-1">E</button></a>
          <form action="{{ route('posty.destroy', $post->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger m-1">X</button></form>
          <div></td>
      </tr>
    </tbody>
    @endforeach
   
    @else
    <tbody>
      <tr>
        <th class="text-center" scope="row" colspan="5">Nie ma żadnych postów</th>
      </tr>
    </tbody>
    @endif
    
  </table>
@endsection