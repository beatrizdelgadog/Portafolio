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

    <section class="c-section" id="service">
        <div class="feat bg-gray pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="section-head col-sm-12">
                        <h4><span>Experien</span>cia</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has
                            been the industry's<br>standard dummy text ever since the 1500s, when an unknown book.</p>
                    </div>
                    <div class="row d-flex align-items-stretch">
                        <div
                            class="col-md-12 col-lg-5 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                            <div class="slide-content bg-1">
                                <div class="timeline">
                                    <ul>
                                        <li>
                                            <div class="content">
                                                <h3>What is Lorem Ipsum?</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries, but also the leap into electronic typesetting,
                                                    remaining essentially unchanged. </p>
                                            </div>
                                            <div class="time">
                                                <h4>March 2018</h4>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="content">
                                                <h3>What is Lorem Ipsum?</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries, but also the leap into electronic typesetting,
                                                    remaining essentially unchanged. </p>
                                            </div>
                                            <div class="time">
                                                <h4>April 2018</h4>
                                            </div>
                                        </li>

                                        <div style="clear:both;"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 h-100">
                            <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
                                <div class="slide-content bg-1">
                                    <div class="timeline">
                                        <ul>
                                            <li>
                                                <div class="content">
                                                    <h3>What is Lorem Ipsum?</h3>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. </p>
                                                </div>
                                                <div class="time">
                                                    <h4>March 2018</h4>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="content">
                                                    <h3>What is Lorem Ipsum?</h3>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into
                                                        electronic typesetting, remaining essentially unchanged. </p>
                                                </div>
                                                <div class="time">
                                                    <h4>April 2018</h4>
                                                </div>
                                            </li>

                                            <div style="clear:both;"></div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section-->
    @include('layouts.components.contact')
    
    
@endsection
