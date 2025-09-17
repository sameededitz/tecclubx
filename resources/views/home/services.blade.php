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

    <!-- Services Two Area Start -->
    <div class="services__one section-padding">
        <div class="container"data-aos="fade-right">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-7 col-md-9 services__one-title">
                    <span class="subtitle-one">Our Services</span>
                    <h2>We Offer Solutions</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i> <img src="{{ asset('assets/img/service/mobile-app.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>App Development</h4>
                            <p>We specialize in creating high-quality mobile applications for both iOS and Android
                                platforms. Our team handles everything from concept to deployment, ensuring your app is
                                intuitive, user-friendly, and tailored to your business goals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/website-codes.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>Web development</h4>
                            <p>Our web development services focus on building robust, responsive, and scalable websites.
                                Whether you need an e-commerce platform, a corporate website, or a custom web solution, we
                                deliver sites that perform exceptionally and provide a seamless user experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/web-development.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>UI & UX Design</h4>
                            <p>
                                Our UX/UI design services focus on creating intuitive, visually appealing interfaces that
                                captivate users while ensuring seamless navigation. We aim to blend aesthetics with
                                functionality, enhancing the overall user experience of your website or app.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/seo.png') }}" alt=""></i>
                        </div>
                        <div class=" services__one-single-service-content">
                            <h4>Digital Marketing</h4>
                            <p>Our digital marketing solutions are crafted to amplify your brand's visibility online. We
                                specialize in SEO, PPC, social media management, and content marketing, creating targeted
                                strategies that attract more visitors, boost engagement etc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/profit.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>E-Commerce</h4>
                            <p>We offer a training program to enhance e-commerce strategies, covering website development,
                                digital marketing, and logistics. Participants gain practical tools to improve their online
                                presence. This program is ideal for small to medium-sized businesses etc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-right">
                    <div class="single-service">
                        <div class="services__one-single-service-icon">
                            <i><img src="{{ asset('assets/img/service/design-software.png') }}" alt=""></i>
                        </div>
                        <div class="services__one-single-service-content">
                            <h4>Graphics Designing</h4>
                            <p>Our graphic design team brings your brand to life with creative and impactful visuals. From
                                logos and branding to promotional materials and digital assets, we design graphics that
                                capture your brand’s essence and resonate with your audience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Two Area End -->

    <!-- Service Process Section Start -->
    <div class="service-process section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title">
                        <span class="subtitle-one">Our Process</span>
                        <h2>How We Work</h2>
                        <p class="mb-5">Our streamlined development process ensures quality delivery and client <br> satisfaction at every step</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step">
                        <div class="step-number">01</div>
                        <div class="step-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="step-content">
                            <h4>Discovery</h4>
                            <p>We analyze your requirements, understand your business goals, and define project scope</p>
                            <ul class="step-features">
                                <li>Requirement Analysis</li>
                                <li>Market Research</li>
                                <li>Goal Setting</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step">
                        <div class="step-number">02</div>
                        <div class="step-icon">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <div class="step-content">
                            <h4>Planning</h4>
                            <p>We create detailed project plans, wireframes, and choose the best technology stack</p>
                            <ul class="step-features">
                                <li>Project Planning</li>
                                <li>UI/UX Design</li>
                                <li>Technology Selection</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step">
                        <div class="step-number">03</div>
                        <div class="step-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="step-content">
                            <h4>Development</h4>
                            <p>Our expert developers bring your ideas to life with clean, scalable, and efficient code</p>
                            <ul class="step-features">
                                <li>Clean Coding</li>
                                <li>Quality Testing</li>
                                <li>Regular Updates</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-step">
                        <div class="step-number">04</div>
                        <div class="step-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="step-content">
                            <h4>Launch</h4>
                            <p>We deploy your project and provide ongoing support to ensure everything runs smoothly</p>
                            <ul class="step-features">
                                <li>Deployment</li>
                                <li>Testing & QA</li>
                                <li>Ongoing Support</li>
                            </ul>
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
                        <div class="feature-item" data-aos="fade-right" data-aos-delay="100">
                            <div class="feature-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Proven Expertise</h5>
                                <p>Years of experience delivering successful projects across various industries and technologies</p>
                            </div>
                        </div>
                        <div class="feature-item" data-aos="fade-right" data-aos-delay="200">
                            <div class="feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Timely Delivery</h5>
                                <p>We respect deadlines and ensure your project is completed on time without compromising quality</p>
                            </div>
                        </div>
                        <div class="feature-item" data-aos="fade-right" data-aos-delay="300">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Quality Assurance</h5>
                                <p>Rigorous testing and quality control processes ensure bug-free and high-performance solutions</p>
                            </div>
                        </div>
                        <div class="feature-item" data-aos="fade-right" data-aos-delay="400">
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
                        <div class="stat-card" data-aos="fade-left" data-aos-delay="100">
                            <div class="stat-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div class="stat-number" data-count="70">70</div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                        <div class="stat-card" data-aos="fade-left" data-aos-delay="200">
                            <div class="stat-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <div class="stat-number" data-count="53">53</div>
                            <div class="stat-label">Happy Clients</div>
                        </div>
                        <div class="stat-card" data-aos="fade-left" data-aos-delay="300">
                            <div class="stat-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div class="stat-number" data-count="7">7</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                        <div class="stat-card" data-aos="fade-left" data-aos-delay="400">
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

    <!-- Technologies Section Start -->
    <div class="technologies-section section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title">
                        <span class="subtitle-one">Technologies</span>
                        <h2>Technologies We Use</h2>
                        <p>We leverage cutting-edge technologies to build robust and scalable solutions</p>
                    </div>
                </div>
            </div>
            
            <!-- Frontend Technologies -->
            <div class="tech-category">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-12">
                        <h3 class="category-title">Frontend Development</h3>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-react"></i>
                            </div>
                            <h5>React.js</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-vuejs"></i>
                            </div>
                            <h5>Vue.js</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-angular"></i>
                            </div>
                            <h5>Angular</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-js-square"></i>
                            </div>
                            <h5>JavaScript</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Backend Technologies -->
            <div class="tech-category">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-12">
                        <h3 class="category-title">Backend Development</h3>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <h5>Laravel</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-node-js"></i>
                            </div>
                            <h5>Node.js</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-python"></i>
                            </div>
                            <h5>Python</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-php"></i>
                            </div>
                            <h5>PHP</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Technologies -->
            <div class="tech-category">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-12">
                        <h3 class="category-title">Mobile Development</h3>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <h5>Android</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <h5>iOS</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h5>Flutter</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-react"></i>
                            </div>
                            <h5>React Native</h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Design Tools -->
            <div class="tech-category">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-12">
                        <h3 class="category-title">Design Tools</h3>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-figma"></i>
                            </div>
                            <h5>Figma</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fas fa-palette"></i>
                            </div>
                            <h5>Adobe XD</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fab fa-sketch"></i>
                            </div>
                            <h5>Sketch</h5>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="tech-card">
                            <div class="tech-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h5>Photoshop</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Technologies Section End -->



    <!-- Subscribe Area End -->
    <div class="subscribe__one">
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
@section('home_scripts')
<style>
/* Service Process Section Styles */
.service-process {
    position: relative;
}

