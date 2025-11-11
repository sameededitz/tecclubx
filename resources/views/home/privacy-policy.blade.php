@extends('layout.home-layout')
@section('title')
    Privacy Policy | TecClub - Data Protection & Privacy
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
                        <h2>Privacy Policy</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Privacy Policy
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Privacy Policy Section Start -->
    <div class="privacy-policy-section section-padding">
        <div class="container">
            <!-- Last Updated Info -->
            <div class="row justify-content-center mb-60">
                <div class="col-xl-8">
                    <div class="policy-header" data-aos="fade-up">
                        <div class="last-updated">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Last Updated: October 13, 2025</span>
                        </div>
                        <h1>Privacy Policy</h1>
                        <p class="policy-intro">
                            At {{ config('app.name') }},we value your privacy and protect your personal information. This Privacy Policy explains how we collect, use, and safeguard your data when you visit our website or use our services.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div class="row mb-60">
                <div class="col-xl-12">
                    <div class="policy-navigation" data-aos="fade-up">
                        <h3>Quick Navigation</h3>
                        <div class="nav-links">
                            <a href="#information-collection" class="nav-link">Information We Collect</a>
                            <a href="#information-use" class="nav-link">How We Use Information</a>
                            <a href="#information-sharing" class="nav-link">Information Sharing</a>
                            <a href="#data-security" class="nav-link">Data Security</a>
                            <a href="#cookies" class="nav-link">Cookies Policy</a>
                            <a href="#your-rights" class="nav-link">Your Rights</a>
                            <a href="#contact-us" class="nav-link">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Policy Content -->
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="policy-content">
                        
                        <!-- Information We Collect -->
                        <div class="policy-section" id="information-collection" data-aos="fade-up">
                            <h2><i class="fas fa-database"></i> Information We Collect</h2>
                            
                            <h3>Personal Information</h3>
                            <p>We may collect the following types of personal information:</p>
                            <ul class="policy-list">
                                <li><strong>Contact Information:</strong> Name, email address, phone number, mailing address</li>
                                <li><strong>Business Information:</strong> Company name, job title, industry, business requirements</li>
                                <li><strong>Project Information:</strong> Technical specifications, project requirements, budget information</li>
                                <li><strong>Payment Information:</strong> Billing address, payment method details (processed securely through third-party providers)</li>
                                <li><strong>Communication Records:</strong> Email correspondence, chat logs, support tickets</li>
                            </ul>

                            <h3>Technical Information</h3>
                            <p>We automatically collect certain technical information when you visit our website:</p>
                            <ul class="policy-list">
                                <li>IP address and device information</li>
                                <li>Browser type and version</li>
                                <li>Operating system information</li>
                                <li>Pages visited and time spent on our website</li>
                                <li>Referring website information</li>
                                <li>Cookies and similar tracking technologies</li>
                            </ul>

                            <h3>Information from Third Parties</h3>
                            <p>We may receive information about you from:</p>
                            <ul class="policy-list">
                                <li>Social media platforms (when you interact with our content)</li>
                                <li>Business partners and referrals</li>
                                <li>Marketing and advertising partners</li>
                                <li>Public databases and directories</li>
                            </ul>
                        </div>

                        <!-- How We Use Information -->
                        <div class="policy-section" id="information-use" data-aos="fade-up">
                            <h2><i class="fas fa-cogs"></i> How We Use Your Information</h2>
                            
                            <p>We use your personal information for the following purposes:</p>
                            
                            <h3>Service Delivery</h3>
                            <ul class="policy-list">
                                <li>Providing software development and technical services</li>
                                <li>Project management and communication</li>
                                <li>Technical support and maintenance</li>
                                <li>Processing payments and invoicing</li>
                            </ul>

                            <h3>Communication</h3>
                            <ul class="policy-list">
                                <li>Responding to inquiries and support requests</li>
                                <li>Sending project updates and notifications</li>
                                <li>Marketing communications (with your consent)</li>
                                <li>Important service announcements</li>
                            </ul>

                            <h3>Business Operations</h3>
                            <ul class="policy-list">
                                <li>Improving our website and services</li>
                                <li>Analyzing user behavior and preferences</li>
                                <li>Conducting research and development</li>
                                <li>Compliance with legal obligations</li>
                            </ul>

                            <h3>Legal Basis (GDPR Compliance)</h3>
                            <div class="legal-basis-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Purpose</th>
                                            <th>Legal Basis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Service delivery</td>
                                            <td>Contract performance</td>
                                        </tr>
                                        <tr>
                                            <td>Marketing communications</td>
                                            <td>Consent</td>
                                        </tr>
                                        <tr>
                                            <td>Website analytics</td>
                                            <td>Legitimate interest</td>
                                        </tr>
                                        <tr>
                                            <td>Legal compliance</td>
                                            <td>Legal obligation</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Information Sharing -->
                        <div class="policy-section" id="information-sharing" data-aos="fade-up">
                            <h2><i class="fas fa-share-alt"></i> Information Sharing and Disclosure</h2>
                            
                            <p>We do not sell, rent, or trade your personal information. We may share your information in the following circumstances:</p>

                            <h3>Service Providers</h3>
                            <p>We may share information with trusted third-party service providers who assist us in:</p>
                            <ul class="policy-list">
                                <li>Cloud hosting and infrastructure services</li>
                                <li>Payment processing</li>
                                <li>Email marketing platforms</li>
                                <li>Analytics and website optimization</li>
                                <li>Customer support tools</li>
                            </ul>

                            <h3>Business Transfers</h3>
                            <p>In the event of a merger, acquisition, or asset sale, your personal information may be transferred as part of the business assets.</p>

                            <h3>Legal Requirements</h3>
                            <p>We may disclose your information when required by law or to:</p>
                            <ul class="policy-list">
                                <li>Comply with legal processes or government requests</li>
                                <li>Protect our rights and property</li>
                                <li>Prevent fraud or illegal activities</li>
                                <li>Protect the safety of our users and the public</li>
                            </ul>
                        </div>

                        <!-- Data Security -->
                        <div class="policy-section" id="data-security" data-aos="fade-up">
                            <h2><i class="fas fa-shield-alt"></i> Data Security</h2>
                            
                            <p>We implement comprehensive security measures to protect your personal information:</p>

                            <h3>Technical Safeguards</h3>
                            <ul class="policy-list">
                                <li><strong>Encryption:</strong> Data is encrypted in transit and at rest using industry-standard encryption</li>
                                <li><strong>Secure Servers:</strong> All data is stored on secure, regularly updated servers</li>
                                <li><strong>Access Controls:</strong> Strict access controls and authentication mechanisms</li>
                                <li><strong>Regular Updates:</strong> Software and security patches are applied regularly</li>
                            </ul>

                            <h3>Administrative Safeguards</h3>
                            <ul class="policy-list">
                                <li>Employee background checks and security training</li>
                                <li>Confidentiality agreements with all staff and contractors</li>
                                <li>Regular security audits and assessments</li>
                                <li>Incident response procedures</li>
                            </ul>

                            <h3>Physical Safeguards</h3>
                            <ul class="policy-list">
                                <li>Secured office premises with controlled access</li>
                                <li>Protected server rooms and data centers</li>
                                <li>Secure disposal of physical documents and devices</li>
                            </ul>

                            <div class="security-notice">
                                <i class="fas fa-info-circle"></i>
                                <p><strong>Important:</strong> While we implement robust security measures, no system is 100% secure. We cannot guarantee absolute security of your information.</p>
                            </div>
                        </div>

                        <!-- Cookies Policy -->
                        <div class="policy-section" id="cookies" data-aos="fade-up">
                            <h2><i class="fas fa-cookie-bite"></i> Cookies and Tracking Technologies</h2>
                            
                            <h3>What Are Cookies</h3>
                            <p>Cookies are small text files placed on your device when you visit our website. They help us provide a better user experience and understand how our website is used.</p>

                            <h3>Types of Cookies We Use</h3>
                            <div class="cookies-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Cookie Type</th>
                                            <th>Purpose</th>
                                            <th>Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Essential Cookies</td>
                                            <td>Website functionality and security</td>
                                            <td>Session/1 year</td>
                                        </tr>
                                        <tr>
                                            <td>Analytics Cookies</td>
                                            <td>Website performance and usage analysis</td>
                                            <td>2 years</td>
                                        </tr>
                                        <tr>
                                            <td>Marketing Cookies</td>
                                            <td>Personalized advertising (with consent)</td>
                                            <td>1 year</td>
                                        </tr>
                                        <tr>
                                            <td>Preference Cookies</td>
                                            <td>Remember user settings and choices</td>
                                            <td>1 year</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3>Managing Cookies</h3>
                            <p>You can control cookies through your browser settings. However, disabling certain cookies may affect website functionality.</p>
                        </div>

                        <!-- Your Rights -->
                        <div class="policy-section" id="your-rights" data-aos="fade-up">
                            <h2><i class="fas fa-user-shield"></i> Your Privacy Rights</h2>
                            
                            <p>Depending on your location, you may have the following rights regarding your personal information:</p>

                            <h3>General Rights</h3>
                            <ul class="policy-list">
                                <li><strong>Access:</strong> Request access to your personal information</li>
                                <li><strong>Correction:</strong> Request correction of inaccurate information</li>
                                <li><strong>Deletion:</strong> Request deletion of your personal information</li>
                                <li><strong>Portability:</strong> Request a copy of your data in a structured format</li>
                                <li><strong>Restriction:</strong> Request restriction of processing</li>
                                <li><strong>Objection:</strong> Object to certain types of processing</li>
                            </ul>

                            <h3>GDPR Rights (EU Residents)</h3>
                            <p>If you are a resident of the European Union, you have additional rights under GDPR:</p>
                            <ul class="policy-list">
                                <li>Right to withdraw consent at any time</li>
                                <li>Right to lodge a complaint with a supervisory authority</li>
                                <li>Right to be informed about automated decision-making</li>
                            </ul>

                            <h3>CCPA Rights (California Residents)</h3>
                            <p>California residents have the right to:</p>
                            <ul class="policy-list">
                                <li>Know what personal information is collected</li>
                                <li>Delete personal information</li>
                                <li>Opt-out of the sale of personal information</li>
                                <li>Non-discrimination for exercising privacy rights</li>
                            </ul>

                            <div class="rights-exercise">
                                <h4>How to Exercise Your Rights</h4>
                                <p>To exercise any of these rights, please contact us using the information provided in the "Contact Us" section below. We will respond to your request within the timeframe required by applicable law.</p>
                            </div>
                        </div>

                        <!-- Data Retention -->
                        <div class="policy-section" id="data-retention" data-aos="fade-up">
                            <h2><i class="fas fa-history"></i> Data Retention</h2>
                            
                            <p>We retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required by law.</p>

                            <h3>Retention Periods</h3>
                            <ul class="policy-list">
                                <li><strong>Client Data:</strong> Duration of contract + 7 years for legal compliance</li>
                                <li><strong>Marketing Data:</strong> Until consent is withdrawn or 3 years of inactivity</li>
                                <li><strong>Website Analytics:</strong> 26 months (Google Analytics default)</li>
                                <li><strong>Support Records:</strong> 3 years from last interaction</li>
                            </ul>
                        </div>

                        <!-- International Transfers -->
                        <div class="policy-section" id="international-transfers" data-aos="fade-up">
                            <h2><i class="fas fa-globe"></i> International Data Transfers</h2>
                            
                            <p>As a global software development company, we may transfer your personal information to countries outside your country of residence. We ensure adequate protection through:</p>
                            <ul class="policy-list">
                                <li>European Commission adequacy decisions</li>
                                <li>Standard Contractual Clauses (SCCs)</li>
                                <li>Binding Corporate Rules (BCRs)</li>
                                <li>Other appropriate safeguards recognized by applicable law</li>
                            </ul>
                        </div>

                        <!-- Contact Information -->
                        <div class="policy-section" id="contact-us" data-aos="fade-up">
                            <h2><i class="fas fa-envelope"></i> Contact Us</h2>
                            
                            <p>If you have any questions about this Privacy Policy or our privacy practices, please contact us:</p>

                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fas fa-building"></i>
                                    <div>
                                        <strong>{{ config('app.name') }}</strong><br>
                                        Data Protection Officer
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <div>
                                        <strong>Email:</strong> privacy@tecclub.com<br>
                                        <strong>General Inquiries:</strong> info@tecclub.com
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-phone"></i>
                                    <div>
                                        <strong>Phone:</strong> +92 3290612701<br>
                                        <strong>Business Hours:</strong> Mon-Fri, 9 AM - 6 PM EST
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div>
                                        <strong>Address:</strong><br>
                                        Allied Center, Office No. 4<br>
                                        Faisalabad, Punjab 38000<br>
                                        Pakistan
                                    </div>
                                </div>
                            </div>

                            <div class="response-time">
                                <i class="fas fa-clock"></i>
                                <p><strong>Response Time:</strong> We will respond to privacy-related inquiries within 30 days of receipt.</p>
                            </div>
                        </div>

                        <!-- Changes to Policy -->
                        <div class="policy-section" id="policy-changes" data-aos="fade-up">
                            <h2><i class="fas fa-edit"></i> Changes to This Privacy Policy</h2>
                            
                            <p>We may update this Privacy Policy from time to time to reflect changes in our practices or applicable laws. When we make changes:</p>
                            <ul class="policy-list">
                                <li>We will update the "Last Updated" date at the top of this policy</li>
                                <li>We will notify you of significant changes via email or website notice</li>
                                <li>We will obtain your consent for material changes that affect how we use your personal information</li>
                            </ul>

                            <p>We encourage you to review this Privacy Policy regularly to stay informed about how we protect your information.</p>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div class="policy-sidebar">
                        <!-- Quick Actions -->
                        <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="100">
                            <h3>Quick Actions</h3>
                            <div class="quick-actions">
                                <a href="{{ route('contact') }}" class="action-btn">
                                    <i class="fas fa-envelope"></i>
                                    Contact Us About Privacy
                                </a>
                                <a href="javascript:void(0)" class="action-btn" onclick="downloadPDF()">
                                    <i class="fas fa-download"></i>
                                    Download Policy (PDF)
                                </a>
                                <a href="javascript:void(0)" class="action-btn" onclick="openPreferences()">
                                    <i class="fas fa-user-cog"></i>
                                    Manage Preferences
                                </a>
                            </div>
                        </div>

                        <!-- Related Documents -->
                        <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="200">
                            <h3>Related Documents</h3>
                            <ul class="related-links">
                                <li><a href="{{ route('terms.service') }}"><i class="fas fa-file-contract"></i> Terms of Service</a></li>
                                <li><a href="#cookies"><i class="fas fa-cookie-bite"></i> Cookie Policy</a></li>
                                <li><a href="#data-retention"><i class="fas fa-shield-alt"></i> Security Policy</a></li>
                                <li><a href="{{ route('contact') }}"><i class="fas fa-handshake"></i> Data Processing Agreement</a></li>
                            </ul>
                        </div>

                        <!-- Compliance Badges -->
                        <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="300">
                            <h3>Compliance & Certifications</h3>
                            <div class="compliance-badges">
                                <div class="badge-item">
                                    <i class="fas fa-shield-check"></i>
                                    <span>GDPR Compliant</span>
                                </div>
                                <div class="badge-item">
                                    <i class="fas fa-certificate"></i>
                                    <span>CCPA Compliant</span>
                                </div>
                                <div class="badge-item">
                                    <i class="fas fa-lock"></i>
                                    <span>ISO 27001</span>
                                </div>
                                <div class="badge-item">
                                    <i class="fas fa-star"></i>
                                    <span>SOC 2 Type II</span>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Support -->
                        <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="400">
                            <h3>Need Help?</h3>
                            <div class="support-info">
                                <p>Have questions about your privacy rights or this policy?</p>
                                <a href="mailto:privacy@tecclub.com" class="support-btn">
                                    <i class="fas fa-envelope"></i>
                                    Email Privacy Team
                                </a>
                                <div class="support-hours">
                                    <i class="fas fa-clock"></i>
                                    <span>Response within 24 hours</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy Policy Section End -->
@endsection

@section('home_scripts')
<script>
// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Highlight active section in navigation
    const sections = document.querySelectorAll('.policy-section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const activeLink = document.querySelector(`a[href="#${entry.target.id}"]`);
                navLinks.forEach(link => link.classList.remove('active'));
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }, {
        rootMargin: '-20% 0px -80% 0px'
    });

    sections.forEach(section => {
        observer.observe(section);
    });
});

// PDF Download Functionality
function downloadPDF() {
    // Show loading state
    const btn = event.target.closest('.action-btn');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Generating PDF...';
    btn.style.pointerEvents = 'none';
    
    // Create PDF using browser's print functionality
    const printWindow = window.open('', '_blank');
    const policyContent = document.querySelector('.privacy-policy-section').cloneNode(true);
    
    // Remove sidebar and quick actions for PDF
    const sidebar = policyContent.querySelector('.col-xl-4');
    if (sidebar) sidebar.remove();
    
    const quickNav = policyContent.querySelector('.policy-navigation');
    if (quickNav) quickNav.remove();
    
    // Create PDF-optimized HTML
    const pdfHTML = `
    <!DOCTYPE html>
    <html>
    <head>
        <title>Privacy Policy - {{ config('app.name') }}</title>
        <meta charset="utf-8">
        <style>
            body { 
                font-family: Arial, sans-serif; 
                line-height: 1.6; 
                margin: 40px; 
                color: #333;
                font-size: 12px;
            }
            h1 { 
                color: #0E59F2; 
                font-size: 24px; 
                margin-bottom: 20px;
                text-align: center;
                border-bottom: 2px solid #0E59F2;
                padding-bottom: 10px;
            }
            h2 { 
                color: #0E59F2; 
                font-size: 18px; 
                margin: 30px 0 15px 0;
                page-break-after: avoid;
            }
            h3 { 
                color: #333; 
                font-size: 14px; 
                margin: 20px 0 10px 0;
                font-weight: 600;
            }
            p { 
                margin-bottom: 10px; 
                text-align: justify;
            }
            ul { 
                margin: 10px 0; 
                padding-left: 20px; 
            }
            li { 
                margin-bottom: 5px; 
            }
            table { 
                width: 100%; 
                border-collapse: collapse; 
                margin: 15px 0;
                font-size: 11px;
            }
            th, td { 
                border: 1px solid #ddd; 
                padding: 8px; 
                text-align: left; 
            }
            th { 
                background-color: #f8f9fa; 
                font-weight: 600;
            }
            .last-updated {
                text-align: center;
                background: #f8f9fa;
                padding: 10px;
                border-radius: 5px;
                margin: 20px 0;
                font-size: 11px;
                color: #666;
            }
            .contact-info {
                background: #f8f9fa;
                padding: 15px;
                border-radius: 5px;
                margin: 20px 0;
            }
            .policy-section {
                margin-bottom: 25px;
                page-break-inside: avoid;
            }
            @media print {
                body { margin: 20px; }
                .policy-section { page-break-inside: auto; }
            }
        </style>
    </head>
    <body>
        <div class="last-updated">
            Last Updated: October 13, 2025 | {{ config('app.name') }} Privacy Policy
        </div>
        ${policyContent.innerHTML}
        <div style="margin-top: 40px; text-align: center; font-size: 10px; color: #666;">
            This document was generated on ${new Date().toLocaleDateString()} from {{ config('app.name') }} Privacy Policy
        </div>
    </body>
    </html>
    `;
    
    printWindow.document.write(pdfHTML);
    printWindow.document.close();
    
    // Auto-trigger print dialog after content loads
    printWindow.onload = function() {
        setTimeout(() => {
            printWindow.print();
            printWindow.close();
            
            // Reset button
            btn.innerHTML = originalText;
            btn.style.pointerEvents = 'auto';
        }, 500);
    };
}

