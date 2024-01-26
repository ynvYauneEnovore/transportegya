<!DOCTYPE html>
<html lang="es-BO" dir="ltr" class="light">

<head>
    @include('admin.layouts.meta')
    @include('admin.layouts.styles')
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <main class="app-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.menu')

        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
            <div class="page-content">
                <div class="transition-all duration-150 container-fluid" id="page_layout">
                    <div id="content_layout">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footer')
        @include('admin.layouts.scripts')
        @stack('extra-scripts')
    </main>
</body>

</html>