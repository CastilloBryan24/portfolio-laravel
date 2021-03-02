<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset("css/app.css")}}" rel="stylesheet">
</head>
<body>
    <section class="container mt-5">
        @yield('content')
    </section>


    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>