// Manage Preferences Modal Functionality
function openPreferences() {
    // Create modal HTML
    const modalHTML = `
    <div id="preferencesModal" class="preferences-modal-overlay">
        <div class="preferences-modal">
            <div class="preferences-modal-header">
                <h3><i class="fas fa-user-cog"></i> Privacy Preferences</h3>
                <button class="modal-close" onclick="closePreferences()">&times;</button>
            </div>
            <div class="preferences-modal-body">
                <div class="preference-section">
                    <h4><i class="fas fa-cookie-bite"></i> Cookie Preferences</h4>
                    <div class="preference-item">
                        <label class="preference-toggle">
                            <input type="checkbox" id="essential-cookies" checked disabled>
                            <span class="toggle-slider"></span>
                            <div class="preference-info">
                                <strong>Essential Cookies</strong>
                                <p>Required for website functionality. Cannot be disabled.</p>
                            </div>
                        </label>
                    </div>
                    <div class="preference-item">
                        <label class="preference-toggle">
                            <input type="checkbox" id="analytics-cookies" ${getPreference('analytics') ? 'checked' : ''}>
                            <span class="toggle-slider"></span>
                            <div class="preference-info">
                                <strong>Analytics Cookies</strong>
                                <p>Help us understand how visitors use our website.</p>
                            </div>
                        </label>
                    </div>
                    <div class="preference-item">
                        <label class="preference-toggle">
                            <input type="checkbox" id="marketing-cookies" ${getPreference('marketing') ? 'checked' : ''}>
                            <span class="toggle-slider"></span>
                            <div class="preference-info">
                                <strong>Marketing Cookies</strong>
                                <p>Used to deliver personalized advertisements.</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <div class="preference-section">
                    <h4><i class="fas fa-envelope"></i> Communication Preferences</h4>
                    <div class="preference-item">
                        <label class="preference-toggle">
                            <input type="checkbox" id="email-updates" ${getPreference('email_updates') ? 'checked' : ''}>
                            <span class="toggle-slider"></span>
                            <div class="preference-info">
                                <strong>Email Updates</strong>
                                <p>Receive news and updates about our services.</p>
                            </div>
                        </label>
                    </div>
                    <div class="preference-item">
                        <label class="preference-toggle">
                            <input type="checkbox" id="promotional-emails" ${getPreference('promotional') ? 'checked' : ''}>
                            <span class="toggle-slider"></span>
                            <div class="preference-info">
                                <strong>Promotional Emails</strong>
                                <p>Receive special offers and promotional content.</p>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="preference-section">
                    <h4><i class="fas fa-shield-alt"></i> Data Management</h4>
                    <div class="data-action-item">
                        <i class="fas fa-download"></i>
                        <div>
                            <strong>Export Your Data</strong>
                            <p>Download a copy of your personal data.</p>
                        </div>
                        <button class="data-action-btn" onclick="exportData()">Export</button>
                    </div>
                    <div class="data-action-item">
                        <i class="fas fa-trash"></i>
                        <div>
                            <strong>Delete Your Data</strong>
                            <p>Request deletion of your personal data.</p>
                        </div>
                        <button class="data-action-btn danger" onclick="requestDeletion()">Request Deletion</button>
                    </div>
                </div>
            </div>
            <div class="preferences-modal-footer">
                <button class="btn-secondary" onclick="closePreferences()">Cancel</button>
                <button class="btn-primary" onclick="savePreferences()">Save Preferences</button>
            </div>
        </div>
    </div>
    `;
    
    // Add modal to page
    document.body.insertAdjacentHTML('beforeend', modalHTML);
    document.body.style.overflow = 'hidden';
}

