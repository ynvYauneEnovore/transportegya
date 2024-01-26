@extends('user.layouts.main')

@section('head')
<title>Inicio</title>
@endsection

@section('content')
<div class="app-wrapper">

    <div class="flex flex-col justify-between min-h-screen">
        <div>
            <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
                <div class="page-content">
                    <div class="transition-all duration-150 container-fluid" id="page_layout">
                        <div id="content_layout">
                            <div>
                                Bienvenido invitado
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection