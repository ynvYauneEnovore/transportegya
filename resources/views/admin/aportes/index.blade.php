@extends('admin.layouts.main')

@section('head')
<title>Aportes</title>
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
                    Aportes
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                </a>
            </li>
            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                Lista</li>
        </ul>
    </div>
    <div class="flex flex-wrap">
        <a href="{{ route('backend.aporte.create') }}" class="btn inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1">
            <span class="flex items-center">
                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"></iconify-icon>
                <span>Crear aporte</span>
            </span>
        </a>
    </div>
</div>

<div class="card">
    <header class=" card-header noborder">
        <h4>Aportes de los afiliados</h4>
    </header>
    <div class="card-body px-6 pb-3">
        <div class="overflow-x-auto -mx-6 dashcode-data-table">
            <span class=" col-span-8  hidden"></span>
            <span class="  col-span-4 hidden"></span>
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden ">
                    <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700 data-table">
                        <thead class=" bg-slate-200 dark:bg-slate-700">
                            <tr>
                                <th scope="col" class=" table-th ">
                                    No
                                </th>
                                <th scope="col" class=" table-th ">
                                    Nombre
                                </th>
                                <th scope="col" class=" table-th ">
                                    Monto
                                </th>
                                <th scope="col" class=" table-th ">
                                    Fecha
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                        @foreach ($data as $key => $user)
                            <tr>
                                <td class="table-td"> {{$key + 1}}</td>
                                <td class="table-td ">
                                    {{\App\Models\User::find($user->afiliado_id)->name}}
                                </td>
                                <td class="table-td ">{{ $user->monto }}</td>
                                <td class="table-td ">{{ $user->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection