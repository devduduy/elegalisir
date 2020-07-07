<!--==========================
  Header
  ============================-->
<header id="header">

  <div id="topbar">
    <div class="container">
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </div>

  <div class="container">

    <div class="logo float-left">
      <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="text-light"><a href="#intro" class="scrollto"><span>E-Legalisir</span></a></h1>
      <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
    </div>

    <nav class="main-nav float-right d-none d-lg-block">
      <ul>
        <li class="active"><a href="#intro">Beranda</a></li>
        <li><a href="#about">Tentang Kami</a></li>
        <li><a href="#services">Layanan</a></li>
        <!-- <li><a href="#portfolio">Panduan</a></li> -->
        <li><a href="#footer">Kontak Kami</a></li>
      </ul>
    </nav><!-- .main-nav -->

  </div>
</header><!-- #header -->

<!--==========================
    Intro Section
  ============================-->
<section id="intro" class="clearfix">
  <div class="container d-flex h-100">
    <div class="row justify-content-center align-self-center">
      <img src="<?= base_url(); ?>assetsU/img/graduation.png" alt="" width="60px" height="60px" style="position: absolute; margin-top: -35px; margin-left: 155px;">
      <div class="intro-info order-md-first order-last">

        <h2>Sistem Pelayanan Legalisir Ijazah<br>Fakultas Ilmu Komputer<br>Universitas Mercu Buana</h2>
        <div>
          <a href="<?= base_url(); ?>user/cek_mhs" class="btn-get-started scrollto">Mulai Legalisir</a>
          <a href="<?= base_url(); ?>user/cek_pengorder" class="btn-get-started scrollto" style="background-color: #A49907">Cek Legalisir</a>
        </div>
      </div>

      <!-- <div class="col-md-6 intro-img order-md-last order-first">
        <img src="<?= base_url(); ?>assetsU/img/intro-img.svg" alt="" class="img-fluid">
      </div> -->
    </div>

  </div>
</section><!-- #intro -->

