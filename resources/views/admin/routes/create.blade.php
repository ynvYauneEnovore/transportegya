@extends('admin.layouts.main')

@section('head')
<title>Rutas</title>
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
                <a href="{{ route('backend.route.index') }}">
                    Rutas
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                </a>
            </li>
            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                Lista</li>
        </ul>
    </div>
    <div class="flex flex-wrap ">
        <a href="{{ route('backend.route.index') }}" class="btn inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1">
            <span class="flex items-center">
                <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="pajamas:go-back"></iconify-icon>
                <span>Atras</span>
            </span>
        </a>
    </div>
</div>
<div class="card">
    <header class=" card-header noborder">
        <h4>Rutas</h4>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </header>
    <div class="card-body px-6 pb-3">
        {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User ID:</strong>
                    {!! Form::select('user_id', $usersWithType2, null, ['class' => 'select2 form-control w-full mt-2 py-2']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Route Name:</strong>
                    {!! Form::text('route_name', null, ['placeholder' => 'Route Name', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {!! Form::textarea('description', null, ['placeholder' => 'Description', 'class' => 'form-control', 'rows' => 3]) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Start Location:</strong>
                    {!! Form::text('start_location', null, ['placeholder' => 'Start Location', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>End Location:</strong>
                    {!! Form::text('end_location', null, ['placeholder' => 'End Location', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Active:</strong>
                    {!! Form::select('active', ['1' => 'True', '0' => 'False'], null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
</div>
@endsection