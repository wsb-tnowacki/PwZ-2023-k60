@extends('layout')
@section('tytul')
    WSB - Dodawanie posta
@endsection

@section('podtytul')
    Dodaj posta
@endsection
@section('tresc')
<form action="{{ route('posty.store') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="tytul" class="form-label">Tytuł</label>
    <input type="text" class="form-control" id="tytul" name="tytul" placeholder="Podaj tytuł posta">
  </div>
  <div class="form-group">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" class="form-control" id="autor" name="autor" placeholder="Podaj autora">
  </div>
  <div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Podaj adres email">
  </div>
  <div class="form-group">
    <label for="tresc" class="form-label">Treść</label>
    <textarea class="form-control" name="tresc" id="tresc" rows="4"></textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Dodaj posta</button>
</form>
@endsection