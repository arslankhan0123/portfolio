<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Arslan Khan - Fullstack Laravel Developer')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #00d4ff;
            --secondary-color: #0099cc;
            --accent-color: #ff6b6b;
            --success-color: #51cf66;
            --warning-color: #ffd43b;
            --dark-bg: #0a0a0a;
            --dark-surface: #1a1a1a;
            --dark-card: #2a2a2a;
            --text-primary: #ffffff;
            --text-secondary: #b3b3b3;
            --text-muted: #666666;
            --gradient-primary: linear-gradient(135deg, #00d4ff 0%, #0099cc 100%);
            --gradient-secondary: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
            --gradient-dark: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
            --shadow-glow: 0 0 30px rgba(0, 212, 255, 0.3);
            --shadow-card: 0 8px 32px rgba(0, 0, 0, 0.3);
            --shadow-hover: 0 16px 48px rgba(0, 0, 0, 0.4);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ::-moz-selection {
            /* Code for Firefox */
            color: var(--primary-color);
            background: var(--gradient-primary);
            filter: blur(20px);
        }

        ::selection {
            color: var(--primary-color);
            background: var(--gradient-primary);
            filter: blur(20px);
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--dark-bg);
            overflow-x: hidden;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 80%, rgba(0, 212, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 107, 107, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(81, 207, 102, 0.05) 0%, transparent 50%);
            z-index: -1;
            animation: backgroundShift 20s ease-in-out infinite;
        }

        @keyframes backgroundShift {

            0%,
            100% {
                transform: translateX(0) translateY(0);
            }

            25% {
                transform: translateX(-20px) translateY(-10px);
            }

            50% {
                transform: translateX(20px) translateY(10px);
            }

            75% {
                transform: translateX(-10px) translateY(20px);
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark-surface);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient-primary);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }

        /* Navigation */
        .navbar {
            background: rgba(26, 26, 26, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 212, 255, 0.2);
            box-shadow: var(--shadow-card);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 1rem 0;
        }

        .navbar.scrolled {
            background: rgba(26, 26, 26, 0.95);
            backdrop-filter: blur(25px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
        }

        .navbar-brand {
            position: relative;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo-container {
            position: relative;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            background: var(--gradient-primary);
            background-clip: padding-box;
        }

        .navbar-logo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 2;
        }

        .logo-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: radial-gradient(circle, rgba(0, 212, 255, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            opacity: 0;
            transition: all 0.4s ease;
            z-index: 1;
            animation: logoGlowPulse 3s ease-in-out infinite;
        }

        @keyframes logoGlowPulse {

            0%,
            100% {
                opacity: 0;
                transform: translate(-50%, -50%) scale(1);
            }

            50% {
                opacity: 0.6;
                transform: translate(-50%, -50%) scale(1.1);
            }
        }

        .navbar-brand:hover .logo-container {
            transform: scale(1.1) rotate(5deg);
            box-shadow:
                0 0 0 3px rgba(0, 212, 255, 0.3),
                0 0 20px rgba(0, 212, 255, 0.4);
        }

        .navbar-brand:hover .navbar-logo {
            transform: scale(1.05);
        }

        .navbar-brand:hover .logo-glow {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.2);
        }

        .navbar-brand:active .logo-container {
            transform: scale(0.95) rotate(-2deg);
        }

        .nav-link {
            font-weight: 600;
            color: var(--text-secondary) !important;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            padding: 0.8rem 1.2rem !important;
            border-radius: 8px;
            margin: 0 0.2rem;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--gradient-primary);
            opacity: 0;
            border-radius: 8px;
            transition: all 0.3s ease;
            z-index: -1;
        }

        .nav-link:hover::before {
            opacity: 0.1;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }

        .nav-link.active {
            color: var(--primary-color) !important;
            background: rgba(0, 212, 255, 0.1);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 5px;
            left: 50%;
            background: var(--gradient-primary);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(-50%);
            border-radius: 1px;
        }

        .nav-link:hover::after {
            width: 80%;
        }

        .navbar-toggler {
            border: none;
            background: var(--gradient-primary);
            border-radius: 8px;
            padding: 0.5rem;
            transition: all 0.3s ease;
        }

        .navbar-toggler:hover {
            transform: scale(1.1);
            box-shadow: var(--shadow-glow);
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(0, 212, 255, 0.3);
        }

        section {
            position: relative;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: var(--gradient-dark);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 30% 20%, rgba(0, 212, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(255, 107, 107, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(81, 207, 102, 0.05) 0%, transparent 50%);
            animation: heroBackground 15s ease-in-out infinite;
        }

        @keyframes heroBackground {

            0%,
            100% {
                transform: scale(1) rotate(0deg);
            }

            50% {
                transform: scale(1.1) rotate(2deg);
            }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: var(--text-primary);
        }

        /* Animated Name and Title */
        .animated-name {
            font-size: 4.5rem;
            font-weight: 900;
            margin-bottom: 1.5rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            opacity: 0;
            animation: nameTypewriter 2s cubic-bezier(0.4, 0, 0.2, 1) 0.5s forwards;
            position: relative;
            font-family: 'JetBrains Mono', monospace;
            overflow: hidden;
            white-space: nowrap;
            border-right: 3px solid var(--primary-color);
        }

        @keyframes nameTypewriter {
            0% {
                opacity: 0;
                width: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 1;
                width: 100%;
            }
        }

        .animated-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: var(--text-secondary);
            opacity: 0;
            animation: titleSlideIn 1.5s cubic-bezier(0.4, 0, 0.2, 1) 2.5s forwards;
            position: relative;
            transform: translateX(-50px);
        }

        @keyframes titleSlideIn {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Word-by-Word Rotating Titles Animation */
        .rotating-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: var(--text-secondary);
            position: relative;
            height: 2.5rem;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .word {
            display: inline-block;
            margin-right: 0.5rem;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .word.active {
            opacity: 1;
            transform: translateY(0);
        }

        .word.fade-out {
            opacity: 0;
            transform: translateY(-30px);
        }

        .word.fade-in {
            opacity: 1;
            transform: translateY(0);
        }

        /* Trending Button Animations */
        .btn-primary-custom {
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
            background: linear-gradient(45deg, #00d4ff, #0099cc, #00d4ff);
            background-size: 200% 200%;
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .btn-primary-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: all 0.6s ease;
        }

        .btn-primary-custom:hover::before {
            left: 100%;
        }

        .btn-primary-custom:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 212, 255, 0.4);
        }

        .btn-outline-custom {
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
            border: 2px solid transparent;
            background: linear-gradient(45deg, #2a2a2a, #2a2a2a) padding-box,
                linear-gradient(45deg, #00d4ff, #ff6b6b, #51cf66, #00d4ff) border-box;
            background-size: 200% 200%;
            animation: borderGlow 4s ease infinite;
        }

        @keyframes borderGlow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .btn-outline-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(45deg, #00d4ff, #ff6b6b, #51cf66);
            transition: all 0.6s ease;
            z-index: -1;
        }

        .btn-outline-custom:hover::before {
            width: 100%;
        }

        .btn-outline-custom:hover {
            color: white;
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 212, 255, 0.3);
        }

        /* Enhanced Social Link Animations */
        .social-link {
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
        }

        .social-link::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.6s ease;
            z-index: -1;
        }

        .social-link:hover::after {
            width: 120px;
            height: 120px;
        }

        .hero h1::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--gradient-primary);
            opacity: 0;
            filter: blur(20px);
            animation: heroTitleGlow 2s ease 1.5s forwards;
        }

        @keyframes heroTitleAnimation {
            0% {
                opacity: 0;
                transform: translateY(50px) scale(0.8);
            }

            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes heroTitleGlow {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 0.3;
            }
        }

        .hero .subtitle {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: var(--text-secondary);
            opacity: 0;
            animation: slideInUp 1s cubic-bezier(0.4, 0, 0.2, 1) 0.8s forwards;
            position: relative;
        }

        .hero .subtitle::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--gradient-primary);
            animation: underlineExpand 1s ease 1.5s forwards;
        }

        @keyframes underlineExpand {
            0% {
                width: 0;
            }

            100% {
                width: 200px;
            }
        }

        .hero .description {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            color: var(--text-muted);
            opacity: 0;
            animation: slideInUp 1s cubic-bezier(0.4, 0, 0.2, 1) 1s forwards;
            line-height: 1.8;
        }

        .cta-buttons {
            opacity: 0;
            animation: slideInUp 1s cubic-bezier(0.4, 0, 0.2, 1) 1.2s forwards;
        }

        .btn-primary-custom {
            background: var(--gradient-primary);
            border: none;
            padding: 18px 36px;
            font-weight: 700;
            border-radius: 50px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-card);
            margin-right: 20px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            color: white;
            font-size: 1.1rem;
        }

        .btn-primary-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
        }

        .btn-primary-custom:hover::before {
            left: 100%;
        }

        .btn-primary-custom:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: var(--shadow-glow);
        }

        .btn-outline-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
            padding: 16px 36px;
            font-weight: 700;
            border-radius: 50px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            font-size: 1.1rem;
        }

        .btn-outline-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: var(--gradient-primary);
            transition: all 0.4s ease;
            z-index: -1;
        }

        .btn-outline-custom:hover::before {
            width: 100%;
        }

        .btn-outline-custom:hover {
            color: white;
            transform: translateY(-5px) scale(1.05);
            box-shadow: var(--shadow-glow);
        }

        /* Floating elements */
        .floating-element {
            position: absolute;
            animation: float 8s ease-in-out infinite;
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .floating-element:hover {
            opacity: 1;
            transform: scale(1.2);
        }

        .floating-element:nth-child(1) {
            top: 15%;
            left: 8%;
            animation-delay: 0s;
            color: var(--primary-color);
        }

        .floating-element:nth-child(2) {
            top: 25%;
            right: 8%;
            animation-delay: 2s;
            color: var(--accent-color);
        }

        .floating-element:nth-child(3) {
            bottom: 25%;
            left: 15%;
            animation-delay: 4s;
            color: var(--success-color);
        }

        .floating-element:nth-child(4) {
            top: 60%;
            right: 15%;
            animation-delay: 6s;
            color: var(--warning-color);
        }

        /* Particle system */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: var(--primary-color);
            border-radius: 50%;
            animation: particleFloat 6s linear infinite;
        }

        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* About Section */
        .about {
            padding: 120px 0;
            background: var(--dark-surface);
            position: relative;
            overflow: hidden;
        }

        .about::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 80% 20%, rgba(0, 212, 255, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 20% 80%, rgba(255, 107, 107, 0.05) 0%, transparent 50%);
            z-index: 1;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
            color: var(--text-primary);
            z-index: 2;
        }

        .section-title::before {
            content: '';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--gradient-primary);
            border-radius: 2px;
            animation: titleGlow 2s ease-in-out infinite alternate;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient-secondary);
            border-radius: 2px;
            animation: titleGlow 2s ease-in-out infinite alternate-reverse;
        }

        @keyframes titleGlow {
            0% {
                box-shadow: 0 0 10px rgba(0, 212, 255, 0.3);
            }

            100% {
                box-shadow: 0 0 20px rgba(0, 212, 255, 0.6);
            }
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 5rem;
            position: relative;
            z-index: 2;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: var(--text-primary);
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
        }

        .about-text p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
            background: var(--dark-card);
            border-radius: 15px;
            border: 1px solid rgba(0, 212, 255, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            opacity: 0.1;
            transition: all 0.4s ease;
        }

        .stat-item:hover::before {
            left: 0;
        }

        .stat-item:hover {
            transform: translateY(-10px);
            border-color: var(--primary-color);
            box-shadow: var(--shadow-glow);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: block;
            margin-bottom: 0.5rem;
            font-family: 'JetBrains Mono', monospace;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            line-height: 1.2;
            word-wrap: break-word;
            overflow-wrap: break-word;
            hyphens: auto;
        }

        .about-image {
            flex: 1;
            text-align: center;
            position: relative;
        }

        .profile-container {
            position: relative;
            display: inline-block;
            animation: profileContainerFloat 6s ease-in-out infinite;
        }

        @keyframes profileContainerFloat {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .profile-img {
            width: 350px;
            height: 350px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid transparent;
            background: var(--gradient-primary);
            background-clip: padding-box;
            box-shadow:
                0 0 0 4px rgba(0, 212, 255, 0.3),
                0 0 30px rgba(0, 212, 255, 0.2),
                0 0 60px rgba(0, 212, 255, 0.1);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 3;
            animation: profilePulse 4s ease-in-out infinite;
        }

        @keyframes profilePulse {

            0%,
            100% {
                box-shadow:
                    0 0 0 4px rgba(0, 212, 255, 0.3),
                    0 0 30px rgba(0, 212, 255, 0.2),
                    0 0 60px rgba(0, 212, 255, 0.1);
            }

            50% {
                box-shadow:
                    0 0 0 8px rgba(0, 212, 255, 0.4),
                    0 0 40px rgba(0, 212, 255, 0.3),
                    0 0 80px rgba(0, 212, 255, 0.2);
            }
        }

        .profile-img:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow:
                0 0 0 8px rgba(0, 212, 255, 0.5),
                0 0 50px rgba(0, 212, 255, 0.4),
                0 0 100px rgba(0, 212, 255, 0.3);
            animation-play-state: paused;
        }

        .profile-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, rgba(0, 212, 255, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            animation: profileGlowPulse 3s ease-in-out infinite;
            z-index: 1;
        }

        @keyframes profileGlowPulse {

            0%,
            100% {
                opacity: 0.3;
                transform: translate(-50%, -50%) scale(1);
            }

            50% {
                opacity: 0.6;
                transform: translate(-50%, -50%) scale(1.1);
            }
        }

        .profile-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 420px;
            height: 420px;
            border: 2px solid rgba(0, 212, 255, 0.3);
            border-radius: 50%;
            animation: rotate 25s linear infinite;
            z-index: 1;
        }

        .profile-ring::before {
            content: '';
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            border: 2px solid rgba(255, 107, 107, 0.2);
            border-radius: 50%;
            animation: rotate 20s linear infinite reverse;
        }

        .profile-ring::after {
            content: '';
            position: absolute;
            top: -16px;
            left: -16px;
            right: -16px;
            bottom: -16px;
            border: 1px solid rgba(81, 207, 102, 0.1);
            border-radius: 50%;
            animation: rotate 30s linear infinite;
        }

        @keyframes rotate {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .tech-icons {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            z-index: 2;
        }

        .tech-icon {
            position: absolute;
            font-size: 2.5rem;
            color: var(--primary-color);
            animation: techIconFloat 4s ease-in-out infinite;
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .tech-icon:nth-child(1) {
            top: 10%;
            left: 20%;
            animation-delay: var(--delay, 0s);
        }

        .tech-icon:nth-child(2) {
            top: 20%;
            right: 15%;
            animation-delay: var(--delay, 0.5s);
        }

        .tech-icon:nth-child(3) {
            bottom: 25%;
            left: 10%;
            animation-delay: var(--delay, 1s);
        }

        .tech-icon:nth-child(4) {
            bottom: 15%;
            right: 20%;
            animation-delay: var(--delay, 1.5s);
        }

        .tech-icon:nth-child(5) {
            top: 50%;
            left: 5%;
            animation-delay: var(--delay, 2s);
        }

        .tech-icon:nth-child(6) {
            top: 50%;
            right: 5%;
            animation-delay: var(--delay, 2.5s);
        }

        @keyframes techIconFloat {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg) scale(1);
                opacity: 0.8;
            }

            50% {
                transform: translateY(-15px) rotate(180deg) scale(1.1);
                opacity: 1;
            }
        }

        .profile-container:hover .tech-icon {
            animation-play-state: paused;
            transform: scale(1.2);
            opacity: 1;
            filter: drop-shadow(0 0 10px rgba(0, 212, 255, 0.5));
        }

        .floating-icons {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }

        .floating-icon {
            position: absolute;
            font-size: 2rem;
            color: var(--primary-color);
            animation: floatIcon 6s ease-in-out infinite;
            opacity: 0.6;
        }

        .floating-icon:nth-child(1) {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-icon:nth-child(2) {
            top: 20%;
            right: 10%;
            animation-delay: 2s;
        }

        .floating-icon:nth-child(3) {
            bottom: 20%;
            left: 15%;
            animation-delay: 4s;
        }

        .floating-icon:nth-child(4) {
            bottom: 10%;
            right: 15%;
            animation-delay: 6s;
        }

        @keyframes floatIcon {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        /* Skills Section */
        .skills {
            padding: 120px 0;
            background: var(--dark-bg);
            position: relative;
            overflow: hidden;
        }

        .skills::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 30%, rgba(0, 212, 255, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(255, 107, 107, 0.03) 0%, transparent 50%);
            z-index: 1;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
            position: relative;
            z-index: 2;
        }

        .skill-card {
            background: var(--dark-card);
            padding: 3rem 2rem;
            border-radius: 20px;
            border: 1px solid rgba(0, 212, 255, 0.1);
            box-shadow: var(--shadow-card);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .skill-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            opacity: 0.1;
            transition: all 0.5s ease;
        }

        .skill-card::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, rgba(0, 212, 255, 0.1), transparent);
            animation: rotate 4s linear infinite;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .skill-card:hover::after {
            opacity: 1;
        }

        .skill-card:hover::before {
            left: 0;
        }

        .skill-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: var(--shadow-glow);
            border-color: var(--primary-color);
        }

        .skill-icon {
            font-size: 4rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: block;
        }

        .skill-card:hover .skill-icon {
            transform: scale(1.3) rotate(10deg);
            filter: drop-shadow(0 0 20px rgba(0, 212, 255, 0.5));
        }

        .skill-name {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-primary);
            transition: all 0.3s ease;
        }

        .skill-card:hover .skill-name {
            color: var(--primary-color);
        }

        .skill-description {
            color: var(--text-secondary);
            font-size: 1rem;
            line-height: 1.6;
            transition: all 0.3s ease;
        }

        .skill-card:hover .skill-description {
            color: var(--text-primary);
        }

        .skill-level {
            width: 100%;
            height: 6px;
            background: var(--dark-surface);
            border-radius: 3px;
            margin-top: 1rem;
            overflow: hidden;
            position: relative;
        }

        .skill-level-bar {
            height: 100%;
            background: var(--gradient-primary);
            border-radius: 3px;
            transition: all 1s ease;
            position: relative;
        }

        .skill-level-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        /* Project Filters */
        .project-filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 3rem;
            position: relative;
            z-index: 2;
        }

        .filter-btn {
            background: var(--dark-card);
            border: 2px solid transparent;
            color: var(--text-secondary);
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            background: linear-gradient(45deg, #2a2a2a, #2a2a2a) padding-box,
                linear-gradient(45deg, #00d4ff, #ff6b6b, #51cf66) border-box;
            background-size: 200% 200%;
            animation: filterGlow 3s ease infinite;
        }

        @keyframes filterGlow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .filter-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #00d4ff, #ff6b6b, #51cf66);
            transition: all 0.4s ease;
            z-index: -1;
        }

        .filter-btn:hover::before {
            left: 0;
        }

        .filter-btn:hover {
            color: white;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 212, 255, 0.4);
        }

        .filter-btn.active {
            background: linear-gradient(45deg, #00d4ff, #0099cc);
            color: white;
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 212, 255, 0.5);
        }

        .filter-btn.active::before {
            left: 0;
        }

        /* Project Cards Animation */
        .project-card {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .project-card.hidden {
            opacity: 0;
            transform: scale(0.8);
            pointer-events: none;
        }

        .project-card.show {
            opacity: 1;
            transform: scale(1);
            pointer-events: auto;
        }

        .projects::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 70% 20%, rgba(0, 212, 255, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 30% 80%, rgba(255, 107, 107, 0.05) 0%, transparent 50%);
            z-index: 1;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
            position: relative;
            z-index: 2;
        }

        .project-card {
            background: var(--dark-card);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(0, 212, 255, 0.1);
            box-shadow: var(--shadow-card);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--gradient-primary);
            opacity: 0;
            transition: all 0.4s ease;
            z-index: 1;
        }

        .project-card:hover::before {
            opacity: 0.05;
        }

        .project-card:hover {
            transform: translateY(-20px) scale(1.02);
            box-shadow: var(--shadow-glow);
            border-color: var(--primary-color);
        }

        .project-image {
            height: 250px;
            position: relative;
            overflow: hidden;
            border-radius: 20px 20px 0 0;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.6s ease;
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 212, 255, 0.8), rgba(0, 153, 204, 0.8));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .project-card:hover .project-image img {
            transform: scale(1.1);
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .project-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
        }

        .project-card:hover .project-image::before {
            left: 100%;
        }

        .project-content {
            padding: 2.5rem;
            position: relative;
            z-index: 2;
        }

        .project-title {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-primary);
            transition: all 0.3s ease;
        }

        .project-card:hover .project-title {
            color: var(--primary-color);
        }

        .project-description {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
            font-size: 1rem;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-bottom: 2rem;
        }

        .tech-tag {
            background: var(--gradient-primary);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .tech-tag::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.4s ease;
        }

        .tech-tag:hover::before {
            left: 100%;
        }

        .tech-tag:hover {
            transform: scale(1.1);
        }

        .project-links {
            display: flex;
            gap: 1.5rem;
        }

        .project-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }

        .project-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: all 0.3s ease;
        }

        .project-link:hover::after {
            width: 100%;
        }

        .project-link:hover {
            color: var(--accent-color);
            transform: translateX(10px);
        }

        /* Contact Section */
        .contact {
            padding: 120px 0;
            background: var(--dark-bg);
            position: relative;
            overflow: hidden;
        }

        .contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 30% 30%, rgba(0, 212, 255, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 70% 70%, rgba(255, 107, 107, 0.05) 0%, transparent 50%);
            z-index: 1;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            margin-top: 4rem;
            position: relative;
            z-index: 2;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 2rem;
            background: var(--dark-card);
            border: 1px solid rgba(0, 212, 255, 0.1);
            border-radius: 15px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .contact-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            opacity: 0.1;
            transition: all 0.4s ease;
        }

        .contact-item:hover::before {
            left: 0;
        }

        .contact-item:hover {
            transform: translateX(15px) scale(1.02);
            border-color: var(--primary-color);
            box-shadow: var(--shadow-glow);
        }

        .contact-icon {
            font-size: 2rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            width: 60px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .contact-item:hover .contact-icon {
            transform: scale(1.2) rotate(10deg);
        }

        .contact-details h5 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .contact-details p {
            color: var(--text-secondary);
            font-size: 1rem;
        }

        .contact-form {
            background: var(--dark-card);
            padding: 3rem;
            border-radius: 20px;
            border: 1px solid rgba(0, 212, 255, 0.1);
            box-shadow: var(--shadow-card);
            position: relative;
            overflow: hidden;
        }

        .contact-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--gradient-primary);
            opacity: 0.02;
            z-index: -1;
        }

        .form-group {
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
        }

        .form-control {
            background: var(--dark-surface);
            border: 1px solid rgba(0, 212, 255, 0.2);
            border-radius: 12px;
            padding: 1.2rem;
            font-size: 1rem;
            color: var(--text-primary);
            transition: all 0.3s ease;
            box-shadow: none;
        }

        .form-control:focus {
            background: var(--dark-bg);
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(0, 212, 255, 0.1);
            outline: none;
            color: var(--text-primary);
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        /* Footer */
        .footer {
            background: var(--gradient-dark);
            color: var(--text-primary);
            padding: 4rem 0 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 50% 0%, rgba(0, 212, 255, 0.1) 0%, transparent 50%);
            z-index: 1;
        }

        .footer-content {
            position: relative;
            z-index: 2;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .social-link {
            width: 60px;
            height: 60px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            font-size: 1.5rem;
        }

        .social-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
        }

        .social-link:hover::before {
            left: 100%;
        }

        .social-link:hover {
            transform: translateY(-10px) scale(1.1);
            box-shadow: var(--shadow-glow);
        }

        .footer-text {
            color: var(--text-secondary);
            font-size: 1rem;
            margin-top: 2rem;
        }

        .footer-text a {
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-text a:hover {
            color: var(--accent-color);
        }

        /* Animations */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Scroll animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }

        /* Enhanced Responsive Design */
        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 3.5rem;
            }

            .hero .subtitle {
                font-size: 1.5rem;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .about-content {
                gap: 3rem;
            }

            .contact-content {
                gap: 3rem;
            }
        }

        @media (max-width: 992px) {
            .hero h1 {
                font-size: 3rem;
            }

            .hero .subtitle {
                font-size: 1.3rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .about-content {
                flex-direction: column;
                text-align: center;
                gap: 2rem;
            }

            .stats {
                grid-template-columns: repeat(3, 1fr);
                gap: 1.5rem;
            }

            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero .subtitle {
                font-size: 1.1rem;
            }

            .rotating-title {
                font-size: 1.4rem;
                height: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .about-content {
                flex-direction: column;
                text-align: center;
                gap: 2rem;
            }

            .stats {
                grid-template-columns: repeat(3, 1fr);
                gap: 1rem;
            }

            .stat-item {
                padding: 1.5rem 1rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .stat-label {
                font-size: 0.8rem;
                letter-spacing: 0.5px;
            }

            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .projects-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .project-filters {
                gap: 0.5rem;
            }

            .filter-btn {
                padding: 0.6rem 1rem;
                font-size: 0.85rem;
            }

            .skills-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .skill-card {
                padding: 2rem 1.5rem;
            }

            .profile-img {
                width: 250px;
                height: 250px;
            }

            .profile-ring {
                width: 300px;
                height: 300px;
            }

            .profile-glow {
                width: 280px;
                height: 280px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }

            .rotating-title {
                font-size: 1.2rem;
                height: 1.8rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .stats {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .stat-item {
                padding: 1.5rem;
            }

            .stat-number {
                font-size: 2.2rem;
            }

            .stat-label {
                font-size: 0.75rem;
            }

            .btn-primary-custom,
            .btn-outline-custom {
                width: 100%;
                margin-right: 0;
                margin-bottom: 1rem;
                padding: 1rem 2rem;
            }

            .project-filters {
                flex-direction: column;
                align-items: center;
                gap: 0.5rem;
            }

            .filter-btn {
                width: 200px;
                padding: 0.7rem 1rem;
            }

            .profile-img {
                width: 200px;
                height: 200px;
            }

            .profile-ring {
                width: 250px;
                height: 250px;
            }

            .profile-glow {
                width: 230px;
                height: 230px;
            }

            .skill-card {
                padding: 1.5rem 1rem;
            }

            .contact-form {
                padding: 1.5rem 1rem;
            }

            .contact-item {
                padding: 1.5rem 1rem;
                gap: 1rem;
            }

            .contact-icon {
                font-size: 1.5rem;
                width: 50px;
            }

            .contact-details h5 {
                font-size: 1rem;
            }

            .contact-details p {
                font-size: 0.9rem;
            }

            .form-group {
                margin-bottom: 1.5rem;
            }

            .form-control {
                padding: 1rem;
                font-size: 0.95rem;
            }

            .form-control::placeholder {
                font-size: 0.9rem;
            }

            .social-links {
                gap: 1rem;
            }

            .social-link {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.75rem;
            }

            .description {
                font-size: 0.95rem;
            }

            .section-title {
                font-size: 1.5rem;
                margin-bottom: 2rem;
            }

            .contact-item {
                flex-direction: column;
                text-align: center;
                padding: 1rem;
                gap: 0.75rem;
            }

            .contact-item:hover {
                transform: translateX(0) scale(1);
            }

            .contact-icon {
                font-size: 1.25rem;
                width: 100%;
            }

            .contact-item:hover .contact-icon {
                transform: scale(1.1);
            }

            .contact-form {
                padding: 1rem;
            }

            .form-control {
                padding: 0.9rem;
                font-size: 0.9rem;
            }

            .btn-primary-custom {
                padding: 0.9rem 1.5rem;
                font-size: 0.95rem;
            }

            .profile-img {
                width: 150px;
                height: 150px;
            }

            .profile-ring {
                width: 200px;
                height: 200px;
            }

            .profile-glow {
                width: 180px;
                height: 180px;
            }
        }

        @media (max-width: 360px) {
            .hero h1 {
                font-size: 1.5rem;
            }

            .rotating-title {
                font-size: 1rem;
                height: 1.5rem;
            }

            .description {
                font-size: 0.9rem;
            }

            .section-title {
                font-size: 1.3rem;
            }

            .contact-item {
                padding: 0.75rem;
            }

            .contact-details h5 {
                font-size: 0.95rem;
            }

            .contact-details p {
                font-size: 0.85rem;
            }

            .form-control {
                padding: 0.8rem;
                font-size: 0.85rem;
            }

            .btn-primary-custom {
                padding: 0.8rem 1rem;
                font-size: 0.9rem;
            }
        }
    </style>
    <link rel="icon" type="image/svg+xml" href="{{ asset('/frontend/assets/Profile-Pic.png') }}">
</head>

<body>
    <!-- Navigation -->
    @include('layouts.frontend.header')

    @yield('content')

    <!-- Footer -->
    @include('layouts.frontend.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Advanced Portfolio JavaScript with Professional Animations

        // Project Filtering
        function initializeProjectFilters() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    // Hide all cards first
                    projectCards.forEach(card => {
                        card.style.display = 'none';
                        card.classList.remove('show');
                    });

                    // Show only matching cards with animation
                    setTimeout(() => {
                        projectCards.forEach(card => {
                            const categories = card.getAttribute('data-category');

                            if (filter === 'all' || categories.includes(filter)) {
                                card.style.display = 'block';
                                card.classList.add('show');
                                // Add entrance animation
                                card.style.opacity = '0';
                                card.style.transform = 'translateY(30px)';

                                setTimeout(() => {
                                    card.style.transition = 'all 0.6s ease';
                                    card.style.opacity = '1';
                                    card.style.transform = 'translateY(0)';
                                }, 100);
                            }
                        });
                    }, 100);
                });
            });
        }

        // Word-by-Word Rotating Titles Animation
        function initializeRotatingTitles() {
            const titleContainer = document.getElementById('rotating-title');

            const titles = [
                ['Fullstack', 'Laravel', 'Developer'],
                ['WordPress', 'Developer'],
                ['AWS', 'Services', '&', 'Deployments']
            ];

            let currentTitleIndex = 0;
            let currentWordIndex = 0;
            let isAnimating = false;

            function animateWords() {
                if (isAnimating) return;
                isAnimating = true;

                const currentTitle = titles[currentTitleIndex];
                const words = titleContainer.querySelectorAll('.word');

                // Fade out all current words
                words.forEach((word, index) => {
                    setTimeout(() => {
                        word.classList.add('fade-out');
                        word.classList.remove('active');
                    }, index * 100);
                });

                // Clear container and add new words
                setTimeout(() => {
                    titleContainer.innerHTML = '';

                    currentTitle.forEach((wordText, index) => {
                        const wordSpan = document.createElement('span');
                        wordSpan.className = 'word';
                        wordSpan.textContent = wordText;
                        titleContainer.appendChild(wordSpan);

                        // Animate each word in
                        setTimeout(() => {
                            wordSpan.classList.add('fade-in');
                            wordSpan.classList.add('active');
                        }, index * 200);
                    });

                    isAnimating = false;
                }, 600);

                // Move to next title
                currentTitleIndex = (currentTitleIndex + 1) % titles.length;
            }

            // Start rotation after initial delay
            setTimeout(() => {
                setInterval(animateWords, 4000); // Change every 4 seconds
            }, 2000);
        }

        function initializeEnhancedAnimations() {
            // Add ripple effect to all buttons
            const buttons = document.querySelectorAll('.btn-primary-custom, .btn-outline-custom, .filter-btn');

            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.cssText = `
                        position: absolute;
                        width: ${size}px;
                        height: ${size}px;
                        left: ${x}px;
                        top: ${y}px;
                        background: rgba(255, 255, 255, 0.3);
                        border-radius: 50%;
                        transform: scale(0);
                        animation: ripple 0.6s ease-out;
                        pointer-events: none;
                    `;

                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Add CSS for ripple animation
            const rippleStyle = document.createElement('style');
            rippleStyle.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(2);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(rippleStyle);
        }

        // Particle System
        function initializeParticles() {
            const particlesContainer = document.getElementById('particles');
            if (!particlesContainer) return;

            function createParticle() {
                const particle = document.createElement('div');
                particle.className = 'particle';

                // Random properties
                const size = Math.random() * 4 + 2;
                const startX = Math.random() * window.innerWidth;
                const animationDuration = Math.random() * 3 + 4;

                particle.style.width = size + 'px';
                particle.style.height = size + 'px';
                particle.style.left = startX + 'px';
                particle.style.animationDuration = animationDuration + 's';
                particle.style.background = `hsl(${Math.random() * 60 + 180}, 70%, 60%)`;

                particlesContainer.appendChild(particle);

                // Remove particle after animation
                setTimeout(() => {
                    if (particle.parentNode) {
                        particle.parentNode.removeChild(particle);
                    }
                }, animationDuration * 1000);
            }

            // Create particles continuously
            setInterval(createParticle, 300);
        }

        // Mobile Navigation with Auto-Close
        function initializeMobileNavigation() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const navLinks = document.querySelectorAll('.nav-link');

            // Close navbar when clicking on nav links
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Check if navbar is collapsed (mobile view)
                    if (navbarCollapse.classList.contains('show')) {
                        // Trigger click on navbar toggler to close the menu
                        navbarToggler.click();
                    }
                });
            });

            // Close navbar when clicking outside
            document.addEventListener('click', function(e) {
                if (!navbarCollapse.contains(e.target) && !navbarToggler.contains(e.target)) {
                    if (navbarCollapse.classList.contains('show')) {
                        navbarToggler.click();
                    }
                }
            });

            // Close navbar on scroll
            let scrollTimeout;
            window.addEventListener('scroll', function() {
                if (navbarCollapse.classList.contains('show')) {
                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(() => {
                        navbarToggler.click();
                    }, 100);
                }
            });
        }

        function initializeNavigation() {
            const navbar = document.querySelector('.navbar');
            const navLinks = document.querySelectorAll('.nav-link');

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Active navigation highlighting
            function updateActiveNav() {
                const sections = document.querySelectorAll('section[id]');
                const scrollPos = window.scrollY + 100;

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    const sectionId = section.getAttribute('id');

                    if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === `#${sectionId}`) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }

            window.addEventListener('scroll', updateActiveNav);

            // Smooth scrolling with easing
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);

                    if (targetSection) {
                        const targetPosition = targetSection.offsetTop - 80;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        }

        // Advanced scroll animations
        function initializeScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');

                        // Special animations for different elements
                        if (entry.target.classList.contains('skill-card')) {
                            animateSkillBars(entry.target);
                        }

                        if (entry.target.classList.contains('stat-item')) {
                            animateStatNumbers(entry.target);
                        }
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });
        }

        // Skill bar animations
        function animateSkillBars(skillCard) {
            const skillBar = skillCard.querySelector('.skill-level-bar');
            if (skillBar) {
                const width = skillBar.style.width;
                skillBar.style.width = '0%';

                setTimeout(() => {
                    skillBar.style.width = width;
                }, 500);
            }
        }

        // Counter animations
        function initializeCounters() {
            const statsObserver = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const statNumbers = entry.target.querySelectorAll('.stat-number');
                        statNumbers.forEach(stat => {
                            animateCounter(stat);
                        });
                        statsObserver.unobserve(entry.target);
                    }
                });
            });

            const statsSection = document.querySelector('.stats');
            if (statsSection) {
                statsObserver.observe(statsSection);
            }
        }

        function animateCounter(element) {
            const target = parseInt(element.textContent);
            const duration = 2000;
            const start = performance.now();

            function updateCounter(currentTime) {
                const elapsed = currentTime - start;
                const progress = Math.min(elapsed / duration, 1);

                const current = Math.floor(progress * target);
                element.textContent = current + '+';

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                }
            }

            requestAnimationFrame(updateCounter);
        }

        function animateStatNumbers(statItem) {
            const statNumber = statItem.querySelector('.stat-number');
            if (statNumber) {
                animateCounter(statNumber);
            }
        }

        // Form handling with animations
        function initializeFormHandling() {
            const form = document.querySelector('.contact-form form');
            if (!form) return;

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Add loading state
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;

                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;

                // Simulate form submission
                setTimeout(() => {
                    submitBtn.textContent = 'Message Sent!';
                    submitBtn.style.background = 'var(--success-color)';

                    setTimeout(() => {
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                        submitBtn.style.background = '';
                        form.reset();
                    }, 2000);
                }, 1500);
            });

            // Form field animations
            const formInputs = form.querySelectorAll('.form-control');
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });

                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });
        }

        // Loading animation
        function initializeLoadingAnimation() {
            window.addEventListener('load', function() {
                document.body.style.opacity = '0';
                document.body.style.transition = 'opacity 0.8s ease';

                setTimeout(() => {
                    document.body.style.opacity = '1';
                }, 100);
            });
        }

        // Initialize all animations
        function initializeAnimations() {
            // Floating elements animation
            const floatingElements = document.querySelectorAll('.floating-element');
            floatingElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.5}s`;
            });

            // Profile image hover effects
            const profileImg = document.querySelector('.profile-img');
            if (profileImg) {
                profileImg.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05) rotate(2deg)';
                    this.style.animationPlayState = 'paused';

                    // Add ripple effect
                    createRippleEffect(this);
                });

                profileImg.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1) rotate(0deg)';
                    this.style.animationPlayState = 'running';
                });

                // Add click effect
                profileImg.addEventListener('click', function() {
                    createClickEffect(this);
                });
            }

            // Profile container animations
            const profileContainer = document.querySelector('.profile-container');
            if (profileContainer) {
                profileContainer.addEventListener('mouseenter', function() {
                    this.style.animationPlayState = 'paused';
                    this.style.transform = 'translateY(-15px) scale(1.02)';
                });

                profileContainer.addEventListener('mouseleave', function() {
                    this.style.animationPlayState = 'running';
                    this.style.transform = 'translateY(0px) scale(1)';
                });
            }

            // Tech icons hover effects
            const techIcons = document.querySelectorAll('.tech-icon');
            techIcons.forEach((icon, index) => {
                icon.addEventListener('mouseenter', function() {
                    this.style.animationPlayState = 'paused';
                    this.style.transform = 'scale(1.3) rotate(360deg)';
                    this.style.filter = 'drop-shadow(0 0 15px rgba(0, 212, 255, 0.8))';
                    this.style.color = 'var(--accent-color)';
                });

                icon.addEventListener('mouseleave', function() {
                    this.style.animationPlayState = 'running';
                    this.style.transform = 'scale(1) rotate(0deg)';
                    this.style.filter = 'drop-shadow(0 0 0px rgba(0, 212, 255, 0))';
                    this.style.color = 'var(--primary-color)';
                });
            });

            // Navbar logo animations
            const navbarLogo = document.querySelector('.navbar-logo');
            const logoContainer = document.querySelector('.logo-container');

            if (navbarLogo && logoContainer) {
                // Add click effect to logo
                logoContainer.addEventListener('click', function(e) {
                    e.preventDefault();
                    createLogoClickEffect(this);

                    // Scroll to top smoothly
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });

                // Add hover sound effect (visual feedback)
                logoContainer.addEventListener('mouseenter', function() {
                    this.style.animationPlayState = 'paused';
                });

                logoContainer.addEventListener('mouseleave', function() {
                    this.style.animationPlayState = 'running';
                });
            }

            // Skill cards hover effects
            const skillCards = document.querySelectorAll('.skill-card');
            skillCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-15px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Project cards hover effects
            const projectCards = document.querySelectorAll('.project-card');
            projectCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-20px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        }

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Mouse cursor effects
        document.addEventListener('mousemove', function(e) {
            const cursor = document.querySelector('.cursor');
            if (cursor) {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
            }
        });

        // Ripple effect for profile image
        function createRippleEffect(element) {
            const ripple = document.createElement('div');
            ripple.style.cssText = `
                position: absolute;
                top: 50%;
                left: 50%;
                width: 0;
                height: 0;
                background: radial-gradient(circle, rgba(0, 212, 255, 0.3) 0%, transparent 70%);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                animation: rippleExpand 1s ease-out forwards;
                pointer-events: none;
                z-index: 4;
            `;

            element.appendChild(ripple);

            setTimeout(() => {
                if (ripple.parentNode) {
                    ripple.parentNode.removeChild(ripple);
                }
            }, 1000);
        }

        // Click effect for profile image
        function createClickEffect(element) {
            const clickEffect = document.createElement('div');
            clickEffect.style.cssText = `
                position: absolute;
                top: 50%;
                left: 50%;
                width: 0;
                height: 0;
                background: radial-gradient(circle, rgba(255, 107, 107, 0.4) 0%, transparent 70%);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                animation: clickExpand 0.6s ease-out forwards;
                pointer-events: none;
                z-index: 4;
            `;

            element.appendChild(clickEffect);

            setTimeout(() => {
                if (clickEffect.parentNode) {
                    clickEffect.parentNode.removeChild(clickEffect);
                }
            }, 600);
        }

        // Logo click effect
        function createLogoClickEffect(element) {
            const logoClickEffect = document.createElement('div');
            logoClickEffect.style.cssText = `
                position: absolute;
                top: 50%;
                left: 50%;
                width: 0;
                height: 0;
                background: radial-gradient(circle, rgba(0, 212, 255, 0.6) 0%, transparent 70%);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                animation: logoClickExpand 0.8s ease-out forwards;
                pointer-events: none;
                z-index: 3;
            `;

            element.appendChild(logoClickEffect);

            setTimeout(() => {
                if (logoClickEffect.parentNode) {
                    logoClickEffect.parentNode.removeChild(logoClickEffect);
                }
            }, 800);
        }

        // Add CSS for ripple and click animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes rippleExpand {
                0% {
                    width: 0;
                    height: 0;
                    opacity: 1;
                }
                100% {
                    width: 400px;
                    height: 400px;
                    opacity: 0;
                }
            }
            
            @keyframes clickExpand {
                0% {
                    width: 0;
                    height: 0;
                    opacity: 1;
                }
                100% {
                    width: 300px;
                    height: 300px;
                    opacity: 0;
                }
            }
            
            @keyframes logoClickExpand {
                0% {
                    width: 0;
                    height: 0;
                    opacity: 1;
                }
                100% {
                    width: 100px;
                    height: 100px;
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Add custom cursor
        const cursor = document.createElement('div');
        cursor.className = 'cursor';
        cursor.style.cssText = `
            position: fixed;
            width: 20px;
            height: 20px;
            background: var(--gradient-primary);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.7;
            transition: transform 0.1s ease;
        `;
        document.body.appendChild(cursor);

        // Cursor hover effects
        const hoverElements = document.querySelectorAll('a, button, .skill-card, .project-card');
        hoverElements.forEach(element => {
            element.addEventListener('mouseenter', function() {
                cursor.style.transform = 'scale(1.5)';
                cursor.style.background = 'var(--accent-color)';
            });

            element.addEventListener('mouseleave', function() {
                cursor.style.transform = 'scale(1)';
                cursor.style.background = 'var(--gradient-primary)';
            });
        });

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            initializeAnimations();
            initializeParticles();
            initializeNavigation();
            initializeMobileNavigation();
            initializeScrollAnimations();
            initializeCounters();
            initializeFormHandling();
            initializeLoadingAnimation();
            initializeProjectFilters();
            initializeEnhancedAnimations();
            initializeRotatingTitles();
        });
    </script>
</body>

</html>