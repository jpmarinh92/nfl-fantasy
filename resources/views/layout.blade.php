<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'NFL')</title>
    <link rel="stylesheet" href={{ mix("/css/app.css")}}/>
  </head>
  <body >
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
      <header>
        @include('/partials.nav')
      </header>

      <main class="py-3">
        @yield('content')
      </main>

      <footer class="bg-white text-black-50 text-center py-3 shadow">
        {{config('app.name')}} | Juan Pablo Marin Higuita
      </footer>
    </div>
  </body>
</html>
