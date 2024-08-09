@extends('layouts.page', ['body_class' => 'completed-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@if($isAdmin)
    @include('layouts.partials.inline')
@endif
@section('content')
    <main>
        <section class="breadcrumb-page pb-0 pt-20 pt-md-40">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb" style=" --bs-breadcrumb-font-size: 0.75rem;">
                        <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Beskidzka Park</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section id="o-inwestycji">
            <div class="container">
                <div class="row gy-30 text-center text-md-start inline inline-tc">
                    <div class="col-12 col-md-6 col-xl-5">
                        <h1 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="13">{!! getInline($arrayInvestment, 13, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="13">{!! getInline($arrayInvestment, 13, 'modaleditor') !!}</span>
                        </h1>
                        <div class="text-pretty" data-modaleditortext="13">
                            {!! getInline($arrayInvestment, 13, 'modaleditortext') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2 text-md-end">
                        <img src="{{ getInline($arrayInvestment, 13, 'file') }}" alt="{{ getInline($arrayInvestment, 13, 'file_alt') }}" class="img-fluid" width="555" height="480" loading="eager" data-img="13">
                    </div>
                    @auth
                        <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="13" data-hideinput="modallink,modallinkbutton" data-method="update" data-imgwidth="672" data-imgheight="503"></button></div>
                    @endauth
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 gy-sm-50 gy-md-80">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="d-flex flex-column text-center flex-md-row text-md-start gap-md-30 gap-3 align-items-center">
                            <div data-aos="entry" data-aos-delay="200"
                                 class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                                 style="--color1:#A3D445;--color2:#95B852;">
                                <img src="{{ asset('images/beskidzka_niskie_koszty.svg') }}" loading="lazy" width="45" height="45"
                                     class="img-fluid p-2 p-lg-1" decoding="async" alt="" />
                            </div>
                            <div>
                                <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                    Niskie koszty utrzymania
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="d-flex flex-column text-center flex-md-row text-md-start gap-md-30 gap-3 align-items-center">
                            <div data-aos="entry" data-aos-delay="200"
                                 class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                                 style="--color1:#A3D445;--color2:#95B852;">
                                <img src="{{ asset('images/beskidzka_metraz.svg') }}" loading="lazy" width="45" height="45" class="img-fluid p-2 p-lg-1"
                                     decoding="async" alt="" />
                            </div>
                            <div>
                                <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                    Metraż 125 m²,<br>
                                    5 Pokoi
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="d-flex flex-column text-center flex-md-row text-md-start gap-md-30 gap-3 align-items-center">
                            <div data-aos="entry" data-aos-delay="200"
                                 class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                                 style="--color1:#A3D445;--color2:#95B852;">
                                <img src="{{ asset('images/beskidzka_parking.svg') }}" loading="lazy" width="45" height="45" class="img-fluid p-2 p-lg-1"
                                     decoding="async" alt="" />
                            </div>
                            <div>
                                <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                    20 domów jednorodzinnych
                                    na zamkniętym osiedlu
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="d-flex flex-column text-center flex-md-row text-md-start gap-md-30 gap-3 align-items-center">
                            <div data-aos="entry" data-aos-delay="200"
                                 class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                                 style="--color1:#A3D445;--color2:#95B852;">
                                <img src="{{ asset('images/beskidzka_ogrodki.svg') }}" loading="lazy" width="45" height="45" class="img-fluid p-2 p-lg-1"
                                     decoding="async" alt="" />
                            </div>
                            <div>
                                <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                    Własne ogródki
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="d-flex flex-column text-center flex-md-row text-md-start gap-md-30 gap-3 align-items-center">
                            <div data-aos="entry" data-aos-delay="200"
                                 class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                                 style="--color1:#A3D445;--color2:#95B852;">
                                <img src="{{ asset('images/beskidzka_garaż.svg') }}" loading="lazy" width="45" height="45" class="img-fluid p-2 p-lg-1"
                                     decoding="async" alt="" />
                            </div>
                            <div>
                                <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                    Garaż w bryle
                                    budynku
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="d-flex flex-column text-center flex-md-row text-md-start gap-md-30 gap-3 align-items-center">
                            <div data-aos="entry" data-aos-delay="200"
                                 class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                                 style="--color1:#A3D445;--color2:#95B852;">
                                <img src="{{ asset('images/beskidzka_lokalizacja.svg') }}" loading="lazy" width="45" height="45"
                                     class="img-fluid p-2 p-lg-1" decoding="async" alt="" />
                            </div>
                            <div>
                                <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                    Lokalizacja w otulinie
                                    Wzniesień Łódzkich
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
                    <div class="col-12 col-md-6 col-xl-5 order-last order-md-first text-md-end">
                         <img src="{{ getInline($arrayInvestment, 14, 'file') }}" alt="{{ getInline($arrayInvestment, 14, 'file_alt') }}" class="img-fluid" width="555" height="480" loading="lazy" data-img="14">
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2">
                        <h2 class="mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="14">{!! getInline($arrayInvestment, 14, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="14">{!! getInline($arrayInvestment, 14, 'modaleditor') !!}</span>
                        </h2>
                        <div class="text-pretty" data-modaleditortext="14">
                            {!! getInline($arrayInvestment, 14, 'modaleditortext') !!}
                        </div>
                    </div>
                    @auth
                        <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="14" data-hideinput="modallink,modallinkbutton" data-method="update" data-imgwidth="672" data-imgheight="503"></button></div>
                    @endauth
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start inline inline-tc">
                    <div class="col-12 col-md-6 col-xl-5">
                        <h2 class="mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="15">{!! getInline($arrayInvestment, 15, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="15">{!! getInline($arrayInvestment, 15, 'modaleditor') !!}</span>
                        </h2>
                        <div class="text-pretty" data-modaleditortext="15">
                            {!! getInline($arrayInvestment, 15, 'modaleditortext') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2 text-md-end">
                        <img src="{{ getInline($arrayInvestment, 15, 'file') }}" alt="{{ getInline($arrayInvestment, 15, 'file_alt') }}" class="img-fluid" width="555" height="480" loading="eager" data-img="15">
                    </div>
                    @auth
                        <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="15" data-hideinput="modallink,modallinkbutton" data-method="update" data-imgwidth="672" data-imgheight="503"></button></div>
                    @endauth
                </div>
            </div>
        </section>

        <section id="lokalizacja">
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
                    <div class="col-12">
                        <div
                                class="row justify-content-center gy-30 gy-md-50 row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 text-center text-sm-start">
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
                                        <img src="{{ asset('images/legend_supermarket.svg') }}" alt="" loading="lazy" decoding="async" width="32" height="32"
                                             class="img-fluid object-fit-contain p-1" />
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

        <section id="oferta">
            <div class="container">
                <div class="row gy-20 text-center">
                    <div class="col-12 col-md-10 offset-md-1">
                        <h2 class="mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade">Dostępne Domy</span>
                            <span data-aos="fade" data-aos-delay="300">Wybierz Swoje Miejsce</span>
                        </h2>
                        <div>
                            <img src="{{ asset('/investment/plan/'.$investment->plan->file) }}" alt="{{$investment->name}}" id="invesmentplan" usemap="#invesmentplan" class="img-fluid" loading="eager">
                            <map name="invesmentplan">
                                @if($investment->houses)
                                    @foreach($investment->houses as $house)
                                        <area
                                                shape="poly"
                                                href="{{route('front.developro.house.index', ['property' => $house])}}"
                                                title="{{$house->name}}"
                                                alt="{{$house->slug}}"
                                                data-item="{{$house->id}}"
                                                data-roomnumber="{{$house->number}}"
                                                data-roomtype="{{$house->typ}}"
                                                data-roomstatus="{{$house->status}}"
                                                coords="@if($house->html) {{cords($house->html)}} @endif">
                                    @endforeach
                                @endif
                            </map>
                        </div>
                    </div>
                    <div class="col-12 col-md-10 offset-md-1 ">
                        <div class="text-center text-md-end">
                            <button data-layout-switcher="grid" class="btn text-black text-opacity-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="30" viewBox="0 0 32 30">
                                    <g id="grid" transform="translate(-1326 -2886)">
                                        <g id="Rectangle_132" data-name="Rectangle 132" transform="translate(1326 2886)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_136" data-name="Rectangle 136" transform="translate(1326 2897)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_139" data-name="Rectangle 139" transform="translate(1326 2908)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_134" data-name="Rectangle 134" transform="translate(1338 2886)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_137" data-name="Rectangle 137" transform="translate(1338 2897)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_140" data-name="Rectangle 140" transform="translate(1338 2908)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_135" data-name="Rectangle 135" transform="translate(1350 2886)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_138" data-name="Rectangle 138" transform="translate(1350 2897)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_141" data-name="Rectangle 141" transform="translate(1350 2908)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5" fill="none" />
                                        </g>
                                    </g>
                                </svg>

                            </button>
                            <button data-layout-switcher="list" class="btn text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="30" viewBox="0 0 32 30">
                                    <g id="list" transform="translate(-1381 -2886)" opacity="0.5">
                                        <g id="Rectangle_143" data-name="Rectangle 143" transform="translate(1381 2886)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="32" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="31" height="7" rx="1.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_144" data-name="Rectangle 144" transform="translate(1381 2897)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="32" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="31" height="7" rx="1.5" fill="none" />
                                        </g>
                                        <g id="Rectangle_145" data-name="Rectangle 145" transform="translate(1381 2908)" fill="none"
                                           stroke="currentColor" stroke-width="1">
                                            <rect width="32" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="31" height="7" rx="1.5" fill="none" />
                                        </g>
                                    </g>
                                </svg>

                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-10 offset-md-1">
                        <div data-layout="grid" class="gap-20">
                            @if($investment->houses)
                                @foreach($investment->houses as $house)
                                    <article class="d-flex  overflow-hidden rounded-1 box-shadow-base " data-aos="fade-up">
                                        <div class="d-flex flex-wrap with-divider-md-vertical bg-white  align-items-center w-100 justify-content-between">
                                            <section class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1">
                                                <p class="fw-light mb-0">Numer domu</p>
                                                <p class="fw-bold text-primary fs-4 mb-0">{{$house->number}}</p>
                                            </section>
                                            <section class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1 area">
                                                <p class="fw-light mb-0">Powierzchnia</p>
                                                <p class="fw-bold text-primary fs-4 mb-0">{{$house->area}}m<sup>2</sup></p>
                                            </section>
                                            <section class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1 unset-pseudo-xs">
                                                <div>
                                                    @if($house->file)
                                                        <a href="{{route('front.developro.house.index', ['property' => $house])}}">
                                                            <picture>
                                                                <source type="image/webp" srcset="/investment/property/list/webp/{{$house->file_webp}}">
                                                                <source type="image/jpeg" srcset="/investment/property/list/{{$house->file}}">
                                                                <img src="/investment/property/list/{{$house->file}}" alt="Plan {{$house->name}}" loading="lazy">
                                                            </picture>
                                                        </a>
                                                    @endif
                                                </div>
                                            </section>
                                            <section class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1">
                                                <p>
                                                    <a class="fw-light link-hover-primary pb-1 link-with-border-bottom d-inline-flex gap-2 align-items-center"
                                                       href="{{ asset('/investment/property/pdf/'.$house->file_pdf) }}" target="_blank" style="text-underline-offset: 8px;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13.221" height="15.424" viewBox="0 0 13.221 15.424" fill="currentColor"> <path id="pdf_icon" d="M15.206,5.474a2,2,0,0,1,.413.654,1.986,1.986,0,0,1,.172.757V16.8a.823.823,0,0,1-.826.826H3.4a.823.823,0,0,1-.826-.826V3.03A.823.823,0,0,1,3.4,2.2h7.712a1.987,1.987,0,0,1,.757.172,2,2,0,0,1,.654.413Zm-3.822-2.1V6.61h3.236a.94.94,0,0,0-.189-.353L11.737,3.563a.94.94,0,0,0-.353-.189ZM14.69,16.526V7.712H11.109a.823.823,0,0,1-.826-.826V3.305H3.672V16.526H14.69Zm-4.424-5.1a6.549,6.549,0,0,0,.723.482A8.541,8.541,0,0,1,12,11.844q1.265,0,1.523.422a.416.416,0,0,1,.017.448.025.025,0,0,1-.009.017l-.017.017v.009q-.052.327-.611.327a3.551,3.551,0,0,1-.99-.172,6.276,6.276,0,0,1-1.119-.456,15.5,15.5,0,0,0-3.374.714Q6.1,15.424,5.334,15.424a.5.5,0,0,1-.241-.06l-.207-.1-.052-.043a.356.356,0,0,1-.052-.31,1.869,1.869,0,0,1,.482-.788A4.16,4.16,0,0,1,6.4,13.29a.126.126,0,0,1,.2.052.05.05,0,0,1,.017.034q.448-.732.921-1.7a13.137,13.137,0,0,0,.9-2.255A6.958,6.958,0,0,1,8.17,8.052a3.347,3.347,0,0,1,.056-1.1q.095-.344.362-.344h.189a.363.363,0,0,1,.3.129.687.687,0,0,1,.077.585.187.187,0,0,1-.034.069.224.224,0,0,1,.009.069v.258a11.271,11.271,0,0,1-.121,1.653,4.355,4.355,0,0,0,1.257,2.049ZM5.308,14.959A3.8,3.8,0,0,0,6.487,13.6a4.907,4.907,0,0,0-.753.723A2.861,2.861,0,0,0,5.308,14.959ZM8.733,7.041a2.559,2.559,0,0,0-.017,1.136q.009-.06.06-.379,0-.026.06-.37a.194.194,0,0,1,.034-.069.025.025,0,0,1-.009-.017.017.017,0,0,0,0-.013.017.017,0,0,1,0-.013.5.5,0,0,0-.112-.31.025.025,0,0,1-.009.017v.017ZM7.666,12.73a12.625,12.625,0,0,1,2.444-.7A1.3,1.3,0,0,1,10,11.951a1.542,1.542,0,0,1-.138-.116A4.559,4.559,0,0,1,8.768,10.32a11.5,11.5,0,0,1-.714,1.7q-.258.482-.387.714Zm5.56-.138a2.06,2.06,0,0,0-1.205-.207,3.256,3.256,0,0,0,1.067.241.835.835,0,0,0,.155-.009q0-.009-.017-.026Z" transform="translate(-2.571 -2.204)" /></svg>

                                                        <span>Pobierz kartę domu</span>
                                                    </a>
                                                </p>
                                            </section>
                                        </div>
                                        {!! roomStatusBadge($house->status) !!}
                                    </article>
                                @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start">
                    <div class="col-12">
                        <h2 class="mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade">O inwestycji</span>
                            <span data-aos="fade" data-aos-delay="300">Beskidzka park</span>
                        </h2>
                    </div>
                </div>

                <div class="row gy-5 row-cols-1  row-cols-md-5 align-items-start  with-horizontal-line">
                    <div class="d-flex text-center justify-content-center align-items-center flex-column gap-4 col">
                        <div data-aos="entry" data-aos-delay="200"
                             class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                             style="--color1:#A3D445;--color2:#95B852;">
                            <img src="{{ asset('images/beskidzka_rozpoczecie_budowy.svg') }}" loading="lazy" width="45" height="45"
                                 class="img-fluid p-2 p-lg-1" decoding="async" alt="" />
                        </div>
                        <div>
                            <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                Rozpoczęcie budowy
                            </p>
                        </div>
                    </div>

                    <div class="d-flex text-center justify-content-center align-items-center flex-column gap-4 col">
                        <div data-aos="entry" data-aos-delay="200"
                             class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                             style="--color1:#A3D445;--color2:#95B852;">
                            <img src="{{ asset('images/beskidzka_etap_1.svg') }}" loading="lazy" width="45" height="45" class="img-fluid p-2 p-lg-1"
                                 decoding="async" alt="" />
                        </div>
                        <div>
                            <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                Etap I
                            </p>
                            <p class="text-pretty  fw-light" data-aos="fade-up">
                                Przygotowanie terenu
                                pod budowę osiedla, wykonanie fundamentów, ogrodzenie inwestycji.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex text-center justify-content-center align-items-center flex-column gap-4 col">
                        <div data-aos="entry" data-aos-delay="200"
                             class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                             style="--color1:#A3D445;--color2:#95B852;">
                            <img src="{{ asset('images/beskidzka_etap_2.svg') }}" loading="lazy" width="45" height="45" class="img-fluid p-2 p-lg-1"
                                 decoding="async" alt="" />
                        </div>
                        <div>
                            <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                Etap II
                            </p>
                            <p class="text-pretty  fw-light" data-aos="fade-up">
                                Zakończenie stanu
                                surowego zamkniętego.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex text-center justify-content-center align-items-center flex-column gap-4 col">
                        <div data-aos="entry" data-aos-delay="200"
                             class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                             style="--color1:#A3D445;--color2:#95B852;">
                            <img src="{{ asset('images/beskidzka_etap_3.svg') }}" loading="lazy" width="45" height="45" class="img-fluid p-2 p-lg-1"
                                 decoding="async" alt="" />
                        </div>
                        <div>
                            <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                Etap III
                            </p>
                            <p class="text-pretty  fw-light" data-aos="fade-up">
                                Zakończenie stanu
                                deweloperskiego.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex text-center justify-content-center align-items-center flex-column gap-4 col">
                        <div data-aos="entry" data-aos-delay="200"
                             class="rounded-circle position-relative z-2 with-gradient w-85 h-85 d-flex align-items-center justify-content-center text-white fs-45 fw-bold"
                             style="--color1:#A3D445;--color2:#95B852;">
                            <img src="{{ asset('images/beskidzka_oddanie.svg') }}" loading="lazy" width="45" height="45" class="img-fluid p-2 p-lg-1"
                                 decoding="async" alt="" />
                        </div>
                        <div>
                            <p class="text-balance fs-5 fw-semibold" data-aos="fade-up">
                                Oddanie
                                do użytkowania
                            </p>
                            <p class="text-pretty  fw-light" data-aos="fade-up">
                                II połowa 2025
                            </p>
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
                            <div
                                    data-slick='{"slidesToShow": 2.1,  "prevArrow": ".prev-arrow", "nextArrow": ".next-arrow", "responsive": [{"breakpoint": 768, "settings": {"slidesToShow": 1}}]}'>
                                <div class="px-3 aspect-ratio-slide">
                                    <img src="{{ asset('images/08_SALON 1_thumb.webp') }}" alt="" width="438" height="392" loading="lazy"
                                         class="w-100 h-100 object-fit-cover rounded-2" />
                                </div>
                                <div class="px-3 aspect-ratio-slide">
                                    <img src="{{ asset('images/09_KUCHNIA 1_thumb.webp') }}" alt="" width="438" height="392" loading="lazy"
                                         class="w-100 h-100 object-fit-cover rounded-2" />
                                </div>
                                <div class="px-3 aspect-ratio-slide">
                                    <img src="{{ asset('images/10_KUCHNIA 2_thumb.webp') }}" alt="" width="438" height="392" loading="lazy"
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

        <section id="wizualizacje">
            <div class="container">
                <div class="row gy-20 text-center">
                    <div class="col-12 col-md-10 offset-md-1">
                        <h2 class="mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade">WIZUALIZACJE</span>
                            <span data-aos="fade" data-aos-delay="300"></span>
                        </h2>
                    </div>
                </div>
                <div class="row justify-content-center gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                    @foreach($gallery->photos as $p)
                        <div class="col" data-aos="fade">
                            <div class="aspect-ratio-slide">
                                <a class="glightbox" data-gallery="wiz" href="{{ asset('uploads/gallery/images/'.$p->file) }}">
                                    <img src="{{ asset('uploads/gallery/images/thumbs/webp/'.$p->file_webp) }}" alt="" loading="lazy" width="321" height="288" class="w-100 h-100 object-fit-cover  rounded-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="investContact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-3 pt-lg-5">
                        <div class="d-flex bg-white align-items-center">
                            <div class="col-12 col-md-8 text-center text-md-start">
                                <div class="p-30">
                                    <h2 class="mb-4">
                                        <span data-aos="fade">Potrzebujesz </span>
                                        <span data-aos="fade" data-aos-delay="300">Dowiedzieć się więcej?</span>
                                    </h2>
                                    <div class="text-pretty">
                                        <p class="fw-medium" data-aos="fade">
                                            Skontaktuj się z nami!
                                        </p>
                                        <p class="pt-30" data-aos="fade" data-aos-delay="600">
                                            <a href="/kontakt/" class="btn btn-primary btn-min-width">
                                                Napisz do nas
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-md-block col-md-4 position-relative">
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
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
    <script defer src="{{ asset('/js/glightbox.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/glightbox.min.css') }}" />
    <script defer>
        document.addEventListener('DOMContentLoaded', () => {
            const glightbox = new GLightbox()
        })
    </script>
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