@extends('layouts.page', ['body_class' => 'completed-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <img src="{{ asset('/investment/plan/'.$investment->plan->file) }}" alt="{{$investment->name}}" id="invesmentplan" usemap="#invesmentplan" class="investment-details-photo" loading="eager">
                    <map name="invesmentplan">
                        @if($investment->houses)
                            @foreach($investment->houses as $house)
                                <area
                                        shape="poly"
                                        href="{{route('front.developro.house.index', ['slug' => $investment->slug, 'property' => $house])}}"
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

            <div class="row justify-content-center mt-5">
                <div class="col-10">
                    <div id="offerList">
                        @if($investment->houses)
                            @foreach($investment->houses as $house)
                                <div class="offer-list-box status-sprzedany position-relative">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 offer-list-box__img">
                                            @if($house->file)
                                                <a href="{{route('front.developro.house.index', ['slug' => $investment->slug, 'property' => $house])}}">
                                                    <picture>
                                                        <source type="image/webp" srcset="/investment/property/list/webp/{{$house->file_webp}}">
                                                        <source type="image/jpeg" srcset="/investment/property/list/{{$house->file}}">
                                                        <img src="/investment/property/list/{{$house->file}}" alt="Plan {{$house->name}}" loading="lazy">
                                                    </picture>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="col-lg-1 offer-list-box__name">
                                            <a href="{{route('front.developro.house.index', ['slug' => $investment->slug, 'property' => $house])}}">
                                                <p class="mb-2">{{$house->name_list}}</p>
                                                <p class="offer-list-box__name--big mb-0">{{$house->number}}</p>
                                            </a>
                                        </div>
                                        <div class="col-6 text-center text-lg-start col-lg-1 offer-list-box__rooms">
                                            <p class="">Pokoje</p>
                                            <p class="mb-0">{{$house->rooms}}</p>
                                        </div>
                                        <div class="col-6 text-center text-lg-start col-lg-1 offer-list-box__area">
                                            <p class="">Powierzchnia</p>
                                            <p class="mb-0">{{$house->area}} m<sup>2</sup></p>
                                        </div>
                                        <div class="col-6 col-lg-2 mt-4 mt-lg-0 text-center offer-list-box__pdf d-flex align-items-center justify-content-center justify-content-start">
                                            <img src="{{ asset('images/pdf.svg') }}" alt="pdf ikona" class="me-3" width="21" height="24" loading="lazy">
                                            <a href="{{ asset('investment/property/pdf/'.$house->file_pdf) }}" target="_blank">Pobierz pdf</a>
                                        </div>
                                        <div class="col-6 mt-4 mt-lg-0 text-center text-lg-start col-lg-3">
                                            <a href="{{route('front.developro.house.index', ['slug' => $investment->slug, 'property' => $house])}}" class="project-btn"><span>Sprawdź</span></a>
                                        </div>
                                    </div>
                                    <div class="offer-list-box__status-container">
                                        {!! roomStatusBadge($house->status) !!}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
@endpush