<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Resume</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/vendor/aos.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="{{ asset('css/vendor/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/stylewebpage.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyPortfolio - v4.9.0
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
@foreach($resume as $value)
  <main id="main">

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-0 align-items-center">
          <div class="col-md-12 col-lg-6 mb-0 mb-lg-0" data-aos="fade-up">
            <h2>Hey, I'm {{ $value->user->username }}</h2>
            <p class="mb-0">Ready to work!</p>
          </div>
        </div>
      </div>
    </section><!-- End  Works Section -->

    <!-- ======= Work Experience Section ======= -->
    <section class="section services">
      <div class="container" data-aos="fade-up">
        <div class="row mb-4 align-items-center">
          <div class="col-5">
            <h3 class="h3 heading">My Work Experience&nbsp;&nbsp;&nbsp;<i class="bi bi-person-workspace"></i></h3>
          </div>
        </div>
        <div class="row">

          <div class="col-12">
            {!! $value->work_experience !!}
          </div>
        </div>
      </div>
    </section><!-- Work Experience Section -->

    <!-- ======= Education Section ======= -->
    <section class="section services">
        <div class="container" data-aos="fade-up">
          <div class="row mb-4 align-items-center">
            <div class="col-5">
              <h3 class="h3 heading">My Education&nbsp;&nbsp;&nbsp;<i class="bi bi-award"></i></h3>
            </div>
          </div>
          <div class="row">
  
            <div class="col-12">
              {!! $value->education !!}
            </div>
          </div>
        </div>
      </section><!-- Education Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright {{ $value->user->username }}. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-6 social text-md-end">
          <a href="#"><span class="bi bi-twitter"></span></a>
          <a href="#"><span class="bi bi-facebook"></span></a>
          <a href="#"><span class="bi bi-instagram"></span></a>
          <a href="#"><span class="bi bi-linkedin"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('js/vendor/aos.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/vendor/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/vendor/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>
@endforeach
</body>

</html>