<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <div class="loading" id="loading">
    <div class="bouncing-loader">
      <div></div>
      <div></div>
    </div>
  </div>
  @include('layout.header') @yield('content')
  @include('layout.footer')
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

  <script type="text/javascript" src="js/slick.min.js"></script>

  <script src="js/main.js"></script>
</body>

</html>