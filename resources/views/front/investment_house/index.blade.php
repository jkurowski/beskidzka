@extends('layouts.page', ['body_class' => 'completed-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main>
        <section class="breadcrumb-page pb-0 pt-20 pt-md-40">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb" style=" --bs-breadcrumb-font-size: 0.75rem;">
                        <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $property->name }}</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="py-3">
            <div class="container">
                <div class="d-flex justify-content-between">
                    @if($prev_house)
                    <a href="{{route('front.developro.house.index', $prev_house->id)}}" class="link-hover-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.182" height="18.182"
                             viewBox="0 0 18.182 18.182">
                            <g transform="translate(15.182 9.091) rotate(135)">
                                <path d="M0,0,8.614,8.614" transform="translate(0 0)" fill="none" stroke="currentColor"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                <path d="M8.614,0V8.614H0" transform="translate(0 0)" fill="none" stroke="currentColor"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                            </g>
                        </svg>
                        <span>
                            poprzedni
                        </span>
                    </a>
                    @endif

                    <a href="/beskidzka-park/#oferta"
                       class="link-hover-primary text-decoration-underline text-lowercase">Wróć do
                        oferty</a>

                    @if($next_house)
                    <a href="{{route('front.developro.house.index', $next_house->id)}}" class="link-hover-primary">
                        <span>następny</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.182" height="18.182"
                             viewBox="0 0 18.182 18.182">
                            <g transform="translate(3 9.091) rotate(-45)">
                                <path d="M0,0,8.614,8.614" transform="translate(0 0)" fill="none" stroke="currentColor"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                <path d="M8.614,0V8.614H0" transform="translate(0 0)" fill="none" stroke="currentColor"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                            </g>
                        </svg>
                    </a>
                    @endif
                </div>
            </div>
        </section>

        <section>
            <div class="container">

                <div class="row gy-30 ">
                    <div class="col-12 col-md-6 col-lg-4">
                        <article>
                            <div class="text-center text-md-start">
                                {!! roomStatusCardBadge($property->status) !!}

                                <h1 class="mb-4 mb-lg-40 mb-xl-60 h2">
                                    <span data-aos="fade">Dom</span>
                                    <span data-aos="fade" data-aos-delay="300"> {{ $property->number }}</span>
                                </h1>

                                <div class="text-pretty ">

                                    <ul class="fw-medium text-start col-8 offset-2 col-md-12 offset-md-0 d-flex flex-column gap-2"
                                        data-aos="fade">
                                        <li>
                                            Wielkość działki: {{ $property->garden_area }} m<sup>2</sup>
                                        </li>
                                        <li>
                                            Ilość pokoi: {{ $property->rooms }}
                                        </li>
                                        @if($property->window)
                                        <li>
                                            Wystawa okienna: {!! multiselect2name($property->window) !!}
                                        </li>
                                        @endif
                                    </ul>
                                </div>

                                <div class="d-flex gap-3 flex-wrap justify-content-around align-items-center mt-5">
                                    <div data-aos="fade-up">
                                        <a href="#zapytaj" class="btn btn-primary btn-min-width">
                                            ZAPYTAJ O DOM
                                        </a>
                                    </div>
                                    <div data-aos="fade-up">
                                        @if($property->file_pdf)
                                        <a class="fw-light link-hover-primary link-with-border-bottom d-inline-flex gap-2 align-items-center"
                                           href="{{ asset('investment/property/pdf/'.$property->file_pdf) }}" style="text-underline-offset: 8px;"
                                           download="card_thumbnail.png" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13.221" height="15.424"
                                                 viewBox="0 0 13.221 15.424" fill="currentColor">
                                                <path id="pdf_icon"
                                                      d="M15.206,5.474a2,2,0,0,1,.413.654,1.986,1.986,0,0,1,.172.757V16.8a.823.823,0,0,1-.826.826H3.4a.823.823,0,0,1-.826-.826V3.03A.823.823,0,0,1,3.4,2.2h7.712a1.987,1.987,0,0,1,.757.172,2,2,0,0,1,.654.413Zm-3.822-2.1V6.61h3.236a.94.94,0,0,0-.189-.353L11.737,3.563a.94.94,0,0,0-.353-.189ZM14.69,16.526V7.712H11.109a.823.823,0,0,1-.826-.826V3.305H3.672V16.526H14.69Zm-4.424-5.1a6.549,6.549,0,0,0,.723.482A8.541,8.541,0,0,1,12,11.844q1.265,0,1.523.422a.416.416,0,0,1,.017.448.025.025,0,0,1-.009.017l-.017.017v.009q-.052.327-.611.327a3.551,3.551,0,0,1-.99-.172,6.276,6.276,0,0,1-1.119-.456,15.5,15.5,0,0,0-3.374.714Q6.1,15.424,5.334,15.424a.5.5,0,0,1-.241-.06l-.207-.1-.052-.043a.356.356,0,0,1-.052-.31,1.869,1.869,0,0,1,.482-.788A4.16,4.16,0,0,1,6.4,13.29a.126.126,0,0,1,.2.052.05.05,0,0,1,.017.034q.448-.732.921-1.7a13.137,13.137,0,0,0,.9-2.255A6.958,6.958,0,0,1,8.17,8.052a3.347,3.347,0,0,1,.056-1.1q.095-.344.362-.344h.189a.363.363,0,0,1,.3.129.687.687,0,0,1,.077.585.187.187,0,0,1-.034.069.224.224,0,0,1,.009.069v.258a11.271,11.271,0,0,1-.121,1.653,4.355,4.355,0,0,0,1.257,2.049ZM5.308,14.959A3.8,3.8,0,0,0,6.487,13.6a4.907,4.907,0,0,0-.753.723A2.861,2.861,0,0,0,5.308,14.959ZM8.733,7.041a2.559,2.559,0,0,0-.017,1.136q.009-.06.06-.379,0-.026.06-.37a.194.194,0,0,1,.034-.069.025.025,0,0,1-.009-.017.017.017,0,0,0,0-.013.017.017,0,0,1,0-.013.5.5,0,0,0-.112-.31.025.025,0,0,1-.009.017v.017ZM7.666,12.73a12.625,12.625,0,0,1,2.444-.7A1.3,1.3,0,0,1,10,11.951a1.542,1.542,0,0,1-.138-.116A4.559,4.559,0,0,1,8.768,10.32a11.5,11.5,0,0,1-.714,1.7q-.258.482-.387.714Zm5.56-.138a2.06,2.06,0,0,0-1.205-.207,3.256,3.256,0,0,0,1.067.241.835.835,0,0,0,.155-.009q0-.009-.017-.026Z"
                                                      transform="translate(-2.571 -2.204)"></path>
                                            </svg>

                                            <span>
                                                Pobierz kartę domu
                                            </span>
                                        </a>
                                        @endif
                                    </div>

                                </div>
                        </article>
                    </div>
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="d-flex gap-3">
                            @if($property->file)
                                <a href="{{ asset('/investment/property/'.$property->file) }}" class="glightbox">
                                    <picture>
                                        <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$property->file_webp) }}">
                                        <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$property->file) }}">
                                        <img src="{{ asset('/investment/property/thumbs/'.$property->file) }}" alt="{{$property->name}}" loading="eager" class="img-thumb">
                                    </picture>
                                </a>
                            @endif

                            @if($property->file_2)
                                <a href="{{ asset('/investment/property/'.$property->file_2) }}" class="glightbox">
                                    <picture>
                                        <source type="image/webp" srcset="{{ asset('/investment/property/thumbs/webp/'.$property->file_2_webp) }}">
                                        <source type="image/jpeg" srcset="{{ asset('/investment/property/thumbs/'.$property->file_2) }}">
                                        <img src="{{ asset('/investment/property/thumbs/'.$property->file_2) }}" alt="{{$property->name}}" loading="eager" class="img-thumb">
                                    </picture>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="zapytaj">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 text-center">
                        <h2 class="mb-4 mb-lg-40">
                            <span data-aos="fade" class="aos-init aos-animate">Zapytaj</span>
                            <span data-aos="fade" data-aos-delay="300" class="aos-init aos-animate">o dom</span>
                        </h2>
                    </div>
                    <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                        <div class="d-flex bg-white align-items-center">
                            <div class="col-12 col-lg-8 col-xl-9">
                                @include('front.contact.form', [ 'page_name' => $investment->name .' - '. $property->name .' - '. $property->number])
                            </div>
                            <div class="d-none d-lg-block col-lg-4 col-xl-3 position-relative">
                                <div class="w-100 h-100">
                                    <img src="{{ asset('images/cta_bg.png') }}" alt="" width="239" height="429" class="w-100 object-fit-cover" loading="lazy" decoding="async" />
                                </div>
                                <div class="cta-person">
                                    <img src="{{ asset('images/cta_osoba.png') }}" width="349" height="553" alt="" loading="lazy" decoding="async" class="img-fluid" />
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
    <script defer src="{{ asset('/js/glightbox.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/glightbox.min.css') }}" />
    <script defer>
        document.addEventListener('DOMContentLoaded', () => {
            const glightbox = new GLightbox()
        })
    </script>
@endpush