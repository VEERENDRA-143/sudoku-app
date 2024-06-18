<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <link rel="shortcut icon" href="{{asset('assets/images/game_10594394.png')}}" type="image/x-icon">
    
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    
    <style>
        .hero{
            background-image: url("{{asset('assets/images/1.jpg')}}");
        }
    </style>
    <style>
        
        #user,
        #exampleModal {
            justify-content: center;
            align-items: center;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        #user input,
        #ans input {
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script src="{{asset('assets/script.js')}}"></script>
</body>
</html>