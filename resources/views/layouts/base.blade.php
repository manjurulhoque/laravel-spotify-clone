<!doctype html>
<html lang="">
<head>
    <title>Welcome to Spotify!</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<div id="mainContainer">

    <div id="topContainer">

        @include('layouts.includes.nav')

        <div id="mainViewContainer">

            <div id="mainContent">
                @yield('content')
            </div>

        </div>

    </div>

    @include('layouts.includes.footer')

</div>

<script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>