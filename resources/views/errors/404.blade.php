@extends('errors.templates.minimal')

@section('code', '404')

@section('title', 'Página no encontrada')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <img class="w-100" src="{{ asset('assets/img/error/2663517__1_-removebg-preview.png')}}" alt="">
                </div>
                <div class="col-md-6 align-self-center">
                    <h1>404</h1>
                    <h2>¡Oh no!, al parecer estas perdido.</h2>
                    <p>
                        <p>
                            La página que busca no existe. 
                        </p>
                    </p>
                    <a href="{{ route('front.index')}}" class="btn green">Quiero regresar</a>
                </div>
            </div>
        </div>
    </main>
@endsection
