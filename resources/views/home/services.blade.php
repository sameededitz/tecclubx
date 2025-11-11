@extends('layout.home-layout')
@section('title')
    Services | TecClub- Technology
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
                        <h2>Services</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Service
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

      <!-- Premium Services Area Start -->
    <div class="premium-services-section section-padding">
        <div class="services-background">
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="premium-section-header">
                        <div class="section-badge">
                            <i class="fas fa-cogs"></i>
                            <span>Our Services</span>
                        </div>
                        <h2 class="section-title">Premium Digital Solutions</h2>
                        <p class="section-description">
                            We deliver cutting-edge technology solutions that transform businesses and drive growth. 
                            From innovative mobile apps to robust web platforms, our expert team creates digital 
                            experiences that captivate users and achieve your business objectives.
                        </p>
                    </div>
                </div>
            </div>
            <div class="premium-services-grid">
                <div class="premium-service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon mobile-app-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Mobile App Development</h4>
                            <p class="service-description">
                                Transform your ideas into powerful mobile experiences. We craft intuitive iOS and Android 
                                applications that engage users and drive business growth with cutting-edge technology.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Native & Cross-Platform</li>
                                <li><i class="fas fa-check"></i> UI/UX Optimization</li>
                                <li><i class="fas fa-check"></i> App Store Deployment</li>
                            </ul>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>

                <div class="premium-service-card featured" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i>
                        <span>Most Popular</span>
                    </div>
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon web-dev-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Web Development</h4>
                            <p class="service-description">
                                Build robust, scalable web solutions that captivate users and drive conversions. From 
                                e-commerce platforms to custom applications, we deliver excellence in every line of code.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Responsive Design</li>
                                <li><i class="fas fa-check"></i> Modern Frameworks</li>
                                <li><i class="fas fa-check"></i> Performance Optimized</li>
                            </ul>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>

                <div class="premium-service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon design-icon">
                                <i class="fas fa-palette"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">UI & UX Design</h4>
                            <p class="service-description">
                                Create stunning interfaces that users love. Our design team crafts beautiful, intuitive 
                                experiences that enhance user engagement and drive meaningful interactions.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> User Research</li>
                                <li><i class="fas fa-check"></i> Prototype Design</li>
                                <li><i class="fas fa-check"></i> Visual Identity</li>
                            </ul>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>

                <div class="premium-service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon marketing-icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Digital Marketing</h4>
                            <p class="service-description">
                                Amplify your brand's digital presence with strategic marketing solutions. We drive 
                                targeted traffic, boost engagement, and deliver measurable results across all channels.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> SEO Optimization</li>
                                <li><i class="fas fa-check"></i> Social Media</li>
                                <li><i class="fas fa-check"></i> PPC Campaigns</li>
                            </ul>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>

                <div class="premium-service-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon ecommerce-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">E-Commerce Solutions</h4>
                            <p class="service-description">
                                Build powerful online stores that convert visitors into customers. Our e-commerce 
                                solutions integrate seamlessly with your business operations and scale with your growth.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Custom Platforms</li>
                                <li><i class="fas fa-check"></i> Payment Integration</li>
                                <li><i class="fas fa-check"></i> Inventory Management</li>
                            </ul>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>

                <div class="premium-service-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card-inner">
                        <div class="service-icon-wrapper">
                            <div class="service-icon graphics-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <div class="icon-glow"></div>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Graphics Design</h4>
                            <p class="service-description">
                                Bring your brand to life with stunning visual designs. From logos to marketing materials, 
                                we create graphics that capture attention and communicate your brand's unique story.
                            </p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Brand Identity</li>
                                <li><i class="fas fa-check"></i> Marketing Materials</li>
                                <li><i class="fas fa-check"></i> Digital Assets</li>
                            </ul>
                        </div>
                        <div class="card-decoration">
                            <div class="decoration-element element-1"></div>
                            <div class="decoration-element element-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Two Area End -->

    <!-- Service Process Section Start -->
    <div class="service-work-process section-padding" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-xl-8 col-lg-9">
                    <div class="work-section-header" data-aos="fade-up">
                        <div class="section-badge-work">
                            <i class="fas fa-cogs"></i>
                            <span>OUR PROCESS</span>
                        </div>
                        <h2 class="work-title">How We Work</h2>
                        <p class="work-description">
                            Our Streamlined Development Process Ensures Quality Delivery And Client<br>Satisfaction At Every Step
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="work-process-grid">
                <div class="work-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="work-step-inner">
                        <div class="work-number-wrapper">
                            <div class="work-number">01</div>
                        </div>
                        <div class="work-icon-box">
                            <div class="work-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                        </div>
                        <div class="work-content">
                            <h4>Discovery</h4>
                            <p>We Analyze Your Requirements, Understand Your Business Goals, And Define Project Scope</p>
                            <ul class="work-points">
                                <li><i class="fas fa-check-circle"></i> Requirement Analysis</li>
                                <li><i class="fas fa-check-circle"></i> Market Research</li>
                                <li><i class="fas fa-check-circle"></i> Goal Setting</li>
                            </ul>
                        </div>
                        <div class="work-step-decoration">
                            <div class="decoration-circle circle-1"></div>
                            <div class="decoration-circle circle-2"></div>
                        </div>
                    </div>
                </div>

                <div class="work-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="work-step-inner">
                        <div class="work-number-wrapper">
                            <div class="work-number">02</div>
                        </div>
                        <div class="work-icon-box">
                            <div class="work-icon">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                        </div>
                        <div class="work-content">
                            <h4>Planning</h4>
                            <p>We Create Detailed Project Plans, Wireframes, And Choose The Best Technology Stack</p>
                            <ul class="work-points">
                                <li><i class="fas fa-check-circle"></i> Project Planning</li>
                                <li><i class="fas fa-check-circle"></i> UI/UX Design</li>
                                <li><i class="fas fa-check-circle"></i> Technology Selection</li>
                            </ul>
                        </div>
                        <div class="work-step-decoration">
                            <div class="decoration-circle circle-1"></div>
                            <div class="decoration-circle circle-2"></div>
                        </div>
                    </div>
                </div>

                <div class="work-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="work-step-inner">
                        <div class="work-number-wrapper">
                            <div class="work-number">03</div>
                        </div>
                        <div class="work-icon-box">
                            <div class="work-icon">
                                <i class="fas fa-code"></i>
                            </div>
                        </div>
                        <div class="work-content">
                            <h4>Development</h4>
                            <p>Our Expert Developers Bring Your Ideas To Life With Clean, Scalable, And Efficient Code</p>
                            <ul class="work-points">
                                <li><i class="fas fa-check-circle"></i> Clean Coding</li>
                                <li><i class="fas fa-check-circle"></i> Quality Testing</li>
                                <li><i class="fas fa-check-circle"></i> Regular Updates</li>
                            </ul>
                        </div>
                        <div class="work-step-decoration">
                            <div class="decoration-circle circle-1"></div>
                            <div class="decoration-circle circle-2"></div>
                        </div>
                    </div>
                </div>

                <div class="work-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="work-step-inner">
                        <div class="work-number-wrapper">
                            <div class="work-number">04</div>
                        </div>
                        <div class="work-icon-box">
                            <div class="work-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                        </div>
                        <div class="work-content">
                            <h4>Launch</h4>
                            <p>We Deploy Your Project And Provide Ongoing Support To Ensure Everything Runs Smoothly</p>
                            <ul class="work-points">
                                <li><i class="fas fa-check-circle"></i> Deployment</li>
                                <li><i class="fas fa-check-circle"></i> Testing & QA</li>
                                <li><i class="fas fa-check-circle"></i> Ongoing Support</li>
                            </ul>
                        </div>
                        <div class="work-step-decoration">
                            <div class="decoration-circle circle-1"></div>
                            <div class="decoration-circle circle-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Process Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us section-padding" style="background-color: #F4F7FB;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title">
                        <span class="subtitle-one">Why Choose Us</span>
                        <h2>Why We Are The Best Choice</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-xl-6 col-lg-12">
                    <div class="why-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Proven Expertise</h5>
                                <p>Years of experience delivering successful projects across various industries and technologies</p>
                            </div>
                        </div>
                        <div class="feature-item" >
                            <div class="feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Timely Delivery</h5>
                                <p>We respect deadlines and ensure your project is completed on time without compromising quality</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Quality Assurance</h5>
                                <p>Rigorous testing and quality control processes ensure bug-free and high-performance solutions</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h5>24/7 Support</h5>
                                <p>Round-the-clock technical support and maintenance to keep your systems running smoothly</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div class="stat-number" data-count="70">70</div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <div class="stat-number" data-count="53">53</div>
                            <div class="stat-label">Happy Clients</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="stat-number" data-count="7">7</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-number" data-count="12">12</div>
                            <div class="stat-label">Team Members</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media (max-width: 770px) {
                .feature-item {
                    flex-direction: row !important;
                    text-align: left !important;
                    gap: 15px !important;
                    align-items: flex-start !important;
                }
                
                .feature-icon {
                    margin: 0 !important;
                    min-width: 60px !important;
                    width: 60px !important;
                    height: 60px !important;
                    display: flex !important;
                    align-items: center !important;
                    justify-content: center !important;
                }
                
                .stat-icon {
                    margin: 0 auto !important;
                    width: 60px !important;
                    height: 60px !important;
                    font-size: 24px !important;
                }
            }
        </style>
    </div>
    <!-- Why Choose Us Section End -->


