<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Favicon -->
  <!-- TODO: ファビコンを付ける -->
  <link rel="shortcut icon" href="/vendor/admin/images/favicon.ico">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Bookmarks</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- laravel mix -->
  <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}" />

  @yield('addCss')
</head>
