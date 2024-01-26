@extends('admin.layouts.main')

@section('head')
<title>Asistencias</title>
@endsection

@section('content')
<div class=" md:flex justify-between items-center">
    <div class="mb-5">
        <ul class="m-0 p-0 list-none">
            <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                <a href="{{ route('backend.admin.index') }}">
                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                </a>
            </li>
            <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                <a href="{{ route('backend.role.index') }}">
                    Roles
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                </a>
            </li>
            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                Lista</li>
        </ul>
    </div>
    <div class="flex flex-wrap">
        <a href="{{ route('backend.role.create') }}" class="btn inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1">
            <span class="flex items-center">
                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"></iconify-icon>
                <span>Crear rol</span>
            </span>
        </a>
    </div>
</div>

<div class="card">
    <header class=" card-header noborder">
        <h4>Asistencias</h4>
    </header>
    <div class="card-body px-6 pb-3">
      
    </div>
</div>
@endsection