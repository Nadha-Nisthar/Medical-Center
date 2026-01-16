<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | CareWell Medical Center</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
:root {
  --primary: #0a3d62;
  --secondary: #1e90ff;
  --accent: #00cec9;
  --light: #f5f9fc;
  --success: #2ecc71;
  --warning: #f39c12;
  --danger: #e74c3c;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: var(--light);
  color: #333;
  padding-top: 80px;
}

/* =========== HERO SECTION =========== */
.home-hero {
  background: linear-gradient(135deg, rgba(10, 61, 98, 0.9), rgba(30, 144, 255, 0.9)),
              url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d') center/cover;
  color: white;
  padding: 120px 0 80px;
  border-radius: 0 0 40px 40px;
  margin-bottom: 60px;
  position: relative;
  overflow: hidden;
}

.home-hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E");
  opacity: 0.5;
}

.hero-content {
  position: relative;
  z-index: 2;
}

/* MAIN TITLE */
.main-title {
  color: var(--primary);
  font-weight: 800;
  position: relative;
  padding-bottom: 15px;
  margin-bottom: 40px;
}

.main-title::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100px;
  height: 4px;
  background: linear-gradient(90deg, var(--secondary), var(--accent));
  border-radius: 2px;
}

.main-title.center-title {
  text-align: center;
}

.main-title.center-title::after {
  left: 50%;
  transform: translateX(-50%);
}

/* SERVICE CARDS */
.service-card {
  background: white;
  border-radius: 20px;
  padding: 40px 30px;
  margin-bottom: 30px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
  transition: all 0.4s ease;
  border: 3px solid transparent;
  height: 100%;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
  border-color: var(--secondary);
}

.service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px;
  background: linear-gradient(90deg, var(--secondary), var(--accent));
}

.service-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, var(--secondary), var(--accent));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 25px;
  color: white;
  font-size: 32px;
  transition: all 0.3s ease;
}

.service-card:hover .service-icon {
  transform: scale(1.1) rotate(5deg);
}

/* FEATURE BOXES */
.feature-box {
  background: white;
  border-radius: 15px;
  padding: 25px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  border-left: 4px solid var(--secondary);
}

.feature-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.feature-icon {
  width: 60px;
  height: 60px;
  background: #eef5ff;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--primary);
  margin-bottom: 20px;
  font-size: 24px;
}

/* PROCESS STEPS SECTION */
.process-section {
  padding: 80px 0;
  background: linear-gradient(135deg, #f8fafd, #eef5ff);
}

.process-step-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  text-align: center;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
  transition: all 0.4s ease;
  border: 3px solid transparent;
  height: 100%;
  position: relative;
}

.process-step-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
  border-color: var(--secondary);
}

.process-step-number {
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, var(--secondary), var(--accent));
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  font-weight: 800;
  margin: 0 auto 25px;
  position: relative;
  z-index: 1;
}

.process-step-number::before {
  content: '';
  position: absolute;
  width: 70px;
  height: 70px;
  background: rgba(30, 144, 255, 0.1);
  border-radius: 50%;
  z-index: -1;
}

.process-step-image {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  object-fit: cover;
  margin: 0 auto 25px;
  border: 5px solid white;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.process-step-title {
  color: var(--primary);
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 20px;
}

/* STATS SECTION */
.stats-section {
  background: linear-gradient(135deg, var(--primary), #0a4a7a);
  color: white;
  border-radius: 20px;
  padding: 80px 30px;
  margin: 80px 0;
}

.stat-item {
  text-align: center;
  padding: 20px;
}

.stat-number {
  font-size: 48px;
  font-weight: 800;
  margin-bottom: 10px;
  line-height: 1;
}

.stat-label {
  font-size: 18px;
  opacity: 0.9;
}

/* DOCTOR PREVIEW */
.doctor-preview-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
  transition: all 0.4s ease;
  text-align: center;
  border: 3px solid transparent;
  height: 100%;
}

.doctor-preview-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
  border-color: var(--secondary);
}

.doctor-avatar {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  object-fit: cover;
  border: 5px solid white;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
  margin: 0 auto 20px;
  display: block;
}

/* PATIENT REVIEWS SECTION */
.reviews-section {
  padding: 80px 0;
  background: linear-gradient(135deg, #f8fafd, #eef5ff);
}

.review-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
  transition: all 0.4s ease;
  border: 2px solid transparent;
  height: 100%;
  position: relative;
}

