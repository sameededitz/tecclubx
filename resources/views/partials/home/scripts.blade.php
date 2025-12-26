<!-- Main JS -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Counter Up JS -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Progressbar JS -->
<script src="{{ asset('assets/js/progressbar.min.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Iconify Font js -->
<script src="{{ asset('admin_assets/js/lib/iconify-icon.min.js') }}"></script>
<!-- Swiper Bundle JS -->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!-- Slick JS -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!-- Isotope JS -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!-- Waypoints JS -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<!-- Mean Menu JS -->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Lazy Loading JS -->
<script src="{{ asset('assets/js/lazy-load.js') }}"></script>

{{-- ASO Animation --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Modern Navbar JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all necessary elements
    const mobileToggle = document.getElementById('mobileToggle');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const closeBtn = document.getElementById('closeBtn');
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    // Mobile menu toggle
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openMobileMenu();
        });
    }
    
    // Close button
    if (closeBtn) {
        closeBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            closeMobileMenu();
        });
    }
    
    // Overlay click
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', function() {
            closeMobileMenu();
        });
    }
    
    // Mobile dropdown toggles
    dropdownToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const parent = this.closest('.mobile-dropdown');
            const isActive = parent.classList.contains('active');
            
            // Close all dropdowns
            document.querySelectorAll('.mobile-dropdown').forEach(function(dropdown) {
                dropdown.classList.remove('active');
            });
            
            // Toggle current dropdown
            if (!isActive) {
                parent.classList.add('active');
            }
        });
    });
    
    // Close mobile menu on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 992) {
            closeMobileMenu();
        }
    });
    
    // Close mobile menu on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeMobileMenu();
        }
    });
    
    // Prevent body scroll when mobile menu is open
    function openMobileMenu() {
        mobileToggle.classList.add('active');
        mobileSidebar.classList.add('active');
        mobileOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    function closeMobileMenu() {
        mobileToggle.classList.remove('active');
        mobileSidebar.classList.remove('active');
        mobileOverlay.classList.remove('active');
        document.body.style.overflow = '';
        
        // Close all dropdowns
        document.querySelectorAll('.mobile-dropdown').forEach(function(dropdown) {
            dropdown.classList.remove('active');
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    closeMobileMenu();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
    
    // Navbar scroll effect
    let lastScrollTop = 0;
    const navbar = document.querySelector('.modern-navbar');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.12)';
        } else {
            navbar.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.08)';
        }
        
        lastScrollTop = scrollTop;
    });
});
</script>
