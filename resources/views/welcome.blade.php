@extends('layouts.frontend.main')

@section('title', 'Arslan Khan — Fullstack Laravel Developer')

@section('content')

{{-- ===== HERO ===== --}}
<section class="hero" id="home">
    <div class="container">
        <div class="hero-inner">

            <div class="hero-text">
                <div class="hero-badge" id="heroBadge">
                    <span class="badge-dot"></span>
                    Available for new projects
                </div>

                <h1 class="hero-title" id="heroTitle">
                    Fullstack Laravel<br>
                    Developer &amp;<br>
                    <span class="gradient-text">Web Craftsman.</span>
                </h1>

                <p class="hero-role" id="heroRole">
                    &gt;&nbsp;<span id="typedRole">Laravel Developer</span><span class="blink"></span>
                </p>

                <p class="hero-desc" id="heroDesc">
                    Fullstack developer with 5+ years crafting fast, scalable applications. From Laravel APIs to Vue.js frontends — I ship products that perform.
                </p>

                <div class="hero-actions" id="heroActions">
                    <a href="#projects" class="btn-primary"><i class="fas fa-eye"></i> View Work</a>
                    <a href="#contact" class="btn-ghost"><i class="fas fa-paper-plane"></i> Get in Touch</a>
                </div>

                <div class="hero-pills" id="heroPills">
                    <span class="tech-pill"><i class="fab fa-laravel"></i> Laravel</span>
                    <span class="tech-pill"><i class="fab fa-vuejs"></i> Vue.js</span>
                    <span class="tech-pill"><i class="fab fa-js"></i> JavaScript</span>
                    <span class="tech-pill"><i class="fab fa-aws"></i> AWS</span>
                    <span class="tech-pill"><i class="fab fa-wordpress"></i> WordPress</span>
                    <span class="tech-pill"><i class="fas fa-robot"></i> AI</span>
                </div>
            </div>

            <div class="hero-image-wrap">
                <div class="hero-avatar" id="heroAvatar">
                    <div class="avatar-ring-wrap"></div>
                    <img src="{{ asset('/frontend/assets/Profile-Pic.png') }}"
                         alt="Arslan Khan"
                         onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                    <div class="avatar-placeholder" style="display:none">AK</div>
                    <div class="avatar-badge"><span class="dot"></span> Open to work</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== ABOUT ===== --}}
<section id="about">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">// about_me</p>
            <h2 class="section-title">The developer behind<br>the <span class="gradient-text">code</span>.</h2>
        </div>
        <div class="bento-grid">
            <div class="bento-card bento-wide">
                <p class="bento-label">// intro</p>
                <h3 class="bento-heading">I'm Arslan Khan, a Fullstack Laravel Developer</h3>
                <p class="bento-text">Based in Lahore, Pakistan, I build end-to-end web applications with a focus on performance, clean architecture, and great user experiences. My work spans from API design to polished frontends.</p>
                <p class="bento-text">I care about writing code that's maintainable, scalable, and actually ships. Whether it's a complex SaaS dashboard or a high-traffic WordPress site, I bring the same level of precision to every project.</p>
                <div class="avail-badge"><span class="dot"></span> Currently open to freelance &amp; full-time roles</div>
                <div class="location-line"><i class="fas fa-map-marker-alt"></i> Lahore, Pakistan</div>
            </div>
            <div class="bento-card">
                <p class="bento-label">// experience</p>
                <div class="stat-big" data-target="5" data-suffix="+">0+</div>
                <p class="stat-sub">Years of professional<br>development experience</p>
            </div>
            <div class="bento-card">
                <p class="bento-label">// delivered</p>
                <div class="stat-big" data-target="50" data-suffix="+">0+</div>
                <p class="stat-sub">Projects shipped across<br>startups and agencies</p>
            </div>
            <div class="bento-card">
                <p class="bento-label">// core_stack</p>
                <div class="tech-mini-grid">
                    <span class="tech-mini"><i class="fab fa-laravel"></i> Laravel</span>
                    <span class="tech-mini"><i class="fab fa-php"></i> PHP 8</span>
                    <span class="tech-mini"><i class="fab fa-vuejs"></i> Vue.js</span>
                    <span class="tech-mini"><i class="fas fa-database"></i> MySQL</span>
                    <span class="tech-mini"><i class="fab fa-aws"></i> AWS</span>
                    <span class="tech-mini"><i class="fab fa-wordpress"></i> WordPress</span>
                    <span class="tech-mini"><i class="fab fa-bootstrap"></i> Bootstrap</span>
                    <span class="tech-mini"><i class="fas fa-code"></i> jQuery</span>
                </div>
            </div>
            <div class="bento-card bento-highlight">
                <p class="bento-label">// satisfaction</p>
                <div class="stat-big" data-target="100" data-suffix="%">0%</div>
                <p class="stat-sub">Client satisfaction rate<br>across all engagements</p>
            </div>
        </div>
    </div>