@endsection
@section('home_scripts')
<style>
/* How We Work Section - New Modern Design */
.service-work-process {
    position: relative;
    overflow: hidden;
}

.work-section-header {
    margin-bottom: 60px;
}

.section-badge-work {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: white;
    border: 2px solid #0E59F2;
    border-radius: 50px;
    padding: 10px 25px;
    margin-bottom: 25px;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    color: #0E59F2;
}

.section-badge-work i {
    font-size: 16px;
}

.work-title {
    font-size: 3rem;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 20px;
    line-height: 1.2;
}

.work-description {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #666;
}

.work-process-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.work-step {
    position: relative;
}

.work-step-inner {
    background: white;
    border-radius: 20px;
    padding: 40px 30px;
    height: 100%;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
    border: 2px solid transparent;
}

.work-step:hover .work-step-inner {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(14, 89, 242, 0.15);
    border-color: #0E59F2;
}

.work-number-wrapper {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 10;
}

.work-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: 800;
    color: #1a1a1a;
    box-shadow: 0 8px 20px rgba(251, 191, 36, 0.4);
    transition: all 0.3s ease;
}

.work-step:hover .work-number {
    transform: scale(1.1) rotate(-5deg);
}

.work-icon-box {
    margin: 80px 0 30px;
    display: flex;
    justify-content: center;
}

