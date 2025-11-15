@extends('layout.home-layout')
@section('title')
    Terms of Service | TecClub - Legal Terms & Conditions
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
                        <h2>Terms of Service</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Terms of Service
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Terms of Service Section Start -->
    <div class="terms-section section-padding">
        <div class="container">
            <!-- Last Updated Info -->
            <div class="row justify-content-center mb-60">
                <div class="col-xl-8">
                    <div class="terms-header" data-aos="fade-up">
                        <div class="last-updated">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Last Updated: October 13, 2025</span>
                        </div>
                        <h1>Terms of Service</h1>
                            <p class="terms-intro">
                                Welcome to {{ config('app.name') }}. These Terms of Service govern your use of our website and services. By accessing or using our services, you agree to be bound by these Terms.
                            </p>
                    </div>
                </div>
            </div>

            <!-- Terms Content -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="terms-content">
                        
                        <!-- Acceptance of Terms -->
                        <div class="terms-section-item" data-aos="fade-up">
                            <h2><i class="fas fa-handshake"></i> Acceptance of Terms</h2>
                            <p>By accessing and using {{ config('app.name') }}'s website and services, you accept and agree to be bound by the terms and provisions of this agreement.</p>
                        </div>

                        <!-- Use License -->
                        <div class="terms-section-item" data-aos="fade-up">
                            <h2><i class="fas fa-certificate"></i> Use License</h2>
                            <p>Permission is granted to temporarily download one copy of the materials on {{ config('app.name') }}'s website for personal, non-commercial, transitory viewing only.</p>
                            <h3>This is the grant of a license, not a transfer of title, and under this license you may not:</h3>
                            <ul class="terms-list">
                                <li>Modify or copy the materials.</li>
                                <li>Use the materials for any commercial purpose or for any public display.</li>
                                <li>Attempt to reverse engineer any software contained on the website.</li>
                                <li>Remove any copyright or other proprietary notations from the materials.</li>
                            </ul>
                        </div>

                        <!-- Service Terms -->
                        <div class="terms-section-item" data-aos="fade-up">
                            <h2><i class="fas fa-cogs"></i> Service Terms</h2>
                            <h3>Software Development Services</h3>
                            <ul class="terms-list">
                                <li><strong>Project Scope:</strong> All projects require a signed agreement outlining deliverables, timeline, and costs.</li>
                                <li><strong>Payment Terms:</strong> 25% upfront before project start, 50% upon completion of development, and 25% upon final submission and delivery.</li>
                                <li><strong>Revisions:</strong> Up to three rounds of revisions included in base price.</li>
                                <li><strong>Timeline:</strong> Project timelines are estimates and may vary based on complexity and client feedback.</li>
                            </ul>
                        </div>

                        <!-- Disclaimer -->
                        <div class="terms-section-item" data-aos="fade-up">
                            <h2><i class="fas fa-exclamation-triangle"></i> Disclaimer</h2>
                            <p>The materials on {{ config('app.name') }}'s website are provided on an 'as is' basis. {{ config('app.name') }} makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</p>
                        </div>

                        <!-- Limitations -->
                        <div class="terms-section-item" data-aos="fade-up">
                            <h2><i class="fas fa-shield-alt"></i> Limitations</h2>
                            <p>In no event shall {{ config('app.name') }} or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on {{ config('app.name') }}'s website, even if {{ config('app.name') }} or a {{ config('app.name') }} authorized representative has been notified orally or in writing of the possibility of such damage.</p>
                        </div>

                        <!-- Governing Law -->
                        <div class="terms-section-item" data-aos="fade-up">
                            <h2><i class="fas fa-gavel"></i> Governing Law</h2>
                            <p>These Terms shall be governed by and construed in accordance with the laws of Pakistan, without regard to its conflict of law principles.</p>
                        </div>

                        <!-- Changes to Terms -->
                        <div class="terms-section-item" data-aos="fade-up">
                            <h2><i class="fas fa-sync-alt"></i> Changes to Terms</h2>
                            <p>TecClub reserves the right to update or modify these Terms of Service at any time without prior notice. Continued use of the website constitutes acceptance of those changes.</p>
                        </div>

                        <!-- Termination -->
                        <div class="terms-section-item" data-aos="fade-up">
                            <h2><i class="fas fa-ban"></i> Termination</h2>
                            <p>TecClub may terminate or suspend access to services immediately, without prior notice, for any violation of these Terms.</p>
                        </div>

                        <!-- Contact -->
                        <div class="terms-section-item" data-aos="fade-up">
                            <h2><i class="fas fa-envelope"></i> Contact Information</h2>
                            <p>Questions about the Terms of Service should be sent to us at info@tecclubx.com.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Terms of Service Section End -->
@endsection

@section('styles')
<style>
.terms-section {
    background: #ffffff;
}

.terms-header {
    text-align: center;
    margin-bottom: 3rem;
}

.last-updated {
    background: rgba(14, 89, 242, 0.1);
    color: var(--primary-color-1);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 1.5rem;
    display: inline-block;
}

.terms-header h1 {
    color: var(--text-heading-color);
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.terms-intro {
    color: var(--body-color);
    font-size: 1.1rem;
    line-height: 1.6;
    max-width: 700px;
    margin: 0 auto;
}

.terms-content {
    max-width: 800px;
    margin: 0 auto;
}

.terms-section-item {
    margin-bottom: 3rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid #eee;
}

.terms-section-item:last-child {
    border-bottom: none;
}

.terms-section-item h2 {
    color: var(--text-heading-color);
    font-size: 1.8rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.8rem;
}

.terms-section-item h2 i {
    color: var(--primary-color-1);
    font-size: 1.5rem;
}

.terms-section-item h3 {
    color: var(--text-heading-color);
    font-size: 1.3rem;
    font-weight: 600;
    margin: 1.5rem 0 1rem;
}

.terms-section-item p {
    color: var(--body-color);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.terms-list {
    list-style: none;
    padding: 0;
    margin-bottom: 1.5rem;
}

.terms-list li {
    color: var(--body-color);
    padding: 0.5rem 0;
    border-bottom: 1px solid #f0f0f0;
    position: relative;
    padding-left: 1.5rem;
}

.terms-list li:before {
    content: "•";
    color: var(--primary-color-1);
    font-weight: bold;
    position: absolute;
    left: 0;
}

.terms-list li:last-child {
    border-bottom: none;
}

@media (max-width: 768px) {
    .terms-header h1 {
        font-size: 2.2rem;
    }
    
    .terms-section-item h2 {
        font-size: 1.5rem;
    }
}
</style>
@endsection