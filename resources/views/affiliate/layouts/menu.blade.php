<div class="sidebar-wrapper group">
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
    <div class="logo-segment">
        <a class="flex items-center" href="{{ route('manager.home') }}">
            <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">Transportegya</span>
        </a>
    </div>
    <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
            <li class="sidebar-menu-title">MENU</li>
            <li class="">
                <a href="{{ route('manager.home') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Inicio</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('affiliate.asistencia.index') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class="nav-icon" icon="heroicons-outline:clipboard-check"></iconify-icon>
                        <span>Asistencia</span>
                    </span>
                </a>
            </li>
    </div>
</div>