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
    <link rel="icon" type="image/png" href="{{ asset('/frontend/assets/Profile-Pic.png') }}">
    <style>
        /* ===== TOKENS ===== */
        :root {
            --bg: #07090f;
            --surface: #0c1020;
            --card: #111827;
            --card-hover: #141f35;
            --border: rgba(255,255,255,0.07);
            --border-active: rgba(109,93,252,0.4);
            --primary: #6d5dfc;
            --primary-light: #9b8fff;
            --primary-glow: rgba(109,93,252,0.2);
            --accent: #f0a500;
            --green: #10b981;
            --text: #e8eaf0;
            --text-muted: #6b7593;
            --text-subtle: #3d4562;
            --font-display: 'Bricolage Grotesque', sans-serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
            --radius-sm: 10px;
            --radius-md: 16px;
            --radius-lg: 22px;
            --radius-xl: 30px;
            --tr: 0.32s cubic-bezier(0.4,0,0.2,1);
            --tr-fast: 0.18s cubic-bezier(0.4,0,0.2,1);
            --shadow-glow: 0 0 40px rgba(109,93,252,0.2);
        }

        /* ===== RESET ===== */
        *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
        html { scroll-behavior:smooth; font-size:16px; }
        body {
            font-family: var(--font-body);
            background: var(--bg);
            color: var(--text);
            line-height: 1.65;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }
        img { max-width:100%; display:block; }
        a { color:inherit; text-decoration:none; }
        button { border:none; background:none; cursor:pointer; font-family:inherit; }
        ul { list-style:none; }

        /* ===== SCROLLBAR ===== */
        ::-webkit-scrollbar { width:4px; }
        ::-webkit-scrollbar-track { background:var(--bg); }
        ::-webkit-scrollbar-thumb { background:var(--primary); border-radius:2px; }

        /* ===== CURSOR ===== */
        .cursor-dot {
            position:fixed; width:8px; height:8px;
            background:var(--primary); border-radius:50%;
            pointer-events:none; z-index:9999;
            transform:translate(-50%,-50%);
            transition:transform 0.08s ease, opacity 0.3s;
        }
        .cursor-ring {
            position:fixed; width:36px; height:36px;
            border:1.5px solid rgba(109,93,252,0.5); border-radius:50%;
            pointer-events:none; z-index:9998;
            transform:translate(-50%,-50%);
            transition:width 0.25s,height 0.25s,background 0.25s,border-color 0.25s,opacity 0.3s;
        }
        .cursor-ring.hovered {
            width:56px; height:56px;
            background:var(--primary-glow);
            border-color:var(--primary);
        }
        @media (hover:none) { .cursor-dot,.cursor-ring { display:none; } }

        /* ===== GRAIN OVERLAY ===== */
        body::after {
            content:'';
            position:fixed; inset:0;
            background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events:none; z-index:1; opacity:0.4;
        }

        /* ===== BACKGROUND BLOBS ===== */
        .bg-blobs {
            position:fixed; inset:0;
            pointer-events:none; z-index:0; overflow:hidden;
        }
        .blob {
            position:absolute; border-radius:50%;
            filter:blur(110px); opacity:0.1;
            animation:blobFloat 22s ease-in-out infinite;
        }
        .blob-1 { width:650px;height:650px;background:var(--primary);top:-250px;left:-200px;animation-duration:28s; }
        .blob-2 { width:450px;height:450px;background:#a855f7;bottom:-150px;right:-100px;animation-duration:20s;animation-delay:-9s; }
        .blob-3 { width:320px;height:320px;background:var(--accent);top:45%;left:55%;animation-duration:25s;animation-delay:-5s;opacity:0.06; }
        @keyframes blobFloat {
            0%,100% { transform:translate(0,0) scale(1); }
            33% { transform:translate(50px,-35px) scale(1.06); }
            66% { transform:translate(-35px,50px) scale(0.94); }
        }

        /* ===== SCROLL PROGRESS ===== */
        .scroll-progress {
            position:fixed; top:0; left:0; height:2px;
            background:linear-gradient(90deg,var(--primary),var(--accent));
            z-index:9997; transform-origin:left; transform:scaleX(0);
            transition:transform 0.08s linear;
        }

        /* ===== NAV ===== */
        .nav {
            position:fixed; top:0; left:0; right:0; z-index:100;
            padding:1.5rem 2rem;
            display:flex; align-items:center; justify-content:space-between;
            transition:var(--tr);
        }
        .nav.scrolled {
            padding:0.9rem 2rem;
            background:rgba(7,9,15,0.88);
            backdrop-filter:blur(20px) saturate(180%);
            border-bottom:1px solid var(--border);
        }
        .nav-brand {
            font-family:var(--font-display);
            font-weight:800; font-size:1.4rem;
            letter-spacing:-0.01em;
            display:flex; align-items:center; gap:0.6rem;
        }
        .nav-brand span { color:var(--primary); }
        .nav-logo-img {
            width:36px; height:36px; border-radius:50%;
            object-fit:cover;
            border:2px solid rgba(109,93,252,0.4);
            transition:border-color var(--tr-fast), transform var(--tr-fast);
        }
        .nav-brand:hover .nav-logo-img {
            border-color:var(--primary);
            transform:scale(1.08);
        }
        .nav-links {
            display:flex; align-items:center; gap:2.5rem;
        }
        .nav-links a {
            font-size:0.875rem; font-weight:500;
            color:var(--text-muted);
            position:relative;
            transition:color var(--tr-fast);
        }
        .nav-links a::after {
            content:''; position:absolute;
            bottom:-4px; left:0; width:0; height:1px;
            background:var(--primary);
            transition:width var(--tr-fast);
        }
        .nav-links a:hover { color:var(--text); }
        .nav-links a:hover::after { width:100%; }
        .nav-cta {
            padding:0.5rem 1.25rem !important;
            background:var(--primary) !important;
            color:#fff !important;
            border-radius:100px;
            font-size:0.85rem; font-weight:600;
            box-shadow:0 0 20px var(--primary-glow);
            transition:var(--tr-fast) !important;
        }
        .nav-cta::after { display:none !important; }
        .nav-cta:hover {
            background:var(--primary-light) !important;
            box-shadow:0 0 32px rgba(109,93,252,0.5) !important;
            transform:translateY(-1px);
        }
        .nav-toggle {
            display:none; flex-direction:column; gap:5px;
            cursor:pointer; padding:4px;
        }
        .nav-toggle span {
            display:block; width:24px; height:2px;
            background:var(--text); border-radius:2px;
            transition:var(--tr-fast);
        }

        @media (max-width:800px) {
            .nav-toggle { display:flex; }
            .nav-links {
                display:none; position:absolute;
                top:100%; left:0; right:0; flex-direction:column;
                gap:0; background:rgba(7,9,15,0.97);
                backdrop-filter:blur(20px);
                border-bottom:1px solid var(--border);
                padding:0.75rem 0;
            }
            .nav-links.open { display:flex; }
            .nav-links a {
                display:block; padding:0.75rem 2rem;
                font-size:1rem;
            }
            .nav-links a::after { display:none; }
            .nav-cta {
                margin:0.5rem 2rem !important;
                display:inline-block;
            }
        }

        /* ===== LAYOUT ===== */
        section { position:relative; z-index:2; padding:7rem 0; }
        .container { max-width:1200px; margin:0 auto; padding:0 2rem; }

        /* ===== REVEAL (GSAP handles this — no CSS opacity hide) ===== */
        .gsap-hidden { opacity:0; }

        /* ===== HERO ===== */
        .hero { min-height:100vh; display:flex; align-items:center; padding:0; padding-top:5rem; }
        .hero-inner {
            display:grid; grid-template-columns:1fr 1fr;
            gap:3rem; align-items:center;
        }
        .hero-badge {
            display:inline-flex; align-items:center; gap:0.5rem;
            padding:0.375rem 0.9rem;
            background:rgba(109,93,252,0.1);
            border:1px solid rgba(109,93,252,0.22);
            border-radius:100px;
            font-size:0.8rem; font-weight:500;
            color:var(--primary-light); margin-bottom:1.5rem;
        }
        .badge-dot {
            width:6px; height:6px; background:var(--green);
            border-radius:50%;
            animation:dotPulse 2.2s ease-in-out infinite;
        }
        @keyframes dotPulse {
            0%,100% { box-shadow:0 0 0 0 rgba(16,185,129,0.5); }
            60% { box-shadow:0 0 0 6px rgba(16,185,129,0); }
        }
        .hero-title {
            font-family:var(--font-display);
            font-size:clamp(2rem,3.6vw,3.6rem);
            font-weight:800; line-height:1.12;
            letter-spacing:-0.02em; margin-bottom:1.25rem;
        }
        .gradient-text {
            background:linear-gradient(135deg, var(--primary-light), #c084fc 50%, var(--accent));
            -webkit-background-clip:text; -webkit-text-fill-color:transparent;
            background-clip:text;
        }
        .hero-role {
            font-family:var(--font-mono); font-size:1rem;
            color:var(--text-muted); margin-bottom:1.5rem;
            display:flex; align-items:center; gap:0.35rem;
        }
        .blink {
            display:inline-block; width:2px; height:1.1em;
            background:var(--primary);
            animation:blink 1.1s step-end infinite;
        }
        @keyframes blink { 0%,100%{opacity:1;}50%{opacity:0;} }
        .hero-desc {
            font-size:1.02rem; color:var(--text-muted);
            max-width:480px; margin-bottom:2.5rem; line-height:1.78;
        }
        .hero-actions { display:flex; gap:1rem; flex-wrap:wrap; }
        .btn-primary {
            display:inline-flex; align-items:center; gap:0.5rem;
            padding:0.8rem 1.8rem; background:var(--primary);
            color:#fff; border-radius:100px;
            font-weight:600; font-size:0.9rem;
            transition:var(--tr);
            box-shadow:0 4px 24px var(--primary-glow);
        }
        .btn-primary:hover { transform:translateY(-2px); box-shadow:0 8px 32px rgba(109,93,252,0.5); }
        .btn-ghost {
            display:inline-flex; align-items:center; gap:0.5rem;
            padding:0.8rem 1.8rem;
            border:1px solid var(--border);
            color:var(--text); border-radius:100px;
            font-weight:500; font-size:0.9rem;
            transition:var(--tr);
        }
        .btn-ghost:hover {
            border-color:var(--primary);
            background:var(--primary-glow);
            transform:translateY(-2px);
        }
        .hero-pills {
            display:flex; flex-wrap:wrap;
            gap:0.5rem; margin-top:2.25rem;
        }
        .tech-pill {
            display:inline-flex; align-items:center; gap:0.375rem;
            padding:0.32rem 0.75rem;
            background:var(--card); border:1px solid var(--border);
            border-radius:100px;
            font-family:var(--font-mono); font-size:0.73rem;
            color:var(--text-muted);
            transition:var(--tr-fast);
        }
        .tech-pill i { font-size:0.78rem; color:var(--primary); }
        .tech-pill:hover { border-color:var(--border-active); color:var(--text); }

        /* Hero avatar */
        .hero-image-wrap { display:flex; justify-content:center; align-items:center; }
        .hero-avatar { position:relative; width:360px; height:360px; }
        .avatar-ring-wrap {
            position:absolute; inset:-18px; border-radius:50%;
            padding:2px;
            background:conic-gradient(from 0deg, var(--primary), #a855f7, var(--accent), var(--primary));
            animation:spinRing 7s linear infinite;
        }
        .avatar-ring-wrap::after {
            content:''; position:absolute; inset:3px;
            background:var(--bg); border-radius:50%;
        }
        @keyframes spinRing { to { transform:rotate(360deg); } }
        @keyframes heroFloat {
            0%,100% { transform:translateY(0px) rotate(0deg); }
            33%  { transform:translateY(-18px) rotate(0.5deg); }
            66%  { transform:translateY(-10px) rotate(-0.5deg); }
        }
        @keyframes avatarGlow {
            0%,100% { box-shadow:0 0 40px rgba(109,93,252,0.25), 0 0 80px rgba(109,93,252,0.1); }
            50%  { box-shadow:0 0 60px rgba(109,93,252,0.45), 0 0 120px rgba(168,85,247,0.2); }
        }
        .hero-avatar {
            animation: heroFloat 5.5s ease-in-out infinite;
            filter: drop-shadow(0 20px 40px rgba(109,93,252,0.3));
        }
        .hero-avatar img {
            width:100%; height:100%; object-fit:cover;
            border-radius:50%; position:relative; z-index:2;
            border:4px solid var(--surface);
        }
        .avatar-placeholder {
            width:100%; height:100%; border-radius:50%;
            background:linear-gradient(135deg,var(--card),var(--surface));
            display:flex; align-items:center; justify-content:center;
            font-family:var(--font-display); font-size:4.5rem;
            font-weight:800; color:var(--primary);
            border:4px solid var(--surface);
            position:relative; z-index:2;
        }
        .avatar-badge {
            position:absolute; bottom:10px; right:-20px; z-index:3;
            display:flex; align-items:center; gap:0.5rem;
            padding:0.5rem 0.875rem;
            background:var(--card); border:1px solid var(--border);
            border-radius:100px; font-size:0.78rem; font-weight:600;
            box-shadow:0 8px 24px rgba(0,0,0,0.4);
        }
        .avatar-badge .dot { width:8px;height:8px;background:var(--green);border-radius:50%;animation:dotPulse 2.2s infinite; }

        @media (max-width:900px) {
            .hero-inner { grid-template-columns:1fr; text-align:center; }
            .hero-image-wrap { order:-1; }
            .hero-avatar { width:240px; height:240px; }
            .hero-desc { margin:0 auto 2rem; }
            .hero-actions { justify-content:center; }
            .hero-pills { justify-content:center; }
            .avatar-badge { right:0; }
        }

        /* ===== CONTINUOUS AMBIENT ANIMATIONS ===== */
        @keyframes iconFloat {
            0%,100% { transform:translateY(0) scale(1); }
            50%      { transform:translateY(-6px) scale(1.05); }
        }
        @keyframes skillCardShimmer {
            0%   { background-position:200% center; }
            100% { background-position:-200% center; }
        }
        @keyframes gradientShift {
            0%,100% { background-position:0% 50%; }
            50%      { background-position:100% 50%; }
        }
        @keyframes statPulse {
            0%,100% { text-shadow:0 0 0 transparent; }
            50%      { text-shadow:0 0 30px rgba(109,93,252,0.5); }
        }
        @keyframes projCardGlow {
            0%,100% { box-shadow:0 0 0 0 transparent; }
            50%      { box-shadow:0 8px 40px rgba(109,93,252,0.15); }
        }
        .skill-icon-box { animation:iconFloat 3.5s ease-in-out infinite; }
        .skill-card:nth-child(2) .skill-icon-box { animation-delay:0.4s; }
        .skill-card:nth-child(3) .skill-icon-box { animation-delay:0.8s; }
        .skill-card:nth-child(4) .skill-icon-box { animation-delay:1.2s; }
        .skill-card:nth-child(5) .skill-icon-box { animation-delay:0.6s; }
        .skill-card:nth-child(6) .skill-icon-box { animation-delay:1.0s; }
        .skill-card:nth-child(7) .skill-icon-box { animation-delay:0.2s; }
        .skill-card:nth-child(8) .skill-icon-box { animation-delay:1.4s; }
        .skill-card:nth-child(9) .skill-icon-box { animation-delay:0.9s; }
        .skill-card:nth-child(10) .skill-icon-box{ animation-delay:0.3s; }

        .stat-big { animation:statPulse 3s ease-in-out infinite; }

        .gradient-text {
            background-size:200% auto;
            animation:gradientShift 4s ease infinite;
        }

        .proj-card {
            animation:projCardGlow 4s ease-in-out infinite;
        }
        .proj-card:nth-child(2) { animation-delay:0.8s; }
        .proj-card:nth-child(3) { animation-delay:1.6s; }
        .proj-card:nth-child(4) { animation-delay:0.4s; }
        .proj-card:nth-child(5) { animation-delay:1.2s; }
        .proj-card:nth-child(6) { animation-delay:2.0s; }
        .proj-card:nth-child(7) { animation-delay:0.6s; }

        /* Badge pulse */
        .proj-badge {
            animation:dotPulse 2.5s ease-in-out infinite;
        }

        /* ===== SECTION HEADER ===== */
        .section-header { margin-bottom:3.5rem; }
        .section-eyebrow {
            font-family:var(--font-mono); font-size:0.8rem;
            color:var(--primary); margin-bottom:0.75rem;
            letter-spacing:0.04em;
        }
        .section-title {
            font-family:var(--font-display);
            font-size:clamp(1.9rem,3.5vw,2.9rem);
            font-weight:800; letter-spacing:-0.015em; line-height:1.12;
        }

        /* ===== BENTO ABOUT ===== */
        .bento-grid {
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:1.2rem;
        }
        .bento-card {
            background:var(--card); border:1px solid var(--border);
            border-radius:var(--radius-lg); padding:2rem;
            transition:var(--tr); position:relative; overflow:hidden;
        }
        .bento-card::before {
            content:''; position:absolute; inset:0;
            background:linear-gradient(135deg,var(--primary-glow),transparent);
            opacity:0; transition:opacity var(--tr);
            border-radius:inherit;
        }
        .bento-card:hover { border-color:var(--border-active); box-shadow:var(--shadow-glow); }
        .bento-card:hover::before { opacity:1; }
        .bento-wide { grid-column:span 2; }
        .bento-label {
            font-family:var(--font-mono); font-size:0.73rem;
            color:var(--text-subtle); margin-bottom:0.75rem;
        }
        .bento-heading {
            font-family:var(--font-display); font-size:1.45rem;
            font-weight:700; margin-bottom:1rem;
            letter-spacing:-0.01em;
        }
        .bento-text {
            color:var(--text-muted); font-size:0.92rem; line-height:1.78;
        }
        .bento-text + .bento-text { margin-top:0.875rem; }
        .stat-big {
            font-family:var(--font-display); font-size:3.6rem;
            font-weight:800; letter-spacing:-0.025em; line-height:1;
            background:linear-gradient(135deg,var(--primary-light),#c084fc);
            -webkit-background-clip:text; -webkit-text-fill-color:transparent;
            background-clip:text;
        }
        .stat-sub {
            font-size:0.83rem; color:var(--text-muted); margin-top:0.5rem;
        }
        .avail-badge {
            display:inline-flex; align-items:center; gap:0.5rem;
            padding:0.45rem 0.875rem;
            background:rgba(16,185,129,0.1);
            border:1px solid rgba(16,185,129,0.2);
            border-radius:100px; font-size:0.78rem;
            color:var(--green); margin-top:1.1rem;
        }
        .avail-badge .dot { width:6px;height:6px;background:var(--green);border-radius:50%;animation:dotPulse 2.2s infinite; }
        .location-line {
            display:inline-flex; align-items:center; gap:0.5rem;
            font-size:0.83rem; color:var(--text-muted); margin-top:1rem;
        }
        .location-line i { color:var(--accent); }
        .tech-mini-grid { display:grid; grid-template-columns:1fr 1fr; gap:0.5rem; }
        .tech-mini {
            display:flex; align-items:center; gap:0.5rem;
            font-size:0.8rem; color:var(--text-muted); padding:0.3rem 0;
        }
        .tech-mini i { color:var(--primary); width:14px; text-align:center; }
        .bento-highlight {
            background:linear-gradient(135deg,rgba(109,93,252,0.14),rgba(168,85,247,0.08)) !important;
            border-color:rgba(109,93,252,0.22) !important;
        }

        @media (max-width:900px) {
            .bento-grid { grid-template-columns:1fr 1fr; }
            .bento-wide { grid-column:span 2; }
        }
        @media (max-width:600px) {
            .bento-grid { grid-template-columns:1fr; }
            .bento-wide { grid-column:span 1; }
        }

        /* ===== SKILLS ===== */
        .skills-grid {
            display:grid; grid-template-columns:repeat(3,1fr); gap:1.2rem;
        }
        .skill-card {
            background:var(--card); border:1px solid var(--border);
            border-radius:var(--radius-lg); padding:1.75rem;
            transition:var(--tr); cursor:default;
        }
        .skill-card:hover { border-color:var(--border-active); box-shadow:var(--shadow-glow); }
        .skill-icon-box {
            width:46px; height:46px;
            background:var(--primary-glow);
            border:1px solid rgba(109,93,252,0.18);
            border-radius:var(--radius-sm);
            display:flex; align-items:center; justify-content:center;
            font-size:1.25rem; color:var(--primary-light);
            margin-bottom:1.25rem;
            transition:var(--tr-fast);
        }
        .skill-card:hover .skill-icon-box { background:var(--primary); color:#fff; border-color:var(--primary); }
        .skill-name {
            font-family:var(--font-display); font-size:0.97rem;
            font-weight:700; margin-bottom:0.45rem; letter-spacing:-0.01em;
        }
        .skill-desc {
            font-size:0.8rem; color:var(--text-muted);
            line-height:1.65; margin-bottom:1.1rem;
        }
        .skill-track { height:3px; background:var(--surface); border-radius:2px; overflow:hidden; }
        .skill-bar {
            height:100%;
            background:linear-gradient(90deg,var(--primary),var(--primary-light));
            border-radius:2px; width:0;
            transition:width 1.3s cubic-bezier(0.4,0,0.2,1);
        }
        .skill-pct {
            font-family:var(--font-mono); font-size:0.68rem;
            color:var(--text-subtle); text-align:right; margin-top:0.3rem;
        }

        @media (max-width:900px) { .skills-grid { grid-template-columns:repeat(2,1fr); } }
        @media (max-width:600px) { .skills-grid { grid-template-columns:1fr; } }

        /* ===== PROJECTS ===== */
        .proj-filter {
            display:flex; gap:0.5rem; flex-wrap:wrap; margin-bottom:2.5rem;
        }
        .filter-btn {
            padding:0.42rem 1rem;
            border:1px solid var(--border); border-radius:100px;
            font-size:0.8rem; font-weight:500;
            color:var(--text-muted); transition:var(--tr-fast);
        }
        .filter-btn.active,.filter-btn:hover {
            background:var(--primary); border-color:var(--primary); color:#fff;
        }
        .proj-grid {
            display:grid; grid-template-columns:repeat(3,1fr); gap:1.2rem;
        }
        .proj-card {
            background:var(--card); border:1px solid var(--border);
            border-radius:var(--radius-lg); overflow:hidden;
            transition:var(--tr);
        }
        .proj-card.hidden { display:none; }
        .proj-badge {
            position:absolute; top:14px; left:14px; z-index:3;
            padding:0.22rem 0.65rem;
            background:var(--primary); color:#fff;
            border-radius:100px; font-size:0.68rem; font-weight:700;
            letter-spacing:0.04em; text-transform:uppercase;
            box-shadow:0 2px 12px var(--primary-glow);
        }
        .proj-featured { grid-column:span 1; }
        @media (min-width:900px) {
            .proj-featured {
                grid-column:span 2;
            }
            .proj-featured .proj-img { height:260px; }
        }
        .proj-card:hover { border-color:var(--border-active); transform:translateY(-5px); box-shadow:var(--shadow-glow); }
        .proj-img { height:195px; overflow:hidden; position:relative; }
        .proj-img img { width:100%; height:100%; object-fit:cover; transition:transform 0.5s ease; }
        .proj-card:hover .proj-img img { transform:scale(1.07); }
        .proj-img-overlay {
            position:absolute; inset:0;
            background:linear-gradient(to bottom,transparent 35%,rgba(7,9,15,0.88));
        }
        .proj-body { padding:1.4rem; }
        .proj-title {
            font-family:var(--font-display); font-size:1.02rem;
            font-weight:700; margin-bottom:0.45rem;
            letter-spacing:-0.02em;
        }
        .proj-desc {
            font-size:0.8rem; color:var(--text-muted);
            line-height:1.65; margin-bottom:1.1rem;
        }
        .proj-tags { display:flex; flex-wrap:wrap; gap:0.35rem; }
        .tag {
            padding:0.22rem 0.6rem;
            background:var(--surface); border:1px solid var(--border);
            border-radius:100px;
            font-family:var(--font-mono); font-size:0.68rem;
            color:var(--text-muted);
        }

        @media (max-width:900px) { .proj-grid { grid-template-columns:repeat(2,1fr); } }
        @media (max-width:600px) { .proj-grid { grid-template-columns:1fr; } }

        /* ===== CONTACT ===== */
        .contact-wrap {
            display:grid; grid-template-columns:1fr 1.45fr;
            gap:4.5rem; align-items:start;
        }
        .contact-title {
            font-family:var(--font-display);
            font-size:clamp(1.7rem,3vw,2.4rem);
            font-weight:800; letter-spacing:-0.03em;
            margin-bottom:1rem; line-height:1.15;
        }
        .contact-desc {
            color:var(--text-muted); font-size:0.93rem;
            line-height:1.78; margin-bottom:2.25rem;
        }
        .contact-items { display:flex; flex-direction:column; gap:1rem; }
        .c-item {
            display:flex; align-items:center; gap:1rem;
            padding:0.875rem 1.1rem;
            background:var(--card); border:1px solid var(--border);
            border-radius:var(--radius-md);
            transition:var(--tr-fast);
        }
        .c-item:hover { border-color:var(--border-active); transform:translateX(4px); }
        .c-icon {
            width:38px; height:38px;
            background:var(--primary-glow);
            border-radius:var(--radius-sm);
            display:flex; align-items:center; justify-content:center;
            color:var(--primary-light); font-size:0.95rem; flex-shrink:0;
        }
        .c-text h5 { font-size:0.75rem; font-weight:600; color:var(--text-muted); margin-bottom:0.15rem; }
        .c-text p { font-size:0.875rem; font-weight:500; }

        /* Form */
        .form-box {
            background:var(--card); border:1px solid var(--border);
            border-radius:var(--radius-xl); padding:2.5rem;
        }
        .form-group { margin-bottom:1.2rem; }
        .form-label {
            display:block; font-size:0.78rem; font-weight:600;
            color:var(--text-muted); margin-bottom:0.45rem;
        }
        .form-control {
            width:100%; padding:0.85rem 1rem;
            background:var(--surface); border:1px solid var(--border);
            border-radius:var(--radius-sm); color:var(--text);
            font-family:var(--font-body); font-size:0.88rem;
            outline:none; transition:border-color var(--tr-fast), box-shadow var(--tr-fast);
        }
        .form-control::placeholder { color:var(--text-subtle); }
        .form-control:focus {
            border-color:var(--primary);
            box-shadow:0 0 0 3px var(--primary-glow);
        }
        textarea.form-control { resize:vertical; min-height:130px; }
        .btn-send {
            width:100%; padding:0.9rem;
            background:var(--primary); color:#fff;
            border-radius:var(--radius-sm);
            font-weight:600; font-size:0.92rem;
            transition:var(--tr);
            box-shadow:0 4px 24px var(--primary-glow);
            display:flex; align-items:center; justify-content:center; gap:0.5rem;
        }
        .btn-send:hover {
            background:var(--primary-light);
            transform:translateY(-2px);
            box-shadow:0 8px 32px rgba(109,93,252,0.45);
        }

        @media (max-width:900px) { .contact-wrap { grid-template-columns:1fr; gap:3rem; } }

        /* ===== FOOTER ===== */
        .site-footer {
            position:relative; z-index:2;
            padding:2.5rem 2rem;
            border-top:1px solid var(--border);
            display:flex; align-items:center; justify-content:space-between;
            flex-wrap:wrap; gap:1rem;
        }
        .footer-brand {
            font-family:var(--font-display); font-weight:800;
            font-size:1.25rem; letter-spacing:-0.01em;
            display:flex; align-items:center; gap:0.5rem;
        }
        .footer-brand span { color:var(--primary); }
        .footer-nav { display:flex; gap:1.75rem; }
        .footer-nav a {
            font-size:0.83rem; color:var(--text-muted);
            transition:color var(--tr-fast);
        }
        .footer-nav a:hover { color:var(--primary); }
        .footer-socials { display:flex; gap:0.625rem; }
        .s-link {
            width:36px; height:36px;
            background:var(--card); border:1px solid var(--border);
            border-radius:var(--radius-sm);
            display:flex; align-items:center; justify-content:center;
            color:var(--text-muted); font-size:0.85rem;
            transition:var(--tr-fast);
        }
        .s-link:hover {
            background:var(--primary); border-color:var(--primary);
            color:#fff; transform:translateY(-2px);
        }
        .footer-copy {
            width:100%; text-align:center;
            font-size:0.77rem; color:var(--text-subtle);
            padding-top:1.25rem;
            border-top:1px solid var(--border);
        }

        @media (max-width:768px) {
            .site-footer { flex-direction:column; align-items:flex-start; padding:2rem; }
            .footer-nav { display:none; }
        }
    </style>
</head>
<body>

<!-- Custom Cursor -->
<div class="cursor-dot" id="cursorDot"></div>
<div class="cursor-ring" id="cursorRing"></div>

<!-- Scroll Progress -->
<div class="scroll-progress" id="scrollProg"></div>

<!-- Background -->
<div class="bg-blobs" aria-hidden="true">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
</div>

<!-- Nav -->
@include('layouts.frontend.header')

<!-- Content -->
@yield('content')

<!-- Footer -->
@include('layouts.frontend.footer')

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
(function() {
    "use strict";

    /* ── CURSOR ── */
    const dot = document.getElementById('cursorDot');
    const ring = document.getElementById('cursorRing');
    if (dot && ring && matchMedia('(hover:hover)').matches) {
        let mx=0,my=0,rx=0,ry=0;
        document.addEventListener('mousemove', e => { mx=e.clientX; my=e.clientY; dot.style.left=mx+'px'; dot.style.top=my+'px'; });
        (function raf(){ rx+=(mx-rx)*.13; ry+=(my-ry)*.13; ring.style.left=rx+'px'; ring.style.top=ry+'px'; requestAnimationFrame(raf); })();
        document.querySelectorAll('a,button,.bento-card,.skill-card,.proj-card,.c-item,.tech-pill').forEach(el => {
            el.addEventListener('mouseenter',()=>ring.classList.add('hovered'));
            el.addEventListener('mouseleave',()=>ring.classList.remove('hovered'));
        });
    }

    /* ── SCROLL PROGRESS + NAV ── */
    const nav = document.getElementById('mainNav');
    const prog = document.getElementById('scrollProg');
    window.addEventListener('scroll', () => {
        if (nav) nav.classList.toggle('scrolled', scrollY > 55);
        if (prog) {
            const pct = scrollY / (document.body.scrollHeight - innerHeight);
            prog.style.transform = 'scaleX(' + Math.min(pct, 1) + ')';
        }
    }, { passive:true });

    /* ── MOBILE NAV ── */
    const toggle = document.getElementById('navToggle');
    const links  = document.getElementById('navLinks');
    if (toggle && links) {
        toggle.addEventListener('click', () => links.classList.toggle('open'));
        links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => links.classList.remove('open')));
    }

    /* ── TYPEWRITER ── */
    const roles = ['Laravel Developer','PHP Specialist','Vue.js Engineer','Fullstack Builder'];
    let ri=0, ci=0, del=false;
    const tyEl = document.getElementById('typedRole');
    if (tyEl) {
        function type() {
            const w = roles[ri];
            if (del) { ci--; tyEl.textContent=w.slice(0,ci); if(!ci){del=false;ri=(ri+1)%roles.length;setTimeout(type,480);return;} setTimeout(type,55); }
            else { ci++; tyEl.textContent=w.slice(0,ci); if(ci===w.length){del=true;setTimeout(type,2200);return;} setTimeout(type,95); }
        }
        setTimeout(type, 1200);
    }

    /* ── SKILL BARS (IntersectionObserver) ── */
    const barIO = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                const b = e.target.querySelector('.skill-bar');
                if (b) { b.style.width = b.dataset.width; barIO.unobserve(e.target); }
            }
        });
    }, { threshold: 0.3 });
    document.querySelectorAll('.skill-card').forEach(c => barIO.observe(c));

    /* ── COUNTERS ── */
    function runCounter(el) {
        const tgt = parseInt(el.dataset.target), suf = el.dataset.suffix||'', dur = 1700, t0 = performance.now();
        (function step(now){ const p=Math.min((now-t0)/dur,1); el.textContent=Math.round(p*tgt)+suf; if(p<1)requestAnimationFrame(step); })(t0);
    }
    const cntIO = new IntersectionObserver(entries => {
        entries.forEach(e => { if(e.isIntersecting){ runCounter(e.target); cntIO.unobserve(e.target); } });
    }, { threshold: 0.5 });
    document.querySelectorAll('[data-target]').forEach(el => cntIO.observe(el));

    /* ── PROJECT FILTER ── */
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const f = btn.dataset.filter;
            document.querySelectorAll('.proj-card').forEach(c => {
                if (f === 'all' || (c.dataset.category||'').includes(f)) {
                    c.style.display = '';
                } else {
                    c.style.display = 'none';
                }
            });
        });
    });

    /* ── 3D TILT ── */
    document.querySelectorAll('.proj-card,.bento-card,.skill-card').forEach(card => {
        card.addEventListener('mousemove', e => {
            const r=card.getBoundingClientRect();
            const x=e.clientX-r.left-r.width/2, y=e.clientY-r.top-r.height/2;
            card.style.transform='perspective(900px) rotateX('+(-y/r.height*6)+'deg) rotateY('+(x/r.width*6)+'deg) translateY(-4px)';
        });
        card.addEventListener('mouseleave', () => { card.style.transform=''; });
    });

    /* ── GSAP ANIMATIONS ── */
    gsap.registerPlugin(ScrollTrigger);

    /* Hero entrance — use fromTo so destination is always opacity:1 */
    const heroItems = [
        { el:'#heroBadge',   from:{y:24, opacity:0}, delay:0.25, dur:0.65 },
        { el:'#heroTitle',   from:{y:50, opacity:0}, delay:0.45, dur:0.8  },
        { el:'#heroRole',    from:{y:20, opacity:0}, delay:0.70, dur:0.6  },
        { el:'#heroDesc',    from:{y:20, opacity:0}, delay:0.85, dur:0.6  },
        { el:'#heroActions', from:{y:18, opacity:0}, delay:1.00, dur:0.55 },
        { el:'#heroPills',   from:{y:16, opacity:0}, delay:1.10, dur:0.55 },
        { el:'#heroAvatar',  from:{scale:0.85,opacity:0,ease:'back.out(1.8)'}, delay:0.5, dur:1.0 },
    ];
    heroItems.forEach(({el,from,delay,dur}) => {
        const target = document.querySelector(el);
        if (!target) return;
        gsap.fromTo(target, from, { y:0, scale:1, opacity:1, duration:dur, delay, ease: from.ease||'power3.out' });
    });

    /* Nav */
    gsap.fromTo('#mainNav', {y:-28, opacity:0}, {y:0, opacity:1, duration:0.6, delay:0.1, ease:'power3.out'});

    /* ── SCROLL ANIMATIONS (section-by-section stagger) ── */

    /* Section headers: slide up with slight scale */
    gsap.utils.toArray('.section-header').forEach(el => {
        gsap.fromTo(el,
            { y: 50, opacity: 0, scale: 0.97 },
            { y: 0, opacity: 1, scale: 1, duration: 0.85, ease: 'power3.out',
              scrollTrigger: { trigger: el, start: 'top 88%', once: true } }
        );
    });

    /* Bento cards: stagger by column */
    gsap.utils.toArray('.bento-card').forEach((el, i) => {
        gsap.fromTo(el,
            { y: 55, opacity: 0, scale: 0.94 },
            { y: 0, opacity: 1, scale: 1, duration: 0.75, ease: 'back.out(1.2)',
              delay: (i % 3) * 0.12,
              scrollTrigger: { trigger: el, start: 'top 88%', once: true } }
        );
    });

    /* Skill cards: flip-in from bottom with stagger */
    gsap.utils.toArray('.skill-card').forEach((el, i) => {
        gsap.fromTo(el,
            { y: 60, opacity: 0, rotateX: 12 },
            { y: 0, opacity: 1, rotateX: 0, duration: 0.7, ease: 'power3.out',
              delay: (i % 3) * 0.1,
              scrollTrigger: { trigger: el, start: 'top 90%', once: true } }
        );
    });

    /* Project filter: slide left */
    gsap.fromTo('.proj-filter',
        { x: -30, opacity: 0 },
        { x: 0, opacity: 1, duration: 0.6, ease: 'power3.out',
          scrollTrigger: { trigger: '.proj-filter', start: 'top 90%', once: true } }
    );

    /* Project cards: cascade */
    gsap.utils.toArray('.proj-card').forEach((el, i) => {
        gsap.fromTo(el,
            { y: 70, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.75, ease: 'power3.out',
              delay: (i % 3) * 0.13,
              scrollTrigger: { trigger: el, start: 'top 90%', once: true } }
        );
    });

    /* Contact items: slide from left */
    gsap.utils.toArray('.c-item').forEach((el, i) => {
        gsap.fromTo(el,
            { x: -40, opacity: 0 },
            { x: 0, opacity: 1, duration: 0.6, ease: 'power3.out',
              delay: i * 0.1,
              scrollTrigger: { trigger: el, start: 'top 90%', once: true } }
        );
    });

    /* Contact text */
    gsap.fromTo('.contact-title',
        { y: 40, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7, ease: 'power3.out',
          scrollTrigger: { trigger: '.contact-title', start: 'top 88%', once: true } }
    );
    gsap.fromTo('.contact-desc',
        { y: 25, opacity: 0 }, { y: 0, opacity: 1, duration: 0.6, ease: 'power3.out', delay: 0.1,
          scrollTrigger: { trigger: '.contact-desc', start: 'top 88%', once: true } }
    );

    /* Form box: zoom-fade */
    gsap.fromTo('.form-box',
        { y: 50, opacity: 0, scale: 0.97 },
        { y: 0, opacity: 1, scale: 1, duration: 0.85, ease: 'back.out(1.2)',
          scrollTrigger: { trigger: '.form-box', start: 'top 88%', once: true } }
    );

    /* About section eyebrow label float */
    gsap.utils.toArray('.section-eyebrow').forEach(el => {
        gsap.fromTo(el,
            { x: -20, opacity: 0 },
            { x: 0, opacity: 1, duration: 0.55, ease: 'power3.out',
              scrollTrigger: { trigger: el, start: 'top 90%', once: true } }
        );
    });

})();
</script>

@stack('scripts')
</body>
</html>
