<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
@if (session('message'))
    {{ @session('message') }}
@endisset
<p>User: admin password: password</p>
    <form action="/authenticate" method="post">
        @csrf
        <label>Nom: <input name="name" type="text" placeholder="Nom"></label>
        <label>Mot de passe: <input name="password" type="password" placeholder="Mot de passe"></label>
        <button type="submit">Se connecter</button>
    </form>
</body>

</html>
