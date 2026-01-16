<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareWell Medical Center | Premium Healthcare</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #0a3d62;
            --secondary: #1e90ff;
            --accent: #00cec9;
            --light: #f5f9fc;
            --heart-red: #ff6b6b;
            --heart-pink: #ff8e8e;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 90px;
            background-color: var(--light);
            transition: padding-top 0.4s ease;
        }
        
        /* =========== HEADER STYLES =========== */
        .main-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 40px rgba(10, 61, 98, 0.12);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 15px 0;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            border-bottom: 1px solid rgba(10, 61, 98, 0.1);
            transform: translateY(0);
        }
        
        .main-header.scrolled {
            padding: 10px 0;
            box-shadow: 0 15px 50px rgba(10, 61, 98, 0.2);
            background: rgba(255, 255, 255, 0.98);
        }
        
        /* Hide header on scroll down, show on scroll up */
        .main-header.hidden {
            transform: translateY(-100%);
            box-shadow: none;
        }
        
        /* Animated Heart Logo */
        .logo-container {
            display: flex;
            align-items: center;
            text-decoration: none;
            position: relative;
            transition: all 0.4s ease;
        }
        
        .logo-container:hover {
            transform: translateY(-3px);
        }
        
        .heart-logo {
            position: relative;
            width: 55px;
            height: 55px;
            margin-right: 15px;
            animation: heartbeat 2.5s infinite ease-in-out;
            filter: drop-shadow(0 5px 15px rgba(255, 107, 107, 0.3));
        }
        
        @keyframes heartbeat {
            0% { transform: scale(1); }
            5% { transform: scale(1.15); }
            10% { transform: scale(1); }
            15% { transform: scale(1.15); }
            20% { transform: scale(1); }
            100% { transform: scale(1); }
        }
        
        .heart-logo::before,
        .heart-logo::after {
            content: '';
            position: absolute;
            top: 0;
            width: 30px;
            height: 48px;
            border-radius: 25px 25px 0 0;
            background: linear-gradient(135deg, var(--heart-red), var(--heart-pink));
            box-shadow: 0 8px 20px rgba(255, 107, 107, 0.4);
        }
        
        .heart-logo::before {
            left: 25px;
            transform: rotate(-45deg);
            transform-origin: 0 100%;
        }
        
        .heart-logo::after {
            left: 0;
            transform: rotate(45deg);
            transform-origin: 100% 100%;
        }
        
        /* Plus Symbol Inside Heart */
        .heart-plus {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 20px;
            font-weight: 900;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            z-index: 2;
            animation: pulse-plus 2s infinite;
        }
        
        @keyframes pulse-plus {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }
        
        /* Logo Text with Gradient */
        .logo-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }
        
        .logo-text .brand-name {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 28px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.5px;
            text-shadow: 0 2px 10px rgba(10, 61, 98, 0.1);
        }
        
        .logo-text .tagline {
            font-size: 11px;
            color: var(--accent);
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-top: 2px;
        }
        
        /* Navigation with Icons and Effects */
        .navbar-nav .nav-item {
            margin: 0 8px;
            position: relative;
        }
        
        .navbar-nav .nav-link {
            color: #444 !important;
            font-weight: 500;
            padding: 12px 20px !important;
            border-radius: 15px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            font-size: 15px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(30, 144, 255, 0.05), rgba(0, 206, 201, 0.05));
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
        
        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: 0.5s;
        }
        
        .navbar-nav .nav-link:hover::before {
            left: 100%;
        }
        
        .navbar-nav .nav-link i {
            font-size: 16px;
            margin-right: 10px;
            width: 24px;
            text-align: center;
            transition: all 0.4s ease;
            color: var(--primary);
        }
        
        .navbar-nav .nav-link:hover {
            color: white !important;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 30px rgba(30, 144, 255, 0.4);
        }
        
        .navbar-nav .nav-link:hover i {
            transform: rotate(15deg) scale(1.2);
            color: white;
        }
        
        .navbar-nav .nav-link.active {
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            color: white !important;
            font-weight: 600;
            box-shadow: 0 8px 25px rgba(30, 144, 255, 0.3);
            transform: translateY(-2px);
        }
        
        .navbar-nav .nav-link.active i {
            color: white;
            animation: icon-bounce 0.5s ease;
        }
        
        @keyframes icon-bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        
        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 8px;
            height: 8px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 0 15px white;
            animation: glow-dot 1.5s infinite;
        }
        
        @keyframes glow-dot {
            0%, 100% { box-shadow: 0 0 10px white; }
            50% { box-shadow: 0 0 20px white; }
        }
        
        /* Contact Info with Effects */
        .header-contact {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            color: #666;
            font-size: 14px;
            padding: 8px 15px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.5);
            transition: all 0.4s ease;
            border: 1px solid rgba(10, 61, 98, 0.1);
            backdrop-filter: blur(5px);
        }
        
        .contact-item:hover {
            color: var(--secondary);
            background: rgba(30, 144, 255, 0.1);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(30, 144, 255, 0.2);
            border-color: rgba(30, 144, 255, 0.3);
        }
        
        .contact-item i {
            margin-right: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover i {
            transform: scale(1.2);
            color: var(--secondary);
        }
        
        /* Mobile Menu Toggle */
        .navbar-toggler {
            border: none;
            padding: 10px 15px;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(30, 144, 255, 0.1), rgba(0, 206, 201, 0.1));
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(30, 144, 255, 0.2);
        }
        
        .navbar-toggler:hover {
            background: linear-gradient(135deg, rgba(30, 144, 255, 0.2), rgba(0, 206, 201, 0.2));
            transform: rotate(90deg) scale(1.1);
            box-shadow: 0 8px 25px rgba(30, 144, 255, 0.3);
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 4px rgba(30, 144, 255, 0.3);
        }
        
        .navbar-toggler i {
            color: var(--primary);
            font-size: 1.8rem;
            transition: all 0.4s ease;
        }
        
        /* Responsive Design */
        @media (max-width: 1200px) {
            .header-contact {
                display: none;
            }
        }
        
        @media (max-width: 992px) {
            .navbar-nav {
                padding: 25px;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(245, 249, 252, 0.95));
                border-radius: 25px;
                margin-top: 20px;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }
            
            .navbar-nav .nav-item {
                margin: 12px 0;
            }
            
            body {
                padding-top: 80px;
            }
        }
        
        @media (max-width: 768px) {
            .heart-logo {
                width: 45px;
                height: 45px;
                margin-right: 12px;
            }
            
            .logo-text .brand-name {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

<header class="main-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Animated Heart Logo -->
            <a class="navbar-brand logo-container" href="index.php">
                <div class="heart-logo">
                    <div class="heart-plus">+</div>
                </div>
                <div class="logo-text">
                    <span class="brand-name">CareWell</span>
                    <span class="tagline">Medical Center</span>
                </div>
            </a>
            
            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'doctor.php') ? 'active' : ''; ?>" href="doctor.php">
                            <i class="fas fa-user-md"></i> Doctors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'opd.php') ? 'active' : ''; ?>" href="opd.php">
                            <i class="fas fa-clock"></i> OPD
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'lab.php') ? 'active' : ''; ?>" href="lab.php">
                            <i class="fas fa-flask"></i> Laboratory
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'scanning.php') ? 'active' : ''; ?>" href="scanning.php">
                            <i class="fas fa-x-ray"></i> Scanning
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="contact.php">
                            <i class="fas fa-phone-alt"></i> Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
