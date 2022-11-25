@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? 'Show Proyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Regresar Proyectos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}">Ir</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $proyecto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{-- {{ $proyecto->imagen }} --}}
                            <img src="{{ $proyecto->imagen }}" style="max-width: 100px" alt="">
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $proyecto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            <a href="{{ $proyecto->url }}" target="_blank">{{ $proyecto->url }}</a>
                        </div>
                        <div class="form-group">
                            <strong>Imagen Modal:</strong>
                            <img src="{{ $proyecto->imagensec }}" style="max-width: 100px" alt="">
                            {{-- {{ $proyecto->imagensec }} --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
