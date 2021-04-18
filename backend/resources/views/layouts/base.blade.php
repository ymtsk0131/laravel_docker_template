<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . ' | ' : '' }}Laravel App</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app" class="container">
        <h1>Laravel App</h1>
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>