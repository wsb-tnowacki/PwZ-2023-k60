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
      </tr>
    </thead>
    @if ($posty->count())
    @foreach ($posty as $post)
    <tbody>
      <tr>
        <th scope="row">{{ $post['id'] }}</th>
        <td>{{ $post->tytul }}</td>
        <td>{{ $post['autor'] }}</td>
        <td>{{ date('j F Y H:i:s', strtotime($post->created_at)) }}</td>
      </tr>
    </tbody>
    @endforeach
   
    @else
    <tbody>
      <tr>
        <th class="text-center" scope="row" colspan="4">Nie ma żadnych postów</th>
      </tr>
    </tbody>
    @endif
    
  </table>
@endsection