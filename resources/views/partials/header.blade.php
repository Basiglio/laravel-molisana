<header>
    <img src="{{asset("img/marchio-sito-test.png")}}" alt="">
    <ul>
      {{-- TERNARIO = SE LA MIA ROUTE è HOME ?TRUE(AGGIUNGI ACTIVE) :FALSE(TOGLI ACTIVE) --}}
      <li class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}">
        <a href="{{route('home')}}">home</a>
      </li>
      <li class="{{Route::currentRouteName() == 'prodotti' ? 'active' : ''}}">
        <a href="{{route('prodotti', ['id' => 0])}}">prodotti</a>
      </li>
      <li class="{{Route::currentRouteName () == 'news' ? 'active' : ''}}">
        <a href="{{route('news')}}">news</a>
      </li>
    </ul>
  </header>