<!-- Footer Two Area Start -->
<div class="footer__two">
    <img class="footer__two-shape" src="{{ asset('assets/img/shape/footer-two-bg.png') }}" alt="image">
    <div class="container">
        <div class="row gy-4 justify-content-between">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer__two-widget">
                    <div class="footer__two-widget-about">
                        <a href="{{ route('home') }}"><img class="dark-n"  width="60px" 
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
                            <li><a href="{{ route('services') }}"><i class="far fa-chevron-double-right"></i>Service</a>
                            </li>
                            <li><a href="{{ route('faqs') }}"><i class="far fa-chevron-double-right"></i>FAQ</a></li>
                            <li><a href="{{ route('reviews') }}"><i
                                        class="far fa-chevron-double-right"></i>Testimonial</a>
                            </li>
                            <li><a href="{{ route('about') }}"><i class="far fa-chevron-double-right"></i>About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer__two-widget">
                    <h4>Our Services</h4>
                    <div class="footer__two-widget-solution">
                        <ul>
                            <li><a href="{{ route('services') }}"><i class="far fa-chevron-double-right"></i>App
                                    Development</a></li>
                            <li><a href="{{ route('services') }}"><i class="far fa-chevron-double-right"></i>Web
                                    Development</a></li>
                            <li><a href="{{ route('services') }}"><i class="far fa-chevron-double-right"></i>UI & UX
                                    Design</a></li>
                            <li><a href="{{ route('services') }}"><i class="far fa-chevron-double-right"></i>Digital
                                    Marketing</a></li>
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
