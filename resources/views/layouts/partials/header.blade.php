<header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-white py-0 pt-3">
        <div class="container header-nav-container flex-wrap">
            <!-- Logo -->
            <div class="ms-auto d-none d-lg-block">
                <a href="tel:+48536882090" class="btn btn-primary rounded-full" aria-label="Skontaktuj się">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.573" height="15.574" viewBox="0 0 15.573 15.574">
                        <path id="tel_icon"
                              d="M14.146,10.29,10.96,8.925a.683.683,0,0,0-.8.2L8.753,10.844A10.541,10.541,0,0,1,3.714,5.805L5.438,4.394a.681.681,0,0,0,.2-.8L4.269.413a.687.687,0,0,0-.782-.4L.529.7A.683.683,0,0,0,0,1.365a13.2,13.2,0,0,0,13.2,13.2.683.683,0,0,0,.665-.529l.683-2.958A.691.691,0,0,0,14.146,10.29Z"
                              transform="translate(0.5 0.512)" fill="none" stroke="#fff" stroke-width="1" />
                    </svg>
                    <span class="d-none d-sm-inline"> +48 536 882 090 </span>
                </a>
            </div>

            <div class="d-flex justify-content-between w-100 align-items-center flex-wrap">
                <div class="header-logo-container">
                    <a class="text-center d-inline-flex justify-content-center" href="/">
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo" width="204" height="102" class="img-fluid header-logo"
                             loading="eager" />
                    </a>
                </div>
                <div class="ms-auto d-lg-none">
                    <a href="tel:+48536882090" class="btn btn-primary rounded-full" aria-label="Skontaktuj się">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.573" height="15.574" viewBox="0 0 15.573 15.574">
                            <path id="tel_icon"
                                  d="M14.146,10.29,10.96,8.925a.683.683,0,0,0-.8.2L8.753,10.844A10.541,10.541,0,0,1,3.714,5.805L5.438,4.394a.681.681,0,0,0,.2-.8L4.269.413a.687.687,0,0,0-.782-.4L.529.7A.683.683,0,0,0,0,1.365a13.2,13.2,0,0,0,13.2,13.2.683.683,0,0,0,.665-.529l.683-2.958A.691.691,0,0,0,14.146,10.29Z"
                                  transform="translate(0.5 0.512)" fill="none" stroke="#fff" stroke-width="1" />
                        </svg>
                        <span class="d-none d-sm-inline"> +48 536 882 090 </span>
                    </a>
                </div>
                <!-- Toggle button for mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse justify-content-end bg-white" id="navbarNav">
                    <ul class="navbar-nav py-3 fw-light gap-3 align-items-lg-center fw-semibold">
                        <li class="nav-item @if (!isset($page)) active @endif">
                            <a class="nav-link link-hover-primary" href="/">Strona główna</a>
                        </li>
                        <li class="nav-item @isset($page) @if($page->slug == 'o-nas') active @endif @endisset">
                            <a class="nav-link link-hover-primary" href="/o-nas">O nas</a>
                        </li>
                        <!-- Dropdown @start -->
                        <li class="nav-item dropdown">
                            <a class="nav-link link-hover-primary" href="/beskidzka-park/">Beskidzka Park <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-chevron-down ms-2" viewBox="0 0 16 16" id="navbar-dropdown" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    <path fill-rule="evenodd"
                                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                </svg></a>

                            <ul class="dropdown-menu">
                                @isset($page)
                                    @if($page->slug == 'beskidzka-park')
                                        <li class="nav-item ">
                                            <a class="nav-link link-hover-primary" href="#o-inwestycji">O inwestycji</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link link-hover-primary" href="#oferta">Wybierz dom</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link link-hover-primary" href="#wizualizacje">Galeria</a>
                                        </li>
                                    @else
                                        <li class="nav-item ">
                                            <a class="nav-link link-hover-primary" href="/beskidzka-park/#o-inwestycji">O inwestycji</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link link-hover-primary" href="/beskidzka-park/#oferta">Wybierz dom</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link link-hover-primary" href="/beskidzka-park/#wizualizacje">Galeria</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item ">
                                        <a class="nav-link link-hover-primary" href="/beskidzka-park/#o-inwestycji">O inwestycji</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link link-hover-primary" href="/beskidzka-park/#oferta">Wybierz dom</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link link-hover-primary" href="/beskidzka-park/#wizualizacje">Galeria</a>
                                    </li>
                                @endisset
                            </ul>
                        </li>
                        <!-- Dropdown @end -->
                        <li class="nav-item @isset($page) @if($page->slug == 'finansowanie') active @endif @endisset">
                            <a class="nav-link link-hover-primary" href="/finansowanie/">Finansowanie</a>
                        </li>
                        <li class="nav-item @isset($page) @if($page->slug == 'kontakt') active @endif @endisset">
                            <a class="nav-link link-hover-primary" href="/kontakt/">Kontakt</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
</header>