.work-icon {
    width: 90px;
    height: 90px;
    background: linear-gradient(135deg, #0e59f2 0%, #2d7cff 100%);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 40px;
    color: white;
    box-shadow: 0 10px 30px rgba(14, 89, 242, 0.3);
    transition: all 0.4s ease;
}

.work-step:hover .work-icon {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 15px 40px rgba(14, 89, 242, 0.5);
}

.work-content {
    text-align: center;
}

.work-content h4 {
    font-size: 24px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 15px;
}

.work-content p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
    margin-bottom: 25px;
}

.work-points {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: left;
}

.work-points li {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 15px;
    margin-bottom: 8px;
    background: #f8f9fa;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 600;
    color: #1a1a1a;
    transition: all 0.3s ease;
}

.work-points li:hover {
    background: #e9ecef;
    transform: translateX(5px);
}

.work-points li i {
    color: #0E59F2;
    font-size: 14px;
}

.work-step-decoration {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
    overflow: hidden;
    border-radius: 20px;
}

.decoration-circle {
    position: absolute;
    background: linear-gradient(135deg, rgba(14, 89, 242, 0.1) 0%, rgba(251, 191, 36, 0.1) 100%);
    border-radius: 50%;
    animation: floatDecoration 8s ease-in-out infinite;
}

.decoration-circle.circle-1 {
    width: 100px;
    height: 100px;
    top: -30px;
    right: -30px;
}

.decoration-circle.circle-2 {
    width: 60px;
    height: 60px;
    bottom: -20px;
    left: -20px;
    animation-delay: 4s;
}

@keyframes floatDecoration {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    50% {
        transform: translateY(-20px) rotate(180deg);
    }
}

/* Responsive Design for How We Work */
@media (max-width: 991px) {
    .work-title {
        font-size: 2.5rem;
    }
    
    .work-process-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }
}

@media (max-width: 768px) {
    .work-title {
        font-size: 2rem;
    }
    
    .work-description {
        font-size: 1rem;
    }
    
    .work-process-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .work-step-inner {
        padding: 35px 25px;
    }
    
    .work-number {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
    
    .work-icon {
        width: 75px;
        height: 75px;
        font-size: 32px;
    }
    
    .work-content h4 {
        font-size: 20px;
    }
}

@media (max-width: 576px) {
    .work-title {
        font-size: 1.8rem;
    }
    
    .section-badge-work {
        padding: 8px 20px;
        font-size: 12px;
    }
    
    .work-icon-box {
        margin: 70px 0 25px;
    }
    
    .work-icon {
        width: 65px;
        height: 65px;
        font-size: 28px;
    }
    
    .work-points li {
        padding: 8px 12px;
        font-size: 13px;
    }
}

/* Why Choose Us Section Styles */
.why-choose-us .section-title h2 {
    color: var(--text-heading-color);
    font-weight: 700;
    margin-bottom: 20px;
}

.why-choose-us .section-title p {
    color: var(--body-color);
    font-size: 16px;
    line-height: 1.6;
}

.why-features {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
}

.feature-icon {
    width: 60px;
    height: 60px;
    background: var(--primary-color-1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-white);
    font-size: 24px;
    flex-shrink: 0;
}

.feature-content h5 {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-heading-color);
    margin-bottom: 8px;
    font-family: var(--heading-font);
}

.feature-content p {
    color: var(--body-color);
    line-height: 1.6;
    margin: 0;
    font-size: 15px;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
}

.stat-card {
    background: var(--bg-white);
    border: 1px solid var(--border-color-1);
    border-radius: 15px;
    padding: 30px 20px;
    text-align: center;
    transition: all 0.4s ease;
    position: relative;
    box-shadow: var(--box-shadow-1);
}

.stat-card:hover {
    transform: translateY(-8px);
    border-color: var(--primary-color-1);
    box-shadow: var(--box-shadow-2);
}

.stat-icon {
    width: 60px;
    height: 60px;
    background: var(--primary-color-1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-white);
    font-size: 24px;
    margin: 0 auto 20px;
}

.stat-number {
    font-size: 40px;
    font-weight: 800;
    color: var(--text-heading-color);
    margin-bottom: 8px;
    font-family: var(--heading-font);
}

.stat-label {
    font-size: 16px;
    font-weight: 600;
    color: var(--body-color);
}

/* Service Packages Section Styles */
.service-packages .section-title h2 {
    color: var(--text-heading-color);
    font-weight: 700;
    margin-bottom: 20px;
}

.service-packages .section-title p {
    color: var(--body-color);
    font-size: 16px;
    line-height: 1.6;
}

.package-card {
    background: var(--bg-white);
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: var(--box-shadow-1);
    transition: all 0.4s ease;
    position: relative;
    height: 100%;
    border: 2px solid var(--border-color-1);
}

.package-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--box-shadow-2);
    border-color: var(--primary-color-1);
}

.package-card.popular {
    border-color: var(--primary-color-2);
    position: relative;
}

.popular-badge {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--primary-color-2);
    color: var(--text-heading-color);
    padding: 6px 20px;
    border-radius: 15px;
    font-size: 14px;
    font-weight: 700;
    font-family: var(--heading-font);
}

.package-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-color-1);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    color: var(--text-white);
    margin: 0 auto 20px;
}

.package-name {
    font-size: 24px;
    font-weight: 700;
    color: var(--text-heading-color);
    margin-bottom: 10px;
    font-family: var(--heading-font);
}

.package-description {
    color: var(--body-color);
    margin-bottom: 25px;
    font-size: 15px;
}

.package-price {
    margin-bottom: 30px;
}

.currency {
    font-size: 20px;
    font-weight: 600;
    color: var(--body-color);
}

.price {
    font-size: 48px;
    font-weight: 800;
    color: var(--text-heading-color);
    font-family: var(--heading-font);
}

.period {
    font-size: 16px;
    color: var(--body-color);
}

.package-features {
    margin-bottom: 30px;
}

.package-features ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.package-features li {
    padding: 10px 0;
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 15px;
    color: var(--text-heading-color);
}

.package-features li i {
    width: 16px;
    font-size: 14px;
}

.package-features li.unavailable {
    color: var(--color-2);
}

.package-features li.unavailable i {
    color: #dc3545;
}

.package-features li:not(.unavailable) i {
    color: #28a745;
}

.package-btn {
    background: var(--primary-color-1) !important;
    color: var(--text-white) !important;
    padding: 15px 30px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 700;
    transition: all 0.3s ease;
    display: inline-block;
    width: 100%;
    border: 1px solid var(--primary-color-1) !important;
    font-family: var(--heading-font);
}

.package-btn:hover {
    background: var(--primary-color-3) !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(14, 89, 242, 0.3);
}

.custom-solution-cta {
    background: var(--bg-white);
    border: 2px solid var(--border-color-1);
    border-radius: 20px;
    padding: 40px;
    text-align: center;
    box-shadow: var(--box-shadow-1);
}

.custom-solution-cta h4 {
    font-size: 28px;
    font-weight: 700;
    color: var(--text-heading-color);
    margin-bottom: 15px;
    font-family: var(--heading-font);
}

.custom-solution-cta p {
    color: var(--body-color);
    margin-bottom: 25px;
    font-size: 16px;
    line-height: 1.6;
}

.custom-btn {
    background: var(--primary-color-1) !important;
    color: var(--text-white) !important;
    padding: 15px 30px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 700;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: 1px solid var(--primary-color-1) !important;
    font-family: var(--heading-font);
}

.custom-btn:hover {
    background: var(--primary-color-3) !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(14, 89, 242, 0.3);
    gap: 15px;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .why-features {
        gap: 25px;
    }

    .feature-item {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }

    .process-step,
    .stat-card,
    .tech-card,
    .package-card {
        padding: 25px 20px;
        margin-bottom: 25px;
    }

    .step-number {
        left: 20px;
        width: 40px;
        height: 40px;
        font-size: 16px;
    }

    .category-title {
        font-size: 20px;
    }

    .package-name {
        font-size: 20px;
    }

    .price {
        font-size: 36px;
    }

    .custom-solution-cta h4 {
        font-size: 24px;
    }
}

@media (max-width: 576px) {
    .step-icon,
    .feature-icon,
    .stat-icon,
    .package-icon {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }

    .tech-icon {
        font-size: 36px;
    }

    .step-content h4,
    .feature-content h5 {
        font-size: 18px;
    }

    .stat-number {
        font-size: 32px;
    }
}

/*Our services card decoration*/
.services-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
}

.service-shape {
    position: absolute;
    background: linear-gradient(45deg, rgba(14, 89, 242, 0.03), rgba(245, 204, 21, 0.03));
    border-radius: 50%;
    animation: float 15s ease-in-out infinite;
}

.service-shape.shape-1 {
    width: 300px;
    height: 300px;
    top: 10%;
    left: 5%;
}

.service-shape.shape-2 {
    width: 200px;
    height: 200px;
    top: 60%;
    right: 10%;
    animation-delay: 5s;
}

.service-shape.shape-3 {
    width: 150px;
    height: 150px;
    bottom: 20%;
    left: 20%;
    animation-delay: 10s;
}

.premium-section-header {
    position: relative;
    z-index: 10;
    margin-bottom: 60px;
}

.section-badge {
    display: inline-flex;
    align-items: center;
    background: rgba(14, 89, 242, 0.1);
    border: 1px solid rgba(14, 89, 242, 0.2);
    border-radius: 50px;
    padding: 10px 20px;
    margin-bottom: 25px;
    gap: 8px;
    font-weight: 600;
    color: #0E59F2;
}

.section-title {
    font-size: 3rem;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 20px;
    line-height: 1.2;
}

.section-description {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #64748b;
    max-width: 800px;
    margin: 0 auto;
}

.premium-services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 60px;
    position: relative;
    z-index: 10;
}

.premium-service-card {
    background: white;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
    border: 1px solid rgba(0, 0, 0, 0.05);
    transition: all 0.4s ease;
    position: relative;
    height: 100%;
}

.premium-service-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 30px 70px rgba(0, 0, 0, 0.15);
    border-color: rgba(14, 89, 242, 0.2);
}

