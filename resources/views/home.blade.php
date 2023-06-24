<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">
    @vite('resources/js/app.js')
    <title>Laravel DC Comics</title>
</head>
<body>
    @include("partials.header")
    <main>
        <div class="jumbotron"></div>
          <div class="main-container">
            <div class="current-series">
              <h2 class="current-series-title">current series</h2>
              <ul class="series-list">
                @foreach ($comics as $comic)
                    <li class="comic">
                      <img class="comic-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                      <h2 class="comic-title">{{ $comic['series'] }}</h2>
                    </li>
                @endforeach
              </ul>
              <button class="more">load more</button>
            </div>
        </div>
      </main>
    @include("partials.footer")
</body>
</html>