<!DOCTYPE html>
<html lang="es-BO" dir="ltr" class="light">

<head>
    @include('user.layouts.meta')
    @include('user.layouts.styles')
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        @include('user.layouts.header')
        @include('user.layouts.menu')
        @yield('content')
        @include('user.layouts.footer')
        @include('user.layouts.scripts')
        @stack('extra-scripts')
    </main>
</body>

</html>