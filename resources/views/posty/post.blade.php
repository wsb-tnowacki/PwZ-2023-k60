@extends('layout')
@section('tytul')
    WSB - Szczegóły posta
@endsection
@section('podtytul')
    Szczegóły posta
@endsection
@section('tresc')
@if ($errors->any())
  <div class="alert alert-danger">

      @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
      @endforeach

  </div>
  
@endif
<form action="{{ route('posty.store') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="tytul" class="form-label">Tytuł</label>
    <input type="text" class="form-control" id="tytul" name="tytul" placeholder="Podaj tytuł posta" value="{{ $post->tytul }}" disabled="disabled">
    @if ($errors->has('tytul'))
  <div class="alert alert-danger">

    @foreach ($errors->get('tytul') as $error)
      {{ $error }}
    @endforeach

  </div>
  
@endif
  </div>
  <div class="form-group">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" class="form-control" id="autor" name="autor" placeholder="Podaj autora" value="{{ $post->autor }}"  disabled="disabled">
    @if ($errors->has('autor'))
  <div class="alert alert-danger">

    @foreach ($errors->get('autor') as $error)
      {{ $error }}
    @endforeach

  </div>
  
@endif
  </div>
  <div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Podaj adres email" value="{{ $post->email }}"  disabled="disabled">
    @if ($errors->has('email'))
  <div class="alert alert-danger">

    @foreach ($errors->get('email') as $error)
      {{ $error }}
    @endforeach

  </div>
  
@endif
  </div>
  <div class="form-group">
    <label for="tresc" class="form-label">Treść</label>
    <textarea class="form-control" name="tresc" id="tresc" rows="4"  disabled="disabled">{{ $post->tresc }}</textarea>
  </div>
  @if ($errors->has('tresc'))
  <div class="alert alert-danger">

    @foreach ($errors->get('tresc') as $error)
      {{ $error }}
    @endforeach

  </div>
  
@endif
  <br>
  <button type="submit" style="background-color: #0d6efd;" class="btn btn-primary">Dodaj posta</button>
</form>
@endsection