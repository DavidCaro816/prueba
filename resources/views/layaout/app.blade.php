<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
<div class="wrapper">

    @include('layaout/component/leftside')

        <div class="content-page">
            @include('layaout/component/navbar')
            @include('layaout/component/footer')
        </div>
</div>
<script src="{{url('js/app.js')}}"></script>
</body>
</html>

