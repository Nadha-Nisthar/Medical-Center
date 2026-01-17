<?php
// Set page title
$pageTitle = "Advanced Scanning & Diagnostics | CareWell";

// Include header
require_once 'header.php';
?>

<!-- Page Specific CSS -->
<style>
/* Page Specific Styles */
.hero{
  min-height:100vh;
  display:flex;
  align-items:center;
  text-align:center;
  background:
    linear-gradient(rgba(10, 61, 98, 0.85), rgba(4, 30, 50, 0.92)),
    url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
  color:white;
  position: relative;
  margin-top: -100px;
  animation: gradientShift 15s ease-in-out infinite alternate;
}
@keyframes gradientShift {
  0% {
    background:
      linear-gradient(rgba(10, 61, 98, 0.85), rgba(4, 30, 50, 0.92)),
      url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
  }
  100% {
    background:
      linear-gradient(rgba(4, 30, 50, 0.92), rgba(10, 61, 98, 0.85)),
      url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
  }
}
.hero h1{
  font-size:3.2rem;
  font-weight:700;
  margin-bottom: 1.5rem;
  animation: textGlow 3s ease-in-out infinite alternate;
}
@keyframes textGlow {
  0% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
  }
  100% {
    text-shadow: 0 0 20px rgba(255, 255, 255, 0.6), 0 0 30px rgba(33, 150, 243, 0.4);
  }
}
.hero p{
  max-width:650px;
  margin:auto;
  opacity:.95;
  font-size: 1.2rem;
}
.hero .lead {
  font-size: 1.1rem;
  animation: fadeInUp 1s ease-out 0.3s both;
}
/* SECTION TITLE */
.section-title{
  font-weight:700;
  position:relative;
  margin-bottom: 3rem;
  animation: slideInFromLeft 1s ease-out;
}
@keyframes slideInFromLeft {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}
.section-title::after{
  content:'';
  width:80px;
  height:5px;
  background:var(--secondary);
  display:block;
  margin:15px auto 0;
  border-radius:10px;
  animation: expandWidth 1s ease-out 0.5s both;
}
@keyframes expandWidth {
  from { width: 0; }
  to { width: 80px; }
}
/* SERVICE CARD */
.service-card{
  border:none;
  border-radius:20px;
  overflow:hidden;
  transition:.4s;
  cursor:pointer;
  height:100%;
  background: white;
  animation: fadeInUp 0.8s ease-out;
  animation-fill-mode: both;
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
.service-card img{
  height:200px;
  width:100%;
  object-fit:cover;
  transition:transform 0.5s ease;
}
.service-card:hover img{
  transform:scale(1.08);
}
.service-card:hover{
  transform:translateY(-15px);
  box-shadow:0 25px 45px rgba(0,0,0,.18);
}
.service-card h5{
  font-weight:600;
  color:var(--primary);
  margin-top: 0.5rem;
}
.service-card .card-body {
  padding: 1.5rem;
}
/* Price Badge Animation */
.price-badge{
  font-size:0.9rem;
  padding:0.35rem 1rem;
  border-radius:20px;
  background: linear-gradient(45deg, #0a3d62, #1e90ff);
  color: white;
  font-weight: 600;
  position: relative;
  overflow: hidden;
}
.price-badge::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
  transition: 0.5s;
}
.service-card:hover .price-badge::before {
  left: 100%;
}
/* Currency Symbol */
.currency {
  font-size: 0.8em;
  margin-right: 2px;
  display: inline-block;
  animation: currencyPulse 2s infinite;
}
@keyframes currencyPulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.1); }
}
/* Stats Counter */
.stat-counter {
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(10px);
  border-radius: 15px;
  padding: 20px;
  margin-top: 2rem;
  animation: fadeIn 1s ease-out 0.8s both;
}
.stat-counter h3 {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 0;
  color: white;
}
/* Hero Stats */
.hero-stats {
  margin-top: 3rem;
}
.hero-stats .stat-item {
  padding: 15px;
  transition: transform 0.3s ease;
}
.hero-stats .stat-item:hover {
  transform: translateY(-5px);
}
.hero-stats .stat-number {
  font-size: 2rem;
  font-weight: 700;
  color: var(--secondary);
  display: inline-block;
  animation: countUp 1s ease-out;
}
@keyframes countUp {
  from { 
    opacity: 0;
    transform: translateY(20px);
  }
  to { 
    opacity: 1;
    transform: translateY(0);
  }
}
/* Why Choose Us */
.why-choose {
  background: #f8fbff;
  padding: 5rem 0;
  position: relative;
  overflow: hidden;
}
.why-choose::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="%230a3d62" opacity="0.03"/></svg>');
  animation: waveMove 20s linear infinite;
}
@keyframes waveMove {
  0% { transform: translateX(0) translateY(0); }
  100% { transform: translateX(-50px) translateY(-20px); }
}
.feature-icon {
  width: 70px;
  height: 70px;
  background: linear-gradient(45deg, var(--primary), var(--secondary));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 1.5rem;
  color: white;
  font-size: 1.8rem;
  transition: all 0.3s ease;
  animation: iconFloat 3s ease-in-out infinite;
}
@keyframes iconFloat {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
.feature-icon:hover {
  transform: scale(1.1) rotate(360deg);
  transition: transform 0.6s ease;
}
/* Header Logo */
.header-logo {
  font-size: 2rem;
  font-weight: 700;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-bottom: 1rem;
  animation: logoAppear 1s ease-out;
}
@keyframes logoAppear {
  from {
    opacity: 0;
    transform: scale(0.8);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}
/* CTA */
.cta{
  background:linear-gradient(135deg,var(--primary),var(--secondary));
  color:white;
  border-radius:30px;
  position: relative;
  overflow: hidden;
  animation: ctaPulse 4s ease-in-out infinite;
}
@keyframes ctaPulse {
  0%, 100% {
    box-shadow: 0 10px 30px rgba(10, 61, 98, 0.2);
  }
  50% {
    box-shadow: 0 15px 40px rgba(10, 61, 98, 0.4);
  }
}
.cta::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url('https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=60') center/cover no-repeat;
  opacity: 0.1;
  z-index: 0;
  animation: bgZoom 20s ease-in-out infinite;
}
@keyframes bgZoom {
  0% { transform: scale(1); }
  50% { transform: scale(1.1); }
  100% { transform: scale(1); }
}
.cta > * {
  position: relative;
  z-index: 1;
}
/* Modal Animations */
.modal-content {
  animation: modalSlideIn 0.3s ease-out;
}
@keyframes modalSlideIn {
  from {
    opacity: 0;
    transform: translateY(-50px) scale(0.9);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}
/* Floating Button Animation */
.btn-light, .btn-primary {
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
}
.btn-light::after, .btn-primary::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 5px;
  height: 5px;
  background: rgba(255, 255, 255, 0.5);
  opacity: 0;
  border-radius: 100%;
  transform: scale(1, 1) translate(-50%);
  transform-origin: 50% 50%;
}
.btn-light:focus:not(:active)::after,
.btn-primary:focus:not(:active)::after {
  animation: ripple 1s ease-out;
}
@keyframes ripple {
  0% {
    transform: scale(0, 0);
    opacity: 0.5;
  }
  100% {
    transform: scale(50, 50);
    opacity: 0;
  }
}
/* Service Card Stagger Animation */
.service-card:nth-child(1) { animation-delay: 0.1s; }
.service-card:nth-child(2) { animation-delay: 0.2s; }
.service-card:nth-child(3) { animation-delay: 0.3s; }
.service-card:nth-child(4) { animation-delay: 0.4s; }
.service-card:nth-child(5) { animation-delay: 0.5s; }
.service-card:nth-child(6) { animation-delay: 0.6s; }
.service-card:nth-child(7) { animation-delay: 0.7s; }
.service-card:nth-child(8) { animation-delay: 0.8s; }
/* Scroll Animation Classes */
.fade-in {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}
.fade-in.visible {
  opacity: 1;
  transform: translateY(0);
}
/* Responsive */
@media(max-width:768px){
  .hero h1{
    font-size:2.4rem;
  }
  .hero p {
    font-size: 1rem;
  }
  .hero {
    animation: none;
    animation: gradientShiftMobile 15s ease-in-out infinite alternate;
  }
  @keyframes gradientShiftMobile {
    0% {
      background:
        linear-gradient(rgba(10, 61, 98, 0.9), rgba(4, 30, 50, 0.95)),
        url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
    }
    100% {
      background:
        linear-gradient(rgba(4, 30, 50, 0.95), rgba(10, 61, 98, 0.9)),
        url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
    }
  }
}
</style>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="header-logo">
      
    </div>
    <h1 data-aos="fade-up">Advanced Scanning & Diagnostics</h1>
    <p class="lead mt-3" data-aos="fade-up" data-aos-delay="200">
      Precision diagnostics powered by cutting-edge technology and expert medical specialists. 
      Your health is our priority with accurate, fast, and reliable test results.
    </p>
    
    <div class="hero-stats row justify-content-center" data-aos="fade-up" data-aos-delay="400">
      <div class="col-6 col-md-3 text-center stat-item fade-in">
        <div class="stat-number">10,000+</div>
        <small>Tests Per Month</small>
      </div>
      <div class="col-6 col-md-3 text-center stat-item fade-in" style="animation-delay: 0.1s;">
        <div class="stat-number">24/7</div>
        <small>Emergency Services</small>
      </div>
      <div class="col-6 col-md-3 text-center stat-item fade-in" style="animation-delay: 0.2s;">
        <div class="stat-number">99%</div>
        <small>Accuracy Rate</small>
      </div>
      <div class="col-6 col-md-3 text-center stat-item fade-in" style="animation-delay: 0.3s;">
        <div class="stat-number">2-4 hrs</div>
        <small>Report Time</small>
      </div>
    </div>
    
    <a href="#services" class="btn btn-light btn-lg mt-4 px-5" data-aos="zoom-in">
      <i class="fas fa-search me-2"></i>Explore Services
    </a>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="why-choose">
  <div class="container">
    <h2 class="text-center text-primary section-title fade-in">Why Choose CareWell?</h2>
    <div class="row g-4">
      <div class="col-md-3 col-sm-6 text-center fade-in" data-aos="fade-up">
        <div class="feature-icon">
          <i class="fas fa-clock"></i>
        </div>
        <h5>Quick Results</h5>
        <p class="text-muted">Get reports within 2-4 hours for most tests</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center fade-in" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-icon">
          <i class="fas fa-user-md"></i>
        </div>
        <h5>Expert Staff</h5>
        <p class="text-muted">Certified technicians and radiologists</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center fade-in" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-icon">
          <i class="fas fa-microscope"></i>
        </div>
        <h5>Modern Equipment</h5>
        <p class="text-muted">Latest diagnostic technology</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center fade-in" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-icon">
          <i class="fas fa-rupee-sign"></i>
        </div>
        <h5>Affordable Pricing</h5>
        <p class="text-muted">Competitive rates with no hidden charges</p>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="py-5" id="services">
  <div class="container">
    <h2 class="text-center text-primary section-title fade-in">
      Our Diagnostic Services
    </h2>

    <div class="row g-4 justify-content-center">

      <!-- X-RAY -->
      <div class="col-sm-6 col-md-4 col-lg-3 fade-in">
        <div class="card service-card h-100 text-center border-0 shadow-sm"
             data-service="xray"
             data-bs-toggle="modal"
             data-bs-target="#serviceModal">
          <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
               class="card-img-top"
               alt="X-Ray Machine">
          <div class="card-body">
            <h5 class="fw-bold">X-Ray</h5>
            <p class="text-muted small mb-2">
              Digital radiography with low radiation
            </p>
            <span class="badge price-badge">
              <span class="currency">LKR</span>4,000
            </span>
          </div>
        </div>
      </div>

      <!-- ULTRASOUND -->
      <div class="col-sm-6 col-md-4 col-lg-3 fade-in">
        <div class="card service-card h-100 text-center border-0 shadow-sm"
             data-service="ultrasound"
             data-bs-toggle="modal"
             data-bs-target="#serviceModal">
          <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
               class="card-img-top"
               alt="Ultrasound Machine">
          <div class="card-body">
            <h5 class="fw-bold">Ultrasound</h5>
            <p class="text-muted small mb-2">
              Safe real-time imaging diagnostics
            </p>
            <span class="badge price-badge">
              <span class="currency">LKR</span>10,000
            </span>
          </div>
        </div>
      </div>

      <!-- ECG -->
      <div class="col-sm-6 col-md-4 col-lg-3 fade-in">
        <div class="card service-card h-100 text-center border-0 shadow-sm"
             data-service="ecg"
             data-bs-toggle="modal"
             data-bs-target="#serviceModal">
          <img src="https://images.unsplash.com/photo-1551601651-2a8555f1a136?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
               class="card-img-top"
               alt="ECG Machine">
          <div class="card-body">
            <h5 class="fw-bold">ECG</h5>
            <p class="text-muted small mb-2">
              Accurate heart rhythm monitoring
            </p>
            <span class="badge price-badge">
              <span class="currency">LKR</span>3,000
            </span>
          </div>
        </div>
      </div>

      <!-- CT SCAN -->
      <div class="col-sm-6 col-md-4 col-lg-3 fade-in">
        <div class="card service-card h-100 text-center border-0 shadow-sm"
             data-service="ct"
             data-bs-toggle="modal"
             data-bs-target="#serviceModal">
          <img src="https://images.unsplash.com/photo-1532187643603-ba119ca4109e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
               class="card-img-top"
               alt="CT Scan Machine">
          <div class="card-body">
            <h5 class="fw-bold">CT Scan</h5>
            <p class="text-muted small mb-2">
              High-resolution 3D imaging
            </p>
            <span class="badge price-badge">
              <span class="currency">LKR</span>25,000
            </span>
          </div>
        </div>
      </div>

      <!-- MRI -->
      <div class="col-sm-6 col-md-4 col-lg-3 fade-in">
        <div class="card service-card h-100 text-center border-0 shadow-sm"
             data-service="mri"
             data-bs-toggle="modal"
             data-bs-target="#serviceModal">
          <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
               class="card-img-top"
               alt="MRI Machine">
          <div class="card-body">
            <h5 class="fw-bold">MRI Scan</h5>
            <p class="text-muted small mb-2">
              Advanced detailed body imaging
            </p>
            <span class="badge price-badge">
              <span class="currency">LKR</span>50,000
            </span>
          </div>
        </div>
      </div>

      <!-- BLOOD TEST -->
      <div class="col-sm-6 col-md-4 col-lg-3 fade-in">
        <div class="card service-card h-100 text-center border-0 shadow-sm"
             data-service="blood"
             data-bs-toggle="modal"
             data-bs-target="#serviceModal">
          <img src="https://images.unsplash.com/photo-1585435557343-3b092031d5ad?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
               class="card-img-top"
               alt="Blood Test Lab">
          <div class="card-body">
            <h5 class="fw-bold">Blood Tests</h5>
            <p class="text-muted small mb-2">
              Comprehensive lab diagnostics
            </p>
            <span class="badge price-badge">
              <span class="currency">LKR</span>2,000
            </span>
          </div>
        </div>
      </div>

      <!-- ECHO -->
      <div class="col-sm-6 col-md-4 col-lg-3 fade-in">
        <div class="card service-card h-100 text-center border-0 shadow-sm"
             data-service="echo"
             data-bs-toggle="modal"
             data-bs-target="#serviceModal">
          <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
               class="card-img-top"
               alt="Echocardiography">
          <div class="card-body">
            <h5 class="fw-bold">Echo</h5>
            <p class="text-muted small mb-2">
              Heart ultrasound & blood flow study
            </p>
            <span class="badge price-badge">
              <span class="currency">LKR</span>15,000
            </span>
          </div>
        </div>
      </div>

      <!-- MAMMOGRAPHY -->
      <div class="col-sm-6 col-md-4 col-lg-3 fade-in">
        <div class="card service-card h-100 text-center border-0 shadow-sm"
             data-service="mammo"
             data-bs-toggle="modal"
             data-bs-target="#serviceModal">
          <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
               class="card-img-top"
               alt="Mammography">
          <div class="card-body">
            <h5 class="fw-bold">Mammography</h5>
            <p class="text-muted small mb-2">
              Breast cancer screening
            </p>
            <span class="badge price-badge">
              <span class="currency">LKR</span>20,000
            </span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SERVICE DETAILS MODAL -->
<div class="modal fade" id="serviceModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4">
      <div class="modal-header">
        <h5 class="modal-title text-primary fw-bold" id="serviceTitle"></h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="serviceBody"></div>
    </div>
  </div>
</div>

<!-- CTA -->
<section class="py-5">
  <div class="container">
    <div class="cta p-5 text-center shadow fade-in" data-aos="zoom-in">
      <h2 class="fw-bold mb-3">Scanning Timings & Services</h2>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h5><i class="fas fa-clock me-2"></i>Working Hours</h5>
          <p>Monday – Saturday: 8:00 AM – 8:00 PM</p>
          <p>Sunday: 9:00 AM – 1:00 PM</p>
        </div>
        <div class="col-md-6">
          <h5><i class="fas fa-bolt me-2"></i>Emergency Services</h5>
          <p>24/7 Emergency Scanning Available</p>
          <p>Call: +94 11 234 5678</p>
        </div>
      </div>
      <p class="mt-3">
        <i class="fas fa-file-medical me-2"></i>Reports delivered within 2-4 hours
      </p>
      <button class="btn btn-light btn-lg mt-3 px-5"
              data-bs-toggle="modal"
              data-bs-target="#scanFormModal">
        <i class="fas fa-calendar-check me-2"></i>Book a Scan
      </button>
    </div>
  </div>
</section>

<!-- BOOK SCAN MODAL -->
<div class="modal fade" id="scanFormModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4">
      <div class="modal-header">
        <h5 class="modal-title text-primary fw-bold">
          <i class="fas fa-calendar-plus me-2"></i>Book a Scan
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Phone Number</label>
              <input type="tel" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Scan Type</label>
              <select class="form-select" required>
                <option value="">Select</option>
                <option>X-Ray</option>
                <option>Ultrasound</option>
                <option>ECG</option>
                <option>CT Scan</option>
                <option>MRI Scan</option>
                <option>Blood Test</option>
                <option>Echo</option>
                <option>Mammography</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Preferred Date</label>
              <input type="date" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Preferred Time</label>
              <select class="form-select" required>
                <option value="">Select Time Slot</option>
                <option>8:00 AM - 10:00 AM</option>
                <option>10:00 AM - 12:00 PM</option>
                <option>12:00 PM - 2:00 PM</option>
                <option>2:00 PM - 4:00 PM</option>
                <option>4:00 PM - 6:00 PM</option>
                <option>6:00 PM - 8:00 PM</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label">Additional Notes</label>
              <textarea class="form-control" rows="3" placeholder="Any specific requirements or concerns..."></textarea>
            </div>
          </div>
          <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-5 btn-lg">
              <i class="fas fa-paper-plane me-2"></i>Submit Booking
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Page Specific JavaScript -->
<script>
// Service Data
const serviceData = {
  xray: {
    title: "X-Ray Services",
    body: `
      <div class="row g-3">
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Chest X-Ray</h6>
            <small class="text-muted d-block mb-2">Thoracic Imaging</small>
            <span class="badge bg-primary fs-6">LKR 5,000</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Hand / Leg X-Ray</h6>
            <small class="text-muted d-block mb-2">Orthopedic Scan</small>
            <span class="badge bg-success fs-6">LKR 4,000</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Spine X-Ray</h6>
            <small class="text-muted d-block mb-2">Spinal Alignment</small>
            <span class="badge bg-warning text-dark fs-6">LKR 8,000</span>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <h6 class="fw-bold">Key Features:</h6>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">• Low radiation digital imaging</li>
          <li class="list-group-item">• Instant digital results</li>
          <li class="list-group-item">• Expert radiologist review</li>
          <li class="list-group-item">• Pediatric & geriatric friendly</li>
        </ul>
      </div>`
  },
  ultrasound: {
    title: "Ultrasound Services",
    body: `
      <div class="row g-3">
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Abdomen Scan</h6>
            <span class="badge bg-primary fs-6">LKR 12,000</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Pregnancy Scan</h6>
            <span class="badge bg-success fs-6">LKR 15,000</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Pelvic Scan</h6>
            <span class="badge bg-warning text-dark fs-6">LKR 10,000</span>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <h6 class="fw-bold">Key Features:</h6>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">• Real-time imaging</li>
          <li class="list-group-item">• Doppler studies available</li>
          <li class="list-group-item">• Pregnancy monitoring</li>
          <li class="list-group-item">• Guided procedures</li>
        </ul>
      </div>`
  },
  ecg: {
    title: "ECG Services",
    body: `
      <div class="row g-3">
        <div class="col-md-6">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Resting ECG</h6>
            <span class="badge bg-primary fs-6">LKR 3,000</span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Stress ECG</h6>
            <span class="badge bg-success fs-6">LKR 7,000</span>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <h6 class="fw-bold">Key Features:</h6>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">• 12-lead ECG system</li>
          <li class="list-group-item">• Cardiologist review</li>
          <li class="list-group-item">• Same-day reports</li>
          <li class="list-group-item">• Holter monitoring available</li>
        </ul>
      </div>`
  },
  ct: {
    title: "CT Scan Services",
    body: `
      <div class="row g-3">
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Brain CT</h6>
            <span class="badge bg-primary fs-6">LKR 25,000</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Chest CT</h6>
            <span class="badge bg-success fs-6">LKR 30,000</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Abdomen CT</h6>
            <span class="badge bg-warning text-dark fs-6">LKR 35,000</span>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <h6 class="fw-bold">Key Features:</h6>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">• 64-slice technology</li>
          <li class="list-group-item">• 3D reconstruction</li>
          <li class="list-group-item">• Low radiation dose</li>
          <li class="list-group-item">• Contrast studies available</li>
        </ul>
      </div>`
  },
  mri: {
    title: "MRI Scan Services",
    body: `
      <div class="row g-3">
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Brain MRI</h6>
            <span class="badge bg-primary fs-6">LKR 50,000</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Spine MRI</h6>
            <span class="badge bg-success fs-6">LKR 60,000</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Joint MRI</h6>
            <span class="badge bg-warning text-dark fs-6">LKR 55,000</span>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <h6 class="fw-bold">Key Features:</h6>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">• 1.5 Tesla high-field MRI</li>
          <li class="list-group-item">• No radiation exposure</li>
          <li class="list-group-item">• Advanced software analysis</li>
          <li class="list-group-item">• Claustrophobia-friendly options</li>
        </ul>
      </div>`
  },
  blood: {
    title: "Blood Test Services",
    body: `
      <div class="row g-3">
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Complete Blood Count</h6>
            <span class="badge bg-primary fs-6">LKR 2,000</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Lipid Profile</h6>
            <span class="badge bg-success fs-6">LKR 5,000</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Liver Function Test</h6>
            <span class="badge bg-warning text-dark fs-6">LKR 6,000</span>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <h6 class="fw-bold">Key Features:</h6>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">• NABL accredited lab</li>
          <li class="list-group-item">• Same-day results</li>
          <li class="list-group-item">• Home collection available</li>
          <li class="list-group-item">• 200+ tests available</li>
        </ul>
      </div>`
  },
  echo: {
    title: "Echocardiography Services",
    body: `
      <div class="row g-3">
        <div class="col-md-6">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">2D Echo</h6>
            <span class="badge bg-primary fs-6">LKR 15,000</span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Color Doppler</h6>
            <span class="badge bg-success fs-6">LKR 20,000</span>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <h6 class="fw-bold">Key Features:</h6>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">• Advanced color Doppler</li>
          <li class="list-group-item">• Cardiologist supervision</li>
          <li class="list-group-item">• Valve function assessment</li>
          <li class="list-group-item">• Congenital heart disease evaluation</li>
        </ul>
      </div>`
  },
  mammo: {
    title: "Mammography Services",
    body: `
      <div class="row g-3">
        <div class="col-md-6">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">Digital Mammography</h6>
            <span class="badge bg-primary fs-6">LKR 20,000</span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="border rounded-4 p-3 text-center shadow-sm">
            <h6 class="fw-bold text-primary mb-1">3D Tomosynthesis</h6>
            <span class="badge bg-success fs-6">LKR 35,000</span>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <h6 class="fw-bold">Key Features:</h6>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">• Low-dose imaging</li>
          <li class="list-group-item">• Female technician available</li>
          <li class="list-group-item">• Expert radiologist review</li>
          <li class="list-group-item">• Breast cancer screening packages</li>
        </ul>
      </div>`
  }
};

// Initialize service modal functionality
document.querySelectorAll('.service-card').forEach(card => {
  card.addEventListener('click', () => {
    const serviceType = card.dataset.service;
    const data = serviceData[serviceType];
    if (data) {
      document.getElementById('serviceTitle').innerHTML = data.title;
      document.getElementById('serviceBody').innerHTML = data.body;
    }
  });
});

// Scroll animations
function checkScroll() {
  const fadeElements = document.querySelectorAll('.fade-in');
  fadeElements.forEach(element => {
    const elementTop = element.getBoundingClientRect().top;
    const elementVisible = 150;
    
    if (elementTop < window.innerHeight - elementVisible) {
      element.classList.add('visible');
    } else {
      element.classList.remove('visible');
    }
  });
}

// Initialize scroll animations
window.addEventListener('scroll', checkScroll);
window.addEventListener('load', checkScroll);

// Button click animations
document.querySelectorAll('.btn').forEach(button => {
  button.addEventListener('click', function(e) {
    // Create ripple effect
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
      animation: ripple-animation 0.6s linear;
      width: ${size}px;
      height: ${size}px;
      top: ${y}px;
      left: ${x}px;
    `;
    
    this.appendChild(ripple);
    setTimeout(() => ripple.remove(), 600);
  });
});

// Add custom ripple animation to style
const style = document.createElement('style');
style.textContent = `
  @keyframes ripple-animation {
    to {
      transform: scale(4);
      opacity: 0;
    }
  }
`;
document.head.appendChild(style);

// Modal open/close animations
const modals = document.querySelectorAll('.modal');
modals.forEach(modal => {
  modal.addEventListener('show.bs.modal', function() {
    this.querySelector('.modal-content').style.animation = 'modalSlideIn 0.3s ease-out';
  });
});

// Animate stats counter
function animateStats() {
  const statNumbers = document.querySelectorAll('.stat-number');
  statNumbers.forEach((stat, index) => {
    const target = parseInt(stat.textContent.replace(/[^0-9]/g, ''));
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        stat.textContent = stat.textContent.replace(/[0-9]+/g, target);
        clearInterval(timer);
      } else {
        stat.textContent = stat.textContent.replace(/[0-9]+/g, Math.floor(current));
      }
    }, 16);
  });
}

// Initialize AOS for this page with additional configurations
AOS.init({
  duration: 1000,
  once: true,
  offset: 100,
  delay: 100,
  easing: 'ease-in-out',
  mirror: false
});

// Trigger stats animation when page loads
window.addEventListener('load', () => {
  setTimeout(animateStats, 500);
});

// Add hover effect to service cards
document.querySelectorAll('.service-card').forEach(card => {
  card.addEventListener('mouseenter', function() {
    this.style.transform = 'translateY(-15px) scale(1.02)';
  });
  
  card.addEventListener('mouseleave', function() {
    this.style.transform = 'translateY(0) scale(1)';
  });
});
</script>

<?php
// Include footer
require_once 'footer.php';
?>