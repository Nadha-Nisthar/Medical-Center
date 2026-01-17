<?php
// Set page title
$pageTitle = "Contact Us | CareWell Medical Center";

// Include header
require_once 'header.php';

// Contact form processing
$message = "";
$msgType = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name  = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $msg   = trim($_POST['message'] ?? '');
    
    // Simple validation
    if (empty($name) || empty($phone)) {
        $message = "Please fill all required fields.";
        $msgType = "danger";
    } elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
        $message = "Please enter a valid 10-digit phone number.";
        $msgType = "danger";
    } else {
        // Sanitize inputs
        $safeName = htmlspecialchars($name);
        $safePhone = htmlspecialchars($phone);
        $safeEmail = htmlspecialchars($email);
        $safeService = htmlspecialchars($service);
        $safeMsg = htmlspecialchars($msg);
        
        // Save to session for demo (in real app, save to database)
        $_SESSION['last_contact'] = [
            'name' => $safeName,
            'phone' => $safePhone,
            'email' => $safeEmail,
            'service' => $safeService,
            'message' => $safeMsg,
            'time' => date('Y-m-d H:i:s')
        ];
        
        // Generate reference number
        $refNumber = "CW" . date('Ymd') . rand(1000, 9999);
        
        $message = "Thank you <strong>$safeName</strong>! Your inquiry (#$refNumber) has been received. We'll contact you within 2 hours.";
        $msgType = "success";
        
        // Clear form after successful submission
        $_POST = array();
    }
}
?>

<!-- Page Specific CSS -->
<style>
/* Page Specific Styles */
.hero-contact {
  min-height: 85vh;
  display: flex;
  align-items: center;
  background: linear-gradient(135deg, 
              rgba(10, 61, 98, 0.95) 0%, 
              rgba(4, 30, 50, 0.9) 50%,
              rgba(10, 61, 98, 0.85) 100%),
              url('https://images.unsplash.com/photo-1586773860418-dc22f8b874bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover fixed;
  color: white;
  position: relative;
  overflow: hidden;
  padding-top: 50px; /* Reduced from 100px */
  margin-top: -80px; /* Added to move it up further */
}

.hero-content {
  position: relative;
  z-index: 2;
  animation: contentFadeIn 1.5s ease-out;
}

@keyframes contentFadeIn {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.hero-title {
  font-family: 'Montserrat', sans-serif;
  font-weight: 900;
  font-size: 4.5rem;
  line-height: 1.1;
  margin-bottom: 1.5rem;
  text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
  background: linear-gradient(45deg, #ffffff, #e6f7ff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.hero-subtitle {
  font-size: 1.4rem;
  opacity: 0.9;
  max-width: 700px;
  margin: 0 auto 3rem;
  line-height: 1.6;
  animation: subtitleFadeIn 2s ease-out 0.5s both;
}

@keyframes subtitleFadeIn {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 0.9;
    transform: translateY(0);
  }
}

/* Hero Buttons */
.hero-buttons {
  animation: buttonsSlideIn 1s ease-out 1s both;
}

@keyframes buttonsSlideIn {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.btn-hero {
  padding: 15px 40px;
  font-size: 1.2rem;
  font-weight: 600;
  border-radius: 15px;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  position: relative;
  overflow: hidden;
}

.btn-hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  transition: left 0.5s;
}

.btn-hero:hover::before {
  left: 100%;
}

.btn-hero:hover {
  transform: translateY(-5px) scale(1.05);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}

.btn-hero-primary {
  background: linear-gradient(45deg, #1e90ff, #00d2d3);
  border: none;
  color: white;
}

.btn-hero-outline {
  background: transparent;
  border: 2px solid white;
  color: white;
}

.btn-hero-outline:hover {
  background: white;
  color: #0a3d62;
  border-color: white;
}

/* Scrolling Indicator */
.scroll-indicator {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  animation: bounce 2s infinite;
  z-index: 2;
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    transform: translateX(-50%) translateY(0);
  }
  40% {
    transform: translateX(-50%) translateY(-10px);
  }
  60% {
    transform: translateX(-50%) translateY(-5px);
  }
}

.scroll-indicator i {
  font-size: 2rem;
  color: white;
  opacity: 0.8;
}

/* CONTACT CARDS */
.contact-card {
  background: white;
  border-radius: 25px;
  padding: 40px 30px;
  height: 100%;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  border: 1px solid rgba(0, 0, 0, 0.05);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
  position: relative;
  overflow: hidden;
}

.contact-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px;
  background: linear-gradient(90deg, var(--primary), var(--secondary));
}

.contact-card:hover {
  transform: translateY(-15px);
  box-shadow: 0 30px 50px rgba(0, 0, 0, 0.15);
}

.contact-icon {
  width: 100px;
  height: 100px;
  margin: 0 auto 25px;
  background: linear-gradient(135deg, #ffffff, #f0f8ff);
  border-radius: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 3rem;
  color: var(--primary);
  box-shadow: 0 20px 40px rgba(10, 61, 98, 0.1);
  transition: all 0.5s ease;
}

.contact-card:hover .contact-icon {
  background: linear-gradient(135deg, var(--primary), var(--secondary));
  color: white;
  transform: scale(1.1);
}

.contact-card h4 {
  font-weight: 700;
  margin-bottom: 15px;
  color: var(--dark);
  font-size: 1.5rem;
}

.contact-card p {
  color: #666;
  margin-bottom: 20px;
  font-size: 1rem;
  line-height: 1.6;
}

.contact-action {
  color: var(--secondary);
  font-weight: 600;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  transition: all 0.3s ease;
  font-size: 1.1rem;
  padding: 8px 16px;
  border-radius: 10px;
  background: rgba(30, 144, 255, 0.1);
}

.contact-action:hover {
  color: var(--primary);
  gap: 15px;
  background: rgba(30, 144, 255, 0.2);
  transform: translateX(5px);
}

/* TIMELINE SECTION */
.timeline-section {
  background: linear-gradient(135deg, #0a3d62 0%, #1a2c3d 100%);
  color: white;
  position: relative;
  overflow: hidden;
  padding: 100px 0;
}

.timeline {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
  padding: 40px 0;
}

.timeline::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 4px;
  background: linear-gradient(to bottom, transparent, var(--secondary), var(--accent), transparent);
  transform: translateX(-50%);
  border-radius: 2px;
}

.timeline-item {
  margin: 60px 0;
  position: relative;
  width: calc(50% - 50px);
  opacity: 0;
  transform: translateY(50px);
  transition: all 0.6s ease;
}

.timeline-item.visible {
  opacity: 1;
  transform: translateY(0);
}

.timeline-item:nth-child(odd) {
  left: 0;
}

.timeline-item:nth-child(even) {
  left: calc(50% + 50px);
}

.timeline-content {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  padding: 30px;
  border-radius: 20px;
  position: relative;
  border: 1px solid rgba(255, 255, 255, 0.2);
  transition: all 0.3s ease;
}

.timeline-content:hover {
  transform: translateY(-10px);
  border-color: var(--secondary);
}

.timeline-marker {
  position: absolute;
  top: 50%;
  width: 24px;
  height: 24px;
  background: var(--secondary);
  border: 4px solid white;
  border-radius: 50%;
  transform: translateY(-50%);
  z-index: 2;
}

.timeline-item:nth-child(odd) .timeline-marker {
  right: -62px;
}

.timeline-item:nth-child(even) .timeline-marker {
  left: -62px;
}

/* CONTACT FORM */
.contact-form-section {
  background: white;
  border-radius: 40px;
  margin: -50px auto 0;
  position: relative;
  z-index: 10;
  box-shadow: 0 40px 80px rgba(0, 0, 0, 0.1);
  animation: formSectionAppear 1s ease-out 0.5s both;
}

@keyframes formSectionAppear {
  from {
    opacity: 0;
    transform: translateY(100px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.form-card {
  background: white;
  border-radius: 30px;
  padding: 50px;
  border: 1px solid rgba(0, 0, 0, 0.05);
}

.form-title {
  font-family: 'Montserrat', sans-serif;
  font-weight: 800;
  font-size: 2.5rem;
  background: linear-gradient(45deg, var(--primary), var(--secondary));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: 15px;
  animation: titleSlideIn 1s ease-out;
}

@keyframes titleSlideIn {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.form-control, .form-select {
  border: 2px solid #e0e6ef;
  border-radius: 15px;
  padding: 18px 25px;
  font-size: 1.1rem;
  transition: all 0.3s ease;
  margin-bottom: 25px;
  background: #f8fbff;
}

.form-control:focus, .form-select:focus {
  border-color: var(--secondary);
  box-shadow: 0 0 0 3px rgba(30, 144, 255, 0.15);
  background: white;
}

.form-label {
  font-weight: 600;
  color: var(--dark);
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 1.1rem;
}

.submit-btn {
  background: linear-gradient(135deg, var(--primary), var(--secondary));
  color: white;
  border: none;
  border-radius: 15px;
  padding: 20px 50px;
  font-weight: 700;
  font-size: 1.2rem;
  width: 100%;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.submit-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(30, 144, 255, 0.3);
}

/* MAP SECTION */
.map-container {
  border-radius: 30px;
  overflow: hidden;
  box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1);
  position: relative;
}

.map-overlay {
  position: absolute;
  bottom: 30px;
  left: 30px;
  right: 30px;
  background: rgba(255, 255, 255, 0.98);
  backdrop-filter: blur(20px);
  border-radius: 20px;
  padding: 25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  animation: overlaySlideIn 1s ease-out;
}

@keyframes overlaySlideIn {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* WORKING HOURS CARDS */
.hour-card {
  background: white;
  border-radius: 20px;
  padding: 40px 30px;
  height: 100%;
  transition: all 0.3s ease;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  position: relative;
  overflow: hidden;
}

.hour-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.hour-card h4 {
  color: var(--primary);
  font-weight: 700;
  font-size: 1.8rem;
  margin-bottom: 15px;
}

.hour-card h5 {
  color: var(--dark);
  font-size: 1.4rem;
  margin-bottom: 10px;
}

.hour-card p {
  color: #666;
  font-size: 1rem;
}

/* Custom Alert */
.custom-alert {
  border-radius: 15px;
  border: none;
  background: linear-gradient(135deg, var(--light), white);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  animation: slideIn 0.5s ease;
}

@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* RESPONSIVE DESIGN */
@media (max-width: 992px) {
  .hero-title {
    font-size: 3.5rem;
  }
  .timeline::before {
    left: 30px;
  }
  .timeline-item {
    width: calc(100% - 80px);
    left: 80px !important;
  }
  .timeline-item:nth-child(odd) .timeline-marker,
  .timeline-item:nth-child(even) .timeline-marker {
    left: -50px;
    right: auto;
  }
}

@media (max-width: 768px) {
  .hero-contact {
    min-height: 80vh;
    padding-top: 80px; /* Adjusted for mobile */
    margin-top: -60px; /* Adjusted for mobile */
  }
  
  .hero-title {
    font-size: 2.8rem;
  }
  
  .hero-subtitle {
    font-size: 1.2rem;
    padding: 0 20px;
  }
  
  .contact-form-section {
    margin-top: 0;
    border-radius: 0;
  }
  
  .form-card {
    padding: 30px 20px;
  }
  
  .map-overlay {
    flex-direction: column;
    gap: 20px;
    text-align: center;
    left: 20px;
    right: 20px;
    bottom: 20px;
  }
}

@media (max-width: 576px) {
  .hero-title {
    font-size: 2.2rem;
  }
  
  .hero-subtitle {
    font-size: 1.1rem;
  }
  
  .btn-hero {
    padding: 12px 25px;
    font-size: 1rem;
    margin: 5px;
  }
}
</style>

<!-- HERO SECTION -->
<section class="hero-contact">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-10 mx-auto text-center hero-content">
        <h1 class="hero-title" id="typewriter-text">
          Connect with CareWell
        </h1>
        <p class="hero-subtitle">
          Your health is our priority. Reach out to us for exceptional medical care, 
          expert consultations, and comprehensive healthcare solutions. We're here 
          to support you on your journey to wellness.
        </p>
        
        <div class="hero-buttons d-flex gap-4 justify-content-center flex-wrap">
          <a href="#contact-form" class="btn btn-hero btn-hero-primary">
            <i class="fas fa-envelope me-2"></i>Send Message
          </a>
          <a href="tel:+94112345678" class="btn btn-hero btn-hero-outline">
            <i class="fas fa-phone me-2"></i>Call Now
          </a>
          <a href="#map" class="btn btn-hero btn-hero-outline">
            <i class="fas fa-map-marker-alt me-2"></i>Visit Us
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Scroll Indicator -->
  <div class="scroll-indicator">
    <i class="fas fa-chevron-down"></i>
  </div>
</section>

<!-- CONTACT INFO CARDS -->
<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
        <div class="contact-card">
          <div class="contact-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h4>Visit Our Center</h4>
          <p>123 Medical Street, Colombo 05, Sri Lanka</p>
          <a href="#map" class="contact-action">
            Get Directions <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-card">
          <div class="contact-icon">
            <i class="fas fa-phone-alt"></i>
          </div>
          <h4>Call Us</h4>
          <p>+94 11 234 5678<br>Emergency: +94 77 123 4567</p>
          <a href="tel:+94112345678" class="contact-action">
            Call Now <i class="fas fa-phone"></i>
          </a>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="contact-card">
          <div class="contact-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <h4>Email Us</h4>
          <p>info@carewell.lk<br>support@carewell.lk</p>
          <a href="mailto:info@carewell.lk" class="contact-action">
            Send Email <i class="fas fa-paper-plane"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS TIMELINE -->
<section class="timeline-section py-5">
  <div class="container">
    <h2 class="text-center mb-5" data-aos="fade-up">Our Contact Process</h2>
    <div class="timeline">
      <div class="timeline-item" data-aos="fade-right">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h4><i class="fas fa-comment-dots me-2"></i>Initial Contact</h4>
          <p>Reach out to us via phone, email, or our contact form. Our team will respond within 30 minutes during business hours.</p>
        </div>
      </div>
      <div class="timeline-item" data-aos="fade-left">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h4><i class="fas fa-user-md me-2"></i>Consultation</h4>
          <p>Our medical coordinators will understand your needs and guide you to the right specialist or service.</p>
        </div>
      </div>
      <div class="timeline-item" data-aos="fade-right">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h4><i class="fas fa-calendar-check me-2"></i>Appointment Scheduling</h4>
          <p>We'll help you book an appointment at your preferred date and time. Weekend and emergency slots available.</p>
        </div>
      </div>
      <div class="timeline-item" data-aos="fade-left">
        <div class="timeline-marker"></div>
        <div class="timeline-content">
          <h4><i class="fas fa-headset me-2"></i>Follow-up Support</h4>
          <p>Our team follows up to ensure you received quality care and addresses any additional concerns.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT FORM -->
<section class="py-5" id="contact-form">
  <div class="container">
    <div class="contact-form-section">
      <div class="row g-0">
        <div class="col-lg-6 p-5 d-flex align-items-center" data-aos="fade-right">
          <div>
            <h2 class="form-title">Send Us a Message</h2>
            <p class="form-subtitle">Fill out the form below and we'll get back to you within 2 hours.</p>
            
            <div class="mb-4">
              <div class="d-flex align-items-center mb-3">
                <div class="bg-primary rounded-circle p-2 me-3">
                  <i class="fas fa-check text-white"></i>
                </div>
                <span>Response within 2 hours</span>
              </div>
              <div class="d-flex align-items-center mb-3">
                <div class="bg-primary rounded-circle p-2 me-3">
                  <i class="fas fa-check text-white"></i>
                </div>
                <span>24/7 emergency support</span>
              </div>
              <div class="d-flex align-items-center">
                <div class="bg-primary rounded-circle p-2 me-3">
                  <i class="fas fa-check text-white"></i>
                </div>
                <span>Free consultation for first-time patients</span>
              </div>
            </div>
            
            <div class="alert alert-info custom-alert">
              <i class="fas fa-info-circle me-2"></i>
              <strong>Emergency?</strong> Call our 24/7 hotline: <a href="tel:+94771234567" class="alert-link">+94 77 123 4567</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 p-5" data-aos="fade-left">
          <div class="form-card">
            <?php if ($message): ?>
            <div class="alert alert-<?php echo $msgType; ?> custom-alert mb-4" role="alert">
              <div class="d-flex align-items-center">
                <i class="fas <?php echo $msgType == 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'; ?> me-3 fs-4"></i>
                <div><?php echo $message; ?></div>
              </div>
            </div>
            <?php endif; ?>
            
            <form method="POST" id="contactForm">
              <div class="row">
                <div class="col-md-6">
                  <label class="form-label">
                    <i class="fas fa-user text-primary"></i>
                    Full Name <span class="required">*</span>
                  </label>
                  <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label">
                    <i class="fas fa-phone text-primary"></i>
                    Phone Number <span class="required">*</span>
                  </label>
                  <input type="tel" class="form-control" name="phone" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" required pattern="[0-9]{10}" placeholder="10-digit number">
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <label class="form-label">
                    <i class="fas fa-envelope text-primary"></i>
                    Email Address
                  </label>
                  <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                </div>
                <div class="col-md-6">
                  <label class="form-label">
                    <i class="fas fa-stethoscope text-primary"></i>
                    Service Interested
                  </label>
                  <select class="form-select" name="service">
                    <option value="">Select a service</option>
                    <option value="xray" <?php echo ($_POST['service'] ?? '') == 'xray' ? 'selected' : ''; ?>>X-Ray</option>
                    <option value="ultrasound" <?php echo ($_POST['service'] ?? '') == 'ultrasound' ? 'selected' : ''; ?>>Ultrasound</option>
                    <option value="mri" <?php echo ($_POST['service'] ?? '') == 'mri' ? 'selected' : ''; ?>>MRI Scan</option>
                    <option value="ct" <?php echo ($_POST['service'] ?? '') == 'ct' ? 'selected' : ''; ?>>CT Scan</option>
                    <option value="blood" <?php echo ($_POST['service'] ?? '') == 'blood' ? 'selected' : ''; ?>>Blood Tests</option>
                    <option value="echo" <?php echo ($_POST['service'] ?? '') == 'echo' ? 'selected' : ''; ?>>Echocardiography</option>
                    <option value="consultation" <?php echo ($_POST['service'] ?? '') == 'consultation' ? 'selected' : ''; ?>>Medical Consultation</option>
                  </select>
                </div>
              </div>
              
              <div class="mb-4">
                <label class="form-label">
                  <i class="fas fa-comment-dots text-primary"></i>
                  Your Message
                </label>
                <textarea class="form-control" name="message" rows="4" placeholder="Tell us about your concerns or requirements..."><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
              </div>
              
              <button type="submit" class="submit-btn">
                <i class="fas fa-paper-plane me-2"></i>Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WORKING HOURS -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5" data-aos="fade-up">Working Hours</h2>
    <div class="row g-4">
      <?php
      $hours = [
        ['Mon - Sat', '8:00 AM - 8:00 PM', 'Regular Services'],
        ['Sunday', '9:00 AM - 1:00 PM', 'Limited Services'],
        ['Emergency', '24/7', 'Always Available'],
        ['Reports', 'Within 2-4 hours', 'Most Tests']
      ];
      foreach ($hours as $index => $hour): ?>
      <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
        <div class="hour-card text-center">
          <h4><?php echo $hour[0]; ?></h4>
          <h5><?php echo $hour[1]; ?></h5>
          <p class="mb-0"><?php echo $hour[2]; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MAP SECTION -->
<section class="py-5" id="map">
  <div class="container">
    <h2 class="text-center mb-5" data-aos="fade-up">Find Our Location</h2>
    <div class="map-container" data-aos="zoom-in">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.923123761417!2d79.86112397597595!3d6.927101319869219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259130d0f3f0d%3A0x29b7d7b83c2ccb7e!2sColombo!5e0!3m2!1sen!2slk!4v1693412345678!5m2!1sen!2slk"
        width="100%" 
        height="500" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
      <div class="map-overlay">
        <div class="map-info">
          <h5>CareWell Medical Center</h5>
          <p>123 Medical Street, Colombo 05, Sri Lanka</p>
        </div>
        <a href="https://maps.google.com/?q=CareWell+Medical+Center+Colombo" target="_blank" class="map-cta">
          <i class="fas fa-directions me-2"></i>Get Directions
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Page Specific JavaScript -->
<script>
// Typewriter effect for hero title
function typeWriterEffect() {
  const title = document.getElementById('typewriter-text');
  if (!title) return;
  
  const text = title.textContent;
  title.textContent = '';
  let i = 0;
  const speed = 50;
  
  function type() {
    if (i < text.length) {
      title.textContent += text.charAt(i);
      i++;
      setTimeout(type, speed);
    }
  }
  
  // Start typing after page load
  setTimeout(type, 1000);
}

// Timeline scroll animation
function animateTimeline() {
  const timelineItems = document.querySelectorAll('.timeline-item');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, {
    threshold: 0.2
  });
  
  timelineItems.forEach(item => observer.observe(item));
}

// Form validation with animation
function setupFormAnimations() {
  const form = document.getElementById('contactForm');
  if (!form) return;
  
  // Form submission animation
  form.addEventListener('submit', function(e) {
    const submitBtn = this.querySelector('.submit-btn');
    if (submitBtn) {
      submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
      submitBtn.disabled = true;
    }
  });
}

// Scroll indicator click handler
function setupScrollIndicator() {
  const indicator = document.querySelector('.scroll-indicator');
  if (!indicator) return;
  
  indicator.addEventListener('click', () => {
    window.scrollTo({
      top: window.innerHeight,
      behavior: 'smooth'
    });
  });
  
  // Hide on scroll
  window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
      indicator.style.opacity = '0';
      indicator.style.pointerEvents = 'none';
    } else {
      indicator.style.opacity = '1';
      indicator.style.pointerEvents = 'auto';
    }
  });
}

// Initialize all animations
document.addEventListener('DOMContentLoaded', function() {
  // Start typewriter effect
  typeWriterEffect();
  
  // Setup timeline animations
  animateTimeline();
  
  // Setup form animations
  setupFormAnimations();
  
  // Setup scroll indicator
  setupScrollIndicator();
  
  // Initialize AOS
  AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
    delay: 100,
    easing: 'ease-in-out',
    mirror: false
  });
});

// Real-time phone validation with animation
const phoneInput = document.querySelector('input[name="phone"]');
if (phoneInput) {
  phoneInput.addEventListener('input', function() {
    const value = this.value.replace(/\D/g, '');
    const parent = this.parentElement;
    
    if (value.length === 10) {
      parent.classList.remove('invalid');
      parent.classList.add('valid');
    } else if (value.length > 0) {
      parent.classList.remove('valid');
      parent.classList.add('invalid');
    } else {
      parent.classList.remove('valid', 'invalid');
    }
  });
  
  // Add validation styles
  const phoneStyle = document.createElement('style');
  phoneStyle.textContent = `
    .valid input {
      border-color: #28a745 !important;
    }
    
    .invalid input {
      border-color: #dc3545 !important;
    }
  `;
  document.head.appendChild(phoneStyle);
}
</script>

<?php
// Include footer
require_once 'footer.php';
?>