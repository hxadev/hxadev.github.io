<!DOCTYPE html>
<html @if ($colorTheme !==null) style="{{ $colorTheme }}" @endif lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}" /> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css?v=').time()}}">

</head>

<body class="{{ $typeTheme }}">

    @include("$template.template")

    @include('footer')

    <script src="{{ URL::asset('js/app.js') }}"></script>
    @env('local')
    <script src="http://localhost:35729/livereload.js"></script>
    @endenv
</body>

</html>