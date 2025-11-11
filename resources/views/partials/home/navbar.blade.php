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
            
            <!-- Desktop Menu -->
            <div class="header__area-menubar-center desktop-menu">
                <div class="header__area-menubar-center-menu menu-responsive">
                    <ul id="desktopmenu">
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
                        <li class="menu-item-has-children">
                            <a href="{{ route('services') }}">Services</a>
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
            
            <!-- Mobile Menu Button -->
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-box">
                    <div class="mobile-hamburger" id="mobileMenuBtn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Separate Mobile Menu -->
<div class="mobile-menu-container" id="mobileMenuContainer">
    <div class="mobile-menu-header">
        <div class="mobile-logo">
            <span>{{ isset($options['name']) ? $options['name']->value : config('app.name') }}</span>
        </div>
        <div class="mobile-close" id="mobileClose">×</div>
    </div>
    <ul class="mobile-menu-list">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="has-submenu">
            <a href="#" class="submenu-trigger">VPN Solutions <span class="arrow">+</span></a>
            <ul class="mobile-submenu">
                <li><a href="{{ route('vpndevelopment') }}">VPN App Development</a></li>
                <li><a href="{{ route('whitelabel') }}">White Label VPN</a></li>
            </ul>
        </li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li class="has-submenu">
            <a href="#" class="submenu-trigger">About Us <span class="arrow">+</span></a>
            <ul class="mobile-submenu">
                                <li><a href="{{ route('about') }}">Our Company</a></li>
                                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                <li><a href="{{ route('reviews') }}">Testimonials</a></li>
                                <li><a href="{{ route('faqs') }}">FAQ</a></li>
                                <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
            </ul>
        </li>
        <li><a href="{{ route('blogs') }}">Blog</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</div>

<!-- Mobile Menu Overlay -->
<div class="mobile-overlay" id="mobileOverlay"></div>

<style>
/* Mobile Hamburger Button */
.mobile-hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
    padding: 10px;
    z-index: 1001;
    position: relative;
}

.mobile-hamburger span {
    width: 25px;
    height: 3px;
    background-color: #333;
    margin: 3px 0;
    transition: 0.3s;
    border-radius: 2px;
}

.mobile-hamburger.active span:nth-child(1) {
    transform: rotate(-45deg) translate(-5px, 6px);
    background-color: #0e59f2;
}

.mobile-hamburger.active span:nth-child(2) {
    opacity: 0;
}

.mobile-hamburger.active span:nth-child(3) {
    transform: rotate(45deg) translate(-5px, -6px);
    background-color: #0e59f2;
}

/* Mobile Menu Container */
.mobile-menu-container {
    position: fixed;
    top: 0;
    right: -100%;
    width: 300px;
    height: 100vh;
    background: #ffffff;
    box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    transition: right 0.4s ease;
    overflow-y: auto;
}

.mobile-menu-container.active {
    right: 0;
}

.mobile-menu-header {
    padding: 20px;
    background: #0e59f2;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.mobile-logo span {
    font-size: 18px;
    font-weight: bold;
}

.mobile-close {
    font-size: 24px;
    cursor: pointer;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
}

.mobile-close:hover {
    background: rgba(255, 255, 255, 0.3);
}

/* Mobile Menu List */
.mobile-menu-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.mobile-menu-list li {
    border-bottom: 1px solid #f0f0f0;
}

.mobile-menu-list li a {
    display: block;
    padding: 15px 20px;
    color: #333;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.mobile-menu-list li a:hover {
    background: #f8f9fa;
    color: #0e59f2;
    padding-left: 30px;
    text-decoration: none;
}

/* Submenu Styles */
.mobile-submenu {
    list-style: none;
    padding: 0;
    margin: 0;
    background: #f8f9fa;
    display: none;
}

.mobile-submenu.active {
    display: block;
}

.mobile-submenu li {
    border-bottom: 1px solid #e9ecef;
}

.mobile-submenu li a {
    padding: 12px 40px;
    font-size: 14px;
    color: #666;
}

