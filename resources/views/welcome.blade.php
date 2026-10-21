@extends('layouts.frontend.main')

@section('title', 'Arslan Khan — Fullstack Laravel Developer & AI Automation Engineer')

@section('content')

@php
    // Experience counted from 2020 to the current year
    $expYears = max(1, (int) date('Y') - 2021);
    $expWords = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten'][$expYears] ?? $expYears;
@endphp

{{-- ===== HERO ===== --}}
<section class="hero" id="home">
    <div class="container">
        <div class="hero-inner">

            <div class="hero-text">
                <div class="hero-badge"><span class="pulse-dot"></span> Available for new projects</div>

                <h1 class="hero-title">
                    <span class="line"><span>Fullstack Laravel</span></span>
                    <span class="line"><span>Developer &amp;</span></span>
                    <span class="line"><span class="gradient-text">AI Automation.</span></span>
                </h1>

                <p class="hero-role"><span class="prompt">&gt;</span> <span id="typedRole">Laravel Developer</span><span class="blink"></span></p>

                <p class="hero-desc">
                    I build fast, scalable web products — Laravel APIs, Vue &amp; React frontends, and AI-powered automation that saves teams real hours every week.
                </p>

                <div class="hero-actions">
                    <a href="#projects" class="btn btn-primary">View Work <i class="fas fa-arrow-right"></i></a>
                    <a href="#contact" class="btn btn-ghost"><i class="fas fa-paper-plane"></i> Get in Touch</a>
                </div>

                <div class="hero-pills">
                    <span class="tech-pill"><i class="fab fa-laravel"></i> Laravel</span>
                    <span class="tech-pill"><i class="fab fa-vuejs"></i> Vue.js</span>
                    <span class="tech-pill"><i class="fab fa-react"></i> React</span>
                    <span class="tech-pill"><i class="fas fa-robot"></i> AI</span>
                    <span class="tech-pill"><i class="fab fa-aws"></i> AWS</span>
                    <span class="tech-pill"><i class="fab fa-wordpress"></i> WordPress</span>
                </div>
            </div>

            <div class="hero-visual">
                <div class="portrait-wrap">
                    <div class="portrait-ring"></div>
                    <div class="portrait-card" data-tilt>
                        <div class="portrait-shine"></div>
                        <img src="{{ asset('/frontend/assets/Profile-Pic.png') }}" alt="Arslan Khan"
                             onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                        <div class="avatar-placeholder">AK</div>
                        <div class="portrait-name"><strong>Arslan Khan</strong><small>Lahore, Pakistan</small></div>
                    </div>
                    <div class="chip chip-1"><i class="fab fa-laravel"></i><div><b>{{ $expYears }}+ yrs</b><br>Laravel</div></div>
                    <div class="chip chip-2"><i class="fas fa-robot"></i><div><b>AI</b><br>Automation</div></div>
                    <div class="chip chip-3"><i class="fas fa-check"></i><div><b>50+</b><br>Projects shipped</div></div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===== TECH MARQUEE ===== --}}
<div class="marquee-wrap" aria-hidden="true">
    <div class="marquee">
        @for ($i = 0; $i < 2; $i++)
        <span class="marquee-item"><i class="fab fa-laravel"></i> Laravel <span class="sep"></span></span>
        <span class="marquee-item"><i class="fab fa-vuejs"></i> Vue.js <span class="sep"></span></span>
        <span class="marquee-item"><i class="fab fa-react"></i> React <span class="sep"></span></span>
        <span class="marquee-item"><i class="fas fa-robot"></i> OpenAI &amp; Gemini <span class="sep"></span></span>
        <span class="marquee-item"><i class="fas fa-database"></i> MySQL <span class="sep"></span></span>
        <span class="marquee-item"><i class="fab fa-aws"></i> AWS <span class="sep"></span></span>
        <span class="marquee-item"><i class="fab fa-wordpress"></i> WordPress <span class="sep"></span></span>
        <span class="marquee-item"><i class="fas fa-bolt"></i> n8n / Zapier <span class="sep"></span></span>
        <span class="marquee-item"><i class="fab fa-bootstrap"></i> Bootstrap <span class="sep"></span></span>
        <span class="marquee-item"><i class="fab fa-js"></i> JavaScript <span class="sep"></span></span>
        @endfor
    </div>
