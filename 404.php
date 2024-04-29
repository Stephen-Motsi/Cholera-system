<?php
    session_start();
    // Check if the user is logged in
    if(isset($_SESSION['name'])) {
        // User is logged in
        $loggedIn = true;
    } else {
        // User is not logged in
        $loggedIn = false;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cholera Awareness</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Styles for Spinner -->
    <style>
        .spinner-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            z-index: 9999; /* Ensure it appears on top of other content */
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="spinner-overlay">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.php" class="dropdown-item">Feature</a>
                        <a href="team.php" class="dropdown-item">Our Doctor</a>
                        <a href="appointment.php" class="dropdown-item">Appointment</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        <a href="404.php" class="dropdown-item">Cholera Information</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <?php if($loggedIn): ?>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                <?php endif; ?>
                <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Talk To Specialist<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Cholera Information</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Cholera Information</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Symptoms Start -->
<section id="symptoms" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <h2 class="text-primary mb-4">Cholera Symptoms</h2>
        <p class="mb-4">Cholera can present with a spectrum of symptoms, varying in intensity. Common signs include:</p>
        <ul class="list-unstyled">
            <li><strong>Watery Diarrhea:</strong> Profuse, watery bowel movements are a characteristic symptom, leading to rapid fluid loss.</li>
            <li><strong>Vomiting:</strong> Persistent vomiting, contributing to further dehydration and electrolyte imbalance.</li>
            <li><strong>Rapid Heart Rate:</strong> Cholera may cause an elevated heart rate as the body attempts to compensate for fluid loss.</li>
            <li><strong>Dehydration:</strong> A critical consequence, leading to symptoms like thirst, dry mouth, and concentrated urine.</li>
            <li><strong>Low Blood Pressure:</strong> In severe cases, cholera can result in a drop in blood pressure, causing dizziness or shock.</li>
        </ul>
        <p class="mb-4">Prompt recognition of these symptoms is crucial for early intervention and effective treatment. If you suspect cholera or experience these signs, seek immediate medical attention.</p>
        <a href="symptoms.html" class="btn btn-primary">Learn More</a>
    </div>
</section>

    <!-- Symptoms End -->


    <!-- Causes Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <h2 class="display-4 text-primary mb-4">Understanding Cholera</h2>
            <p class="lead mb-4">Cholera is a highly infectious disease caused by the Vibrio cholerae bacterium. It is characterized by the sudden onset of severe watery diarrhea, leading to dehydration. The bacterium is often transmitted through the consumption of contaminated water and food, particularly in areas with poor sanitation and hygiene practices.</p>
            <p class="lead mb-4">Common symptoms of cholera include profuse diarrhea, vomiting, and abdominal cramps. In severe cases, the rapid loss of fluids can lead to dehydration and electrolyte imbalance, posing a serious threat to life. Cholera outbreaks are more prevalent in crowded and unsanitary conditions, making it a significant public health concern in many parts of the world.</p>
            <p class="lead mb-4">Preventive measures include access to clean water, proper sanitation, and hygiene education. Additionally, prompt medical attention and rehydration therapy are crucial in managing cholera cases. Understanding the causes, symptoms, and preventive strategies is essential in controlling the spread of this infectious disease.</p>
        </div>
    </div>
    <!-- Causes End -->


    <div class="container-fluid bg-light py-5">
        <div class="container">
            <h2 class="display-4 text-primary mb-4">Cholera Symptoms</h2>
            <p class="lead mb-4">Cholera can present with a spectrum of symptoms, varying in intensity. Common signs include:</p>
            <ul class="list-unstyled">
                <li><strong>Watery Diarrhea:</strong> Profuse, watery bowel movements are a characteristic symptom, leading to rapid fluid loss.</li>
                <li><strong>Vomiting:</strong> Persistent vomiting, contributing to further dehydration and electrolyte imbalance.</li>
                <li><strong>Rapid Heart Rate:</strong> Cholera may cause an elevated heart rate as the body attempts to compensate for fluid loss.</li>
                <li><strong>Dehydration:</strong> A critical consequence, leading to symptoms like thirst, dry mouth, and concentrated urine.</li>
                <li><strong>Low Blood Pressure:</strong> In severe cases, cholera can result in a drop in blood pressure, causing dizziness or shock.</li>
            </ul>
            <p class="lead mb-4">Prompt recognition of these symptoms is crucial for early intervention and effective treatment. If you suspect cholera or experience these signs, seek immediate medical attention.</p>
        </div>
    </div>
    
    

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <h2 class="text-primary mb-4">Cholera Treatment</h2>
            <p class="mb-4">Effectively managing cholera involves a combination of supportive care and medical intervention. Key components of cholera treatment include:</p>
            
            <ul class="list-unstyled">
                <li><strong>Rehydration Therapy:</strong> The cornerstone of cholera treatment is rehydration therapy. It aims to replenish fluids and electrolytes lost through severe diarrhea. Oral rehydration solutions or intravenous fluids may be administered.</li>
                <li><strong>Antibiotics:</strong> In severe cases or when dehydration is advanced, antibiotics may be prescribed to reduce the duration and severity of symptoms. Commonly used antibiotics include doxycycline and azithromycin.</li>
                <li><strong>Nutritional Support:</strong> Adequate nutrition is crucial during cholera recovery. Nutritional support may be provided to help the body regain strength and facilitate the healing process.</li>
                <li><strong>Isolation and Hygiene:</strong> Infected individuals should be isolated to prevent the spread of the disease. Strict adherence to hygiene practices, including handwashing, is essential for both patients and caregivers.</li>
                <li><strong>Early Medical Intervention:</strong> Seek medical attention promptly if cholera symptoms are suspected. Early intervention significantly improves the chances of a positive outcome.</li>
            </ul>
            
            <p class="mb-4">Cholera treatment requires a multidisciplinary approach and should be supervised by healthcare professionals. It is essential to follow medical advice and complete the prescribed course of treatment for a successful recovery.</p>
            <a href="medication.html" class="btn btn-primary">Learn More</a>
        </div>
    </div>
    


    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <h2 class="text-primary mb-4">Contact a Cholera Specialist</h2>
            <p class="mb-4">If you suspect cholera, experience symptoms, or need more information about cholera prevention and treatment, our specialized doctors are here to help. Contact us for expert advice and guidance.</p>
            <div class="contact-options">
                <p><strong>Emergency Hotline:</strong> 911</p>
                <p><strong>Local Health Department Contacts:</strong> [Insert Local Contacts]</p>
            </div>
            <p class="mb-4">For non-emergency inquiries or to schedule an appointment with a cholera specialist, you can use the button below to contact our dedicated healthcare team.</p>
            <a class="btn btn-primary rounded-pill py-3 px-5" href="doctor.html">Contact Doctor</a>
        </div>
    </div>
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <!-- Footer content remains the same -->
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
