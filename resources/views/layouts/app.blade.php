<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Welcome to HackerPair</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        @yield('content')
    </div>
    <div>
        @section('advertisement')
            <p>
                Score some HackerPair swag in our store!
            </p>
        @show
    </div>
</body>
</html>