function closePreferences() {
    const modal = document.getElementById('preferencesModal');
    if (modal) {
        modal.remove();
        document.body.style.overflow = 'auto';
    }
}

function savePreferences() {
    const preferences = {
        analytics: document.getElementById('analytics-cookies').checked,
        marketing: document.getElementById('marketing-cookies').checked,
        email_updates: document.getElementById('email-updates').checked,
        promotional: document.getElementById('promotional-emails').checked
    };
    
    // Save to localStorage
    localStorage.setItem('privacy_preferences', JSON.stringify(preferences));
    
    // Show success message
    showNotification('Preferences saved successfully!', 'success');
    
    // Close modal
    closePreferences();
    
    // Apply preferences (disable/enable tracking scripts)
    applyPreferences(preferences);
}

function getPreference(key) {
    const preferences = JSON.parse(localStorage.getItem('privacy_preferences') || '{}');
    return preferences[key] || false;
}

function applyPreferences(preferences) {
    // Disable/enable Google Analytics
    if (!preferences.analytics) {
        window['ga-disable-UA-XXXXXXXXX-X'] = true;
    }
    
    // Disable/enable marketing pixels
    if (!preferences.marketing) {
        // Disable Facebook Pixel, etc.
    }
}

function exportData() {
    showNotification('Data export request submitted. You will receive an email within 30 days.', 'info');
}

