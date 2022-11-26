<style>
    
/*=================================================================*/
/*                      THEME ELEMENTS
/*=================================================================*/
/* === Timeline === */
.timeline {
  position: relative;
}
.timeline > * {
  color: black;
}

.timeline .timeline-container {
  padding-left: 50px;
  margin-bottom: 50px;
  position: relative;
  background-color: inherit;
  width: 100%;
}
.timeline .timeline-container:last-of-type {
  margin-bottom: 0;
}

.timeline.edu .timeline-container::after {
  content: "";
  background: #FFF;
  font-family: "simple-line-icons";
  font-size: 24px;
  color: #FF4C60;
  position: absolute;
  left: -7px;
  top: 0;
  z-index: 1;
}

.timeline.exp .timeline-container::after {
  content: "";
  background: #FFF;
  font-family: "simple-line-icons";
  font-size: 24px;
  color: #FF4C60;
  position: absolute;
  left: -7px;
  top: 0;
  z-index: 1;
}

.timeline .content {
  position: relative;
}

.timeline .content .time {
  color: #8B88B1;
  font-size: 14px;
}

.timeline .content h3 {
  font-size: 20px;
  margin: 10px 0;
}

.timeline .content p {
  margin: 0;
}

.timeline span.line {
  position: absolute;
  width: 1px;
  background-color: #6FDCBF;
  top: 30px;
  bottom: 30px;
  left: 34px;
}
.timeline .icon-time{
    background: #fff;
    font-family: simple-line-icons;
    font-size: 24px;
    color: #6FDCBF;
    position: absolute;
    left: 20px;
    top: 0;
    z-index: 1;
    padding: 10px 0;
}
</style>
@if (count($types_experience) > 0)
<div style="position: relative">
    <section class="container " id="experience" style="min-height: 100vh">
        <div class="row">
            <div class="section-head col-12 mt-4">
                <h3 class="text-center"></h3>
                <h4><span style="color: white">Mi Experiencia</span> Profesional </h4>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-5 col-xl-4 d-none d-sm-block d-xl-block flex " style="">
              @include('layouts.components.others.girl')
            </div>
            <div class="col-12 col-md-7 col-xl-8">
                <div class="row">
                    @forelse ($types_experience as $item)    
                        <div class="col-md-12 relative mt-3">
                            <!-- timeline wrapper -->
                            <div class="pt-2 pb-3 timeline bg-white rounded shadow-dark padding-30 overflow-hidden">
                                @foreach ($item->experiences as $experience)
                                    <!-- timeline item -->
                                    <div class="timeline-container wow fadeInUp relative">
                                        <i class=" icon-time {{ $item->icon }}"></i>
                                        <div class="content">
                                            <span class="time">{{$experience->year_start}} - {{ $experience->year_end != 0 ? $experience->year_end : 'Presente' }}</span>
                                            <h3 class="title">{{$experience->name}}</h3>
                                            <p>{{ $experience->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
        
                                <!-- main line -->
                                <span class="line"></span>
        
                            </div>
        
                        </div>
                    @empty
                        No hay datos                
                    @endforelse 
                </div>
            </div>
            <div class="col-12 d-sm-block d-sm-none d-xl-none">
              <img src="{{ asset('assets\front\me\girl-up.svg')}}" alt="">
              {{-- @include('layouts.components.others.girl-show-up') --}}
            </div>
        </div>
    </section>
    <img class="background-image-left" src="{{ asset('assets/front/color-sharp.png')}}" alt="Image" />
</div>

@endif