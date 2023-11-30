<?php
    $conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');
    
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $number = $_POST['number'];
        $date = $_POST['date'];

        $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

        if($insert){
            $message[] = 'appointment made successfully!';
        }else{
            $message[] ='appointment failed';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist Website</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    <!-- header section starts -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">Smile<span>Sync.</span></a>
                
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#review">Reviews</a>
                    <a href="#contact">Contact</a>
                </nav>
                
                <a href="#contact" class="link-btn">Appointment</a>

                <div id="menu-btn" class="fas fa-bars"></div>
                
            </div>
        </div>
    </header>
    <!-- header section ends -->


    <!-- home section starts -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Opening doors to healthier, happier smiles.</h3>
                    <p>Discover a dental haven where expertise meets compassion for a truly exceptional smile.</p>
                    <a href="#contact" class="link-btn">Appointment</a>
                </div>
            </div>
        </div>
    </section>    
    <!-- home section ends -->


    <!-- About section starts -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="Images/pexels-cedric-fauntleroy-4269687.jpg" class="about-img w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>About Us</span>
                    <h3>Your Smile Journey Begins Here</h3>
                    <p>Dedicated to enhancing smiles, we are a trusted dental practice committed to personalized care, cutting-edge technology, and creating a comfortable, positive experience for every patient.</p>
                    <a href="#contact" class="link-btn">Appointment</a>
                </div>

            </div>
        </div>
    </section>
    <!-- about section ends -->


    <!-- services section starts -->
    <section class="services" id="services">
        <h1 class="heading">Our Services</h1>
        <div class="box-container container">

            <div class="box">
                <img src="Images/icons8-dental-01.png" alt="">
                <h3>General Dentistry</h3>
                <p>Comprehensive oral health care, including regular check-ups, cleanings, and preventive treatments for patients of all ages. Our goal is to keep your smile healthy and vibrant.</p>
            </div>

            <div class="box">
                <img src="Images/icons8-dental-02.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Transform your smile with our cosmetic dental services, offering teeth whitening, porcelain veneers, and other aesthetic treatments. Achieve the confident smile you've always wanted.</p>
            </div>

            <div class="box">
                <img src="Images/icons8-dental-03.png" alt="">
                <h3>Teeth Grinding Solutions</h3>
                <p>Protect your teeth from the effects of bruxism with our customized night guards and effective treatments to address teeth grinding.</p>
            </div>

            <div class="box">
                <img src="Images/icons8-dental-04.png" alt="">
                <h3>Periodontal Care</h3>
                <p>Take control of your gum health with our periodontal care services. From preventive measures to advanced treatments, we are committed to keeping your gums in optimal condition.</p>
            </div>

            <div class="box">
                <img src="Images/icons8-dental-05.png" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Gentle and specialized care for our youngest patients. We focus on creating positive dental experiences and building a foundation for a lifetime of oral health.</p>
            </div>

            <div class="box">
                <img src="Images/icons8-dental-06.png" alt="">
                <h3>Preventive Care</h3>
                <p>Stay proactive with your oral health through our preventive services, including cleanings, sealants, and fluoride treatments. Preserve your smile for years to come.</p>
            </div>

        </div>
    </section>
    <!-- services section ends -->


    <!-- process section starts -->
    <section class="process">
        <h1 class="heading">Work Process</h1>

        <div class="box-container container">

            <div class="box">
                <img src="Images/TeledentistryBestPractices.webp" alt="">
                <h3>Teledentistry Services</h3>
                <p>Experience the convenience of virtual consultations for certain dental concerns, allowing you to connect with our dental team from the comfort of your home.</p>
            </div>

            <div class="box">
                <img src="Images/dental-insurance.jpg" alt="">
                <h3>Insurance and Financing Assistance</h3>
                <p>Navigate dental insurance coverage seamlessly with our assistance, and explore flexible financing options to make your dental care more accessible.</p>
            </div>

            <div class="box">
                <img src="Images/female-doctor-jaw-xray.webp" alt="">
                <h3>TMJ/TMD Treatment</h3>
                <p>Find relief from jaw pain and headaches with our TMJ/TMD treatments. We address the root cause of discomfort and help restore optimal jaw function.</p>
            </div>

        </div>
    </section>
    <!-- process section ends -->


    <!-- reviews section starts -->
    <section class="review" id="review">
        <h1 class="heading">Client Reviews</h1>
        <div class="box-container container">

            <div class="box">
                <img src="Images/propic1.jpg" alt="">
                <p>Find relief from jaw pain and headaches with our TMJ/TMD treatments. We address the root cause of discomfort and help restore optimal jaw function.</p>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h3>Kyle cddcd</h3>
                <span>Satisfied Client</span>
            </div>

            <div class="box">
                <img src="Images/propic2.jpg" alt="">
                <p>Find relief from jaw pain and headaches with our TMJ/TMD treatments. We address the root cause of discomfort and help restore optimal jaw function.</p>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Kyle cddcd</h3>
                <span>Satisfied Client</span>
            </div>

            <div class="box">
                <img src="Images/propic3.jpg" alt="">
                <p>Find relief from jaw pain and headaches with our TMJ/TMD treatments. We address the root cause of discomfort and help restore optimal jaw function.</p>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Kyle cddcd</h3>
                <span>Satisfied Client</span>
            </div>

        </div>
    </section>
    <!-- reviews section ends -->


    <!-- Contact section starts -->
    <section class="contact" id="contact">
        <h1 class="heading">Make Appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php 
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">' .$message. '</p>';
                    }
                }
            ?>
            <span>Your Name : </span>
            <input type="text" name="name" placeholder="Enter your name" class="box" required>
            <span>Your Email : </span>
            <input type="email" name="email" placeholder="Enter your email" class="box" required>
            <span>Your Number : </span>
            <input type="number" name="number" placeholder="Enter your number" class="box" required>
            <span>Your Date : </span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="Make Appointment" name="submit" class="link-btn">
        </form>

    </section>
    <!-- Contact section ends -->


    <!-- Footer section starts -->
    <section class="footer">
        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>011-345-6785</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>Colombo, Sri Lanka</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>00:08am to 11:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>smilesync@gmail.com</p>
            </div>

        </div>

        <div class="credit"> &copy; copyright @ <?php echo date('y'); ?> <span>SmileSync.</span></div>
    </section>
    <!-- Footer section ends -->


    <!-- custom js file link -->
    <script src="Js/script.js"></script>

</body>
</html>