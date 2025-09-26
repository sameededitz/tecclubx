
<div class="footer__two premium-footer">
    <img class="footer__two-shape" src="{{ asset('assets/img/shape/footer-two-bg.png') }}" alt="image">
    <div class="container">
        <div class="row gy-4 justify-content-between">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer__two-widget">
                    <div class="footer__two-widget-about">
                        <a href="{{ route('home') }}"><img class="dark-n" width="60px"
                                src="{{ isset($options['web_logo']) ? $options['web_logo']->getFirstMediaUrl('info_img') : null }}"
                                alt="image">
                            <span
                                style="font-size: 23px; margin-top: -3px; font-weight:900; color: #fff; margin-left: 10px">{{ isset($options['name']) ? $options['name']->value : config('app.name') }}</span>
                        </a>
                        <p>{{ isset($options['description']) ? $options['description']->value : null }}</p>
                        <div class="footer__two-widget-about-location">
                            <div class="footer__two-widget-about-location-item">
                                <div class="footer__two-widget-about-location-item-icon">
                                    <i class="flaticon-telephone-call"></i>
                                </div>
                                <div class="footer__two-widget-about-location-item-info">
                                    <span>Whats'App Number</span>
                                    <a
                                        href="tel:{{ isset($options['phone']) ? $options['phone']->value : 'Set Phone' }}">{{ isset($options['phone']) ? $options['phone']->value : 'Set Phone' }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer__two-widget ml-85">
                    <h4>Quick Link</h4>
                    <div class="footer__two-widget-solution">
                        <ul>
                            <li><a href="{{ route('about') }}"><i class="far fa-chevron-double-right"></i>About Us</a>
                            </li>
                            <li><a href="{{ route('services') }}"><i class="far fa-chevron-double-right"></i>Service</a>
                            </li>
                            <li><a href="{{ route('reviews') }}"><i
                                        class="far fa-chevron-double-right"></i>Testimonial</a>
                            </li>
                            <li><a href="{{ route('faqs') }}"><i class="far fa-chevron-double-right"></i>FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer__two-widget">
                    <h4>Our Services</h4>
                    <div class="footer__two-widget-solution">
                        <ul>
                            <li><a href="{{ route('vpndevelopment') }}"><i class="far fa-chevron-double-right"></i>VPN
                                    App
                                    Development</a></li>
                                    <li><a href="{{ route('whitelabel') }}"><i class="far fa-chevron-double-right"></i>White Label Options</a></li>
                            <li><a href="{{ route('services') }}"><i class="far fa-chevron-double-right"></i>App
                                    Development</a></li>
                            <li><a href="{{ route('services') }}"><i class="far fa-chevron-double-right"></i>Web
                                    Development</a></li>
    
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer__two-widget">
                    <h4>Follow Us</h4>
                    <div class="footer__two-widget-subscribe">
                        <p>The latest news, articles, sent to your inbox weekly.</p>
                        <div class="footer__two-widget-social">
                            <ul>
                                @foreach ($socialLinks as $platform => $url)
                                    @if ($url)
                                        <li>
                                            <a href="{{ $url }}" target="_blank">
                                                <i class="fab fa-{{ $platform }}"></i>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="footer__newsletter">
                            <input type="email" placeholder="Your work email">
                            <button type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__one">
        <div class="container">
            <div class="row justify-content-between copyright__one-container-area">
                <div class="col-xl-5 col-lg-6">
                    <div class="copyright__one-left">
                        <p>© {{ isset($options['name']) ? $options['name']->value : config('app.name') }} 2024 | All
                            Rights Reserved</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="copyright__one-right">

                        <a href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Two Area End -->

<!-- Footer Two Area Start -->
<style>
    /* Premium footer refinements (page-scoped) */
    .premium-footer { background: linear-gradient(180deg,#071127 0%, #0b1730 100%); color: #dbe9ff; position: relative; padding-top: 3.25rem; }
    .premium-footer .footer__two-shape { opacity: 0.06; filter: blur(18px); transform: translateY(-10%); }
    .premium-footer a { color: #cfe4ff; }
    .premium-footer a:hover { color: #fff; text-decoration: none; }
    .premium-footer .footer__two-widget h4 { color: #ffffff; font-weight: 700; margin-bottom: .85rem }
    .premium-footer .footer__two-widget p { color: #b7cbe6; }
    .premium-footer .footer__two-widget-about img { border-radius: 8px; box-shadow: 0 10px 30px rgba(2,6,23,0.6); }
    .premium-footer .footer__two-widget-about span { color:#fff; display:inline-block; vertical-align:middle }

    /* Newsletter */
    .footer__newsletter { display:flex; gap:.5rem; margin-top:.8rem; }
    .footer__newsletter input { flex:1; padding:.62rem .75rem; border-radius:8px; border:1px solid rgba(255,255,255,0.06); background: rgba(255,255,255,0.02); color:#fff }
    .footer__newsletter button { background: linear-gradient(90deg,#0b6efd,#6b7cff); color:#fff; border:none; padding:.62rem .9rem; border-radius:8px }

    /* Social icons */
    .footer__two-widget-social ul { list-style:none; margin:0; padding:0; display:flex; gap:.6rem }
    .footer__two-widget-social li a { display:inline-flex; width:40px; height:40px; align-items:center; justify-content:center; border-radius:10px; background: rgba(255,255,255,0.03); color:#fff; transition: transform .18s ease, background .18s ease }
    .footer__two-widget-social li a:hover { transform: translateY(-4px); background: rgba(255,255,255,0.06) }

    /* Quick links & services */
    .footer__two-widget-solution ul { list-style:none; padding:0; margin:0 }
    .footer__two-widget-solution li { margin-bottom:.65rem }
    .footer__two-widget-solution li i { margin-right:.6rem; color:rgba(255,255,255,0.18) }

    /* Copyright */
    .copyright__one { border-top: 1px solid rgba(255,255,255,0.04); margin-top:1.5rem; padding-top:1.2rem }
    .copyright__one p, .copyright__one a { color: #9fb0cc }

    @media (max-width: 768px) {
        .footer__newsletter { flex-direction:column }
        .footer__newsletter button { width:100% }
    }
</style>