// Scroll hide/show header functionality
let lastScrollTop = 0;
const header = document.querySelector('.main-header');
const headerHeight = header.offsetHeight;
const scrollThreshold = 100; // Minimum scroll distance before hiding
const showThreshold = 10; // Scroll up distance to show header

// Adjust body padding based on header visibility
function adjustBodyPadding() {
    if (header.classList.contains('hidden')) {
        document.body.style.paddingTop = '0';
    } else {
        document.body.style.paddingTop = headerHeight + 'px';
    }
}

window.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    // Add scrolled class for styling
    if (scrollTop > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
    
    // Hide/show header logic
    if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
        // Scrolling down - hide header
        header.classList.add('hidden');
    } else if (scrollTop < lastScrollTop) {
        // Scrolling up - show header
        if (scrollTop < lastScrollTop - showThreshold) {
            header.classList.remove('hidden');
        }
    }
    
    // Always show header when at the top
    if (scrollTop === 0) {
        header.classList.remove('hidden');
    }
    
    lastScrollTop = scrollTop;
    
    // Adjust body padding
    adjustBodyPadding();
});

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > 50) {
        header.classList.add('scrolled');
    }
    
    // Adjust body padding initially
    adjustBodyPadding();
    
    // Show header when mouse moves near top of page
    let mouseTimer;
    document.addEventListener('mousemove', function(e) {
        if (e.clientY < 100 && header.classList.contains('hidden')) {
            clearTimeout(mouseTimer);
            header.classList.remove('hidden');
            adjustBodyPadding();
            
            // Hide again after 2 seconds if not interacted with
            mouseTimer = setTimeout(function() {
                if (window.pageYOffset > scrollThreshold) {
                    header.classList.add('hidden');
                    adjustBodyPadding();
                }
            }, 2000);
        }
    });
    
    // Keep header visible when hovering over it
    header.addEventListener('mouseenter', function() {
        if (header.classList.contains('hidden')) {
            header.classList.remove('hidden');
            adjustBodyPadding();
        }
    });
    
    // Add interactive effects to heart logo
    const heartLogo = document.querySelector('.heart-logo');
    const logoContainer = document.querySelector('.logo-container');
    
    if (logoContainer) {
        logoContainer.addEventListener('mouseenter', function() {
            heartLogo.style.animation = 'heartbeat 0.6s infinite';
            heartLogo.style.filter = 'drop-shadow(0 8px 25px rgba(255, 107, 107, 0.5))';
        });
        
        logoContainer.addEventListener('mouseleave', function() {
            heartLogo.style.animation = 'heartbeat 2.5s infinite ease-in-out';
            heartLogo.style.filter = 'drop-shadow(0 5px 15px rgba(255, 107, 107, 0.3))';
        });
    }
    
    // Add ripple effect to nav links
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.7);
                transform: scale(0);
                animation: ripple 0.6s linear;
                width: ${size}px;
                height: ${size}px;
                top: ${y}px;
                left: ${x}px;
                pointer-events: none;
            `;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
    
    // Add CSS for ripple animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>