<main id="main">

  <!--==========================
      About Us Section
    ============================-->
  <section id="about">

    <div class="container">
      <div class="row">

        <div class="col-lg-5 col-md-6">
          <div class="about-img">
            <img src="<?= base_url(); ?>assetsU/img/ijazah.jpg" alt="">
          </div>
        </div>

        <div class="col-lg-7 col-md-6">
          <div class="about-content">
            <h2>Apa itu E-legalisir ?</h2>
            <h3>E-legalisir adalah</h3>
            <p align="justify">Sebagai upaya meningkatkan silaturahmi,
              kerja sama, dan peningkatan kualitas mutu
              serta <strong>layanan</strong> Fasilkom UMB untuk Alumni,
              Fakultas menerapkan layanan online untuk
              semua pemangku kepentingan,
              salah satunya sistem pelayanan
              <strong>Legalisir Ijazah / Transkrip Nilai.</strong></p>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Pembuatan <strong>Legalisir Ijazah / Transkrip</strong> dimana saja dan kapan saja.</li>
              <li><i class="ion-android-checkmark-circle"></i> Pembuatan <strong>Legalisir Ijazah / Transkrip</strong> yang relatif lebih cepat.</li>
              <li><i class="ion-android-checkmark-circle"></i> Pembuatan <strong>Legalisir Ijazah / Transkrip</strong> lebih mudah dan <i>user friendly</i>.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section><!-- #about -->


  <!--==========================
      Services Section
    ============================-->
  <section id="services" class="section-bg">
    <div class="container">

      <header class="section-header">
        <h3>Layanan E-legalisir</h3>
        <p>Berikut adalah layanan dari sistem E-legalisir.</p>
      </header>

      <div class="row">

        <div class="col-md-8 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
            <h4 class="title">Legalsir Ijazah</h4>
          </div>
        </div>
        <div class="col-md-8 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
            <h4 class="title">Legalisir Transkrip Nilai</h4>
          </div>
        </div>
        <!-- <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div> -->

      </div>

    </div>
  </section><!-- #services -->

  <!--==========================
      Why Us Section
    ============================-->
  <!-- <section id="why-us" class="wow fadeIn">
    <div class="container-fluid">

      <header class="section-header">
        <h3>Why choose us?</h3>
        <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <div class="why-us-img">
            <img src="<?= base_url(); ?>assetsU/img/why-us.jpg" alt="" class="img-fluid">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="why-us-content">
            <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
            <p>
              Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
              et temporibus. Labore est odio.

              Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
            </p>

            <div class="features wow bounceInUp clearfix">
              <i class="fa fa-diamond" style="color: #f058dc;"></i>
              <h4>Corporis dolorem</h4>
              <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
            </div>

            <div class="features wow bounceInUp clearfix">
              <i class="fa fa-object-group" style="color: #ffb774;"></i>
              <h4>Eum ut aspernatur</h4>
              <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
            </div>

            <div class="features wow bounceInUp clearfix">
              <i class="fa fa-language" style="color: #589af1;"></i>
              <h4>Voluptates dolores</h4>
              <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="container">
      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">274</span>
          <p>Clients</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">421</span>
          <p>Projects</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">1,364</span>
          <p>Hours Of Support</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">18</span>
          <p>Hard Workers</p>
        </div>

      </div>

    </div>
  </section> -->

  <!--==========================
      Call To Action Section
    ============================-->
  <!-- <section id="call-to-action" class="wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Call To Action</h3>
          <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Call To Action</a>
        </div>
      </div>

    </div>
  </section> -->
  <!-- #call-to-action -->

  <!--==========================
      Features Section
    ============================-->
  <!-- <section id="features">
    <div class="container">

      <div class="row feature-item">
        <div class="col-lg-6 wow fadeInUp">
          <img src="<?= base_url(); ?>assetsU/img/features-1.svg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
          <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
          <p>
            Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
          </p>
          <p>
            Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
          </p>
        </div>
      </div>

      <div class="row feature-item mt-5 pt-5">
        <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
          <img src="<?= base_url(); ?>assetsU/img/features-2.svg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
          <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
          <p>
            Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
          </p>
          <p>
            Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
          </p>
          <p>
            Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
          </p>
        </div>

      </div>

    </div>
  </section> -->
  <!-- #about -->

  <!--==========================
      Portfolio Section
    ============================-->
  <!--==========================
      Services Section
    ============================-->
  <section id="services" class="section-bg">
    <div class="container">

      <header class="section-header">
        <h3>Panduan E-Legalisir</h3>
        <p>Berikut merupakan cara membuat permohonan legalisir.</p>
      </header>

      <div class="row justify-content-center">

        <div class="col-md-4 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
            <h4 class="title">Unggah Berkas</h4>
            <p class="description">Mudah saja, cukup upload berkas Ijazah / Transkip nilai anda.</p>
          </div>
        </div>
        <i class="ion-ios-arrow-forward" style="color: #ff689b; margin-top: 100px;"></i>
        <div class="col-md-4 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
            <h4 class="title">Notifikasi</h4>
            <p class="description">Dapatkan notifikasi terkait status berkas melalui email anda.</p>
          </div>
        </div>
        <i class="ion-ios-arrow-forward" style="color: #ff689b; margin-top: 100px;"></i>
        <div class="col-md-4 col-lg-3 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
            <h4 class="title">Ambil Berkas</h4>
            <p class="description">Segera datang ke bagian TU Fasilkom untuk mengambil berkas anda.</p>
          </div>
        </div>
        <!-- <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div> -->

      </div>

    </div>
  </section><!-- #services -->
  <!-- #portfolio -->

  <!--==========================
      Clients Section
    ============================-->
  <!-- <section id="testimonials">
    <div class="container">

      <header class="section-header">
        <h3>Testimonials</h3>
      </header>

      <div class="row justify-content-center">
        <div class="col-lg-8">

          <div class="owl-carousel testimonials-carousel wow fadeInUp">

            <div class="testimonial-item">
              <img src="<?= base_url(); ?>assetsU/<?= base_url(); ?>assetsU/img/testimonial-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              </p>
            </div>

            <div class="testimonial-item">
              <img src="<?= base_url(); ?>assetsU/<?= base_url(); ?>assetsU/img/testimonial-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              </p>
            </div>

            <div class="testimonial-item">
              <img src="<?= base_url(); ?>assetsU/img/testimonial-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              </p>
            </div>

            <div class="testimonial-item">
              <img src="<?= base_url(); ?>assetsU/img/testimonial-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              </p>
            </div>

          </div>

        </div>
      </div>


    </div>
  </section> -->
  <!-- #testimonials -->

  <!--==========================
      Team Section
    ============================-->
  <!-- <section id="team" class="section-bg">
    <div class="container">
      <div class="section-header">
        <h3>Team</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 wow fadeInUp">
          <div class="member">
            <img src="<?= base_url(); ?>assetsU/img/team-1.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="member">
            <img src="<?= base_url(); ?>assetsU/img/team-2.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="member">
            <img src="<?= base_url(); ?>assetsU/img/team-3.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="member">
            <img src="<?= base_url(); ?>assetsU/img/team-4.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- #team -->

  <!--==========================
      Clients Section
    ============================-->
  <!-- <section id="clients" class="wow fadeInUp">
    <div class="container">

      <header class="section-header">
        <h3>Our Clients</h3>
      </header>

      <div class="owl-carousel clients-carousel">
        <img src="<?= base_url(); ?>assetsU/img/clients/client-1.png" alt="">
        <img src="<?= base_url(); ?>assetsU/img/clients/client-2.png" alt="">
        <img src="<?= base_url(); ?>assetsU/img/clients/client-3.png" alt="">
        <img src="<?= base_url(); ?>assetsU/img/clients/client-4.png" alt="">
        <img src="<?= base_url(); ?>assetsU/img/clients/client-5.png" alt="">
        <img src="<?= base_url(); ?>assetsU/img/clients/client-6.png" alt="">
        <img src="<?= base_url(); ?>assetsU/img/clients/client-7.png" alt="">
        <img src="<?= base_url(); ?>assetsU/img/clients/client-8.png" alt="">
      </div>

    </div>
  </section> -->
  <!-- #clients -->


  <!--==========================
      Pricing Section
    ============================-->
  <!-- <section id="pricing" class="wow fadeInUp section-bg">

    <div class="container">

      <header class="section-header">
        <h3>Pricing</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </header>

      <div class="row flex-items-xs-middle flex-items-xs-center"> -->

  <!-- Basic Plan  -->
  <!-- <div class="col-xs-12 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h3><span class="currency">$</span>19<span class="period">/month</span></h3>
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Basic Plan
              </h4>
              <ul class="list-group">
                <li class="list-group-item">Odio animi voluptates</li>
                <li class="list-group-item">Inventore quisquam et</li>
                <li class="list-group-item">Et perspiciatis suscipit</li>
                <li class="list-group-item">24/7 Support System</li>
              </ul>
              <a href="#" class="btn">Choose Plan</a>
            </div>
          </div>
        </div> -->

  <!-- Regular Plan  -->
  <!-- <div class="col-xs-12 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Regular Plan
              </h4>
              <ul class="list-group">
                <li class="list-group-item">Odio animi voluptates</li>
                <li class="list-group-item">Inventore quisquam et</li>
                <li class="list-group-item">Et perspiciatis suscipit</li>
                <li class="list-group-item">24/7 Support System</li>
              </ul>
              <a href="#" class="btn">Choose Plan</a>
            </div>
          </div>
        </div> -->

  <!-- Premium Plan  -->
  <!-- <div class="col-xs-12 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Premium Plan
              </h4>
              <ul class="list-group">
                <li class="list-group-item">Odio animi voluptates</li>
                <li class="list-group-item">Inventore quisquam et</li>
                <li class="list-group-item">Et perspiciatis suscipit</li>
                <li class="list-group-item">24/7 Support System</li>
              </ul>
              <a href="#" class="btn">Choose Plan</a>
            </div>
          </div>
        </div>

      </div>
    </div> -->

  <!--</section>
