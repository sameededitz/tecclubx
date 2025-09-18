@extends('layout.home-layout')

@section('title')
    VPN App Development | TecClub Technology
@endsection

@section('home_content')
    <!-- Hero Section Start -->
    <section class="vpn-dev-hero">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="hero-content">
                        <div class="hero-badge mt-5">
                            <div class="badge-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <span>Enterprise VPN Development</span>
                            <div class="badge-glow"></div>
                        </div>
                        <h1 class="hero-title" style="color: #ffffff">
                            Build Next-Gen 
                            <span class="text-highlight">VPN Applications</span> 
                            <br>That Users Love
                        </h1>
                        <p class="hero-description">
                            Transform your vision into a powerful VPN application with our expert development team. 
                            We create secure, fast, and user-friendly VPN apps using cutting-edge technologies 
                            like Flutter, React Native, and native development.
                        </p>
                        <div class="hero-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <span>Cross-platform development</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <span>Military-grade security</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-palette"></i>
                                </div>
                                <span>Custom UI/UX design</span>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <span>Fast performance</span>
                            </div>
                        </div>
                      <div class="hero-actions">
                            <a href="#contact" class="btn-primary-modern">
                                <span>Start Your VPN Business</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="#demo" class="btn-secondary-modern">
                                <i class="fas fa-play-circle"></i>
                                <span>View Live Demo</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="hero-visual">
                        <!-- Phone Mockup with CSS Design -->
                        <div class="phone-mockup">
                            <div class="phone-frame">
                                <div class="phone-screen">
                                    <div class="screen-content">
                                        <div class="status-bar">
                                            <span class="time">9:41</span>
                                            <div class="indicators">
                                                <i class="fas fa-signal"></i>
                                                <i class="fas fa-wifi"></i>
                                                <i class="fas fa-battery-full"></i>
                                            </div>
                                        </div>
                                        <div class="app-header">
                                            <div class="app-logo">
                                                <i class="fas fa-shield-alt"></i>
                                            </div>
                                            <h3>SecureVPN</h3>
                                        </div>
                                        <div class="connection-status">
                                            <div class="status-circle connected">
                                                <i class="fas fa-shield-alt"></i>
                                                <div class="pulse-ring"></div>
                                                <div class="pulse-ring delay-1"></div>
                                                <div class="pulse-ring delay-2"></div>
                                            </div>
                                            <h4>Connected</h4>
                                            <p><i class="fas fa-map-marker-alt"></i> New York, USA</p>
                                            <div class="connection-speed">
                                                <div class="speed-info">
                                                    <span><i class="fas fa-arrow-down"></i> 45.2 Mbps</span>
                                                    <span><i class="fas fa-arrow-up"></i> 38.1 Mbps</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="server-list">
                                            <div class="server-item active">
                                                <i class="fas fa-flag-usa"></i>
                                                <span>United States</span>
                                                <div class="server-status"></div>
                                            </div>
                                            <div class="server-item">
                                                <i class="fas fa-flag"></i>
                                                <span>United Kingdom</span>
                                                <div class="server-status"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Feature Cards -->
                        <div class="floating-elements">
                            <div class="floating-card card-security">
                                <div class="card-icon">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="card-content">
                                    <span class="card-title">AES-256</span>
                                    <span class="card-subtitle">Encryption</span>
                                </div>
                            </div>
                            <div class="floating-card card-speed">
                                <div class="card-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Ultra-Fast</span>
                                    <span class="card-subtitle">Servers</span>
                                </div>
                            </div>
                            <div class="floating-card card-global">
                                <div class="card-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Global</span>
                                    <span class="card-subtitle">Network</span>
                                </div>
                            </div>
                            <div class="floating-card card-privacy">
                                <div class="card-icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Privacy</span>
                                    <span class="card-subtitle">Protected</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Background Elements -->
                        <div class="hero-bg-elements">
                            <div class="bg-circle bg-circle-1"></div>
                            <div class="bg-circle bg-circle-2"></div>
                            <div class="bg-circle bg-circle-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Overview Section Start -->
    <section class="services-overview section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="section-header" data-aos="fade-up">
                        <span class="section-badge">Our Expertise</span>
                        <h2>Complete VPN App Development Solutions</h2>
                        <p>We deliver end-to-end VPN application development services with cutting-edge technology, 
                        robust security, and exceptional user experience across all platforms.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 mt-5">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Cross-Platform Development</h4>
                        <p>Native iOS and Android apps plus cross-platform solutions using Flutter and React Native for maximum reach and performance.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Native iOS & Android</li>
                            <li><i class="fas fa-check"></i> Flutter & React Native</li>
                            <li><i class="fas fa-check"></i> Unified codebase</li>
                        </ul>
                        <div class="service-hover-effect"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card featured">
                        <div class="featured-badge">Most Popular</div>
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Security Implementation</h4>
                        <p>Military-grade security protocols and encryption standards to protect user data and ensure privacy compliance.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> AES-256 Encryption</li>
                            <li><i class="fas fa-check"></i> OpenVPN Protocol</li>
                            <li><i class="fas fa-check"></i> Kill Switch Feature</li>
                        </ul>
                        <div class="service-hover-effect"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>UI/UX Design</h4>
                        <p>Intuitive and modern interface designs that provide excellent user experience and drive engagement.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Modern UI Design</li>
                            <li><i class="fas fa-check"></i> User Research</li>
                            <li><i class="fas fa-check"></i> Prototype Testing</li>
                        </ul>
                        <div class="service-hover-effect"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h4>Backend Development</h4>
                        <p>Scalable server infrastructure and robust APIs to handle millions of users with high performance.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Cloud Infrastructure</li>
                            <li><i class="fas fa-check"></i> Load Balancing</li>
                            <li><i class="fas fa-check"></i> API Development</li>
                        </ul>
                        <div class="service-hover-effect"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Analytics & Monitoring</h4>
                        <p>Advanced analytics and monitoring solutions to track app performance and user behavior insights.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Real-time Analytics</li>
                            <li><i class="fas fa-check"></i> Performance Monitoring</li>
                            <li><i class="fas fa-check"></i> User Insights</li>
                        </ul>
                        <div class="service-hover-effect"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Support & Maintenance</h4>
                        <p>24/7 technical support and regular updates to keep your VPN app running smoothly and securely.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> 24/7 Support</li>
                            <li><i class="fas fa-check"></i> Regular Updates</li>
                            <li><i class="fas fa-check"></i> Security Patches</li>
                        </ul>
                        <div class="service-hover-effect"></div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <!-- Services Overview Section End -->

    <!-- Technology Stack Section Start -->
    <section class="tech-stack-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="tech-content">
                        <span class="section-badge">Technology Excellence</span>
                        <h2>Cutting-Edge Development Stack</h2>
                        <p>We leverage the latest technologies and frameworks to build high-performance, 
                        secure, and scalable VPN applications that meet enterprise standards.</p>
                        
                        <div class="tech-categories">
                            <div class="tech-category">
                                <h4><i class="fas fa-mobile-alt"></i> Mobile Development</h4>
                                <div class="tech-items">
                                    <span class="tech-tag">Flutter</span>
                                    <span class="tech-tag">React Native</span>
                                    <span class="tech-tag">Swift</span>
                                    <span class="tech-tag">Kotlin</span>
                                </div>
                            </div>
                            
                            <div class="tech-category">
                                <h4><i class="fas fa-server"></i> Backend & Infrastructure</h4>
                                <div class="tech-items">
                                    <span class="tech-tag">Node.js</span>
                                    <span class="tech-tag">Python</span>
                                    <span class="tech-tag">AWS</span>
                                    <span class="tech-tag">Docker</span>
                                </div>
                            </div>
                            
                            <div class="tech-category">
                                <h4><i class="fas fa-shield-alt"></i> Security Protocols</h4>
                                <div class="tech-items">
                                    <span class="tech-tag">WireGuard</span>
                                    <span class="tech-tag">OpenVPN</span>
                                    <span class="tech-tag">IKEv2</span>
                                    <span class="tech-tag">AES-256</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="tech-visual">
                        <div class="tech-circle">
                            <div class="center-logo">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="orbit orbit-1">
                                <div class="tech-icon" style="--rotation: 0deg;">
                                    <i class="fab fa-flutter" style="color: #02569B;"></i>
                                </div>
                                <div class="tech-icon" style="--rotation: 90deg;">
                                    <i class="fab fa-react" style="color: #61DAFB;"></i>
                                </div>
                                <div class="tech-icon" style="--rotation: 180deg;">
                                    <i class="fab fa-swift" style="color: #FA7343;"></i>
                                </div>
                                <div class="tech-icon" style="--rotation: 270deg;">
                                    <i class="fab fa-android" style="color: #3DDC84;"></i>
                                </div>
                            </div>
                            <div class="orbit orbit-2">
                                <div class="tech-icon" style="--rotation: 45deg;">
                                    <i class="fab fa-node-js" style="color: #339933;"></i>
                                </div>
                                <div class="tech-icon" style="--rotation: 135deg;">
                                    <i class="fab fa-python" style="color: #3776AB;"></i>
                                </div>
                                <div class="tech-icon" style="--rotation: 225deg;">
                                    <i class="fab fa-aws" style="color: #FF9900;"></i>
                                </div>
                                <div class="tech-icon" style="--rotation: 315deg;">
                                    <i class="fab fa-docker" style="color: #2496ED;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Technology Stack Section End -->

    <!-- Development Process Section Start -->
    <section class="dev-process-section section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="section-header" data-aos="fade-up">
                        <span class="section-badge">Our Process</span>
                        <h2>From Concept to Launch in 6 Steps</h2>
                        <p>Our proven development methodology ensures your VPN app is delivered on time, 
                        within budget, and exceeds your expectations.</p>
                    </div>
                </div>
            </div>
            
            <div class="process-timeline mt-5">
                <div class="timeline-line"></div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Discovery & Planning</h4>
                        <p>We analyze your requirements, target audience, and business goals to create a comprehensive development strategy.</p>
                    </div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <h4>Design & Prototyping</h4>
                        <p>Our designers create intuitive wireframes and interactive prototypes to visualize your app's user experience.</p>
                    </div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h4>Development & Integration</h4>
                        <p>Our expert developers build your VPN app using cutting-edge technologies and integrate all required security features.</p>
                    </div>
                    <div class="step-number">03</div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-bug"></i>
                        </div>
                        <h4>Testing & Quality Assurance</h4>
                        <p>Comprehensive testing including security audits, performance testing, and user acceptance testing across all platforms.</p>
                    </div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="500">
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4>Deployment & Launch</h4>
                        <p>We handle app store submissions, server deployment, and ensure a smooth launch of your VPN application.</p>
                    </div>
                    <div class="step-number">05</div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="600">
                    <div class="step-number">06</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Support & Maintenance</h4>
                        <p>Ongoing support, regular updates, security patches, and feature enhancements to keep your app competitive.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Development Process Section End -->

    <!-- CTA Section Start -->
    <section class="dev-cta-section mb-5">
        <div class="cta-background">
            <div class="particles">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="cta-content" data-aos="fade-up">
                        <h2 style="color: #ffffff">Ready to Build Your VPN App?</h2>
                        <p>Let's discuss your project and create a powerful VPN application that stands out in the market. 
                        Get a free consultation and project estimate today.</p>
                        <div class="cta-actions">
                            <a href="#contact" class="btn-primary-modern btn-lg">
                                <span>Get Free Consultation</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="#portfolio" class="btn-outline-modern btn-lg">
                                <i class="fas fa-eye"></i>
                                <span>View Our Work</span>
                            </a>
                        </div>
                        <div class="cta-features">
                            <div class="cta-feature">
                                <i class="fas fa-clock"></i>
                                <span>Fast Delivery</span>
                            </div>
                            <div class="cta-feature">
                                <i class="fas fa-shield-alt"></i>
                                <span>100% Secure</span>
                            </div>
                            <div class="cta-feature">
                                <i class="fas fa-award"></i>
                                <span>Quality Guaranteed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section End -->

    
    <!-- Subscribe Area End -->
    <div class="subscribe__one mt-5">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.service-card, .step-content, .tech-category').forEach(el => {
        observer.observe(el);
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Enhanced card interactions
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-12px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            if (this.classList.contains('featured')) {
                this.style.transform = 'scale(1.05)';
            } else {
                this.style.transform = 'translateY(0) scale(1)';
            }
        });
    });
    
    // Metrics counter animation
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target + (element.dataset.suffix || '');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start) + (element.dataset.suffix || '');
            }
        }, 16);
    }
    
    // Trigger counter animation when metrics are visible
    const metricsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const number = entry.target;
                const target = parseInt(number.textContent);
                number.dataset.suffix = number.textContent.replace(/[0-9]/g, '');
                animateCounter(number, target);
                metricsObserver.unobserve(number);
            }
        });
    });
    
    document.querySelectorAll('.metric-number').forEach(metric => {
        metricsObserver.observe(metric);
    });
    
    // Tech orbit interaction
    const techIcons = document.querySelectorAll('.tech-icon');
    techIcons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform += ' scale(1.2)';
            this.style.zIndex = '10';
        });
        
        icon.addEventListener('mouseleave', function() {
            this.style.transform = this.style.transform.replace(' scale(1.2)', '');
            this.style.zIndex = '1';
        });
    });
    
    // Enhanced button effects
    const buttons = document.querySelectorAll('.btn-primary-modern, .btn-secondary-modern');
    buttons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Create ripple effect
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
    
    // Add ripple effect styles
    const rippleStyles = `
        <style>
        .btn-primary-modern, .btn-secondary-modern {
            position: relative;
            overflow: hidden;
        }
        
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: scale(0);
            animation: rippleEffect 0.6s linear;
            pointer-events: none;
        }
        
        @keyframes rippleEffect {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .animate-in {
            animation: slideInUp 0.6s ease-out forwards;
        }
        
        .service-card,
        .step-content,
        .tech-category {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .service-card.animate-in,
        .step-content.animate-in,
        .tech-category.animate-in {
            opacity: 1;
            transform: translateY(0);
        }
        </style>
    `;
    
    document.head.insertAdjacentHTML('beforeend', rippleStyles);
});
</script>
@endsection
<!-- How We Develop VPNs In 3 Simple Steps Section End -->
