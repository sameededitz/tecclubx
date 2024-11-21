<!-- Header Area Start -->
<div class="header__area header__sticky">
    <div class="container">
        <div class="header__area-menubar">
            <div class="header__area-menubar-left">
                   <div class="header__area-menubar-left-logo">
                    <a href="{{ route('home') }}"><img class="dark-n" width="60px"
                            src="{{ isset($options['web_logo']) ? $options['web_logo']->getFirstMediaUrl('info_img') : null }}"
                            alt="image">
                        <span
                            style="font-size: 23px; font-weight:900; color: black;">{{ isset($options['name']) ? $options['name']->value : config('app.name') }}</span>
                    </a>
                </div>
            </div>
            <div class="header__area-menubar-center">
                <div class="header__area-menubar-center-menu menu-responsive">
                    <ul id="mobilemenu">
                        <li class="menu-item-has-children">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('portfolio') }}">Portfolio</a>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('blogs') }}">Blog</a>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-box">
                    <!--<div class="header__area-menubar-right-box-search">-->
                    <!--    <div class="search">-->
                    <!--        <span class="header__area-menubar-right-box-search-icon open"><i-->
                    <!--                class="flaticon-loupe"></i></span>-->
                    <!--    </div>-->
                    <!--    <div class="header__area-menubar-right-box-search-box">-->
                    <!--        <form>-->
                    <!--            <input type="search" placeholder="Search Here.....">-->
                    <!--            <button type="submit"><i class="flaticon-loupe"></i>-->
                    <!--            </button>-->
                    <!--        </form> <span class="header__area-menubar-right-box-search-box-icon"><i-->
                    <!--                class="fal fa-times"></i></span>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="header__area-menubar-right-box-sidebar">
                        <div class="header__area-menubar-right-box-sidebar-popup-icon">
                            <span class="bar-1"></span>
                            <span class="bar-2"></span>
                            <span class="bar-3"></span>
                        </div>
                    </div>
                    <div class="header__area-menubar-right-box-btn">
                        <a class="btn-one" href="{{ route('contact') }}">Get Quote<i class="fas fa-arrow-right"></i></a>
                    </div>
                    <!-- sidebar Menu Start -->
                    <div class="header__area-menubar-right-sidebar-popup">
                        <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                        <div class="header__area-menubar-right-sidebar-popup-logo">
                            <a href="{{ route('home') }}"><img class="dark-n" width="60px"
                                    src="{{ isset($options['web_logo']) ? $options['web_logo']->getFirstMediaUrl('info_img') : null }}"
                                    alt="image">
                                <span
                                    style="font-size: 23px; font-weight:900; color: #fff; margin-left: 10px">{{ isset($options['name']) ? $options['name']->value : config('app.name') }}</span>
                            </a>
                        </div>
                        <p>{{ isset($options['description']) ? $options['description']->value : null }}</p>
                        <div class="header__area-menubar-right-sidebar-popup-contact">
                            <h4 class="mb-30">Get In Touch</h4>
                            <div class="header__area-menubar-right-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-phone-alt icon-animation"></i>
                                </div>
                                <div class="header__area-menubar-right-sidebar-popup-contact-item-content">
                                    <span>Call Now</span>
                                    <h6>
                                        <a
                                            href="tel:{{ isset($options['phone']) ? $options['phone']->value : 'Set Phone' }}">{{ isset($options['phone']) ? $options['phone']->value : 'Set Phone' }}</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="header__area-menubar-right-sidebar-popup-contact-item-content">
                                    <span>Quick Email</span>
                                    <h6>
                                        <a
                                            href="mailto:{{ isset($options['email']) ? $options['email']->value : 'Set Email' }}">
                                            {{ isset($options['email']) ? $options['email']->value : 'Set Email' }}</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="header__area-menubar-right-sidebar-popup-contact-item-content">
                                    <span>Office Address</span>
                                    <h6>
                                        <a
                                            href="{{ isset($options['gmap_link']) ? $options['gmap_link']->value : 'Set Google Map link' }}">
                                            {{ isset($options['address']) ? $options['address']->value : 'Set Address' }}</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="header__area-menubar-right-sidebar-popup-social">
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

                    </div>
                    <div class="sidebar-overlay"></div>
                    <!-- sidebar Menu Start -->
                </div>
                <div class="responsive-menu"></div>
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->
