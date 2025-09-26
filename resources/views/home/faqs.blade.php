@extends('layout.home-layout')
@section('title')
    Faqs | TecClub - Technology
@endsection

@section('home_content')
    <!-- Banner Area Start -->
    <div class="page__banner">
        <div class="page__banner-shape">
            <img src="assets/img/shape/page-banner-shape.png" alt="image">
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="page__banner-content py-5">
                        <h2>Question and Answer</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Faqs
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Premium FAQ Area Start -->
    <section class="premium-faq">
        <div class="container">
            <div class="intro">
                <div class="section-badge">
                    <i class="fas fa-question-circle"></i>
                    <span>Frequently Asked Questions</span>
                </div>
                <h2 class="section-title">Answers to Common Questions</h2>
                <p class="section-subtitle">Clear, concise answers to help you understand our services and process faster.</p>
            </div>
            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-list">
                        <div class="faq-item expanded" data-index="0" data-categories="About Our Company">
                            <button class="faq-btn" aria-expanded="true" aria-controls="panel-0">
                                <div class="faq-icon">1</div>
                                <div class="q-left">
                                    <h4>Who are we?</h4>
                                    <div class="meta">Global Tech Innovators</div>
                                </div>
                            </button>
                            <div id="panel-0" class="panel">
                                <p>We are a full-service tech company specializing in VPN development, white-label solutions, web & app development, and UI/UX design, serving clients worldwide.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-index="1" data-categories="About Our Company">
                            <button class="faq-btn" aria-expanded="false" aria-controls="panel-1">
                                <div class="faq-icon">2</div>
                                <div class="q-left">
                                    <h4>What is our mission?</h4>
                                    <div class="meta">Secure, Scalable, Beautiful</div>
                                </div>
                            </button>
                            <div id="panel-1" class="panel">
                                <p>Our mission is to deliver secure, scalable, and beautifully designed digital products that help businesses launch and grow faster.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-index="2" data-categories="About Our Company">
                            <button class="faq-btn" aria-expanded="false" aria-controls="panel-2">
                                <div class="faq-icon">3</div>
                                <div class="q-left">
                                    <h4>Where are we located?</h4>
                                    <div class="meta">Based in Pakistan, Serving Globally</div>
                                </div>
                            </button>
                            <div id="panel-2" class="panel">
                                <p>Our core team is in Pakistan with global partners, providing tech solutions to clients across multiple industries.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-index="3" data-categories="Our Services">
                            <button class="faq-btn" aria-expanded="false" aria-controls="panel-3">
                                <div class="faq-icon">4</div>
                                <div class="q-left">
                                    <h4>What services do we offer?</h4>
                                    <div class="meta">VPN, Web, Apps, Design</div>
                                </div>
                            </button>
                            <div id="panel-3" class="panel">
                                <p>We provide VPN development, white-label VPN apps, custom websites, mobile apps, and UI/UX design — everything under one roof.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-index="4" data-categories="Our Services">
                            <button class="faq-btn" aria-expanded="false" aria-controls="panel-4">
                                <div class="faq-icon">5</div>
                                <div class="q-left">
                                    <h4>Do you build both websites and mobile apps?</h4>
                                    <div class="meta">Full Digital Solutions</div>
                                </div>
                            </button>
                            <div id="panel-4" class="panel">
                                <p>Our developers create responsive websites and cross-platform mobile apps tailored to your business goals and brand identity.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-index="5" data-categories="Our Services">
                            <button class="faq-btn" aria-expanded="false" aria-controls="panel-5">
                                <div class="faq-icon">6</div>
                                <div class="q-left">
                                    <h4>Can I hire you only for UI/UX design?</h4>
                                    <div class="meta">Design-Only Option</div>
                                </div>
                            </button>
                            <div id="panel-5" class="panel">
                                <p>Our UI/UX team designs clean, modern, and user-friendly interfaces even as a standalone service to boost your brand.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-index="6" data-categories="Whitelabel">
                            <button class="faq-btn" aria-expanded="false" aria-controls="panel-6">
                                <div class="faq-icon">7</div>
                                <div class="q-left">
                                    <h4>What is your white-label VPN solution?</h4>
                                    <div class="meta">Ready-Made, Fully Brandable</div>
                                </div>
                            </button>
                            <div id="panel-6" class="panel">
                                <p>It’s a pre-built VPN platform you can fully brand and launch as your own without investing in costly development.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-index="7" data-categories="Whitelabel">
                            <button class="faq-btn" aria-expanded="false" aria-controls="panel-7">
                                <div class="faq-icon">8</div>
                                <div class="q-left">
                                    <h4>How long does it take to launch?</h4>
                                    <div class="meta">Fast Deployment, 2–4 Weeks</div>
                                </div>
                            </button>
                            <div id="panel-7" class="panel">
                                <p>We handle branding, server setup, app store submissions, and testing so you can go live quickly.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-index="8" data-categories="Whitelabel">
                            <button class="faq-btn" aria-expanded="false" aria-controls="panel-8">
                                <div class="faq-icon">9</div>
                                <div class="q-left">
                                    <h4>Can I customize my white-label VPN?</h4>
                                    <div class="meta">Full Branding, Custom Features</div>
                                </div>
                            </button>
                            <div id="panel-8" class="panel">
                                <p>Yes — add your logo, colors, app name, and choose server locations to match your target market.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-index="9" data-categories="Payment & Policies">
                            <button class="faq-btn" aria-expanded="false" aria-controls="panel-9">
                                <div class="faq-icon">10</div>
                                <div class="q-left">
                                    <h4>What pricing plans do you offer for startups?</h4>
                                    <div class="meta">Starter, Growth, Enterprise</div>
                                </div>
                            </button>
                            <div id="panel-9" class="panel">
                                <p>We offer tiered plans: Starter for MVPs, Growth for scaling businesses, and Enterprise for large teams. Each plan scales by features and support level.</p>
                            </div>
                        </div>

                        <div class="faq-item" data-index="10" data-categories="Payment & Policies">
                            <button class="faq-btn" aria-expanded="false" aria-controls="panel-10">
                                <div class="faq-icon">11</div>
                                <div class="q-left">
                                    <h4>What are your payment terms and refund policy?</h4>
                                    <div class="meta">Clear & Flexible</div>
                                </div>
                            </button>
                            <div id="panel-10" class="panel">
                                <p>We follow transparent payment terms with milestone-based billing. Refunds are handled case by case, ensuring fairness and clarity for both sides.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="sidebar">
                    <div class="cta">
                        <h5 style="color: #ffffff">Need more help?</h5>
                        <p>Contact our support team or schedule a free consultation to get personalized answers.</p>
                        <a href="{{ route('contact') }}" class="btn btn-light mt-2">Contact Us</a>
                    </div>

                    <div class="help-list">
                        <h6 style="margin-top:0">Popular Topics</h6>
                        <ul style="margin:0;padding-left:1rem">
                            <li><a href="#" class="help-link" data-category="About Our Company">About Our Company</a></li>
                            <li><a href="#" class="help-link" data-category="Our Services">Our Services</a></li>
                            <li><a href="#" class="help-link" data-category="Whitelabel">White Label Option</a></li>
                            <li><a href="#" class="help-link" data-category="Payment & Policies">Payment & Policies</a></li>
                            {{-- <li><a href="#" class="help-link" data-category="general">All Questions</a></li> --}}
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- Premium FAQ Area End -->
    <div class="subscribe__one">
        <div class="container">
            <div class="row justify-content-center text-center subscribe__one-content"
                style="background-image: url(assets/img/subscribe/subscribe-one-shape-1.png);">
                <div class="col-xl-7 col-lg-8">
                    <div class="subscribe__one-title">
                        <h3>Subscribe Our newsletter </h3>
                    </div>
                    <form action="#" class="subscribe__one-form">
                        <input type="email" placeholder="Enter Your Email">
                        <button class="btn-two" type="submit">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Area End -->
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/faqs-page.css') }}">
    <style>
        /* Force FAQ answer text to sentence case (visual only).
           Lowercase all letters then uppercase the first letter of the paragraph.
           Note: this is a visual transform and will also lowercase proper nouns.
        */
        .premium-faq .panel,
        .premium-faq .panel p {
            text-transform: lowercase !important;
        }
        .premium-faq .panel p::first-letter {
            text-transform: uppercase !important;
        }
        /* If answers include other direct child elements, normalize them too */
        .premium-faq .panel * {
            text-transform: none; /* allow specific tags (like code) to keep their case) */
        }
    </style>
