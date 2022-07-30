<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1283/1283923.png">
</head>
<body>
    <nav class="d-flex justify-content-end gap-3 container py-3">
        @if(Auth::user())
            <a href="#" class="btn btn-outline-primary">{{ Auth::user()->name }}</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="btn btn-danger"><span :href="route('logout')"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                    {{ __('Sair') }}
                <span></a>
            </form>
        @endif
        <a href="/" class="btn btn-outline-dark">HOME</a>
        <a href="{{ route('users.index') }}" class="btn btn-outline-dark">VISUALIZAR DEVs</a>
    </nav>
    <div class="container">
        @yield('body')
    </div>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            &copy; 2022 Copyright: Contrata Dev<br>
            Desenvolvido por Pedro Tomaz<br>
            <a href="https://www.linkedin.com/in/pedro-henrique-tomaz-vieira-ti/"><i class="me-3 fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/PedroHTomaz"><i class="fa-brands fa-github"></i></a>
        </div>
    </footer>
</body>
</html>