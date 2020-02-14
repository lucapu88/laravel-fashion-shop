@extends('layouts.main')
@section('contain')
  <div class="container">
    <div class="row">
      <h1>Tutti i vestiti</h1>
    </div>
      @forelse ($vestiti as $vestito)
        <ul>
          <li>Taglia: {{$vestito->size}}</li>
          <li>Descrizione: {{$vestito->description}}</li>
          <li>Sesso: {{$vestito->gender}}</li>
          <li>Colore: {{$vestito->color}}</li>
        </ul>
      @empty
        <h3>non ci sono vestiti</h3>
      @endforelse

  </div>

@endsection
