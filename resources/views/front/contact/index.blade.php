@extends('layouts.page', ['body_class' => 'contact-page'])

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
                        <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 text-center inline inline-tc">
                        <h1 class="h2 mb-4 mb-lg-40">
                            <span data-aos="fade" class="aos-init aos-animate" data-modaltytul="5">{!! getInline($array, 5, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" class="aos-init aos-animate" data-modaleditor="5">{!! getInline($array, 5, 'modaleditor') !!}</span>
                        </h1>
                        <div class="text-pretty mb-60" data-modaleditortext="5">
                            {!! getInline($array, 5, 'modaleditortext') !!}
                        </div>
                        @if($isAdmin)
                            <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="5" data-hideinput="modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="556" data-imgheight="480"></button></div>
                        @endif
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-12 col-md-6 col-lg-3 fw-semibold">
                        {!! $page->content !!}
                    </div>
                    <div class="col-12 col-md-6 col-lg-9">
                        <div class="d-flex bg-white align-items-center">
                            <div class="col-12 col-lg-8 col-xl-9">
                                @include('front.contact.form', [ 'page_name' => 'Kontakt'])
                            </div>
                            <div class="d-none d-lg-block col-lg-4 col-xl-3 position-relative">
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
