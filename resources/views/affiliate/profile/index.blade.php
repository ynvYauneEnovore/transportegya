@extends('affiliate.layouts.main')

@section('head')
<title>Perfil</title>
@endsection

@section('content')
<div class="app-wrapper">
    <div class="flex flex-col justify-between min-h-screen">
        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
            <div class="page-content">
                <div class="transition-all duration-150 container-fluid" id="page_layout">
                    <div id="content_layout">
                        <div class="flex justify-between flex-wrap items-center mb-6">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card" style="padding: 5%;">
                                            <div class="card-header">{{ __('Perfil') }}</div>
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @if (session('success'))
                                                    <div class="alert alert-success" role="alert" class="text-danger">
                                                        {{ session('success') }}
                                                    </div>
                                                    @endif
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label for="avatar" class="form-label">Avatar: </label>
                                                            <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" autocomplete="avatar">
                                                            @error('avatar')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3 col-md-6 flex justify-center items-center">
                                                            <img src="{{ auth()->user()->avatar }}" style="width: 100px; height:100px;border-radius:50%;margin-top: 10px;">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        @foreach(['name', 'email', 'password', 'confirm_password', 'phone', 'city'] as $field)
                                                        <div class="mb-3 col-md-6">
                                                            <label for="{{ $field }}" class="form-label">{{ ucfirst($field) }}: </label>
                                                            <input class="form-control" type="{{ $field == 'password' || $field == 'confirm_password' ? 'password' : 'text' }}" id="{{ $field }}" name="{{ $field }}" value="{{ $field == 'password' || $field == 'confirm_password' ? '' : auth()->user()->$field }}" autofocus="">
                                                            @error($field)
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        @endforeach
                                                    </div>

                                                    <div class="row mb-0">
                                                        <div class="col-md-12 offset-md-5">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Actualizar perfil') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection