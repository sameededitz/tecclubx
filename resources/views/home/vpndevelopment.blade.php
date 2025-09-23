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
                        <h1 class="hero-title" style="color: #ffffff" >
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
                      <div class="hero-actions-1">
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
                <div class="col-lg-5 ms-5" data-aos="fade-left">
                    <div class="hero-visual">
                        <!-- Cybersecurity Image with Overlay Effects -->
                        <div class="cybersecurity-image-container">
                            <img src="{{ asset('assets/img/vpndevelopment/vpndevelopment.png') }}" alt="Cybersecurity Developer" class="cybersecurity-image img-fluid">
                            
                            <!-- Overlay Elements -->
                            <div class="cyber-overlay-elements">
                                <!-- Glowing Shield Element -->
                                <div class="cyber-shield">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                
                                <!-- Circuit Lines -->
                                <div class="circuit-line circuit-line-1"></div>
                                <div class="circuit-line circuit-line-2"></div>
                                <div class="circuit-line circuit-line-3"></div>
                                
                                <!-- Connection Points -->
                                <div class="connection-point cp-1"></div>
                                <div class="connection-point cp-2"></div>
                                <div class="connection-point cp-3"></div>
                                <div class="connection-point cp-4"></div>
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
<style>
/* ===== Enhanced VPN App Development Hero Section ===== */

/* Hero Section */
.vpn-dev-hero {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;
    background: linear-gradient(135deg, #0e59f2 0%, #1e3a8a 30%, #1a2341 70%, #0f172a 100%);
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
}

/* Cybersecurity Image Styling */
.cybersecurity-image-container {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    margin-bottom: 60px;
    perspective: 1000px;
    transform-style: preserve-3d;
    transition: transform 0.5s ease;
}

.cybersecurity-image-container:hover {
    transform: translateY(-10px) scale(1.02);
}

.cybersecurity-image {
    width: 100%;
    height: auto;
    border-radius: 16px;
    transition: all 0.5s ease;
    filter: brightness(0.9) contrast(1.1);
}

/* Overlay Elements */
.cyber-overlay-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
}

.cyber-shield {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: rgba(14, 89, 242, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 30px rgba(14, 89, 242, 0.8);
    animation: pulse 2s infinite;
    z-index: 10;
    opacity: 0.9;
}

@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(14, 89, 242, 0.7); }
    70% { box-shadow: 0 0 0 15px rgba(14, 89, 242, 0); }
    100% { box-shadow: 0 0 0 0 rgba(14, 89, 242, 0); }
}

.cyber-shield i {
    color: #ffffff;
    font-size: 36px;
    filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.7));
}

/* Circuit Lines */
.circuit-line {
    position: absolute;
    background: linear-gradient(90deg, transparent, rgba(14, 89, 242, 0.7), transparent);
    height: 2px;
}

.circuit-line-1 {
    top: 30%;
    left: 0;
    width: 100%;
    animation: circuit-glow 3s infinite alternate;
}

.circuit-line-2 {
    top: 60%;
    right: 0;
    width: 70%;
    animation: circuit-glow 2.5s 0.5s infinite alternate;
}

.circuit-line-3 {
    top: 85%;
    left: 0;
    width: 85%;
    animation: circuit-glow 3.5s 1s infinite alternate;
}

@keyframes circuit-glow {
    0% { opacity: 0.3; }
    100% { opacity: 0.9; }
}

/* Connection Points */
.connection-point {
    position: absolute;
    width: 8px;
    height: 8px;
    background-color: #0e59f2;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(14, 89, 242, 1);
}

.cp-1 {
    top: 30%;
    left: 20%;
    animation: blink 2s infinite;
}

.cp-2 {
    top: 30%;
    right: 25%;
    animation: blink 2s 0.7s infinite;
}

.cp-3 {
    top: 60%;
    right: 30%;
    animation: blink 2s 1.2s infinite;
}

.cp-4 {
    top: 85%;
    left: 15%;
    animation: blink 2s 0.3s infinite;
}

@keyframes blink {
    0%, 100% { opacity: 0.3; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.3); }
}

/* Note: Ensure the image file 'cybersecurity-developer.jpg' is placed in the assets/img/vpn/ directory */

.gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(ellipse at top, rgba(59, 130, 246, 0.3) 0%, rgba(37, 99, 235, 0.2) 25%, rgba(30, 58, 138, 0.1) 50%, transparent 70%);
}

.animated-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
}

.shape {
    position: absolute;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 50%;
    animation: floatShape 12s ease-in-out infinite;
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.05);
    z-index: 0;
}

