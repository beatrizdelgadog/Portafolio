<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portafolio BMDG</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/BMDG.png" />
        <style>
            :root{
                --primary-color: #0C54FF;
            }
        </style>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css?v=1.1" rel="stylesheet" />
        <link href="css/banner.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('layouts.components.navbar')
        
        <!-- Masthead-->
        {{-- Banner --}}
        @include('layouts.components.banner')
       
        <!-- About Section-->
        <section class="page-section bg-primary" id="about" style="height: 100vh">
            
        <div class="feat bg-gray pt-5 pb-5">
            <div class="container">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Servi</span>cios <span>y Herramien</span>tas</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's<br>standard dummy text ever since the 1500s, when an unknown book.</p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_two"><i class="fa-solid fa-list-check"></i></span>
                        <h6>QA</h6>
                        <p>Servicios como QA (Analista de calidad del software).</p>
                        <h6>Herramientas</h6>
                        <p>GitHub <br>GitLab</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                        <h6>Desarrolladora</h6>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                        <h6>Herramientas</h6>
                        <p>PHP <br>JavaScript <br>Laravel</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
                        <h6>Business Growth</h6>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                        <h6>Herramientas</h6>
                        <p>MySQL Workbench <br>phpMyAdmin <br>Oracle SQL Developer</p>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
                    <h6>Your Photoshoping</h6>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
                    <h6>Market Strategy</h6>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
                    <h6>Retina Ready</h6>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                </div>
                </div> -->
            </div>
            </div>
        </div>

            <!-- <h1  class="title is-spaced is-size-1-desktop is-size-2-tablet is-size-3-mobile" style="color: #141c3a;">Herramientas</h1>
            <br>
            <h4>Lenguajes, Frameworks y Herramientas</h4><br>
            <div class="flip">
                <div class="front" style="background-image: url(https://www.alexmedina.net/wp-content/uploads/2019/12/javascript.png)">
                <h1 class="text-shadow">JavaScript</hi>
                </div>
                <div class="back">
                <h2>JavaScript</h2>
                <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
                </div>
            </div>
            <div class="flip">
                <div class="front" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png)">
                <h1 class="text-shadow">PHP</hi>
                </div>
                <div class="back">
                <h2>PHP</h2>
                <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
                </div>
            </div>
            <br>
            <br>
            <div class="flip">
                <div class="front" style="background-image: url(https://s3-eu-west-1.amazonaws.com/bucketeer-688d8e11-8fc6-459f-bb52-26fd21452913/2020/03/AcA2LnWL_400x400.jpg)">
                <h1 class="text-shadow">Laravel</hi>
                </div>
                <div class="back">
                <h2>Laravel</h2>
                <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
                </div>
            </div>
            <div class="flip">
                <div class="front" style="background-image: url(https://inscripciones.utnso.com.ar/images/github-round.png)">
                <h1 class="text-shadow">GitHub</hi>
                </div>
                <div class="back">
                <h2>GitHub</h2>
                <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
                </div>
            </div> -->

            <!-- vertical -->
            
            <!-- <h4>Vertical Flip</h4>
            <div class="flip flip-vertical">
                <div class="front" style="background-image: url(https://images.pexels.com/photos/38136/pexels-photo-38136.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
                <h1 class="text-shadow">FOREST</hi>
                </div>
                <div class="back">
                <h2>Angular</h2>
                <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
                </div>
            </div>
            <div class="flip flip-vertical">
                <div class="front" style="background-image: url(https://images.pexels.com/photos/34950/pexels-photo.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
                <h1 class="text-shadow">TRACK</hi>
                </div>
                <div class="back">
                <h2>Angular</h2>
                <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
                </div>
            </div>
            <div class="flip flip-vertical">
                <div class="front" style="background-image: url(https://images.pexels.com/photos/34546/sunset-lake-landscape-summer.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
                <h1 class="text-shadow">SWAMP</hi>
                </div>
                <div class="back">
                <h2>Angular</h2>
                <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
                </div>
            </div> -->
        </section>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio" style="height: 100vh; background-color : white">
            <div class="feat bg-gray pt-5 pb-5">
                <div class="container">
                <div class="row">
                    <div class="section-head col-sm-12">
                        <h4><span>Proyec</span>tos</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's<br>standard dummy text ever since the 1500s, when an unknown book.</p>
                    </div>
                    <!-- Portfolio Grid Items-->
                    <div class="row justify-content-center">
                        @yield('content')
                        
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
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's<br>standard dummy text ever since the 1500s, when an unknown book.</p>
                    </div>
                    <div class="row d-flex align-items-stretch">
                        <div class="col-md-12 col-lg-5 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                            <div class="slide-content bg-1"> 
                                <div class="timeline">
                                    <ul>
                                        <li>
                                            <div class="content">
                                            <h3>What is Lorem Ipsum?</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                            </div>
                                            <div class="time">
                                            <h4>March 2018</h4>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="content">
                                            <h3>What is Lorem Ipsum?</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
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
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                                </div>
                                                <div class="time">
                                                <h4>March 2018</h4>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="content">
                                                <h3>What is Lorem Ipsum?</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
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
        <section class="c-section" id="contact" style="height: 100vh">
            <h2 class="c-section__title2"><span>Contactame</span></h2>
            <div class="container">
            <!-- <ul class="c-services"> -->
                <!-- Contact Section Heading-->
                <!-- <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contactame</h2> -->
                <!-- <h2><span>Servicios</span></h2> -->
                <!-- Icon Divider-->
                <!-- <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div> -->
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nombres</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Número de contacto</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- </ul> -->
        </section>
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
                    <div class="col-lg-4 mb-5 mb-lg-0  text-center">
                        <h4 class="text-uppercase mb-4">Al rededor de la Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/beatrizdelgadog"><i class="fab fa-fw fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/beatriz-melanie-delgado-guerrero-3b057323a/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/BeatrizMelanie7"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/beatrizmdg19/"><i class="fab fa-fw fa-instagram"></i></a>
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
                        <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        {{-- TEXT ROTATE --}}
        <script src="{{ asset('js/components/navbar.js')}}"></script>
        <script src="{{ asset('js/components/text-rotate.js')}}"></script>

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