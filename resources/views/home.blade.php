<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
  <title>Document</title>
</head>
<body>
  <header>
    <img src="{{asset("img/marchio-sito-test.png")}}" alt="">
    <ul>
      <li class="active"><a href="{{route('home')}}">home</a></li>
      <li><a href="{{route('prodotti')}}">prodotti</a></li>
      <li><a href="{{route('news')}}">news</a></li>
    </ul>
  </header>

  <main>
    <div class="wrapper70">
      <h2>Le Lunghe</h2>
      <div class="cards">
        @foreach ($lunghe as $pasta)
          <div class="card">
            <img src="{{$pasta["src"]}}" alt="">
          </div> 
        @endforeach
      </div>
      <h2>Le Corte</h2>
      <div class="cards">
        @foreach ($corte as $pasta)
          <div class="card">
            <img src="{{$pasta["src"]}}" alt="">
          </div> 
        @endforeach
      </div>
      <h2>Le Cortissime</h2>
      <div class="cards">
        @foreach ($cortissime as $pasta)
          <div class="card">
            <img src="{{$pasta["src"]}}" alt="">
          </div> 
        @endforeach
      </div>
    </div>
  </main>

  <footer>
  </footer>
</body>
</html>