</div>

{{-- ===== ABOUT ===== --}}
<section id="about">
    <div class="container">
        <div class="section-header">
            <div class="reveal">
                <p class="eyebrow">about</p>
                <h2 class="section-title">The developer behind<br>the <span class="gradient-text">code</span>.</h2>
            </div>
            <p class="section-lead reveal" data-delay="120">{{ $expWords }} years of shipping products for startups and agencies — from first commit to production, with the same care at every step.</p>
        </div>

        <div class="bento">
            <div class="card b-intro reveal" data-dir="left">
                <p class="b-label">intro</p>
                <h3 class="b-heading">I'm Arslan Khan — a Fullstack Laravel Developer and AI Automation Engineer.</h3>
                <p class="b-text">Based in Lahore, Pakistan, I build end-to-end web applications with a focus on performance, clean architecture, and great user experience. My work spans API design, polished frontends, and AI workflows that remove manual busywork.</p>
                <p class="b-text">I care about code that's maintainable, scalable, and actually ships. Whether it's a multi-tenant SaaS dashboard or a high-traffic WooCommerce store, every project gets the same precision.</p>
                <div class="b-meta">
                    <span class="avail"><span class="pulse-dot"></span> Open to freelance &amp; full-time roles</span>
                    <span class="loc"><i class="fas fa-map-marker-alt"></i> Lahore, Pakistan</span>
                </div>
            </div>

            <div class="card b-stat reveal" data-dir="right" data-delay="80">
                <div>
                    <p class="b-label">experience</p>
                    <div class="stat-row"><span class="stat-num" data-target="{{ $expYears }}" data-suffix="+">0+</span></div>
                    <p class="stat-sub">Years of professional development</p>
                </div>
                <div class="spark"><i style="height:40%"></i><i style="height:55%"></i><i style="height:48%"></i><i style="height:70%"></i><i style="height:62%"></i><i style="height:85%"></i><i style="height:78%"></i><i style="height:100%"></i></div>
            </div>

            <div class="card b-stat b-highlight reveal" data-dir="right" data-delay="160">
                <div>
                    <p class="b-label">delivered</p>
                    <div class="stat-row"><span class="stat-num" data-target="50" data-suffix="+">0+</span></div>
                    <p class="stat-sub">Projects shipped across startups and agencies</p>
                </div>
                <div class="spark"><i style="height:30%"></i><i style="height:45%"></i><i style="height:60%"></i><i style="height:52%"></i><i style="height:75%"></i><i style="height:68%"></i><i style="height:90%"></i><i style="height:100%"></i></div>
            </div>

            <div class="card b-quote reveal" data-dir="zoom">
                <div class="q-row">
                    <span class="q-mark">&ldquo;</span>
                    <blockquote>Good software is invisible — it just works, scales quietly, and lets the business move faster.</blockquote>
                </div>
                <div class="principles">
                    <span class="principle"><i class="fas fa-check"></i> Clean, tested code</span>
                    <span class="principle"><i class="fas fa-check"></i> Clear weekly updates</span>
                    <span class="principle"><i class="fas fa-check"></i> On-time delivery</span>
                    <span class="principle"><i class="fas fa-check"></i> Post-launch support</span>
                </div>
            </div>

            <div class="card b-stack reveal" data-dir="right" data-delay="100">
                <p class="b-label">core stack</p>
                <div class="stack-grid">
                    <span class="stack-item"><i class="fab fa-laravel"></i> Laravel</span>
                    <span class="stack-item"><i class="fas fa-robot"></i> AI / LLMs</span>
                    <span class="stack-item"><i class="fab fa-vuejs"></i> Vue.js</span>
                    <span class="stack-item"><i class="fab fa-react"></i> React</span>
                    <span class="stack-item"><i class="fas fa-database"></i> MySQL</span>
                    <span class="stack-item"><i class="fab fa-aws"></i> AWS</span>
                    <span class="stack-item"><i class="fab fa-wordpress"></i> WordPress</span>
                    <span class="stack-item"><i class="fas fa-bolt"></i> Automation</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== SKILLS ===== --}}
