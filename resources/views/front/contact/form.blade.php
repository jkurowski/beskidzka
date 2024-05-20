<form id="contact-form" autocomplete="off" class="p-3 p-lg-30 validateForm" action="{{ route('front.contact.form') }}" method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success border-0">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning border-0">
                    {{ session('warning') }}
                </div>
            @endif
        </div>
        <div class="col-12">
            <div class="form-floating mb-3">
                <input type="text" class="form-control validate[required] @error('form_name') is-invalid @enderror" value="{{ old('form_name') }}" id="user-name" placeholder="Imię i nazwisko" name="form_name" />
                <label for="user-name">Imię i nazwisko</label>
                @error('form_name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
            <div class="form-floating mb-3">
                <input type="tel" class="form-control validate[required] @error('form_phone') is-invalid @enderror" value="{{ old('form_phone') }}" id="user-tel" placeholder="Telefon" name="form_phone" />
                <label for="user-tel">Telefon</label>
                @error('form_phone')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
            <div class="form-floating mb-3">
                <input type="email" class="form-control validate[required] @error('form_email') is-invalid @enderror" id="user-email" placeholder="Adres e-mail" name="form_email" required="" value="{{ old('form_email') }}" />
                <label for="user-email">Adres e-mail</label>
                @error('form_email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control validate[required] @error('form_message') is-invalid @enderror" placeholder="Wiadomość" id="user-message" style="height: 100px" name="form_message">{{ old('form_message') }}</textarea>
                <label for="user-message">Wiadomość</label>
                @error('form_message')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-12">
        @foreach ($rules as $r)
            <div class="form-check text-start pt-3 @error('rule_'.$r->id) is-invalid @enderror">
                <input name="rule_{{$r->id}}" type="checkbox" class="form-check-input @if($r->required === 1) validate[required] @endif" id="rule_{{$r->id}}" data-prompt-position="topLeft:-20px">
                <label class="form-check-label form-check-label--check small fw-medium" for="rule_{{$r->id}}">{!! $r->text !!}</label>
                @error('rule_'.$r->id)
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        @endforeach
    </div>
    <div class="col-12 text-end">
        <input type="hidden" name="page_name" value="{{ $page_name }}">
        <script type="text/javascript">
            document.write("<button type=\"submit\" class=\"g-recaptcha btn btn-primary px-30\" data-sitekey=\"{{ config('services.recaptcha_v3.siteKey') }}\" data-callback=\"onRecaptchaSuccess\" data-action=\"submitContact\">WYŚLIJ</button>");
        </script>
        <noscript>Do poprawnego działania, Java musi być włączona.</noscript>
    </div>
</form>
@push('scripts')
    <script src="{{ asset('js/validation.min.js') }}" charset="utf-8"></script>
    <fscript src="https://www.google.com/recaptcha/api.js"></fscript>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition: true,
                promptPosition : "topLeft:0",
                autoPositionUpdate: true
            });
        });

        function onRecaptchaSuccess(token) {
            $(".validateForm").validationEngine('updatePromptsPosition');
            const isValid = $(".validateForm").validationEngine('validate');
            if (isValid) {
                $("#contact-form").submit();
            } else {
                grecaptcha.reset();
            }
        }
        @if (session('success') || session('warning') || $errors->any())
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.validateForm').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush