@extends('errors.templates.minimal')

@section('code', '500')

@section('title','Error de servidor')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <img class="w-100" src="{{ asset('assets/img/error/2663517__1_-removebg-preview.png')}}" alt="">
            </div>
            <div class="col-md-6 align-self-center">
                <h1>500</h1>
                <h2>Se ha caído el server :'v'.</h2>
                <h3>F</h3>
                <a href="{{ route('front.index')}}" class="btn green">Inicio</a>
            </div>
        </div>
    </div>
</main>
@endsection
