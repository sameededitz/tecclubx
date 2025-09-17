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
                            <a class="cursor-pointer">Vpn Solutions</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('vpndevelopment') }}">VPN App Development</a></li>
                                <li><a href="{{ route('whitelabel') }}">White Label VPN</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a class="cursor-pointer">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('about') }}">Our Company</a></li>
                                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                <li><a href="{{ route('reviews') }}">Testimonials</a></li>
                                <li><a href="{{ route('faqs') }}">Faq</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('blogs') }}">Blog</a>
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Header Area End -->