<section id="skills">
    <div class="container">
        <div class="section-header">
            <div class="reveal">
                <p class="eyebrow">skills</p>
                <h2 class="section-title">Technologies I<br>work with <span class="gradient-text">daily</span>.</h2>
            </div>
            <p class="section-lead reveal" data-delay="120">Deep on the Laravel ecosystem, fluent across the modern frontend, and building production AI features since 2023.</p>
        </div>

        <div class="skills-grid">
            @php
            $skills = [
                ['laravel',     'fab fa-laravel',    'Laravel',            'REST APIs, queues, events, Livewire, Sanctum and clean MVC at scale.',            5, false],
                ['ai',          'fas fa-robot',      'AI Web Applications', 'OpenAI / Gemini integrations, chatbots, RAG pipelines and AI-driven SaaS features.', 4, true],
                ['vue',         'fab fa-vuejs',      'Vue.js',             'Composition API, Pinia, Vue Router and component-driven UIs.',                   4, false],
                ['react',       'fab fa-react',      'React.js',           'Hooks, Redux Toolkit, Next.js SSR and modern component architecture.',          4, false],
                ['mysql',       'fas fa-database',   'MySQL',              'Schema design, indexing, query optimisation and Eloquent performance.',          5, false],
                ['aws',         'fab fa-aws',        'AWS',                'EC2, S3, RDS, Lambda, CloudFront and infrastructure automation.',                4, false],
                ['wordpress',   'fab fa-wordpress',  'WordPress',          'Custom themes, plugins, WooCommerce, performance tuning and headless CMS.',      4, false],
                ['automation',  'fas fa-bolt',       'Workflow Automation', 'n8n, Zapier and custom pipelines that connect apps and remove manual work.',     4, false],
                ['bootstrap',   'fab fa-bootstrap',  'Bootstrap',          'Responsive layouts, SASS theming and accessible component patterns.',            5, false],
                ['js',          'fab fa-js',         'JavaScript / jQuery', 'Async data, DOM-driven interactions and real-time updates.',                    4, false],
                ['marketing',   'fas fa-chart-line', 'Digital Marketing',  'SEO strategy, Google Ads, analytics and conversion optimisation.',               3, false],
            ];
            @endphp
            @foreach ($skills as $i => [$key, $icon, $name, $desc, $level, $featured])
            <div class="card skill reveal {{ $featured ? 'featured conic' : '' }}" data-dir="flip" data-delay="{{ ($i % 5) * 70 }}" data-tilt>
                <div class="skill-icon"><i class="{{ $icon }}"></i></div>
                <h3>{{ $name }}</h3>
                <p>{{ $desc }}</p>
                <div class="level">
                    <span class="dots">@for ($d = 1; $d <= 5; $d++)<i class="{{ $d <= $level ? 'on' : '' }}"></i>@endfor</span>
                    <span>{{ ['', 'basic', 'working', 'strong', 'advanced', 'expert'][$level] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== PROJECTS ===== --}}
