<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Clínica Rabab</title>

    <!-- Ico -->
    <link rel="icon" type="image/svg+xml" href={{ asset('assets/images/dentist-logo.svg') }}>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login/login.css?v=').time() }}">

</head>

<body class="text-center">

    <form id="loginForm" class="form-signin needs-validation" method="post" novalidate>

        <img class="mb-4" src={{ asset('assets/images/dentist-logo.svg') }} alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">@lang('auth.login_form.title')</h1>

        <div class="form-group">
            <label for="email" class="sr-only">@lang('auth.login_form.email_input')</label>
            <input type="email" name="email" id="email" class="form-control "
                placeholder="@lang('auth.login_form.email_input')" required="" autofocus="">
        </div>

        <div class="form-group">
            <label for="password" class="sr-only">@lang('auth.login_form.password_input')</label>
            <input type="password" name="password" id="password"
                class="form-control @error('password') is-invalid @enderror"
                placeholder="@lang('auth.login_form.password_input')" required="" minlength="9" maxlength="9">
        </div>

        {{-- <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Recordar Sesión
            </label>
        </div> --}}

        <div>
            <button id="bt" class="btn btn-lg btn-primary btn-block" type="button" onclick="LoginController.logIn()">
                <span>@lang('auth.login_form.enter_button')</span>
            </button>
        </div>

        <p class="mt-5 mb-3 text-muted">© 2020-2020</p>

    </form>


    <!-- External Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Internal Scripts -->
    <script type="text/javascript" src="{{asset('assets/js/app_core.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/form_handler.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/controllers/login_controller.js')}}"></script>

</body>

</html>
