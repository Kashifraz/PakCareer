<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PakCareer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link rel="stylesheet" href="{{asset('assets/css/modal.css')}}">

  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

  <!-- Favicons -->
  <link href="{{asset('assets/img/web_logo.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- Font Awesome Icon Library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">






  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>









  <style>
    /* login signup */


    /*-------------------------------------------------
 * Modal Style 1 CSS start
 *-----------------------------------------------*/


    .modal-style-1 .modal-login {
      width: 350px;
      font-size: 13px;
    }

    .modal-style-1 .modal-login .modal-header {
      border-bottom: none;
      position: relative;
      justify-content: center;
    }

    .modal-style-1 .modal-login h4 {
      color: var(--style-1-color);
      text-align: center;
      font-size: 18px;
      margin-top: 20px;
      border-bottom: 0;
      text-transform: uppercase;
      line-height: 1;
      letter-spacing: 3px;
      font-weight: 900;
      width: 100%;
    }

    .modal-style-1 .modal-header .close {
      position: absolute;
      right: 20px;
    }

    .modal-style-1 .close:focus,
    .modal-style-1 .close:active {
      outline: none !important;
      box-shadow: none;
    }

    .modal-style-1 .modal-login a {
      text-decoration: none;
    }

    .modal-style-1 .modal-login form {
      width: 280px;
      margin: 0 auto;
    }

    .modal-style-1 .modal-login span.input-group-addon {
      width: 60px;
      text-align: center;
      border-radius: 25px 0 0 25px;
      border: 1px solid var(--style-1-color);
      padding: 8px;
      margin-right: 5px;
      background: var(--style-1-color);
      color: #fff;
    }

    .modal-style-1 .modal-login span.input-group-addon i {
      font-size: 16px;
    }

    .modal-style-1 input.form-control {
      border-radius: 0 25px 25px 0;
      font-size: 13px;
      border: 1px solid var(--style-1-color);
    }

    .modal-style-1 .btn-signin {
      border-radius: 25px;
      width: 100%;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      background-color: var(--style-1-color);
      border: 1px solid var(--style-1-color);
    }

    .modal-style-1 p.hint-text {
      text-align: center;
    }

    .modal-style-1 .register {
      color: var(--style-1-color);
      font-weight: 600px;
    }

    .modal-style-1 .social-login a {
      text-decoration: none;
      color: #fff;
      margin: 2px;
      height: 30px;
      display: inline-block;
      width: 30px;
      padding: 5px 0;
      text-align: center;
      cursor: pointer;
    }

    .modal-style-1 .btn-facebook {
      background-color: var(--color-facebook);
    }

    .modal-style-1 .btn-google {
      background-color: var(--color-google);
    }

    .modal-style-1 .btn-twitter {
      background-color: var(--color-twitter);
    }

    .dark.modal-style-1 .modal-content {
      background: #0b0b1f;
      color: #fff;
    }

    .dark.modal-style-1 .close,
    .modal-style-1.dark .modal-login h4 {
      color: #fff;
    }

    .dark .text-danger {
      color: #777 !important;
    }

    @media only screen and (max-width: 360px) {
      .modal-style-1 .modal-login {
        width: 100%;
        margin: 5px;
      }

      .modal-style-1 .modal-login form {
        width: 100%;
      }
    }

    /* login signup ends */


    .checked {
      color: orange;
    }

    .team .member span::after {
      display: none !important;
    }


    .team .member span {
      display: block;
      font-size: 15px;
      position: relative;
      font-weight: 500;
      padding-bottom: 0px;
    }
  </style>

</head>

