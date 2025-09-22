<div class="premium-contact-form">
    @if ($errors->any())
        <div class="py-2">
            @foreach ($errors->all() as $error)
                <x-alert type="danger" :message="$error" />
            @endforeach
        </div>
    @endif

    <div class="form-container">
        <div class="form-header">
            <h2 class="text-center mb-4">Get In Touch</h2>
            <p class="text-center mb-5">Fill out the form below and we'll get back to you as soon as possible.</p>
        </div>

        <form id="contactForm" class="needs-validation" novalidate>
            <div class="row g-4">
                <!-- Personal Information -->
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" id="first-name" class="form-control" wire:model="first_name"
                            placeholder="First Name" required>
                        <label for="first-name">First Name</label>
                        <div class="invalid-feedback">Please provide your first name.</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" id="last-name" class="form-control" wire:model="last_name"
                            placeholder="Last Name" required>
                        <label for="last-name">Last Name</label>
                        <div class="invalid-feedback">Please provide your last name.</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" id="email" class="form-control" wire:model="email"
                            placeholder="example@email.com" required>
                        <label for="email">Email Address</label>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="tel" id="number" class="form-control" wire:model="number"
                            placeholder="+ 00 123 4567" required>
                        <label for="number">Phone Number</label>
                        <div class="invalid-feedback">Please provide your phone number.</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" id="company" class="form-control" wire:model="company"
                            placeholder="{{ env('APP_NAME') }}">
                        <label for="company">Company/Organization (optional)</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" id="website" class="form-control" wire:model="website"
                            placeholder="{{ env('APP_URL') }}">
                        <label for="website">Website (optional)</label>
                    </div>
                </div>

                <!-- Services Section -->
                <div class="col-12">
                    <div class="services-section">
                        <h5 class="services-title">What services can we provide you? *</h5>

                        <div class="row g-3 mt-2">
                            <div class="col-md-4">
                                <div class="service-checkbox">
                                    <input class="form-check-input" type="checkbox" id="app-development"
                                        value="App Development" wire:model="services">
                                    <label class="form-check-label" for="app-development">App Development</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service-checkbox">
                                    <input class="form-check-input" type="checkbox" id="web-development"
                                        value="Web Development" wire:model="services">
                                    <label class="form-check-label" for="web-development">Web Development</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service-checkbox">
                                    <input class="form-check-input" type="checkbox" id="VPN"
                                        value="VPN Development" wire:model="services">
                                    <label class="form-check-label" for="VPN">VPN Development</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service-checkbox">
                                    <input class="form-check-input" type="checkbox" id="uiux"
                                        value="UI & UX Design" wire:model="services">
                                    <label class="form-check-label" for="uiux">UI & UX Design</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service-checkbox">
                                    <input class="form-check-input" type="checkbox" id="digital"
                                        value="Digital Marketing" wire:model="services">
                                    <label class="form-check-label" for="digital">Digital Marketing</label>
                                </div>
                            </div>



                            <div class="col-md-4">
                                <div class="service-checkbox">
                                    <input class="form-check-input" type="checkbox" id="seo" value="SEO"
                                        wire:model="services">
                                    <label class="form-check-label" for="seo">Optimization (SEO)</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service-checkbox">
                                    <input class="form-check-input" type="checkbox" id="web-design"
                                        value="Web Design" wire:model="services">
                                    <label class="form-check-label" for="web-design">Web Design</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service-checkbox">
                                    <input class="form-check-input" type="checkbox" id="web-hosting"
                                        value="Web Hosting" wire:model="services">
                                    <label class="form-check-label" for="web-hosting">Web Hosting</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service-checkbox">
                                    <input class="form-check-input" type="checkbox" id="maintenance"
                                        value="Maintenance" wire:model="services">
                                    <label class="form-check-label" for="maintenance">Maintenance</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message Area -->
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <textarea id="message" class="form-control" wire:model="message" placeholder="Type Here" style="height: 150px"
                            required></textarea>
                        <label for="message">Message *</label>
                        <div class="invalid-feedback">Please provide a message.</div>
                    </div>
                </div>

                <input type="hidden" id="g-recaptcha-response" wire:model.defer="recaptcha">

                <!-- Submit Button -->
                <div class="col-12 text-center">
                    <button type="submit" class="premium-btn g-recaptcha">
                        <span>Submit</span>
                        <i class="fa fa-paper-plane ms-2"></i>
                    </button>
                </div>
            </div>
        </form>

        <div class="text-center mt-4" wire:loading>
            <x-spinner></x-spinner>
        </div>
    </div>
</div>

@assets
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.key') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/premium-contact-form.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endassets

@script
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form validation
            const form = document.getElementById('contactForm');

            // Handle form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Add validation classes
                form.classList.add('was-validated');

                // Check if form is valid
                if (form.checkValidity()) {
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
                }
            });

            // Input animations
            const formInputs = document.querySelectorAll('.form-control');
            formInputs.forEach(input => {
                // Add animation class when input gets focus
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('input-focused');
                });

                // Remove animation class when input loses focus
                input.addEventListener('blur', function() {
                    if (this.value === '') {
                        this.parentElement.classList.remove('input-focused');
                    }
                });

                // Check if input has value on page load
                if (input.value !== '') {
                    input.parentElement.classList.add('input-focused');
                }
            });

            // Checkbox animations
            const checkboxes = document.querySelectorAll('.form-check-input');
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    const parent = this.closest('.service-checkbox');
                    if (this.checked) {
                        parent.style.borderColor = '#6e45e2';
                        parent.style.backgroundColor = '#f8f9fe';
                    } else {
                        parent.style.borderColor = '#eaeaea';
                        parent.style.backgroundColor = '#fff';
                    }
                });

                // Check initial state
                if (checkbox.checked) {
                    const parent = checkbox.closest('.service-checkbox');
                    parent.style.borderColor = '#6e45e2';
                    parent.style.backgroundColor = '#f8f9fe';
                }
            });
        });
    </script>
@endscript
