<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>dashboard</title>

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
    <div class="d-flex flex-column">

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#crud" class="nav-link scrollto"><i class="bx bx-water"></i> <span>Projects</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-music"></i> <span>My Education</span></a></li>
          <li><a href="logout" class="nav-link scrollto"><i class="bx bx-smile"></i> <span>log out</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Start CRUD section-->
    <section id="crud" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Projects</h2>

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
                <th>Action</th>
              </tr></thead>
            <tbody>
              @foreach ($datas as $stu)
                <tr>
                  <td>{{$stu->id}}</td>
                  <td>{{$stu->name}}</td>
                  <td>{{$stu->description}}</td>
                  <td>{{$stu->category}}</td>
                  <td>{{$stu->status}}</td>
                  <td><a href="{{url('editprojects/'.$stu->id)}}" class="btn btn-primary">Edit</a> | <a href="{{url('deleteprojects/'.$stu->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
              @endforeach
            </tbody>
            </table>
            <div style="margin-right: 10px">
              <a href="{{url('addprojects')}}" style="float: right">Add</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End CRUD Section -->
  
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