<?php
error_reporting(1);
session_start();
include 'validation.php';
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
<meta http-equiv="pragma" content="no-cache" />

  <title>Elohim Media Production</title>
  <meta content="Elohim Media Production" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">




  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <script>
		function validateEmail(emailField){
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			if (reg.test(emailField.value) == false){
				alert('Invalid Email Address');
				return false;
			}
			return true;
		}
  </script>
  <style type="text/css">
  	#subs_email:focus-visible {
    border: none !important;
    box-shadow: none !important;
    outline: none !important;
}
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body onload="myFunction()">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">  <a href="index.html"></a>

      <a href="index.html" class="logo"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Portfolio Shoot</h2>
              <p class="animated fadeInUp">Capture the greatest moments of glamour and beauty. The beauty is an impeccable & amazing asset of human being. Get in touch with us for such momentous occassions to come true. Make it memorable one</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Wedding Shoot</h2>
              <p class="animated fadeInUp">Explore the beauty of wedding shoots wherever it is. Although, the decision to choose a particular location for your wedding shoot is extremely personal and depends entirely on the mood one is going for</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Short Movie Shoot</h2>
              <p class="animated fadeInUp">Explore a phenomenal multi-functioning, short film production house and an ad film production house that professionally excel in ad filmmaking, corporate films, short films, product shoot, 360-degree videos, VFX, editing, and audio mixing & more</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

		<!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-4.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Candid Phototgraphy</h2>
              <p class="animated fadeInUp">A candid photograph is a photograph captured without creating a posed appearance. It is unrelated to the subject's knowledge about or consent to the fact that photographs are being taken. Would love to experience such moments?</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=yKPcs6KpKGU" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Welcome to Twogether Studios!</h3>
            <p>We are a boutique Candid Wedding Photography Studio based in New Delhi, India and are known for a fun, off-beat and modern approach to creating stories from the best day in your life. It is led by Mr. Arjun & Mr. Praerna Kartha. We started this venture of photographing Indian weddings in early 2008, and since then, we have created hundreds of unique love stories across the world. We are innovative, passionate, hard-working and consists of an incredibly motivated team. We love Indian weddings, and can’t wait to be a part of yours!</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Quality driven</a></h4>
              <p class="description">A shot without a quality bruises memories. We never allow you to feel that! We seek for quality production in our works as much as you do.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Available 24/7</a></h4>
              <p class="description">Finding difficult to get a right person at your convenience? Doesn't matter. We are always ready for any shoot. Get in touch with us to make your event live & splendid.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Advanced Technology</a></h4>
              <p class="description">Thanks for the advanced technology in the field of media production. We adapt to the new technology & make the best possible.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container-fluid">

        <div class="row justify-content-center skills-content">

          <div class="col-xl-5 col-lg-6">

            <div class="progress">
              <span class="skill">Video Production <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bakground Presentation <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Candid Photography <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-xl-5 col-lg-6">

            <div class="progress">
              <span class="skill">Short Movie Shoot <i class="val">97%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Wedding Shoot <i class="val">96%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photo Shoot <i class="val">98%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container-fluid">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
            <p>Recurring Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="571" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="2793" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Check our <span>Services</span></h3>
          <p>We produce, design and set up all production phases in a photo and video shoot. <br>Would you like to explore more?</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-pie-chart-line"></i></div>
                <h4 class="title"><a href="">Candid Photography</a></h4>
                <p class="description">Our wedding photography style is modern, contemporary and off-beat. A short selection of some of our favourites is given below. To see more of our work, check out the full showcase or see our real Indian wedding photography stories!</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-stack-line"></i></div>
                <h4 class="title"><a href="">Wedding Shoot</a></h4>
                <p class="description">Our wedding photography style is modern, contemporary and off-beat. A short selection of some of our favourites is given below. To see more of our work, check out the full showcase or see our real Indian wedding photography stories!</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-markup-line"></i></div>
                <h4 class="title"><a href="">Video Production</a></h4>
                <p class="description">Our wedding photography style is modern, contemporary and off-beat. A short selection of some of our favourites is given below. To see more of our work, check out the full showcase or see our real Indian wedding photography stories!</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-shape-line"></i></div>
                <h4 class="title"><a href="">Portfolio Shoot</a></h4>
                <p class="description">Our wedding photography style is modern, contemporary and off-beat. A short selection of some of our favourites is given below. To see more of our work, check out the full showcase or see our real Indian wedding photography stories!</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-fingerprint-line"></i></div>
                <h4 class="title"><a href="">Short Movie Production</a></h4>
                <p class="description">Our wedding photography style is modern, contemporary and off-beat. A short selection of some of our favourites is given below. To see more of our work, check out the full showcase or see our real Indian wedding photography stories!</p>
              </div>
              <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="ri-body-scan-line"></i></div>
                <h4 class="title"><a href="">Other Presentation</a></h4>
                <p class="description">Our wedding photography style is modern, contemporary and off-beat. A short selection of some of our favourites is given below. To see more of our work, check out the full showcase or see our real Indian wedding photography stories!</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Interested to explore our services?</h3>
          <p> As a production company, our primary responsibilities revolve around producing a beautiful & final product for you. It doesn't matter whether it includes storyboarding, scheduling sessions, setting up the equipment need for the project, managing the photo & video shoot, editing the photos, etc. We love to do it.</p>
          <a class="cta-btn" href="#contact">Get in touch today!</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          <p>We will update it soon!</p>


    </section><!-- End Portfolio Section -->
    <!--Main Navigation-->



    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Testimonials</h2>
          <h3>What they <span>are saying</span> About Us</h3>
          <p>All our dreams can come true, if we have the courage to pursue them.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">

            <div class="row">

              <div class="col-lg-6">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" id="testimonialImg1">
                  <h3 id="testimonialName1">Johny Anthony</h3>
                  <h4 id="testimonialProfession1"> Merchant </h4>
                  <p id="testimonialDescription1">
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <span id="provider">One of the best video production service providers. They provide the best and the staff is cool and hard working</span>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

              <div class="col-lg-6">
                <div class="testimonial-item mt-4 mt-lg-0">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" id="testimonialImg2">
                  <h3 id="testimonialName2">Sara Wilsson</h3>
                  <h4 id="testimonialProfession2">Designer</h4>
                  <p id="testimonialDescription2">
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <span id="provider2">One of the best video production service providers. They provide the best and the staff is cool and hard working</span>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial-item -->

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Get In Touch With <span>Us</span></h3>
          <p>Connect with us to know more about our services & offers. We'll be glad to assist you</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-6">

                <div class="row justify-content-center">

                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-map"></i>
                    <h4>Address</h4>
                    <p>Multiple Locations,<br>Jaipur & New Delhi</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-phone"></i>
                    <h4>Call Us</h4>
                    <p>+91 888 088 6367 <br> </p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-envelope"></i>
                    <h4>Email Us</h4>
                    <p>info@elohimmedia.in<br>support@elohimmedia.in</p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-time-five"></i>
                    <h4>Working Hours</h4>
                    <p>Mon - Fri: 09:00 to 17:00hrs<br>Sunday: 09:00 to 16:00hrs</p>
                  </div>

                </div>

              </div>

              <div class="col-lg-6">
				<div>
					<div class="panel <?php if ($success != "") { ?> panel-success <?php } else if ($error != "") { ?> panel-danger <?php } else { ?> panel-default <?php } ?>">
						<div class="panel-heading">
							<b>  <?php echo $success . " " . $error; ?></b>
						</div>
						<form action="" method="post" role="form" class="php-email-form">
						  <div class="row">
							<div class="col-md-6 form-group">
							  <label for="name">Your Name</label>
							  <input type="text" name="sender_name" class="form-control" id="sender_name" required>
							  <b class="text-danger"><?php echo $nameErr; ?></b>
							</div>
							<div class="col-md-6 form-group mt-3 mt-md-0">
							  <label for="email">Your Email</label>
							  <input type="email" class="form-control" name="sender_mail" id="sender_mail" required>
							  <b class="text-danger"><?php echo $emailErr; ?></b>
							</div>
						  </div>
						  <div class="form-group mt-3">
							<label for="subject">Subject</label>
							<input type="text" class="form-control" name="sender_subject" id="sender_subject" required>
							<b class="text-danger"><?php echo $subjectErr; ?></b>
						  </div>
						  <div class="form-group mt-3">
							<label for="message">Message</label>
							<textarea class="form-control" name="sender_msg" rows="8" required></textarea>
							<?php echo $messageErr; ?></b>
						  </div>
						  <div class="my-3">
							<div class="loading">Loading</div>
							<div class="error-message"></div>
							<div class="sent-message">Your message has been sent. Thank you!</div>
						  </div>
						  <div class="text-center"><button type="submit" name="send_mail">Send Message</button></div>
						</form>
					</div>
				</div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Would love explore more offers & services? Get notified whenever we come up with something new. </p>
          </div>
          <div class="col-lg-6">
			<p class="contact_success_box alert alert-success alert-dismissible" id="success" style="display:none;">
				Thank You For Showing Your Interest.
			</p>
            <form id="subscription_data" method="post">
              <input onblur="validateEmail(this);" type="email" name="subs_email" id="subs_email" required="required">
              <input type="button" id="sub_submit" name="sub_submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Candid Photography</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Video Production</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Wedding Shoot</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Portfolio Shoot</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#services">Short Movie Production</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  Various Locations <br>
                  Jaipur & New Delhi<br>
                  India <br><br>
                  <strong>Phone:</strong> +91 888 088 6367<br>
                  <strong>Email:</strong> info@elohimmedia.in<br>
                </p>

              </div>

              <div class="col-lg-3 col-md-6 footer-info">
                <h3>About Elohim Media</h3>
                <p>We are a boutique Candid Wedding Photography Studio based in New Delhi, India and are known for a fun, off-beat and modern approach to creating stories from the best day in your life.</p>
                <div class="social-links mt-3">
                  <a href="https://twitter.com/SanalAnthony" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="https://www.facebook.com/elohimmedia.in" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="https://www.instagram.com/elohimmediaproduction" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="https://api.whatsapp.com/send?phone=8880886367" target="_blank" class="bi-whatsapp"><i class="bx bxl-whatsapp"></i></a>
                  <a href="https://www.linkedin.com/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
      2021  &copy;  <strong><span>Elohim Media Production.</span>  </strong> <br> All Rights Reserved.
      </div>
      <!--<div class="credits">
        <!-- All the footer links
        Maintenance by <a href="https://www.virtualpca.com/" target="_blank">Virtual Pc Assistant</a>
      </div>-->
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script>-->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function () {
        $('#sub_submit').on('click', function (event) {
            var subs_email = $('#subs_email').val().trim();
            if (subs_email !== "") {
                $.ajax({
                    url: "subscriber.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {val: 1, subs_email: subs_email},
                    cache: false,
                    success: function (fetchResult) {
						//var fetchResult = JSON.parse(fetchResult);
                        if (fetchResult.statusCode === 200) {
                            //$('#subscription_data').find('input:text').val('').trim();
                            $("#success").show();
							$('#success').html('Thank You for showing your interest.');
							document.getElementById('subscription_data').reset();
                        } else if (fetchResult.statusCode === 201) {
                            alert("Data saving failed !");
                        } else if (fetchResult.statusCode === 202) {
                            alert("Entered email id is already subscribed. Please use different email id to subscribe. Thank You.");
                            document.getElementById('subscription_data').reset();
                        } else {
							alert("Error occured !");
						}
					}
                });
            } else {
                alert('Please fill all the field !');
            }
            event.preventDefault();
        });
    });
  </script>
  <script>



  const first = document.getElementById("provider").innerHTML;
  const secondMessage = "Trusting you was one of the most marvelous decisions I have ever made. You guys are something different.";
  const firstMessage="One of the best video production service providers. They provide the best and the staff is cool and hard working"
  const firstName="Johny Anthony";
  const secondName="Bob Ross";
  const firstJob="Merchant"
  const secondJob="Architect"
  const thirdMessage="The staff is very friendly and the work done by them is amazing. Definitely one of the best companies out there!"
  const fourthMessage="Still captivated by the work done by these artists. It's with no doubt a masterpiece."
  const thirdJob="Designer"
  const fourthJob="Doctor"
  const thirdName="Sara Wilsson"
  const fourthName="Mary Johnson"
  const thirdImg="assets/img/testimonials/testimonials-2.jpg"
  const secondImg="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bWFufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60"
  const firstImg="assets/img/testimonials/testimonials-1.jpg"
  const fourthImg="https://images.pexels.com/photos/5407206/pexels-photo-5407206.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"

  function myFunction() {
    for(let value=5000;value<1000000000;value+=10000){
      setTimeout(function(){ changer(); }, value);
      setTimeout(function(){ rechanger(); }, value+5000);
    }

  }
  function changer() {
    document.getElementById("provider").innerHTML = secondMessage;
    document.getElementById("testimonialName1").innerHTML=secondName;
    document.getElementById("testimonialProfession1").innerHTML=secondJob;
    document.getElementById("provider2").innerHTML=fourthMessage
    document.getElementById("testimonialProfession2").innerHTML=fourthJob
    document.getElementById("testimonialName2").innerHTML=fourthName;
    document.getElementById("testimonialImg1").src=secondImg;
    document.getElementById("testimonialImg2").src=fourthImg;

  }
   function rechanger() {
     document.getElementById("provider").innerHTML=firstMessage;
     document.getElementById("testimonialName1").innerHTML=firstName;
     document.getElementById("testimonialProfession1").innerHTML=firstJob;
     document.getElementById("provider2").innerHTML=thirdMessage
     document.getElementById("testimonialProfession2").innerHTML=thirdJob
     document.getElementById("testimonialName2").innerHTML=thirdName
     document.getElementById("testimonialImg1").src=firstImg;
     document.getElementById("testimonialImg2").src=thirdImg;
  }


  </script>
</body>

</html>
