@extends('layouts.page', ['body_class' => 'about-page'])

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
                        <li class="breadcrumb-item active" aria-current="page">Promocja</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start">
                    <div class="col-12 col-md-6 col-xl-5 inline inline-tc">
                        <h1 class="h2">
                            <span data-aos="fade" data-modaltytul="12">{!! getInline($array, 12, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" class="d-none hidden">Expander</span>
                        </h1>
                        <div class="col-4 mb-4 mb-lg-40 mb-xl-60 mx-auto mx-md-0">
                            <img src="{{ asset('images/expander_logo.png')}}" alt="" width="478" height="124" class="img-fluid" loading="eager">
                        </div>
                        <div class="text-pretty" data-modaleditortext="12">
                            {!! getInline($array, 12, 'modaleditortext') !!}
                        </div>
                        @if($isAdmin)
                            <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="12" data-hideinput="modaleditor,modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="556" data-imgheight="480"></button></div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-0">
            <div class="container">
                <div class="row gy-30 text-center text-md-start">
                    <div class="col-12 text-center">
                        <h2 class="h2">
                            <span data-aos="fade">Domy w promocji</span>
                            <span data-aos="fade" data-aos-delay="300">Beskidzka Park</span>
                        </h2>
                    </div>
                </div>
            </div>
        </section>


        <section id="oferta">
            <div class="container">
                <div class="row gy-20 text-center">
                    <div class="col-12 col-md-10 offset-md-1 d-none">
                        <div class="text-center text-md-end">
                            <button data-layout-switcher="grid" class="btn text-black text-opacity-25">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="30" viewBox="0 0 32 30">
                                    <g id="grid" transform="translate(-1326 -2886)">
                                        <g id="Rectangle_132" data-name="Rectangle 132" transform="translate(1326 2886)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                        <g id="Rectangle_136" data-name="Rectangle 136" transform="translate(1326 2897)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                        <g id="Rectangle_139" data-name="Rectangle 139" transform="translate(1326 2908)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                        <g id="Rectangle_134" data-name="Rectangle 134" transform="translate(1338 2886)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                        <g id="Rectangle_137" data-name="Rectangle 137" transform="translate(1338 2897)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                        <g id="Rectangle_140" data-name="Rectangle 140" transform="translate(1338 2908)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                        <g id="Rectangle_135" data-name="Rectangle 135" transform="translate(1350 2886)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                        <g id="Rectangle_138" data-name="Rectangle 138" transform="translate(1350 2897)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                        <g id="Rectangle_141" data-name="Rectangle 141" transform="translate(1350 2908)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="8" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="7" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                    </g>
                                </svg>

                            </button>
                            <button data-layout-switcher="list" class="btn text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="30"
                                    viewBox="0 0 32 30">
                                    <g id="list" transform="translate(-1381 -2886)" opacity="0.5">
                                        <g id="Rectangle_143" data-name="Rectangle 143" transform="translate(1381 2886)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="32" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="31" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                        <g id="Rectangle_144" data-name="Rectangle 144" transform="translate(1381 2897)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="32" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="31" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                        <g id="Rectangle_145" data-name="Rectangle 145" transform="translate(1381 2908)"
                                            fill="none" stroke="currentColor" stroke-width="1">
                                            <rect width="32" height="8" rx="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="31" height="7" rx="1.5"
                                                fill="none" />
                                        </g>
                                    </g>
                                </svg>

                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-10 offset-md-1">
                        <div data-layout="list" class="gap-20">
                            @if ($promotion_items)
                                @foreach ($promotion_items as $house)
                                    <article class="d-flex  overflow-hidden rounded-1 box-shadow-base "
                                        data-aos="fade-up">
                                        <div
                                            class="d-flex flex-wrap with-divider-md-vertical bg-white  align-items-center w-100 justify-content-between">
                                            <section
                                                class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1">
                                                <p class="fw-light mb-0">Numer domu</p>
                                                <p class="fw-bold text-primary fs-4 mb-0">{{ $house->number }}</p>
                                            </section>
                                            <section
                                                class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1 area">
                                                <p class="fw-light mb-0">Powierzchnia</p>
                                                <p class="fw-bold text-primary fs-4 mb-0">{{ $house->area }}m<sup>2</sup>
                                                </p>
                                            </section>
                                            <section
                                                class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1 unset-pseudo-xs">
                                                <div>
                                                    <p class="fw-light mb-0">Cena</p>
                                                    <p>
                                                        <span
                                                            class="opacity-50 d-block text-body-emphasis text-decoration-line-through small">
                                                            850 000 zł
                                                        </span>
                                                        <span class="d-block">
                                                            tylko w przedsprzedaży <span class="text-nowrap">799 000 zł</span>
                                                        </span>
                                                        <span class="d-block fw-semibold">
                                                            rabat AŻ 51 000 zł
                                                        </span>
                                                        <span class="d-block small">
                                                            oferta ważna do 31.07.2024r.
                                                        </span>
                                                    </p>
                                                </div>
                                            </section>

                                        </div>
                                        {!! roomStatusBadge($house->status) !!}
                                        @if ($house->file)
                                            <a class="stretched-link"
                                                href="{{ route('front.developro.investment.index') }}/#oferta">

                                            </a>
                                        @endif
                                    </article>
                                @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- @if (!empty($promotion_items))
            <div class="col-12 col-md-10 offset-md-1">
                <div data-layout="grid" class="gap-20">
                    @foreach ($promotion_items as $house)
                        <article class="d-flex  overflow-hidden rounded-1 box-shadow-base " data-aos="fade-up">
                            <div
                                class="d-flex flex-wrap with-divider-md-vertical bg-white  align-items-center w-100 justify-content-between">
                                <section
                                    class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1">
                                    <p class="fw-light mb-0">Numer domu</p>
                                    <p class="fw-bold text-primary fs-4 mb-0">{{ $house->number }}</p>
                                </section>
                                <section
                                    class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1 area">
                                    <p class="fw-light mb-0">Powierzchnia</p>
                                    <p class="fw-bold text-primary fs-4 mb-0">{{ $house->area }}m<sup>2</sup></p>
                                </section>
                                <section
                                    class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1 unset-pseudo-xs">
                                    <div>
                                        @if ($house->file)
                                            <a href="{{ route('front.developro.house.index', ['property' => $house]) }}">
                                                <picture>
                                                    <source type="image/webp"
                                                        srcset="/investment/property/list/webp/{{ $house->file_webp }}">
                                                    <source type="image/jpeg"
                                                        srcset="/investment/property/list/{{ $house->file }}">
                                                    <img src="/investment/property/list/{{ $house->file }}"
                                                        alt="Plan {{ $house->name }}" loading="lazy">
                                                </picture>
                                            </a>
                                        @endif
                                    </div>
                                </section>
                                <section
                                    class="p-3 d-flex justify-content-between align-items-center flex-column flex-grow-1">
                                    <p>
                                        <a class="fw-light link-hover-primary pb-1 link-with-border-bottom d-inline-flex gap-2 align-items-center"
                                            href="{{ asset('/investment/property/pdf/' . $house->file_pdf) }}" target="_blank"
                                            style="text-underline-offset: 8px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13.221" height="15.424"
                                                viewBox="0 0 13.221 15.424" fill="currentColor">
                                                <path id="pdf_icon"
                                                    d="M15.206,5.474a2,2,0,0,1,.413.654,1.986,1.986,0,0,1,.172.757V16.8a.823.823,0,0,1-.826.826H3.4a.823.823,0,0,1-.826-.826V3.03A.823.823,0,0,1,3.4,2.2h7.712a1.987,1.987,0,0,1,.757.172,2,2,0,0,1,.654.413Zm-3.822-2.1V6.61h3.236a.94.94,0,0,0-.189-.353L11.737,3.563a.94.94,0,0,0-.353-.189ZM14.69,16.526V7.712H11.109a.823.823,0,0,1-.826-.826V3.305H3.672V16.526H14.69Zm-4.424-5.1a6.549,6.549,0,0,0,.723.482A8.541,8.541,0,0,1,12,11.844q1.265,0,1.523.422a.416.416,0,0,1,.017.448.025.025,0,0,1-.009.017l-.017.017v.009q-.052.327-.611.327a3.551,3.551,0,0,1-.99-.172,6.276,6.276,0,0,1-1.119-.456,15.5,15.5,0,0,0-3.374.714Q6.1,15.424,5.334,15.424a.5.5,0,0,1-.241-.06l-.207-.1-.052-.043a.356.356,0,0,1-.052-.31,1.869,1.869,0,0,1,.482-.788A4.16,4.16,0,0,1,6.4,13.29a.126.126,0,0,1,.2.052.05.05,0,0,1,.017.034q.448-.732.921-1.7a13.137,13.137,0,0,0,.9-2.255A6.958,6.958,0,0,1,8.17,8.052a3.347,3.347,0,0,1,.056-1.1q.095-.344.362-.344h.189a.363.363,0,0,1,.3.129.687.687,0,0,1,.077.585.187.187,0,0,1-.034.069.224.224,0,0,1,.009.069v.258a11.271,11.271,0,0,1-.121,1.653,4.355,4.355,0,0,0,1.257,2.049ZM5.308,14.959A3.8,3.8,0,0,0,6.487,13.6a4.907,4.907,0,0,0-.753.723A2.861,2.861,0,0,0,5.308,14.959ZM8.733,7.041a2.559,2.559,0,0,0-.017,1.136q.009-.06.06-.379,0-.026.06-.37a.194.194,0,0,1,.034-.069.025.025,0,0,1-.009-.017.017.017,0,0,0,0-.013.017.017,0,0,1,0-.013.5.5,0,0,0-.112-.31.025.025,0,0,1-.009.017v.017ZM7.666,12.73a12.625,12.625,0,0,1,2.444-.7A1.3,1.3,0,0,1,10,11.951a1.542,1.542,0,0,1-.138-.116A4.559,4.559,0,0,1,8.768,10.32a11.5,11.5,0,0,1-.714,1.7q-.258.482-.387.714Zm5.56-.138a2.06,2.06,0,0,0-1.205-.207,3.256,3.256,0,0,0,1.067.241.835.835,0,0,0,.155-.009q0-.009-.017-.026Z"
                                                    transform="translate(-2.571 -2.204)" />
                                            </svg>

                                            <span>Pobierz kartę domu</span>
                                        </a>
                                    </p>
                                </section>
                            </div>
                            {!! roomStatusBadge($house->status) !!}
                        </article>
                    @endforeach
                </div>
            </div>
        @endif --}}


    </main>
@endsection
