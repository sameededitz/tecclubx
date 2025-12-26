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
    <div class="why-choose-us-simple section-padding" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="simple-section-header" data-aos="fade-up">
                         <div class="section-badge-work">
                            <i class="fas fa-cogs"></i>
                            <span>Why Choose us</span>
                        </div>
                        <h2>Why We Are The Best Choice</h2>
                        <p class="section-description">
                            We deliver reliable, high-quality solutions with professional service 
                            and ongoing support to help your business succeed.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-xl-6 col-lg-12">
                    <div class="simple-features">
                        <div class="simple-feature-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="simple-feature-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="simple-feature-content">
                                <h5>Proven Expertise</h5>
                                <p>Years of experience delivering successful projects across various industries and technologies</p>
                            </div>
                        </div>
                        
                        <div class="simple-feature-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="simple-feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="simple-feature-content">
                                <h5>Timely Delivery</h5>
                                <p>We respect deadlines and ensure your project is completed on time without compromising quality</p>
                            </div>
                        </div>
                        
                        <div class="simple-feature-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="simple-feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="simple-feature-content">
                                <h5>Quality Assurance</h5>
                                <p>Rigorous testing and quality control processes ensure bug-free and high-performance solutions</p>
                            </div>
                        </div>
                        
                        <div class="simple-feature-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="simple-feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="simple-feature-content">
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
    </div>
    <!-- Why Choose Us Section End -->

@endsection

@section('home_scripts')
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
@endsection