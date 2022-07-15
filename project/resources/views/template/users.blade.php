<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <nav class="d-flex justify-content-end gap-3 container py-3">
        <a href="/" class="btn btn-outline-dark">HOME</a>
        <a href="{{ route('users.index') }}" class="btn btn-outline-dark">VISUALIZAR CANDINDATOS</a>
    </nav>
    <div class="container">
        @yield('body')
    </div>      
</body>
</html>