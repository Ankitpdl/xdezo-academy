<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('inc.header')

</head>
<body>
    @include('inc.navbar')
    
    @yield('contents')

    @include('inc/footer')
</body>
</html>