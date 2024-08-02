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
                        <li class="breadcrumb-item active" aria-current="page">O deweloperze</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start align-items-center inline inline-tc">
                    <div class="col-12 col-md-6 col-xl-5">

                        <h1 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="7">{!! getInline($array, 7, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="7">{!! getInline($array, 7, 'modaleditor') !!}</span>
                        </h1>
                        <div class="text-pretty" data-modaleditortext="7">
                            {!! getInline($array, 7, 'modaleditortext') !!}
                        </div>

                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2 text-md-end">
                        <img class="img-fluid" src="{{ getInline($array, 7, 'file') }}" alt="{{ getInline($array, 7, 'file_alt') }}" width="353" height="100" loading="eager" data-img="7">
                    </div>
                    @if($isAdmin)
                        <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="7" data-hideinput="modallink,modallinkbutton" data-method="update" data-imgwidth="353" data-imgheight="100"></button></div>
                    @endif
                </div>
            </div>
        </section>

        <section class="bg-light">
            <div class="container">
                <div class="row gy-30 text-center inline inline-tc">
                    <div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                        <h2 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="8">{!! getInline($array, 8, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="8">{!! getInline($array, 8, 'modaleditor') !!}</span>
                        </h2>
                        <div class="text-pretty" data-modaleditortext="8">
                            {!! getInline($array, 8, 'modaleditortext') !!}
                        </div>
                    </div>
                    @if($isAdmin)
                        <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="8" data-hideinput="modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="353" data-imgheight="100"></button></div>
                    @endif
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start inline inline-tc">

                    <div class="col-12 col-md-6 col-xl-5  text-md-end">
                        <img class="img-fluid" src="{{ getInline($array, 9, 'file') }}" alt="{{ getInline($array, 9, 'file_alt') }}" width="555" height="480" loading="lazy" data-img="9" data-aos="fade">
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2 order-first order-md-0">
                        <h2 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="9">{!! getInline($array, 9, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="9">{!! getInline($array, 9, 'modaleditor') !!}</span>
                        </h2>
                        <div class="text-pretty" data-modaleditortext="9">
                            {!! getInline($array, 9, 'modaleditortext') !!}
                        </div>
                    </div>
                    @if($isAdmin)
                        <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="9" data-hideinput="modallink,modallinkbutton" data-method="update" data-imgwidth="555" data-imgheight="480"></button></div>
                    @endif
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row gy-30 text-center text-md-start inline inline-tc">
                    <div class="col-12 col-md-6 col-xl-5">

                        <h2 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="10">{!! getInline($array, 10, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="10">{!! getInline($array, 10, 'modaleditor') !!}</span>
                        </h2>
                        <div class="text-pretty" data-modaleditortext="10">
                            {!! getInline($array, 10, 'modaleditortext') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-2 text-md-end">
                        <img class="img-fluid" src="{{ getInline($array, 10, 'file') }}" alt="{{ getInline($array, 10, 'file_alt') }}" width="555" height="480" loading="lazy" data-img="10" data-aos="fade">
                    </div>
                    @if($isAdmin)
                        <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="10" data-hideinput="modallink,modallinkbutton" data-method="update" data-imgwidth="555" data-imgheight="480"></button></div>
                    @endif
                </div>
            </div>
        </section>

        <section class="bg-light">
            <div class="container">
                <div class="row gy-30 text-center ">
                    <div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 inline inline-tc">

                        <h2 class="h2 mb-4 mb-lg-40 mb-xl-60">
                            <span data-aos="fade" data-modaltytul="11">{!! getInline($array, 11, 'modaltytul') !!}</span>
                            <span data-aos="fade" data-aos-delay="300" data-modaleditor="11">{!! getInline($array, 11, 'modaleditor') !!}</span>
                        </h2>
                        <div class="text-pretty" data-modaleditortext="11">
                            {!! getInline($array, 11, 'modaleditortext') !!}
                        </div>
                        @if($isAdmin)
                            <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="11" data-hideinput="modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="555" data-imgheight="480"></button></div>
                        @endif
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection