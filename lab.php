<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laboratory Services | CareWell Medical Center</title>

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
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: var(--light);
  color: #333;
  padding-top: 80px;
}

/* NAVBAR */
.navbar-brand {
  font-weight: 700;
  color: var(--primary) !important;
}

/* HERO */
.lab-hero {
  background: linear-gradient(rgba(10, 61, 98, 0.85), rgba(10, 61, 98, 0.85)),
              url('https://images.unsplash.com/photo-1559757148-5c350d0d3c56') center/cover;
  color: white;
  padding: 100px 20px;
  border-radius: 0 0 40px 40px;
  margin-bottom: 60px;
}

/* SECTION TITLE */
.section-title {
  color: var(--primary);
  font-weight: 700;
  position: relative;
  display: inline-block;
  margin-bottom: 30px;
}

.section-title::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 60px;
  height: 4px;
  background: var(--secondary);
  border-radius: 2px;
}

/* SERVICE CARD */
.service-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  height: 100%;
  transition: all 0.3s ease;
  border: none;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  overflow: hidden;
  position: relative;
}

.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 5px;
  height: 100%;
  background: var(--secondary);
  transition: width 0.3s ease;
}

.service-card:hover::before {
  width: 8px;
}

.service-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, var(--secondary), var(--accent));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
  color: white;
  font-size: 32px;
}

/* TEST LIST */
.test-item {
  background: white;
  border-radius: 15px;
  padding: 20px;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
  transition: all 0.3s ease;
  border-left: 4px solid var(--secondary);
}

