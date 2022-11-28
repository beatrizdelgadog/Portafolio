<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Mi portafolio" />
    <meta name="author" content="Beatriz DG" />
    <meta name="keywords" content="Portafolio,Analista QA,Desarrolladora web">
    <title>Portafolio BMDG</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/BMDG.png" />
    <style>
        :root {
            --primary-color: #0C54FF;
        }
    </style>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css?v={{ config('myapp.version')}}" rel="stylesheet" />
    <link href="css/banner.css?v={{ config('myapp.version')}}" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/runnng.css')}}?v={{ config('myapp.version')}}">
    {{-- <link rel="stylesheet" href="{{ asset('css/button-contact.css')}}"> --}}
</head>

<body id="page-top">

    @include('layouts.components.preloader')
    <!-- Navigation-->
    @include('layouts.components.navbar')
    @yield('content')


    <!-- Masthead-->
    
    <!-- Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <!-- <h4 class="text-uppercase mb-4  text-center">Contacto</h4>
                        <div class="col-lg-10 ms-auto">
                            <p><i class="fa-regular fa-envelope"></i> <a itemprop="email" href="mailto:beatriz-melanie7@hotmail.com">beatriz-melanie7@hotmail.com</a></p>
                            <p><i class="fas fa-phone fa-fw"></i> <a itemprop="telephone" href="tel:0981454338"> 098 145 4338</a></p>
                            <p><i class="fa-sharp fa-solid fa-file-pdf"></i><a href="assets/CV - Beatriz Delgado Guerrero.pdf"> CV</a></p>
                        </div> -->
                    <!-- <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p> -->
                </div>
                <!-- Footer Social Icons-->
                <div class="mt-2 col-lg-4 mb-5 mb-lg-0  text-center">
                    <h4 class="text-uppercase mb-4">Al rededor de la Web</h4>
                    <div class="social-icon">
                        <a target="_blank" class="" href="{{ config('myapp.links.github')}}">
                            <i class="fab fa-fw fa-github"></i>
                        </a>
                        <a target="_blank" class="" href="{{ config('myapp.links.linkedin')}}">
                            <i class="fab fa-fw fa-linkedin-in"></i>
                        </a>
                        <a target="_blank" class="" href="{{ config('myapp.links.twitter')}}">
                            <i class="fab fa-fw fa-twitter"></i>
                        </a>
                        <a target="_blank" class="" href="{{ config('myapp.links.instagram')}}">
                            <i class="fab fa-fw fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <!-- Footer About Text-->
                <!-- <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4  text-center">Servicios</h4>
                        <p class="col-lg-10 ms-auto"><i class="fa-solid fa-angles-right"></i>
                        Diseño de páginas web.
                        </p>
                        <p class="col-lg-10 ms-auto"><i class="fa-solid fa-angles-right"></i>
                            Desarrollo web.
                        </p>
                        <p class="col-lg-10 ms-auto"><i class="fa-solid fa-angles-right"></i>
                            Mantenimiento web.
                        </p>
                    </div> -->
                <!-- Copyright Section-->
                <div class="copyright py-4 text-center text-white">
                    <div class="container"><small>Copyright &copy; BeatrizDG {{ date('Y')}}</small></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->

    @stack('scripts-cdn')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    {{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}
    <script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    {{-- TEXT ROTATE --}}
    <script src="{{ asset('js/components/navbar.js') }}"></script>
    <script src="{{ asset('js/components/text-rotate.js') }}"></script>
    <script src="{{ asset('js/components/easy-ajax.js') }}"></script>
    <script src="{{ asset('js/components/running.js') }}"></script>

    @stack('scripts-local')
    <script>
        $(document).ready(function() {
            $("#preloader").fadeOut();
        });
    </script>
    @stack('custom-scripts')
</body>

</html>

<!-- <style>
    @import url("https://fonts.googleapis.com/css?family=Roboto+Mono");
    * {
    box-sizing: border-box;
    font-weight: normal;
    }

    body {
    color: #555;
    background: white;
    text-align: center;
    font-family: "Roboto Mono";
    }

    h1 {
    font-size: 2.2em;
    }

    .flip {
    position: relative;
    }
    .flip > .front,
    .flip > .back {
    display: block;
    transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition-duration: 0.5s;
    transition-property: transform, opacity;
    }
    .flip > .front {
    transform: rotateY(0deg);
    }
    .flip > .back {
    position: absolute;
    opacity: 0;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    transform: rotateY(-180deg);
    }
    .flip:hover > .front {
    transform: rotateY(180deg);
    }
    .flip:hover > .back {
    opacity: 1;
    transform: rotateY(0deg);
    }
    .flip.flip-vertical > .back {
    transform: rotateX(-180deg);
    }
    .flip.flip-vertical:hover > .front {
    transform: rotateX(180deg);
    }
    .flip.flip-vertical:hover > .back {
    transform: rotateX(0deg);
    }

    .flip {
    position: relative;
    display: inline-block;
    margin-right: 2px;
    margin-bottom: 1em;
    width: 400px;
    }
    .flip > .front,
    .flip > .back {
    display: block;
    color: white;
    width: inherit;
    background-size: cover !important;
    background-position: center !important;
    height: 300px;
    padding: 1em 2em;
    background: #313131;
    border-radius: 10px;
    }
    .flip > .front p,
    .flip > .back p {
    font-size: 0.9125rem;
    line-height: 160%;
    color: #999;
    }

    .text-shadow {
    text-shadow: 1px 1px rgba(0, 0, 0, 0.04), 2px 2px rgba(0, 0, 0, 0.04), 3px 3px rgba(0, 0, 0, 0.04), 4px 4px rgba(0, 0, 0, 0.04), 0.125rem 0.125rem rgba(0, 0, 0, 0.04), 6px 6px rgba(0, 0, 0, 0.04), 7px 7px rgba(0, 0, 0, 0.04), 8px 8px rgba(0, 0, 0, 0.04), 9px 9px rgba(0, 0, 0, 0.04), 0.3125rem 0.3125rem rgba(0, 0, 0, 0.04), 11px 11px rgba(0, 0, 0, 0.04), 12px 12px rgba(0, 0, 0, 0.04), 13px 13px rgba(0, 0, 0, 0.04), 14px 14px rgba(0, 0, 0, 0.04), 0.625rem 0.625rem rgba(0, 0, 0, 0.04), 16px 16px rgba(0, 0, 0, 0.04), 17px 17px rgba(0, 0, 0, 0.04), 18px 18px rgba(0, 0, 0, 0.04), 19px 19px rgba(0, 0, 0, 0.04), 1.25rem 1.25rem rgba(0, 0, 0, 0.04);
    }
</style> -->
