<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>jazlyn personalweb</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('import/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('import/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">S

      <div class="profile">
        <img src="{{ asset('import/assets/img/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Jazlyn Latif</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/?lang=en-id" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://web.facebook.com/?_rdc=1&_rdr" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.skype.com/en/" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="https://www.linkedin.com/authwall?trk=qf&original_referer=https://www.google.com/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2F" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Welcome!</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Hi, im Jazlyn</span></a></li>
          <li><a href="#crud" class="nav-link scrollto"><i class="bx bx-water"></i> <span>My Projects</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-music"></i> <span>My Education</span></a></li>
          <li><a href="login" class="nav-link scrollto"><i class="bx bx-smile"></i> <span>Click if you are me!</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>jazlyn latif</h1>
      <p>I'm a <span class="typed" data-typed-items="Student, Programmer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('import/assets/img/profile-img.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Student &amp; Web Developer.</h3>
            <p class="fst-italic">
              Hi, my name is Jazlyn. Here are several things you can know about me,
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>26 February 2004</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 812 264 44120</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Semarang, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Undergraduate</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>jazlyn.latif@binus.ac.id</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
          
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

         <!-- Start CRUD section-->
    <section id="crud" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Projects</h2>
        </div>
        <div class="row">
          <div class="col-md-12" data-aos="fade-up">
            <h1></h1>
            <table class="table">
              <thead><tr>
                <th>No.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Status</th>
              </tr></thead>
            <tbody>
              @foreach ($data as $stu)
                <tr>
                  <td>{{$stu->id}}</td>
                  <td>{{$stu->name}}</td>
                  <td>{{$stu->description}}</td>
                  <td>{{$stu->category}}</td>
                  <td>{{$stu->status}}</td>
                </tr>
              @endforeach
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </section><!-- End CRUD Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>My Education</h2>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><a href =""></a><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href ="https://www.youtube.com/watch?v=Os_heh8vPfs">Mondial Junior High School Semarang</a></h4>
            <p class="description">- 2016 to 2019 <br>- Journalist</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="https://www.youtube.com/watch?v=R9At2ICm4LQ&t=3s">Al Azhar 9 Islamic High School Yogyakarta</a></h4>
            <p class="description">- 2019 to 2021 <br>- OSIS</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="https://www.youtube.com/watch?v=P9tKTxbgdkk">Bina Nusantara (BINUS) University Malang</a></h4>
            <p class="description">- 2021 to now <br>- Computer Science</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
  
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('import/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('import/assets/js/main.js') }}"></script>

</body>

</html>