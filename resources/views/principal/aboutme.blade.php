<div class="content lozad">
<section id="aboutMe" class="aboutMe">
    <div class="container">
        <h1 data-aos="zoom-in-up"><i class="fas fa-user"></i> {{__('about.title')}}</h1>

        <div class="row">
            <div class="col-md-6 pr-2">
                <h3 data-aos="zoom-in" data-aos-duration="1000">{{__('about.section1.title')}}</h3>
                <p data-aos="zoom-in" data-aos-duration="1000">{{__('about.section1.description1',["experience"=>$experience])}}</p>
                <p data-aos="zoom-in" data-aos-duration="1000">{{__('about.section1.description2')}}</p>
                <p data-aos="zoom-in" data-aos-duration="1000">{{__('about.section1.description3')}}</p>
                <br>

            </div>
            <!-- <div data-aos="flip-right" data-aos-duration="2000" class="col-md-6 pl-6 img-content">
                <img  class="lozad" data-src="{{URL::asset('/img/principal/hero/avatar.jpg')}}" class="" alt="">
            </div> -->

        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 pr-2">
                <h3 data-aos="zoom-in" data-aos-duration="1000">{{__('about.section2.title')}}</h3>
            <p data-aos="zoom-in" data-aos-duration="1000">{{__("about.section2.description1")}} <a data-toggle="modal" data-target="#mdl_resume">{{__('hero.button.cv')}}</a> - <a href="#portfolio">{{__('hero.button.portfolio')}}</a>.</p>
                <br>

                <div class="row">
                    <div class="card-section">
                        <!-- BEGIN cards section of tech skills -->
                        @foreach($services as $service)
                            <div data-aos="flip-left" data-aos-duration="2000" class="card col-12 col-lg-3 ml-2 mr-2 mt-2 mb-2 mt-2 mb-2">
                                <div class="card-header">
                                    @foreach($service->icons as $icon)
                                        <i class="{{$icon}}"></i>
                                    @endforeach
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$service->title}}</h5>
                                    <p class="card-text">
                                        {{$service->content}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                        <!-- END cards section of tech skills -->
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</section>
</div>
