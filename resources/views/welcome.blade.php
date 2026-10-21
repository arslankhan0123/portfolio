@extends('layouts.frontend.main')
@section('title', 'Home')
@section('meta')
@endsection

@section('content')
<!-- Hero Section -->
<section id="home" class="hero">
    <div class="particles" id="particles"></div>
    <div class="floating-element">
        <i class="fab fa-php" style="font-size: 3rem;"></i>
    </div>
    <div class="floating-element">
        <i class="fab fa-laravel" style="font-size: 3rem;"></i>
    </div>
    <div class="floating-element">
        <i class="fab fa-vuejs" style="font-size: 3rem;"></i>
    </div>
    <div class="floating-element">
        <i class="fab fa-js-square" style="font-size: 3rem;"></i>
    </div>

    <div class="container mt-5">
        <div class="row align-items-center mt-5">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="animated-name">Arslan Khan</h1>
                    <div class="rotating-title" id="rotating-title">
                        <span class="word active">Fullstack</span>
                        <span class="word active">Laravel</span>
                        <span class="word active">Developer</span>
                    </div>
                    <p class="description">
                        Passionate developer with 5+ years of experience creating robust web applications using Laravel, Vue.js, and modern technologies. I transform ideas into digital reality.
                    </p>
                    <div class="cta-buttons">
                        <a href="#projects" class="btn btn-primary-custom">View My Work</a>
                        <a href="#contact" class="btn btn-outline-custom">Get In Touch</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="hero-image">
                    <div class="profile-container">
                        <div class="profile-ring"></div>
                        <img src="{{ asset('/frontend/assets/Profile-Pic.png') }}" alt="Arslan Khan" class="profile-img">
                        <div class="profile-glow"></div>
                        <div class="tech-icons">
                            <i class="fab fa-php tech-icon" style="--delay: 0s;"></i>
                            <i class="fab fa-laravel tech-icon" style="--delay: 0.5s;"></i>
                            <i class="fab fa-vuejs tech-icon" style="--delay: 1s;"></i>
                            <i class="fab fa-js-square tech-icon" style="--delay: 1.5s;"></i>
                            <i class="fab fa-bootstrap tech-icon" style="--delay: 2s;"></i>
                            <i class="fab fa-html5 tech-icon" style="--delay: 2.5s;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <h2 class="section-title animate-on-scroll">About Me</h2>
        <div class="about-content">
            <div class="about-text animate-on-scroll">
                <h3>Passionate Fullstack Developer</h3>
                <p>
                    I'm Arslan Khan, a dedicated Fullstack Laravel Developer with over 5 years of experience in building scalable web applications.
                    I specialize in creating robust backend solutions with Laravel and engaging frontend experiences with Vue.js.
                </p>
                <p>
                    My journey in web development started with a passion for creating digital solutions that make a difference.
                    I love working with modern technologies and staying up-to-date with the latest trends in web development.
                </p>
                <div class="stats">
                    <div class="stat-item">
                        <span class="stat-number">5+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Projects Completed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                </div>
            </div>
            <div class="about-image animate-on-scroll">
                <div class="profile-container">
                    <div class="profile-ring"></div>
                    <img src="{{ asset('/frontend/assets/Profile-Pic.png') }}" alt="Arslan Khan" class="profile-img">
                    <div class="profile-glow"></div>
                    <div class="floating-icons">
                        <i class="fab fa-php floating-icon"></i>
                        <i class="fab fa-laravel floating-icon"></i>
                        <i class="fab fa-vuejs floating-icon"></i>
                        <i class="fab fa-js-square floating-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Skills & Technologies</h2>
        <div class="skills-grid">
            <div class="skill-card animate-on-scroll">
                <i class="fab fa-php skill-icon"></i>
                <h4 class="skill-name">PHP & Laravel</h4>
                <p class="skill-description">Expert in Laravel framework, Eloquent ORM, and PHP best practices</p>
                <div class="skill-level">
                    <div class="skill-level-bar" style="width: 95%"></div>
                </div>
            </div>
            <div class="skill-card animate-on-scroll">
                <i class="fab fa-vuejs skill-icon"></i>
                <h4 class="skill-name">Vue.js</h4>
                <p class="skill-description">Building dynamic and responsive user interfaces with Vue.js</p>
                <div class="skill-level">
                    <div class="skill-level-bar" style="width: 90%"></div>
                </div>
            </div>
            <div class="skill-card animate-on-scroll">
                <i class="fab fa-bootstrap skill-icon"></i>
                <h4 class="skill-name">Bootstrap</h4>
                <p class="skill-description">Creating responsive and mobile-first designs</p>
                <div class="skill-level">
                    <div class="skill-level-bar" style="width: 88%"></div>
                </div>
            </div>
            <div class="skill-card animate-on-scroll">
                <i class="fab fa-wordpress skill-icon"></i>
                <h4 class="skill-name">WordPress</h4>
                <p class="skill-description">Custom themes, plugins, and WordPress development</p>
                <div class="skill-level">
                    <div class="skill-level-bar" style="width: 85%"></div>
                </div>
            </div>
            <div class="skill-card animate-on-scroll">
                <i class="fab fa-js-square skill-icon"></i>
                <h4 class="skill-name">jQuery & AJAX</h4>
                <p class="skill-description">Interactive web applications with jQuery and AJAX</p>
                <div class="skill-level">
                    <div class="skill-level-bar" style="width: 92%"></div>
                </div>
            </div>
            <div class="skill-card animate-on-scroll">
                <i class="fab fa-aws skill-icon"></i>
                <h4 class="skill-name">AWS Services</h4>
                <p class="skill-description">Cloud deployment and AWS services management</p>
                <div class="skill-level">
                    <div class="skill-level-bar" style="width: 80%"></div>
                </div>
            </div>
            <div class="skill-card animate-on-scroll">
                <i class="fab fa-html5 skill-icon"></i>
                <h4 class="skill-name">HTML5 & CSS3</h4>
                <p class="skill-description">Modern web standards and responsive design</p>
                <div class="skill-level">
                    <div class="skill-level-bar" style="width: 95%"></div>
                </div>
            </div>
            <div class="skill-card animate-on-scroll">
                <i class="fab fa-aws skill-icon"></i>
                <h4 class="skill-name">AWS Services & Deployments</h4>
                <p class="skill-description">Cloud infrastructure, serverless architecture, and automated deployments on AWS</p>
                <div class="skill-level">
                    <div class="skill-level-bar" style="width: 88%"></div>
                </div>
            </div>
            <div class="skill-card animate-on-scroll">
                <i class="fas fa-chart-line skill-icon"></i>
                <h4 class="skill-name">Digital Marketing</h4>
                <p class="skill-description">SEO optimization, social media marketing, and digital campaign management</p>
                <div class="skill-level">
                    <div class="skill-level-bar" style="width: 85%"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Featured Projects</h2>

        <!-- Project Filters -->
        <div class="project-filters animate-on-scroll">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="laravel">Laravel</button>
            <button class="filter-btn" data-filter="vue">Vue.js</button>
            <button class="filter-btn" data-filter="wordpress">WordPress</button>
            <button class="filter-btn" data-filter="ecommerce">E-Commerce</button>
        </div>

        <div class="projects-grid">
            <div class="project-card animate-on-scroll" data-category="laravel vue ecommerce">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="E-Commerce Platform">
                    <div class="project-overlay">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h4 class="project-title">E-Commerce Platform</h4>
                    <p class="project-description">
                        A full-featured e-commerce platform built with Laravel and Vue.js, featuring user management, payment integration, and admin dashboard.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">Bootstrap</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                </div>
            </div>

            <div class="project-card animate-on-scroll" data-category="laravel vue">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Analytics Dashboard">
                    <div class="project-overlay">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h4 class="project-title">Analytics Dashboard</h4>
                    <p class="project-description">
                        Real-time analytics dashboard with interactive charts and data visualization for business intelligence.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Chart.js</span>
                        <span class="tech-tag">AJAX</span>
                        <span class="tech-tag">AWS</span>
                    </div>
                </div>
            </div>

            <div class="project-card animate-on-scroll" data-category="laravel vue wordpress">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="CMS Platform">
                    <div class="project-overlay">
                        <i class="fas fa-blog"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h4 class="project-title">CMS Platform</h4>
                    <p class="project-description">
                        Custom content management system with multi-user support, role-based permissions, and media management.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">jQuery</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                </div>
            </div>

            <div class="project-card animate-on-scroll" data-category="wordpress">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1471107340929-a87cd0f5b5f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="WordPress Theme">
                    <div class="project-overlay">
                        <i class="fab fa-wordpress"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h4 class="project-title">WordPress Custom Theme</h4>
                    <p class="project-description">
                        Custom WordPress theme with modern design, responsive layout, and custom post types for business websites.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">WordPress</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">CSS3</span>
                        <span class="tech-tag">jQuery</span>
                    </div>
                </div>
            </div>

            <div class="project-card animate-on-scroll" data-category="laravel ecommerce">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Multi-Vendor Marketplace">
                    <div class="project-overlay">
                        <i class="fas fa-store"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h4 class="project-title">Multi-Vendor Marketplace</h4>
                    <p class="project-description">
                        A comprehensive multi-vendor marketplace platform with vendor management, commission tracking, and payment processing.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Bootstrap</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">Stripe API</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <h2 class="section-title animate-on-scroll">Get In Touch</h2>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item animate-on-scroll">
                    <i class="fas fa-envelope contact-icon"></i>
                    <div class="contact-details">
                        <h5>Email</h5>
                        <p>arslan.devsspace@gmail.com</p>
                    </div>
                </div>
                <div class="contact-item animate-on-scroll">
                    <i class="fas fa-phone contact-icon"></i>
                    <div class="contact-details">
                        <h5>Phone</h5>
                        <p>+92 304 462 7900</p>
                    </div>
                </div>
                <div class="contact-item animate-on-scroll">
                    <i class="fas fa-map-marker-alt contact-icon"></i>
                    <div class="contact-details">
                        <h5>Location</h5>
                        <p>R.A Bazaar Lahore cantt, Pakistan</p>
                    </div>
                </div>
                <div class="contact-item animate-on-scroll">
                    <i class="fab fa-linkedin contact-icon"></i>
                    <div class="contact-details">
                        <h5>LinkedIn</h5>
                        <p>https://www.linkedin.com/in/arslan-khan-041a09204/</p>
                    </div>
                </div>
            </div>
            <div class="contact-form animate-on-scroll">
                <div id="contactAlert"></div>
                <form id="contactForm">
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary-custom w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        if (!form) return;
        const alertBox = document.getElementById('contactAlert');
        const url = '{{ route("contact.store") }}';

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            alertBox.innerHTML = '';

            const formData = new FormData(form);

            try {
                const res = await fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': formData.get('_token')
                    },
                    body: formData
                });

                if (res.ok) {
                    const data = await res.json();
                    alertBox.innerHTML = `<div class="alert alert-success alert-dismissible fade show" role="alert">${data.message}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
                    form.reset();
                } else if (res.status === 422) {
                    const err = await res.json();
                    let list = '';
                    if (err.errors) {
                        Object.keys(err.errors).forEach(function(k) {
                            err.errors[k].forEach(function(m) {
                                list += `<div>${m}</div>`;
                            });
                        });
                    }
                    alertBox.innerHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">${list}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
                } else {
                    alertBox.innerHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">Something went wrong. Please try again.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
                }
            } catch (err) {
                alertBox.innerHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">Network error. Please try again.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
            }
        });
    });
</script>
@endsection