<section class="banner" id="home">
    <div class="container">
        <div class="row aligh-items-center">
            <div class="col-md-6 col-12 col-xl-7">
                <div class="animate__animated animate__fadeIn">
                    <h1 style="font-size: 16px;">@lang('app.front.headers.hello') </h1>
                    <p style="font-size: 3em;font-weight: bold">
                        <span>Soy </span> <span style="color: #6FDCBF;" class="txt-rotate" dataPeriod="1000"
                            data-rotate='[ "Ingeniera en sistemas", "Dev Web", "Analista QA" ]'></span>
                    </p>
                    <p>Guayaquil, Ecuador <img style="width: 25px" src="{{ asset('assets/front/flag_of_ecuador.svg') }}"
                            alt=""></p>
                    <a class="button-a" href="#portfolio">¡Esto puede interesarte! <i
                            class="fa-solid fa-circle-arrow-down"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-12 col-xl-5">
                <div>
                    <div class="animate__animated animate__zoomIn">
                        <img class="animate-moved" src="{{ asset('assets/img/banner-image.png') }}"
                            alt="Banner Image" />
                        {{-- <a href="https://www.freepik.es/vector-gratis/ilustracion-concepto-programacion_7118756.htm#from_view=detail_author">Imagen de storyset</a> en Freepik --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container" style="min-height: 100vh">
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="row">
                <div class="col-8 col-md-10" style="margin: 0 auto">
                    <img style="max-width: 100%;" src="{{ asset('assets/img/me_personal.png') }}" alt="Mi portafolio">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 m-auto">
            <div>
                <h3 style="font-size: 2.5em" class="text-center mb-3">@lang('app.front.headers.related_me')</h3>
                <p class=" ">@lang('app.front.headers.description')</p>
            </div>
            <div class="row mt-5" style="border-bottom: 2px solid #fff">
                <div class="p-0 text-left col-4 border-card-c">
                    {{-- <p class="text-center">Empecé</p> --}}
                    <i style="font-size: 1.4em;margin-left: 10px" class="fa-solid fa-play"></i>
                    <p class="">{{ config('myapp.info.experience.start') }}</p>
                </div>
                <div class="p-0 col-4 border-card-c" style="transform: scaleX(-1);">
                    @include('layouts.components.others.dots')
                </div>
                <div class="p-0 col-4 border-card-c text-right">
                    <i style="font-size: 1.4em; margin-right: 10px" class="fa-solid fa-flag-checkered"></i>
                    <p class="text-right">{{ config('myapp.info.experience.end') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- 

<header class="masthead bg-primary text-white text-center" style="height: 100vh">
    <div class="container d-flex align-items-center flex-column">
        <div class="row d-flex align-items-stretch">
            <div class="col-md-12 col-lg-5 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                <div class="slide-content bg-1">

                    <img class="masthead-avatar mb-5" src="assets/img/Recurso 1.png"
                        style="width: 50rem;"alt="..." />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 h-100">
                <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
                    <h1 class="title is-spaced is-size-1-desktop is-size-2-tablet is-size-3-mobile"
                        style="color: #141c3a;">Analista QA y Desarrolladora</h1>
                    <img class="masthead-avatar mb-5" src="assets/img/perfil2.jpg" alt="..." />
                    <!-- Masthead Heading-->
                    <h1 class="title is-spaced is-size-1-desktop is-size-2-tablet is-size-3-mobile"
                        style="color: #141c3a;">Beatriz Delgado Guerrero</h1>
                    <!-- Icon Divider-->
                    <!-- Masthead Subheading-->
                    <p class="masthead-subheading font-weight-light mb-0" style="color: black">Ingeniera en Sistemas
                        Computacionales</p>
                    <!-- <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div> -->
                    <p style="color: black">Hola! Soy Beatriz, un gusto en conocerte<br>
                        Mi aventura como Analista QA y Desarrolladora inició desde que me gradué de la “Universidad de
                        Guayaquil” hace unos 6 años, desde ese entonces he participado en distintos proyectos web para
                        distintas empresas de manera remota, compartiendo con personas muy talentosas y aprendiendo de
                        ellas. Soy curiosa y eso lo aprovecho para poder aprender nuevas cosas y mejorar mis
                        habilidades, amante de los animales y de la gastronomía.
                    </p>
                </div>
            </div>
        </div>
    </div>
</header> --}}
