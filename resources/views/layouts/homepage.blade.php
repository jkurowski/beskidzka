<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ settings()->get("page_title") }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get("page_description") }}">
    <meta name="robots" content="{{ settings()->get("page_robots") }}">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="DNS-prefetch" href="//fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Preloads  -->
    <link rel="preload" fetchpriority="high" as="image" href="https://beskidzkapark.pl/images/bg.webp" type="image/webp">
    <link rel='preload' as='style' href='https://beskidzkapark.pl/css/style.min.css'>
    <link rel="preload" as='style' href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://beskidzkapark.pl/css/style.min.css" rel="stylesheet">

</head>
<body class="{{ !empty($body_class) ? $body_class : '' }}">
{!! settings()->get("scripts_afterbody") !!}

@include('layouts.partials.header')

@yield('content')

@include('layouts.partials.footer')

@include('layouts.partials.cookies')

<!-- Styles -->
<link href="{{ asset('/css/style.min.css') }}" rel="stylesheet">

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/main.min.js') }}" charset="utf-8"></script>

@stack('scripts')

@if(settings()->get("popup_status") == 1)
    <div class="modal" tabindex="-1" id="popModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! settings()->get("popup_text") !!}
                </div>
            </div>
        </div>
    </div>
@endif
<script type="text/javascript">
    $(document).ready(function(){
        @if(settings()->get("popup_status") == 1)
            const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
                keyboard: false
            });
        @endif
        @if($popup == 1)
        popModal.show();
            setTimeout( function(){
                popModal.hide();
            }, {{ settings()->get("popup_timeout") }} );
        @endif
    });

    @if(session('success') || session('warning') || $errors->any())
    $(window).load(function() {
        const aboveHeight = $('header').outerHeight();
        $('html, body').stop().animate({
            scrollTop: $('.validateForm').offset().top-aboveHeight
        }, 1500, 'easeInOutExpo');
    });
    @endif
</script>
{!! settings()->get("scripts_beforebody") !!}
</body>
</html>