function requestDeletion() {
    if (confirm('Are you sure you want to request deletion of your data? This action cannot be undone.')) {
        showNotification('Data deletion request submitted. You will receive a confirmation email.', 'warning');
    }
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `privacy-notification ${type}`;
    notification.innerHTML = `
        <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'warning' ? 'exclamation-triangle' : 'info-circle'}"></i>
        <span>${message}</span>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);
    
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => notification.remove(), 300);
    }, 4000);
}

// Initialize preferences on page load
document.addEventListener('DOMContentLoaded', function() {
    const savedPreferences = JSON.parse(localStorage.getItem('privacy_preferences') || '{}');
    applyPreferences(savedPreferences);
});
</script>
@endsection

@section('styles')
<style>
/* Privacy Policy Page Styling */
.privacy-policy-section {
    background: #ffffff;
}

/* Policy Header */
.policy-header {
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

.last-updated i {
    margin-right: 0.5rem;
}

.policy-header h1 {
    color: var(--text-heading-color);
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.policy-intro {
    color: var(--body-color);
    font-size: 1.1rem;
    line-height: 1.6;
    max-width: 700px;
    margin: 0 auto;
}

/* Quick Navigation */
.policy-navigation {
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 15px;
    border-left: 4px solid var(--primary-color-1);
}

.policy-navigation h3 {
    color: var(--text-heading-color);
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
}

.nav-links {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.nav-link {
    background: #ffffff;
    color: var(--primary-color-1);
    padding: 0.6rem 1.2rem;
    border-radius: 25px;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 500;
    transition: all 0.3s ease;
    border: 1px solid rgba(14, 89, 242, 0.2);
}

.nav-link:hover,
.nav-link.active {
    background: var(--primary-color-1);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Policy Content */
.policy-content {
    padding-right: 2rem;
}

.policy-section {
    margin-bottom: 3rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid #eee;
}

.policy-section:last-child {
    border-bottom: none;
}

.policy-section h2 {
    color: var(--text-heading-color);
    font-size: 1.8rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.8rem;
}

.policy-section h2 i {
    color: var(--primary-color-1);
    font-size: 1.5rem;
}

.policy-section h3 {
    color: var(--text-heading-color);
    font-size: 1.3rem;
    font-weight: 600;
    margin: 1.5rem 0 1rem;
}

.policy-section h4 {
    color: var(--text-heading-color);
    font-size: 1.1rem;
    font-weight: 600;
    margin: 1rem 0 0.5rem;
}

.policy-section p {
    color: var(--body-color);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.policy-list {
    list-style: none;
    padding: 0;
    margin-bottom: 1.5rem;
}

.policy-list li {
    color: var(--body-color);
    padding: 0.5rem 0;
    border-bottom: 1px solid #f0f0f0;
    position: relative;
    padding-left: 1.5rem;
}

.policy-list li:before {
    content: "•";
    color: var(--primary-color-1);
    font-weight: bold;
    position: absolute;
    left: 0;
}

.policy-list li:last-child {
    border-bottom: none;
}

/* Tables */
.table {
    width: 100%;
    border-collapse: collapse;
    margin: 1.5rem 0;
    background: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.table th {
    background: var(--primary-color-1);
    color: #ffffff;
    padding: 1rem;
    text-align: left;
    font-weight: 600;
}

.table td {
    padding: 1rem;
    border-bottom: 1px solid #eee;
    color: var(--body-color);
}

.table tr:last-child td {
    border-bottom: none;
}

/* Special Notices */
.security-notice,
.rights-exercise {
    background: rgba(14, 89, 242, 0.05);
    border: 1px solid rgba(14, 89, 242, 0.2);
    border-radius: 10px;
    padding: 1.5rem;
    margin: 1.5rem 0;
}

.security-notice i {
    color: var(--primary-color-1);
    font-size: 1.2rem;
    margin-right: 0.5rem;
}

/* Contact Information */
.contact-info {
    display: grid;
    gap: 1.5rem;
    margin: 1.5rem 0;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 10px;
}

.contact-item i {
    color: var(--primary-color-1);
    font-size: 1.2rem;
    margin-top: 0.2rem;
}

.response-time {
    background: rgba(248, 229, 89, 0.1);
    border: 1px solid rgba(248, 229, 89, 0.3);
    border-radius: 10px;
    padding: 1rem;
    margin-top: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.response-time i {
    color: var(--primary-color-2);
}

/* Sidebar */
.policy-sidebar {
    position: sticky;
    top: 100px;
}

.sidebar-widget {
    background: #ffffff;
    border-radius: 15px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    border-left: 4px solid var(--primary-color-1);
}

.sidebar-widget h3 {
    color: var(--text-heading-color);
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
}

/* Quick Actions */
.quick-actions {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.action-btn {
    background: rgba(14, 89, 242, 0.05);
    color: var(--primary-color-1);
    padding: 1rem;
    border-radius: 10px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    transition: all 0.3s ease;
    border: 1px solid rgba(14, 89, 242, 0.1);
}

.action-btn:hover {
    background: var(--primary-color-1);
    color: #ffffff;
    transform: translateY(-2px);
}

/* Related Links */
.related-links {
    list-style: none;
    padding: 0;
}

.related-links li {
    margin-bottom: 1rem;
}

.related-links a {
    color: var(--body-color);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    padding: 0.5rem 0;
    transition: color 0.3s ease;
}

.related-links a:hover {
    color: var(--primary-color-1);
}

.related-links i {
    color: var(--primary-color-1);
    width: 16px;
}

/* Compliance Badges */
.compliance-badges {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.badge-item {
    text-align: center;
    padding: 1rem;
    background: rgba(14, 89, 242, 0.05);
    border-radius: 10px;
    border: 1px solid rgba(14, 89, 242, 0.1);
}

.badge-item i {
    color: var(--primary-color-1);
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    display: block;
}

.badge-item span {
    color: var(--body-color);
    font-size: 0.9rem;
    font-weight: 500;
}

/* Support Info */
.support-info {
    text-align: center;
}

.support-info p {
    color: var(--body-color);
    margin-bottom: 1.5rem;
}

.support-btn {
    background: var(--primary-color-1);
    color: #ffffff;
    padding: 1rem 1.5rem;
    border-radius: 25px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    margin-bottom: 1rem;
}

.support-btn:hover {
    background: var(--primary-color-3);
    transform: translateY(-2px);
    color: #ffffff;
}

.support-hours {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    color: var(--body-color);
    font-size: 0.9rem;
}

.support-hours i {
    color: var(--primary-color-1);
}

/* Responsive Design */
@media (max-width: 768px) {
    .policy-header h1 {
        font-size: 2.2rem;
    }
    
    .nav-links {
        flex-direction: column;
    }
    
    .policy-content {
        padding-right: 0;
    }
    
    .policy-section h2 {
        font-size: 1.5rem;
    }
    
    .compliance-badges {
        grid-template-columns: 1fr;
    }
    
    .contact-info {
        gap: 1rem;
    }
    
    .contact-item {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 576px) {
    .policy-header h1 {
        font-size: 1.8rem;
    }
    
    .policy-navigation {
        padding: 1.5rem;
    }
    
    .sidebar-widget {
        padding: 1.5rem;
    }
    
    .table {
        font-size: 0.85rem;
    }
    
    .table th,
    .table td {
        padding: 0.7rem;
    }
}

/* Privacy Preferences Modal */
.preferences-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(5px);
    z-index: 10000;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: fadeIn 0.3s ease;
}

.preferences-modal {
    background: #ffffff;
    border-radius: 15px;
    width: 90%;
    max-width: 600px;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    animation: slideInUp 0.3s ease;
}

.preferences-modal-header {
    background: var(--primary-color-1);
    color: #ffffff;
    padding: 1.5rem 2rem;
    border-radius: 15px 15px 0 0;
    display: flex;
    justify-content: between;
    align-items: center;
}

.preferences-modal-header h3 {
    margin: 0;
    font-size: 1.3rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.modal-close {
    background: none;
    border: none;
    color: #ffffff;
    font-size: 1.5rem;
    cursor: pointer;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: background 0.3s ease;
    margin-left: auto;
}

.modal-close:hover {
    background: rgba(255, 255, 255, 0.2);
}

.preferences-modal-body {
    padding: 2rem;
}

.preference-section {
    margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid #eee;
}

.preference-section:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.preference-section h4 {
    color: var(--text-heading-color);
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.preference-section h4 i {
    color: var(--primary-color-1);
}

.preference-item {
    margin-bottom: 1.5rem;
}

.preference-toggle {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    cursor: pointer;
    padding: 1rem;
    border-radius: 10px;
    transition: background 0.3s ease;
}

.preference-toggle:hover {
    background: #f8f9fa;
}

.preference-toggle input[type="checkbox"] {
    display: none;
}

.toggle-slider {
    width: 50px;
    height: 26px;
    background: #ddd;
    border-radius: 26px;
    position: relative;
    transition: background 0.3s ease;
    flex-shrink: 0;
    margin-top: 2px;
}

.toggle-slider:before {
    content: "";
    position: absolute;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: #ffffff;
    top: 2px;
    left: 2px;
    transition: transform 0.3s ease;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.preference-toggle input[type="checkbox"]:checked + .toggle-slider {
    background: var(--primary-color-1);
}

.preference-toggle input[type="checkbox"]:checked + .toggle-slider:before {
    transform: translateX(24px);
}

.preference-toggle input[type="checkbox"]:disabled + .toggle-slider {
    background: #ccc;
    cursor: not-allowed;
}

.preference-info {
    flex: 1;
}

.preference-info strong {
    color: var(--text-heading-color);
    font-size: 1rem;
    font-weight: 600;
    display: block;
    margin-bottom: 0.3rem;
}

.preference-info p {
    color: var(--body-color);
    font-size: 0.9rem;
    margin: 0;
    line-height: 1.4;
}

/* Data Actions */
.data-action-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    border: 1px solid #eee;
    border-radius: 10px;
    margin-bottom: 1rem;
}

.data-action-item i {
    color: var(--primary-color-1);
    font-size: 1.2rem;
    width: 20px;
    text-align: center;
}

.data-action-item > div {
    flex: 1;
}

.data-action-item strong {
    color: var(--text-heading-color);
    font-weight: 600;
    display: block;
    margin-bottom: 0.3rem;
}

.data-action-item p {
    color: var(--body-color);
    font-size: 0.9rem;
    margin: 0;
}

.data-action-btn {
    background: var(--primary-color-1);
    color: #ffffff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    font-size: 0.9rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.data-action-btn:hover {
    background: var(--primary-color-3);
    transform: translateY(-1px);
}

.data-action-btn.danger {
    background: #dc3545;
}

.data-action-btn.danger:hover {
    background: #c82333;
}

/* Modal Footer */
.preferences-modal-footer {
    background: #f8f9fa;
    padding: 1.5rem 2rem;
    border-radius: 0 0 15px 15px;
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
}

.btn-secondary,
.btn-primary {
    border: none;
    padding: 0.8rem 1.5rem;
    border-radius: 8px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-secondary {
    background: #6c757d;
    color: #ffffff;
}

.btn-secondary:hover {
    background: #5a6268;
}

.btn-primary {
    background: var(--primary-color-1);
    color: #ffffff;
}

.btn-primary:hover {
    background: var(--primary-color-3);
    transform: translateY(-1px);
}

/* Privacy Notifications */
.privacy-notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: #ffffff;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
    border-left: 4px solid var(--primary-color-1);
    z-index: 10001;
    transform: translateX(100%);
    transition: transform 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    max-width: 400px;
}

.privacy-notification.show {
    transform: translateX(0);
}

.privacy-notification.success {
    border-left-color: #28a745;
}

.privacy-notification.warning {
    border-left-color: #ffc107;
}

.privacy-notification.info {
    border-left-color: #17a2b8;
}

.privacy-notification i {
    font-size: 1.2rem;
}

.privacy-notification.success i {
    color: #28a745;
}

.privacy-notification.warning i {
    color: #ffc107;
}

.privacy-notification.info i {
    color: #17a2b8;
}

.privacy-notification span {
    color: var(--body-color);
    font-size: 0.9rem;
    line-height: 1.4;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideInUp {
    from {
        transform: translateY(30px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Mobile Modal Responsiveness */
@media (max-width: 768px) {
    .preferences-modal {
        width: 95%;
        margin: 1rem;
    }
    
    .preferences-modal-header,
    .preferences-modal-body,
    .preferences-modal-footer {
        padding: 1rem;
    }
    
    .preference-toggle {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.8rem;
    }
    
    .data-action-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.8rem;
    }
    
    .preferences-modal-footer {
        flex-direction: column;
    }
    
    .privacy-notification {
        right: 10px;
        left: 10px;
        max-width: none;
    }
}
</style>
@endsection