<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OPD Services | CareWell Medical Center</title>

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
  --day-shift: #3498db;
  --night-shift: #2c3e50;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: var(--light);
  color: #333;
  padding-top: 80px;
}

/* =========== OPD HERO SECTION =========== */
.opd-hero {
  background: linear-gradient(135deg, rgba(10, 61, 98, 0.9), rgba(30, 144, 255, 0.9)),
              url('https://images.unsplash.com/photo-1586773860418-dc22f8b874bc') center/cover;
  color: white;
  padding: 120px 0 80px;
  border-radius: 0 0 40px 40px;
  margin-bottom: 60px;
  position: relative;
  overflow: hidden;
}

.opd-hero::before {
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

.opd-hero h1 {
  font-size: 3.5rem;
  text-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
  margin-bottom: 20px;
  line-height: 1.2;
}

.opd-hero h1 span {
  color: #00cec9;
  display: block;
  font-size: 2.5rem;
  margin-top: 10px;
}

.rotation-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
  border: none;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
  background: rgba(255, 255, 255, 0.95);
}

.rotation-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 30px 50px rgba(0, 0, 0, 0.2);
}

.rotation-card h5 {
  color: var(--primary);
  font-weight: 700;
  border-bottom: 3px solid var(--accent);
  padding-bottom: 15px;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
}

.rotation-card ul li {
  padding: 10px 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  display: flex;
  align-items: center;
  transition: all 0.3s ease;
}

.rotation-card ul li:last-child {
  border-bottom: none;
}

.rotation-card ul li:hover {
  transform: translateX(5px);
  color: var(--primary);
}

.rotation-card ul li i {
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  margin-right: 12px;
  font-size: 14px;
}

.rotation-card ul li .fa-sun {
  background: rgba(255, 193, 7, 0.1);
}

.rotation-card ul li .fa-moon {
  background: rgba(10, 61, 98, 0.1);
}

.rotation-card ul li .fa-user-md {
  background: rgba(40, 167, 69, 0.1);
}

.rotation-card ul li .fa-users {
  background: rgba(23, 162, 184, 0.1);
}

/* Hero stats */
.hero-stats {
  display: flex;
  gap: 20px;
  margin-top: 30px;
  flex-wrap: wrap;
}

.stat-item {
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(10px);
  border-radius: 15px;
  padding: 15px 25px;
  display: flex;
  align-items: center;
  border: 1px solid rgba(255, 255, 255, 0.2);
  transition: all 0.3s ease;
}

.stat-item:hover {
  background: rgba(255, 255, 255, 0.25);
  transform: translateY(-3px);
}

.stat-item i {
  font-size: 24px;
  margin-right: 15px;
  opacity: 0.9;
}

.stat-item .stat-number {
  font-size: 28px;
  font-weight: 700;
  display: block;
  line-height: 1;
  margin-bottom: 5px;
}

.stat-item .stat-label {
  font-size: 14px;
  opacity: 0.9;
}

/* 24/7 BADGE */
.badge-24-7 {
  background: linear-gradient(45deg, #ff6b6b, #ff8e53);
  color: white;
  padding: 10px 25px;
  border-radius: 50px;
  font-weight: 700;
  font-size: 18px;
  display: inline-block;
  margin-bottom: 20px;
  box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
  animation: pulse-badge 2s infinite;
}

@keyframes pulse-badge {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); }
  100% { transform: scale(1); }
}

/* MAIN TITLE */
.main-title {
  color: var(--primary);
  font-weight: 800;
  position: relative;
  padding-bottom: 15px;
  margin-bottom: 40px;
  text-align: center;
}

.main-title::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 4px;
  background: linear-gradient(90deg, var(--secondary), var(--accent));
  border-radius: 2px;
}

/* SHIFT SYSTEM */
.shift-system {
  margin-bottom: 80px;
}

.shift-card {
  background: white;
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  margin-bottom: 30px;
  border-top: 5px solid transparent;
  transition: all 0.4s ease;
  height: 100%;
}

.shift-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.shift-card.day-shift {
  border-top-color: var(--day-shift);
}

