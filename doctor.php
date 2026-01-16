<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Doctors | CareWell Medical Center</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- FullCalendar CSS -->
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />

<!-- Custom Styles -->
<style>
:root {
  --primary: #0a3d62;
  --secondary: #1e90ff;
  --accent: #00cec9;
  --light: #f5f9fc;
  --success: #2ecc71;
  --warning: #f39c12;
  --danger: #e74c3c;
  --ent: #9b59b6;
  --dentist: #3498db;
  --eyesurgeon: #e74c3c;
  --vog: #2ecc71;
  --vp: #f39c12;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: var(--light);
  color: #333;
  padding-top: 80px;
}

/* =========== DOCTOR HERO SECTION =========== */
.doctor-hero {
  background: linear-gradient(135deg, rgba(10, 61, 98, 0.9), rgba(30, 144, 255, 0.9)),
              url('https://images.unsplash.com/photo-1582750433449-648ed127bb54') center/cover;
  color: white;
  padding: 100px 0 60px;
  border-radius: 0 0 40px 40px;
  margin-bottom: 40px;
  position: relative;
  overflow: hidden;
}

.doctor-hero::before {
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

/* DOCTOR FILTER */
.doctor-filter {
  background: white;
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
  margin-bottom: 40px;
}

.filter-tabs {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  margin-bottom: 25px;
}

.filter-tab {
  padding: 10px 25px;
  background: #f8fafd;
  border: 2px solid #eef5ff;
  border-radius: 15px;
  font-weight: 600;
  color: #666;
  cursor: pointer;
  transition: all 0.3s ease;
}

.filter-tab:hover,
.filter-tab.active {
  background: linear-gradient(135deg, var(--secondary), var(--accent));
  color: white;
  border-color: var(--secondary);
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(30, 144, 255, 0.2);
}

.search-box {
  position: relative;
}

.search-box input {
  border-radius: 15px;
  padding: 15px 20px 15px 50px;
  border: 2px solid #eef5ff;
  font-size: 16px;
  transition: all 0.3s ease;
}

.search-box input:focus {
  border-color: var(--secondary);
  box-shadow: 0 0 0 0.25rem rgba(30, 144, 255, 0.25);
}

.search-box i {
  position: absolute;
  left: 20px;
  top: 50%;
  transform: translateY(-50%);
  color: var(--primary);
  font-size: 18px;
}

/* DOCTOR CARDS */
.doctor-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  margin-bottom: 30px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
  transition: all 0.4s ease;
  border: 3px solid transparent;
  height: 100%;
  position: relative;
}

.doctor-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.specialty-badge-card {
  position: absolute;
  top: 20px;
  right: 20px;
  padding: 5px 15px;
  border-radius: 15px;
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  color: white;
}

