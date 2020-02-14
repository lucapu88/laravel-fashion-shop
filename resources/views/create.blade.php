@extends('layouts.main')
@section('contain')
  <h1>creazione nuovo vestito</h1>
<form class="" action="{{route('store-product')}}" method="post">
  @csrf{{-- RICORDA!!: si usa sempre con laravel quando si utilizza un form con metodo post --}}
  <p><input type="text" name="description" placeholder="descrizione"></p>
  <p><input type="text" name="gender" placeholder="uomo/donna"></p>
  <p><input type="text" name="size" placeholder="taglia"></p>
  <p><input type="text" name="color" placeholder="colore"></p>
  <p><input type="submit" name="invia" value="Crea"></p>
</form>
@endsection
