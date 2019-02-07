<!DOCTYPE html>
<html lang="es">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/slider-pro/dist/css/slider-pro.min.css') }}"/>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    </head>
<body>


<div id="app">
    <app-content></app-content>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/slider-pro/js/jquery.sliderPro.min.js') }}"></script>
<script type="text/javascript">
    jQuery( document ).ready(function( $ ) {
        $( '.slider-pro' ).sliderPro({
            width:'100%',
        });
    });
</script>  
</body>
</html>
