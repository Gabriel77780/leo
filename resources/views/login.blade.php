<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dental Clinic</title>

    <!-- Ico -->
    <link rel="icon" type="image/svg+xml" href={{ asset('assets/images/dentist-logo.svg') }}>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login/login.css') }}">

</head>

<body class="text-center">
    <form class="form-signin" method="POST" action="/login">
        @csrf
        <img class="mb-4" src={{ asset('assets/images/dentist-logo.svg') }} alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">@lang('auth.login_form.title')</h1>
        <label for="inputEmail" class="sr-only">@lang('auth.login_form.email_input')</label>
        <input type="email" name="email" id="inputEmail" class="form-control"
            placeholder="@lang('auth.login_form.email_input')" required="" autofocus="">
        <label for="inputPassword" class="sr-only">@lang('auth.login_form.password_input')</label>
        <input type="password" name="password" id="inputPassword" class="form-control"
            placeholder="@lang('auth.login_form.password_input')" required="">
        {{-- <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Recordar Sesión
            </label>
        </div> --}}
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            <span>@lang('auth.login_form.enter_button')</span>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        </button>
        <p class="mt-5 mb-3 text-muted">© 2020-2020</p>
    </form>
</body>

</html>