@endsection

@section('home_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const items = Array.from(document.querySelectorAll('.premium-faq .faq-item'));
            const helpLinks = Array.from(document.querySelectorAll('.help-link'));

            function closeAll() {
                items.forEach(item => {
                    item.classList.remove('expanded');
                    const btn = item.querySelector('.faq-btn');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                    const panel = item.querySelector('.panel');
                    if (panel) panel.style.maxHeight = null;
                });
            }

            function openItem(item) {
                const btn = item.querySelector('.faq-btn');
                const panel = item.querySelector('.panel');
                if (!item.classList.contains('expanded')) {
                    closeAll();
                    item.classList.add('expanded');
                    if (btn) btn.setAttribute('aria-expanded', 'true');
                    if (panel) panel.style.maxHeight = panel.scrollHeight + 'px';
                }
                // smooth scroll the item into view
                item.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }

            // initialize expanded states
            items.forEach(item => {
                const btn = item.querySelector('.faq-btn');
                const panel = item.querySelector('.panel');
                if (item.classList.contains('expanded')) {
                    if (panel) panel.style.maxHeight = panel.scrollHeight + 'px';
                    if (btn) btn.setAttribute('aria-expanded', 'true');
                }

                if (btn) {
                    btn.addEventListener('click', () => {
                        if (item.classList.contains('expanded')) {
                            item.classList.remove('expanded');
                            btn.setAttribute('aria-expanded', 'false');
                            if (panel) panel.style.maxHeight = null;
                        } else {
                            openItem(item);
                        }
                    });

                    btn.addEventListener('keydown', (e) => {
                        if (e.key === 'Enter' || e.key === ' ') {
                            e.preventDefault(); btn.click();
                        }
                    });
                }
            });

            // helper to match category (case-insensitive)
            function itemMatchesCategory(item, category) {
                const cats = (item.getAttribute('data-categories') || '').split(',').map(c => c.trim().toLowerCase());
                return cats.includes(category.toLowerCase());
            }

            // clear active state on links
            function clearActiveLinks() {
                helpLinks.forEach(l => l.classList.remove('active'));
            }

            // helper to apply a category filter programmatically
            function applyCategory(category) {
                clearActiveLinks();
                // try to find a matching help link and mark active
                const matchingLink = helpLinks.find(l => (l.getAttribute('data-category') || '').toLowerCase() === category.toLowerCase());
                if (matchingLink) matchingLink.classList.add('active');

                if (!category || category === 'general') {
                    items.forEach(it => it.style.display = 'block');
                    const first = items[0];
                    if (first) openItem(first);
                    return;
                }

                let firstMatch = null;
                items.forEach(it => {
                    if (itemMatchesCategory(it, category)) {
                        it.style.display = 'block';
                        if (!firstMatch) firstMatch = it;
                    } else {
                        it.style.display = 'none';
                    }
                });

                if (firstMatch) {
                    openItem(firstMatch);
                } else {
                    items.forEach(it => it.style.display = 'block');
                    closeAll();
                }
            }

            // handle help link clicks
            helpLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const category = link.getAttribute('data-category') || '';
                    applyCategory(category);
                });
            });

            // optional: if URL contains #panel-N, open that panel
            const hash = window.location.hash;
            if (hash && hash.startsWith('#panel-')) {
                const index = hash.replace('#panel-', '');
                const target = items.find(it => it.getAttribute('data-index') === index);
                if (target) openItem(target);
            }

            // support external links like ?category=whitelabel or #category-whitelabel
            const urlParams = new URLSearchParams(window.location.search);
            const qCategory = urlParams.get('category');
            if (qCategory) {
                applyCategory(qCategory);
            } else if (hash && hash.startsWith('#category-')) {
                const cat = hash.replace('#category-', '');
                if (cat) applyCategory(cat);
            } else if (!(hash && hash.startsWith('#panel-'))) {
                // No explicit panel or category requested — show About Our Company by default
                applyCategory('About Our Company');
            }
        });
    </script>
@endsection