.test-item:hover {
  transform: translateX(5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.test-icon {
  width: 50px;
  height: 50px;
  background: #eef5ff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--primary);
  margin-right: 20px;
  font-size: 20px;
}

.test-price {
  background: linear-gradient(135deg, var(--secondary), var(--accent));
  color: white;
  padding: 5px 15px;
  border-radius: 20px;
  font-weight: 600;
  font-size: 14px;
  min-width: 100px;
  text-align: center;
}

/* PROCESS STEPS */
.process-step {
  text-align: center;
  padding: 30px 20px;
  background: white;
  border-radius: 20px;
  transition: all 0.3s ease;
}

.process-step:hover {
  transform: scale(1.05);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.step-number {
  width: 60px;
  height: 60px;
  background: var(--primary);
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  font-weight: bold;
  margin: 0 auto 20px;
}

/* STATS */
.stat-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  text-align: center;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.stat-number {
  font-size: 48px;
  font-weight: 700;
  color: var(--primary);
  margin-bottom: 10px;
}

/* CTA */
.cta-section {
  background: linear-gradient(135deg, var(--primary), var(--secondary));
  color: white;
  padding: 80px 20px;
  border-radius: 40px;
  margin: 80px 0;
}

/* MODAL STYLES */
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

/* RESPONSIVE */
@media (max-width: 768px) {
  body {
    padding-top: 70px;
  }
  
  .lab-hero {
    padding: 70px 20px;
    border-radius: 0 0 30px 30px;
  }
  
  .test-price {
    min-width: 80px;
    font-size: 12px;
    padding: 4px 10px;
  }
}

/* TEST ITEM CONTENT */
.test-content {
  flex: 1;
  margin-right: 15px;
}

.test-item-row {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  width: 100%;
}
</style>
</head>
<body>

<!-- HERO SECTION -->
<section class="lab-hero text-center">
  <div class="container">
    <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Advanced Laboratory Services</h1>
    <p class="lead mb-4" data-aos="fade-up" data-aos-delay="150">
      Precision diagnostics with state-of-the-art technology and expert pathologists
    </p>
    <a href="#services" class="btn btn-light btn-lg px-5" data-aos="zoom-in">
      Explore Services <i class="fas fa-arrow-down ms-2"></i>
    </a>
  </div>
</section>

<!-- MAIN CONTENT -->
<div class="container">
  
  <!-- SERVICES SECTION -->
  <section id="services" class="mb-5">
    <h2 class="section-title" data-aos="fade-up">Our Laboratory Services</h2>
    <p class="text-muted mb-5" data-aos="fade-up" data-aos-delay="100">
      Comprehensive diagnostic solutions for accurate health assessments
    </p>
    
    <div class="row g-4">
      <div class="col-md-6 col-lg-4" data-aos="zoom-in">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-flask"></i>
          </div>
          <h4 class="mb-3 text-primary">Clinical Chemistry</h4>
          <p class="text-muted">Comprehensive blood chemistry analysis including lipid profile, liver function, and renal function tests.</p>
          <ul class="list-unstyled mt-3">
            <li><i class="fas fa-check text-success me-2"></i> Automated analyzers</li>
            <li><i class="fas fa-check text-success me-2"></i> Same-day results</li>
            <li><i class="fas fa-check text-success me-2"></i> ISO certified</li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-microscope"></i>
          </div>
          <h4 class="mb-3 text-primary">Hematology</h4>
          <p class="text-muted">Complete blood count, coagulation studies, and specialized hematological investigations.</p>
          <ul class="list-unstyled mt-3">
            <li><i class="fas fa-check text-success me-2"></i> 5-part differential</li>
            <li><i class="fas fa-check text-success me-2"></i> Automated cell counters</li>
            <li><i class="fas fa-check text-success me-2"></i> Expert pathologists</li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-card">
          <div class="service-icon">
            <i class="fas fa-dna"></i>
          </div>
          <h4 class="mb-3 text-primary">Molecular Diagnostics</h4>
          <p class="text-muted">PCR-based testing, genetic screening, and advanced molecular pathology services.</p>
          <ul class="list-unstyled mt-3">
            <li><i class="fas fa-check text-success me-2"></i> Real-time PCR</li>
            <li><i class="fas fa-check text-success me-2"></i> Genetic counseling</li>
            <li><i class="fas fa-check text-success me-2"></i> NGS available</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <!-- COMMON TESTS -->
  <section class="mb-5">
    <h2 class="section-title" data-aos="fade-up">Common Diagnostic Tests</h2>
    <p class="text-muted mb-4" data-aos="fade-up" data-aos-delay="100">Quick and accurate results for routine health checks (Prices in LKR)</p>
    
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="test-item">
          <div class="test-item-row">
            <div class="test-content">
              <div class="d-flex align-items-center mb-2">
                <div class="test-icon">
                  <i class="fas fa-tint"></i>
                </div>
                <div>
                  <h5 class="mb-0">Complete Blood Count (CBC)</h5>
                </div>
              </div>
              <p class="text-muted mb-0">Measures different components of blood including RBC, WBC, and platelets.</p>
            </div>
            <div class="test-price">Rs. 1,200</div>
          </div>
        </div>
        
        <div class="test-item">
          <div class="test-item-row">
            <div class="test-content">
              <div class="d-flex align-items-center mb-2">
                <div class="test-icon">
                  <i class="fas fa-heartbeat"></i>
                </div>
                <div>
                  <h5 class="mb-0">Lipid Profile</h5>
                </div>
              </div>
              <p class="text-muted mb-0">Cholesterol, triglycerides, HDL, and LDL measurements for heart health.</p>
            </div>
            <div class="test-price">Rs. 1,800</div>
          </div>
        </div>
        
        <div class="test-item">
          <div class="test-item-row">
            <div class="test-content">
              <div class="d-flex align-items-center mb-2">
                <div class="test-icon">
                  <i class="fas fa-kidneys"></i>
                </div>
                <div>
                  <h5 class="mb-0">Renal Function Test</h5>
                </div>
              </div>
              <p class="text-muted mb-0">Kidney function assessment through creatinine, urea, and electrolyte analysis.</p>
            </div>
            <div class="test-price">Rs. 2,500</div>
          </div>
        </div>
        
        <div class="test-item">
          <div class="test-item-row">
            <div class="test-content">
              <div class="d-flex align-items-center mb-2">
                <div class="test-icon">
                  <i class="fas fa-lungs"></i>
                </div>
                <div>
                  <h5 class="mb-0">CRP (C-Reactive Protein)</h5>
                </div>
              </div>
              <p class="text-muted mb-0">Measures inflammation levels in the body.</p>
            </div>
            <div class="test-price">Rs. 1,500</div>
          </div>
        </div>
        
        <div class="test-item">
          <div class="test-item-row">
            <div class="test-content">
              <div class="d-flex align-items-center mb-2">
                <div class="test-icon">
                  <i class="fas fa-syringe"></i>
                </div>
                <div>
                  <h5 class="mb-0">ESR (Erythrocyte Sedimentation Rate)</h5>
                </div>
              </div>
              <p class="text-muted mb-0">Measures inflammation and infection in the body.</p>
            </div>
            <div class="test-price">Rs. 800</div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-aos="fade-left">
        <div class="test-item">
          <div class="test-item-row">
            <div class="test-content">
              <div class="d-flex align-items-center mb-2">
                <div class="test-icon">
                  <i class="fas fa-liver"></i>
                </div>
                <div>
                  <h5 class="mb-0">Liver Function Test</h5>
                </div>
              </div>
              <p class="text-muted mb-0">Enzymes, proteins, and bilirubin tests to evaluate liver health.</p>
            </div>
            <div class="test-price">Rs. 2,200</div>
          </div>
        </div>
        
        <div class="test-item">
          <div class="test-item-row">
            <div class="test-content">
              <div class="d-flex align-items-center mb-2">
                <div class="test-icon">
                  <i class="fas fa-vial"></i>
                </div>
                <div>
                  <h5 class="mb-0">Blood Glucose Tests</h5>
                </div>
              </div>
              <p class="text-muted mb-0">Fasting and post-meal glucose, HbA1c for diabetes monitoring.</p>
            </div>
            <div class="test-price">Rs. 900</div>
          </div>
        </div>
        
        <div class="test-item">
          <div class="test-item-row">
            <div class="test-content">
              <div class="d-flex align-items-center mb-2">
                <div class="test-icon">
                  <i class="fas fa-virus"></i>
                </div>
                <div>
                  <h5 class="mb-0">Thyroid Profile (TSH, T3, T4)</h5>
                </div>
              </div>
              <p class="text-muted mb-0">TSH, T3, T4 measurements to assess thyroid gland function.</p>
            </div>
            <div class="test-price">Rs. 2,800</div>
          </div>
        </div>
        
        <div class="test-item">
          <div class="test-item-row">
            <div class="test-content">
              <div class="d-flex align-items-center mb-2">
                <div class="test-icon">
                  <i class="fas fa-urine"></i>
                </div>
                <div>
                  <h5 class="mb-0">Urine Routine Examination</h5>
                </div>
              </div>
              <p class="text-muted mb-0">Complete analysis of urine for various health indicators.</p>
            </div>
            <div class="test-price">Rs. 750</div>
          </div>
        </div>
        
        <div class="test-item">
          <div class="test-item-row">
            <div class="test-content">
              <div class="d-flex align-items-center mb-2">
                <div class="test-icon">
                  <i class="fas fa-dna"></i>
                </div>
                <div>
                  <h5 class="mb-0">Vitamin D Test</h5>
                </div>
              </div>
              <p class="text-muted mb-0">Measures Vitamin D levels in the blood.</p>
            </div>
            <div class="test-price">Rs. 3,500</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- PROCESS FLOW -->
  <section class="mb-5">
    <h2 class="section-title" data-aos="fade-up">Our Testing Process</h2>
    <div class="row g-4 mt-4">
      <div class="col-md-6 col-lg-3" data-aos="zoom-in">
        <div class="process-step">
          <div class="step-number">1</div>
          <h5 class="mb-3">Sample Collection</h5>
          <p class="text-muted">Sterile and painless blood/urine collection by trained phlebotomists</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="process-step">
          <div class="step-number">2</div>
          <h5 class="mb-3">Sample Processing</h5>
          <p class="text-muted">Automated processing with barcode tracking for zero errors</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
        <div class="process-step">
          <div class="step-number">3</div>
          <h5 class="mb-3">Analysis</h5>
          <p class="text-muted">State-of-the-art analyzers with quality control at every step</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
        <div class="process-step">
          <div class="step-number">4</div>
          <h5 class="mb-3">Report Delivery</h5>
          <p class="text-muted">Digital/print reports with expert interpretation within 24 hours</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- STATS -->
  <section class="mb-5">
    <div class="row g-4">
      <div class="col-md-3 col-6" data-aos="fade-up">
        <div class="stat-card">
          <div class="stat-number">500+</div>
          <h6>Tests Available</h6>
        </div>
      </div>
      
      <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
        <div class="stat-card">
          <div class="stat-number">24</div>
          <h6>Hour Turnaround</h6>
        </div>
      </div>
      
      <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
        <div class="stat-card">
          <div class="stat-number">99.8%</div>
          <h6>Accuracy Rate</h6>
        </div>
      </div>
      
      <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
        <div class="stat-card">
          <div class="stat-number">50k+</div>
          <h6>Samples Processed</h6>
        </div>
      </div>
    </div>
  </section>
  
  <!-- CTA -->
  <section>
    <div class="cta-section text-center">
      <h2 class="display-5 fw-bold mb-4" data-aos="fade-up">Ready for Your Tests?</h2>
      <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">
        Walk-ins welcome or book an appointment for sample collection
      </p>
      <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
        <button type="button" class="btn btn-light btn-lg px-5" data-bs-toggle="modal" data-bs-target="#bookingModal" data-aos="zoom-in">
          <i class="fas fa-calendar-check me-2"></i> Book Appointment
        </button>
        <a href="tel:+94771234567" class="btn btn-outline-light btn-lg px-5" data-aos="zoom-in" data-aos-delay="150">
          <i class="fas fa-phone me-2"></i> Call Now
        </a>
      </div>
    </div>
  </section>
  
</div>

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="bookingModalLabel"><i class="fas fa-calendar-check me-2"></i> Book Lab Appointment</h3>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="bookingForm" method="POST" action="book_lab.php">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="fullName" class="form-label">Full Name *</label>
              <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
            <div class="col-md-6">
              <label for="nic" class="form-label">NIC Number *</label>
              <input type="text" class="form-control" id="nic" name="nic" required>
            </div>
            
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone Number *</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            
            <div class="col-md-6">
              <label for="dob" class="form-label">Date of Birth *</label>
              <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="col-md-6">
              <label for="gender" class="form-label">Gender *</label>
              <select class="form-select" id="gender" name="gender" required>
                <option value="" selected disabled>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
            
            <div class="col-md-6">
              <label for="appointmentDate" class="form-label">Preferred Date *</label>
              <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required min="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="col-md-6">
              <label for="appointmentTime" class="form-label">Preferred Time *</label>
              <select class="form-select" id="appointmentTime" name="appointmentTime" required>
                <option value="" selected disabled>Select Time Slot</option>
                <option value="08:00-09:00">08:00 AM - 09:00 AM</option>
                <option value="09:00-10:00">09:00 AM - 10:00 AM</option>
                <option value="10:00-11:00">10:00 AM - 11:00 AM</option>
                <option value="11:00-12:00">11:00 AM - 12:00 PM</option>
                <option value="13:00-14:00">01:00 PM - 02:00 PM</option>
                <option value="14:00-15:00">02:00 PM - 03:00 PM</option>
                <option value="15:00-16:00">03:00 PM - 04:00 PM</option>
              </select>
            </div>
            
            <div class="col-12">
              <label for="tests" class="form-label">Tests Required (Select all that apply)</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="CBC" id="testCBC" name="tests[]">
                    <label class="form-check-label" for="testCBC">Complete Blood Count (CBC) - Rs. 1,200</label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="Lipid Profile" id="testLipid" name="tests[]">
                    <label class="form-check-label" for="testLipid">Lipid Profile - Rs. 1,800</label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="Liver Function" id="testLiver" name="tests[]">
                    <label class="form-check-label" for="testLiver">Liver Function Test - Rs. 2,200</label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="Renal Function" id="testRenal" name="tests[]">
                    <label class="form-check-label" for="testRenal">Renal Function Test - Rs. 2,500</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="Thyroid Profile" id="testThyroid" name="tests[]">
                    <label class="form-check-label" for="testThyroid">Thyroid Profile - Rs. 2,800</label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="Blood Glucose" id="testGlucose" name="tests[]">
                    <label class="form-check-label" for="testGlucose">Blood Glucose Tests - Rs. 900</label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="Other" id="testOther" name="tests[]">
                    <label class="form-check-label" for="testOther">Other Tests (Specify in notes)</label>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-12">
              <label for="notes" class="form-label">Additional Notes</label>
              <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Any special requirements or additional tests needed..."></textarea>
            </div>
            
            <div class="col-12 mt-4">
              <button type="submit" class="btn btn-submit btn-lg">
                <i class="fas fa-paper-plane me-2"></i> Submit Appointment Request
              </button>
              <p class="text-muted mt-3 small">* We will contact you within 2 hours to confirm your appointment.</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
// Initialize AOS
AOS.init({duration: 1000, once: true});

// Set minimum date for appointment (today)
document.getElementById('appointmentDate').min = new Date().toISOString().split('T')[0];

// Form validation and submission
document.getElementById('bookingForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  // Basic validation
  const phone = document.getElementById('phone').value;
  const phoneRegex = /^[0-9]{10}$/;
  
  if (!phoneRegex.test(phone)) {
    alert('Please enter a valid 10-digit phone number');
    return;
  }
  
  // Show success message
  alert('Appointment request submitted successfully! We will contact you shortly to confirm.');
  
  // In a real application, you would submit the form data to a server
  // For now, we'll just close the modal
  const modal = bootstrap.Modal.getInstance(document.getElementById('bookingModal'));
  modal.hide();
  
  // Reset form
  this.reset();
});

// Set default time slots based on current date
function updateTimeSlots() {
  const dateInput = document.getElementById('appointmentDate');
  const timeSelect = document.getElementById('appointmentTime');
  
  // Enable all time slots by default
  Array.from(timeSelect.options).forEach(option => {
    if (option.value) {
      option.disabled = false;
    }
  });
  
  // In a real application, you might disable already booked slots
  // This would require AJAX call to check availability
}
</script>

</body>
</html>
<?php include 'footer.php'; ?>