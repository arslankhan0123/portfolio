<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Arslan Khan — Fullstack Laravel Developer')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,600;12..96,700;12..96,800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    @yield('meta')
    <link rel="icon" type="image/png" href="{{ asset('/frontend/assets/Profile-Pic.png') }}" id="favicon">
    <style>
        /* ================= TOKENS ================= */
        :root {
            --bg:#05060a;
            --bg-2:#0a0c14;
            --surface:rgba(255,255,255,0.03);
            --surface-2:rgba(255,255,255,0.055);
            --line:rgba(255,255,255,0.08);
            --line-2:rgba(255,255,255,0.14);
            --text:#eef0f6;
            --text-muted:#9aa0b4;
            --text-subtle:#5f657a;
            --primary:#7c6cff;
            --primary-2:#a78bfa;
            --primary-glow:rgba(124,108,255,0.45);
            --accent:#ff8a3d;
            --mint:#2ee6a6;
            --font-display:'Bricolage Grotesque', sans-serif;
            --font-body:'Plus Jakarta Sans', sans-serif;
            --font-mono:'JetBrains Mono', monospace;
            --r-sm:12px; --r-md:18px; --r-lg:26px; --r-xl:34px;
            --ease:cubic-bezier(.22,.61,.36,1);
            --ease-spring:cubic-bezier(.34,1.56,.64,1);
            --container:1200px;
        }
        @property --angle { syntax:'<angle>'; initial-value:0deg; inherits:false; }

        *,*::before,*::after { box-sizing:border-box; margin:0; padding:0; }
        html { scroll-behavior:smooth; }
        body {
            font-family:var(--font-body);
            background:var(--bg);
            color:var(--text);
            line-height:1.6;
            overflow-x:hidden;
            -webkit-font-smoothing:antialiased;
        }
        a { color:inherit; text-decoration:none; }
        img { display:block; max-width:100%; }
        button { font-family:inherit; cursor:pointer; }
        ::selection { background:var(--primary); color:#fff; }
        :focus-visible { outline:2px solid var(--primary-2); outline-offset:3px; border-radius:6px; }

        .container { max-width:var(--container); margin:0 auto; padding:0 1.5rem; }
        section { position:relative; padding:7rem 0; z-index:2; }
        @media (max-width:768px) { section { padding:4.5rem 0; } }

        /* ================= BACKDROP ================= */
        .bg-stage { position:fixed; inset:0; z-index:0; pointer-events:none; overflow:hidden; }
        .bg-grid {
            position:absolute; inset:0;
            background-image:radial-gradient(rgba(255,255,255,0.075) 1px, transparent 1px);
            background-size:28px 28px;
            -webkit-mask-image:radial-gradient(ellipse 70% 60% at 50% 20%, #000 20%, transparent 100%);
                    mask-image:radial-gradient(ellipse 70% 60% at 50% 20%, #000 20%, transparent 100%);
            animation:gridDrift 24s linear infinite;
        }
        @keyframes gridDrift { to { background-position:28px 28px; } }
        .aurora {
            position:absolute; border-radius:50%;
            filter:blur(90px); opacity:0.55; mix-blend-mode:screen;
            will-change:transform;
        }
        .aurora-1 { width:640px; height:640px; top:-220px; left:-160px; background:radial-gradient(circle, #7c6cff 0%, transparent 65%); animation:auroraA 22s ease-in-out infinite; }
        .aurora-2 { width:560px; height:560px; top:30%; right:-200px; background:radial-gradient(circle, #ff8a3d 0%, transparent 65%); opacity:0.32; animation:auroraB 26s ease-in-out infinite; }
        .aurora-3 { width:520px; height:520px; bottom:-200px; left:30%; background:radial-gradient(circle, #2ee6a6 0%, transparent 65%); opacity:0.22; animation:auroraC 30s ease-in-out infinite; }
        @keyframes auroraA { 0%,100%{transform:translate(0,0) scale(1)} 50%{transform:translate(140px,90px) scale(1.15)} }
        @keyframes auroraB { 0%,100%{transform:translate(0,0) scale(1)} 50%{transform:translate(-160px,-120px) scale(1.1)} }
        @keyframes auroraC { 0%,100%{transform:translate(0,0) scale(1)} 50%{transform:translate(120px,-80px) scale(0.9)} }
        .noise {
            position:absolute; inset:0; opacity:0.035;
            background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
        }

        /* ================= CURSOR + PROGRESS ================= */
        .cursor-dot,.cursor-ring { position:fixed; top:0; left:0; pointer-events:none; z-index:9999; border-radius:50%; transform:translate(-50%,-50%); opacity:0; }
        html.cursor-on .cursor-dot, html.cursor-on .cursor-ring { opacity:1; }
        .cursor-dot { width:6px; height:6px; background:var(--primary-2); }
        .cursor-ring { width:34px; height:34px; border:1.5px solid rgba(124,108,255,0.6); transition:width .25s var(--ease),height .25s var(--ease),background .25s; }
        .cursor-ring.hovered { width:54px; height:54px; background:rgba(124,108,255,0.12); border-color:var(--primary-2); }
        @media (hover:none) { .cursor-dot,.cursor-ring { display:none; } }
        .scroll-progress { position:fixed; top:0; left:0; height:3px; width:100%; background:linear-gradient(90deg,var(--primary),var(--accent)); transform-origin:left; transform:scaleX(0); z-index:1000; }

        /* ================= NAV ================= */
        .nav {
            position:fixed; top:0; left:0; right:0; z-index:900;
            display:flex; align-items:center; justify-content:space-between;
            padding:1.1rem 2.5rem;
            transition:padding .35s var(--ease), background .35s, border-color .35s, backdrop-filter .35s;
            border-bottom:1px solid transparent;
            animation:navIn .8s var(--ease) both;
        }
        @keyframes navIn { from{opacity:0;transform:translateY(-14px)} to{opacity:1;transform:none} }
        .nav.scrolled { padding:0.7rem 2.5rem; background:rgba(5,6,10,0.72); backdrop-filter:blur(18px) saturate(140%); border-color:var(--line); }
        .nav-brand { font-family:var(--font-display); font-weight:800; font-size:1.35rem; letter-spacing:-0.01em; display:flex; align-items:center; gap:0.6rem; }
        .nav-brand span { color:var(--primary-2); }
        .nav-logo-img {
            width:38px; height:38px; border-radius:50%; object-fit:cover;
            border:2px solid rgba(124,108,255,0.45);
            box-shadow:0 0 0 0 rgba(124,108,255,0.5);
            animation:logoPulse 3.2s ease-in-out infinite;
            transition:transform .4s var(--ease-spring), border-color .3s;
        }
        @keyframes logoPulse { 0%,100%{box-shadow:0 0 0 0 rgba(124,108,255,0.45)} 60%{box-shadow:0 0 0 9px rgba(124,108,255,0)} }
        .nav-brand:hover .nav-logo-img { transform:scale(1.1) rotate(-6deg); border-color:var(--primary-2); }
        .nav-links { display:flex; align-items:center; gap:2rem; }
        .nav-links a { font-size:0.92rem; font-weight:500; color:var(--text-muted); position:relative; transition:color .25s; }
        .nav-links a::after { content:''; position:absolute; left:0; bottom:-6px; width:100%; height:1.5px; background:var(--primary-2); transform:scaleX(0); transform-origin:right; transition:transform .35s var(--ease); }
        .nav-links a:hover { color:var(--text); }
        .nav-links a:hover::after { transform:scaleX(1); transform-origin:left; }
        .nav-links .nav-cta {
            color:#fff; background:var(--primary); padding:0.6rem 1.35rem; border-radius:100px; font-weight:600;
            box-shadow:0 6px 24px var(--primary-glow);
            transition:transform .3s var(--ease-spring), box-shadow .3s;
        }
        .nav-links .nav-cta::after { display:none; }
        .nav-links .nav-cta:hover { transform:translateY(-2px); box-shadow:0 10px 34px var(--primary-glow); }
        .nav-toggle { display:none; background:none; border:0; flex-direction:column; gap:5px; padding:6px; }
        .nav-toggle span { width:24px; height:2px; background:var(--text); border-radius:2px; transition:.3s; }
        @media (max-width:860px) {
            .nav { padding:1rem 1.25rem; }
            .nav.scrolled { padding:0.75rem 1.25rem; }
            .nav-toggle { display:flex; }
            .nav-links {
                position:absolute; top:100%; left:0; right:0;
                flex-direction:column; align-items:flex-start; gap:1.25rem;
                background:rgba(7,8,14,0.96); backdrop-filter:blur(18px);
                padding:1.5rem 1.5rem 2rem; border-bottom:1px solid var(--line);
                transform:translateY(-8px); opacity:0; pointer-events:none; transition:.3s var(--ease);
            }
            .nav-links.open { transform:none; opacity:1; pointer-events:auto; }
        }

        /* ================= SHARED ================= */
        .eyebrow {
            display:inline-flex; align-items:center; gap:0.6rem;
            font-family:var(--font-mono); font-size:0.78rem; color:var(--primary-2);
            margin-bottom:1.1rem;
        }
        .eyebrow::before { content:''; width:28px; height:1px; background:var(--primary-2); animation:eyebrowGrow 2.6s var(--ease) infinite; }
        @keyframes eyebrowGrow { 0%,100%{width:28px} 50%{width:44px} }
        .section-title { font-family:var(--font-display); font-weight:800; font-size:clamp(2rem,4vw,3.3rem); line-height:1.08; letter-spacing:-0.02em; }
        .section-lead { color:var(--text-muted); max-width:560px; margin-top:1rem; font-size:1.02rem; }
        .section-header { display:grid; grid-template-columns:1fr auto; align-items:end; gap:2rem; margin-bottom:3.25rem; }
        @media (max-width:768px) { .section-header { grid-template-columns:1fr; } }
        .gradient-text {
            background:linear-gradient(100deg,var(--primary-2) 0%,#d8b4fe 35%,var(--accent) 100%);
            background-size:220% auto; -webkit-background-clip:text; background-clip:text; color:transparent;
            animation:gradientShift 6s ease infinite;
        }
        @keyframes gradientShift { 0%,100%{background-position:0% 50%} 50%{background-position:100% 50%} }

        /* Spotlight glass card (border glow follows cursor) */
        .card {
            position:relative; border-radius:var(--r-lg);
            background:var(--surface); border:1px solid var(--line);
            overflow:hidden; isolation:isolate;
            transition:transform .5s var(--ease), border-color .4s, box-shadow .5s;
        }
        .card::before {
            content:''; position:absolute; inset:0; z-index:-1; opacity:0;
            background:radial-gradient(520px circle at var(--mx,50%) var(--my,50%), rgba(124,108,255,0.16), transparent 42%);
            transition:opacity .4s;
        }
        .card:hover::before { opacity:1; }
        .card:hover { border-color:var(--line-2); box-shadow:0 24px 60px -24px rgba(0,0,0,0.7); }
        /* Rotating conic border (ambient) */
        .card.conic { border-color:transparent; }
        .card.conic::after {
            content:''; position:absolute; inset:0; z-index:-2; border-radius:inherit; padding:1px;
            background:conic-gradient(from var(--angle), transparent 0 55%, var(--primary) 72%, var(--accent) 84%, transparent 100%);
            -webkit-mask:linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
                    mask:linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
            -webkit-mask-composite:xor; mask-composite:exclude;
            animation:spin 6s linear infinite;
        }
        @keyframes spin { to { --angle:360deg; } }

        /* Reveal engine — hidden ONLY when JS confirms it can reveal */
        html.js .reveal { opacity:0; transform:translateY(28px); transition:opacity .9s var(--ease), transform .9s var(--ease); }
        html.js .reveal.in { opacity:1; transform:none; }
        html.js .reveal[data-dir="left"]  { transform:translateX(-36px); }
        html.js .reveal[data-dir="right"] { transform:translateX(36px); }
        html.js .reveal[data-dir="zoom"]  { transform:scale(0.94); }
        html.js .reveal[data-dir="flip"]  { transform:perspective(900px) rotateX(14deg) translateY(28px); }
        html.js .reveal.in[data-dir]     { transform:none; }
        @media (prefers-reduced-motion:reduce) {
            *,*::before,*::after { animation-duration:.001ms !important; animation-iteration-count:1 !important; transition-duration:.001ms !important; }
            html.js .reveal { opacity:1; transform:none; }
        }

        /* Buttons */
        .btn { display:inline-flex; align-items:center; gap:0.6rem; font-weight:600; font-size:0.95rem; border-radius:100px; padding:0.95rem 1.8rem; border:1px solid transparent; transition:transform .35s var(--ease-spring), box-shadow .35s, background .3s, border-color .3s; will-change:transform; }
        .btn-primary { background:var(--primary); color:#fff; box-shadow:0 10px 30px -6px var(--primary-glow); }
        .btn-primary:hover { box-shadow:0 16px 40px -6px var(--primary-glow); }
        .btn-ghost { background:var(--surface); color:var(--text); border-color:var(--line-2); backdrop-filter:blur(8px); }
        .btn-ghost:hover { background:var(--surface-2); border-color:rgba(124,108,255,0.5); }
        .btn i { transition:transform .35s var(--ease); }
        .btn:hover i { transform:translateX(3px); }

        /* ================= HERO ================= */
        .hero { min-height:100vh; display:flex; align-items:center; padding:8rem 0 4rem; }
        .hero-inner { display:grid; grid-template-columns:1.1fr 0.9fr; gap:3rem; align-items:center; }
        .hero-badge {
            display:inline-flex; align-items:center; gap:0.55rem;
            padding:0.45rem 1rem; border-radius:100px;
            background:rgba(46,230,166,0.08); border:1px solid rgba(46,230,166,0.25);
            font-size:0.82rem; font-weight:500; color:#b6f5dd;
            animation:fadeUp .8s var(--ease) .15s both;
        }
        .pulse-dot { width:8px; height:8px; border-radius:50%; background:var(--mint); position:relative; }
        .pulse-dot::after { content:''; position:absolute; inset:-4px; border-radius:50%; border:1.5px solid var(--mint); animation:ping 1.8s var(--ease) infinite; }
        @keyframes ping { 0%{transform:scale(.6);opacity:1} 100%{transform:scale(1.9);opacity:0} }
        .hero-title {
            font-family:var(--font-display); font-weight:800;
            font-size:clamp(2.4rem,5.2vw,4.4rem); line-height:1.02; letter-spacing:-0.03em;
            margin:1.5rem 0 1.25rem;
        }
        .hero-title .line { display:block; overflow:hidden; }
        .hero-title .line > span { display:block; animation:lineUp 1s var(--ease) both; }
        .hero-title .line:nth-child(1) > span { animation-delay:.3s; }
        .hero-title .line:nth-child(2) > span { animation-delay:.42s; }
        .hero-title .line:nth-child(3) > span { animation-delay:.54s; }
        @keyframes lineUp { from{transform:translateY(110%)} to{transform:none} }
        @keyframes fadeUp { from{opacity:0;transform:translateY(18px)} to{opacity:1;transform:none} }
        .hero-role { font-family:var(--font-mono); font-size:0.95rem; color:var(--primary-2); display:flex; align-items:center; gap:0.5rem; animation:fadeUp .8s var(--ease) .7s both; }
        .hero-role .prompt { color:var(--accent); }
        .blink { display:inline-block; width:2px; height:1.1em; background:var(--primary-2); animation:blink 1s steps(2) infinite; }
        @keyframes blink { 50%{opacity:0} }
        .hero-desc { color:var(--text-muted); font-size:1.08rem; max-width:520px; margin:1.4rem 0 2.2rem; animation:fadeUp .8s var(--ease) .85s both; }
        .hero-actions { display:flex; gap:0.9rem; flex-wrap:wrap; animation:fadeUp .8s var(--ease) 1s both; }
        .hero-pills { display:flex; flex-wrap:wrap; gap:0.55rem; margin-top:2.4rem; animation:fadeUp .8s var(--ease) 1.15s both; }
        .tech-pill {
            display:inline-flex; align-items:center; gap:0.45rem;
            padding:0.42rem 0.85rem; border-radius:100px;
            background:var(--surface); border:1px solid var(--line);
            font-family:var(--font-mono); font-size:0.76rem; color:var(--text-muted);
            transition:.3s var(--ease);
        }
        .tech-pill i { color:var(--primary-2); }
        .tech-pill:hover { border-color:rgba(124,108,255,0.5); color:var(--text); transform:translateY(-2px); background:var(--surface-2); }

        /* Portrait card */
        .hero-visual { position:relative; display:flex; justify-content:center; animation:fadeUp 1s var(--ease) .5s both; }
        .portrait-wrap { position:relative; width:min(420px,100%); aspect-ratio:1/1; }
        .portrait-ring {
            position:absolute; inset:-14%; border-radius:50%;
            border:1px dashed rgba(124,108,255,0.35);
            animation:rotate 40s linear infinite;
        }
        .portrait-ring::before { content:''; position:absolute; top:-5px; left:50%; width:10px; height:10px; border-radius:50%; background:var(--accent); box-shadow:0 0 18px var(--accent); }
        @keyframes rotate { to { transform:rotate(360deg); } }
        .portrait-card {
            position:relative; width:100%; height:100%;
            border-radius:50%; overflow:hidden;
            background:linear-gradient(160deg, rgba(124,108,255,0.22), rgba(255,138,61,0.12));
            border:1px solid var(--line-2);
            box-shadow:0 40px 80px -30px rgba(124,108,255,0.5), inset 0 1px 0 rgba(255,255,255,0.12);
            animation:portraitFloat 7s ease-in-out infinite;
            transition:transform .4s var(--ease);
            transform-style:preserve-3d;
        }
        @keyframes portraitFloat { 0%,100%{translate:0 0} 50%{translate:0 -14px} }
        .portrait-card img { width:100%; height:100%; object-fit:cover; object-position:top center; }
        .portrait-card::after {
            content:''; position:absolute; inset:0;
            background:linear-gradient(180deg, transparent 60%, rgba(5,6,10,0.9) 100%);
        }
        .portrait-ring { inset:-8%; }
        .portrait-shine { position:absolute; inset:0; background:linear-gradient(115deg, transparent 30%, rgba(255,255,255,0.14) 45%, transparent 60%); background-size:250% 100%; animation:shine 5.5s ease-in-out infinite; z-index:2; pointer-events:none; }
        @keyframes shine { 0%{background-position:150% 0} 100%{background-position:-150% 0} }
        .portrait-name { position:absolute; left:0; right:0; bottom:2.4rem; z-index:3; text-align:center; }
        .portrait-name strong { font-family:var(--font-display); font-size:1.25rem; display:block; }
        .portrait-name small { color:var(--text-muted); font-size:0.8rem; }
        .avatar-placeholder { display:none; align-items:center; justify-content:center; height:100%; font-family:var(--font-display); font-size:5rem; font-weight:800; color:var(--primary-2); }
        .chip {
            position:absolute; z-index:4;
            display:flex; align-items:center; gap:0.6rem;
            padding:0.6rem 0.9rem; border-radius:14px;
            background:rgba(10,12,20,0.78); backdrop-filter:blur(14px);
            border:1px solid var(--line-2);
            box-shadow:0 14px 34px -12px rgba(0,0,0,0.8);
            font-size:0.78rem; color:var(--text-muted); white-space:nowrap;
            animation:chipFloat 6s ease-in-out infinite;
        }
        .chip b { color:var(--text); font-family:var(--font-display); font-size:1rem; }
        .chip i { width:30px; height:30px; display:grid; place-items:center; border-radius:9px; background:rgba(124,108,255,0.16); color:var(--primary-2); }
        .chip-1 { top:10%; left:-12%; animation-delay:0s; }
        .chip-2 { top:44%; right:-18%; animation-delay:-2s; }
        .chip-3 { bottom:4%; left:-6%; animation-delay:-4s; }
        .chip-3 i { background:rgba(46,230,166,0.14); color:var(--mint); }
        .chip-2 i { background:rgba(255,138,61,0.16); color:var(--accent); }
        @keyframes chipFloat { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-12px)} }
        @media (max-width:1024px) {
            .hero-inner { grid-template-columns:1fr; gap:4rem; }
            .hero-visual { order:-1; }
            .portrait-wrap { width:min(340px,80%); }
            .chip-1 { left:-6%; } .chip-2 { right:-8%; } .chip-3 { right:-4%; }
        }
        @media (max-width:520px) { .chip { font-size:0.7rem; padding:0.5rem 0.7rem; } .chip-1{left:-2%} .chip-2{right:-4%} .chip-3{left:0;bottom:-4%} .portrait-name{bottom:3.4rem} }

        /* ================= MARQUEE ================= */
        .marquee-wrap { position:relative; z-index:2; padding:0.5rem 0 1rem; border-top:1px solid var(--line); border-bottom:1px solid var(--line); background:rgba(255,255,255,0.015); overflow:hidden; }
        .marquee { display:flex; width:max-content; animation:marquee 38s linear infinite; }
        .marquee-wrap:hover .marquee { animation-play-state:paused; }
        .marquee-item { display:inline-flex; align-items:center; gap:0.7rem; padding:1rem 2.2rem; font-family:var(--font-display); font-weight:600; font-size:1.05rem; color:var(--text-muted); transition:color .3s; }
        .marquee-item:hover { color:var(--text); }
        .marquee-item i { color:var(--primary-2); font-size:1.25rem; }
        .marquee-item .sep { width:6px; height:6px; border-radius:50%; background:var(--accent); margin-left:2.2rem; }
        @keyframes marquee { to { transform:translateX(-50%); } }
        .marquee-wrap::before,.marquee-wrap::after { content:''; position:absolute; top:0; bottom:0; width:120px; z-index:2; pointer-events:none; }
        .marquee-wrap::before { left:0; background:linear-gradient(90deg,var(--bg),transparent); }
        .marquee-wrap::after { right:0; background:linear-gradient(-90deg,var(--bg),transparent); }

        /* ================= ABOUT (BENTO) ================= */
        .bento { display:grid; grid-template-columns:repeat(12,1fr); grid-auto-rows:minmax(150px,auto); gap:1.1rem; }
        .b-intro { grid-column:span 7; grid-row:span 2; padding:2.4rem; }
        .b-stat { grid-column:span 5; padding:2rem 2.2rem; display:flex; flex-direction:column; justify-content:space-between; }
        .b-stack { grid-column:span 5; padding:2rem 2.2rem; }
        .b-quote { grid-column:span 7; padding:2.4rem; display:flex; flex-direction:column; justify-content:center; gap:1.4rem; }
        .b-quote .q-row { display:flex; align-items:flex-start; gap:1.25rem; }
        .principles { display:flex; flex-wrap:wrap; gap:0.6rem; }
        .principle { display:inline-flex; align-items:center; gap:0.5rem; padding:0.5rem 0.9rem; border-radius:100px; background:var(--surface); border:1px solid var(--line); font-size:0.82rem; color:var(--text-muted); transition:.3s; }
        .principle i { color:var(--mint); font-size:0.75rem; }
        .principle:hover { border-color:var(--line-2); color:var(--text); transform:translateY(-2px); }
        .b-label { font-family:var(--font-mono); font-size:0.72rem; color:var(--text-subtle); margin-bottom:1rem; }
        .b-heading { font-family:var(--font-display); font-weight:700; font-size:1.55rem; letter-spacing:-0.01em; margin-bottom:1rem; line-height:1.2; }
        .b-text { color:var(--text-muted); font-size:0.98rem; margin-bottom:0.9rem; }
        .b-meta { display:flex; flex-wrap:wrap; gap:0.8rem; margin-top:1.4rem; }
        .avail { display:inline-flex; align-items:center; gap:0.5rem; padding:0.45rem 0.9rem; border-radius:100px; background:rgba(46,230,166,0.08); border:1px solid rgba(46,230,166,0.25); font-size:0.8rem; color:#b6f5dd; }
        .loc { display:inline-flex; align-items:center; gap:0.5rem; font-size:0.85rem; color:var(--text-muted); }
        .loc i { color:var(--accent); }
        .stat-row { display:flex; align-items:baseline; gap:0.4rem; }
        .stat-num { font-family:var(--font-display); font-weight:800; font-size:clamp(2.8rem,5vw,4rem); line-height:1; letter-spacing:-0.03em; background:linear-gradient(135deg,#fff,var(--primary-2)); -webkit-background-clip:text; background-clip:text; color:transparent; animation:statGlow 3.4s ease-in-out infinite; }
        @keyframes statGlow { 0%,100%{filter:drop-shadow(0 0 0 transparent)} 50%{filter:drop-shadow(0 0 22px rgba(124,108,255,0.55))} }
        .stat-sub { color:var(--text-muted); font-size:0.9rem; margin-top:0.6rem; }
        .b-stat .spark { height:40px; margin-top:1rem; display:flex; align-items:flex-end; gap:4px; }
        .b-stat .spark i { flex:1; background:linear-gradient(180deg,var(--primary-2),rgba(124,108,255,0.1)); border-radius:3px 3px 0 0; transform-origin:bottom; animation:sparkPulse 2.8s ease-in-out infinite; }
        .b-stat .spark i:nth-child(odd) { animation-delay:-1.4s; }
        @keyframes sparkPulse { 0%,100%{transform:scaleY(.65)} 50%{transform:scaleY(1)} }
        .stack-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:0.6rem; }
        .stack-item { display:flex; align-items:center; gap:0.6rem; font-size:0.88rem; color:var(--text-muted); padding:0.55rem 0.75rem; border-radius:10px; background:var(--surface); border:1px solid transparent; transition:.3s; }
        .stack-item i { color:var(--primary-2); width:18px; text-align:center; }
        .stack-item:hover { color:var(--text); border-color:var(--line-2); transform:translateX(3px); }
        .b-quote blockquote { font-family:var(--font-display); font-size:1.45rem; font-weight:600; line-height:1.35; letter-spacing:-0.01em; }
        .b-quote .q-mark { font-family:var(--font-display); font-size:4rem; line-height:0.8; color:var(--accent); opacity:0.8; animation:chipFloat 5s ease-in-out infinite; }
        .b-highlight { background:linear-gradient(140deg, rgba(124,108,255,0.18), rgba(124,108,255,0.03)); }
        @media (max-width:980px) { .b-intro,.b-stat,.b-stack,.b-quote { grid-column:span 12; grid-row:auto; } }

        /* ================= SKILLS ================= */
        .skills-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:1rem; }
        .skill { padding:1.5rem 1.4rem 1.3rem; display:flex; flex-direction:column; gap:0.85rem; min-height:220px; }
        .skill-icon { width:48px; height:48px; border-radius:14px; display:grid; place-items:center; font-size:1.35rem; color:var(--primary-2); background:rgba(124,108,255,0.12); border:1px solid rgba(124,108,255,0.2); animation:iconFloat 4s ease-in-out infinite; transition:.4s var(--ease-spring); }
        .skills-grid .skill:nth-child(2n) .skill-icon { animation-delay:-1s; }
        .skills-grid .skill:nth-child(3n) .skill-icon { animation-delay:-2s; }
        .skills-grid .skill:nth-child(5n) .skill-icon { animation-delay:-3s; }
        @keyframes iconFloat { 0%,100%{transform:translateY(0) rotate(0)} 50%{transform:translateY(-6px) rotate(-4deg)} }
        .skill:hover .skill-icon { transform:scale(1.12) rotate(6deg); background:var(--primary); color:#fff; }
        .skill h3 { font-family:var(--font-display); font-weight:700; font-size:1.05rem; }
        .skill p { color:var(--text-muted); font-size:0.84rem; line-height:1.5; flex:1; }
        .level { display:flex; align-items:center; gap:0.5rem; font-family:var(--font-mono); font-size:0.7rem; color:var(--text-subtle); }
        .level .dots { display:flex; gap:4px; }
        .level .dots i { width:14px; height:4px; border-radius:2px; background:var(--line-2); }
        .level .dots i.on { background:var(--primary-2); box-shadow:0 0 10px rgba(124,108,255,0.6); animation:dotGlow 2.4s ease-in-out infinite; }
        .level .dots i.on:nth-child(2){animation-delay:.15s} .level .dots i.on:nth-child(3){animation-delay:.3s} .level .dots i.on:nth-child(4){animation-delay:.45s} .level .dots i.on:nth-child(5){animation-delay:.6s}
        @keyframes dotGlow { 0%,100%{opacity:.75} 50%{opacity:1} }
        .skill.featured { grid-column:span 2; background:linear-gradient(140deg, rgba(124,108,255,0.16), rgba(255,138,61,0.06)); }
        .skill.featured .skill-icon { background:linear-gradient(135deg,var(--primary),var(--accent)); color:#fff; border-color:transparent; }
        @media (max-width:1100px) { .skills-grid { grid-template-columns:repeat(3,1fr); } }
        @media (max-width:700px)  { .skills-grid { grid-template-columns:repeat(2,1fr); } .skill.featured { grid-column:span 2; } }
        @media (max-width:420px)  { .skills-grid { grid-template-columns:1fr; } .skill.featured { grid-column:span 1; } }

        /* ================= PROJECTS ================= */
        .filters { display:flex; flex-wrap:wrap; gap:0.5rem; }
        .filter-btn { padding:0.5rem 1.05rem; border-radius:100px; border:1px solid var(--line); background:var(--surface); color:var(--text-muted); font-size:0.82rem; font-weight:500; transition:.3s var(--ease); }
        .filter-btn:hover { color:var(--text); border-color:var(--line-2); transform:translateY(-1px); }
        .filter-btn.active { background:var(--primary); border-color:var(--primary); color:#fff; box-shadow:0 8px 22px -6px var(--primary-glow); }

        .proj-featured { display:grid; grid-template-columns:1.15fr 1fr; margin-bottom:1.1rem; min-height:380px; }
        .proj-featured .proj-media { min-height:320px; }
        .proj-featured .proj-body { padding:2.6rem 2.6rem 2.4rem; display:flex; flex-direction:column; justify-content:center; }
        .proj-featured .proj-title { font-size:1.9rem; }
        .proj-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:1.1rem; }
        .proj { display:flex; flex-direction:column; }
        .proj-media { position:relative; overflow:hidden; aspect-ratio:16/10; background:linear-gradient(135deg,#1a1d33,#0d0f1c); }
        .proj-featured .proj-media { aspect-ratio:auto; }
        .proj-media img { width:100%; height:100%; object-fit:cover; transition:transform 1.1s var(--ease), filter .6s; transform:scale(1.02); }
        .proj:hover .proj-media img, .proj-featured:hover .proj-media img { transform:scale(1.08); }
        .proj-media::after { content:''; position:absolute; inset:0; background:linear-gradient(180deg, rgba(5,6,10,0) 50%, rgba(5,6,10,0.75) 100%); pointer-events:none; }
        .proj-media.fallback::before { content:'\f121'; font-family:'Font Awesome 6 Free'; font-weight:900; position:absolute; inset:0; display:grid; place-items:center; font-size:3rem; color:rgba(124,108,255,0.5); }
        .proj-badge { position:absolute; top:14px; left:14px; z-index:3; padding:0.3rem 0.75rem; border-radius:100px; background:rgba(5,6,10,0.7); backdrop-filter:blur(10px); border:1px solid var(--line-2); font-family:var(--font-mono); font-size:0.68rem; color:var(--text); letter-spacing:0.04em; }
        .proj-badge.hot { background:var(--primary); border-color:var(--primary); color:#fff; box-shadow:0 6px 20px var(--primary-glow); animation:badgePulse 2.4s ease-in-out infinite; }
        @keyframes badgePulse { 0%,100%{box-shadow:0 6px 20px var(--primary-glow)} 50%{box-shadow:0 6px 30px rgba(124,108,255,0.8)} }
        .proj-link { position:absolute; right:14px; bottom:14px; z-index:3; width:42px; height:42px; border-radius:50%; display:grid; place-items:center; background:rgba(255,255,255,0.1); backdrop-filter:blur(10px); border:1px solid var(--line-2); color:#fff; transform:translateY(8px); opacity:0; transition:.4s var(--ease); }
        .proj:hover .proj-link, .proj-featured:hover .proj-link { transform:none; opacity:1; }
        .proj-link i { transition:transform .3s; }
        .proj-link:hover { background:var(--primary); border-color:var(--primary); }
        .proj-link:hover i { transform:rotate(45deg); }
        .proj-body { padding:1.5rem 1.5rem 1.4rem; display:flex; flex-direction:column; gap:0.7rem; flex:1; }
        .proj-kicker { font-family:var(--font-mono); font-size:0.7rem; color:var(--accent); }
        .proj-title { font-family:var(--font-display); font-weight:700; font-size:1.2rem; letter-spacing:-0.01em; transition:color .3s; }
        .proj:hover .proj-title { color:var(--primary-2); }
        .proj-desc { color:var(--text-muted); font-size:0.9rem; flex:1; }
        .proj-tags { display:flex; flex-wrap:wrap; gap:0.4rem; margin-top:0.4rem; }
        .tag { padding:0.28rem 0.65rem; border-radius:6px; background:rgba(124,108,255,0.1); border:1px solid rgba(124,108,255,0.18); font-family:var(--font-mono); font-size:0.68rem; color:var(--primary-2); }
        .proj-featured .proj-desc { font-size:1rem; flex:0; margin:0.5rem 0 1rem; }
        .proj-featured .proj-cta { margin-top:1.4rem; }
        @media (max-width:1000px) { .proj-grid { grid-template-columns:repeat(2,1fr); } .proj-featured { grid-template-columns:1fr; } .proj-featured .proj-media { aspect-ratio:16/9; min-height:0; } }
        @media (max-width:600px)  { .proj-grid { grid-template-columns:1fr; } }

        /* ================= CONTACT ================= */
        .contact-wrap { display:grid; grid-template-columns:1fr 1.05fr; gap:3.5rem; align-items:start; }
        .contact-title { font-family:var(--font-display); font-weight:800; font-size:clamp(2.2rem,4.4vw,3.6rem); line-height:1.04; letter-spacing:-0.03em; }
        .contact-desc { color:var(--text-muted); font-size:1.02rem; margin:1.3rem 0 2.2rem; max-width:480px; }
        .c-list { display:grid; gap:0.8rem; }
        .c-item { display:flex; align-items:center; gap:1rem; padding:1rem 1.2rem; }
        .c-icon { width:46px; height:46px; border-radius:13px; display:grid; place-items:center; font-size:1.05rem; color:var(--primary-2); background:rgba(124,108,255,0.12); border:1px solid rgba(124,108,255,0.2); flex-shrink:0; transition:.35s var(--ease-spring); }
        .c-item:hover .c-icon { background:var(--primary); color:#fff; transform:rotate(-8deg) scale(1.08); }
        .c-text h5 { font-size:0.74rem; font-weight:500; color:var(--text-subtle); text-transform:none; margin-bottom:2px; }
        .c-text p { font-weight:600; font-size:0.95rem; }
        .c-arrow { margin-left:auto; color:var(--text-subtle); transition:.3s var(--ease); }
        .c-item:hover .c-arrow { color:var(--primary-2); transform:translate(3px,-3px); }
        .form-box { padding:2.2rem; }
        .form-grid { display:grid; grid-template-columns:1fr 1fr; gap:1rem; }
        .form-group { display:flex; flex-direction:column; gap:0.45rem; margin-bottom:1rem; }
        .form-grid .form-group { margin-bottom:0; }
        .form-label { font-size:0.8rem; font-weight:500; color:var(--text-muted); }
        .form-control { width:100%; padding:0.9rem 1.05rem; border-radius:12px; background:rgba(255,255,255,0.035); border:1px solid var(--line); color:var(--text); font-family:inherit; font-size:0.93rem; transition:.3s; }
        .form-control::placeholder { color:var(--text-subtle); }
        .form-control:focus { outline:none; border-color:var(--primary); background:rgba(124,108,255,0.06); box-shadow:0 0 0 4px rgba(124,108,255,0.14); }
        textarea.form-control { min-height:140px; resize:vertical; }
        .btn-send { width:100%; justify-content:center; margin-top:0.5rem; border:0; font-size:1rem; }
        @media (max-width:900px) { .contact-wrap { grid-template-columns:1fr; } .form-grid { grid-template-columns:1fr; gap:1rem; } }

        /* ================= FOOTER ================= */
        .site-footer { position:relative; z-index:2; padding:3rem 2.5rem 2rem; border-top:1px solid var(--line); display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:1.25rem; background:rgba(255,255,255,0.012); }
        .footer-brand { font-family:var(--font-display); font-weight:800; font-size:1.25rem; letter-spacing:-0.01em; display:flex; align-items:center; gap:0.6rem; }
        .footer-brand span { color:var(--primary-2); }
        .footer-brand img { width:36px; height:36px; border-radius:50%; object-fit:cover; border:2px solid rgba(124,108,255,0.45); flex-shrink:0; }
        .footer-nav { display:flex; gap:1.75rem; }
        .footer-nav a { font-size:0.88rem; color:var(--text-muted); transition:color .25s; }
        .footer-nav a:hover { color:var(--text); }
        .footer-socials { display:flex; gap:0.6rem; }
        .s-link { width:42px; height:42px; border-radius:50%; display:grid; place-items:center; background:var(--surface); border:1px solid var(--line); color:var(--text-muted); transition:.35s var(--ease-spring); }
        .s-link:hover { background:var(--primary); border-color:var(--primary); color:#fff; transform:translateY(-4px) rotate(-6deg); box-shadow:0 10px 24px -6px var(--primary-glow); }
        .footer-copy { width:100%; text-align:center; font-size:0.78rem; color:var(--text-subtle); padding-top:1.4rem; border-top:1px solid var(--line); }
        @media (max-width:768px) { .site-footer { flex-direction:column; align-items:flex-start; padding:2.25rem 1.5rem 1.5rem; } .footer-nav { display:none; } }
    </style>
    <script>document.documentElement.classList.add('js');</script>
</head>
<body>

<div class="cursor-dot" id="cursorDot"></div>
<div class="cursor-ring" id="cursorRing"></div>
<div class="scroll-progress" id="scrollProg"></div>

<div class="bg-stage" aria-hidden="true">
    <div class="bg-grid"></div>
    <div class="aurora aurora-1"></div>
    <div class="aurora aurora-2"></div>
    <div class="aurora aurora-3"></div>
    <div class="noise"></div>
</div>

@include('layouts.frontend.header')

@yield('content')

@include('layouts.frontend.footer')

<script>
(function () {
    "use strict";
    const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ── REVEAL ENGINE (never leaves content hidden) ── */
    const revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && !reduce) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    const el = e.target;
                    const d = parseInt(el.dataset.delay || 0, 10);
                    setTimeout(() => el.classList.add('in'), d);
                    io.unobserve(el);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -6% 0px' });
        revealEls.forEach(el => io.observe(el));
        // safety net: anything still hidden after 6s becomes visible
        setTimeout(() => revealEls.forEach(el => el.classList.add('in')), 6000);
    } else {
        revealEls.forEach(el => el.classList.add('in'));
    }

    /* ── CURSOR ── */
    const dot = document.getElementById('cursorDot'), ring = document.getElementById('cursorRing');
    if (dot && ring && matchMedia('(hover:hover)').matches) {
        let mx = 0, my = 0, rx = 0, ry = 0;
        document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; dot.style.left = mx + 'px'; dot.style.top = my + 'px'; document.documentElement.classList.add('cursor-on'); });
        (function raf() { rx += (mx - rx) * .14; ry += (my - ry) * .14; ring.style.left = rx + 'px'; ring.style.top = ry + 'px'; requestAnimationFrame(raf); })();
        document.querySelectorAll('a,button,.card,.tech-pill,.marquee-item').forEach(el => {
            el.addEventListener('mouseenter', () => ring.classList.add('hovered'));
            el.addEventListener('mouseleave', () => ring.classList.remove('hovered'));
        });
    }

    /* ── SPOTLIGHT CARDS (border glow follows cursor) ── */
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('pointermove', e => {
            const r = card.getBoundingClientRect();
            card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
            card.style.setProperty('--my', (e.clientY - r.top) + 'px');
        });
    });

    /* ── 3D TILT (subtle) ── */
    if (matchMedia('(hover:hover)').matches && !reduce) {
        document.querySelectorAll('[data-tilt]').forEach(card => {
            card.addEventListener('mousemove', e => {
                const r = card.getBoundingClientRect();
                const x = (e.clientX - r.left) / r.width - .5, y = (e.clientY - r.top) / r.height - .5;
                card.style.transform = `perspective(1000px) rotateX(${-y * 7}deg) rotateY(${x * 7}deg) translateY(-4px)`;
            });
            card.addEventListener('mouseleave', () => { card.style.transform = ''; });
        });
    }

    /* ── MAGNETIC BUTTONS ── */
    if (matchMedia('(hover:hover)').matches && !reduce) {
        document.querySelectorAll('.btn, .nav-cta').forEach(btn => {
            btn.addEventListener('mousemove', e => {
                const r = btn.getBoundingClientRect();
                const x = e.clientX - r.left - r.width / 2, y = e.clientY - r.top - r.height / 2;
                btn.style.transform = `translate(${x * .18}px, ${y * .22}px)`;
            });
            btn.addEventListener('mouseleave', () => { btn.style.transform = ''; });
        });
    }

    /* ── SCROLL PROGRESS + NAV + PARALLAX ── */
    const nav = document.getElementById('mainNav'), prog = document.getElementById('scrollProg');
    const auroras = document.querySelectorAll('.aurora');
    let ticking = false;
    function onScroll() {
        const y = scrollY;
        if (nav) nav.classList.toggle('scrolled', y > 40);
        if (prog) prog.style.transform = 'scaleX(' + Math.min(y / (document.body.scrollHeight - innerHeight || 1), 1) + ')';
        auroras.forEach((a, i) => { a.style.translate = '0 ' + (y * (0.06 + i * 0.03)) + 'px'; });
        ticking = false;
    }
    window.addEventListener('scroll', () => { if (!ticking) { requestAnimationFrame(onScroll); ticking = true; } }, { passive: true });
    onScroll();

    /* ── MOBILE NAV ── */
    const toggle = document.getElementById('navToggle'), links = document.getElementById('navLinks');
    if (toggle && links) {
        toggle.addEventListener('click', () => links.classList.toggle('open'));
        links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => links.classList.remove('open')));
    }

    /* ── TYPEWRITER ── */
    const roles = ['Laravel Developer', 'AI Automation Engineer', 'Vue.js Engineer', 'Fullstack Builder'];
    let ri = 0, ci = 0, del = false;
    const tyEl = document.getElementById('typedRole');
    if (tyEl) {
        (function type() {
            const w = roles[ri];
            if (del) { ci--; tyEl.textContent = w.slice(0, ci); if (!ci) { del = false; ri = (ri + 1) % roles.length; setTimeout(type, 420); return; } setTimeout(type, 45); }
            else { ci++; tyEl.textContent = w.slice(0, ci); if (ci === w.length) { del = true; setTimeout(type, 2200); return; } setTimeout(type, 85); }
        })();
    }

    /* ── COUNTERS ── */
    function runCounter(el) {
        const tgt = parseInt(el.dataset.target, 10), suf = el.dataset.suffix || '', dur = 1600, t0 = performance.now();
        (function step(now) { const p = Math.min((now - t0) / dur, 1); const e = 1 - Math.pow(1 - p, 3); el.textContent = Math.round(e * tgt) + suf; if (p < 1) requestAnimationFrame(step); })(t0);
    }
    const counters = document.querySelectorAll('[data-target]');
    if ('IntersectionObserver' in window) {
        const cio = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { runCounter(e.target); cio.unobserve(e.target); } }), { threshold: 0.4 });
        counters.forEach(el => cio.observe(el));
    } else { counters.forEach(runCounter); }

    /* ── PROJECT FILTER ── */
    const cards = document.querySelectorAll('[data-category]');
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const f = btn.dataset.filter;
            cards.forEach(c => {
                const show = f === 'all' || (c.dataset.category || '').split(' ').includes(f);
                c.style.display = show ? '' : 'none';
                if (show) { c.classList.remove('in'); requestAnimationFrame(() => requestAnimationFrame(() => c.classList.add('in'))); }
            });
        });
    });

    /* ── IMAGE FALLBACKS ── */
    document.querySelectorAll('.proj-media img').forEach(img => {
        img.addEventListener('error', () => { img.style.display = 'none'; img.parentElement.classList.add('fallback'); });
    });

    /* ── CIRCULAR FAVICON ── */
    const fimg = new Image();
    fimg.onload = function () {
        try {
            const c = document.createElement('canvas'); c.width = c.height = 64;
            const ctx = c.getContext('2d');
            ctx.beginPath(); ctx.arc(32, 32, 32, 0, Math.PI * 2); ctx.closePath(); ctx.clip();
            ctx.drawImage(fimg, 0, 0, 64, 64);
            const link = document.getElementById('favicon'); if (link) link.href = c.toDataURL('image/png');
        } catch (e) {}
    };
    fimg.src = '{{ asset('/frontend/assets/Profile-Pic.png') }}';
})();
</script>

@stack('scripts')
</body>
</html>
