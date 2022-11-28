<section class="page-section skill" id="about">
    {{-- <section class="skill" id="skills"> --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="skill-bx wow zoomIn">
                    <h2><span>Servicios y Herramientas</h2>
                    {{-- <h2>Skills</h2> --}}
                    <p>Esta son algunas herramientas con las cuales he trabajado.</p>
                    <div class="row mt-2">
                        @foreach ($skills as $skill)
                            <div class="c-pointer col-lg-4 col-sm-12 col-md-6">
                                <div class="item"> <span class="icon feature_box_col_two"><i class="{{$skill->icon_class}}"></i></span>
                                    <h6>{{ $skill->title }}</h6>
                                    <p>{!! $skill->description !!}</p>
                                    <h6>Herramientas</h6>
                                    <p>{!! $skill->tools !!}</p>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="c-pointer col-lg-4 col-sm-12 col-md-6">
                            <div class="item"> <span class="icon feature_box_col_two"><i class="fa-solid fa-list-check"></i></span>
                                <h6>QA</h6>
                                <p>Servicios como QA (Analista de calidad del software).</p>
                                <h6>Herramientas</h6>
                                <p>GitHub <br>GitLab</p>
                            </div>
                        </div>
                        <div class="c-pointer col-lg-4 col-sm-12 col-md-6">
                            <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                                <h6>Desarrolladora</h6>
                                <p>Desarrollo de aplicaciones web a medida y soporte.</p>
                                <h6>Herramientas</h6>
                                <p>PHP <br>JavaScript <br>Laravel</p>
                            </div>
                        </div>
                        <div class="c-pointer col-lg-4 col-sm-12 col-md-6">
                            <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
                                <h6>DBA</h6>
                                <p></p>
                                <h6>Herramientas</h6>
                                <p>MySQL Workbench <br>phpMyAdmin <br>Oracle SQL Developer</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="background-image-left" src="{{ asset('assets/front/color-sharp.png')}}" alt="Background" />
</section>




<!-- About Section-->
{{-- <section class="page-section bg-primary" id="about" style="height: 100vh">
            
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

</section> --}}