</section>

{{-- ===== SKILLS ===== --}}
<section id="skills">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">// skill_set</p>
            <h2 class="section-title">Technologies I<br>work with <span class="gradient-text">daily</span>.</h2>
        </div>
        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-icon-box"><i class="fab fa-laravel"></i></div>
                <h3 class="skill-name">Laravel</h3>
                <p class="skill-desc">REST APIs, queues, events, Livewire, Sanctum, and full MVC architecture at scale.</p>
                <div class="skill-track"><div class="skill-bar" data-width="95%"></div></div>
                <p class="skill-pct">95%</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon-box"><i class="fab fa-vuejs"></i></div>
                <h3 class="skill-name">Vue.js</h3>
                <p class="skill-desc">Component-driven UIs, Vuex/Pinia, Vue Router, and composables with Composition API.</p>
                <div class="skill-track"><div class="skill-bar" data-width="82%"></div></div>
                <p class="skill-pct">82%</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon-box"><i class="fas fa-database"></i></div>
                <h3 class="skill-name">MySQL</h3>
                <p class="skill-desc">Schema design, query optimisation, indexing, Eloquent ORM and raw query performance.</p>
                <div class="skill-track"><div class="skill-bar" data-width="88%"></div></div>
                <p class="skill-pct">88%</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon-box"><i class="fab fa-aws"></i></div>
                <h3 class="skill-name">AWS</h3>
                <p class="skill-desc">EC2, S3, RDS, Lambda, CloudFront deployment and infrastructure automation.</p>
                <div class="skill-track"><div class="skill-bar" data-width="75%"></div></div>
                <p class="skill-pct">75%</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon-box"><i class="fab fa-wordpress"></i></div>
                <h3 class="skill-name">WordPress</h3>
                <p class="skill-desc">Custom themes, plugin development, WooCommerce, performance tuning and headless CMS.</p>
                <div class="skill-track"><div class="skill-bar" data-width="85%"></div></div>
                <p class="skill-pct">85%</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon-box"><i class="fab fa-bootstrap"></i></div>
                <h3 class="skill-name">Bootstrap</h3>
                <p class="skill-desc">Responsive layouts, utility customisation, SASS theming and accessible component patterns.</p>
                <div class="skill-track"><div class="skill-bar" data-width="90%"></div></div>
                <p class="skill-pct">90%</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon-box"><i class="fab fa-js"></i></div>
                <h3 class="skill-name">jQuery / AJAX</h3>
                <p class="skill-desc">Dynamic page interactions, async data fetching, DOM manipulation and real-time updates.</p>
                <div class="skill-track"><div class="skill-bar" data-width="88%"></div></div>
                <p class="skill-pct">88%</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon-box"><i class="fab fa-react"></i></div>
                <h3 class="skill-name">React.js</h3>
                <p class="skill-desc">Hooks, Context API, Redux Toolkit, Next.js SSR/SSG and modern component architecture.</p>
                <div class="skill-track"><div class="skill-bar" data-width="80%"></div></div>
                <p class="skill-pct">80%</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon-box"><i class="fas fa-robot"></i></div>
                <h3 class="skill-name">AI Web Applications</h3>
                <p class="skill-desc">OpenAI / Gemini API integration, chatbots, RAG pipelines, and AI-driven SaaS features.</p>
                <div class="skill-track"><div class="skill-bar" data-width="72%"></div></div>
                <p class="skill-pct">72%</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon-box"><i class="fas fa-chart-line"></i></div>
                <h3 class="skill-name">Digital Marketing</h3>
                <p class="skill-desc">SEO strategy, Google Ads, analytics, conversion optimisation and performance marketing.</p>
                <div class="skill-track"><div class="skill-bar" data-width="70%"></div></div>
                <p class="skill-pct">70%</p>
            </div>
        </div>
    </div>
</section>