.review-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
  border-color: var(--secondary);
}

.review-header {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.review-avatar {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 20px;
  border: 3px solid white;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.review-info h5 {
  margin-bottom: 5px;
  color: var(--primary);
}

.review-rating {
  color: #ffc107;
  font-size: 14px;
  margin-bottom: 5px;
}

.review-date {
  color: #888;
  font-size: 14px;
}

.review-content {
  color: #555;
  line-height: 1.6;
  margin-bottom: 15px;
  font-style: italic;
}

.review-treatment {
  background: #f8f9fa;
  padding: 10px 15px;
  border-radius: 10px;
  font-size: 14px;
  color: #666;
}

.review-treatment i {
  color: var(--primary);
  margin-right: 8px;
}
/* Additional CSS for horizontal layout 5 prosess */
.process-section .row.g-0.justify-content-center {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
}

@media (max-width: 992px) {
  .process-section .row.g-0.justify-content-center {
    flex-wrap: wrap;
  }
  .process-section .col-lg {
    flex: 0 0 50%;
    max-width: 50%;
    margin-bottom: 20px;
  }
}

@media (max-width: 768px) {
  .process-section .col-lg {
    flex: 0 0 100%;
    max-width: 100%;
  }
}
/* CTA SECTION */
.cta-section {
  background: linear-gradient(135deg, var(--primary), var(--secondary));
  color: white;
  padding: 80px 20px;
  border-radius: 40px;
  margin: 80px 0;
}

.cta-section h2 {
  color: white;
}

.cta-section .main-title::after {
  background: white;
}

/* EMERGENCY BANNER */
.emergency-banner {
  background: linear-gradient(135deg, #ff6b6b, #ff8e53);
  color: white;
  border-radius: 20px;
  padding: 30px;
  text-align: center;
  margin: 40px 0;
  box-shadow: 0 15px 35px rgba(255, 107, 107, 0.3);
  animation: pulse-emergency 2s infinite;
}

@keyframes pulse-emergency {
  0% { transform: scale(1); }
  50% { transform: scale(1.02); }
  100% { transform: scale(1); }
}

/* BUTTONS */
.btn-primary {
  background: linear-gradient(135deg, var(--secondary), var(--accent));
  border: none;
  border-radius: 10px;
  padding: 12px 30px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(30, 144, 255, 0.3);
}

.btn-outline-primary {
  border: 2px solid var(--secondary);
  color: var(--secondary);
  border-radius: 10px;
  padding: 12px 30px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-outline-primary:hover {
  background: var(--secondary);
  color: white;
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(30, 144, 255, 0.3);
}

/* RESPONSIVE DESIGN */
@media (max-width: 992px) {
  .home-hero {
    padding: 100px 0 60px;
  }
  
  .stats-section {
    padding: 60px 20px;
    margin: 60px 0;
  }
  
  .stat-number {
    font-size: 36px;
  }
  
  .process-section, .reviews-section {
    padding: 60px 0;
  }
}

@media (max-width: 768px) {
  body {
    padding-top: 70px;
  }
  
  .home-hero {
    padding: 80px 0 50px;
    border-radius: 0 0 30px 30px;
  }
  
  .service-card {
    padding: 30px 20px;
  }
  
  .cta-section {
    padding: 60px 20px;
    margin: 60px 0;
    border-radius: 30px;
  }
  
  .review-header {
    flex-direction: column;
    text-align: center;
  }
  
  .review-avatar {
    margin-right: 0;
    margin-bottom: 15px;
  }
  
  .process-step-image {
    width: 100px;
    height: 100px;
  }
}

/* ANIMATIONS */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.fade-in {
  animation: fadeIn 0.5s ease forwards;
}
</style>
</head>
<body>

<!-- HERO SECTION -->
<section class="home-hero">
  <div class="container hero-content">
    <div class="row align-items-center">
      <div class="col-lg-7" data-aos="fade-right">
        <h1 class="display-4 fw-bold mb-4">Premium Healthcare Services at CareWell</h1>
        <p class="lead mb-4">Comprehensive medical care with advanced technology, expert specialists, and compassionate service available 24/7.</p>
        <div class="d-flex flex-wrap gap-3">
          <a href="doctor.php" class="btn btn-light btn-lg px-4">
            <i class="fas fa-user-md me-2"></i> Meet Our Doctors
          </a>
          <a href="opd.php" class="btn btn-outline-light btn-lg px-4">
            <i class="fas fa-clock me-2"></i> 24/7 OPD
          </a>
          <a href="tel:+94771234567" class="btn btn-light btn-lg px-4">
            <i class="fas fa-phone me-2"></i> Emergency
          </a>
        </div>
      </div>
      <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
        <div class="bg-white rounded-4 p-4 text-center">
          <h4 class="text-primary mb-3"><i class="fas fa-clock me-2"></i> Today's Hours</h4>
          <div class="text-start">
            <p class="mb-2"><strong>OPD:</strong> 24/7 Open</p>
            <p class="mb-2"><strong>Laboratory:</strong> 8:00 AM - 8:00 PM</p>
            <p class="mb-2"><strong>Scanning:</strong> 8:00 AM - 8:00 PM</p>
            <p class="mb-0"><strong>Consultation:</strong> By Appointment</p>
          </div>
          <hr>
          <p class="mb-0 text-muted small">
            <i class="fas fa-info-circle me-1"></i>
            Emergency services available round the clock
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES SECTION -->
<section class="py-5">
  <div class="container">
    <h2 class="main-title center-title" data-aos="fade-up">Our Services</h2>
    <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
      Comprehensive healthcare solutions under one roof
    </p>
    
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="zoom-in">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-user-md"></i>
          </div>
          <h4 class="mb-3">Expert Doctors</h4>
          <p class="text-muted mb-4">12+ specialists across multiple disciplines with extensive experience and advanced qualifications.</p>
          <a href="doctor.php" class="btn btn-primary">
            <i class="fas fa-arrow-right me-2"></i> View All Doctors
          </a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-clock"></i>
          </div>
          <h4 class="mb-3">24/7 OPD</h4>
          <p class="text-muted mb-4">Round-the-clock outpatient services with dedicated doctors on rotation for emergency and routine care.</p>
          <a href="opd.php" class="btn btn-primary">
            <i class="fas fa-arrow-right me-2"></i> View Schedule
          </a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-flask"></i>
          </div>
          <h4 class="mb-3">Laboratory</h4>
          <p class="text-muted mb-4">Advanced diagnostic testing with state-of-the-art equipment and rapid result delivery for accurate diagnosis.</p>
          <a href="lab.php" class="btn btn-primary">
            <i class="fas fa-arrow-right me-2"></i> View Tests
          </a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-x-ray"></i>
          </div>
          <h4 class="mb-3">Scanning Services</h4>
          <p class="text-muted mb-4">Advanced imaging services including ultrasound, X-ray, and other diagnostic scanning procedures.</p>
          <a href="scanning.php" class="btn btn-primary">
            <i class="fas fa-arrow-right me-2"></i> Learn More
          </a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-ambulance"></i>
          </div>
          <h4 class="mb-3">Emergency Care</h4>
          <p class="text-muted mb-4">24/7 emergency services with rapid response teams and fully equipped emergency treatment facilities.</p>
          <a href="tel:+94771234567" class="btn btn-primary">
            <i class="fas fa-phone me-2"></i> Call Now
          </a>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <h4 class="mb-3">Appointments</h4>
          <p class="text-muted mb-4">Easy online booking system for consultations with specialists and diagnostic services.</p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appointmentModal">
            <i class="fas fa-calendar-plus me-2"></i> Book Now
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURED DOCTORS -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="main-title center-title" data-aos="fade-up">Meet Our Specialists</h2>
    <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
      Highly qualified medical professionals dedicated to your health
    </p>
    
    <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="zoom-in">
        <div class="doctor-preview-card">
          <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2" class="doctor-avatar" alt="Dr. A. Rahman">
          <h5 class="mb-2">Dr. A. Rahman</h5>
          <p class="text-primary mb-2">Senior General Physician</p>
          <p class="text-muted small mb-3">MBBS (Colombo), MD (Medicine), MRCP (UK)</p>
          <span class="badge bg-primary mb-3">18+ Years Experience</span>
          <a href="doctor.php" class="btn btn-outline-primary btn-sm">View Profile</a>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="doctor-preview-card">
          <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d" class="doctor-avatar" alt="Dr. S. Fernando">
          <h5 class="mb-2">Dr. S. Fernando</h5>
          <p class="text-primary mb-2">Cardiologist</p>
          <p class="text-muted small mb-3">MBBS, MD (Cardiology), FRCP (London)</p>
          <span class="badge bg-primary mb-3">15+ Years Experience</span>
          <a href="doctor.php" class="btn btn-outline-primary btn-sm">View Profile</a>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="doctor-preview-card">
          <img src="https://images.unsplash.com/photo-1591608971362-f08b2a75731a" class="doctor-avatar" alt="Dr. R. Perera">
          <h5 class="mb-2">Dr. R. Perera</h5>
          <p class="text-primary mb-2">Pediatrician</p>
          <p class="text-muted small mb-3">MBBS, DCH, MD (Pediatrics)</p>
          <span class="badge bg-primary mb-3">12+ Years Experience</span>
          <a href="doctor.php" class="btn btn-outline-primary btn-sm">View Profile</a>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="doctor-preview-card">
          <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d" class="doctor-avatar" alt="Dr. M. Silva">
          <h5 class="mb-2">Dr. M. Silva</h5>
          <p class="text-primary mb-2">Orthopedic Surgeon</p>
          <p class="text-muted small mb-3">MBBS, MS (Ortho), FRCS (Edin)</p>
          <span class="badge bg-primary mb-3">20+ Years Experience</span>
          <a href="doctor.php" class="btn btn-outline-primary btn-sm">View Profile</a>
        </div>
      </div>
    </div>
    
    <div class="text-center mt-5" data-aos="fade-up">
      <a href="doctor.php" class="btn btn-primary btn-lg">
        <i class="fas fa-user-md me-2"></i> View All Doctors
      </a>
    </div>
  </div>
</section>

<!-- STATS SECTION -->
<section class="stats-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-6" data-aos="fade-up">
        <div class="stat-item">
          <div class="stat-number">12+</div>
          <div class="stat-label">Specialists</div>
        </div>
      </div>
      <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
        <div class="stat-item">
          <div class="stat-number">24/7</div>
          <div class="stat-label">OPD Hours</div>
        </div>
      </div>
      <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
        <div class="stat-item">
          <div class="stat-number">50k+</div>
          <div class="stat-label">Patients Treated</div>
        </div>
      </div>
      <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
        <div class="stat-item">
          <div class="stat-number">15 Min</div>
          <div class="stat-label">Emergency Response</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KEY FEATURES -->
<section class="py-5">
  <div class="container">
    <h2 class="main-title center-title" data-aos="fade-up">Why Choose CareWell</h2>
    
    <div class="row g-4 mt-4">
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="fas fa-clock"></i>
          </div>
          <h5>24/7 Availability</h5>
          <p class="text-muted mb-0">Round-the-clock medical services with doctors always on duty.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="fas fa-user-md"></i>
          </div>
          <h5>Expert Specialists</h5>
          <p class="text-muted mb-0">Highly qualified doctors across multiple specialties.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="fas fa-microscope"></i>
          </div>
          <h5>Advanced Technology</h5>
          <p class="text-muted mb-0">State-of-the-art diagnostic and treatment equipment.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="fas fa-heart"></i>
          </div>
          <h5>Compassionate Care</h5>
          <p class="text-muted mb-0">Patient-centered approach with personalized attention.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HOW IT HELPS YOU STAY STRONG - SIMPLE PROCESS -->
<section class="process-section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <h2 class="main-title center-title" data-aos="fade-up">How It Helps You Stay Strong</h2>
        <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
          A Simple 5-Step Process to Better Health
        </p>
        
        <!-- Process Steps in One Straight Line -->
        <div class="row g-0 g-md-3 justify-content-center">
          <!-- Step 1: Contact Us -->
          <div class="col-12 col-sm-6 col-md-4 col-lg" data-aos="zoom-in">
            <div class="process-step-card h-100 mx-2 mx-md-0">
              <div class="text-center mb-4">
                <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54" 
                     class="process-step-image" 
                     alt="Contact Us"
                     style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%; border: 4px solid var(--light); box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
              </div>
              <h4 class="process-step-title text-center">Contact Us</h4>
              <p class="text-muted mb-0 text-center">Reach out through phone, online form, or walk-in for initial consultation.</p>
            </div>
          </div>
          
          <!-- Step 2: Make Appointment -->
          <div class="col-12 col-sm-6 col-md-4 col-lg" data-aos="zoom-in" data-aos-delay="100">
            <div class="process-step-card h-100 mx-2 mx-md-0">
              <div class="text-center mb-4">
                <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d" 
                     class="process-step-image" 
                     alt="Make Appointment"
                     style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%; border: 4px solid var(--light); box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
              </div>
              <h4 class="process-step-title text-center">Make Appointment</h4>
              <p class="text-muted mb-0 text-center">Schedule your visit at a convenient time through our easy booking system.</p>
            </div>
          </div>
          
          <!-- Step 3: Select Specialist -->
          <div class="col-12 col-sm-6 col-md-4 col-lg" data-aos="zoom-in" data-aos-delay="200">
            <div class="process-step-card h-100 mx-2 mx-md-0">
              <div class="text-center mb-4">
                <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2" 
                     class="process-step-image" 
                     alt="Select Specialist"
                     style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%; border: 4px solid var(--light); box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
              </div>
              <h4 class="process-step-title text-center">Select Specialist</h4>
              <p class="text-muted mb-0 text-center">Choose from our team of expert doctors specialized in your health needs.</p>
            </div>
          </div>
          
          <!-- Step 4: Expert Advice -->
          <div class="col-12 col-sm-6 col-md-4 col-lg" data-aos="zoom-in" data-aos-delay="300">
            <div class="process-step-card h-100 mx-2 mx-md-0">
              <div class="text-center mb-4">
                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118" 
                     class="process-step-image" 
                     alt="Expert Advice"
                     style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%; border: 4px solid var(--light); box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
              </div>
              <h4 class="process-step-title text-center">Expert Advice</h4>
              <p class="text-muted mb-0 text-center">Receive personalized medical consultation and thorough examination.</p>
            </div>
          </div>
          
          <!-- Step 5: Get Cure & Relief -->
          <div class="col-12 col-sm-6 col-md-4 col-lg" data-aos="zoom-in" data-aos-delay="400">
            <div class="process-step-card h-100 mx-2 mx-md-0">
              <div class="text-center mb-4">
                <img src="https://images.unsplash.com/photo-1584467735871-8db9ac8d0916" 
                     class="process-step-image" 
                     alt="Get Cure & Relief"
                     style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%; border: 4px solid var(--light); box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
              </div>
              <h4 class="process-step-title text-center">Get Cure & Relief</h4>
              <p class="text-muted mb-0 text-center">Follow treatment plan for complete recovery and lasting health improvement.</p>
            </div>
          </div>
        </div>
        
        <!-- Horizontal Process Flow (For Desktop) -->
        <div class="row mt-5">
          <div class="col-12">
            <div class="text-center" data-aos="fade-up">
              <div class="d-none d-lg-flex justify-content-between align-items-center position-relative px-5" style="height: 60px;">
                <!-- Connecting Line -->
                <div class="position-absolute top-50 start-0 end-0" style="height: 3px; background: linear-gradient(90deg, var(--secondary), var(--accent)); z-index: 0; margin-top: -1.5px;"></div>
                
                <!-- Step Dots -->
                <div class="position-relative z-1">
                  <div class="bg-primary rounded-circle" style="width: 20px; height: 20px;"></div>
                </div>
                <div class="position-relative z-1">
                  <div class="bg-primary rounded-circle" style="width: 20px; height: 20px;"></div>
                </div>
                <div class="position-relative z-1">
                  <div class="bg-primary rounded-circle" style="width: 20px; height: 20px;"></div>
                </div>
                <div class="position-relative z-1">
                  <div class="bg-primary rounded-circle" style="width: 20px; height: 20px;"></div>
                </div>
                <div class="position-relative z-1">
                  <div class="bg-primary rounded-circle" style="width: 20px; height: 20px;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
     
<!-- EMERGENCY BANNER -->
<div class="container">
  <div class="emergency-banner" data-aos="zoom-in">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h3 class="fw-bold mb-2"><i class="fas fa-first-aid me-3"></i> Medical Emergency?</h3>
        <p class="mb-0">Immediate medical attention available 24 hours a day, 7 days a week.</p>
      </div>
      <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
        <a href="tel:+94771234567" class="btn btn-light btn-lg">
          <i class="fas fa-phone me-2"></i> Call 077 123 4567
        </a>
      </div>
    </div>
  </div>
</div>

<!-- PATIENT REVIEWS SECTION -->
<section class="reviews-section">
  <div class="container">
    <h2 class="main-title center-title" data-aos="fade-up">What Our Patients Say</h2>
    <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
      Trusted by thousands of patients for quality healthcare
    </p>
    
    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="zoom-in">
        <div class="review-card">
          <div class="review-header">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d" class="review-avatar" alt="Patient">
            <div class="review-info">
              <h5 class="mb-1">Rohan Perera</h5>
              <div class="review-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="ms-2">5.0</span>
              </div>
              <div class="review-date">2 days ago</div>
            </div>
          </div>
          <div class="review-content">
            "Exceptional service! Dr. Rahman diagnosed my condition accurately and provided effective treatment. The 24/7 OPD is a lifesaver for emergencies."
          </div>
          <div class="review-treatment">
            <i class="fas fa-user-md"></i> Treated by: Dr. A. Rahman • General Consultation
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="review-card">
          <div class="review-header">
            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786" class="review-avatar" alt="Patient">
            <div class="review-info">
              <h5 class="mb-1">Priya Fernando</h5>
              <div class="review-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-2">4.5</span>
              </div>
              <div class="review-date">1 week ago</div>
            </div>
          </div>
          <div class="review-content">
            "The laboratory services are excellent. Got my test results within 2 hours. The staff is very professional and the facility is clean and modern."
          </div>
          <div class="review-treatment">
            <i class="fas fa-flask"></i> Laboratory Tests • Blood Work
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="review-card">
          <div class="review-header">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e" class="review-avatar" alt="Patient">
            <div class="review-info">
              <h5 class="mb-1">Sanjaya Bandara</h5>
              <div class="review-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="ms-2">5.0</span>
              </div>
              <div class="review-date">3 weeks ago</div>
            </div>
          </div>
          <div class="review-content">
            "Emergency service at night was outstanding. The doctor on duty handled my father's situation with expertise and care. Highly recommended!"
          </div>
          <div class="review-treatment">
            <i class="fas fa-ambulance"></i> Emergency Care • Night Shift
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="review-card">
          <div class="review-header">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80" class="review-avatar" alt="Patient">
            <div class="review-info">
              <h5 class="mb-1">Nimali Silva</h5>
              <div class="review-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="ms-2">5.0</span>
              </div>
              <div class="review-date">1 month ago</div>
            </div>
          </div>
          <div class="review-content">
            "Dr. Perera is an excellent pediatrician. My child feels comfortable with him. The appointment system is convenient and waiting time is minimal."
          </div>
          <div class="review-treatment">
            <i class="fas fa-user-md"></i> Treated by: Dr. R. Perera • Pediatric Consultation
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="review-card">
          <div class="review-header">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" class="review-avatar" alt="Patient">
            <div class="review-info">
              <h5 class="mb-1">Kamal De Silva</h5>
              <div class="review-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-2">4.5</span>
              </div>
              <div class="review-date">2 months ago</div>
            </div>
          </div>
          <div class="review-content">
            "The scanning department is very efficient. Ultrasound was done professionally and the report was detailed. Reasonable prices compared to other places."
          </div>
          <div class="review-treatment">
            <i class="fas fa-x-ray"></i> Scanning Services • Ultrasound
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
        <div class="review-card">
          <div class="review-header">
            <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e" class="review-avatar" alt="Patient">
            <div class="review-info">
              <h5 class="mb-1">Anusha Rathnayake</h5>
              <div class="review-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="ms-2">5.0</span>
              </div>
              <div class="review-date">3 months ago</div>
            </div>
          </div>
          <div class="review-content">
            "Cardiology consultation with Dr. Fernando was thorough. He explained everything clearly and the follow-up care has been excellent. Top-notch facility!"
          </div>
          <div class="review-treatment">
            <i class="fas fa-heartbeat"></i> Treated by: Dr. S. Fernando • Cardiology
          </div>
        </div>
      </div>
    </div>
    
    <!-- Reviews Summary -->
    <div class="row mt-5">
      <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded-4 p-4 text-center" data-aos="fade-up">
          <h4 class="text-primary mb-3">Overall Patient Satisfaction</h4>
          <div class="row">
            <div class="col-md-4">
              <div class="display-4 fw-bold text-primary">4.8</div>
              <div class="review-rating mb-2 justify-content-center">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <p class="small mb-0">Average Rating</p>
            </div>
            <div class="col-md-4">
              <div class="display-4 fw-bold text-primary">2,450+</div>
              <p class="small mb-0">Patient Reviews</p>
            </div>
            <div class="col-md-4">
              <div class="display-4 fw-bold text-primary">98%</div>
              <p class="small mb-0">Would Recommend</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
  <div class="container text-center">
    <h2 class="main-title center-title" data-aos="fade-up">Ready to Get Started?</h2>
    <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
      Book an appointment or walk in for immediate care. Your health is our priority.
    </p>
    <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
      <button type="button" class="btn btn-light btn-lg px-5" data-bs-toggle="modal" data-bs-target="#appointmentModal" data-aos="zoom-in">
        <i class="fas fa-calendar-check me-2"></i> Book Appointment
      </button>
      <a href="opd.php" class="btn btn-outline-light btn-lg px-5" data-aos="zoom-in" data-aos-delay="150">
        <i class="fas fa-clock me-2"></i> View OPD Schedule
      </a>
      <a href="contact.php" class="btn btn-light btn-lg px-5" data-aos="zoom-in" data-aos-delay="300">
        <i class="fas fa-directions me-2"></i> Get Directions
      </a>
    </div>
  </div>
</section>

<!-- APPOINTMENT MODAL (Similar to doctor.php) -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"><i class="fas fa-calendar-check me-2"></i> Book Appointment</h3>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="appointmentForm">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="patientName" class="form-label">Full Name *</label>
              <input type="text" class="form-control" id="patientName" required>
            </div>
            <div class="col-md-6">
              <label for="patientNIC" class="form-label">NIC Number *</label>
              <input type="text" class="form-control" id="patientNIC" required>
            </div>
            
            <div class="col-md-6">
              <label for="patientPhone" class="form-label">Phone Number *</label>
              <input type="tel" class="form-control" id="patientPhone" required>
            </div>
            <div class="col-md-6">
              <label for="patientEmail" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="patientEmail">
            </div>
            
            <div class="col-md-6">
              <label for="appointmentType" class="form-label">Appointment Type *</label>
              <select class="form-select" id="appointmentType" required>
                <option value="" selected disabled>Select type</option>
                <option value="consultation">Doctor Consultation</option>
                <option value="lab">Laboratory Test</option>
                <option value="scanning">Scanning Service</option>
                <option value="followup">Follow-up Visit</option>
              </select>
            </div>
            
            <div class="col-md-6">
              <label for="preferredDate" class="form-label">Preferred Date *</label>
              <input type="date" class="form-control" id="preferredDate" required min="<?php echo date('Y-m-d'); ?>">
            </div>
            
            <div class="col-12">
              <label for="appointmentNotes" class="form-label">Medical Notes (Optional)</label>
              <textarea class="form-control" id="appointmentNotes" rows="3" placeholder="Brief description of symptoms or concerns..."></textarea>
            </div>
            
            <div class="col-12 mt-4">
              <button type="submit" class="btn btn-primary btn-lg w-100">
                <i class="fas fa-paper-plane me-2"></i> Submit Appointment Request
              </button>
              <p class="text-muted mt-3 small">
                <i class="fas fa-info-circle me-1"></i> We will contact you within 2 hours to confirm your appointment.
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
// Initialize AOS
AOS.init({duration: 1000, once: true});

// Set minimum date for appointment
document.getElementById('preferredDate').min = new Date().toISOString().split('T')[0];

// Handle appointment form submission
document.getElementById('appointmentForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  // Basic validation
  const phone = document.getElementById('patientPhone').value;
  const phoneRegex = /^[0-9]{10}$/;
  
  if (!phoneRegex.test(phone)) {
    alert('Please enter a valid 10-digit phone number');
    return;
  }
  
  // Show success message
  alert('Appointment request submitted successfully! We will contact you shortly to confirm.');
  
  // Close modal
  const modal = bootstrap.Modal.getInstance(document.getElementById('appointmentModal'));
  modal.hide();
  
  // Reset form
  this.reset();
  document.getElementById('preferredDate').value = new Date().toISOString().split('T')[0];
});
</script>

</body>
</html>
<?php include 'footer.php'; ?>