.shift-card.night-shift {
  border-top-color: var(--night-shift);
  background: linear-gradient(145deg, #ffffff, #f8f9fa);
}

.shift-header {
  display: flex;
  align-items: center;
  margin-bottom: 30px;
}

.shift-icon {
  width: 80px;
  height: 80px;
  border-radius: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 25px;
  font-size: 32px;
  flex-shrink: 0;
}

.shift-icon.day {
  background: linear-gradient(135deg, var(--day-shift), #5dade2);
  color: white;
}

.shift-icon.night {
  background: linear-gradient(135deg, var(--night-shift), #566573);
  color: white;
}

.shift-title {
  font-size: 28px;
  font-weight: 700;
  margin: 0;
  color: var(--primary);
}

.shift-time {
  font-size: 18px;
  color: #666;
  margin-top: 5px;
}

/* DOCTOR PROFILE LARGE */
.doctor-profile-large {
  background: white;
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
  text-align: center;
  border: 3px solid transparent;
  height: 100%;
}

.doctor-profile-large:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
  border-color: var(--secondary);
}

.doctor-avatar-large {
  width: 180px;
  height: 180px;
  border-radius: 50%;
  object-fit: cover;
  border: 6px solid white;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
  margin: 0 auto 25px;
  display: block;
}

.doctor-name-large {
  font-size: 28px;
  font-weight: 800;
  color: var(--primary);
  margin-bottom: 10px;
}

.doctor-specialty-large {
  color: var(--secondary);
  font-weight: 600;
  margin-bottom: 15px;
  font-size: 18px;
}

.doctor-experience-large {
  display: inline-block;
  background: linear-gradient(135deg, #e8f4fc, #d6e4ff);
  color: var(--primary);
  padding: 10px 25px;
  border-radius: 25px;
  font-size: 16px;
  font-weight: 700;
  margin: 15px 0;
}

.shift-badge-large {
  display: inline-block;
  padding: 10px 25px;
  border-radius: 25px;
  font-size: 16px;
  font-weight: 700;
  margin-top: 15px;
}

.shift-badge-large.day {
  background: rgba(52, 152, 219, 0.15);
  color: var(--day-shift);
  border: 2px solid rgba(52, 152, 219, 0.3);
}

.shift-badge-large.night {
  background: rgba(44, 62, 80, 0.15);
  color: var(--night-shift);
  border: 2px solid rgba(44, 62, 80, 0.3);
}

/* WEEKLY SCHEDULE */
.weekly-schedule {
  margin-bottom: 60px;
}

.schedule-card {
  background: white;
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  margin-bottom: 40px;
}

.day-card {
  background: #f8fafd;
  border-radius: 15px;
  padding: 25px;
  margin-bottom: 20px;
  transition: all 0.3s ease;
  border-left: 4px solid var(--secondary);
}

.day-card:hover {
  transform: translateX(10px);
  background: white;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.day-card.today {
  border-left-color: #ff6b6b;
  background: linear-gradient(145deg, #fff5f5, #ffe8e8);
}

.day-header {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.day-icon {
  width: 60px;
  height: 60px;
  background: var(--primary);
  color: white;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  margin-right: 20px;
  flex-shrink: 0;
}

.day-title {
  font-size: 22px;
  font-weight: 700;
  color: var(--primary);
  margin: 0;
}

/* DOCTOR CARD */
.doctor-card {
  background: white;
  border-radius: 15px;
  padding: 25px;
  margin-bottom: 20px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  border: 2px solid #eef5ff;
  text-align: center;
}

.doctor-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
  border-color: var(--secondary);
}

.doctor-avatar {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  object-fit: cover;
  border: 4px solid white;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  margin: 0 auto 15px;
  display: block;
}

.doctor-name {
  font-size: 20px;
  font-weight: 700;
  color: var(--primary);
  margin-bottom: 8px;
}

.doctor-specialty {
  color: var(--secondary);
  font-weight: 600;
  margin-bottom: 8px;
  font-size: 16px;
}

.doctor-experience {
  display: inline-block;
  background: linear-gradient(135deg, #e8f4fc, #d6e4ff);
  color: var(--primary);
  padding: 6px 18px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 600;
  margin: 10px 0;
}

/* PROCESS STEPS */
.process-step {
  text-align: center;
  padding: 40px 20px;
  background: white;
  border-radius: 20px;
  position: relative;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  height: 100%;
}

.process-step:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.step-number {
  width: 50px;
  height: 50px;
  background: var(--primary);
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  font-weight: bold;
  margin: 0 auto 25px;
}

.info-icon-circle {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, #eef5ff, #d6e4ff);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
  color: var(--primary);
  font-size: 28px;
}

/* INFO BANNER */
.info-banner {
  background: linear-gradient(135deg, var(--primary), #0a4a7a);
  color: white;
  border-radius: 20px;
  padding: 40px;
  margin: 60px 0;
  position: relative;
  overflow: hidden;
}

.info-banner::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
  background-size: 20px 20px;
  opacity: 0.1;
}

/* EMERGENCY INFO */
.emergency-info {
  background: linear-gradient(135deg, #ff6b6b, #ff8e53);
  color: white;
  border-radius: 20px;
  padding: 40px;
  text-align: center;
  box-shadow: 0 15px 35px rgba(255, 107, 107, 0.3);
  margin-bottom: 40px;
}

/* =========== RESPONSIVE DESIGN =========== */
@media (max-width: 992px) {
  .opd-hero {
    padding: 100px 0 60px;
  }
  
  .opd-hero h1 {
    font-size: 2.8rem;
  }
  
  .opd-hero h1 span {
    font-size: 2rem;
  }
  
  .hero-stats {
    flex-direction: column;
    gap: 15px;
  }
  
  .shift-header {
    flex-direction: column;
    text-align: center;
  }
  
  .shift-icon {
    margin-right: 0;
    margin-bottom: 15px;
  }
}

@media (max-width: 768px) {
  body {
    padding-top: 70px;
  }
  
  .opd-hero {
    padding: 80px 0 50px;
    border-radius: 0 0 30px 30px;
  }
  
  .opd-hero h1 {
    font-size: 2.2rem;
  }
  
  .opd-hero h1 span {
    font-size: 1.6rem;
  }
  
  .rotation-card {
    margin-top: 30px;
  }
  
  .day-header {
    flex-direction: column;
    text-align: center;
  }
  
  .day-icon {
    margin-right: 0;
    margin-bottom: 15px;
  }
  
  .doctor-profile-large {
    padding: 25px;
  }
  
  .doctor-avatar-large {
    width: 140px;
    height: 140px;
  }
  
  .shift-card {
    padding: 25px;
  }
}
</style>
</head>
<body>

<!-- HERO SECTION -->
<section class="opd-hero">
  <div class="container hero-content">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h1 class="display-4 fw-bold mb-4" data-aos="fade-right">
          24-Hour OPD Services
          <span>Always Here When You Need Us</span>
        </h1>
        
        <p class="lead mb-4" data-aos="fade-right" data-aos-delay="100">
          Emergency and routine care available round the clock with our dedicated medical team.
          No appointment needed for emergencies.
        </p>
        
        <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-item">
            <i class="fas fa-clock text-warning"></i>
            <div>
              <span class="stat-number">24/7</span>
              <span class="stat-label">Hours Open</span>
            </div>
          </div>
          <div class="stat-item">
            <i class="fas fa-ambulance text-danger"></i>
            <div>
              <span class="stat-number">15 Min</span>
              <span class="stat-label">Response Time</span>
            </div>
          </div>
          <div class="stat-item">
            <i class="fas fa-stethoscope text-success"></i>
            <div>
              <span class="stat-number">10+</span>
              <span class="stat-label">Specialties</span>
            </div> 
          </div>
        </div>
      </div>
      
      <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
        <div class="rotation-card">
          <h5 class="text-primary mb-3">
            <i class="fas fa-calendar-alt me-2"></i> Rotation System
          </h5>
          <ul class="list-unstyled">
            <li class="mb-3 pb-2">
              <i class="fas fa-sun text-warning me-2"></i>
              <div>
                <strong class="d-block">Day Shift</strong>
                <span class="text-muted small">8:00 AM - 7:00 PM</span>
              </div>
            </li>
            <li class="mb-3 pb-2">
              <i class="fas fa-moon text-primary me-2"></i>
              <div>
                <strong class="d-block">Night Shift</strong>
                <span class="text-muted small">7:00 PM - 8:00 AM</span>
              </div>
            </li>
            <li class="mb-3 pb-2">
              <i class="fas fa-user-md text-success me-2"></i>
              <div>
                <strong class="d-block">Per Shift</strong>
                <span class="text-muted small">1 Doctor</span>
              </div>
            </li>
            <li>
              <i class="fas fa-users text-info me-2"></i>
              <div>
                <strong class="d-block">Daily Total</strong>
                <span class="text-muted small">2 Doctors Working</span>
              </div>
            </li>
          </ul>
          <div class="mt-4 pt-3 border-top text-center">
            <small class="text-muted">
              <i class="fas fa-info-circle me-1"></i>
              Emergency doctors available at all times
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAIN CONTENT -->
<div class="container">
  
  <!-- CURRENT STATUS ALERT -->
  <div class="text-center mt-4 mb-5">
    <div class="alert alert-success alert-dismissible fade show" role="alert" data-aos="fade-up">
      <h4 class="alert-heading"><i class="fas fa-user-md me-2"></i> Current Status - <?php echo date('l'); ?></h4>
      <p class="mb-1"><strong>Current Time:</strong> <span id="currentTimeDisplay"><?php echo date('H:i'); ?></span></p>
      <p class="mb-1"><strong>Active Shift:</strong> <span id="currentShiftDisplay">Loading...</span></p>
      <p class="mb-1"><strong>Doctor On Duty:</strong> <span id="currentDoctorDisplay">Loading...</span></p>
      <p class="mb-0"><strong>Next Shift Doctor:</strong> <span id="nextDoctorDisplay">Loading...</span></p>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
  
  <!-- TODAY'S DOCTORS -->
  <section class="shift-system">
    <h2 class="main-title" data-aos="fade-up">Today's On-Duty Doctors</h2>
    <!-- <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
      1 doctor available in each shift. Total 2 doctors working today.
    </p> -->
    
    <div class="row g-4">
      <!-- DAY SHIFT -->
      <div class="col-lg-6" data-aos="zoom-in">
        <div class="shift-card day-shift">
          <div class="shift-header">
            <div class="shift-icon day">
              <i class="fas fa-sun"></i>
            </div>
            <div>
              <h3 class="shift-title">Day Shift Doctor</h3>
              <p class="shift-time"><i class="fas fa-clock me-2"></i> 8:00 AM - 7:00 PM (11 hours)</p>
              <p class="text-success fw-bold mb-0"><i class="fas fa-user-md me-1"></i> 1 Doctor On Duty</p>
            </div>
          </div>
          
          <div class="doctor-profile-large">
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2" class="doctor-avatar-large" alt="Dr. A. Rahman">
            <h3 class="doctor-name-large">Dr. A. Rahman</h3>
            <p class="doctor-specialty-large">Senior General Physician</p>
            <p class="doctor-qualification">MBBS (Colombo)<br>MD (Medicine), MRCP (UK)</p>
            <span class="doctor-experience-large">18+ Years Experience</span>
            <div class="shift-badge-large day">
              <i class="fas fa-clock me-2"></i> TODAY'S DAY DOCTOR
            </div>
            <p class="text-muted mt-4 mb-0">
              <i class="fas fa-calendar-alt me-2"></i> <strong>Next Duty:</strong> Friday (Day Shift)<br>
              <i class="fas fa-star me-2"></i> <strong>Specialization:</strong> Chronic Disease Management<br>
              <i class="fas fa-stethoscope me-2"></i> <strong>Services:</strong> Full OPD Consultations
            </p>
          </div>
        </div>
      </div>
      
      <!-- NIGHT SHIFT -->
      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="150">
        <div class="shift-card night-shift">
          <div class="shift-header">
            <div class="shift-icon night">
              <i class="fas fa-moon"></i>
            </div>
            <div>
              <h3 class="shift-title">Night Shift Doctor</h3>
              <p class="shift-time"><i class="fas fa-clock me-2"></i> 7:00 PM - 8:00 AM (13 hours)</p>
              <p class="text-primary fw-bold mb-0"><i class="fas fa-user-md me-1"></i> 1 Doctor On Duty</p>
            </div>
          </div>
          
          <div class="doctor-profile-large">
            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d" class="doctor-avatar-large" alt="Dr. R. Perera">
            <h3 class="doctor-name-large">Dr. R. Perera</h3>
            <p class="doctor-specialty-large">Emergency Medicine Specialist</p>
            <p class="doctor-qualification">MBBS (Sri Jayewardenepura)<br>DEM, Diploma in Trauma Care</p>
            <span class="doctor-experience-large">12+ Years Experience</span>
            <div class="shift-badge-large night">
              <i class="fas fa-clock me-2"></i> TODAY'S NIGHT DOCTOR
            </div>
            <p class="text-muted mt-4 mb-0">
              <i class="fas fa-calendar-alt me-2"></i> <strong>Next Duty:</strong> Thursday (Night Shift)<br>
              <i class="fas fa-star me-2"></i> <strong>Specialization:</strong> Emergency & Acute Care<br>
              <i class="fas fa-first-aid me-2"></i> <strong>Services:</strong> Emergency Consultations
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- WEEKLY ROTATION SCHEDULE -->
  <section class="weekly-schedule">
    <div class="schedule-card" data-aos="fade-up">
      <h2 class="main-title">Weekly Rotation Schedule</h2>
      <!-- <p class="text-center text-muted mb-5">Our 5 doctors rotate through shifts. 2 doctors work daily (1 day + 1 night).</p> -->
      
      <?php
      // Define days with their dates (next 7 days)
      $days = [
          'Monday' => date('d M', strtotime('next Monday')),
          'Tuesday' => date('d M', strtotime('next Tuesday')),
          'Wednesday' => date('d M', strtotime('next Wednesday')),
          'Thursday' => date('d M', strtotime('next Thursday')),
          'Friday' => date('d M', strtotime('next Friday')),
          'Saturday' => date('d M', strtotime('next Saturday')),
          'Sunday' => date('d M', strtotime('next Sunday'))
      ];
      
      // Define 5 doctors
      $doctors = [
          'dr1' => ['name' => 'Dr. A. Rahman', 'specialty' => 'Senior Physician', 'exp' => '18+ Years', 'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2'],
          'dr2' => ['name' => 'Dr. S. Fernando', 'specialty' => 'General Physician', 'exp' => '15+ Years', 'image' => 'https://images.unsplash.com/photo-1594824434340-7e7dfc37cabb'],
          'dr3' => ['name' => 'Dr. R. Perera', 'specialty' => 'Emergency Medicine', 'exp' => '12+ Years', 'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d'],
          'dr4' => ['name' => 'Dr. K. Rathnayake', 'specialty' => 'General Physician', 'exp' => '10+ Years', 'image' => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d'],
          'dr5' => ['name' => 'Dr. M. Silva', 'specialty' => 'Pediatrician', 'exp' => '14+ Years', 'image' => 'https://images.unsplash.com/photo-1591608971362-f08b2a75731a']
      ];
      
      // Define weekly schedule (1 doctor per shift, 2 doctors daily, 5 doctors rotating)
      $weeklySchedule = [
          'Monday' => [
              'day' => 'dr1',
              'night' => 'dr2'
          ],
          'Tuesday' => [
              'day' => 'dr3',
              'night' => 'dr4'
          ],
          'Wednesday' => [
              'day' => 'dr5',
              'night' => 'dr1'
          ],
          'Thursday' => [
              'day' => 'dr2',
              'night' => 'dr3'
          ],
          'Friday' => [
              'day' => 'dr4',
              'night' => 'dr5'
          ],
          'Saturday' => [
              'day' => 'dr1',
              'night' => 'dr3'
          ],
          'Sunday' => [
              'day' => 'dr2',
              'night' => 'dr4'
          ]
      ];
      
      // Get today's day
      $today = date('l');
      
      foreach ($days as $day => $date):
          $isToday = ($day == $today);
          $dayDoctorId = $weeklySchedule[$day]['day'];
          $nightDoctorId = $weeklySchedule[$day]['night'];
          $dayDoctor = $doctors[$dayDoctorId];
          $nightDoctor = $doctors[$nightDoctorId];
      ?>
      <div class="day-card <?php echo $isToday ? 'today' : ''; ?>" data-aos="fade-up">
          <div class="day-header">
              <div class="day-icon">
                  <i class="fas fa-calendar-day"></i>
              </div>
              <div>
                  <h3 class="day-title"><?php echo $day; ?> <span class="text-muted">(<?php echo $date; ?>)</span></h3>
                  <?php if($isToday): ?>
                  <span class="badge bg-danger"><i class="fas fa-star me-1"></i> TODAY</span>
                  <?php endif; ?>
              </div>
          </div>
          
          <div class="row">
              <!-- Day Shift -->
              <div class="col-md-6">
                  <h5 class="text-primary mb-3"><i class="fas fa-sun me-2"></i> Day Shift (8:00 AM - 7:00 PM)</h5>
                  <div class="doctor-card">
                      <img src="<?php echo $dayDoctor['image']; ?>" class="doctor-avatar" alt="<?php echo $dayDoctor['name']; ?>">
                      <h5 class="doctor-name"><?php echo $dayDoctor['name']; ?></h5>
                      <p class="doctor-specialty"><?php echo $dayDoctor['specialty']; ?></p>
                      <span class="doctor-experience"><?php echo $dayDoctor['exp']; ?></span>
                      <div class="shift-badge day mt-2">
                          <i class="fas fa-clock me-1"></i> Day Doctor
                      </div>
                  </div>
              </div>
              
              <!-- Night Shift -->
              <div class="col-md-6">
                  <h5 class="text-primary mb-3"><i class="fas fa-moon me-2"></i> Night Shift (7:00 PM - 8:00 AM)</h5>
                  <div class="doctor-card">
                      <img src="<?php echo $nightDoctor['image']; ?>" class="doctor-avatar" alt="<?php echo $nightDoctor['name']; ?>">
                      <h5 class="doctor-name"><?php echo $nightDoctor['name']; ?></h5>
                      <p class="doctor-specialty"><?php echo $nightDoctor['specialty']; ?></p>
                      <span class="doctor-experience"><?php echo $nightDoctor['exp']; ?></span>
                      <div class="shift-badge night mt-2">
                          <i class="fas fa-clock me-1"></i> Night Doctor
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
  
  <!-- ALL DOCTORS -->
  <section class="mb-5">
    <h2 class="main-title" data-aos="fade-up">Our 5 OPD Doctors</h2>
    <!-- <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
      Meet our team of experienced doctors providing 24/7 OPD services
    </p> -->
    
    <div class="row g-4">
      <?php foreach ($doctors as $id => $doctor): ?>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in">
        <div class="doctor-card">
          <img src="<?php echo $doctor['image']; ?>" class="doctor-avatar" alt="<?php echo $doctor['name']; ?>">
          <h4 class="doctor-name"><?php echo $doctor['name']; ?></h4>
          <p class="doctor-specialty"><?php echo $doctor['specialty']; ?></p>
          <p class="doctor-qualification">MBBS, MD • <?php echo $doctor['exp']; ?> Experience</p>
          <div class="mt-3">
              <span class="badge bg-primary me-2">Works Both Shifts</span>
              <span class="badge bg-success">On Rotation</span>
          </div>
          <p class="text-muted small mt-3 mb-0">
              <i class="fas fa-calendar-alt me-1"></i> Rotates weekly through shifts
          </p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
  
  <!-- EMERGENCY INFO -->
  <div class="emergency-info" data-aos="zoom-in">
    <h2 class="display-5 fw-bold mb-3"><i class="fas fa-first-aid me-3"></i> For Emergencies</h2>
    <p class="lead mb-4">The doctor on duty handles all emergencies during their shift</p>
    <div class="row">
      <div class="col-md-4">
        <div class="bg-white text-dark rounded-4 p-3">
          <h3 class="fw-bold mb-2">Day Emergencies</h3>
          <p class="mb-0"><i class="fas fa-user-md me-2"></i> Day Shift Doctor</p>
          <small>Handles all cases</small>
        </div>
      </div>
      <div class="col-md-4">
        <div class="bg-white text-dark rounded-4 p-3">
          <h3 class="fw-bold mb-2">Night Emergencies</h3>
          <p class="mb-0"><i class="fas fa-user-md me-2"></i> Night Shift Doctor</p>
          <small>Handles all cases</small>
        </div>
      </div>
      <div class="col-md-4">
        <div class="bg-white text-dark rounded-4 p-3">
          <h3 class="fw-bold mb-2">Ambulance</h3>
          <p class="mb-0"><i class="fas fa-phone me-2"></i> <strong>+94 77 911 1199</strong></p>
          <small>24/7 Emergency Calls</small>
        </div>
      </div>
    </div>
  </div>
  
  <!-- HOW IT WORKS -->
  <section class="mb-5">
    <h2 class="main-title" data-aos="fade-up">How Our Rotation System Works</h2>
    
    <div class="row g-4 mt-4">
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="process-step">
          <div class="step-number">1</div>
          <div class="info-icon-circle">
            <i class="fas fa-calendar-check"></i>
          </div>
          <h5 class="mb-3">Check Schedule</h5>
          <p class="text-muted">Check which doctor is on duty in current shift.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="process-step">
          <div class="step-number">2</div>
          <div class="info-icon-circle">
            <i class="fas fa-ticket-alt"></i>
          </div>
          <h5 class="mb-3">Get Token</h5>
          <p class="text-muted">24/7 token system. See the doctor available in current shift.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="process-step">
          <div class="step-number">3</div>
          <div class="info-icon-circle">
            <i class="fas fa-user-md"></i>
          </div>
          <h5 class="mb-3">Consult Doctor</h5>
          <p class="text-muted">See the doctor on duty. Average wait: 15-25 mins.</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="process-step">
          <div class="step-number">4</div>
          <div class="info-icon-circle">
            <i class="fas fa-prescription-bottle-alt"></i>
          </div>
          <h5 class="mb-3">Follow-up</h5>
          <p class="text-muted">Check schedule for doctor's next duty day for follow-up.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- INFO BANNER -->
  <section class="info-banner" data-aos="zoom-in">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h3 class="fw-bold mb-3">Important Information</h3>
        <ul class="list-unstyled mb-0">
          <li class="mb-2"><i class="fas fa-exclamation-circle me-3"></i> <strong>Shift System:</strong> 1 doctor works in each shift (total 2 doctors daily)</li>
          <li class="mb-2"><i class="fas fa-exclamation-circle me-3"></i> <strong>Consultation Fees:</strong> Day Shift: Rs. 800, Night Shift: Rs. 1000</li>
          <li class="mb-2"><i class="fas fa-exclamation-circle me-3"></i> <strong>Services:</strong> Full consultations during day, emergency focus at night</li>
          <li><i class="fas fa-exclamation-circle me-3"></i> <strong>Follow-up:</strong> Check weekly schedule for doctor's next duty day</li>
        </ul>
      </div>
      <!--<div class="col-lg-4 text-center mt-4 mt-lg-0">
        <div class="bg-white text-primary rounded-4 p-4 d-inline-block">
          <div class="text-center">
            <h1 class="display-1 fw-bold mb-0">5</h1>
            <p class="mb-0">Doctors</p>
            <small>Total Rotation</small>
          </div>
          <div class="mt-3">
            <div class="d-flex justify-content-between">
              <span>Working Daily</span>
              <span class="fw-bold"> 2 Doctors</span>
            </div>
            <div class="d-flex justify-content-between mt-2">
              <span>On Rotation</span>
              <span class="fw-bold">3 Doctors</span>
            </div>
          </div>
        </div>
      </div>
    </div>-->
  </section>
  
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({duration: 1000, once: true});

// Function to update current status
function updateCurrentStatus() {
    const now = new Date();
    const hours = now.getHours();
    const dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const todayName = dayNames[now.getDay()];
    
    // Doctor rotation schedule (1 doctor per shift)
    const schedule = {
        'Monday': { day: 'Dr. A. Rahman', night: 'Dr. S. Fernando' },
        'Tuesday': { day: 'Dr. R. Perera', night: 'Dr. K. Rathnayake' },
        'Wednesday': { day: 'Dr. M. Silva', night: 'Dr. A. Rahman' },
        'Thursday': { day: 'Dr. S. Fernando', night: 'Dr. R. Perera' },
        'Friday': { day: 'Dr. K. Rathnayake', night: 'Dr. M. Silva' },
        'Saturday': { day: 'Dr. A. Rahman', night: 'Dr. R. Perera' },
        'Sunday': { day: 'Dr. S. Fernando', night: 'Dr. K. Rathnayake' }
    };
    
    let currentShift, currentDoctor, nextShift, nextDoctor, timeToNextShift;
    
    if (hours >= 8 && hours < 19) { // Day shift: 8 AM to 6:59 PM
        currentShift = 'day';
        currentShiftDisplay = 'Day (8:00 AM - 7:00 PM)';
        currentDoctor = schedule[todayName].day;
        nextShift = 'night';
        nextDoctor = schedule[todayName].night;
        timeToNextShift = 19 - hours;
    } else { // Night shift: 7 PM to 7:59 AM
        currentShift = 'night';
        currentShiftDisplay = 'Night (7:00 PM - 8:00 AM)';
        currentDoctor = schedule[todayName].night;
        
        // Get tomorrow's day for next shift
        const tomorrow = new Date(now);
        tomorrow.setDate(tomorrow.getDate() + 1);
        const tomorrowName = dayNames[tomorrow.getDay()];
        nextShift = 'day';
        nextDoctor = schedule[tomorrowName].day;
        
        if (hours < 8) { // Before 8 AM
            timeToNextShift = 8 - hours;
        } else { // After 7 PM
            timeToNextShift = (24 - hours) + 8;
        }
    }
    
    // Update DOM elements
    document.getElementById('currentTimeDisplay').textContent = 
        now.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
    document.getElementById('currentShiftDisplay').textContent = currentShiftDisplay;
    document.getElementById('currentDoctorDisplay').textContent = currentDoctor;
    document.getElementById('nextDoctorDisplay').textContent = 
        `${nextDoctor} in ${timeToNextShift} ${timeToNextShift === 1 ? 'hour' : 'hours'}`;
    
    // Highlight current shift card
    const shiftCards = document.querySelectorAll('.shift-card');
    shiftCards.forEach(card => card.style.boxShadow = '0 15px 35px rgba(0, 0, 0, 0.1)');
    
    const currentShiftCard = document.querySelector(`.shift-card.${currentShift}-shift`);
    if (currentShiftCard) {
        currentShiftCard.style.boxShadow = '0 20px 50px rgba(0, 0, 0, 0.25)';
        currentShiftCard.style.border = '3px solid #ff6b6b';
        currentShiftCard.style.transform = 'scale(1.02)';
    }
}

// Initialize and update every minute
updateCurrentStatus();
setInterval(updateCurrentStatus, 60000);

// Add "Jump to Today" button functionality
document.addEventListener('DOMContentLoaded', function() {
    const todayCard = document.querySelector('.day-card.today');
    if (todayCard) {
        // Create and insert jump button
        const jumpButton = document.createElement('button');
        jumpButton.className = 'btn btn-primary btn-sm ms-3';
        jumpButton.innerHTML = '<i class="fas fa-calendar-day me-1"></i> Jump to Today';
        jumpButton.onclick = function() {
            todayCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
        };
        
        // Find the schedule title and append button
        const scheduleTitle = document.querySelector('.schedule-card .main-title');
        if (scheduleTitle) {
            scheduleTitle.insertAdjacentElement('afterend', jumpButton);
        }
    }
});
</script>

</body>
</html>
<?php include 'footer.php'; ?>