<body onload="loaded()">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{route('index')}}">PakCareer</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="discussion.html">Discussion</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Counsellers</a></li>
          <li><a class="nav-link scrollto" href="#blog">Blogs</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <!-- <li><a class="getstarted scrollto" href="#signin" data-toggle="modal" data-target=".log-sign">Login</a></li>
          <li><a class="getstarted scrollto" href="#signup" data-toggle="modal" data-target=".log-sign">Signup</a></li> -->
          <li id="loginbtn"><a class="getstarted scrollto" href="{{route('login')}}" >Login</a></li>
          <li id="signinbtn"><a class="getstarted scrollto" href="{{route('register')}}">Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>Your Journey towards Bright Career begins here.</h1>
          <!-- <h2>We are team of talented Instructors making Learning Quran Easy</h2> -->
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="personality_test.html" class="btn-get-started scrollto">Check Your Personality</a>
            <!-- <a href="https://www.youtube.com/watch?v=uI4Ib4SBE6E" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/header_img.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="section-title">
            <h2 style="justify-content:Right; padding-top: 10px;">
              بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِیْمِ </h2>
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-5 align-items-stretch  img"
            style='background-image: url("assets/img/our_vision.jpg"); padding-bottom: 15px;' data-aos="zoom-in"
            data-aos-delay="150">&nbsp;</div>
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  "
            style="padding-top:20px;">
            <div class="accordion-list">
              <h3 style="text-align:left; color: #37517e;">OUR <strong>VISION</strong></h3>
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"> VISION <i
                      class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p style="text-align:justify;">
                      Our vision for our online career counselling website in Pakistan is to provide a comprehensive and
                      accessible
                      platform for individuals to explore and discover their career options.
                      We aim to empower individuals to make informed decisions about their career paths by providing
                      them
                      with accurate and up-to-date information about various industries, job roles, and educational
                      requirements.
                    </p>
                  </div>
                </li>
                <h3 style="text-align:left; color: #37517e; padding-top: 15px;">OUR <strong>MISSION</strong></h3>
                <li style="padding-top: 20px;">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"> MISSION <i
                      class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p style="text-align:justify;">
                      In today's time studies show that the current youth prioritises peace and meaningful/impactful
                      work. In Pakistan however their is next to no proper guidance given to students to accomplish
                      their goals or even identify their goals.
                      We are committed to raising awareness in the youth and to help provide them credible guidance
                      which will enable them to pursue career paths with a degree of certainty and allow them to
                      confidently grow at a rapid pace then they would without proper counselling.
                    </p>
                  </div>
                </li>



              </ul>
            </div>


          </div>


        </div>

      </div>
    </section>
    <!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->

    <!-- <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2 style="justify-content:Right; padding-top: 10px;">
            WHY US</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Why Nisa-Ul-Ilm</h3>
            <div class="skills-content">

              <div class="progress">
                <span class="skill">Customizable Class Timings<i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Male & Female Staff <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">24 Hours Service <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Student Record Maintained<i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Skills Section -->


    <!--Discussion-->



    <!--Discussion End-->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <!-- <h3 style="text-align:left; color: #37517e;">Excellence Of Reciting Glorious Quran</h3>
          <p style="text-align:justify;">
            Undoubtedly, those people are very fortunate who love the Holy Quran and act upon it along with reciting it. It is stated in the blessed Hadith: The house in which the Holy Quran is recited is spacious for its dwellers; its goodness is in abundance, angels visit it and Satans go away from it. The house where the Holy Quran is not recited becomes narrow for its dwellers, its goodness reduces, angels go away from it and Satans approach. (Ihya ul Uloom, vol. 1, p. 826)  
          </p> -->
        </div>

        <div class="row">
          <div class=" d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
              <h4><a href="counsellers.html">Professional Counselling From Top Industry Professionals Ranging From
                  Different
                  Universities</a></h4>
              <p style="text-align:justify;">
                One to one counselling
                With a good amount of research you'll be ready to interact with our professional counsellors to get
                specific counselling and help to achieve your desired goals and dreams</p>
              <br>
              <!-- <p style="text-align:justify;" >
                  For Kids and Adults.  
                </p> -->
            </div>
          </div>

          <div class=" d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
              <h4><a href="personality_test.html">Personality Testing</a></h4>
              <p style="text-align:justify;">
                With the help of psychological researchers, we have developed a world class personality assessment.
                This test will determine your personality type and suggest you what type of careers maybe suited for
                you. This will accelerate your search for the best opportunities in life ahead
              </p>

              <!-- <br>
                <p style="text-align:justify;" >
                  For Kids and Adults.  
                </p> -->


            </div>
          </div>

          <div class="d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bx-tachometer"></i></div> -->
              <h4><a href="discussion.html">Strongly Curated Forums To Spread Highly Credible Information To Our
                  Audience.</a></h4>
              <!-- <h6> </h6> -->

              <p style="text-align:justify;">
                Our strongly curated forums give you the ability to interact and ask questions with ease and have
                experts answer you with the most accuracy as well as other experts affirming the answer or discrediting
                it via our up and down voting feature.

              </p>
              <!-- <p style="text-align:justify;" >
                <br>
                In this program, we offer the following:<br>
                - Hifz of Last Juz<br>
                - Hifz of Small Surahs<br>
                - Hifz of Chosen Surahs<br>
              </p>
              <p>
                - Hifz of the Entire Quran  
              </p>
              <p style="padding-left:6px ;">(Ijaza)</p>
              <br>
              <p style="text-align:justify;" >
                For Kids and Adults.  
              </p>  -->

            </div>
          </div>

          <!-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
               <div class="icon"><i class="bx bx-layer"></i></div> 
              <h4><a href="">The Power To Raise Your Voice Anonymously.</a></h4>
               <p style="text-align:justify;">Prayer is one of the Five Pillars of Islam. Therefore, it is important that you know the etiquettes of prayer so that you can perform it accurately. In this course, you will learn all you need about the proper etiquettes of prayer. 
                In addition, you will learn, Eid, Funeral, and Nawafil prayers.</p>
                 <br>
                 <h6>MASNOON DUAA COURSE</h6>
                 <p style="text-align:justify;">In this course, you will learn all the Duas our Prophet PBUH taught us to recite for every occasion throughout our daily lives.</p>
                 <p style="text-align:justify;" >
                  For Kids and Adults.  
                </p>
                </div>
          </div> -->
        </div>

        <!-- <div class="row" style="padding-top: 15px;">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
               <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Online Masnoon Duas Course</a></h4>
              <p style="text-align:justify;">In this course, you will learn all the Duas our Prophet PBUH taught us to recite for every occasion throughout our daily lives.</p>
                 <br>
                  <h6>MASNOON DUAA COURSE</h6>
                 <p style="text-align:justify;">In this course, you will learn all the Duas our Prophet PBUH taught us to recite for every occasion throughout our daily lives.</p>
             
                 <p style="text-align:justify;" >
                  For Kids and Adults.  
                </p>
                </div>
          </div>
        </div>
      </div> -->
    </section>

    <!-- End Services Section -->
    <!-- ======= Reviews Sections ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reviews</h2>
          <p>Reviews of Some Students from Diffrent Cities</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                data-bs-target="#faq-list-1">Tanya and kinza -> Lahore <i class="bx bx-chevron-down icon-show"></i><i
                  class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p style="text-align:justify; word-spacing: -3px;">
                  "I recently used the online career counselling services on this website and was blown away by the
                  quality of the advice I received.
                  The career counsellor was knowledgeable, compassionate, and provided me with valuable insights that
                  helped me make a decision about my career path.
                  I highly recommend this website to anyone looking for guidance and support in their career journey."
                </p>

              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
                class="collapsed">Hassan -> Islamabad <i class="bx bx-chevron-down icon-show"></i><i
                  class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p style="text-align:justify; word-spacing: -3px;">
                  "I was hesitant to try online career counselling, but I'm so glad I did.
                  The counsellors on this website are professional and really listen to your concerns.
                  They helped me identify my strengths and gave me practical advice for moving forward in my career.
                  I feel much more confident and motivated after using this service."
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3"
                class="collapsed">Sabreen -> Taxla <i class="bx bx-chevron-down icon-show"></i><i
                  class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p style="text-align:justify; word-spacing: -2px;">
                  "I recently used the online career counselling services on this website and was really impressed by
                  the personalized approach.
                  The counsellor really took the time to get to know me and understand my goals, and gave me tailored
                  advice that was specific to my needs.
                  I would definitely recommend this website to anyone looking for career guidance."
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="section-title">
            <h2>PACKAGES</h2>
            <p style="text-align:justify; word-spacing: -2px;">We know not everyone can stick to the same schedule. Therefore we have a package for everyone.
              Once you find the one that suits you, contact us on WhatsApp.</p>
            </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Package - 1<span> per month</span></h3>
              <h4>3 - Days a Week</h4>
              <ul>
                <li><i class="bx bx-check"></i> 30 minutes per Student</li>
                <li><i class="bx bx-check"></i> Timings 24 hours (Flexible)</li> 
                <li><i class="bx bx-check"></i> Class Timings Custom</li>
                 <li><i class="bx bx-check"></i> Other Related Things</li> 
                <li><i class="bx bx-check"></i> Timings 24 hours (Flexible)</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Package - 2<span> per month</span></h3>
              <h4>5 - Days a Week</h4>
              <ul>
                <li><i class="bx bx-check"></i> 30 minutes per Student</li>
                 <li><i class="bx bx-check"></i> Timings 24 hours (Flexible)</li>
                <li><i class="bx bx-check"></i> Class Timings Custom </li>
                <li><i class="bx bx-check"></i> Timings 24 hours (Flexible)</li>
                <li><i class="bx bx-check"></i> Other Related Things</li> 
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Package - 3<span> per month</span></h3>
              <h4>Custom Package</h4>
              <ul>
               
                <li><i class="bx bx-check"></i> Class Duration Custom</li>
                 <li><i class="bx bx-check"></i> Timings 24 hours (Flexible)</li> 
                <li><i class="bx bx-check"></i>Class Timings Custom</li>
                 <li><i class="bx bx-check"></i> Other Related Things</li> 
                <li><i class="bx bx-check"></i> Timings 24 hours (Flexible)</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Counsellers</h2>
          <p>Meet the Highly Esteemed Professionals</p>
        </div>

        <div class="row">

          <!-- <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/Mubashir.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Syed Mubashir Shah</h4>
                <span>Chief Executive Officer</span>
                <p style="text-align:justify; word-spacing: -2px;">Member of BOG and Governing/ Founding Body of Nisa-ul-Ilm Quran Academy.
                  we aim to provide our best to spread the teaching of Holy Quran</p>
                <div class="social">
                  <a><i class="ri-twitter-fill"></i></a>
                  <a><i class="ri-facebook-fill"></i></a>
                  <a><i class="ri-instagram-fill"></i></a>
                  <a> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><a href="counseller_profile.html"><img src="assets/img/team/ladyavatar.jpg"
                    class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <a href="counseller_profile.html">
                  <h4>Ms. Sadaf Hassan</h4>
                </a>
                <!-- <span>Counseller</span> -->
                <p style="text-align:justify; word-spacing: -2px; height: 62px;">Member of Faculty In Riphah
                  International
                  University.<br>
                  Master of Education and Career Counselling from National University of Science and Technology</p>
                <div style="display: flex;align-items: center; margin-top: 5px;">
                  <div style="
                      padding: 5px 13px;
                      background: #3c4c6a;
                      color: white;
                      box-shadow: 0px 5px 5px #8080804a, 0px -5px 5px #80808057;
                    ">5</div>
                  <div class="rating"
                    style="display: flex;padding: 5px 20px;/* background: #47b2e4; */box-shadow: 0px 2px 5px #8080804a, 0px -2px 5px #80808057;/* box-shadow: 2px -4px 1px; */">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                </div>
                <div class="social">
                  <a><i class="ri-twitter-fill"></i></a>
                  <a><i class="ri-facebook-fill"></i></a>
                  <a><i class="ri-instagram-fill"></i></a>
                  <a> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><a href="counseller_profile.html"><img src="assets/img/team/male.png"
                    class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <a href="counseller_profile.html">
                  <h4>Mr. Mohsin Shah</h4>
                </a>
                <!-- <span>Member BOG</span> -->
                <p style="text-align:justify; word-spacing: -2px; height: 62px;">Bachelor of Philosophy and Neuroscience
                  from
                  University of Lahore</p>
                <div style="display: flex;align-items: center; margin-top: 5px;">
                  <div style="
                    padding: 5px 13px;
                    background: #3c4c6a;
                    color: white;
                    box-shadow: 0px 5px 5px #8080804a, 0px -5px 5px #80808057;
                  ">4</div>
                  <div class="rating"
                    style="display: flex;padding: 5px 20px;/* background: #47b2e4; */box-shadow: 0px 2px 5px #8080804a, 0px -2px 5px #80808057;/* box-shadow: 2px -4px 1px; */">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
                <div class="social">
                  <a><i class="ri-twitter-fill"></i></a>
                  <a><i class="ri-facebook-fill"></i></a>
                  <a><i class="ri-instagram-fill"></i></a>
                  <a> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><a href="counseller_profile.html"><img src="assets/img/team/male.png"
                    class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <a href="counseller_profile.html">
                  <h4>Mr. Daniyal Khan</h4>
                </a>
                <!-- <span>Member BOG</span> -->
                <p style="text-align:justify;  word-spacing: -2px; height: 62px;">Master of Economics from London School
                  of Economics
                  and Political Science, University of London</p>
                <div style="display: flex;align-items: center; margin-top: 5px;">
                  <div style="
                      padding: 5px 13px;
                      background: #3c4c6a;
                      color: white;
                      box-shadow: 0px 5px 5px #8080804a, 0px -5px 5px #80808057;
                    ">3</div>
                  <div class="rating"
                    style="display: flex;padding: 5px 20px;/* background: #47b2e4; */box-shadow: 0px 2px 5px #8080804a, 0px -2px 5px #80808057;/* box-shadow: 2px -4px 1px; */">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
                <div class="social">
                  <a><i class="ri-twitter-fill"></i></a>
                  <a><i class="ri-facebook-fill"></i></a>
                  <a><i class="ri-instagram-fill"></i></a>
                  <a> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><a href="counseller_profile.html"><img src="assets/img/team/male.png"
                    class="img-fluid" alt=""></div></a>
              <div class="member-info">
                <a href="counseller_profile.html">
                  <h4>Mr. Khawaja Bilal Ahmed</h4>
                </a>
                <!-- <span>IT-Consultant</span> -->
                <p style="text-align:justify; word-spacing: -2px; height: 62px;">Postgraduate of Electrical and
                  Electronics
                  Engineering from University of Bristol</p>
                <div style="display: flex;align-items: center; margin-top: 5px;">
                  <div style="
                      padding: 5px 13px;
                      background: #3c4c6a;
                      color: white;
                      box-shadow: 0px 5px 5px #8080804a, 0px -5px 5px #80808057;
                    ">2</div>
                  <div class="rating"
                    style="display: flex;padding: 5px 20px;/* background: #47b2e4; */box-shadow: 0px 2px 5px #8080804a, 0px -2px 5px #80808057;/* box-shadow: 2px -4px 1px; */">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                  </div>
                </div>
                <div class="social">
                  <a><i class="ri-twitter-fill"></i></a>
                  <a><i class="ri-facebook-fill"></i></a>
                  <a><i class="ri-instagram-fill"></i></a>
                  <a> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div>
        <div class="d-flex justify-content-center justify-content-lg-center">
          <a href="counsellers.html" class="btn-get-started scrollto"
            style="margin-top: 3rem; background-color: rgba(40, 58, 90, 0.9);">Find More Counsellers</a>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!--Blog Section-->
    <section id="blog" class="blog section-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
          <h2>Blog</h2>
          <p>You'll find a blog post on almost any topic related to a career here
          </p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a href="blog_single.html">
              <div class="card">
                <img class="card-img-top" src="assets/img/strategies.jpg" style="height: 233px ">
                <div class="card-body">
                  <h5 class="card-title" style="color: black;">Five Strategies to Get Started today on Preparing for the
                    Careers of the Future</h5>
                  <p class="card-text" style="color: black; font-size: small">What will the future jobs look like? The
                    truth is that no one can say for sure......</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="blog_single.html">
              <div class="card">
                <img class="card-img-top" src="assets/img/manager.jpg" style="height: 233px;">
                <div class="card-body">
                  <h5 class="card-title" style="color: black;">Tips to Make a Great Impression as a Young Businessman
                  </h5>
                  <p class="card-text" style="color: black; font-size: small">The first impression is the last
                    impression, and, no matter what the world says, your outlook makes a great difference......</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="blog_single.html">
              <div class="card">
                <img class="card-img-top" src="assets/img/speechless.jpg" style="height: 233px;">
                <div class="card-body">
                  <h5 class="card-title" style="color: black;">Jobs of the Future that will Leave you Speechless</h5>
                  <p class="card-text" style="color: black; font-size: small">Everybody who works online, from video
                    game programmers to smartphone designers, may look back at earlier works .......</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div>
        <div class="d-flex justify-content-center justify-content-lg-center">
          <a href="blog.html" class="btn-get-started scrollto"
            style="margin-top: 3rem; background-color: rgba(40, 58, 90, 0.9);">Read More Blogs</a>
        </div>
      </div>
    </section>
    <!--End Blog section-->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <h2 style="text-align:left; color: #37517e;">WHO <strong>ARE WE?</strong></h2>
            <p style="text-align:justify;">
              We're a first of it's kind platform that enables the Pakistani youth to learn
              from the
              experiences of Pakistani industry veterans ,to make sensible career decisions.

              In a time of rapid change especially since COVID-19 there has been alot of confusion amongst
              youth because of uncertainty in the country.
              Spike in unemployment rate.
              <br>

              Many jobs no longer exist and many new types are available.
              <br>
              Thus,we believe in spreading good information and to help in resolving our country's alarmingly
              growing unemployment.
            </p>
          </div>
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Have a question? Leave a message.</p>
          <p>Contact us on Whatsapp by clicking on given number.<br> We will get back to you ASAP.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Islamabad, Pakistan</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>kmashhood39@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Contact Us:</h4>
                <p><a href="https://wa.me/923345374448" target="_blank">+92 334-537-4448 </a>
                </p>
              </div>

              <iframe
                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Islamabad Pakistan&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>PakCareer</h3>
            <p>
              Riphah International University<br>
              I/14 Islamabad<br>
              Pakistan<br><br>
              <strong>Phone:</strong><a href="https://wa.me/923345374448" target="_blank">+92 334-537-4448 </a><br>
              <strong>Email:</strong> kmashhood39@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
                      
            <li><i class="bx bx-chevron-right"></i> <a href="#services"></a></li>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Online Makharij & Ilm At-Tajweed Course</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Online Holy Quran Recitation Course</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Online Holy Quran Hifz Program</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Online Prayer Etiquette Course</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Online Masnoon Duas Course</a></li>
              
            </ul>
          </div> -->

          <div class="col-lg-5 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Follow us on social media and show some love. Also, share with your loved ones. <br>JazakAllah.</p>
            <div class="social-links mt-3">
              <a href="#" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>PakCareer</span></strong> [All Rights Reserved]
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- Floating Icons -->

  <div id="Floating_Icons" class="icons">
    <div class="social-links mt-3">
      <ul>
        <a href="#" target="_blank" class="twitter">
          <li class="twitter_2"><i class="bx bxl-twitter"></i></li>
        </a>
        <a href="#" target="_blank" class="facebook">
          <li class="facebook_2"><i class="bx bxl-facebook"></i></li>
        </a>
        <a href="#" target="_blank" class="instagram">
          <li class="instagram_2"><i class="bx bxl-instagram"></i></li>
        </a>
        <!-- <a href="#" target="_blank" class="google-plus"><li class="google-plus_2"><i class="bx bxl-skype"></i></li></a> -->
        <a href="#" target="_blank" class="linkedin">
          <li class="linkedin_2"><i class="bx bxl-linkedin"></i></li>
        </a>
      </ul>

    </div>


  </div>

  <!-- Floating Icons ends -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- modals -->
  <div class="modal" id="signupOptions" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="btn btn-primary d-block my-3 w-100" data-toggle="modal"
            data-target="#registerModal1" data-dismiss="modal">Signup As Student</button>
          <button type="button" class="btn btn-primary d-block w-100 mb-3" data-toggle="modal"
            data-target="#registerModal2" data-dismiss="modal">Signup As Counseller</button>
        </div>

      </div>
    </div>
  </div>
  <!--modal style 1 start -->
  <!-- login modal 1 -->
  <div id="loginModal1" class="modal-style-1  modal ">
    <div class="modal-dialog modal-login">
      <div class="modal-content" style="background-color: #e5e5e5;">
        <div class="modal-header p-0 " style="background-color: #e5e5e5;">
          <h4 class="modal-title" style="color: #37517e;">login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body" style="background-color: transparent;">
          <!-- dont forget to add action and action method  -->
          <form onsubmit="login(event)">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="background-color: #37517e; border: #37517e;"><i
                    class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Enter email address"
                  required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="background-color: #37517e; border: #37517e;"><i
                    class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Enter password"
                  required="required" autocomplete="on">
              </div>
            </div>
            <div class="row pl-1 pr-1">
              <div class="col text-left">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox"
                    value="option1">
                  <span class="custom-control-label">&nbsp;Remember Me</span>
                </label>
              </div>
              <div class="col text-right hint-text pt-0">
                <a href="" class="text-danger">Forgot Password?</a>
              </div>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary btn-signin"
                style="background-color: #37517e; border: #37517e;">login</button>

            </div>

          </form>
        </div>
        <div class="text-center mb-3">Don't have an account? <a class="register" href="#signupOptions"
            data-dismiss="modal" data-toggle="modal" style="color: #37517e;">Register</a></div>
      </div>
    </div>
  </div>

  <!-- register modal 1 student -->
  <div id="registerModal1" class="modal-style-1  modal ">
    <div class="modal-dialog modal-login">
      <div class="modal-content" style="background-color: #e5e5e5;">
        <div class="modal-header p-0" style="background-color: #e5e5e5;">
          <h4 class="modal-title" style="color: #37517e;">Student</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body" style="background-color: transparent;">
          <!-- dont forget to add action and action method  -->
          <form id="student" onsubmit="registerStudent(event)">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="background-color: #37517e; border: #37517e;"><i
                    class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="background-color: #37517e; border: #37517e;"><i
                    class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Enter email address"
                  required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="background-color: #37517e; border: #37517e;"><i
                    class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Enter password"
                  required="required" autocomplete="on">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="background-color: #37517e; border: #37517e;"><i
                    class="fa fa-eye-slash"></i></span>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password"
                  required="required" autocomplete="on">
              </div>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary btn-signin"
                style="background-color: #37517e; border: #37517e;">Register</button>

            </div>

          </form>
        </div>
        <div class="text-center mb-3">Already have an account? <a class="login" href="#loginModal1" data-dismiss="modal"
            data-toggle="modal" style="color: #37517e;">Login</a></div>
      </div>
    </div>
  </div>

  <!--signup 2  -->
  <div id="registerModal2" class="modal-style-1  modal ">
    <div class="modal-dialog modal-login">
      <div class="modal-content" style="background-color: #e5e5e5;">
        <div class="modal-header p-0" style="background-color: #e5e5e5;">
          <h4 class="modal-title" style="color: #37517e;">Counseller</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body" style="background-color: transparent;">
        
          <form onsubmit="registerCounseller(event)">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="background-color: #37517e; border: #37517e;"><i
                    class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="background-color: #37517e; border: #37517e;"><i
                    class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Enter email address"
                  required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="background-color: #37517e; border: #37517e;"><i
                    class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Enter password"
                  required="required" autocomplete="on">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" style="background-color: #37517e; border: #37517e;"><i
                    class="fa fa-eye-slash"></i></span>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password"
                  required="required" autocomplete="on">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
            <div class="custom-file form-control-sm mt-3" style="max-width: 300px">
              <input type="file" class="custom-file-input" id="customFile" multiple="" />
              <label class="custom-file-label" for="customFile">Upload Your CV</label>
            </div></div></div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary btn-signin"
                style="background-color: #37517e; border: #37517e;">Register</button>
            </div>

          </form>
        </div>
        <div class="text-center mb-3">Already have an account? <a class="login" href="#loginModal1" data-dismiss="modal"
            data-toggle="modal" style="color: #37517e;">Login</a></div>
      </div>
    </div>
  </div>
  <!-- alert -->
  <div id="alert" style="position:absolute;bottom:20px;right:20px;z-index: 10000000000; display: none;" class="alert alert-danger">
    <div id="alertMsg"></div>
  </div>
  <!-- modals ed -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!--Script for login signup module-->
  <script type="module">
		import { initializeApp, getApps } from 'https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js'

		// If you enabled Analytics in your project, add the Firebase SDK for Google Analytics
		import { getAnalytics } from 'https://www.gstatic.com/firebasejs/9.17.1/firebase-analytics.js'

		// Add Firebase products that you want to use
		import { getAuth, signInWithEmailAndPassword, createUserWithEmailAndPassword, onAuthStateChanged, signOut, updateProfile } from 'https://www.gstatic.com/firebasejs/9.17.1/firebase-auth.js'
		import { getFirestore, doc, getDoc, setDoc, collection } from 'https://www.gstatic.com/firebasejs/9.17.1/firebase-firestore.js'
		// TODO: Replace the following with your app's Firebase project configuration

		const firebaseConfig = {
			apiKey: "AIzaSyBpoCUVvpoRD1mONh_FzslpkPG5-dFRrvs",
			authDomain: "pakcareers.firebaseapp.com",
			projectId: "pakcareers",
			storageBucket: "pakcareers.appspot.com",
			messagingSenderId: "1062406667130",
			appId: "1:1062406667130:web:6c85431fa820ebdc5334c3"
		};

		// Initialize Firebase
		const app = initializeApp(firebaseConfig);
		console.log(getApps())
		const db = getFirestore(app);
		const auth = getAuth();

		// 
		// sleep function
		function sleep(ms) {
			console.log("in sleep")
			return new Promise(resolve => setTimeout(resolve, ms));
		}

		async function getCurrentUser() {
			while (!auth.currentUser){
				console.log("in get",auth.currentUser)

				await sleep(100);

			}
			return auth.currentUser;
		}

		// 
		window.registerStudent = function (e) {
			e.preventDefault();
			const form = new FormData(e.target);
			const { name, email, password } = Object.fromEntries(form);
			console.log(name, email, password);
			createUserWithEmailAndPassword(auth, email, password)
				.then(async (userCredential) => {
					console.log({ userCredential })
					const res = await updateProfile(userCredential.user, {
						displayName: name
					});
					const docRef = await setDoc(doc(db, "users", userCredential.user.uid), {
						role: "student",
						uid: userCredential.user.uid
					})
					console.log(res, docRef)
					$('#registerModal1').click();

				})
				.catch((error) => {
					console.log(error.message)
					document.getElementById('alert').style.display = "block";
					document.getElementById('alertMsg').innerHTML = " " + '<i class="fa fa-exclamation-triangle"></i>' + ' ' + error.code + " ";
					setTimeout(function () { document.getElementById('alert').style.display = "none"; }, 5000);
				});
		}

		window.registerCounseller = function (e) {
			e.preventDefault();
			const form = new FormData(e.target);
			const { name, email, password } = Object.fromEntries(form);
			console.log(name, email, password);
			createUserWithEmailAndPassword(auth, email, password)
				.then(async (userCredential) => {
					console.log({ userCredential })
					const res = await updateProfile(userCredential.user, {
						displayName: name
					});
					const docRef = await setDoc(doc(db, "users", userCredential.user.uid), {
						role: "counseller",
						uid: userCredential.user.uid
					})
					console.log(res, docRef)
					$('#registerModal2').click();

				})
				.catch((error) => {
					console.log(error.message)
					document.getElementById('alert').style.display = "block";
					document.getElementById('alertMsg').innerHTML = " " + '<i class="fa fa-exclamation-triangle"></i>' + ' ' + error.code + " ";
					setTimeout(function () { document.getElementById('alert').style.display = "none"; }, 5000);
				});
		}


		window.login = function (e) {
			e.preventDefault();
			const form = new FormData(e.target);
			const { email, password } = Object.fromEntries(form);
			console.log(email, password);
			signInWithEmailAndPassword(auth, email, password)
				.then(async ({ user }) => {
					console.log(user)


					const docRef = doc(db, "users", user.uid);
					const docSnap = await getDoc(docRef);

					if (docSnap.exists()) {
						console.log("Document data:", docSnap.data());
						const data = docSnap.data();
						if (data.role == "admin") {
							window.location = "/weblab/index.html"
						}
						if (data.role == "counseller") {
							window.location = "/weblab/index.html"
						}

					} else {
						console.log("No such document!");
					}


					document.getElementById("dropdown").style.display = "block"

					document.getElementById("username").innerHTML = user.displayName + '   ' + '<i class="fa fa-caret-down" aria-hidden="true"></i>'
					document.getElementById("loginbtn").style.display = "none"
					document.getElementById("signinbtn").style.display = "none"
					$('#loginModal1').click();
				})
				.catch((error) => {
					document.getElementById('alert').style.display = "block";
					document.getElementById('alertMsg').innerHTML = " " + '<i class="fa fa-exclamation-triangle"></i>' + ' ' + error.code + " ";
					setTimeout(function () { document.getElementById('alert').style.display = "none"; }, 5000);
				});
		}
		// console.log()

		window.logout = function () {
			signOut(auth).then(() => {
				document.getElementById("loginbtn").style.display = "block"
				document.getElementById("signinbtn").style.display = "block"
				document.getElementById("dropdown").style.display = "none"
			}).catch((error) => {
				console.log(error)
				document.getElementById('alert').style.display = "block";
				document.getElementById('alertMsg').innerHTML = " " + '<i class="fa fa-exclamation-triangle"></i>' + ' ' + error.code + " ";
				setTimeout(function () { $('.alert').alert('close') }, 5000);
			});
		}


		window.loaded =async function () {
			console.log("loaded")
			await getCurrentUser()
			console.log(auth.currentUser)
			document.getElementById("alert").style.display = "none"
			const user = auth.currentUser;
			if (user !== null) {
				document.getElementById("username").innerHTML = user.displayName + '   ' + '<i class="fa fa-caret-down" aria-hidden="true"></i>'
				document.getElementById("loginbtn").style.display = "none"
				document.getElementById("signinbtn").style.display = "none"
				const uid = user.uid;
				console.log(user)
			} else {
				document.getElementById("dropdown").style.display = "none"
			}
		}
	</script>

</body>

</html>