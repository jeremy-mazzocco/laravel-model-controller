<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-controller</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>


    <div class="row">
        @foreach ($movies as $m)
            <div class="card">
                <h3>
                    {{ $m->title }}
                </h3>
                <p>
                    Vote: {{ $m->vote }}
                </p>
                <p>
                    Realese date: {{ $m->date }}
                </p>
            </div>
        @endforeach
    </div>


</body>

</html>
