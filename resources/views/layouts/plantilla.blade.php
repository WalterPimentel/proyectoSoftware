@php
    $routesPracticas = [
        'practicas.*',
        'docentes.*',
        'empresas.*',
        'estudiantes.*',
        'etapas.*',
        'practicasrequisitos.*',
        'requisitos.*',
    ];

    $routesGestionPI = [
        'gestionPI.*',
        'accionesmejoras.*',
        'comisiones.*',
        'comunicarpfd.*',
        'cronogramas.*',
        'cuadronecesidades.*',
        'informesgestion.*',
        'monitoreospfd.*',
        'revisionespfd.*',
        'tdr.*',
        'tiposcostos.*',
        'tiposrecursos.*',
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- estilos -->

        <style>
            .active{
                color: red;
                font-weight: bold;
            }
        </style>

        <title>@yield('title')</title>
    </head>
    <body>
        <!-- header -->
        <!-- nav -->

        <header>
            <h1>Universidad Continental</h1>
            <nav>
                <ul>
                    <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Página Principal</a></li>
                    <li><a href="{{route('practicas.index')}}" class="{{ request()->routeIs($routesPracticas) ? 'active' : '' }}">Gestión de Prácticas Preprofesionales</a></li>
                    <li><a href="{{route('gestionPI.index')}}" class="{{ request()->routeIs($routesGestionPI) ? 'active' : '' }}">Gestión de Planificación Institucional</a></li>
                    <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
                </ul>
            </nav>
        </header>

        @yield('content')
        <!-- footer -->
        <!-- script -->
    </body>
</html>