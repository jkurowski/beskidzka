@extends('layouts.homepage', ['body_class' => 'homepage'])
@if($isAdmin)
    @include('layouts.partials.inline')
@endif
@section('content')
    <main>
        <section class="position-relative home-hero p-0">

            <div class="ratio ratio-16x9 ratio-off-lg-down">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ARUyjjDRRdY?controls=0&autoplay=1&mute=1&loop=1&playlist=ARUyjjDRRdY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>


            <div class="home-hero-video h-100 w-100"></div>

            <div class="container position-absolute home-hero-apla d-flex justify-content-center align-items-center">
                <div class="row w-100">
                    <div class="text-center text-white text-content">
                        <h1>
                            <span data-aos="fade-up">Beskidzka</span>
                            <span data-aos="fade-up" data-aos-delay="200">park</span>
                        </h1>
                        <p class="text-pretty fs-3 fw-light py-4 " data-aos="fade-up" data-aos-delay="400">
                            TWÓJ ZIELONY ZAKĄTEK ŁODZI
                        </p>
                        <a href="/beskidzka-park/#oferta" class="btn btn-primary btn-min-width" data-aos="fade-up"
                           data-aos-delay="600">
                            Dostępne domy
                        </a>
                    </div>
                </div>
            </div>
            <div class="position-absolute bottom-0 start-50 translate-middle-x home-hero-arrow">
                <a class="rounded-circle bg-white w-60 h-60 d-flex justify-content-center align-items-center scroll-down-button box-shadow-base"
                   href="#w-dol">
                    <img src="{{ asset('images/arrow_down.svg') }}" alt="Przewiń w dół" width="20" height="20" loading="eager" decoding="async" />
                </a>
            </div>
        </section>
        <section id="w-dol">
            <div class="container">
                <div class="row gy-5 with-divider-xl-vertical justify-content-center">
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="px-md-20 text-pretty text-center text-xl-start">
                            <div class="d-flex flex-column flex-xl-row gap-20 align-items-center mb-20">
                                <div>
                                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center p-3"
                                         data-aos="entry">
                                        <img src="{{ asset('images/o_osiedlu.svg') }}" class="img-fluid w-30 h-30 object-fit-contain" alt="" width="30"
                                             height="30" loading="lazy" decoding="async" />
                                    </div>
                                </div>
                                <h2 class="fs-5 fw-semibold text-balance" data-aos="fade" data-aos-delay="500">
                                    Beskidzka Park
                                </h2>
                            </div>
                            <div class="text-pretty">
                                <p class="fw-medium" data-aos="fade">
                                    Beskidzka Park to przemyślany ekosystem, w którym życie
                                    płynie w harmonii z naturą.
                                </p>
                                <p class="fw-light" data-aos="fade">
                                    Każdy aspekt naszej inwestycji został starannie
                                    zaprojektowany, aby wspierać ekologiczny styl życia, bez
                                    kompromisów w zakresie komfortu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="px-md-20 text-pretty text-center text-xl-start">
                            <div class="d-flex flex-column flex-xl-row gap-20 align-items-center mb-20">
                                <div>
                                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center p-3"
                                         data-aos="entry">
                                        <img src="{{ asset('images/lokalizacja.svg') }}" class="img-fluid w-30 h-30 object-fit-contain" alt="" width="30"
                                             height="30" loading="lazy" decoding="async" />
                                    </div>
                                </div>
                                <h2 class="fs-5 fw-semibold text-balance" data-aos="fade" data-aos-delay="500">
                                    Lokalizacja
                                </h2>
                            </div>
                            <div class="text-pretty">
                                <p class="fw-medium" data-aos="fade">
                                    Lokalizacja osiedla, 15 minut od centrum Łodzi i bliskość do
                                    głównych tras komunikacyjnych.
                                </p>
                                <p class="fw-light" data-aos="fade">
                                    Gwarantuje łatwy dostęp do wszelkich udogodnień miejskich,
                                    od centrów handlowych po instytucje kultury.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="px-md-20 text-pretty text-center text-xl-start">
                            <div class="d-flex flex-column flex-xl-row gap-20 align-items-center mb-20">
                                <div>
                                    <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center p-3"
                                         data-aos="entry">
                                        <img src="{{ asset('images/ekologia.svg') }}" class="img-fluid w-30 h-30 object-fit-contain" alt="" width="30"
                                             height="30" loading="lazy" decoding="async" />
                                    </div>
                                </div>
                                <h2 class="fs-5 fw-semibold text-balance" data-aos="fade" data-aos-delay="500">
                                    Ekologia
                                </h2>
                            </div>
                            <div class="text-pretty">
                                <p class="fw-medium" data-aos="fade">
                                    W każdym domu w Beskidzka Park znajdziesz technologie, które
                                    zmniejszą ślad węglowy.
                                </p>
                                <p class="fw-light" data-aos="fade">
                                    Pompy ciepła najnowszej generacji a także opcja montażu
                                    paneli słonecznych to tylko dwa z rozwiązań.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start inline inline-tc">
                    <div class="col-12 col-md-6 col-xl-5">
                        <h2 class="mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="1">{!! getInline($array, 1, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="1">{!! getInline($array, 1, 'modaleditor') !!}</span>
                        </h2>
                        <div class="text-pretty" data-modaleditortext="1">
                            {!! getInline($array, 1, 'modaleditortext') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2 text-md-end">
                        <img src="{{ getInline($array, 1, 'file') }}" alt="{{ getInline($array, 1, 'file_alt') }}" data-img="1" width="555" height="480" class="img-fluid" data-aos="fade">
                    </div>
                    @if($isAdmin)
                        <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="1" data-hideinput="modallink,modallinkbutton" data-method="update" data-imgwidth="556" data-imgheight="480"></button></div>
                    @endif
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center">
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 inline inline-tc">
                        <h2 class="mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="2">{!! getInline($array, 2, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="2">{!! getInline($array, 2, 'modaleditor') !!}</span>
                        </h2>
                        <div class="text-pretty" data-modaleditortext="2">
                            {!! getInline($array, 2, 'modaleditortext') !!}
                        </div>
                        @if($isAdmin)
                            <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="2" data-hideinput="modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="556" data-imgheight="480"></button></div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-10 col-xxl-8 offset-lg-1 offset-xxl-2">

                        <div class="row with-side-line gy-3 pt-50 pt-md-80">
                            <div class="col-12 col-md-6">
                                <div
                                        class="d-flex flex-column text-center flex-md-row text-md-start gap-md-30 gap-3 align-items-center">
                                    <div data-aos="entry" data-aos-delay="200"
                                         class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                                         style="--color1:#A3D445;--color2:#95B852;">
                                        1
                                    </div>
                                    <div>
                                        <p class="fs-4 text-primary fw-bold mb-1" data-aos="fade-up">2022</p>
                                        <p class="h4 text-balance mb-20" data-aos="fade-up">Rozpoczęcie budowy</p>
                                        <p class="fw-medium text-pretty" data-aos="fade-up">
                                            Rozpoczynamy wstępne plany
                                            i zaczynamy planować rozwój budowy!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 text-center">
                                <div data-aos="fade">
                                    <img src="{{ asset('images/postepy_01_a.webp') }}" alt="" decoding="async" loading="lazy" width="438" height="219"
                                         class="rounded-2 img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="row with-side-line gy-3 pt-50 pt-md-80">
                            <div class="col-12 col-md-6">
                                <div
                                        class="d-flex flex-column text-center flex-md-row text-md-start gap-md-30 gap-3 align-items-center">
                                    <div data-aos="entry" data-aos-delay="200"
                                         class="rounded rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                                         style="--color1:#A3D445;--color2:#95B852;">
                                        2
                                    </div>
                                    <div>
                                        <p class="fs-4 text-primary fw-bold mb-1" data-aos="fade-up">2023</p>
                                        <p class="h4 text-balance mb-20" data-aos="fade-up">STAN SUROWY ROZPOCZĘTY</p>
                                        <p class="fw-medium text-pretty" data-aos="fade-up">
                                            II Etap<br>
                                            Stan surowy w trakcie realizacji.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 text-center">
                                <div data-aos="fade">
                                    <img src="{{ asset('images/postepy_02_a.webp') }}" alt="" decoding="async" loading="lazy" width="438" height="219" class="rounded-2 img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="row with-side-line gy-3 pt-50 pt-md-80">
                            <div class="col-12 col-md-6">
                                <div
                                        class="d-flex flex-column text-center flex-md-row text-md-start gap-md-30 gap-3 align-items-center">
                                    <div data-aos="entry" data-aos-delay="200"
                                         class="rounded-circle position-relative z-2 bg-white border border-2 border-primary text-primary w-85 h-85 d-flex align-items-center justify-content-center fs-45 fw-bold"
                                         style="--color1:#A3D445;--color2:#95B852;">
                                        3
                                    </div>
                                    <div>
                                        <p class="fs-4 text-primary fw-bold mb-1" data-aos="fade-up">2025</p>
                                        <p class="h4 text-balance mb-20" data-aos="fade-up">Stan deweloperski gotowy</p>
                                        <p class="fw-medium text-pretty" data-aos="fade-up">
                                            Etap III<br>
                                            Zakończenie stanu deweloperskiego.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 text-center">
                                <div data-aos="fade">
                                    <img src="{{ asset('images/stan_deweloperski.webp') }}" alt="" decoding="async" loading="lazy" width="438" height="219"
                                         class="rounded-2 img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="row with-side-line gy-3 pt-50 pt-md-80">
                            <div class="col-12 col-md-6">
                                <div
                                        class="d-flex flex-column text-center flex-md-row text-md-start gap-md-30 gap-3 align-items-center">
                                    <div data-aos="entry" data-aos-delay="200"
                                         class="rounded-circle position-relative z-2 bg-white border border-2 border-primary text-primary w-85 h-85 d-flex align-items-center justify-content-center fs-45 fw-bold">
                                        4
                                    </div>
                                    <div>
                                        <p class="fs-4 text-primary fw-bold mb-1" data-aos="fade-up">2025</p>
                                        <p class="h4 text-balance mb-20" data-aos="fade-up">ODDANIE DO UŻYTKOWANIA</p>
                                        <p class="fw-medium text-pretty" data-aos="fade-up">
                                            Etap IV<br>
                                            Planowo II połowa 2025
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 text-center">
                                <div data-aos="fade">
                                    <img src="{{ asset('images/08_SALON 1.webp') }}" alt="" decoding="async" loading="lazy" width="438" height="219"
                                         class="rounded-2 img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative overflow-hidden">
            <div class="container">
                <div class="row gy-30 text-center text-md-start">
                    <div class="col-12 col-md-6 col-xl-5 inline inline-tc">
                        <div class="col-8 offset-2 col-sm-6 offset-sm-3 offset-md-0 mb-3">
                            <img class="img-fluid" src="{{ asset('images/abart_logo.webp') }}" width="609" height="100" alt="" loading="lazy"
                                 decoding="async">
                        </div>
                        <h2 class="mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="3">{!! getInline($array, 3, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="3">{!! getInline($array, 3, 'modaleditor') !!}</span>
                        </h2>
                        <div class="text-pretty" data-modaleditortext="3">
                            {!! getInline($array, 3, 'modaleditortext') !!}
                        </div>
                        @if($isAdmin)
                            <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="3" data-hideinput="modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="556" data-imgheight="480"></button></div>
                        @endif
                    </div>
                    <div class="col-12 col-md-6 col-xl-7">
                        <div class="position-relative with-shifted-slider slider-out-of-grid">
                            <div data-slick='{"slidesToShow": 2.1,  "prevArrow": ".prev-arrow", "nextArrow": ".next-arrow", "responsive": [{"breakpoint": 768, "settings": {"slidesToShow": 1}}]}'>
                                <div class="px-3 aspect-ratio-slide">
                                    <img src="{{ asset('images/08_SALON 1.webp') }}" alt="" width="438" height="392" loading="lazy"
                                         class="w-100 h-100 object-fit-cover rounded-2" />
                                </div>
                                <div class="px-3 aspect-ratio-slide">
                                    <img src="{{ asset('images/09_KUCHNIA 1.webp') }}" alt="" width="438" height="392" loading="lazy"
                                         class="w-100 h-100 object-fit-cover rounded-2" />
                                </div>
                                <div class="px-3 aspect-ratio-slide">
                                    <img src="{{ asset('images/10_KUCHNIA 2.webp') }}" alt="" width="438" height="392" loading="lazy"
                                         class="w-100 h-100 object-fit-cover rounded-2" />
                                </div>
                            </div>
                            <div class="slider-controls">
                                <button class="prev-arrow btn btn-primary w-40 h-40">
                                    <img src="{{ asset('images/arrow_prev.svg') }}" alt="Poprzedni slajd" width="15" height="15" loading="lazy"
                                         decoding="async" />
                                </button>
                                <button class="next-arrow btn btn-primary w-40 h-40">
                                    <img src="{{ asset('images/arrow_next.svg') }}" alt="Następny slajd" width="15" height="15" loading="lazy"
                                         decoding="async" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start">
                    <div class="col-12 col-md-6 col-xl-5 inline inline-tc">
                        <h2 class="mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="4">{!! getInline($array, 4, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="4">{!! getInline($array, 4, 'modaleditor') !!}</span>
                        </h2>
                        <div class="text-pretty" data-modaleditortext="4">
                            {!! getInline($array, 4, 'modaleditortext') !!}
                        </div>
                        @if($isAdmin)
                            <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="4" data-hideinput="modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="556" data-imgheight="480"></button></div>
                        @endif
                    </div>
                    <div class="col-12 col-md-6 col-xl-7 text-md-end">
                        <div id="map" class="map text-center w-100 h-100" data-aos="fade" data-aos-delay="500"></div>
                    </div>
                    <div class="col-12 pt-50">
                        <div class="row pt-md-20 justify-content-center gy-30 gy-md-50 row-cols-2  row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 text-center text-sm-start">
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #eb0000; --color2: #ba0606">
                                        <img src="{{ asset('images/legend_silownia.svg') }}" alt="" loading="lazy" decoding="async" width="32" height="32"
                                             class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Siłownia</p>
                                        <p class="fw-light mb-0">1 minuta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #a749f8; --color2: #6a009e">
                                        <img src="{{ asset('images/legend_apteka.svg') }}" alt="" loading="lazy" decoding="async" width="32" height="32"
                                             class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Apteka</p>
                                        <p class="fw-light mb-0">1 minuta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #04fedc; --color2: #12b9ba">
                                        <img src="{{ asset('images/legend_przychodnia.svg') }}" alt="" loading="lazy" decoding="async" width="32" height="32"
                                             class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Przychodnia</p>
                                        <p class="fw-light mb-0">2 minuta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #ffee00; --color2: #d9cb00">
                                        <img src="{{ asset('images/legend_supermarket.svg') }}" alt="" loading="lazy" decoding="async" width="32" height="32" class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Supermarket</p>
                                        <p class="fw-light mb-0">1 minuta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #00c2ff; --color2: #00ffff">
                                        <img src="{{ asset('images/legend_przedszkole.svg') }}" alt="" loading="lazy" decoding="async" width="32" height="32"
                                             class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Przedszkole</p>
                                        <p class="fw-light mb-0">1 minuta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #dfdfdf; --color2: #818181">
                                        <img src="{{ asset('images/legend_autostrada.svg') }}" alt="" loading="lazy" decoding="async" width="32" height="32"
                                             class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Autostrada</p>
                                        <p class="fw-light mb-0">4 minuty</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #fbbde0; --color2: #d47cbc">
                                        <img src="{{ asset('images/legend_salon_kosmetyczny.svg') }}" alt="" loading="lazy" decoding="async" width="32"
                                             height="32" class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Salon kosmetyczny</p>
                                        <p class="fw-light mb-0">1 minuta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #5f9100; --color2: #2f4700">
                                        <img src="{{ asset('images/legend_szkola_podstawowa.svg') }}" alt="" loading="lazy" decoding="async" width="32"
                                             height="32" class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Szkoła podstawowa</p>
                                        <p class="fw-light mb-0">1 minuta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #ffe600; --color2: #ffbb33">
                                        <img src="{{ asset('images/legend_spozywczy.svg') }}" alt="" loading="lazy" decoding="async" width="32" height="32"
                                             class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Sklep spożywczy</p>
                                        <p class="fw-light mb-0">1 minuta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #a86604; --color2: #4b351b">
                                        <img src="{{ asset('images/legend_stacja.svg') }}" alt="" loading="lazy" decoding="async" width="32" height="32"
                                             class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Stacja benzynowa</p>
                                        <p class="fw-light mb-0">1 minuta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="
                        --color1: #eb0000;
                        --color2: #ffc400;
                        --rotation: 45deg;
                      ">
                                        <img src="{{ asset('images/legend_centrum.svg') }}" alt="" loading="lazy" decoding="async" width="32" height="32"
                                             class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">Centrum handlowe M1</p>
                                        <p class="fw-light mb-0">1 minuta</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex-sm-row gap-3 align-items-center">
                                    <div class="w-60 h-60 rounded-circle with-gradient d-flex justify-content-center align-items-center"
                                         data-aos="entry" style="--color1: #b2ff1d; --color2: #79a12d">
                                        <img src="{{ asset('images/legend_przychodnia_wet.svg') }}" alt="" loading="lazy" decoding="async" width="32"
                                             height="32" class="img-fluid object-fit-contain p-1" />
                                    </div>
                                    <div data-aos="fade" data-aos-delay="500">
                                        <p class="fw-semibold fs-6 mb-1">
                                            Przychodnia Weterynaryjna
                                        </p>
                                        <p class="fw-light mb-0">1 minuta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 text-center">
                        <h2 class="mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade">Poznaj nasze domy</span>
                            <span data-aos="fade" data-aos-delay="300">Zarezerwuj wizytę już dziś!</span>
                        </h2>
                    </div>
                    <div class="col-12 col-xl-10 offset-xl-1 pt-3 pt-lg-5">
                        <div class="d-flex bg-white align-items-center">
                            <div class="col-12 col-md-8 col-xl-9">
                                @include('front.contact.form', [ 'page_name' => 'Strona główna'])
                            </div>
                            <div class="d-none d-md-block col-md-4 col-xl-3 position-relative">
                                <div class="w-100 h-100">
                                    <img src="{{ asset('images/cta_bg.png') }}" alt="" width="239" height="429" class="w-100 object-fit-cover"
                                         loading="lazy" decoding="async" />
                                </div>
                                <div class="cta-person">
                                    <img src="{{ asset('images/cta_osoba.png') }}" width="349" height="553" alt="" loading="lazy" decoding="async"
                                         class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <style>
        .leaflet-marker-icon {
            border-radius: 50%;
        }
    </style>
    <script src="{{ asset('/js/leaflet.min.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/css/leaflet.min.css') }}" rel="stylesheet">
    <script type="text/javascript">
        const tileLayer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            'attribution': 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
        });

        @foreach($markers as $m)
        const icon{{ $m->group_id }} = L.icon({
            iconUrl: '{{ asset('images/mapicons/'.$m->group_id.'.png') }}',
            shadowUrl: '',
            iconSize: [40, 40],
            iconAnchor: [20, 32]
        });
        @endforeach

        const featureGroup = L.featureGroup([
        @foreach($markers as $m)
            L.marker([{{ $m->lat }}, {{ $m->lng }}], {icon: icon{{ $m->group_id }}}).bindPopup('{{ $m->name }}'),
        @endforeach
        ]);

        const mapDiv = document.getElementById("map");
        let map = new L.Map(mapDiv, {
            'center': [0, 0],
            'zoom': 0,
            'layers': [tileLayer, featureGroup]
        });

        map.fitBounds(featureGroup.getBounds(), {
            padding: [50, 50]
        });
        map.on('popupclose', function () {
            map.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        });

        function debounce(func) {
            let timer;
            return function (event) {
                if (timer) clearTimeout(timer);
                timer = setTimeout(func, 100, event);
            };
        }

        window.addEventListener("resize", debounce(function (e) {
            map.fitBounds(featureGroup.getBounds(), {
                padding: [50, 50]
            });
        }));
    </script>
@endpush