#pricing -->

  <!--==========================
      Frequently Asked Questions Section
    ============================-->
  <section id="faq">
    <div class="container">
      <header class="section-header">
        <h3>FAQ / Seputar Pertanyaan</h3>
        <p>Hal - hal yang sekiranya dapat ditanyakan.</p>
      </header>

      <ul id="faq-list" class="wow fadeInUp">
        <li>
          <a data-toggle="collapse" class="collapsed" href="#faq1">Layanan E-legalisir ini ditujukan untuk siapa ? <i class="ion-android-remove"></i></a>
          <div id="faq1" class="collapse" data-parent="#faq-list">
            <p>
              Layanan ini hanya dapat digunakan bagi alumni yang ingin melakukan legalisir ijazah maupun transkip nilai.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq2" class="collapsed">Berapa lama proses legalisir ijazah sampai dengan selesai ? <i class="ion-android-remove"></i></a>
          <div id="faq2" class="collapse" data-parent="#faq-list">
            <p>
              Proses kurang lebih 3 hari kerja setelah melakukan pembayaran.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq3" class="collapsed">Apakah ada jumlah batas berkas dalam melakukan proses legalisir ? <i class="ion-android-remove"></i></a>
          <div id="faq3" class="collapse" data-parent="#faq-list">
            <p>
              Maksimal melakukan legalisir ijazah / transkip nilai masing - masing 10 lembar.
            </p>
          </div>
        </li>

        <!-- <li>
          <a data-toggle="collapse" href="#faq4" class="collapsed">belum? <i class="ion-android-remove"></i></a>
          <div id="faq4" class="collapse" data-parent="#faq-list">
            <p>
              belum.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq5" class="collapsed">belum ? <i class="ion-android-remove"></i></a>
          <div id="faq5" class="collapse" data-parent="#faq-list">
            <p>
              belum.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq6" class="collapsed">belum ? <i class="ion-android-remove"></i></a>
          <div id="faq6" class="collapse" data-parent="#faq-list">
            <p>
              belum.
            </p>
          </div>
        </li> -->

      </ul>

    </div>
  </section><!-- #faq -->

