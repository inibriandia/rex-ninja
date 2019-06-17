
<!doctype html>
<html lang="{{config('app.name')}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='{{asset('css/app.css')}}'>
    <title>{{config('app.name','Explore NB')}}</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>
<body>
<<<<<<< HEAD

@include('inc.navbar')
<div class="container">
    @include('inc.messages')
    @yield('content')
=======
<div id="app">
    @include('inc.navbar')
    <br/>
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>
>>>>>>> 51ab908836ab07aa1deb1ecfdab241239f75a37a
</div>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    $('textarea').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>
</body>
</html>
