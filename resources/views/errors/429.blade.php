@extends('errors.templates.minimal')

@section('code', '429')

@section('title', 'Demasiadas Solicitudes')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <img class="w-100" src="{{ asset('assets/img/error/2663517__1_-removebg-preview.png')}}" alt="">
            </div>
            <div class="col-md-6 align-self-center">
                <h1>429</h1>
                <h2>Demasiadas solicitudes.</h2>
                <a href="{{ route('front.index')}}" class="btn green">Inicio</a>
            </div>
        </div>
    </div>
</main>
@endsection
