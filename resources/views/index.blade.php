<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Restaurantly Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  @include('include.style')
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">ndalemhanomanyk@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>08954598564</span></i>
        </div>
        <div class="languages d-none d-md-flex align-items-center">
          <ul>
            <li>En</li>
            <li><a href="#">De</a></li>
          </ul>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="style/assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Ndalem Hanoman</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#specials">Specials</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        
        <a class="btn-book-a-table d-none d-xl-block" href="#book-a-table">Book a Table</a>
        
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="style/assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>Ndalem Hanoman</span></h2>
            <p data-aos="fade-up" data-aos-delay="200">Sugeng Rawuh</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              <a href="#menu" class="cta-btn">Menu</a>
              <a href="#book-a-table" class="cta-btn">Reservasi</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="style/assets/img/about.jpg" class="img-fluid about-img" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3>CAFE AND RESTO TRADISIONAL MODERN</h3>
            <p class="fst-italic">
              
Cafe Ndalem Hanoman adalah kafe tradisional dengan sentuhan modern yang menghadirkan nuansa budaya Jawa yang kental. Nama "Ndalem" berarti "rumah" atau "kediaman" dalam bahasa Jawa, sementara "Hanoman" merujuk pada sosok kera putih dalam Ramayana, simbol keberanian dan kejujuran. Kafe ini menyajikan wedangan khas Jawa dan hidangan tradisional dalam suasana nyaman dan autentik.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Untuk Nongkrong,Nugas,Bersantai cocok</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Buat acara keluarga dengan Reservasi runga luas dengan menu paket terjangkau</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Live musik di malam minggu </span></li>
            </ul>
            <p>
              Ndalem Hanoman merupakan salah satu tempat makan di Yogyakarta yang mengusung konsep prasmanan. Tempat ini sangat cocok untuk pengunjung yang ingin makan bersama keluarga besar setelah lelah berkeliling di Malioboro.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Menu</h2>
        <p>Menu Tradisional</p>
      </div><!-- End Section Title -->

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul class="menu-filters isotope-filters">
              <li data-filter="*" class="filter-active">Wedangan</li>
              <li data-filter=".espresso" class="filter-espresso">Espresso Based</li>
              <li data-filter=".snack" class="filter-snack">Snack</li>
            </ul>
          </div>
        </div><!-- Menu Filters -->

        <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">

          <!-- Wedangan -->

          <div class="col-lg-6 menu-item isotope-item filter-starters">
            <img src="style/assets/img/menu/wedang-laksmana.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Wedang Laksmana</a><span>12K</span>
            </div>
            <div class="menu-ingredients">
             Perpaduan antara Jahe,Vanila,dan Jeruk Nipis
            </div>
          </div>

          <div class="col-lg-6 menu-item isotope-item filter-specialty">
            <img src="style/assets/img/menu/wedang-bharata.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Wedang Bharata</a><span>12K</span>
            </div>
            <div class="menu-ingredients">
              Perpaduan andata Wedang Teh,Jahe,Vanila,dan Kayu Manis
            </div>
          </div>

          <div class="col-lg-6 menu-item isotope-item filter-starters">
            <img src="style/assets/img/menu/wedang-sengkuni.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Wedang Sengkuni</a><span>10K</span>
            </div>
            <div class="menu-ingredients">
              Perbaduan antara Wedang Jahe dan Sereh
            </div>
          </div>

          <div class="col-lg-6 menu-item isotope-item filter-salads">
            <img src="style/assets/img/menu/wedang-kumbakarna.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Wedang Kumbakarna</a><span>7K</span>
            </div>
            <div class="menu-ingredients">
              Perpaduan Jahe, Secang, Kayu Manis, Sereh, Kapulaga, dan Gula Batu
            </div>
          </div>

          <div class="col-lg-6 menu-item isotope-item filter-specialty">
            <img src="style/assets/img/menu/wedang-jeruk.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Wedang Jeruk</a><span>7K</span>
            </div>
            <div class="menu-ingredients">
              Racikan Jeruk Peras Khas Hanoman
            </div>
          </div>

          <div class="col-lg-6 menu-item isotope-item filter-starters">
            <img src="style/assets/img/menu/wedang-anjani.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Wedang Teh Anjani</a><span>5K</span>
            </div>
            <div class="menu-ingredients">
              Racikan wedang Teh Khas Ndalem Hanoman
            </div>
          </div>

          <div class="col-lg-6 menu-item isotope-item filter-salads">
            <img src="style/assets/img/menu/wedang-dewi-sri.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Wedang Dewi Sri</a><span>15K</span>
            </div>
            <div class="menu-ingredients">
              Wedang Jeruk,Susu,dan Sereh
            </div>
          </div>

          <div class="col-lg-6 menu-item isotope-item filter-salads">
            <img src="style/assets/img/menu/wedang-anilaa.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Wedang Anila</a><span>15K</span>
            </div>
            <div class="menu-ingredients">
              Wedang Jahe,Susu,dan Kayu Manis
            </div>
          </div>

          <div class="col-lg-6 menu-item isotope-item filter-specialty">
            <img src="style/assets/img/menu/wedang-aswanikumba.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Wedang Aswanikumba</a><span>13K</span>
            </div>
            <div class="menu-ingredients">
              Wedang Teh,Jahe,dan Susu
            </div>
          </div>
          
          
          <div class="col-lg-6 menu-item isotope-item filter-specialty">
            <img src="style/assets/img/menu/wedang-dewi-sinta.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Wedang Dewi Shinta</a><span>12K</span>
            </div>
            <div class="menu-ingredients">
              Wedang Teh dan Susu
            </div>
          </div>
        </div>
        
          <!--Espresso Based -->
          <div class="col-lg-6 menu-item isotope-item filter-espresso">
            <img src="style/assets/img/menu/kopi-susu-aren.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Kopi Susu Aren</a><span>20K</span>
            </div>
            <div class="menu-ingredients">
              Espresso susu segar gula aren
            </div>
          </div>

          <div class="col-lg-6 menu-item isotope-item filter-espresso">
            <img src="style/assets/img/menu/vanilla-latte.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Vanilla Latte</a><span>20K</span>
            </div>
            <div class="menu-ingredients">
              Espresso susu segar sirup vanilla
            </div>
          </div>
          
        <div class="col-lg-6 menu-item isotope-item filter-espresso">
          <img src="style/assets/img/menu/Cappucino.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Cappucino</a><span>20K</span>
          </div>
          <div class="menu-ingredients">
            Espresso dan susu segar 
          </div>
        </div>

        <div class="col-lg-6 menu-item isotope-item filter-espresso">
          <img src="style/assets/img/menu/Tiramisu.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Tiramisu</a><span>25K</span>
          </div>
          <div class="menu-ingredients">
            Espresso Susu krimer Coklat Kental manis Whipcream
          </div>
        </div>

        <div class="col-lg-6 menu-item isotope-item filter-espresso">
          <img src="style/assets/img/menu/Daren.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Daren</a><span>25K</span>
          </div>
          <div class="menu-ingredients">
            Espresso Susu krimer Sirup whipcream
          </div>
        </div>

        <!--Snack -->
        {{-- <div class="col-lg-6 menu-item isotope-item filter-snack">
          <img src="style/assets/img/menu/pisang.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Pisang Goreng</a><span>20K</span>
          </div>
        </div> --}}

        </div><!-- Menu Container -->

    </section><!-- /Menu Section -->

    <!-- Specials Section -->
    <section id="specials" class="specials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Specials</h2>
        <p>Specials Menu Malam</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#specials-tab-1">Nasi Goreng Teri Hijau</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-2">Nasi Goreng Hanoman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-3">Bakmi Godog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-4">Bakmi Goreng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-5">Kwetiau Goreng</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="specials-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Nasi Goreng Teri Hijau</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="style/assets/img/specials-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Nasi Goreng Hanoman</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="style/assets/img/specials-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Bakmi Godog</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="style/assets/img/specials-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Bakmi Goreng</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="style/assets/img/specials-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="specials-tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Kwetiau Goreng</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="style/assets/img/specials-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Specials Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <img class="slider-bg" src="style/assets/img/events-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">

        <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="style/assets/img/events-slider/events-slider-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>$189</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End Slider item -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="style/assets/img/events-slider/events-slider-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>$290</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End Slider item -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="style/assets/img/events-slider/events-slider-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>$99</span></p>
                  </div>
                  <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p>
                  <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  </ul>
                  <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur
                  </p>
                </div>
              </div>
            </div><!-- End Slider item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->
    
  

    <!-- Book A Table Section -->
     <!--login-->
     
    <section id="book-a-table" class="book-a-table section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <form action="/login" method="get" role="form" class="php-email-form">
              <div class="row gy-4">
                  <div class="text-center mt-3">
                      <a href="/login" class="btn btn-primary">Book a Table</a>
                  </div>
              </div>
          </form><!-- End Reservation Form -->
      </div>
  </section>
  <!-- /Book A Table Section -->



    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Some photos from Our Restaurant</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="style/assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="style/assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="style/assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="style/assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="style/assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="style/assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="style/assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="style/assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="style/assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="style/assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="style/assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="style/assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="style/assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="style/assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="style/assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="style/assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Lokasi</h3>
                <p>Jl. Mas Suharto No.46, Tegal Panggung, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55212</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Buka Setiap Hari</h3>
                <p>Senin-Minggu:<br>08.00 AM - 23.00 PM</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telepon</h3>
                <p>08954598564</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>ndalemhanomanyk@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Ndalem Hanoman</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Daerah Istimewa Yogyakarta</p>
            <p>Jl. Mas Suharto No.46, Tegal Panggung, Kec. Danurejan</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>08954598564</span></p>
            <p><strong>Email:</strong> <span>ndalemhanomanyk@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Ndalem Hanoman</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  @include('include.script')


</body>

</html>