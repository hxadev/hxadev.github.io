<div class="content lozad">
    <section id="portfolio" class="portfolio">

        <div class="container">
            <h1 data-aos="zoom-in-up"> <i class="fas fa-tasks"></i> {{__("portfolio.title")}}</h1>
            <p data-aos="zoom-in" data-aos-duration="1000"> {{__("portfolio.description")}}</p>

            <div id="slider" class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <!-- Begin Card Project -->
                        @foreach ($projects as $project)
                            @if ($project->active)
                                <div data-aos="zoom-in" data-aos-duration="2000"
                                    class="col-md-4 col-lg-4 col-sm-4 col-xs-12 container-product owl-item">
                                    <a href="project/{{ $project->id }}">
                                        <div class="show-more text-center">
                                            <span><i class="fas fa-eye"></i></span>
                                        </div>
                                        <article class="text-left">
                                            <h2>{{ $project->name }}</h2>
                                            <h4>{{ $project->type }}</h4>
                                        </article>
                                        <img class="lozad"
                                            data-src="data:image/png;base64,{{$project->image }}">
                                    </a>
                                </div>
                            @endif
                        @endforeach
                        <!-- End Card Project -->

                        <!-- Begin Card Project -->
                        {{-- <div data-aos="zoom-in" data-aos-duration="2000" class="col-md-4 col-lg-4 col-sm-4 col-xs-12 container-product owl-item">
                        <a href="">
                            <div class="show-more text-center">
                                <span><i class="fas fa-eye"></i></span>
                            </div>
                            <article class="text-left">
                                <h2>Shopmex</h2>
                                <h4>E-commerce</h4>
                            </article>
                            <img class="lozad" data-src="{{URL::asset('/img/portafolio/cards/Project_Shopmex.png')}}" alt="">
                        </a>
                    </div> --}}
                        <!-- End Card Project -->

                        <!-- Begin Card Project -->
                        {{-- <div data-aos="zoom-in" data-aos-duration="2000" class="col-md-4 col-lg-4 col-sm-4 col-xs-12 container-product owl-item">
                        <a href="">

                            <div class="show-more text-center">
                                <span><i class="fas fa-eye"></i></span>
                            </div>
                            <article class="text-left">
                                <h2>Sistema de Control Escolar</h2>
                                <h4>Sistema Web</h4>
                            </article>
                            <img class="lozad" data-src="{{URL::asset('/img/portafolio/cards/Project_SGA.png')}}" alt="">
                        </a>
                    </div> --}}
                        <!-- End Card Project -->

                        <!-- Begin Card Project -->
                        {{-- <div data-aos="zoom-in" data-aos-duration="2000" class="col-md-4 col-lg-4 col-sm-4 col-xs-12 container-product owl-item">
                        <a href="">
                            <div class="show-more text-center">
                                <span><i class="fas fa-eye"></i></span>
                            </div>
                            <article class="text-left">
                                <h2>Reduce, Reusa, Recicla</h2>
                                <h4>Página Web</h4>
                            </article>
                            <img class="lozad" data-src="{{URL::asset('/img/portafolio/cards/Project_Reduce.png')}}" alt="">
                        </a>
                    </div> --}}
                        <!-- End Card Project -->

                        <!-- Begin Card Project -->
                        {{-- <div data-aos="zoom-in" data-aos-duration="2000" class="col-md-4 col-lg-4 col-sm-4 col-xs-12 container-product owl-item">
                        <a href="">
                            <div class="show-more text-center">
                                <span><i class="fas fa-eye"></i></span>
                            </div>
                            <article class="text-left">
                                <h2>Alasar Crew</h2>
                                <h4>Sistema Web</h4>
                            </article>
                            <img class="lozad" data-src="{{URL::asset('/img/portafolio/cards/Project_Alasar.png')}}" alt="">
                        </a>
                    </div> --}}
                        <!-- End Card Project -->

                    </div>
                </div>
                <div class="owl-controls">
                    <div class="owl-nav">
                        <div class="owl-prev"></div>
                        <div class="owl-next"></div>
                    </div>
                    <div class="owl-dots">
                        <div class="owl-dot active"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</div>