.premium-service-card.featured {
    background: linear-gradient(135deg, #0E59F2 0%, #2D7CFF 100%);
    color: white;
    transform: scale(1.05);
}

.premium-service-card.featured:hover {
    transform: translateY(-15px) scale(1.05);
}

.featured-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(248, 229, 89, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(248, 229, 89, 0.3);
    border-radius: 25px;
    padding: 8px 15px;
    font-size: 0.8rem;
    font-weight: 600;
    color: #F8E559;
    display: flex;
    align-items: center;
    gap: 5px;
    z-index: 20;
}

.service-card-inner {
    padding: 40px;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
}

.service-icon-wrapper {
    position: relative;
    margin-bottom: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Premium Service Icon Styles */
.service-icon {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    font-size: 32px;
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

/* Individual Icon Gradients */
.mobile-app-icon {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    box-shadow: 0 8px 32px rgba(102, 126, 234, 0.3);
}

.web-dev-icon {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    box-shadow: 0 8px 32px rgba(245, 87, 108, 0.3);
}

.design-icon {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    box-shadow: 0 8px 32px rgba(79, 172, 254, 0.3);
}

.marketing-icon {
    background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    box-shadow: 0 8px 32px rgba(67, 233, 123, 0.3);
}

.ecommerce-icon {
    background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
    box-shadow: 0 8px 32px rgba(250, 112, 154, 0.3);
}

.graphics-icon {
    background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
    box-shadow: 0 8px 32px rgba(168, 237, 234, 0.3);
}

/* Icon Hover Effects */
.premium-service-card:hover .service-icon {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.3),
        0 0 0 8px rgba(255, 255, 255, 0.1);
}

.premium-service-card:hover .mobile-app-icon {
    box-shadow: 
        0 20px 40px rgba(102, 126, 234, 0.4),
        0 0 0 8px rgba(102, 126, 234, 0.2);
}

.premium-service-card:hover .web-dev-icon {
    box-shadow: 
        0 20px 40px rgba(245, 87, 108, 0.4),
        0 0 0 8px rgba(245, 87, 108, 0.2);
}

.premium-service-card:hover .design-icon {
    box-shadow: 
        0 20px 40px rgba(79, 172, 254, 0.4),
        0 0 0 8px rgba(79, 172, 254, 0.2);
}

.premium-service-card:hover .marketing-icon {
    box-shadow: 
        0 20px 40px rgba(67, 233, 123, 0.4),
        0 0 0 8px rgba(67, 233, 123, 0.2);
}

.premium-service-card:hover .ecommerce-icon {
    box-shadow: 
        0 20px 40px rgba(250, 112, 154, 0.4),
        0 0 0 8px rgba(250, 112, 154, 0.2);
}

.premium-service-card:hover .graphics-icon {
    box-shadow: 
        0 20px 40px rgba(168, 237, 234, 0.4),
        0 0 0 8px rgba(168, 237, 234, 0.2);
}

/* Icon Animation */
.service-icon i {
    transition: all 0.3s ease;
    animation: iconFloat 3s ease-in-out infinite;
}

@keyframes iconFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}

.premium-service-card:hover .service-icon i {
    animation-play-state: paused;
    transform: scale(1.1);
}

.premium-service-card.featured .service-icon {
    transform: scale(1.05);
    animation: featuredPulse 2s ease-in-out infinite;
}

@keyframes featuredPulse {
    0%, 100% { 
        transform: scale(1.05);
        box-shadow: 0 8px 32px rgba(245, 87, 108, 0.3);
    }
    50% { 
        transform: scale(1.1);
        box-shadow: 0 12px 40px rgba(245, 87, 108, 0.5);
    }
}

.service-icon img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}

.icon-glow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
    opacity: 0;
    transition: all 0.4s ease;
    z-index: -1;
}

.premium-service-card:hover .icon-glow {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1.2);
}

/* Responsive Icon Adjustments */
@media (max-width: 768px) {
    .service-icon {
        width: 70px;
        height: 70px;
        font-size: 28px;
        border-radius: 16px;
    }
    
    .icon-glow {
        width: 100px;
        height: 100px;
    }
}

@media (max-width: 480px) {
    .service-icon {
        width: 60px;
        height: 60px;
        font-size: 24px;
        border-radius: 14px;
    }
    
    .icon-glow {
        width: 90px;
        height: 90px;
    }
}
    transition: all 0.3s ease;
}

.premium-service-card:hover .icon-glow {
    opacity: 1;
    animation: pulse 2s ease-in-out infinite;
}

.service-content {
    flex-grow: 1;
    margin-bottom: 25px;
}

.service-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 15px;
}

.premium-service-card.featured .service-title {
    color: white;
}

.service-description {
    font-size: 1rem;
    line-height: 1.6;
    color: #64748b;
    margin-bottom: 20px;
}

.premium-service-card.featured .service-description {
    color: rgba(255, 255, 255, 0.9);
}

.service-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-features li {
    padding: 5px 0;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.9rem;
    color: #475569;
}

.premium-service-card.featured .service-features li {
    color: rgba(255, 255, 255, 0.8);
}

.service-features i {
    color: #0E59F2;
    font-size: 12px;
}

.premium-service-card.featured .service-features i {
    color: #F8E559;
}

