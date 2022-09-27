<nav>
    <section id="nav" class="nav">
        <a id="btn-close-menu" class="closeBtn"><i class="fas fa-times"></i></a>
        @if (Request::is('principal'))
            @foreach ($menu as $menu)
                <a data-aos="fade-left" data-aos-duration="2000" data-id="{{ $menu->id }}"
                    href="#{{ $menu->link }}" class="active main"><i class="{{ $menu->icon }}"></i>
                    {{ $menu->name }}
                </a>
            @endforeach
        @endif
        @if (Request::is('project/*'))
            <a data-aos="fade-left" data-aos-duration="2000" data-id="" href="/principal#portfolio" class="active main"><i
                    class="fa fa-arrow-left"></i>
                Volver
            </a>
        @endif
    </section>
</nav>
