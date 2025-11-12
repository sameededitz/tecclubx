<!-- Modern Navbar Start -->
<nav class="modern-navbar">
    <div class="navbar-container">
        <!-- Logo Section -->
        <div class="navbar-logo">
            <a href="{{ route('home') }}">
                @if(isset($options['web_logo']))
                    <img src="{{ $options['web_logo']->getFirstMediaUrl('info_img') }}" alt="Logo" class="logo-image">
                @endif
                <span class="logo-text">{{ isset($options['name']) ? $options['name']->value : config('app.name') }}</span>
            </a>
        </div>

        <!-- Desktop Navigation Menu -->
        <div class="navbar-menu desktop-menu">
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                
                <li class="has-dropdown">
                    <a href="#" class="nav-link">VPN Solutions <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('vpndevelopment') }}">VPN App Development</a></li>
                        <li><a href="{{ route('whitelabel') }}">White Label VPN</a></li>
                    </ul>
                </li>
                
                <li><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                
                <li class="has-dropdown">
                    <a href="#" class="nav-link">About Us <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('about') }}">Our Company</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('reviews') }}">Testimonials</a></li>
                        <li><a href="{{ route('faqs') }}">FAQ</a></li>
                    </ul>
                </li>
                
                <li><a href="{{ route('blogs') }}" class="nav-link">Blog</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
            </ul>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="mobile-menu-toggle" id="mobileToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobileOverlay"></div>

    <!-- Mobile Menu Sidebar -->
    <div class="mobile-menu-sidebar" id="mobileSidebar">
        <div class="mobile-header">
            <div class="mobile-logo">
                <span>{{ isset($options['name']) ? $options['name']->value : config('app.name') }}</span>
            </div>
            <button class="close-btn" id="closeBtn">&times;</button>
        </div>
        
        <ul class="mobile-nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            
            <li class="mobile-dropdown">
                <a href="#" class="dropdown-toggle">VPN Solutions <i class="fas fa-plus"></i></a>
                <ul class="mobile-submenu">
                    <li><a href="{{ route('vpndevelopment') }}">VPN App Development</a></li>
                    <li><a href="{{ route('whitelabel') }}">White Label VPN</a></li>
                </ul>
            </li>
            
            <li><a href="{{ route('services') }}">Services</a></li>
            
            <li class="mobile-dropdown">
                <a href="#" class="dropdown-toggle">About Us <i class="fas fa-plus"></i></a>
                <ul class="mobile-submenu">
                    <li><a href="{{ route('about') }}">Our Company</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('reviews') }}">Testimonials</a></li>
                    <li><a href="{{ route('faqs') }}">FAQ</a></li>
                </ul>
            </li>
            
            <li><a href="{{ route('blogs') }}">Blog</a></li>
            <li><a href="{{ route('contact') }}" class="mobile-contact-btn">Contact Us</a></li>
        </ul>
    </div>
</nav>
<!-- Modern Navbar End -->
