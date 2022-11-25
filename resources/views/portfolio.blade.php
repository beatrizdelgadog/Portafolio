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
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has
                            been the industry's<br>standard dummy text ever since the 1500s, when an unknown book.</p>
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


@push('scripts-cdn')
    {{-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CustomEase3.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CustomWiggle3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.1/gsap.min.js"></script> --}}
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
@endpush


@push('custom-scripts')
    {{-- <script src="{{ asset('js/components/girl-design.js')}}"></script> --}}
@endpush