.shape-1 {
    width: 400px;
    height: 400px;
    top: -5%;
    left: -10%;
    animation-delay: 0s;
    background: rgba(59, 130, 246, 0.04);
}

.shape-2 {
    width: 300px;
    height: 300px;
    top: 20%;
    right: -15%;
    animation-delay: 3s;
    background: rgba(250, 204, 21, 0.03);
}

.shape-3 {
    width: 250px;
    height: 250px;
    bottom: 10%;
    left: 15%;
    animation-delay: 6s;
    background: rgba(45, 124, 255, 0.04);
}

.shape-4 {
    width: 180px;
    height: 180px;
    top: 60%;
    right: 25%;
    animation-delay: 9s;
    background: rgba(16, 185, 129, 0.03);
}

.shape-5 {
    width: 150px;
    height: 150px;
    bottom: 30%;
    right: 5%;
    animation-delay: 2s;
    background: rgba(139, 92, 246, 0.03);
}

.hero-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.particle {
    position: absolute;
    width: 3px;
    height: 3px;
    background: rgba(250, 204, 21, 0.8);
    border-radius: 50%;
    animation: particleFloat 15s ease-in-out infinite;
    box-shadow: 0 0 10px rgba(250, 204, 21, 0.5);
}

.particle-1 { top: 20%; left: 10%; animation-delay: 0s; }
.particle-2 { top: 60%; left: 80%; animation-delay: 3s; }
.particle-3 { bottom: 30%; left: 30%; animation-delay: 6s; }
.particle-4 { top: 30%; right: 20%; animation-delay: 9s; }
.particle-5 { bottom: 50%; right: 40%; animation-delay: 12s; }
.particle-6 { top: 80%; left: 60%; animation-delay: 15s; }

.hero-content {
    position: relative;
    z-index: 10;
    color: white;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 60px;
    padding: 12px 24px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 32px;
    animation: slideInDown 1s ease-out;
    position: relative;
    overflow: hidden;
}

.badge-icon {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a2341;
    font-size: 14px;
}

.badge-glow {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    animation: shimmer 3s ease-in-out infinite;
}

.hero-title {
    font-size: clamp(2.8rem, 6vw, 5rem);
    font-weight: 900;
    line-height: 1.1;
    margin-bottom: 32px;
    animation: slideInLeft 1s ease-out 0.3s both;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}

.text-highlight {
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
    animation: glow 2s ease-in-out infinite alternate;
}

.hero-description {
    font-size: 1.3rem;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 40px;
    animation: slideInLeft 1s ease-out 0.5s both;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

.hero-features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-bottom: 48px;
    animation: slideInLeft 1s ease-out 0.7s both;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 16px;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
    font-size: 15px;
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateX(8px);
    color: white;
}

.feature-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, rgba(45, 124, 255, 0.2) 0%, rgba(14, 89, 242, 0.3) 100%);
    border: 1px solid rgba(45, 124, 255, 0.3);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: #2d7cff;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.feature-item:hover .feature-icon {
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 8px 25px rgba(45, 124, 255, 0.4);
}

.hero-actions-1 {
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
    margin-bottom: 56px;
    animation: slideInLeft 1s ease-out 0.9s both;
}

.btn-primary-modern {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    color: white;
    text-decoration: none;
    padding: 20px 40px;
    border-radius: 60px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.4s ease;
    box-shadow: 0 12px 40px rgba(45, 124, 255, 0.4);
    position: relative;
    overflow: hidden;
    border: none;
}

.btn-primary-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.6s;
}

.btn-primary-modern:hover::before {
    left: 100%;
}

.btn-primary-modern:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 60px rgba(45, 124, 255, 0.6);
    color: white;
    text-decoration: none;
}

.btn-secondary-modern {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: rgba(255, 255, 255, 0.1);
    color: white;
    text-decoration: none;
    padding: 20px 40px;
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 60px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.4s ease;
    backdrop-filter: blur(20px);
}

.btn-secondary-modern:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.4);
    color: white;
    text-decoration: none;
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(255, 255, 255, 0.1);
}

.hero-metrics {
    display: flex;
    gap: 48px;
    animation: slideInLeft 1s ease-out 1.1s both;
}

.metric {
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.3s ease;
}

.metric:hover {
    transform: translateY(-5px);
}

.metric-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, rgba(250, 204, 21, 0.2) 0%, rgba(245, 158, 11, 0.3) 100%);
    border: 1px solid rgba(250, 204, 21, 0.3);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #facc15;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.metric:hover .metric-icon {
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    color: #1a2341;
    transform: scale(1.1);
    box-shadow: 0 8px 25px rgba(250, 204, 21, 0.4);
}

