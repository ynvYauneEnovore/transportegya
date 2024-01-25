<!DOCTYPE html>
<html lang="es-BO" dir="ltr" class="light">

<head>
    @include('affiliate.layouts.meta')
    @include('affiliate.layouts.styles')
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        @include('affiliate.layouts.header')
        @include('affiliate.layouts.menu')
        @yield('content')
        @include('affiliate.layouts.footer')
        @include('affiliate.layouts.scripts')
        @stack('extra-scripts')
    </main>
</body>

</html>