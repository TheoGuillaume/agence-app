<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    @notifyCss
    <title>@yield('title') | Administration</title>
</head>

<body>

    @if (session('success'))
        @include('notify::components.notify')
    @endif

    <div class="container mt-5">
        @yield('content')
    </div>
    @notifyJs
</body>

</html>