.metric-content {
    display: flex;
    flex-direction: column;
}

.metric-number {
    font-size: 2.2rem;
    font-weight: 900;
    color: white;
    line-height: 1;
    animation: countUp 2s ease-out 2s both;
}

.metric-label {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.7);
    margin-top: 4px;
    font-weight: 500;
}

/* Hero Visual */
.hero-visual {
    position: relative;
    z-index: 10;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.phone-mockup {
    position: relative;
    transform: perspective(1200px) rotateY(-15deg) rotateX(5deg);
    transition: transform 0.6s ease;
    animation: phoneFloat 6s ease-in-out infinite;
}

.phone-mockup:hover {
    transform: perspective(1200px) rotateY(-10deg) rotateX(2deg) scale(1.05);
}

.phone-frame {
    width: 280px;
    height: 580px;
    background: linear-gradient(145deg, #1a1a1a 0%, #2d2d2d 100%);
    border-radius: 45px;
    padding: 8px;
    position: relative;
    box-shadow: 
        0 0 0 2px rgba(255, 255, 255, 0.1),
        0 30px 80px rgba(0, 0, 0, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
}

.phone-frame::before {
    content: '';
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 6px;
    background: #333;
    border-radius: 3px;
}

.phone-frame::after {
    content: '';
    position: absolute;
    bottom: 12px;
    left: 50%;
    transform: translateX(-50%);
    width: 40px;
    height: 4px;
    background: #333;
    border-radius: 2px;
}

.phone-screen {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #1a2341 0%, #232f53 100%);
    border-radius: 37px;
    overflow: hidden;
    position: relative;
}

.screen-content {
    padding: 20px;
    height: 100%;
    color: white;
}

.status-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    font-size: 14px;
    font-weight: 600;
}

.indicators {
    display: flex;
    gap: 8px;
}

.app-header {
    text-align: center;
    margin-bottom: 40px;
}

.app-logo {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
    font-size: 24px;
    color: white;
    box-shadow: 0 8px 25px rgba(45, 124, 255, 0.3);
}

.app-header h3 {
    font-size: 20px;
    font-weight: 700;
    margin: 0;
}

.connection-status {
    text-align: center;
    margin-bottom: 30px;
}

.status-circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 40px;
    color: white;
    position: relative;
    box-shadow: 
        0 0 0 4px rgba(34, 197, 94, 0.2),
        0 0 30px rgba(34, 197, 94, 0.3);
}

.pulse-ring {
    position: absolute;
    top: -10px;
    left: -10px;
    right: -10px;
    bottom: -10px;
    border: 2px solid rgba(34, 197, 94, 0.4);
    border-radius: 50%;
    animation: pulse 2s ease-out infinite;
}

.pulse-ring.delay-1 {
    animation-delay: 0.5s;
}

.pulse-ring.delay-2 {
    animation-delay: 1s;
}

.connection-status h4 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 8px;
}

.connection-status p {
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 20px;
}

.connection-speed {
    display: flex;
    justify-content: center;
}

.speed-info {
    display: flex;
    gap: 20px;
    font-size: 12px;
    color: rgba(255, 255, 255, 0.7);
}

.server-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.server-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.server-item.active {
    background: rgba(45, 124, 255, 0.2);
    border: 1px solid rgba(45, 124, 255, 0.3);
}

.server-status {
    width: 8px;
    height: 8px;
    background: #22c55e;
    border-radius: 50%;
    margin-left: auto;
}

/* Floating Elements */
.floating-elements {
    position: absolute;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.floating-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(25px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 13px;
    font-weight: 600;
    color: #1a2341;
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.1),
        0 0 0 1px rgba(255, 255, 255, 0.1);
    animation: floatCard 8s ease-in-out infinite;
    transition: all 0.3s ease;
}

