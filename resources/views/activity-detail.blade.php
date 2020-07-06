@include('layout/header')

<body>

  <!-- ======= Top Bar ======= -->
  @include('layout/top-bar')

  <main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><a href="{{ URL::to('activity')}}"> กิจกรรม </a> > สมเด็จพระศรีนครินทรา บรมราชชนนี</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
        
      </div>
      <div class="row activity-bg">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <a href="assets/img/doctors/doctors-1.jpg" class="venobox" data-gall="gallery-carousel">
                        <img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <a href="assets/img/doctors/doctors-1.jpg" class="venobox" data-gall="gallery-carousel">
                        <img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <a href="assets/img/doctors/doctors-1.jpg" class="venobox" data-gall="gallery-carousel">
                        <img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <a href="assets/img/doctors/doctors-1.jpg" class="venobox" data-gall="gallery-carousel">
                        <img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>

        
      </div>

    </section>

  </main><!-- End #main --> 

  <!-- ======= Footer ======= -->
  @include('layout/footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('layout/script')

</body>

</html>