<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Clínica Rabab</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home/sidebar.css') }}">

</head>

<body>

    <div id="loading-page" style="background-color: blueviolet; height: 100vh;">

        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>

    </div>
    <div id="main-page" style="display: none">

        <nav class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Clínica Rabab</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
                data-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="/logout">Salir</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebar-menu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                        <ul id="sidebar-unordered-list" class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" onclick=" AppCore.setMenuOptionActive(this)">
                                    <i style="margin-right: 4px;" class="fas fa-space-shuttle"></i> Inicio
                                    <span class="sr-only">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main id="main-content" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 pt-4">
                    <h2>Inicio</h2>
                </main>
            </div>
        </div>

    </div>

    <!-- External Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/29d089d9b5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Internal Scripts -->
    <script type="text/javascript" src="{{asset('assets/js/app_core.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/form_handler.js')}}"></script>

    <script>
        $(window).on('load', function() {
            AppCore.init();
        });

        // $( document ).ready(function(){
        //     AppCore.init();

        // })

    </script>

</body>

</html>
