<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WELDORK - Welding Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

   @include('layouts.front.css')
</head>

<body>
   
   @include('layouts.front.nav')
    @yield('content')
   @include('layouts.front.footer')
   @include('layouts.front.js')
</body>

</html>