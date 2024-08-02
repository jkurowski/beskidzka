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
                        <li class="breadcrumb-item active" aria-current="page">Finansowanie</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start">
                    <div class="col-12 col-md-6 col-xl-5 inline inline-tc">
                        <h1 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="6">{!! getInline($array, 6, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="6">{!! getInline($array, 6, 'modaleditor') !!}</span>
                        </h1>
                        <div class="text-pretty" data-modaleditortext="6">
                            {!! getInline($array, 6, 'modaleditortext') !!}
                        </div>
                        @if($isAdmin)
                            <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="6" data-hideinput="modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="556" data-imgheight="480"></button></div>
                        @endif
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2 text-md-end">
                        <img src="{{ asset('images/finansowanie_hero.png') }}" alt="" width="555" height="480" class="img-fluid" loading="eager" data-aos="fade" />
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-10 offset-1 col-sm-6 offset-sm-3 col-md-4 offset-md-4">
                        <img src="{{ asset('images/expander_logo.png')}}" alt='' width="2865" height="1100" class="img-fluid" loading="eager" data-aos="fade" />
                    </div>
                    <div class="col-12">
                        <div class="containerFrameCalc">
                            <iframe class="responsive-iframeCalc" src="https://expander.pl/kalkulator-zdolnosci-szablon/?vid=766323cc-3ef2-40d8-b85b-34fb16556386" frameborder="0"></iframe>
                        </div>
                    </div>
                    <style>
                        .containerFrameCalc {
                            position: relative;
                            overflow: hidden;
                            width: 100%;
                            height: 100vh; /* Use 100% of the viewport height */
                            margin: 0;
                            padding: 0;
                        }
                        .responsive-iframeCalc {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                        }
                        @media only screen and (max-width: 800px) {
                            .containerFrameCalc {
                                height: 150vh; /* Adjust if necessary */
                            }
                        }
                    </style>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection