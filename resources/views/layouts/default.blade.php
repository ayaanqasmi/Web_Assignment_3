<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <script src="{{ asset('js/details.js') }}" defer></script>
    <script src="{{ asset('js/bgcol.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    @include('partials.header')
    @yield('content')
    
    @include('partials.footer')    
</body>
</html>