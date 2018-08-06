<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Todos</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @include('inc.messages')  
      @yield('content')
    </div>
  </body>
  <footer id="footer" class="text-center">
    <p>Copyright &copy; 2018 TodoList</p>
  </footer>

</html>