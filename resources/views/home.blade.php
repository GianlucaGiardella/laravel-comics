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
              <h2>current series</h2>
              <ul class="series-list">
              </ul>
              <button class="more">load more</button>
            </div>
        </div>
      </main>
    @include("partials.footer")
</body>
</html>