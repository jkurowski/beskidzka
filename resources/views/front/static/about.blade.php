@extends('layouts.page', ['body_class' => 'about-page'])

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
                        <li class="breadcrumb-item active" aria-current="page">O deweloperze</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start align-items-center">
                    <div class="col-12 col-md-6 col-xl-5">

                        <h1 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade">o deweloperze</span>
                            <span data-aos="fade" data-aos-delay="300">Heritage Invest Park</span>
                        </h1>
                        <div class="text-pretty">
                            <p class="fw-medium" data-aos="fade">
                                Heritage Invest Park, jest dynamicznie rozwijającą się marką deweloperską z Łodzi i
                                częścią grupy spółek budowlanych o ugruntowanej pozycji rynkowej. Wraz z firmą
                                <strong>TRIMIF</strong>,
                                wypełniającą swoją misję w zgodzie z przesłaniem „Partnerstwo w budowaniu wizji
                                klientów”, kreuje nowoczesny wymiar rynku deweloperskiego, w którym luksus staje się
                                standardem, nie przywilejem.
                            </p>
                            <p class="fw-light" data-aos="fade">
                                Specjalizujemy się w tworzeniu wysokiej jakości, mieszkań, bliźniaków i domów, które są
                                będą dostępne dla szerszej grupy odbiorców. Nasze projekty, takie jak flagowa inwestycja
                                <strong>Beskidzka Park</strong>, łączą nowoczesność z ekologicznymi rozwiązaniami,
                                zapewniając komfortowe
                                przestrzenie życiowe w pełnej harmonii z naturą.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2 text-md-end">
                        <img class="img-fluid" src="{{ asset('images/heritage_logo.webp') }}" width="353" height="100" alt="" loading="eager">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light">
            <div class="container">
                <div class="row gy-30 text-center ">
                    <div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                        <h2 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade">Nasza Misja</span>
                            <span data-aos="fade" data-aos-delay="300">Heritage Invest Park</span>
                        </h2>
                        <div class="text-pretty">
                            <p class="fw-medium" data-aos="fade">
                                Dążymy do tego, by wysoka jakość stała się standardem dostępnym dla każdego,
                                normalizując dostęp do ekskluzywnego stylu życia. Każdy projekt realizujemy z
                                niezachwianą dbałością o detale, formę i odpowiedzialność ekologiczną, oferując naszym
                                klientom przemyślane, funkcjonalne i piękne przestrzenie.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start">

                    <div class="col-12 col-md-6 col-xl-5  text-md-end">
                        <img src="{{ asset('images/o_deweloperze_projekty.webp') }}" alt="" width="555" height="480" class="img-fluid"
                             loading="lazy" data-aos="fade" />
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2 order-first order-md-0">
                        <h2 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade">Nasze projekty</span>
                            <span data-aos="fade" data-aos-delay="300">Heritage Invest Park</span>
                        </h2>
                        <div class="text-pretty">
                            <p class="fw-medium" data-aos="fade">
                                W naszych inwestycjach każdy element jest przemyślany tak, aby zapewnić maksymalną
                                funkcjonalność i estetykę. Korzystając z zaawansowanych technologii i nowoczesnych
                                materiałów budowlanych, zapewniamy wysoką efektywność energetyczną i trwałość naszych
                                budynków. Pompy ciepła, panele słoneczne oraz inteligentne systemy zarządzania energią i
                                wodą to standard w naszych projektach.
                            </p>
                            <p class="fw-light" data-aos="fade">
                                Specjalizujemy się w tworzeniu wysokiej jakości, mieszkań, bliźniaków i domów, które są
                                będą dostępne dla szerszej grupy odbiorców. Nasze projekty, takie jak flagowa inwestycja
                                <strong>Beskidzka Park</strong>, łączą nowoczesność z ekologicznymi rozwiązaniami,
                                zapewniając komfortowe
                                przestrzenie życiowe w pełnej harmonii z naturą.
                            </p>
                            <p class="pt-3" data-aos="fade" data-aos-delay="600">
                                <a href="/beskidzka-park#oferta" class="btn btn-primary btn-min-width">
                                    Beskidzka park
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start">
                    <div class="col-12 col-md-6 col-xl-5">

                        <h2 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade">Nasza filozofia</span>
                            <span data-aos="fade" data-aos-delay="300">Heritage Invest Park</span>
                        </h2>
                        <div class="text-pretty">
                            <p class="fw-medium" data-aos="fade">
                                Stoimy na stanowisku, że przestrzeń, w której żyjemy, powinna być tworzona z myślą o
                                przyszłych pokoleniach. Stawiamy na zrównoważony rozwój i innowacje, które minimalizują
                                negatywny wpływ na środowisko, podnosząc jednocześnie standard życia naszych klientów.
                                Wierzymy w odpowiedzialność społeczną oraz budowanie zdrowszej i bezpieczniejszej
                                przyszłości dla wszystkich.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2 text-md-end">
                        <img src="{{ asset('images/o_deweloperze_filozofia.webp') }}" alt="" width="555" height="480" class="img-fluid"
                             loading="lazy" data-aos="fade" />
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light">
            <div class="container">
                <div class="row gy-30 text-center ">
                    <div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                        <h2 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade">Dlaczego My?</span>
                            <span data-aos="fade" data-aos-delay="300">Heritage Invest Park</span>
                        </h2>
                        <div class="text-pretty">
                            <p class="fw-medium" data-aos="fade">
                                Wybierając Heritage Invest Park, decydujesz się na partnera, który zadba o każdy
                                szczegół projektu - od inicjacji po oddanie do użytku gotowego produktu, dodatkowo
                                udzielając Ci wsparcia w realizacji „wykończenia pod klucz”.
                            </p>
                            <p class="fw-medium" data-aos="fade">
                                Wykorzystując wszechstronne doświadczenie budowlane TRIMIF, zapewniamy innowacyjność i
                                niezawodność każdego przedsięwzięcia. Każda nasza inwestycja projektowana jest z myślą o
                                szczegółach, które podnoszą styl i jakość życia, jednocześnie pozostając w zasięgu
                                finansowym naszych klientów.
                            </p>
                            <p class="fw-medium fw-bold" data-aos="fade">
                                Heritage Invest Park - tu luksus jest standardem, nie przywilejem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection