<footer>
    <section id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="logo" class="lozad" data-src="{{ URL::asset('/img/logo/Logo_web.png') }}" alt="">
                        </div>
                        <div class="col-md-6 ">
                            <div class="row">
                                <span class="text-right"><i class="fas fa-phone"></i> 246 184 7899</span>
                            </div>
                            <div class="row">
                                <span class="text-right"><i class="fas fa-envelope"></i> alfonso_h_x@hotmail.com</span>
                            </div>
                            <div class="row">
                                <span class="text-right"><i class="fas fa-envelope"></i> hxa.dev@gmail.com</span>
                            </div>
                            <div class="row">
                                <span class="text-right"><i class="fas fa-map-marker"></i> Ciudad de México | Tlaxcala,
                                    México</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center mt-4">
                            <span class="mt-3">&copy; hxa.dev, {{__("footer.copy")}}</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-2 col-footer menu ml-4">
                    <div class="row">
                        <h4>Menu</h4>
                    </div>
                    <div class="row">
                        @foreach ($menu as $menu)
                            <div class="col-md-12"><a href="#{{ $menu->link }}">{{ $menu->name }}</a></div>
                        @endforeach
                    </div>
                </div> -->

            </div>
        </div>
    </section>
</footer>
