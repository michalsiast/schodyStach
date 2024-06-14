<form id="contactForm" method="POST" class="contact-form-items mt-4 mt-md-0">
    <div class="row g-4">
        <div class="col-lg-6 wow fadeInUp">
            <div class="form-group form-clt">
                <input id="name" type="text" name="name" placeholder="Imię *" class="form-control" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeInUp">
            <div class="form-group form-clt">
                <input id="email" type="email" name="email" placeholder="Email *" class="form-control" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp">
            <div class="form-group form-clt">
                <input id="phone" type="text" name="phone" placeholder="Telefon *" class="form-control" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp">
            <div class="form-group form-clt">
                <textarea id="message" name="message" rows="5" placeholder="Wiadomość *" class="form-control" required></textarea>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp">
            <div class="form-group">
                <div class="form-check">
                    <input id="rule" type="checkbox" name="rule" class="form-check-input">
                    <label for="rule" class="form-check-label">{!! getConstField('contact_form_rule') !!}</label>
                    <div class="invalid-feedback"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp">
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="{{$siteKey}}"></div>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-lg-7 wow fadeInUp">
            <div class="form-group">
                <button type="submit" class="theme-btn padding-style">
                    Wyślij <i class="fas fa-long-arrow-right"></i>
                </button>
            </div>
        </div>
        <div class="col-lg-12 wow fadeInUp">
            <div id="alert" class="alert"></div>
        </div>
    </div>
</form>

@push('scripts.body.bottom')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', e => {
            e.preventDefault();
            submitForm(e.target);
        })
    </script>
@endpush