.floating-card:hover {
    transform: scale(1.05);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.card-security {
    top: 15%;
    left: -25%;
    animation-delay: 0s;
    z-index: 20;
}

.card-speed {
    top: 30%;
    right: -28%;
    animation-delay: 2s;
    z-index: 20;
}

.card-global {
    bottom: 35%;
    left: -20%;
    animation-delay: 4s;
    z-index: 20;
}

.card-privacy {
    bottom: 15%;
    right: -22%;
    animation-delay: 6s;
    z-index: 20;
}

.card-icon {
    width: 36px;
    height: 36px;
    border-radius: 12px;
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    box-shadow: 0 6px 20px rgba(45, 124, 255, 0.3);
}

.card-content {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.card-title {
    font-weight: 700;
    color: #1a2341;
}

.card-subtitle {
    font-size: 11px;
    color: #6b7280;
    font-weight: 500;
}

/* Background Elements */
.hero-bg-elements {
    position: absolute;
    width: 100%;
    height: 100%;
    pointer-events: none;
    overflow: hidden;
}

.bg-circle {
    position: absolute;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(45, 124, 255, 0.1) 0%, transparent 70%);
    animation: bgFloat 20s ease-in-out infinite;
}

.bg-circle-1 {
    width: 400px;
    height: 400px;
    top: -10%;
    right: -10%;
    animation-delay: 0s;
}

.bg-circle-2 {
    width: 300px;
    height: 300px;
    bottom: -5%;
    left: -5%;
    animation-delay: 10s;
}

.bg-circle-3 {
    width: 200px;
    height: 200px;
    top: 50%;
    right: 20%;
    animation-delay: 15s;
}

/* Animations */
@keyframes floatShape {
    0%, 100% { 
        transform: translateY(0px) rotate(0deg);
        opacity: 0.7;
    }
    50% { 
        transform: translateY(-40px) rotate(180deg);
        opacity: 1;
    }
}

@keyframes particleFloat {
    0%, 100% {
        transform: translateY(0px) translateX(0px);
        opacity: 0.6;
    }
    25% {
        transform: translateY(-30px) translateX(20px);
        opacity: 1;
    }
    50% {
        transform: translateY(-10px) translateX(-15px);
        opacity: 0.8;
    }
    75% {
        transform: translateY(-25px) translateX(10px);
        opacity: 1;
    }
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

@keyframes glow {
    0%, 100% { text-shadow: 0 0 20px rgba(250, 204, 21, 0.5); }
    50% { text-shadow: 0 0 30px rgba(250, 204, 21, 0.8); }
}

@keyframes slideInDown {
    from {
        opacity: 0;
        transform: translateY(-40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-60px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes countUp {
    from {
        opacity: 0;
        transform: scale(0.3);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes phoneFloat {
    0%, 100% { 
        transform: perspective(1200px) rotateY(-15deg) rotateX(5deg) translateY(0px);
    }
    50% { 
        transform: perspective(1200px) rotateY(-15deg) rotateX(5deg) translateY(-20px);
    }
}

@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    100% {
        transform: scale(1.2);
        opacity: 0;
    }
}

@keyframes floatCard {
    0%, 100% { 
        transform: translateY(0px) rotate(0deg);
        opacity: 0.9;
    }
    33% { 
        transform: translateY(-20px) rotate(2deg);
        opacity: 1;
    }
    66% { 
        transform: translateY(15px) rotate(-2deg);
        opacity: 0.95;
    }
}

@keyframes bgFloat {
    0%, 100% { 
        transform: translateY(0px) scale(1);
        opacity: 0.3;
    }
    50% { 
        transform: translateY(-50px) scale(1.1);
        opacity: 0.5;
    }
}

/* ===== Responsive Design for Hero Section ===== */
@media (max-width: 1199px) {
    .hero-title {
        font-size: clamp(2.2rem, 5vw, 3.8rem);
    }
    
    /* Cybersecurity image responsive */
    .cybersecurity-image-container {
        margin-bottom: 45px;
    }
    
    .cyber-shield {
        width: 70px;
        height: 70px;
    }
    
    .cyber-shield i {
        font-size: 32px;
    }
        height: 540px;
    }
    
    .floating-card {
        font-size: 12px;
        padding: 14px 18px;
    }
    
    .shape-1 {
        width: 250px;
        height: 250px;
    }
    
    .shape-2 {
        width: 170px;
        height: 170px;
    }
}

@media (max-width: 991px) {
    .vpn-dev-hero {
        min-height: auto;
        padding: 80px 0;
    }
    
    .hero-metrics {
        gap: 32px;
        justify-content: center;
    }
    
    /* Cybersecurity image responsive */
    .cybersecurity-image-container {
        margin-top: 40px;
        margin-bottom: 30px;
    }
    
    .floating-elements {
        transform: scale(0.9);
    }
    
    .card-security {
        top: 10%;
        left: -15%;
    }
    
    .card-speed {
        top: 25%;
        right: -20%;
    }
    
    .card-global {
        bottom: 30%;
        left: -10%;
    }
    
    .card-privacy {
        bottom: 12%;
        right: -15%;
    }
        margin-top: 40px;
    }
    
    .floating-card {
        display: none;
    }
    
    .phone-mockup {
        transform: none;
        margin-top: 60px;
    }
    
    .phone-frame {
        width: 240px;
        height: 500px;
    }
    
    .hero-features-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    
    .hero-actions {
        justify-content: center;
    }
    
    .particle {
        display: none;
    }
    
    .bg-circle {
        display: none;
    }
    
    .shape {
        opacity: 0.3;
    }
}

@media (max-width: 767px) {
    .hero-metrics {
        flex-direction: column;
        gap: 24px;
        text-align: center;
    }
    
    .metric {
        justify-content: center;
    }
    
    /* Cybersecurity image responsive */
    .cybersecurity-image-container {
        margin-top: 30px;
        margin-bottom: 20px;
        transform-style: flat;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
    
    .floating-elements {
        display: none;
    }
    
    .circuit-line {
        height: 1px;
    }
    
    .cyber-shield {
        width: 60px;
        height: 60px;
    }
    
    .cyber-shield i {
        font-size: 28px;
    }
    
    .hero-actions {
        flex-direction: column;
        align-items: center;
        gap: 16px;
    }
    
    .btn-primary-modern,
    .btn-secondary-modern {
        width: 100%;
        max-width: 280px;
        justify-content: center;
        padding: 18px 32px;
    }
    
    .hero-description {
        font-size: 1.1rem;
        text-align: center;
    }
    
    .hero-badge {
        margin: 0 auto 24px;
    }
    
    .hero-title {
        text-align: center;
        margin-bottom: 24px;
    }
    
    .phone-frame {
        width: 220px;
        height: 460px;
    }
    
    .hero-features-grid {
        gap: 14px;
    }
    
    .feature-item {
        justify-content: center;
        text-align: center;
    }
}

@media (max-width: 575px) {
    .vpn-dev-hero {
        padding: 60px 0;
    }
    
    .hero-content {
        text-align: center;
    }
    
    .hero-badge {
        font-size: 13px;
        padding: 10px 20px;
    }
    
    .hero-description {
        font-size: 1rem;
        margin-bottom: 32px;
    }
    
    .metric-number {
        font-size: 1.8rem;
    }
    
    /* Cybersecurity image responsive */
    .cybersecurity-image-container {
        margin: 20px 0;
        border-radius: 10px;
    }
    
    .cybersecurity-image {
        border-radius: 10px;
    }
    
    .cyber-shield {
        width: 50px;
        height: 50px;
    }
    
    .cyber-shield i {
        font-size: 22px;
    }
    
    .connection-point {
        width: 6px;
        height: 6px;
    }
    }
    
    .metric-icon {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }
    
    .phone-frame {
        width: 200px;
        height: 420px;
    }
    
    .screen-content {
        padding: 16px;
    }
    
    .status-circle {
        width: 90px;
        height: 90px;
        font-size: 30px;
    }
    
    .app-logo {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
    
    .animated-shapes {
        opacity: 0.5;
    }
}

/* ===== Services Section Improvements ===== */
    height: 60px;
    bottom: 20%;
    left: 80%;
    animation-delay: 4s;
}

.hero-content {
    position: relative;
    z-index: 2;
    color: white;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 50px;
    padding: 10px 24px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 24px;
    animation: slideInDown 0.8s ease-out;
}

.hero-badge i {
    color: #facc15;
    font-size: 16px;
}

.hero-title {
    font-size: clamp(2.5rem, 5vw, 4.5rem);
    font-weight: 900;
    line-height: 1.1;
    margin-bottom: 24px;
    animation: slideInLeft 0.8s ease-out 0.2s both;
}

.text-highlight {
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
}

.hero-description {
    font-size: 1.25rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 32px;
    animation: slideInLeft 0.8s ease-out 0.4s both;
}

.hero-features-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
    margin-bottom: 40px;
    animation: slideInLeft 0.8s ease-out 0.6s both;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
}

.feature-item i {
    color: #22c55e;
    font-size: 18px;
}

.hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 48px;
    animation: slideInLeft 0.8s ease-out 0.8s both;
}

.btn-primary-modern {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    color: white;
    text-decoration: none;
    padding: 18px 36px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    box-shadow: 0 10px 40px rgba(45, 124, 255, 0.4);
    position: relative;
    overflow: hidden;
}

.btn-primary-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.6s;
}

.btn-primary-modern:hover::before {
    left: 100%;
}

.btn-primary-modern:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 50px rgba(45, 124, 255, 0.6);
    color: white;
    text-decoration: none;
}