.mobile-submenu li a:hover {
    background: #e9ecef;
    color: #0e59f2;
    padding-left: 50px;
}

/* Submenu Arrow */
.submenu-trigger .arrow {
    float: right;
    transition: transform 0.3s ease;
    font-weight: bold;
    color: #999;
}

.has-submenu.active .arrow {
    transform: rotate(45deg);
    color: #0e59f2;
}

/* Mobile Overlay */
.mobile-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.mobile-overlay.active {
    opacity: 1;
    visibility: visible;
}

/* Responsive Behavior */
@media (max-width: 991px) {
    .desktop-menu {
        display: none !important;
    }
    
    .mobile-hamburger {
        display: flex !important;
    }
}

@media (min-width: 992px) {
    .desktop-menu {
        display: block !important;
    }
    
    .mobile-hamburger {
        display: none !important;
    }
    
    .mobile-menu-container {
        display: none !important;
    }
    
    .mobile-overlay {
        display: none !important;
    }
}

/* Container Layout Fix */
.header__area-menubar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header__area-menubar-left {
    flex: 0 0 auto;
}

.header__area-menubar-center {
    flex: 1 1 auto;
    text-align: center;
}

.header__area-menubar-right {
    flex: 0 0 auto;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Mobile menu script loaded!');
    
    // Get elements
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenuContainer = document.getElementById('mobileMenuContainer');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const mobileClose = document.getElementById('mobileClose');
    const submenuTriggers = document.querySelectorAll('.submenu-trigger');
    
    console.log('📱 Elements found:', {
        button: !!mobileMenuBtn,
        container: !!mobileMenuContainer,
        overlay: !!mobileOverlay,
        close: !!mobileClose,
        triggers: submenuTriggers.length
    });
    
    // Open mobile menu
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('🍔 Hamburger clicked!');
            openMobileMenu();
        });
    }
    
    // Close mobile menu
    if (mobileClose) {
        mobileClose.addEventListener('click', function() {
            console.log('❌ Close button clicked!');
            closeMobileMenu();
        });
    }
    
    // Close on overlay click
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', function() {
            console.log('🖱️ Overlay clicked!');
            closeMobileMenu();
        });
    }
    
    // Submenu toggles
    submenuTriggers.forEach(function(trigger, index) {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('📂 Submenu ' + index + ' clicked!');
            
            const parentLi = this.closest('.has-submenu');
            const submenu = parentLi.querySelector('.mobile-submenu');
            
            if (submenu) {
                // Close other submenus
                document.querySelectorAll('.has-submenu').forEach(function(item) {
                    if (item !== parentLi) {
                        item.classList.remove('active');
                        const otherSubmenu = item.querySelector('.mobile-submenu');
                        if (otherSubmenu) {
                            otherSubmenu.classList.remove('active');
                        }
                    }
                });
                
                // Toggle current submenu
                parentLi.classList.toggle('active');
                submenu.classList.toggle('active');
                
                console.log('📂 Submenu toggled!');
            }
        });
    });
    
    // Close on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 992) {
            closeMobileMenu();
        }
    });
    
    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeMobileMenu();
        }
    });
    
    function openMobileMenu() {
        console.log('🟢 Opening mobile menu...');
        
        mobileMenuBtn.classList.add('active');
        mobileMenuContainer.classList.add('active');
        mobileOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        console.log('✅ Mobile menu opened successfully!');
    }
    
    function closeMobileMenu() {
        console.log('🔴 Closing mobile menu...');
        
        mobileMenuBtn.classList.remove('active');
        mobileMenuContainer.classList.remove('active');
        mobileOverlay.classList.remove('active');
        document.body.style.overflow = '';
        
        // Close all submenus
        document.querySelectorAll('.has-submenu').forEach(function(item) {
            item.classList.remove('active');
            const submenu = item.querySelector('.mobile-submenu');
            if (submenu) {
                submenu.classList.remove('active');
            }
        });
        
        console.log('✅ Mobile menu closed successfully!');
    }
});
</script>
<!-- Header Area End -->
