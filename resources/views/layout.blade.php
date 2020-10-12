<!DOCTYPE html>
<html lang="de, en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Linuxtopics.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <style>pre {
            white-space: pre !important;
            word-wrap: break-word !important;
            overflow: auto !important;
            background-color: #363839e3 !important;
            border-radius: 3px !
            mportant;
            font-size: 14px !important;
            padding: 10px 20px !important;
            margin-bottom: 2.4rem !important;
        }
        pre {
            display: block !important;
            font-size: 87.5% !important;
            color: #ffffff !important;
        }
        pre {
            margin-top: 0 !important;
            margin-bottom: 1rem !important;
            overflow: auto !important;
        }
        pre, code, kbd, samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
            font-size: 1em !important;
        }

    </style>
</head>
<body>
<!--Navigationsbar-->

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Linuxtopics.com</a>
</nav>

<!--Ende Navigationsbar-->
<br>

<!-- Page Content -->
@yield('content')

</body>
</html>