.btn-secondary-modern {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: transparent;
    color: white;
    text-decoration: none;
    padding: 18px 36px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50px;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.btn-secondary-modern:hover {
    background: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 255, 255, 0.6);
    color: white;
    text-decoration: none;
    transform: translateY(-2px);
}

.hero-metrics {
    display: flex;
    gap: 48px;
    animation: slideInLeft 0.8s ease-out 1s both;
}

.metric {
    text-align: center;
}

.metric-number {
    font-size: 2.8rem;
    font-weight: 900;
    color: #facc15;
    line-height: 1;
    animation: countUp 2s ease-out 1.5s both;
}

.metric-label {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.7);
    margin-top: 8px;
    font-weight: 500;
}

/* Hero Visual */
.hero-visual {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: center;
    align-items: center;
}

.phone-mockup {
    position: relative;
    transform: perspective(1000px) rotateY(-15deg);
    transition: transform 0.3s ease;
}

.phone-mockup:hover {
    transform: perspective(1000px) rotateY(-10deg) scale(1.05);
}

.phone-img {
    width: 300px;
    height: auto;
    filter: drop-shadow(0 30px 60px rgba(0, 0, 0, 0.3));
}

.app-screens {
    position: absolute;
    top: 50px;
    left: 50%;
    transform: translateX(-50%);
    width: 250px;
    height: 500px;
}