.badge-ent { background-color: var(--ent); }
.badge-dentist { background-color: var(--dentist); }
.badge-eyesurgeon { background-color: var(--eyesurgeon); }
.badge-vog { background-color: var(--vog); }
.badge-vp { background-color: var(--vp); }
.badge-general { background-color: var(--primary); }
.badge-cardio { background-color: #e74c3c; }
.badge-neuro { background-color: #8e44ad; }
.badge-ortho { background-color: #f39c12; }
.badge-derma { background-color: #1abc9c; }

.doctor-avatar {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  border: 5px solid white;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
  margin: 0 auto 25px;
  display: block;
}

.doctor-name {
  font-size: 24px;
  font-weight: 800;
  color: var(--primary);
  margin-bottom: 8px;
  text-align: center;
}

.doctor-specialty {
  color: var(--secondary);
  font-weight: 600;
  margin-bottom: 15px;
  font-size: 18px;
  text-align: center;
}

.doctor-qualification {
  color: #666;
  font-size: 14px;
  text-align: center;
  margin-bottom: 15px;
}

.doctor-experience {
  display: inline-block;
  background: linear-gradient(135deg, #e8f4fc, #d6e4ff);
  color: var(--primary);
  padding: 8px 20px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 700;
  margin: 10px 0;
  text-align: center;
  width: 100%;
}

.doctor-info {
  display: flex;
  align-items: center;
  margin: 8px 0;
  color: #555;
  font-size: 14px;
}

.doctor-info i {
  width: 24px;
  color: var(--primary);
  margin-right: 10px;
}

.availability-badge {
  display: inline-block;
  padding: 8px 20px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 700;
  margin-top: 15px;
  text-align: center;
  width: 100%;
}

.availability-badge.available {
  background: rgba(46, 204, 113, 0.15);
  color: #27ae60;
  border: 2px solid rgba(46, 204, 113, 0.3);
}

.availability-badge.unavailable {
  background: rgba(231, 76, 60, 0.15);
  color: #c0392b;
  border: 2px solid rgba(231, 76, 60, 0.3);
}

.doctor-actions {
  display: flex;
  gap: 10px;
  margin-top: 20px;
}

.btn-view-profile {
  background: linear-gradient(135deg, var(--primary), #0a4a7a);
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 15px;
  font-weight: 600;
  flex: 1;
  transition: all 0.3s ease;
}

.btn-book-appointment {
  background: linear-gradient(135deg, var(--secondary), var(--accent));
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 15px;
  font-weight: 600;
  flex: 1;
  transition: all 0.3s ease;
}

.btn-view-profile:hover,
.btn-book-appointment:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

/* DOCTOR DETAIL MODAL */
.modal-content {
  border-radius: 20px;
  border: none;
}

.modal-header {
  background: linear-gradient(135deg, var(--primary), var(--secondary));
  color: white;
  border-radius: 20px 20px 0 0;
  padding: 25px 30px;
  border-bottom: none;
}

.modal-title {
  font-weight: 700;
}

.modal-body {
  padding: 30px;
}

.detail-section {
  margin-bottom: 30px;
}

.detail-section h5 {
  color: var(--primary);
  font-weight: 700;
  margin-bottom: 15px;
  padding-bottom: 10px;
  border-bottom: 2px solid #eef5ff;
}

.schedule-table {
  width: 100%;
  border-collapse: collapse;
}

.schedule-table th {
  background: #f8fafd;
  color: var(--primary);
  font-weight: 700;
  padding: 12px 15px;
  text-align: left;
  border-bottom: 2px solid #eef5ff;
}

.schedule-table td {
  padding: 12px 15px;
  border-bottom: 1px solid #eef5ff;
}

.schedule-table tr:hover {
  background: #f8fafd;
}

/* CALENDAR SECTION */
.calendar-section {
  background: white;
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
  margin: 50px 0;
}

.calendar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 30px;
  flex-wrap: wrap;
  gap: 20px;
}

.calendar-controls {
  display: flex;
  gap: 10px;
  align-items: center;
}

.calendar-controls select {
  padding: 8px 15px;
  border-radius: 10px;
  border: 2px solid #eef5ff;
  background: white;
  color: var(--primary);
  font-weight: 600;
}

/* FullCalendar Customization */
#calendar {
  margin-top: 20px;
}

.fc {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.fc-toolbar-title {
  color: var(--primary);
  font-weight: 700;
}

.fc-button-primary {
  background-color: var(--secondary) !important;
  border-color: var(--secondary) !important;
}

.fc-button-primary:hover {
  background-color: var(--primary) !important;
  border-color: var(--primary) !important;
}

.fc-event {
  border-radius: 8px;
  border: none;
  padding: 3px 8px;
  font-size: 12px;
  cursor: pointer;
}

.fc-event:hover {
  opacity: 0.9;
}

/* APPOINTMENT FORM */
.form-control, .form-select {
  border-radius: 10px;
  padding: 12px 15px;
  border: 1px solid #ddd;
  transition: all 0.3s ease;
}

.form-control:focus, .form-select:focus {
  border-color: var(--secondary);
  box-shadow: 0 0 0 0.25rem rgba(30, 144, 255, 0.25);
}

.btn-submit {
  background: linear-gradient(135deg, var(--primary), var(--secondary));
  color: white;
  border: none;
  padding: 12px 30px;
  border-radius: 10px;
  font-weight: 600;
  transition: all 0.3s ease;
  width: 100%;
}

.btn-submit:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(10, 61, 98, 0.3);
}

/* SPECIALTY BADGES */
.specialty-badge {
  display: inline-block;
  background: rgba(30, 144, 255, 0.1);
  color: var(--secondary);
  padding: 5px 15px;
  border-radius: 15px;
  font-size: 12px;
  font-weight: 600;
  margin: 3px;
  border: 1px solid rgba(30, 144, 255, 0.2);
}

/* STATS SECTION */
.stats-section {
  background: linear-gradient(135deg, var(--primary), #0a4a7a);
  color: white;
  border-radius: 20px;
  padding: 50px 30px;
  margin: 50px 0;
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

/* SPECIALTY COLORS */
.specialty-ent { color: var(--ent); }
.specialty-dentist { color: var(--dentist); }
.specialty-eyesurgeon { color: var(--eyesurgeon); }
.specialty-vog { color: var(--vog); }
.specialty-vp { color: var(--vp); }

/* RESPONSIVE DESIGN */
@media (max-width: 992px) {
  .doctor-hero {
    padding: 80px 0 50px;
  }
  
  .doctor-avatar {
    width: 120px;
    height: 120px;
  }
  
  .doctor-name {
    font-size: 20px;
  }
  
  .calendar-header {
    flex-direction: column;
    align-items: flex-start;
  }
}

@media (max-width: 768px) {
  body {
    padding-top: 70px;
  }
  
  .doctor-hero {
    padding: 60px 0 40px;
    border-radius: 0 0 30px 30px;
  }
  
  .filter-tabs {
    justify-content: center;
  }
  
  .doctor-actions {
    flex-direction: column;
  }
  
  .btn-view-profile,
  .btn-book-appointment {
    width: 100%;
  }
  
  .stat-number {
    font-size: 36px;
  }
  
  .calendar-section {
    padding: 20px;
  }
  
  .fc-toolbar {
    flex-direction: column;
    gap: 10px;
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

/* TIME SLOTS */
.time-slots {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 15px;
}

.time-slot {
  padding: 8px 15px;
  border: 2px solid #eef5ff;
  border-radius: 10px;
  background: white;
  color: #666;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.time-slot:hover {
  border-color: var(--secondary);
  color: var(--secondary);
}

.time-slot.selected {
  background: linear-gradient(135deg, var(--secondary), var(--accent));
  color: white;
  border-color: var(--secondary);
}

.time-slot.unavailable {
  background: #f8f9fa;
  color: #adb5bd;
  border-color: #e9ecef;
  cursor: not-allowed;
}
</style>
</head>
<body>

<!-- HERO SECTION -->
<section class="doctor-hero">
  <div class="container hero-content">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Meet Our Expert Medical Team</h1>
        <p class="lead mb-4" data-aos="fade-up" data-aos-delay="150">
          Highly qualified specialists across multiple disciplines, dedicated to providing exceptional healthcare with compassion and expertise.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap" data-aos="fade-up" data-aos-delay="300">
          <a href="#doctors" class="btn btn-light btn-lg px-4">
            <i class="fas fa-user-md me-2"></i> View All Doctors
          </a>
          <a href="#calendar" class="btn btn-outline-light btn-lg px-4">
            <i class="fas fa-calendar-alt me-2"></i> View Schedule
          </a>
          <button class="btn btn-light btn-lg px-4" data-bs-toggle="modal" data-bs-target="#appointmentModal">
            <i class="fas fa-calendar-check me-2"></i> Book Appointment
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DOCTOR FILTER -->
<section class="doctor-filter" data-aos="fade-up">
  <div class="container">
    <h3 class="mb-4 text-center">Find Your Specialist</h3>
    
    <div class="filter-tabs justify-content-center">
      <div class="filter-tab active" data-filter="all">All Specialties</div>
      <div class="filter-tab" data-filter="general">General Physicians</div>
      <div class="filter-tab" data-filter="ent">ENT</div>
      <div class="filter-tab" data-filter="dentist">Dentist</div>
      <div class="filter-tab" data-filter="eyesurgeon">Eye Surgeon</div>
      <div class="filter-tab" data-filter="vog">VOG</div>
      <div class="filter-tab" data-filter="vp">VP</div>
      <div class="filter-tab" data-filter="available">Available Now</div>
    </div>
    
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="search-box">
          <i class="fas fa-search"></i>
          <input type="text" class="form-control" id="doctorSearch" placeholder="Search doctors by name, specialty, or qualification...">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DOCTORS GRID -->
<section id="doctors" class="py-5">
  <div class="container">
    <h2 class="main-title center-title" data-aos="fade-up">Our Medical Team</h2>
    <p class="text-center text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
      12+ specialists across multiple disciplines
    </p>
    
    <div class="row" id="doctorsGrid">
      <?php
      // Doctor Data with new specialties
      $doctors = [
        // Existing doctors
        [
          'id' => 1,
          'name' => 'Dr. A. Rahman',
          'specialty' => 'Senior General Physician',
          'category' => 'general',
          'qualification' => 'MBBS (Colombo), MD (Medicine), MRCP (UK)',
          'experience' => '18+ Years',
          'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2',
          'department' => 'General Medicine',
          'languages' => 'English, Sinhala, Tamil',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 1,500',
          'opd_hours' => 'Mon-Fri: 9 AM - 5 PM, Sat: 9 AM - 1 PM',
          'specialties' => ['Chronic Disease Management', 'Diabetes Care', 'Hypertension', 'Preventive Medicine']
        ],
        [
          'id' => 2,
          'name' => 'Dr. S. Fernando',
          'specialty' => 'Cardiologist',
          'category' => 'cardio',
          'qualification' => 'MBBS, MD (Cardiology), FRCP (London)',
          'experience' => '15+ Years',
          'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d',
          'department' => 'Cardiology',
          'languages' => 'English, Sinhala',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 2,500',
          'opd_hours' => 'Mon-Wed-Fri: 10 AM - 4 PM',
          'specialties' => ['Heart Disease', 'Echocardiography', 'Cardiac Rehabilitation', 'Hypertension']
        ],
        [
          'id' => 3,
          'name' => 'Dr. R. Perera',
          'specialty' => 'Pediatrician',
          'category' => 'pediatrics',
          'qualification' => 'MBBS, DCH, MD (Pediatrics)',
          'experience' => '12+ Years',
          'image' => 'https://images.unsplash.com/photo-1591608971362-f08b2a75731a',
          'department' => 'Pediatrics',
          'languages' => 'English, Sinhala, Tamil',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 1,800',
          'opd_hours' => 'Tue-Thu-Sat: 9 AM - 3 PM',
          'specialties' => ['Child Healthcare', 'Vaccinations', 'Growth Monitoring', 'Pediatric Nutrition']
        ],
        [
          'id' => 4,
          'name' => 'Dr. M. Silva',
          'specialty' => 'Orthopedic Surgeon',
          'category' => 'ortho',
          'qualification' => 'MBBS, MS (Ortho), FRCS (Edin)',
          'experience' => '20+ Years',
          'image' => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d',
          'department' => 'Orthopedics',
          'languages' => 'English, Sinhala',
          'availability' => 'unavailable',
          'consultation_fee' => 'Rs. 3,000',
          'opd_hours' => 'Mon-Thu: 11 AM - 6 PM',
          'specialties' => ['Joint Replacement', 'Sports Injuries', 'Fracture Management', 'Arthroscopy']
        ],
        [
          'id' => 5,
          'name' => 'Dr. K. Rathnayake',
          'specialty' => 'Dermatologist',
          'category' => 'derma',
          'qualification' => 'MBBS, DDV, MD (Dermatology)',
          'experience' => '10+ Years',
          'image' => 'https://images.unsplash.com/photo-1594824434340-7e7dfc37cabb',
          'department' => 'Dermatology',
          'languages' => 'English, Sinhala',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 2,000',
          'opd_hours' => 'Wed-Fri-Sat: 10 AM - 5 PM',
          'specialties' => ['Skin Diseases', 'Cosmetic Dermatology', 'Laser Therapy', 'Acne Treatment']
        ],
        [
          'id' => 6,
          'name' => 'Dr. P. Wijesinghe',
          'specialty' => 'Neurologist',
          'category' => 'neuro',
          'qualification' => 'MBBS, MD (Neurology), DM (Neurology)',
          'experience' => '14+ Years',
          'image' => 'https://images.unsplash.com/photo-1537368910025-700350fe46c7',
          'department' => 'Neurology',
          'languages' => 'English, Sinhala',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 2,800',
          'opd_hours' => 'Mon-Tue-Thu: 9 AM - 4 PM',
          'specialties' => ['Headache Disorders', 'Epilepsy', 'Stroke Management', 'Movement Disorders']
        ],
        // New ENT Specialist
        [
          'id' => 7,
          'name' => 'Dr. N. Gunawardena',
          'specialty' => 'ENT Specialist',
          'category' => 'ent',
          'qualification' => 'MBBS, MS (ENT), DLO',
          'experience' => '12+ Years',
          'image' => 'https://images.unsplash.com/photo-1516549655669-df6654e435de',
          'department' => 'ENT & Head Neck Surgery',
          'languages' => 'English, Sinhala, Tamil',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 2,200',
          'opd_hours' => 'Mon-Wed-Fri: 10 AM - 4 PM, Sat: 9 AM - 1 PM',
          'specialties' => ['Sinus Disorders', 'Hearing Loss', 'Tonsillitis', 'Voice Disorders']
        ],
        // New Dentist
        [
          'id' => 8,
          'name' => 'Dr. L. De Silva',
          'specialty' => 'Dentist',
          'category' => 'dentist',
          'qualification' => 'BDS, MDS (Prosthodontics)',
          'experience' => '8+ Years',
          'image' => 'https://images.unsplash.com/photo-1608514917756-34522c8522c7',
          'department' => 'Dental Surgery',
          'languages' => 'English, Sinhala',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 1,500',
          'opd_hours' => 'Tue-Thu-Sat: 9 AM - 5 PM',
          'specialties' => ['Dental Implants', 'Cosmetic Dentistry', 'Root Canal', 'Teeth Whitening']
        ],
        // New Eye Surgeon
        [
          'id' => 9,
          'name' => 'Dr. S. Jayawardena',
          'specialty' => 'Eye Surgeon',
          'category' => 'eyesurgeon',
          'qualification' => 'MBBS, MS (Ophthalmology), FRCS',
          'experience' => '15+ Years',
          'image' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09',
          'department' => 'Ophthalmology',
          'languages' => 'English, Sinhala',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 2,500',
          'opd_hours' => 'Mon-Tue-Wed: 9 AM - 4 PM',
          'specialties' => ['Cataract Surgery', 'LASIK', 'Glaucoma', 'Retinal Disorders']
        ],
        // New VOG Doctor (Obstetrician & Gynecologist)
        [
          'id' => 10,
          'name' => 'Dr. M. Ranasinghe',
          'specialty' => 'VOG Specialist',
          'category' => 'vog',
          'qualification' => 'MBBS, MD (ObGyn), MRCOG',
          'experience' => '10+ Years',
          'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2',
          'department' => 'Obstetrics & Gynecology',
          'languages' => 'English, Sinhala, Tamil',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 2,000',
          'opd_hours' => 'Mon-Fri: 9 AM - 3 PM',
          'specialties' => ['Pregnancy Care', 'Fertility Treatment', 'Menopause', 'Gynecological Surgery']
        ],
        // New VP Doctor (Psychiatrist)
        [
          'id' => 11,
          'name' => 'Dr. T. Karunaratne',
          'specialty' => 'VP Specialist',
          'category' => 'vp',
          'qualification' => 'MBBS, MD (Psychiatry), DPM',
          'experience' => '12+ Years',
          'image' => 'https://images.unsplash.com/photo-1537368910025-700350fe46c7',
          'department' => 'Psychiatry',
          'languages' => 'English, Sinhala',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 2,500',
          'opd_hours' => 'Tue-Thu-Sat: 10 AM - 5 PM',
          'specialties' => ['Anxiety Disorders', 'Depression', 'Stress Management', 'Counseling']
        ],
        // Additional General Physician
        [
          'id' => 12,
          'name' => 'Dr. H. Bandara',
          'specialty' => 'General Physician',
          'category' => 'general',
          'qualification' => 'MBBS, MD (Medicine)',
          'experience' => '6+ Years',
          'image' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d',
          'department' => 'General Medicine',
          'languages' => 'English, Sinhala',
          'availability' => 'available',
          'consultation_fee' => 'Rs. 1,200',
          'opd_hours' => 'Mon-Sat: 8 AM - 4 PM',
          'specialties' => ['General Medicine', 'Fever Management', 'Respiratory Infections', 'Gastrointestinal Disorders']
        ]
      ];
      
      foreach ($doctors as $doctor):
        $badgeClass = 'badge-' . $doctor['category'];
      ?>
      <div class="col-lg-4 col-md-6 doctor-item" 
           data-category="<?php echo $doctor['category']; ?>"
           data-availability="<?php echo $doctor['availability']; ?>"
           data-aos="zoom-in">
        <div class="doctor-card">
          <span class="specialty-badge-card <?php echo $badgeClass; ?>">
            <?php echo strtoupper($doctor['category']); ?>
          </span>
          
          <img src="<?php echo $doctor['image']; ?>" class="doctor-avatar" alt="<?php echo $doctor['name']; ?>">
          <h3 class="doctor-name"><?php echo $doctor['name']; ?></h3>
          <p class="doctor-specialty specialty-<?php echo $doctor['category']; ?>"><?php echo $doctor['specialty']; ?></p>
          <p class="doctor-qualification"><?php echo $doctor['qualification']; ?></p>
          
          <div class="text-center mb-3">
            <span class="doctor-experience"><?php echo $doctor['experience']; ?> Experience</span>
          </div>
          
          <div class="doctor-info">
            <i class="fas fa-hospital"></i>
            <span><strong>Department:</strong> <?php echo $doctor['department']; ?></span>
          </div>
          
          <div class="doctor-info">
            <i class="fas fa-comments"></i>
            <span><strong>Languages:</strong> <?php echo $doctor['languages']; ?></span>
          </div>
          
          <div class="doctor-info">
            <i class="fas fa-money-bill-wave"></i>
            <span><strong>Fee:</strong> <?php echo $doctor['consultation_fee']; ?></span>
          </div>
          
          <div class="specialties mb-3 text-center">
            <?php foreach (array_slice($doctor['specialties'], 0, 2) as $specialty): ?>
              <span class="specialty-badge"><?php echo $specialty; ?></span>
            <?php endforeach; ?>
          </div>
          
          <div class="availability-badge <?php echo $doctor['availability']; ?>">
            <i class="fas fa-circle"></i> <?php echo $doctor['availability'] == 'available' ? 'Available for Appointments' : 'Currently Unavailable'; ?>
          </div>
          
          <div class="doctor-actions">
            <button class="btn-view-profile" onclick="viewDoctorProfile(<?php echo $doctor['id']; ?>)">
              <i class="fas fa-user-circle me-2"></i> View Profile
            </button>
            <button class="btn-book-appointment" 
                    onclick="bookAppointmentWithDoctor(<?php echo $doctor['id']; ?>, '<?php echo addslashes($doctor['name']); ?>')"
                    <?php echo $doctor['availability'] == 'unavailable' ? 'disabled' : ''; ?>>
              <i class="fas fa-calendar-plus me-2"></i> Book Now
            </button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CALENDAR SECTION -->
<section id="calendar" class="calendar-section" data-aos="fade-up">
  <div class="container">
    <h2 class="main-title">Doctor Appointment Calendar</h2>
    <p class="text-muted mb-4">View available time slots and book appointments directly from the calendar</p>
    
    <div class="calendar-header">
      <div>
        <h4 class="mb-0">Monthly Schedule</h4>
        <p class="text-muted mb-0 small">Click on available slots to book appointments</p>
      </div>
      
      <div class="calendar-controls">
        <select id="doctorFilterCalendar" class="form-select" onchange="filterCalendarEvents()">
          <option value="all">All Doctors</option>
          <?php foreach ($doctors as $doctor): ?>
            <?php if ($doctor['availability'] == 'available'): ?>
              <option value="doctor-<?php echo $doctor['id']; ?>"><?php echo $doctor['name']; ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
        
        <select id="specialtyFilterCalendar" class="form-select" onchange="filterCalendarEvents()">
          <option value="all">All Specialties</option>
          <option value="ent">ENT</option>
          <option value="dentist">Dentist</option>
          <option value="eyesurgeon">Eye Surgeon</option>
          <option value="vog">VOG</option>
          <option value="vp">VP</option>
          <option value="general">General Physicians</option>
        </select>
      </div>
    </div>
    
    <div id="calendar"></div>
    
    <div class="mt-4 pt-4 border-top">
      <h5 class="mb-3">Calendar Legend</h5>
      <div class="d-flex flex-wrap gap-3">
        <div class="d-flex align-items-center">
          <div class="rounded-circle bg-primary me-2" style="width: 15px; height: 15px;"></div>
          <small>Available Slot</small>
        </div>
        <div class="d-flex align-items-center">
          <div class="rounded-circle bg-success me-2" style="width: 15px; height: 15px;"></div>
          <small>Morning Session</small>
        </div>
        <div class="d-flex align-items-center">
          <div class="rounded-circle bg-warning me-2" style="width: 15px; height: 15px;"></div>
          <small>Afternoon Session</small>
        </div>
        <div class="d-flex align-items-center">
          <div class="rounded-circle bg-danger me-2" style="width: 15px; height: 15px;"></div>
          <small>Evening Session</small>
        </div>
        <div class="d-flex align-items-center">
          <div class="rounded-circle bg-secondary me-2" style="width: 15px; height: 15px;"></div>
          <small>Booked</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS SECTION -->
<section class="stats-section" data-aos="fade-up">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <div class="stat-number">12+</div>
          <div class="stat-label">Specialists</div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <div class="stat-number">8</div>
          <div class="stat-label">Specialties</div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <div class="stat-number">50k+</div>
          <div class="stat-label">Patients Treated</div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <div class="stat-number">24/7</div>
          <div class="stat-label">Emergency Support</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- APPOINTMENT CTA -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8" data-aos="fade-right">
        <h2 class="display-5 fw-bold mb-3" style="color: var(--primary);">Need Immediate Consultation?</h2>
        <p class="lead mb-4">Book an appointment with our specialists for personalized care and expert medical advice. Emergency appointments available within 24 hours.</p>
        <div class="d-flex flex-wrap gap-3">
          <button class="btn btn-primary btn-lg px-5" data-bs-toggle="modal" data-bs-target="#appointmentModal">
            <i class="fas fa-calendar-check me-2"></i> Book Appointment
          </button>
          <a href="tel:+94771234567" class="btn btn-outline-primary btn-lg px-5">
            <i class="fas fa-phone me-2"></i> Emergency: 077 123 4567
          </a>
          <a href="#calendar" class="btn btn-light btn-lg px-5">
            <i class="fas fa-calendar-alt me-2"></i> View Calendar
          </a>
        </div>
      </div>
      <div class="col-lg-4" data-aos="fade-left">
        <div class="bg-light rounded-4 p-4 text-center">
          <i class="fas fa-clock fa-4x text-primary mb-3"></i>
          <h4 class="mb-3">Quick Appointments</h4>
          <p class="mb-0">Same-day appointments available for urgent cases. Average wait time: 15-20 minutes.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DOCTOR DETAIL MODAL -->
<div class="modal fade" id="doctorModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="doctorModalTitle"></h3>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="doctorModalBody">
        <!-- Content loaded dynamically -->
      </div>
    </div>
  </div>
</div>

<!-- APPOINTMENT MODAL -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"><i class="fas fa-calendar-check me-2"></i> Book Appointment</h3>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="appointmentForm" method="POST" action="book_appointment.php">
          <input type="hidden" id="selectedDoctorId" name="doctor_id">
          <input type="hidden" id="selectedSlot" name="time_slot">
          
          <div class="row g-3">
            <div class="col-md-6">
              <label for="appDoctor" class="form-label">Select Doctor *</label>
              <select class="form-select" id="appDoctor" name="doctor" required onchange="updateTimeSlots()">
                <option value="" selected disabled>Choose a doctor</option>
                <?php foreach ($doctors as $doctor): ?>
                  <?php if ($doctor['availability'] == 'available'): ?>
                    <option value="<?php echo $doctor['id']; ?>" data-category="<?php echo $doctor['category']; ?>">
                      <?php echo $doctor['name']; ?> - <?php echo $doctor['specialty']; ?>
                    </option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-6">
              <label for="appType" class="form-label">Appointment Type *</label>
              <select class="form-select" id="appType" name="type" required>
                <option value="" selected disabled>Select type</option>
                <option value="consultation">Consultation</option>
                <option value="followup">Follow-up</option>
                <option value="emergency">Emergency</option>
                <option value="checkup">Health Check-up</option>
              </select>
            </div>
            
            <div class="col-md-6">
              <label for="appDate" class="form-label">Preferred Date *</label>
              <input type="date" class="form-control" id="appDate" name="date" required min="<?php echo date('Y-m-d'); ?>" onchange="updateTimeSlots()">
            </div>
            
            <div class="col-md-6">
              <label class="form-label">Available Time Slots *</label>
              <div class="time-slots" id="timeSlotsContainer">
                <div class="text-muted">Select doctor and date to view available slots</div>
              </div>
            </div>
            
            <div class="col-md-6">
              <label for="patientName" class="form-label">Full Name *</label>
              <input type="text" class="form-control" id="patientName" name="name" required>
            </div>
            <div class="col-md-6">
              <label for="patientNIC" class="form-label">NIC Number *</label>
              <input type="text" class="form-control" id="patientNIC" name="nic" required>
            </div>
            
            <div class="col-md-6">
              <label for="patientPhone" class="form-label">Phone Number *</label>
              <input type="tel" class="form-control" id="patientPhone" name="phone" required>
            </div>
            <div class="col-md-6">
              <label for="patientEmail" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="patientEmail" name="email">
            </div>
            
            <div class="col-12">
              <label for="appNotes" class="form-label">Medical Notes (Optional)</label>
              <textarea class="form-control" id="appNotes" name="notes" rows="3" placeholder="Brief description of symptoms or concerns..."></textarea>
            </div>
            
            <div class="col-12 mt-4">
              <button type="submit" class="btn btn-submit btn-lg">
                <i class="fas fa-paper-plane me-2"></i> Confirm Appointment
              </button>
              <p class="text-muted mt-3 small">
                <i class="fas fa-info-circle me-1"></i> Appointment confirmation will be sent via SMS and email within 30 minutes.
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
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>

<script>
// Initialize AOS
AOS.init({duration: 1000, once: true});

// Doctor Data
const doctors = <?php echo json_encode($doctors); ?>;

// Set minimum date for appointment
document.getElementById('appDate').min = new Date().toISOString().split('T')[0];
document.getElementById('appDate').value = new Date().toISOString().split('T')[0];

// Filter doctors by category
document.querySelectorAll('.filter-tab').forEach(tab => {
  tab.addEventListener('click', function() {
    // Update active tab
    document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
    this.classList.add('active');
    
    const filter = this.dataset.filter;
    const doctorItems = document.querySelectorAll('.doctor-item');
    
    doctorItems.forEach(item => {
      const category = item.dataset.category;
      const availability = item.dataset.availability;
      let show = false;
      
      switch(filter) {
        case 'all':
          show = true;
          break;
        case 'general':
          show = category === 'general';
          break;
        case 'ent':
          show = category === 'ent';
          break;
        case 'dentist':
          show = category === 'dentist';
          break;
        case 'eyesurgeon':
          show = category === 'eyesurgeon';
          break;
        case 'vog':
          show = category === 'vog';
          break;
        case 'vp':
          show = category === 'vp';
          break;
        case 'available':
          show = availability === 'available';
          break;
      }
      
      item.style.display = show ? 'block' : 'none';
      
      // Add fade animation
      if (show) {
        item.classList.add('fade-in');
      }
    });
  });
});

// Search doctors
document.getElementById('doctorSearch').addEventListener('input', function() {
  const searchTerm = this.value.toLowerCase();
  const doctorItems = document.querySelectorAll('.doctor-item');
  
  doctorItems.forEach(item => {
    const doctorCard = item.querySelector('.doctor-card');
    const doctorText = doctorCard.textContent.toLowerCase();
    
    if (doctorText.includes(searchTerm)) {
      item.style.display = 'block';
      item.classList.add('fade-in');
    } else {
      item.style.display = 'none';
    }
  });
});

// View doctor profile
function viewDoctorProfile(doctorId) {
  const doctor = doctors.find(d => d.id === doctorId);
  if (!doctor) return;
  
  // Create modal content
  const modalContent = `
    <div class="row">
      <div class="col-md-4">
        <img src="${doctor.image}" class="img-fluid rounded-4 mb-4" alt="${doctor.name}">
        <div class="text-center">
          <div class="availability-badge ${doctor.availability} mb-3">
            <i class="fas fa-circle"></i> ${doctor.availability === 'available' ? 'Available for Appointments' : 'Currently Unavailable'}
          </div>
          <button class="btn btn-primary w-100 mb-2" onclick="bookAppointmentWithDoctor(${doctor.id}, '${doctor.name.replace(/'/g, "\\'")}')" ${doctor.availability === 'unavailable' ? 'disabled' : ''}>
            <i class="fas fa-calendar-plus me-2"></i> Book Appointment
          </button>
          <p class="text-muted small mt-2">
            <i class="fas fa-money-bill-wave me-1"></i> Consultation Fee: ${doctor.consultation_fee}
          </p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="detail-section">
          <h5>Professional Information</h5>
          <p><strong>Specialty:</strong> ${doctor.specialty}</p>
          <p><strong>Qualifications:</strong> ${doctor.qualification}</p>
          <p><strong>Experience:</strong> ${doctor.experience}</p>
          <p><strong>Department:</strong> ${doctor.department}</p>
          <p><strong>Languages:</strong> ${doctor.languages}</p>
        </div>
        
        <div class="detail-section">
          <h5>Weekly Schedule</h5>
          <p class="mb-3">${doctor.opd_hours}</p>
          <table class="schedule-table">
            <thead>
              <tr>
                <th>Day</th>
                <th>Morning (9 AM - 1 PM)</th>
                <th>Afternoon (2 PM - 5 PM)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Monday</td>
                <td>${doctor.category === 'ent' || doctor.category === 'general' ? 'Available' : 'Not Available'}</td>
                <td>${doctor.category === 'ent' || doctor.category === 'general' ? 'Available' : 'Not Available'}</td>
              </tr>
              <tr>
                <td>Tuesday</td>
                <td>${doctor.category === 'dentist' || doctor.category === 'vog' ? 'Available' : 'Not Available'}</td>
                <td>${doctor.category === 'dentist' || doctor.category === 'vog' ? 'Available' : 'Not Available'}</td>
              </tr>
              <tr>
                <td>Wednesday</td>
                <td>${doctor.category === 'eyesurgeon' || doctor.category === 'vp' ? 'Available' : 'Not Available'}</td>
                <td>${doctor.category === 'eyesurgeon' || doctor.category === 'vp' ? 'Available' : 'Not Available'}</td>
              </tr>
              <tr>
                <td>Thursday</td>
                <td>${doctor.category === 'ent' || doctor.category === 'general' ? 'Available' : 'Not Available'}</td>
                <td>${doctor.category === 'ent' || doctor.category === 'general' ? 'Available' : 'Not Available'}</td>
              </tr>
              <tr>
                <td>Friday</td>
                <td>${doctor.category === 'dentist' || doctor.category === 'vog' ? 'Available' : 'Not Available'}</td>
                <td>${doctor.category === 'dentist' || doctor.category === 'vog' ? 'Available' : 'Not Available'}</td>
              </tr>
              <tr>
                <td>Saturday</td>
                <td>${doctor.category === 'eyesurgeon' || doctor.category === 'vp' ? 'Available' : 'Not Available'}</td>
                <td>Closed</td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="detail-section">
          <h5>Areas of Expertise</h5>
          <div class="specialties">
            ${doctor.specialties.map(s => `<span class="specialty-badge">${s}</span>`).join('')}
          </div>
        </div>
        
        <div class="detail-section">
          <h5>Booking Information</h5>
          <div class="alert alert-info">
            <i class="fas fa-info-circle me-2"></i>
            <strong>Note:</strong> Appointments can be booked up to 2 weeks in advance. Emergency appointments are available within 24 hours.
          </div>
        </div>
      </div>
    </div>
  `;
  
  // Set modal content
  document.getElementById('doctorModalTitle').textContent = doctor.name + ' - ' + doctor.specialty;
  document.getElementById('doctorModalBody').innerHTML = modalContent;
  
  // Show modal
  const modal = new bootstrap.Modal(document.getElementById('doctorModal'));
  modal.show();
}

// Book appointment with specific doctor
function bookAppointmentWithDoctor(doctorId, doctorName) {
  // Set the doctor in appointment form
  document.getElementById('selectedDoctorId').value = doctorId;
  const doctorSelect = document.getElementById('appDoctor');
  for (let option of doctorSelect.options) {
    if (option.value == doctorId) {
      option.selected = true;
      break;
    }
  }
  
  // Update time slots
  updateTimeSlots();
  
  // Show appointment modal
  const appointmentModal = new bootstrap.Modal(document.getElementById('appointmentModal'));
  appointmentModal.show();
}

// Update available time slots
function updateTimeSlots() {
  const doctorId = document.getElementById('appDoctor').value;
  const selectedDate = document.getElementById('appDate').value;
  const container = document.getElementById('timeSlotsContainer');
  
  if (!doctorId || !selectedDate) {
    container.innerHTML = '<div class="text-muted">Please select a doctor and date</div>';
    return;
  }
  
  const doctor = doctors.find(d => d.id == doctorId);
  if (!doctor) return;
  
  // Generate time slots based on doctor's category and day
  const date = new Date(selectedDate);
  const dayOfWeek = date.getDay(); // 0 = Sunday, 1 = Monday, etc.
  
  let slots = [];
  
  // Define slots based on doctor category and day
  if (doctor.category === 'ent' || doctor.category === 'general') {
    // ENT and General doctors: Mon, Thu
    if (dayOfWeek === 1 || dayOfWeek === 4) { // Monday (1), Thursday (4)
      slots = [
        { time: '09:00-10:00', available: true },
        { time: '10:00-11:00', available: true },
        { time: '11:00-12:00', available: true },
        { time: '14:00-15:00', available: true },
        { time: '15:00-16:00', available: true },
        { time: '16:00-17:00', available: false }
      ];
    }
  } else if (doctor.category === 'dentist' || doctor.category === 'vog') {
    // Dentist and VOG: Tue, Fri
    if (dayOfWeek === 2 || dayOfWeek === 5) { // Tuesday (2), Friday (5)
      slots = [
        { time: '09:30-10:30', available: true },
        { time: '10:30-11:30', available: true },
        { time: '11:30-12:30', available: true },
        { time: '14:30-15:30', available: true },
        { time: '15:30-16:30', available: true }
      ];
    }
  } else if (doctor.category === 'eyesurgeon' || doctor.category === 'vp') {
    // Eye Surgeon and VP: Wed, Sat
    if (dayOfWeek === 3 || dayOfWeek === 6) { // Wednesday (3), Saturday (6)
      slots = [
        { time: '10:00-11:00', available: true },
        { time: '11:00-12:00', available: true },
        { time: '13:00-14:00', available: true },
        { time: '14:00-15:00', available: true }
      ];
    }
  }
  
  // For demo, add some random unavailable slots
  slots.forEach(slot => {
    if (Math.random() > 0.7) { // 30% chance a slot is booked
      slot.available = false;
    }
  });
  
  if (slots.length === 0) {
    container.innerHTML = '<div class="text-danger">No available slots for this doctor on selected date</div>';
    return;
  }
  
  // Create slot buttons
  container.innerHTML = slots.map(slot => `
    <button type="button" class="time-slot ${slot.available ? '' : 'unavailable'} ${document.getElementById('selectedSlot').value === slot.time ? 'selected' : ''}"
            onclick="selectTimeSlot('${slot.time}', ${slot.available})"
            ${!slot.available ? 'disabled' : ''}>
      ${slot.time} ${slot.available ? '' : '(Booked)'}
    </button>
  `).join('');
}

// Select time slot
function selectTimeSlot(time, available) {
  if (!available) return;
  
  document.getElementById('selectedSlot').value = time;
  
  // Update UI
  document.querySelectorAll('.time-slot').forEach(btn => {
    btn.classList.remove('selected');
  });
  
  event.target.classList.add('selected');
}

// Handle appointment form submission
document.getElementById('appointmentForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  // Basic validation
  const phone = document.getElementById('patientPhone').value;
  const phoneRegex = /^[0-9]{10}$/;
  const selectedSlot = document.getElementById('selectedSlot').value;
  
  if (!phoneRegex.test(phone)) {
    alert('Please enter a valid 10-digit phone number');
    return;
  }
  
  if (!selectedSlot) {
    alert('Please select a time slot');
    return;
  }
  
  // Show success message
  alert('Appointment booked successfully! Confirmation will be sent via SMS and email.');
  
  // Close modal
  const modal = bootstrap.Modal.getInstance(document.getElementById('appointmentModal'));
  modal.hide();
  
  // Reset form
  this.reset();
  document.getElementById('appDate').value = new Date().toISOString().split('T')[0];
  document.getElementById('timeSlotsContainer').innerHTML = '<div class="text-muted">Select doctor and date to view available slots</div>';
});

// Calendar Implementation
document.addEventListener('DOMContentLoaded', function() {
  const calendarEl = document.getElementById('calendar');
  
  // Generate calendar events
  const events = [];
  const today = new Date();
  
  // Add events for next 30 days
  for (let i = 0; i < 30; i++) {
    const date = new Date();
    date.setDate(today.getDate() + i);
    const dateStr = date.toISOString().split('T')[0];
    const dayOfWeek = date.getDay();
    
    // Add events based on day of week
    doctors.forEach(doctor => {
      if (doctor.availability === 'available') {
        let slots = [];
        
        if (doctor.category === 'ent' || doctor.category === 'general') {
          if (dayOfWeek === 1 || dayOfWeek === 4) { // Mon, Thu
            slots = ['09:00', '11:00', '14:00', '15:00'];
          }
        } else if (doctor.category === 'dentist' || doctor.category === 'vog') {
          if (dayOfWeek === 2 || dayOfWeek === 5) { // Tue, Fri
            slots = ['09:30', '11:30', '14:30', '15:30'];
          }
        } else if (doctor.category === 'eyesurgeon' || doctor.category === 'vp') {
          if (dayOfWeek === 3 || dayOfWeek === 6) { // Wed, Sat
            slots = ['10:00', '11:00', '13:00', '14:00'];
          }
        }
        
        slots.forEach(slot => {
          // Randomly mark some slots as booked
          const isBooked = Math.random() > 0.7;
          
          events.push({
            id: `event-${doctor.id}-${dateStr}-${slot}`,
            title: `${doctor.name.split(' ')[0]} - ${slot}`,
            start: `${dateStr}T${slot}:00`,
            end: `${dateStr}T${addHours(slot, 1)}:00`,
            color: isBooked ? '#6c757d' : getEventColor(doctor.category, slot),
            textColor: 'white',
            extendedProps: {
              doctorId: doctor.id,
              doctorName: doctor.name,
              specialty: doctor.category,
              available: !isBooked,
              timeSlot: `${slot}-${addHours(slot, 1)}`
            }
          });
        });
      }
    });
  }
  
  // Initialize calendar
  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay'
    },
    events: events,
    eventClick: function(info) {
      const event = info.event;
      if (event.extendedProps.available) {
        const doctor = doctors.find(d => d.id == event.extendedProps.doctorId);
        if (doctor) {
          bookAppointmentWithDoctor(doctor.id, doctor.name);
          document.getElementById('selectedSlot').value = event.extendedProps.timeSlot;
          document.getElementById('appDate').value = event.start.toISOString().split('T')[0];
          updateTimeSlots();
          
          // Select the time slot
          setTimeout(() => {
            document.querySelectorAll('.time-slot').forEach(btn => {
              if (btn.textContent.includes(event.extendedProps.timeSlot)) {
                btn.click();
              }
            });
          }, 100);
        }
      } else {
        alert('This slot is already booked. Please select another time.');
      }
    },
    eventMouseEnter: function(info) {
      const event = info.event;
      const tooltip = `${event.extendedProps.doctorName}\n${event.extendedProps.timeSlot}\n${event.extendedProps.available ? 'Available' : 'Booked'}`;
      info.el.title = tooltip;
    }
  });
  
  calendar.render();
  
  // Filter calendar events
  window.filterCalendarEvents = function() {
    const doctorFilter = document.getElementById('doctorFilterCalendar').value;
    const specialtyFilter = document.getElementById('specialtyFilterCalendar').value;
    
    calendar.removeAllEvents();
    
    const filteredEvents = events.filter(event => {
      const matchesDoctor = doctorFilter === 'all' || `doctor-${event.extendedProps.doctorId}` === doctorFilter;
      const matchesSpecialty = specialtyFilter === 'all' || event.extendedProps.specialty === specialtyFilter;
      return matchesDoctor && matchesSpecialty;
    });
    
    filteredEvents.forEach(event => calendar.addEvent(event));
  };
});

// Helper functions
function addHours(time, hours) {
  const [hour, minute] = time.split(':').map(Number);
  let newHour = hour + hours;
  return `${newHour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}`;
}

function getEventColor(category, time) {
  const hour = parseInt(time.split(':')[0]);
  
  // Base color by category
  let color;
  switch(category) {
    case 'ent': color = '#9b59b6'; break;
    case 'dentist': color = '#3498db'; break;
    case 'eyesurgeon': color = '#e74c3c'; break;
    case 'vog': color = '#2ecc71'; break;
    case 'vp': color = '#f39c12'; break;
    case 'general': color = '#0a3d62'; break;
    default: color = '#1e90ff';
  }
  
  // Adjust shade based on time of day
  if (hour < 12) {
    return color; // Morning - original color
  } else if (hour < 15) {
    return adjustColor(color, 20); // Afternoon - lighter
  } else {
    return adjustColor(color, -20); // Evening - darker
  }
}

function adjustColor(color, amount) {
  const hex = color.replace('#', '');
  const num = parseInt(hex, 16);
  const r = Math.max(0, Math.min(255, (num >> 16) + amount));
  const g = Math.max(0, Math.min(255, ((num >> 8) & 0x00FF) + amount));
  const b = Math.max(0, Math.min(255, (num & 0x0000FF) + amount));
  return `#${(b | (g << 8) | (r << 16)).toString(16).padStart(6, '0')}`;
}
</script>

</body>
</html>
<?php include 'footer.php'; ?>