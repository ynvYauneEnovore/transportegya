<div class="sidebar-wrapper group">
    
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
    <div class="logo-segment">
        <a class="flex items-center" href="{{ route('backend.admin.index') }}">
            <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">Transportegya</span>
        </a>
    </div>
    <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
            <li class="sidebar-menu-title">MENU</li>
            <li class="">
                <a href="{{ route('backend.admin.index') }}" class="navItem {{ (\Request::route()->getName() == 'backend.admin.index') ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Inicio</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('backend.aporte.index') }}" class="navItem {{ (\Request::route()->getName() == 'backend.aporte.index') ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="solar:money-bag-linear"></iconify-icon>
                        <span>Aportes</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('backend.user.index') }}" class="navItem {{ (\Request::route()->getName() == 'backend.user.index') ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="ph:users"></iconify-icon>
                        <span>Usuarios</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('backend.assist.index') }}" class="navItem {{ (\Request::route()->getName() == 'backend.assist.index') ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:clipboard-check"></iconify-icon>
                        <span>Asistencia</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('backend.role.index') }}" class="navItem {{ (\Request::route()->getName() == 'backend.role.index') ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="carbon:subnet-acl-rules"></iconify-icon>
                        <span>ACL</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('backend.route.index') }}" class="navItem {{ (\Request::route()->getName() == 'backend.route.index') ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="gis:map-route"></iconify-icon>
                        <span>Rutas</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('backend.cargo.index') }}" class="navItem {{ (\Request::route()->getName() == 'backend.cargo.index') ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="fa6-solid:users-viewfinder"></iconify-icon>
                        <span>Directorio</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('backend.report.index') }}" class="navItem {{ (\Request::route()->getName() == 'backend.report.index') ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="carbon:report"></iconify-icon>
                        <span>Reportes</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('backend.mensaje.index') }}" class="navItem {{ (\Request::route()->getName() == 'backend.mensaje.index') ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="icon-park-outline:message-unread"></iconify-icon>
                        <span>Mensajes</span>
                    </span>
                </a>
            </li>
              <li class="">
                <a href="{{ route('backend.empresa.index') }}" class="navItem {{ (\Request::route()->getName() == 'backend.empresa.index') ? 'active' : '' }}">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="streamline:business-profession-home-office"></iconify-icon>
                        <span>Empresa</span>
                    </span>
                </a>
            </li>
    </div>
</div>