@extends('layouts.page', ['body_class' => 'contact-page'])

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
                        <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3 text-center">
                        <h1 class="h2 mb-4 mb-lg-40">
                            <span data-aos="fade" class="aos-init aos-animate">Rozpocznijmy razem</span>
                            <span data-aos="fade" data-aos-delay="300" class="aos-init aos-animate">nowy rozdział</span>
                        </h1>
                        <div class="text-pretty mb-60">
                            <p class="fw-medium" data-aos="fade">
                                Czy to zapytanie, wizyta, czy chęć zobaczenia planów domów – nasz zespół sprzedaży jest do Twojej
                                dyspozycji. Skontaktuj się z nami poprzez formularz na stronie, telefonicznie lub osobiście w naszym
                                biurze sprzedaży. Czekamy, aby odpowiedzieć na Twoje pytania i przedstawić wszystko, co Beskidzka Park
                                ma do zaoferowania.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-12 col-md-6 col-lg-3 fw-semibold">
                        <div class="bg-white p-20 mb-30">
                            <p class="fw-semibold pb-4 mb-0 fs-5">Biuro sprzedaży</p>
                            <ul class="list-unstyled ">
                                <li class="pb-3">
                                    <div class="d-inline-flex gap-2 justify-content-center align-items-start">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.392" height="21.805"
                                                 viewBox="0 0 15.392 21.805">
                                                <path
                                                        d="M14.7,3a7.191,7.191,0,0,0-7.2,7.2c0,5.4,7.2,13.364,7.2,13.364s7.2-7.967,7.2-13.364A7.191,7.191,0,0,0,14.7,3Zm0,9.766a2.57,2.57,0,1,1,2.57-2.57A2.571,2.571,0,0,1,14.7,12.766Z"
                                                        transform="translate(-7 -2.5)" fill="none" stroke="currentColor" stroke-width="1" />
                                            </svg>
                                        </div>
                                        <div>
                                            ul.Beskidzka 129,<br />
                                            91-610 Łódź
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-inline-flex gap-2 justify-content-center align-items-start">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.646" height="16.646"
                                                 viewBox="0 0 16.646 16.646">
                                                <g transform="translate(-2.35 -2.35)">
                                                    <path
                                                            d="M10.673,18.846a8.173,8.173,0,1,1,8.173-8.173A8.182,8.182,0,0,1,10.673,18.846Zm0-15.568a7.395,7.395,0,1,0,7.395,7.395,7.4,7.4,0,0,0-7.395-7.395Z"
                                                            transform="translate(0 0)" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                                    <path
                                                            d="M51.933,21.674H48.127a.389.389,0,0,1-.389-.389V15.707a.389.389,0,1,1,.778,0V20.9h3.416a.389.389,0,1,1,0,.778Z"
                                                            transform="translate(-37.454 -10.612)" fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.3" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div>
                                            Godziny otwarcia<br />
                                            8:00-16:00
                                            <p class="text-body-emphasis fw-light small mt-3 mb-0 text-pretty">
                                                To są standardowe godziny otwarcia biura, w razie chęci umówienia spotkania, prosimy o kontakt i
                                                umówienie wizyty
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white p-20">
                            <p class="fw-semibold pb-4 mb-0 fs-5">Kontakt</p>
                            <ul class="list-unstyled">
                                <li class="pb-3">
                                    <a class="link-hover-primary d-inline-flex gap-2 justify-content-center align-items-center"
                                       href="tel:+48536 882 090">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15.573" height="15.574" viewBox="0 0 15.573 15.574"
                                             stroke="currentColor">
                                            <path id="tel_icon"
                                                  d="M14.146,10.29,10.96,8.925a.683.683,0,0,0-.8.2L8.753,10.844A10.541,10.541,0,0,1,3.714,5.805L5.438,4.394a.681.681,0,0,0,.2-.8L4.269.413a.687.687,0,0,0-.782-.4L.529.7A.683.683,0,0,0,0,1.365a13.2,13.2,0,0,0,13.2,13.2.683.683,0,0,0,.665-.529l.683-2.958A.691.691,0,0,0,14.146,10.29Z"
                                                  transform="translate(0.5 0.512)" fill="none" stroke="currentColor" stroke-width="1" />
                                        </svg>
                                        <span> 536 882 090 </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="link-hover-primary d-inline-flex gap-2 justify-content-center align-items-center"
                                       href="mailto:biuro@beskidzkapark.pl ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.283" height="14.512" viewBox="0 0 18.283 14.512">
                                            <g transform="translate(0.696 0.5)">
                                                <path
                                                        d="M4.689,6H18.2A1.694,1.694,0,0,1,19.89,7.689V17.823A1.694,1.694,0,0,1,18.2,19.512H4.689A1.694,1.694,0,0,1,3,17.823V7.689A1.694,1.694,0,0,1,4.689,6Z"
                                                        transform="translate(-3 -6)" fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1" />
                                                <path d="M19.89,9l-8.445,5.912L3,9" transform="translate(-3 -7.311)" fill="none"
                                                      stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                            </g>
                                        </svg>
                                        <span> biuro@beskidzkapark.pl </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-9">
                        <div class="d-flex bg-white align-items-center">
                            <div class="col-12 col-lg-8 col-xl-9">
                                <form id="contact-form" autocomplete="off" class="p-3 p-lg-30">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="form-errors" class="alert-danger alert hide-empty"></div>
                                            <div id="form-success" class="alert-success alert hide-empty"></div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="user-name" placeholder="Imię i nazwisko"
                                                       name="username" />
                                                <label for="user-name">Imię i nazwisko</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="tel" class="form-control" id="user-tel" placeholder="Telefon" name="tel" />
                                                <label for="user-tel">Telefon</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="user-email" placeholder="Adres e-mail" name="email"
                                                       required="" />
                                                <label for="user-email">Adres e-mail</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                        <textarea class="form-control" placeholder="Wiadomość" id="user-message" style="height: 100px"
                                  name="message"></textarea>
                                                <label for="user-message">Wiadomość</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check text-start pt-3">
                                            <input class="form-check-input" type="checkbox" value="" id="terms-check" name="terms" />
                                            <label class="form-check-label small fw-medium" for="terms-check">
                                                Akceptuję
                                                <a class="link-hover-primary text-decoration-underline"
                                                   href="/polityka-prywatnosci/">politykę
                                                    prywatności.</a>
                                                <span class="text-primary">*</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button data-btn-submit type="submit" class="btn btn-primary px-30" disabled>
                                            WYŚLIJ
                                        </button>
                                    </div>
                                </form>
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
@push('scripts')
    <script type="text/javascript">
        const map = L.map('map').setView([52.124160, 20.668000], 14);
        L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 20
        }).addTo(map);

        L.marker([52.124160, 20.668000]).addTo(map)
            .bindPopup('<img src="{{ asset('images/logo-dark.svg') }}" width="73" height="27" alt="logo" class="mb-2"> <br> Przeskok 6 <br> 05-822 Milanówek')
            .openPopup();
    </script>
@endpush
