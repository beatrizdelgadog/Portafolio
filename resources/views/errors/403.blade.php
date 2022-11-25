@extends('errors.templates.minimal')

@section('code', '403')

@section('title', 'Prohibido')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <img class="w-100" src="{{ asset('assets/img/error/2663517__1_-removebg-preview.png')}}" alt="">
            </div>
            <div class="col-md-6 align-self-center">
                <h1>401</h1>
                <h2>Acceso Prohibido.</h2>
                <a href="{{ route('front.index')}}" class="btn green">Inicio</a>
            </div>
        </div>
    </div>
</main>
@endsection
