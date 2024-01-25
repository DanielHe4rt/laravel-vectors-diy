<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @livewireStyles
</head>
<body class="antialiased">


<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container" bis_skin_checked="1">
        <a class="navbar-brand text-white" href="#">LiveCoders Explorer</a>
        <a class="navbar-toggler text-white" href="https://github.com/danielhe4rt/livecoders-vector-search">
            <i class="fa-brands fa-github"></i>
        </a>
    </div>
</nav>

@livewire('search-streamer')

@livewireScripts
</body>
</html>
