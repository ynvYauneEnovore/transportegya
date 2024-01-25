<!doctype html>
<html class="no-js" lang="">

<head>
    @include('auth.layouts.meta')
    @include('auth.layouts.styles')
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    @yield('content')
    @include('auth.layouts.scripts')
</body>

</html>