{{-- ===== PROJECTS ===== --}}
<section id="projects">
    <div class="container">
        <div class="section-header">
            <p class="section-eyebrow">// selected_work</p>
            <h2 class="section-title">Projects that<br>speak for <span class="gradient-text">themselves</span>.</h2>
        </div>
        <div class="proj-filter">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="laravel">Laravel</button>
            <button class="filter-btn" data-filter="vue">Vue.js</button>
            <button class="filter-btn" data-filter="react">React</button>
            <button class="filter-btn" data-filter="ai">AI</button>
            <button class="filter-btn" data-filter="wordpress">WordPress</button>
            <button class="filter-btn" data-filter="ecommerce">E-Commerce</button>
        </div>
        <div class="proj-grid">

            {{-- 1. AI first --}}
            <div class="proj-card proj-featured" data-category="ai laravel">
                <div class="proj-img">
                    <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=640&q=80" alt="AI Customer Support Bot">
                    <div class="proj-img-overlay"></div>
                    <span class="proj-badge">AI</span>
                </div>
                <div class="proj-body">
                    <h3 class="proj-title">AI Customer Support Bot</h3>
                    <p class="proj-desc">GPT-4 powered support chatbot with RAG pipeline, ticket auto-routing, and sentiment analysis for SaaS companies.</p>
                    <div class="proj-tags">
                        <span class="tag">Laravel</span><span class="tag">OpenAI</span><span class="tag">Vue.js</span><span class="tag">Redis</span>
                    </div>
                </div>
            </div>

            {{-- 2. React E-Learning --}}
            <div class="proj-card" data-category="react ecommerce">
                <div class="proj-img">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=640&q=80" alt="E-Learning Platform">
                    <div class="proj-img-overlay"></div>
                    <span class="proj-badge">React</span>
                </div>
                <div class="proj-body">
                    <h3 class="proj-title">React E-Learning Platform</h3>
                    <p class="proj-desc">Interactive course platform with video streaming, progress tracking, quizzes, certificates, and instructor dashboards.</p>
                    <div class="proj-tags">
                        <span class="tag">React</span><span class="tag">Laravel API</span><span class="tag">AWS S3</span><span class="tag">Stripe</span>
                    </div>
                </div>
            </div>

            {{-- 3. SaaS Dashboard --}}
            <div class="proj-card" data-category="laravel vue">
                <div class="proj-img">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=640&q=80" alt="SaaS Dashboard">
                    <div class="proj-img-overlay"></div>
                </div>
                <div class="proj-body">
                    <h3 class="proj-title">SaaS Analytics Dashboard</h3>
                    <p class="proj-desc">Multi-tenant analytics platform with real-time charts, role-based access, and subscription billing via Stripe.</p>
                    <div class="proj-tags">
                        <span class="tag">Laravel 10</span><span class="tag">Vue 3</span><span class="tag">Sanctum</span><span class="tag">AWS</span>
                    </div>
                </div>
            </div>

            {{-- 4. Multi-Vendor Marketplace --}}
            <div class="proj-card" data-category="ecommerce laravel">
                <div class="proj-img">
                    <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=640&q=80" alt="E-Commerce Marketplace">
                    <div class="proj-img-overlay"></div>
                </div>
                <div class="proj-body">
                    <h3 class="proj-title">Multi-Vendor Marketplace</h3>
                    <p class="proj-desc">Full e-commerce marketplace with vendor portals, inventory management, and automated payout system.</p>
                    <div class="proj-tags">
                        <span class="tag">Laravel</span><span class="tag">MySQL</span><span class="tag">jQuery</span><span class="tag">S3</span>
                    </div>
                </div>
            </div>

            {{-- 5. WooCommerce Fashion Store --}}
            <div class="proj-card" data-category="wordpress ecommerce">
                <div class="proj-img">
                    <img src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?w=640&q=80" alt="Fashion Store">
                    <div class="proj-img-overlay"></div>
                </div>
                <div class="proj-body">
                    <h3 class="proj-title">WooCommerce Fashion Store</h3>
                    <p class="proj-desc">Custom WooCommerce theme with advanced filtering, wishlist, loyalty programme, and mobile-first UX.</p>
                    <div class="proj-tags">
                        <span class="tag">WordPress</span><span class="tag">WooCommerce</span><span class="tag">PHP</span>
                    </div>
                </div>
            </div>

            {{-- 6. Real Estate Portal --}}
            <div class="proj-card" data-category="laravel vue">
                <div class="proj-img">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=640&q=80" alt="Real Estate Portal">
                    <div class="proj-img-overlay"></div>
                </div>
                <div class="proj-body">
                    <h3 class="proj-title">Real Estate Portal</h3>
                    <p class="proj-desc">Property listing platform with map search, agent CRM, virtual tours, and lead management pipeline.</p>
                    <div class="proj-tags">
                        <span class="tag">Laravel</span><span class="tag">Vue.js</span><span class="tag">Google Maps</span>
                    </div>
                </div>
            </div>

            {{-- 7. HR & Payroll --}}
            <div class="proj-card" data-category="laravel">
                <div class="proj-img">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=640&q=80" alt="HR System">
                    <div class="proj-img-overlay"></div>
                </div>
                <div class="proj-body">
                    <h3 class="proj-title">HR &amp; Payroll System</h3>
                    <p class="proj-desc">Enterprise HR platform covering recruitment, attendance, payroll processing, and leave management.</p>
                    <div class="proj-tags">
                        <span class="tag">Laravel</span><span class="tag">Vue.js</span><span class="tag">MySQL</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===== CONTACT ===== --}}