.service-footer {
    margin-top: auto;
}

.service-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(14, 89, 242, 0.1);
    color: #0E59F2;
    padding: 12px 20px;
    border-radius: 15px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.service-link:hover {
    background: #0E59F2;
    color: white;
    transform: translateX(5px);
}

.premium-service-card.featured .service-link {
    background: rgba(248, 229, 89, 0.2);
    color: #F8E559;
}

.premium-service-card.featured .service-link:hover {
    background: #F8E559;
    color: #1e293b;
}

.card-decoration {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    overflow: hidden;
}

.decoration-element {
    position: absolute;
    background: linear-gradient(45deg, rgba(14, 89, 242, 0.1), rgba(245, 204, 21, 0.1));
    border-radius: 50%;
    animation: float 12s ease-in-out infinite;
}

.decoration-element.element-1 {
    width: 100px;
    height: 100px;
    top: -50px;
    right: -50px;
}

.decoration-element.element-2 {
    width: 60px;
    height: 60px;
    bottom: -30px;
    left: -30px;
    animation-delay: 6s;
}

.services-cta {
    background: white;
    border-radius: 25px;
    padding: 50px;
    text-align: center;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(0, 0, 0, 0.05);
    position: relative;
    z-index: 10;
}

.cta-content h3 {
    font-size: 2rem;
    font-weight: 700;
    color: #1e293b;
    margin-bottom: 15px;
}

.cta-content p {
    font-size: 1.1rem;
    color: #64748b;
    margin-bottom: 30px;
}

.cta-actions {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.btn-premium-outline {
    background: transparent;
    border: 2px solid #0E59F2;
    color: #0E59F2;
    padding: 13px 28px;
    border-radius: 15px;
    text-decoration: none;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
}

.btn-premium-outline:hover {
    background: #0E59F2;
    color: white;
    transform: translateY(-2px);
}

/* Animations */
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

@keyframes sparkle {
    0%, 100% { opacity: 0; transform: scale(0); }
    50% { opacity: 1; transform: scale(1); }
}

@keyframes shimmer {
    0% { left: -100%; }
    100% { left: 100%; }
}

@keyframes pulse {
    0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.7; }
    50% { transform: translate(-50%, -50%) scale(1.1); opacity: 1; }
}

/* Responsive Design */
@media (max-width: 1200px) {
    .premium-services-grid {
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
    }
    
    .banner-title {
        font-size: 3rem;
    }
    
    .section-title {
        font-size: 2.5rem;
    }
}

@media (max-width: 768px) {
    .premium-banner-section {
        padding: 80px 0;
        min-height: 80vh;
    }
    
    .banner-title {
        font-size: 2.5rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .banner-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .banner-stats {
        justify-content: center;
        gap: 20px;
    }
    
    .stat-item {
        flex-direction: column;
        text-align: center;
        gap: 5px;
    }
    
    .premium-brand-wrapper {
        padding: 40px 20px;
        border-radius: 20px;
    }
    
    .trust-indicators {
        gap: 20px;
    }
    
    .trust-item {
        flex-direction: column;
        text-align: center;
        gap: 10px;
        padding: 20px;
    }
    
    .premium-services-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .service-card-inner {
        padding: 30px;
    }
    
    .services-cta {
        padding: 40px 20px;
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
}

@media (max-width: 576px) {
    .banner-title {
        font-size: 2rem;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .floating-elements .element {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }
    
    .banner-features {
        gap: 10px;
    }
    
    .premium-service-card.featured {
        transform: none;
    }
    
    .premium-service-card.featured:hover {
        transform: translateY(-10px);
    }
}

.btn-premium-primary {
    background: #0E59F2;
    color: #ffffff;
    padding: 15px 30px;
    border-radius: 15px;
    text-decoration: none;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(89, 89, 248, 0.3);
}

.btn-premium-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(248, 229, 89, 0.4);
    color: #1e293b;
}
</style>

<script>
// Counter Animation for Stats
function animateCounters() {
    const counters = document.querySelectorAll('.stat-number');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        const increment = target / 100;
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            counter.textContent = Math.floor(current);
        }, 20);
    });
}

// Intersection Observer for counter animation
const observerOptions = {
    threshold: 0.7,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounters();
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe stats section when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    const statsSection = document.querySelector('.stats-grid');
    if (statsSection) {
        observer.observe(statsSection);
    }
});
</script>
@endsection
