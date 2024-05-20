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

    <!-- Delaying scripts -->
    <style>fscript {display: none;}</style>
    <script>
        let scriptsExecuted = false;
        const head = document.getElementsByTagName('head')[0] || document.documentElement;
        const autoLoad = setTimeout(initScripts, 3000);

        function executeScripts() {
            var fscripts = document.querySelectorAll('fscript');
            [].forEach.call(fscripts, function(fscript) {
                var script = document.createElement('script');
                script.type = 'text/javascript';

                if (fscript.hasAttributes()) {
                    for (var attributeKey in fscript.attributes) {
                        if (fscript.attributes.hasOwnProperty(attributeKey)) {
                            script[ fscript.attributes[ attributeKey ].name ] = fscript.attributes[ attributeKey ].value || true;
                        }
                    }
                } else {
                    script.appendChild( document.createTextNode( fscript.innerHTML ) );
                }

                head.insertBefore( script, head.firstChild );
            });
        }

        function initScripts() {
            if (scriptsExecuted) {
                return;
            }

            clearTimeout(autoLoad);

            scriptsExecuted = true;

            setTimeout(function() {
                if ('requestIdleCallback' in window) {
                    requestIdleCallback(executeScripts, { timeout: 100 });
                } else {
                    executeScripts();
                }
            }, 1000);
        }

        window.addEventListener('scroll', function() {
            initScripts();
        }, false);

        document.onclick = function() {
            initScripts();
        };
    </script>
    <!-- // -->

    <!-- Google Tag Manager -->
    <fscript>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TRG8Q34L');</fscript>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) --> <fscript async src="https://www.googletagmanager.com/gtag/js?id=G-D009CCNY3Z"></fscript><fscript> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-D009CCNY3Z'); </fscript>

    <!-- Meta Pixel Code -->
    <fscript>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '773397614168510');
        fbq('track', 'PageView');
    </fscript>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=773397614168510&amp;ev=PageView&amp;noscript=1"></noscript>
    <!-- End Meta Pixel Code -->

    <fscript  type="text/javascript" src="https://trafficscanner.pl/ws2/script/3856/koniec.js"></fscript>
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