<section id="projects">
    <div class="container">
        <div class="section-header">
            <div class="reveal">
                <p class="eyebrow">selected work</p>
                <h2 class="section-title">Projects that<br>speak for <span class="gradient-text">themselves</span>.</h2>
            </div>
            <div class="filters reveal" data-dir="right" data-delay="100">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="ai">AI</button>
                <button class="filter-btn" data-filter="laravel">Laravel</button>
                <button class="filter-btn" data-filter="vue">Vue.js</button>
                <button class="filter-btn" data-filter="react">React</button>
                <button class="filter-btn" data-filter="wordpress">WordPress</button>
                <button class="filter-btn" data-filter="ecommerce">E-Commerce</button>
            </div>
        </div>

        {{-- Featured: AI --}}
        <div class="card conic proj-featured reveal" data-dir="zoom" data-category="ai laravel vue">
            <div class="proj-media">
                <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&w=1400&q=80" alt="AI Customer Support Bot" loading="lazy">
                <span class="proj-badge hot"><i class="fas fa-robot"></i>&nbsp; AI · Featured</span>
                <a href="#contact" class="proj-link" aria-label="Discuss a similar project"><i class="fas fa-arrow-up"></i></a>
            </div>
            <div class="proj-body">
                <p class="proj-kicker">SaaS · Customer Support</p>
                <h3 class="proj-title">AI Customer Support Bot</h3>
                <p class="proj-desc">GPT-4 powered support assistant with a RAG pipeline over the company's docs, automatic ticket routing, sentiment detection and a human hand-off flow. Cut first-response time by 80% for a 12-person support team.</p>
                <div class="proj-tags"><span class="tag">Laravel</span><span class="tag">OpenAI</span><span class="tag">Vue 3</span><span class="tag">Redis</span><span class="tag">Pinecone</span></div>
                <div class="proj-cta"><a href="#contact" class="btn btn-ghost">Build something like this <i class="fas fa-arrow-right"></i></a></div>
            </div>
        </div>

        <div class="proj-grid">
            @php
            $projects = [
                ['ai laravel',          'photo-1555255707-c07966088b7b', 'AI · Automation',   'AI Lead Qualification Agent', 'Inbound leads scored and enriched by an LLM, auto-replied via WhatsApp and pushed to the CRM — zero manual triage.', ['Laravel','OpenAI','n8n','WhatsApp API'], 'AI'],
                ['react ecommerce',     'photo-1522202176988-66273c2fd55f', 'EdTech',            'React E-Learning Platform',    'Course platform with video streaming, progress tracking, quizzes, certificates and instructor dashboards.', ['React','Laravel API','AWS S3','Stripe'], 'React'],
                ['laravel vue',         'photo-1551288049-bebda4e38f71', 'SaaS · Analytics',  'SaaS Analytics Dashboard',     'Multi-tenant analytics with real-time charts, role-based access and subscription billing via Stripe.', ['Laravel 10','Vue 3','Sanctum','AWS'], 'Laravel'],
                ['ecommerce laravel',   'photo-1556742049-0cfed4f6a45d', 'Marketplace',       'Multi-Vendor Marketplace',     'Vendor portals, inventory management, split payments and an automated payout system.', ['Laravel','MySQL','jQuery','S3'], 'E-Commerce'],
                ['wordpress ecommerce', 'photo-1441984904996-e0b6ba687e04', 'Retail',            'WooCommerce Fashion Store',    'Custom WooCommerce theme with advanced filtering, wishlist, loyalty programme and mobile-first UX.', ['WordPress','WooCommerce','PHP'], 'WordPress'],
                ['laravel vue',         'photo-1560518883-ce09059eeffa', 'PropTech',          'Real Estate Portal',           'Property listings with map search, agent CRM, virtual tours and a lead management pipeline.', ['Laravel','Vue.js','Google Maps'], 'Laravel'],
            ];
            @endphp
            @foreach ($projects as $i => [$cat, $photo, $kicker, $title, $desc, $tags, $badge])
            <div class="card proj reveal" data-delay="{{ ($i % 3) * 90 }}" data-category="{{ $cat }}" data-tilt>
                <div class="proj-media">
                    <img src="https://images.unsplash.com/{{ $photo }}?auto=format&fit=crop&w=900&q=80" alt="{{ $title }}" loading="lazy">
                    <span class="proj-badge {{ $badge === 'AI' ? 'hot' : '' }}">{{ $badge }}</span>
                    <a href="#contact" class="proj-link" aria-label="Discuss a similar project"><i class="fas fa-arrow-up"></i></a>
                </div>
                <div class="proj-body">
                    <p class="proj-kicker">{{ $kicker }}</p>
                    <h3 class="proj-title">{{ $title }}</h3>
                    <p class="proj-desc">{{ $desc }}</p>
                    <div class="proj-tags">@foreach ($tags as $t)<span class="tag">{{ $t }}</span>@endforeach</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== CONTACT ===== --}}
