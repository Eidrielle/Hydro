<?php
// ============================================
// HYDROMEDICAL RENAL CARE CENTER - LANDING PAGE
// ============================================

// Include database connection
require_once 'config/database.php';

// Basic page settings
$page_title = "Hydromedical Renal Care Center - Excellence in Renal Care";
$page_description = "Providing world-class hemodialysis and renal care services with state-of-the-art facilities and compassionate medical professionals.";

// For dynamic content (can be extended with database later)
$current_year = date('Y');

// Logo path - use Hydrocover.jpg from uploads folder
$logo_path = 'uploads/Hydrologo.jpg';

// Kung wala pang laman ang database, gamitin ang static data
$services = [
    [
        'icon' => 'fa-syringe',
        'title' => 'Hemodialysis',
        'desc' => 'State-of-the-art hemodialysis treatments with advanced technology and personalized care plans for optimal patient outcomes.',
    ],
    [
        'icon' => 'fa-heart',
        'title' => 'Nephrology Consultation',
        'desc' => 'Expert consultation and management of kidney diseases by board-certified nephrologists with years of experience.',
    ],
    [
        'icon' => 'fa-stethoscope',
        'title' => 'Transplant Care',
        'desc' => 'Comprehensive pre-and post-transplant care including evaluation, coordination, and long-term follow-up management.',
    ],
    [
        'icon' => 'fa-microscope',
        'title' => 'Diagnostic Services',
        'desc' => 'Advanced diagnostic testing including lab work, imaging, and specialized renal function assessments.',
    ],
    [
        'icon' => 'fa-users',
        'title' => 'Patient Education',
        'desc' => 'Empowering patients through education about kidney health, treatment options, and lifestyle management.',
    ],
    [
        'icon' => 'fa-clock',
        'title' => '24/7 Support',
        'desc' => 'Round-the-clock patient support and emergency care coordination for peace of mind.',
    ],
];

