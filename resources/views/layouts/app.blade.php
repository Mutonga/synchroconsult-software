<!DOCTYPE html>
<html lang="en">

<head>
  <title>Synchroconsult Associates LTD</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href={{ asset('img/favicons/apple-icon-57x57.png') }}>
  <link rel="apple-touch-icon" sizes="60x60" href={{ asset('img/favicons/apple-icon-60x60.png') }}>
  <link rel="apple-touch-icon" sizes="72x72" href={{ asset('img/favicons/apple-icon-72x72.png') }}>
  <link rel="apple-touch-icon" sizes="76x76" href={{ asset('img/favicons/apple-icon-76x76.png') }}>
  <link rel="apple-touch-icon" sizes="114x114" href={{ asset('img/favicons/apple-icon-114x114.png') }}>
  <link rel="apple-touch-icon" sizes="120x120" href={{ asset('img/favicons/apple-icon-120x120.png') }}>
  <link rel="apple-touch-icon" sizes="144x144" href={{ asset('img/favicons/apple-icon-144x144.png') }}>
  <link rel="apple-touch-icon" sizes="152x152" href={{ asset('img/favicons/apple-icon-152x152.png') }}>
  <link rel="apple-touch-icon" sizes="180x180" href={{ asset('img/favicons/apple-icon-180x180.png') }}>
  <link rel="icon" type="image/png" sizes="192x192"  href={{ asset('img/favicons/android-icon-192x192.png') }}>
  <link rel="icon" type="image/png" sizes="32x32" href={{ asset('img/favicons/favicon-32x32.png') }}>
  <link rel="icon" type="image/png" sizes="96x96" href={{ asset('img/favicons/favicon-96x96.png') }}>
  <link rel="icon" type="image/png" sizes="16x16" href={{ asset('img/favicons/favicon-16x16.png') }}>
  <link rel="manifest" href={{ asset('img/favicons/manifest.json') }}>
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content={{ asset('img/favicons/ms-icon-144x144.png') }}>
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  {{-- bootstrap cdn --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	{{-- fontawesome cdn --}}
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Template Main CSS File -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">

</head>

<body>
    @yield('content')
</body>

</html>