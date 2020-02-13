@extends('layouts.main')
@section('content')
  <div class="container">
    <div class="row">
      @foreach ($prodotti as $prodotto)
        <h2>Prodotto: {{$prodotto->name}}</h2>
      @endforeach
    </div>
  </div>

@endsection
