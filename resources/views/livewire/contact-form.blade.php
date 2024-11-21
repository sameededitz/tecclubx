<div>
    @if ($errors->any())
        <div class="py-2">
            @foreach ($errors->all() as $error)
                <x-alert type="danger" :message="$error" />
            @endforeach
        </div>
    @endif
    <form id="contactForm">
        <div class="request-quote__area-inputs">
            <div class="request-quote__area-input-field">
                <label for="first-name">First Name *</label>
                <input type="text" id="first-name" wire:model="first_name" placeholder="First">
            </div>
            <div class="request-quote__area-input-field">
                <label for="last-name">Last Name *</label>
                <input type="text" id="last-name" wire:model="last_name" placeholder="Last">
            </div>
            <div class="request-quote__area-input-field">
                <label for="email">Email Address *</label>
                <input type="email" id="email" wire:model="email" placeholder="{{ env('MAIL_OWNER') }}">
            </div>
            <div class="request-quote__area-input-field">
                <label for="number">Number *</label>
                <input type="text" id="number" wire:model="number" placeholder="+ 00 123 4567">
            </div>
            <div class="request-quote__area-input-field">
                <label for="company">Company/Organization (optional)</label>
                <input type="text" id="company" wire:model="company" placeholder="{{ env('APP_NAME') }}">
            </div>
            <div class="request-quote__area-input-field">
                <label for="website">Website (optional)</label>
                <input type="text" id="website" wire:model="website" placeholder="{{ env('APP_URL') }}">
            </div>
        </div>
        <div class="request-quote__area-service-input">
            <span>What services can we provide you? *</span>
            <div class="request-quote__area-service-input-single">
                <input type="checkbox" id="app-development" value="App Development" wire:model="services">
                <label for="app-development">App Development</label>
            </div>
            <div class="request-quote__area-service-input-single">
                <input type="checkbox" id="web-development" value="Web Development" wire:model="services">
                <label for="web-development">Web Development</label>
            </div>
            <div class="request-quote__area-service-input-single">
                <input type="checkbox" id="uiux" value="UI & UX Design" wire:model="services">
                <label for="uiux">UI & UX Design</label>
            </div>
            <div class="request-quote__area-service-input-single">
                <input type="checkbox" id="digital" value="Digital Marketing" wire:model="services">
                <label for="digital">Digital Marketing</label>
            </div>
            <div class="request-quote__area-service-input-single">
                <input type="checkbox" id="graphic" value="Graphic Design" wire:model="services">
                <label for="graphic">Graphic Design</label>
            </div>
            <div class="request-quote__area-service-input-single">
                <input type="checkbox" id="seo" value="SEO" wire:model="services">
                <label for="seo">Optimization (SEO)</label>
            </div>
            <div class="request-quote__area-service-input-single">
                <input type="checkbox" id="web-design" value="Web Design" wire:model="services">
                <label for="web-design">Web Design</label>
            </div>
            <div class="request-quote__area-service-input-single">
                <input type="checkbox" id="web-hosting" value="Web Hosting" wire:model="services">
                <label for="web-hosting">Web Hosting</label>
            </div>
            <div class="request-quote__area-service-input-single">
                <input type="checkbox" id="maintenance" value="Maintenance" wire:model="services">
                <label for="maintenance">Maintenance</label>
            </div>
        </div>
        <label for="message" class="mb-2">Message *</label>
        <textarea id="message" placeholder="Type Here" wire:model="message"></textarea>
        <input type="hidden" id="g-recaptcha-response" wire:model.defer="recaptcha">
        <button class="g-recaptcha btn-two mt-4">Submit</button>
    </form>
    <div wire:loading>
        <x-spinner></x-spinner>
    </div>
</div>

@assets
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.key') }}"></script>
@endassets

@script
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get the reCAPTCHA response
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.recaptcha.key') }}', {
                    action: 'submit'
                }).then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                    @this.set('recaptcha', token);
                    @this.call('submit');
                });
            });
        });
    </script>
@endscript
