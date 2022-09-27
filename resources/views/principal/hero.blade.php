<section id="particles-js" class="hero lazy-background">

    <section id="hero">
        <div class="responsive-button" id="btn-menu-responsive"> <i class="fas fa-bars"></i> </div>

        <!-- <div class="hero-logo">
            <img src="{{URL::asset('/img/pricnipal/')}}" alt="">
        </div> -->

        <div data-aos="fade-down" class="hero-avatar">
            <img class="lozad" data-src="{{URL::asset('/img/principal/hero/avatar.jpg')}}" alt="">
        </div>



        <div class="hero-info">

            <div data-aos="fade-right" class="typewritting">
                <h1>{{__('hero.name')}}</h1>
            </div>
            <h3 data-aos="fade-right">{{__('hero.position')}}</h3>
            <!-- <hr> -->
            <p data-aos="fade-right">
                {{__('hero.description')}}
            </p>
            <p data-aos="fade-right" class="hastag">#ILoveTech</p>

            <br>
            <div class="row">

                <a type="button" class="btn btn-hero btn-md" data-toggle="modal" data-target="#mdl_resume"> <i class="fa fa-file"></i> {{__('hero.button.cv')}}</a>
                <a href="#portfolio" class="btn btn-hero btn-md"> <i class="fa fa-arrow-right"></i> {{__('hero.button.portfolio')}}</a>

            </div>

        </div>

    </section>

</section>

<!-- Begin Social Bar  -->
<div data-aos="fade-right" class="social">
    <ul>
        <!-- <li><a href="" class="icon-facebook"><i class="fab fa-facebook-square"></i></a></li> -->
        <li><a href="https://www.linkedin.com/in/alfonso-hernandez-xochipa-a500ba190" target="_blank" class="icon-linkedin"><i class="fab fa-linkedin"></i></a></li>
        <!-- <li><a href="" class="icon-instagram"><i class="fab fa-instagram"></i></a></li> -->
        <li><a href="https://github.com/posihx" target="_blank" class="icon-github"><i class="fab fa-github"></i></a></li>
        <li><a href="#contact" class="icon-mail"><i class="fas fa-envelope"></i></a></li>
    </ul>
</div>
<!-- End Social Bar  -->


<div loading="lazy" id="config-panel" class="config-panel">
    <div class="panel-inner">
        <a state="OFF" id="config-button" class="config-button">
            <i class="fas fa-cog"></i>
        </a>
        <div class="container">
            <h4>{{__('options.optionColor')}}</h4>
            <div class="container">
                <ul class="chooseColor">
                    <li data-theme="1" class="theme-1">
                        <a></a>
                    </li>
                    <li data-theme="2" class="theme-2">
                        <a></a>
                    </li>
                    <li data-theme="3" class="theme-3">
                        <a></a>
                    </li>
                    <li data-theme="4" class="theme-4">
                        <a></a>
                    </li>
                    <li data-theme="5" class="theme-5">
                        <a></a>
                    </li>
                    <li data-theme="6" class="theme-6">
                        <a></a>
                    </li>
                </ul>
            </div>
        </div>
        <hr />
        <div class="container">
            <h4>{{__('options.optionDarkMode')}}</h4>

            <div class="container">
                <label class="switch-button">
                    <input type="checkbox" @if($typeTheme==='dark' ) checked='checked' @endif>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="container">
                <h4>{{__('options.optionLanguaje')}}</h4>

                <ul class="chooseLanguage">
                    <li>
                        <a href="{{url('/locale/es')}}">
                            <img loading="lazy" class="lozad" data-src="{{URL::asset('img/icons/lang-es.svg')}}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/locale/en')}}">
                            <img class="lozad" data-src="{{URL::asset('img/icons/lang-eng.svg')}}" alt="">
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
