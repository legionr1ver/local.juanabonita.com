<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App - @yield('title', 'Ninguno')</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

            * {
                box-sizing: border-box;
                margin:  0px;
                padding: 0px;
                background-color: #24252a;
            }

            h1, li, a, button {
                font-family: "Montserrat", sans-serif;
                font-weight: 500;
                font-size: 16px;
                color: #edf0f1;
                text-decoration: none;
            }

            header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 30px 10%;
            }
            
            .nav-links {
                list-style: none;
            }
            
            .nav-links li {
                display: inline-block;
                padding: 0px 20px;
            }
            
            .nav-links li a {
                transition: all 0.3s ease 0s;
            }
            
            .nav-links li a:hover {
                color: #0088a9;
            }
            
            button {
                padding: 9px 25px;
                background-color: rgba(0,136,169,1);
                border: none;
                border-radius: 50px;
                cursor: pointer;
                transition: all 0.3s ease 0s;
            }
            
            button:hover {
                background-color: rgba(0,136,169,0.8);
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Mi Logo</h1>
            <nav>
                <ol class="nav-links">
                    <li><a href="{{route('usuarios.create')}}">Registro</a></li>
                    <li><a href="{{route('articulos.index')}}">Art&iacute;culos</a></li>
                    <li><a href="{{route('pedidos.create')}}">Pedidos</a></li>
                </ol>
            </nav>
            <a href="#" class="cta"><button>Login</button></a>
        </header>
        <section id="main">
            @section('main')
            @show
        </section>
    </body>
</html>
