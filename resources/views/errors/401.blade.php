@extends('errors.templates.minimal')

@section('code', '401')

@section('title', 'No autorizado'))

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <img class="w-100" src="{{ asset('assets/img/error/2663517__1_-removebg-preview.png')}}" alt="">
            </div>
            <div class="col-md-6 align-self-center">
                <h1>401</h1>
                <h2>¡No estás autorizado para entrar a esta página!.</h2>
                <a href="{{ route('front.index')}}" class="btn green">Inicio</a>
            </div>
        </div>
    </div>
</main>
@endsection
