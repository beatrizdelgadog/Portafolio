<!-- Primera pág que se muestra -->
@extends('layouts.template')
<!-- Referencia al archivo donde se encuentra el template -->


@section('content')
    {{-- Banner --}}
    @include('layouts.components.banner')
    @include('layouts.components.skill')

     <!-- Portfolio Section-->
     <section class="page-section portfolio" id="portfolio" style="min-height: 100vh; background-color : white">
        <div class="feat bg-gray pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="section-head col-sm-12 mb-2">
                        <h4><span>Proyec</span>tos</h4>
                        <p>Te presento algunos de los proyectos en los cuales he participado para su desarrollo y testeo.</p>
                    </div>
                    <!-- Portfolio Grid Items-->
                    <div class="row justify-content-center">
                        @include('layouts.components.projects')
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('layouts.components.timeline')

    {{-- <section class="c-section" id="service">
       
    </section> --}}

    <!-- Contact Section-->
    @include('layouts.components.contact')
    
    
@endsection