</main>

<!--==========================
    Footer
  ============================-->
<footer id="footer" class="section-bg">
  <div class="footer-top">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">

          <div class="row">

            <!-- <div class="col-sm-6">

              <div class="footer-info">
                <h3>E-legalisir</h3>
                <p>Sukses ya projectnya semangat terus baru front end nya wkwk.</p>
              </div>

            </div> -->

            <div class="col-sm-6">
              <div class="footer-links">
                <h4>Kontak kami</h4>
                <p>
                  Fakultas Ilmu Komputer <br>
                  Universitas Mercu Buana<br>
                  Jl. Meruya Selatan No.1 Gedung C Lantai 2 <br>
                  <strong>Phone:</strong> +6221-5840816 ext 5700<br>
                  <strong>Email:</strong> fasilkom@mercubuana.ac.id<br>
                </p>
              </div>

              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-6">

          <div class="footer">

            <h4>Tata Usaha Fasilkom</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4069506192086!2d106.73630331413752!3d-6.209935262555687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f77ff148cf91%3A0x427424e1139b64fc!2sFakultas%20Ilmu%20Komputer%20Universitas%20Mercu%20Buana!5e0!3m2!1sen!2sid!4v1572050111528!5m2!1sen!2sid" width="80%" height="250" allowfullscreen=""></iframe>
            <!-- <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
            </form> -->
          </div>

        </div>



      </div>

    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Yudha Permana</strong>. Aslab Fasilkom
    </div>
    <div class="credits">
      <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
    </div>
  </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->