.service-process .section-title h2 {
    color: var(--text-heading-color);
    font-weight: 700;
    margin-bottom: 20px;
}

.service-process .section-title p {
    color: var(--body-color);
    font-size: 16px;
    line-height: 1.6;
}

.process-step {
    background: var(--bg-white);
    border-radius: 15px;
    padding: 40px 25px;
    text-align: center;
    box-shadow: var(--box-shadow-1);
    transition: all 0.4s ease;
    position: relative;
    height: 100%;
    border: 1px solid var(--border-color-1);
}

.process-step:hover {
    transform: translateY(-10px);
    box-shadow: var(--box-shadow-2);
    border-color: var(--primary-color-1);
}

.step-number {
    position: absolute;
    top: -15px;
    left: 25px;
    background: var(--primary-color-2);
    color: var(--text-heading-color);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 18px;
    font-family: var(--heading-font);
}

.step-icon {
    width: 70px;
    height: 70px;
    background: rgba(14, 89, 242, 0.1);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    color: var(--primary-color-1);
    margin: 20px auto 25px;
}

.step-content h4 {
    font-size: 22px;
    font-weight: 700;
    color: var(--text-heading-color);
    margin-bottom: 15px;
    font-family: var(--heading-font);
}

.step-content p {
    color: var(--body-color);
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.step-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.step-features li {
    background: var(--color-1);
    color: var(--text-heading-color);
    padding: 8px 15px;
    margin-bottom: 5px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
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

/* Technologies Section Styles */
.technologies-section {
    background: var(--bg-white);
    position: relative;
}

.technologies-section .section-title h2 {
    color: var(--text-heading-color);
    font-weight: 700;
    margin-bottom: 20px;
}

.technologies-section .section-title p {
    color: var(--body-color);
    font-size: 16px;
    line-height: 1.6;
}

.tech-category {
    margin-bottom: 60px;
}

.tech-category:last-child {
    margin-bottom: 0;
}

.category-title {
    font-size: 24px;
    font-weight: 700;
    color: var(--text-heading-color);
    margin-bottom: 30px;
    position: relative;
    font-family: var(--heading-font);
}

.category-title::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: var(--primary-color-2);
    border-radius: 2px;
}

.tech-card {
    background: var(--bg-white);
    border: 1px solid var(--border-color-1);
    border-radius: 15px;
    padding: 30px 20px;
    text-align: center;
    transition: all 0.4s ease;
    height: 100%;
    box-shadow: var(--box-shadow-1);
}

.tech-card:hover {
    transform: translateY(-8px);
    border-color: var(--primary-color-1);
    box-shadow: var(--box-shadow-2);
}

.tech-icon {
    font-size: 48px;
    color: var(--primary-color-1);
    margin-bottom: 15px;
}

.tech-card h5 {
    font-size: 18px;
    font-weight: 600;
    color: var(--text-heading-color);
    margin: 0;
    font-family: var(--heading-font);
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