$testimonials = [
    [
        'name' => 'Maria Santos',
        'role' => 'Dialysis Patient',
        'quote' => 'The care I received at Hydromedical was exceptional. The staff is professional, compassionate, and truly cares about their patients. I feel safe and well-cared for during every session.',
        'initial' => 'M',
    ],
    [
        'name' => 'Juan Dela Cruz',
        'role' => 'Kidney Transplant Patient',
        'quote' => 'From diagnosis to post-transplant care, the team at Hydromedical was with me every step of the way. Their expertise and support made all the difference in my journey.',
        'initial' => 'J',
    ],
    [
        'name' => 'Ana Reyes',
        'role' => 'Family Member',
        'quote' => 'My mother has been receiving dialysis here for two years. The facility is clean, the equipment is modern, and the staff treats her like family. Highly recommended!',
        'initial' => 'A',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <!-- ============================================
    EXTERNAL RESOURCES
    ============================================ -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <!-- ============================================
    CUSTOM CSS
    ============================================ -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- ============================================
    HEADER / NAVBAR - WHITE BACKGROUND
    ============================================ -->
    <header class="header" id="header">
        <div class="container">
            <div class="header-inner">
                <a href="#" class="logo">
                    <!-- Logo Image from uploads folder -->
                    <div class="logo-icon">
                        <img src="uploads/Hydrologo.jpg" alt="Hydromedical Logo">
                    </div>
                    <div class="logo-text">
                        <span class="brand">HYDROMEDICAL</span>
                        <span class="tagline">RENAL CARE &amp; DIAGNOSTIC CENTER COMPANY</span>
                    </div>
                </a>

                <nav class="nav-menu" id="navMenu">
                    <a href="#services">Services</a>
                    <a href="#about">About</a>
                    <a href="#testimonials">Testimonials</a>
                    <a href="#contact" class="nav-cta">Contact Us</a>
                </nav>

                <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- ============================================
    HERO SECTION
    ============================================ -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content" data-aos="fade-up" data-aos-duration="800">
                    <h1>
                        Excellence in<br>
                        <span class="highlight">Renal Care</span>
                    </h1>
                    <p>
                        Providing world-class hemodialysis and renal care services 
                        with state-of-the-art facilities and compassionate medical 
                        professionals dedicated to your well-being.
                    </p>
                    <div class="hero-buttons">
                        <a href="#contact" class="btn btn-primary">
                            <i class="fas fa-calendar-check"></i> Book Appointment
                        </a>
                        <a href="#services" class="btn btn-secondary">
                            <i class="fas fa-arrow-right"></i> Learn More
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="hero-stat">
                            <span class="number">10+</span>
                            <span class="label">Years of Excellence</span>
                        </div>
                        <div class="hero-stat">
                            <span class="number"><span class="highlight">500+</span></span>
                            <span class="label">Patients Served</span>
                        </div>
                        <div class="hero-stat">
                            <span class="number"><span class="highlight">24/7</span></span>
                            <span class="label">Patient Support</span>
                        </div>
                    </div>
                </div>

                <div class="hero-image" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="hero-image-placeholder">
                        <img src="uploads/Hydrologo.jpg" alt="Hydromedical Renal Care Center" style="width: 180px; height: 180px; object-fit: contain; margin-bottom: 16px; border-radius: 50%; border: 3px solid rgba(79,169,232,0.2);">
                        <h3>Hydromedical</h3>
                        <p>Renal Care &amp; Diagnostic Center</p>
                        <div style="margin-top: 16px; display: flex; gap: 12px; flex-wrap: wrap; justify-content: center;">
                            <span style="background: rgba(79,169,232,0.15); padding: 4px 12px; border-radius: 20px; font-size: 11px; color: var(--sky-blue);">Hemodialysis</span>
                            <span style="background: rgba(79,169,232,0.15); padding: 4px 12px; border-radius: 20px; font-size: 11px; color: var(--sky-blue);">Nephrology</span>
                            <span style="background: rgba(79,169,232,0.15); padding: 4px 12px; border-radius: 20px; font-size: 11px; color: var(--sky-blue);">Transplant Care</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Badges -->
        <div class="floating-badge" data-aos="fade-left" data-aos-delay="400">
            <i class="fas fa-heartbeat"></i>
            <span>100% Patient Satisfaction</span>
        </div>
        <div class="floating-badge" data-aos="fade-right" data-aos-delay="600">
            <i class="fas fa-user-md"></i>
            <span>Expert Nephrologists</span>
        </div>
        <div class="floating-badge" data-aos="fade-left" data-aos-delay="800">
            <i class="fas fa-hospital"></i>
            <span>State-of-the-art Facility</span>
        </div>
    </section>

    <!-- ============================================
    SERVICES SECTION
    ============================================ -->
    <section class="services section-padding" id="services">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 class="section-title">
                    Our <span class="highlight">Services</span>
                </h2>
                <p class="section-subtitle">
                    Comprehensive renal care services tailored to meet the unique needs of every patient
                </p>
            </div>

            <div class="services-grid">
                <?php foreach($services as $index => $service): ?>
                <div class="service-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="icon">
                        <i class="fas <?php echo $service['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['desc']; ?></p>
                    <a href="#" class="learn-more">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============================================
    ABOUT SECTION
    ============================================ -->
    <section class="about section-padding" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image" data-aos="fade-right">
                    <img src="uploads/Hydrocover.jpg" alt="Hydromedical Renal Care Center" style="width: 120px; height: 120px; object-fit: contain; margin-bottom: 16px; border-radius: 50%; border: 3px solid rgba(79,169,232,0.3);">
                    <h3>Hydromedical Renal Care Center</h3>
                    <p>Your trusted partner in kidney health and wellness</p>
                    <div style="margin-top: 20px; display: flex; gap: 16px; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(79,169,232,0.15); padding: 6px 16px; border-radius: 20px; font-size: 12px; color: var(--sky-blue);">
                            <i class="fas fa-check-circle"></i> ISO Certified
                        </span>
                        <span style="background: rgba(79,169,232,0.15); padding: 6px 16px; border-radius: 20px; font-size: 12px; color: var(--sky-blue);">
                            <i class="fas fa-check-circle"></i> 10+ Years
                        </span>
                    </div>
                </div>

                <div class="about-content" data-aos="fade-left">
                    <h2>
                        Why Choose <span class="highlight">Us?</span>
                    </h2>
                    <p>
                        At Hydromedical Renal Care Center, we combine cutting-edge medical technology 
                        with compassionate care to provide the highest standard of renal treatment. 
                        Our multidisciplinary team works together to ensure comprehensive, 
                        patient-centered care.
                    </p>
                    <p>
                        We understand the challenges of kidney disease and are committed to supporting 
                        our patients and their families every step of the way.
                    </p>

                    <div class="about-features">
                        <div class="about-feature">
                            <i class="fas fa-check-circle"></i> Experienced Nephrologists
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-check-circle"></i> Modern Facilities
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-check-circle"></i> Personalized Care Plans
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-check-circle"></i> 24/7 Patient Support
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-check-circle"></i> Insurance Coordination
                        </div>
                        <div class="about-feature">
                            <i class="fas fa-check-circle"></i> Family-Centered Approach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    TESTIMONIALS SECTION
    ============================================ -->
    <section class="testimonials section-padding" id="testimonials">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 class="section-title">
                    What Our <span class="highlight">Patients Say</span>
                </h2>
                <p class="section-subtitle">
                    Real stories from real patients who trusted us with their renal care
                </p>
            </div>

            <div class="testimonials-grid">
                <?php foreach($testimonials as $index => $testimonial): ?>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 150; ?>">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <blockquote>"<?php echo $testimonial['quote']; ?>"</blockquote>
                    <div class="testimonial-author">
                        <div class="avatar"><?php echo $testimonial['initial']; ?></div>
                        <div>
                            <div class="name"><?php echo $testimonial['name']; ?></div>
                            <div class="role"><?php echo $testimonial['role']; ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============================================
    CTA / CONTACT SECTION
    ============================================ -->
    <section class="cta" id="contact">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>
                    Ready to Start Your <span class="highlight">Renal Care Journey?</span>
                </h2>
                <p>
                    Schedule a consultation with our expert nephrologists today. 
                    We're here to help you every step of the way.
                </p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-calendar-plus"></i> Book Appointment
                    </a>
                    <a href="#" class="btn btn-secondary">
                        <i class="fas fa-phone"></i> Call Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
    FOOTER - WHITE BACKGROUND
    ============================================ -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h3>
                        <span class="highlight">HYDROMEDICAL</span>
                    </h3>
                    <p class="footer-tagline">RENAL CARE &amp; DIAGNOSTIC CENTER COMPANY</p>
                    <p>
                        Providing world-class renal care services with compassion, 
                        excellence, and dedication to patient well-being.
                    </p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div>
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4>Services</h4>
                    <ul class="footer-links">
                        <li><a href="#">Hemodialysis</a></li>
                        <li><a href="#">Nephrology</a></li>
                        <li><a href="#">Transplant Care</a></li>
                        <li><a href="#">Diagnostics</a></li>
                    </ul>
                </div>

                <div>
                    <h4>Contact Info</h4>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-phone" style="color: var(--sky-blue);"></i> (02) 8888-8888</a></li>
                        <li><a href="#"><i class="fas fa-envelope" style="color: var(--sky-blue);"></i> info@hydromedical.com</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt" style="color: var(--sky-blue);"></i> Metro Manila, Philippines</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; <?php echo $current_year; ?> <span>Hydromedical Renal Care Center</span>. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- ============================================
    SCRIPTS
    ============================================ -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    
    <!-- ============================================
    CUSTOM JAVASCRIPT
    ============================================ -->
    <script src="js/script.js"></script>
</body>
</html>