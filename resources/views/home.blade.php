@extends('layouts/main')




@section('content')
     <main>
    <div class="wrapper70">
      <h2>Le Lunghe</h2>
      <div class="cards">
        @foreach ($lunghe as $pasta)
          <div class="card">
            <img src="{{$pasta["src"]}}" alt="">
            {{-- PASSO AL LINK PATH /PRODOTTI/ID --}}
            <a href="{{route('prodotti', ['id' => $pasta['id']])}}">
              {{$pasta["titolo"]}}</a>
          </div> 
        @endforeach
      </div>
      <h2>Le Corte</h2>
      <div class="cards">
        @foreach ($corte as $pasta)
          <div class="card">
            <img src="{{$pasta["src"]}}" alt="">
            {{-- PASSO AL LINK PATH /PRODOTTI/ID --}}
             <a href="{{route('prodotti', ['id' => $pasta['id']])}}">{{$pasta["titolo"]}}</a>
          </div> 
        @endforeach
      </div>
      <h2>Le Cortissime</h2>
      <div class="cards">
        @foreach ($cortissime as $pasta)
          <div class="card">
            <img src="{{$pasta["src"]}}" alt="">
            {{-- PASSO AL LINK PATH /PRODOTTI/ID --}}
             <a href="{{route('prodotti', ['id' => $pasta['id']])}}">{{$pasta["titolo"]}}</a>
          </div> 
        @endforeach
      </div>
    </div>
  </main>
@endsection