<section id="contact">
    <div class="container">
        <div class="contact-wrap">
            <div>
                <div class="reveal" data-dir="left">
                    <p class="eyebrow">contact</p>
                    <h2 class="contact-title">Let's build<br>something <span class="gradient-text">great</span>.</h2>
                    <p class="contact-desc">Have a project in mind or need a reliable Laravel developer who can also wire up AI? I'm open to freelance work, full-time roles and interesting collaborations.</p>
                </div>
                <div class="c-list">
                    <a href="mailto:arslan.devsspace@gmail.com" class="card c-item reveal" data-dir="left" data-delay="60">
                        <div class="c-icon"><i class="fas fa-envelope"></i></div>
                        <div class="c-text"><h5>Email</h5><p>arslan.devsspace@gmail.com</p></div>
                        <i class="fas fa-arrow-up c-arrow" style="transform:rotate(45deg)"></i>
                    </a>
                    <a href="https://wa.me/923044627900" target="_blank" rel="noopener" class="card c-item reveal" data-dir="left" data-delay="140">
                        <div class="c-icon"><i class="fab fa-whatsapp"></i></div>
                        <div class="c-text"><h5>WhatsApp</h5><p>+92 304 462 7900</p></div>
                        <i class="fas fa-arrow-up c-arrow" style="transform:rotate(45deg)"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/arslan-khan-041a09204/" target="_blank" rel="noopener" class="card c-item reveal" data-dir="left" data-delay="220">
                        <div class="c-icon"><i class="fab fa-linkedin-in"></i></div>
                        <div class="c-text"><h5>LinkedIn</h5><p>arslan-khan-041a09204</p></div>
                        <i class="fas fa-arrow-up c-arrow" style="transform:rotate(45deg)"></i>
                    </a>
                    <a href="tel:+923044627900" class="card c-item reveal" data-dir="left" data-delay="300">
                        <div class="c-icon"><i class="fas fa-phone"></i></div>
                        <div class="c-text"><h5>Phone</h5><p>+92 304 462 7900</p></div>
                        <i class="fas fa-arrow-up c-arrow" style="transform:rotate(45deg)"></i>
                    </a>
                </div>
            </div>

            <div class="card conic form-box reveal" data-dir="zoom" data-delay="100">
                <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="form-grid" style="margin-bottom:1rem;">
                        <div class="form-group">
                            <label class="form-label" for="name">Full name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Project discussion">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Tell me about your project…" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-send" id="submitBtn">
                        <i class="fas fa-paper-plane"></i>
                        <span>Send message</span>
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
                msg.textContent = data.message || "Message sent — I'll get back to you soon.";
                msg.style.color = 'var(--mint)';
                form.reset();
                btn.innerHTML = '<i class="fas fa-check"></i> <span>Sent</span>';
                btn.style.background = 'var(--mint)';
            } else {
                msg.textContent = data.message || 'Something went wrong. Please try again.';
                msg.style.color = '#f87171';
                btn.disabled = false;
                btn.innerHTML = '<i class="fas fa-paper-plane"></i> <span>Send message</span>';
            }
        } catch(err) {
            msg.textContent = 'Network error. Please try again.';
            msg.style.color = '#f87171';
            btn.disabled = false;
            btn.innerHTML = '<i class="fas fa-paper-plane"></i> <span>Send message</span>';
        }
        msg.style.display = 'block';
    });
})();
</script>
@endpush