.screen {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #1a2341 0%, #232f53 100%);
    border-radius: 25px;
    padding: 20px;
    color: white;
}

.status-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    font-size: 14px;
    font-weight: 600;
}

.indicators {
    display: flex;
    gap: 8px;
}

.app-content {
    text-align: center;
}

.connection-status {
    margin-top: 80px;
}

.status-circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 48px;
    color: white;
    animation: pulse 2s infinite;
}

.floating-elements {
    position: absolute;
    width: 100%;
    height: 100%;
}

.floating-card {
    position: absolute;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 16px;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14px;
    font-weight: 600;
    color: #1a2341;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    animation: floatCard 6s ease-in-out infinite;
}

.card-security {
    top: 10%;
    left: -20%;
    animation-delay: 0s;
}

.card-speed {
    top: 50%;
    right: -25%;
    animation-delay: 2s;
}

.card-global {
    bottom: 15%;
    left: -15%;
    animation-delay: 4s;
}

.floating-card i {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
}

/* Services Overview */
.services-overview {
    background: linear-gradient(135deg, #f8fbfd 0%, #ffffff 100%);
}

.section-header {
    text-align: center;
    margin-bottom: 48px;
}

.section-badge {
    display: inline-block;
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    color: white;
    padding: 8px 24px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 16px;
}

.section-header h2 {
    font-size: clamp(2rem, 4vw, 3.5rem);
    font-weight: 900;
    color: #1a2341;
    margin-bottom: 16px;
    line-height: 1.2;
}

.section-header p {
    font-size: 1.1rem;
    color: #6c757d;
    line-height: 1.7;
    max-width: 600px;
    margin: 0 auto;
}

.service-card {
    background: white;
    border: 1px solid rgba(0, 0, 0, 0.08);
    border-radius: 24px;
    padding: 40px 32px;
    height: 100%;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.service-card:hover::before {
    transform: scaleX(1);
}

.service-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 25px 70px rgba(45, 124, 255, 0.15);
    border-color: rgba(45, 124, 255, 0.2);
}

.service-card.featured {
    background: linear-gradient(135deg, #1a2341 0%, #232f53 100%);
    color: white;
    border: none;
    transform: scale(1.05);
}

.service-card.featured:hover {
    transform: scale(1.05) translateY(-12px);
}

.featured-badge {
    position: absolute;
    top: -1px;
    right: 24px;
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    color: #1a2341;
    padding: 8px 20px;
    border-radius: 0 0 12px 12px;
    font-size: 12px;
    font-weight: 700;
}

.service-icon {
    width: 80px;
    height: 80px;
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.service-icon img {
    width: 60px;
    height: 60px;
    filter: brightness(0) saturate(100%) invert(41%) sepia(96%) saturate(1347%) hue-rotate(215deg) brightness(99%) contrast(97%);
}

.service-card.featured .service-icon img {
    filter: brightness(0) saturate(100%) invert(82%) sepia(81%) saturate(2618%) hue-rotate(3deg) brightness(101%) contrast(97%);
}

.service-card h4 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1a2341;
    margin-bottom: 16px;
    line-height: 1.3;
}

.service-card.featured h4 {
    color: white;
}

.service-card p {
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 24px;
}

.service-card.featured p {
    color: rgba(255, 255, 255, 0.8);
}

.service-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-features li {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
    font-size: 14px;
    color: #6c757d;
}

.service-card.featured .service-features li {
    color: rgba(255, 255, 255, 0.8);
}

.service-features i {
    color: #22c55e;
    font-size: 14px;
}

.service-hover-effect {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.service-card:hover .service-hover-effect {
    transform: scaleX(1);
}

/* Technology Stack Section */
.tech-stack-section {
    background: linear-gradient(135deg, #1a2341 0%, #232f53 100%);
    color: white;
    padding: 100px 0;
}

.tech-content .section-badge {
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    color: #1a2341;
}

.tech-content h2 {
    font-size: 2.8rem;
    font-weight: 900;
    color: white;
    margin-bottom: 24px;
    line-height: 1.2;
}

.tech-content p {
    font-size: 1.15rem;
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.7;
    margin-bottom: 48px;
}

.tech-categories {
    display: flex;
    flex-direction: column;
    gap: 32px;
}

.tech-category h4 {
    font-size: 1.3rem;
    font-weight: 700;
    color: white;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.tech-category i {
    color: #facc15;
    font-size: 20px;
}

.tech-items {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.tech-tag {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.tech-tag:hover {
    background: rgba(45, 124, 255, 0.3);
    border-color: rgba(45, 124, 255, 0.5);
    transform: translateY(-2px);
}

.tech-visual {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 500px;
}

.tech-circle {
    position: relative;
    width: 400px;
    height: 400px;
}

.center-logo {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    color: #1a2341;
    z-index: 2;
}

.orbit {
    position: absolute;
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    animation: rotate 20s linear infinite;
}

.orbit-1 {
    width: 300px;
    height: 300px;
    top: 50px;
    left: 50px;
}

.orbit-2 {
    width: 380px;
    height: 380px;
    top: 10px;
    left: 10px;
    animation-direction: reverse;
    animation-duration: 30s;
}

.tech-icon {
    position: absolute;
    width: 48px;
    height: 48px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: rotate(var(--rotation)) translateX(150px) rotate(calc(-1 * var(--rotation)));
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
}

.orbit-2 .tech-icon {
    transform: rotate(var(--rotation)) translateX(190px) rotate(calc(-1 * var(--rotation)));
}

.tech-icon i {
    font-size: 24px;
}

/* Development Process Section */
.dev-process-section {
    background: linear-gradient(135deg, #f8fbfd 0%, #e5f3ff 100%);
}

.process-timeline {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
}

.timeline-line {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 100%;
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    border-radius: 2px;
}

.process-step {
    display: flex;
    align-items: center;
    margin-bottom: 80px;
    position: relative;
}

.process-step:nth-child(even) {
    flex-direction: row-reverse;
}

.process-step:nth-child(even) .step-content {
    text-align: right;
}

.step-number {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #2d7cff 0%, #0e59f2 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 900;
    color: white;
    z-index: 2;
    box-shadow: 0 8px 24px rgba(45, 124, 255, 0.3);
}

.step-content {
    width: 45%;
    background: white;
    border-radius: 20px;
    padding: 32px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.step-content:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 60px rgba(45, 124, 255, 0.15);
}

.step-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #1a2341;
    margin-bottom: 20px;
}

.step-content h4 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1a2341;
    margin-bottom: 12px;
}

.step-content p {
    color: #6c757d;
    line-height: 1.6;
    margin: 0;
}

/* CTA Section */
.dev-cta-section {
    position: relative;
    background: linear-gradient(135deg, #1a2341 0%, #232f53 100%);
    color: white;
    padding: 100px 0;
    overflow: hidden;
}

.cta-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.particles {
    position: absolute;
    width: 100%;
    height: 100%;
}

.particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: rgba(250, 204, 21, 0.6);
    border-radius: 50%;
    animation: particleFloat 8s ease-in-out infinite;
}

.particle:nth-child(1) {
    top: 20%;
    left: 20%;
    animation-delay: 0s;
}

.particle:nth-child(2) {
    top: 60%;
    left: 80%;
    animation-delay: 2s;
}

.particle:nth-child(3) {
    bottom: 20%;
    left: 60%;
    animation-delay: 4s;
}

.particle:nth-child(4) {
    top: 40%;
    right: 30%;
    animation-delay: 1s;
}

.particle:nth-child(5) {
    bottom: 60%;
    left: 30%;
    animation-delay: 3s;
}

.cta-content {
    position: relative;
    z-index: 2;
    text-align: center;
}

.cta-content h2 {
    font-size: clamp(2.5rem, 4vw, 4rem);
    font-weight: 900;
    margin-bottom: 24px;
    line-height: 1.2;
}

.cta-content p {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.7;
    margin-bottom: 40px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.cta-actions {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 48px;
    flex-wrap: wrap;
}

.btn-lg {
    padding: 20px 40px;
    font-size: 18px;
}

.btn-outline-modern {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: transparent;
    color: white;
    text-decoration: none;
    padding: 20px 40px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50px;
    font-weight: 600;
    font-size: 18px;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.btn-outline-modern:hover {
    background: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 255, 255, 0.6);
    color: white;
    text-decoration: none;
    transform: translateY(-2px);
}

.cta-features {
    display: flex;
    justify-content: center;
    gap: 48px;
    flex-wrap: wrap;
}

.cta-feature {
    display: flex;
    align-items: center;
    gap: 12px;
    color: rgba(255, 255, 255, 0.8);
    font-weight: 500;
}

.cta-feature i {
    color: #facc15;
    font-size: 20px;
}

/* Animations */
@keyframes floatShape {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-30px) rotate(180deg); }
}

@keyframes slideInDown {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes countUp {
    from {
        opacity: 0;
        transform: scale(0.5);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

@keyframes floatCard {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(-15px) rotate(2deg); }
    66% { transform: translateY(10px) rotate(-2deg); }
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes particleFloat {
    0%, 100% {
        transform: translateY(0px) translateX(0px);
        opacity: 0.6;
    }
    50% {
        transform: translateY(-30px) translateX(20px);
        opacity: 1;
    }
}

/* Responsive Design */
@media (max-width: 1199px) {
    .hero-title {
        font-size: 3rem;
    }
    
    .phone-mockup {
        transform: perspective(1000px) rotateY(-10deg);
    }
    
    .tech-circle {
        width: 350px;
        height: 350px;
    }
    
    .orbit-1 {
        width: 250px;
        height: 250px;
        top: 50px;
        left: 50px;
    }
    
    .orbit-2 {
        width: 330px;
        height: 330px;
        top: 10px;
        left: 10px;
    }
}

@media (max-width: 991px) {
    .vpn-dev-hero {
        min-height: auto;
        padding: 80px 0;
    }
    
    .hero-metrics {
        gap: 32px;
    }
    
    .floating-card {
        display: none;
    }
    
    .phone-mockup {
        transform: none;
        margin-top: 40px;
    }
    
    .phone-img {
        width: 250px;
    }
    
    .service-card.featured {
        transform: none;
        margin-bottom: 24px;
    }
    
    .tech-content h2 {
        font-size: 2.2rem;
    }
    
    .tech-circle {
        width: 280px;
        height: 280px;
    }
    
    .orbit-1 {
        width: 200px;
        height: 200px;
        top: 40px;
        left: 40px;
    }
    
    .orbit-2 {
        width: 260px;
        height: 260px;
        top: 10px;
        left: 10px;
    }
    
    .timeline-line {
        left: 30px;
        transform: none;
    }
    
    .process-step {
        flex-direction: row !important;
        padding-left: 80px;
    }
    
    .process-step .step-content {
        width: 100%;
        text-align: left !important;
    }
    
    .step-number {
        left: 30px;
        transform: translateX(-50%);
    }
}

@media (max-width: 767px) {
    .hero-metrics {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    
    .hero-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-primary-modern,
    .btn-secondary-modern {
        width: 100%;
        max-width: 280px;
        justify-content: center;
    }
    
    .cta-features {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-lg {
        width: 100%;
        max-width: 300px;
    }
    
    .tech-categories {
        gap: 24px;
    }
    
    .tech-visual {
        margin-top: 40px;
    }
}

/* Hide tech-visual on mobile devices */
@media (max-width: 720px) {
    .tech-visual {
        display: none !important;
    }
}

@media (max-width: 575px) {
    .section-padding {
        padding: 60px 0;
    }
    
    .service-card {
        padding: 24px 20px;
    }
    
    .step-content {
        padding: 24px;
    }
    
    .dev-cta-section {
        padding: 60px 0;
    }
    
    .tech-stack-section {
        padding: 60px 0;
    }
    
    .phone-img {
        width: 200px;
    }
    
    .app-screens {
        width: 170px;
        height: 350px;
        top: 35px;
    }
}
</style>

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
