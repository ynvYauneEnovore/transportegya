@extends('affiliate.layouts.main')

@section('head')
<title>Asistencias</title>
@endsection

@section('content')
<div class="app-wrapper">
    <div class="flex flex-col justify-between min-h-screen">
        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
            <div class="page-content">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card" style="padding: 5%;">
                                <div class="card-header">{{ __('Registro de Asistencias') }}</div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="alert" class="text-danger">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <form method="POST" action="{{ route('affiliate.asistencia.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <input type="hidden" name="fecha" value="{{ now()->toDateString() }}">

                                        <div class="mb-3">
                                            <label for="hora_entrada" class="form-label">Hora de salida:</label>
                                            <input type="time" class="form-control" id="hora_entrada" name="hora_entrada" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="hora_salida" class="form-label">Hora de llegada:</label>
                                            <input type="time" class="form-control" id="hora_salida" name="hora_salida" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="hora_salida" class="form-label">Afiliado:</label>
                                            {!! Form::select('route_id', $afiliados, null, ['class' => 'select2 form-control w-full mt-2 py-2']) !!}
                                        </div>

                                        <button type="submit" class="btn btn-primary">Registrar Asistencia</button>
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
@endsection