<section id="contact">
    <div class="container">
        <div class="contact-wrap">
            <div>
                <p class="section-eyebrow">// get_in_touch</p>
                <h2 class="contact-title">Let's build<br>something <span class="gradient-text">great</span>.</h2>
                <p class="contact-desc">Have a project in mind or looking for a reliable Laravel developer? I'm open to freelance work, full-time positions, and interesting collaborations.</p>
                <div class="contact-items">
                    <a href="mailto:arslan.devsspace@gmail.com" class="c-item">
                        <div class="c-icon"><i class="fas fa-envelope"></i></div>
                        <div class="c-text"><h5>Email</h5><p>arslan.devsspace@gmail.com</p></div>
                    </a>
                    <a href="tel:+923044627900" class="c-item">
                        <div class="c-icon"><i class="fas fa-phone"></i></div>
                        <div class="c-text"><h5>Phone</h5><p>+92 304 462 7900</p></div>
                    </a>
                    <a href="https://www.linkedin.com/in/arslan-khan-041a09204/" target="_blank" class="c-item">
                        <div class="c-icon"><i class="fab fa-linkedin-in"></i></div>
                        <div class="c-text"><h5>LinkedIn</h5><p>arslan-khan-041a09204</p></div>
                    </a>
                    <a href="https://wa.me/923044627900" target="_blank" class="c-item">
                        <div class="c-icon"><i class="fab fa-whatsapp"></i></div>
                        <div class="c-text"><h5>WhatsApp</h5><p>+92 304 462 7900</p></div>
                    </a>
                </div>
            </div>
            <div class="form-box">
                <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="name">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Project Discussion">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Tell me about your project..." required></textarea>
                    </div>
                    <button type="submit" class="btn-send" id="submitBtn">
                        <i class="fas fa-paper-plane"></i>
                        <span>Send Message</span>
                    </button>
                    <p id="formMsg" style="display:none;text-align:center;margin-top:1rem;font-size:0.85rem;"></p>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
(function(){
    const form = document.getElementById('contactForm');
    const btn  = document.getElementById('submitBtn');
    const msg  = document.getElementById('formMsg');
    if (!form) return;
    form.addEventListener('submit', async function(e){
        e.preventDefault();
        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <span>Sending…</span>';
        try {
            const res = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('[name="_token"]').value,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(Object.fromEntries(new FormData(form)))
            });
            const data = await res.json().catch(() => ({}));
            if (res.ok) {
                msg.textContent = data.message || "Message sent! I'll get back to you soon.";
                msg.style.color = 'var(--green)';
                form.reset();
                btn.innerHTML = '<i class="fas fa-check"></i> <span>Sent!</span>';
                btn.style.background = 'var(--green)';
            } else {
                msg.textContent = data.message || 'Something went wrong. Please try again.';
                msg.style.color = '#f87171';
                btn.disabled = false;
                btn.innerHTML = '<i class="fas fa-paper-plane"></i> <span>Send Message</span>';
            }
        } catch(err) {
            msg.textContent = 'Network error. Please try again.';
            msg.style.color = '#f87171';
            btn.disabled = false;
            btn.innerHTML = '<i class="fas fa-paper-plane"></i> <span>Send Message</span>';
        }
        msg.style.display = 'block';
    });
})();
</script>
@endpush
