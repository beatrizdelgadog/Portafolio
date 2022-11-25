@extends('errors.templates.illustrated-layout')

@section('code', '503')

@section('title', 'Servicio no disponible')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <img class="w-100" src="{{ asset('assets/img/error/2663517__1_-removebg-preview.png')}}" alt="">
            </div>
            <div class="col-md-6 align-self-center">
                <h1>503</h1>
                <h2>Recurso no disponible.</h2>
                <a href="{{ route('front.index')}}" class="btn green">Inicio</a>
            </div>
        </div>
    </div>
</main>
@endsection
