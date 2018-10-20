
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="public/js/fabric.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/narrow-jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      @include('layouts.menu')
      <main role="main">

       @yield('body')

      </main>
      @include('layouts.footer')

    </div> <!-- /container -->
  </body>
</html>
