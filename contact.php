<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>PT. Multi Razulka Sakti</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="img/logo.png" rel="icon" />
    <link href="img/logo.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!--==========================
    Header
  ============================-->
    <header id="header" class="header-all">
      <div class="container-fluid">
        <div class="pull-left logo-all">
          <a href="index.html"
            ><img
              src="img/logo.png"
              alt="PT. Multi Razulka Sakti"
              title="PT. Multi Razulka Sakti"
          /></a>
          <a>PT. Multi Razulka Sakti</a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class=""><a href="index.html">Beranda</a></li>
            <li class="menu-has-children">
              <a href="profile-company.html">Tentang Kami</a>
              <ul>
                <li><a href="profile-company.html">Profil Perusahaan</a></li>
                <li><a href="profile-company.html">Legalitas</a></li>
                <li><a href="profile-company.html">Struktur Perusahaan</a></li>
              </ul>
            </li>
            <li class="menu-has-children">
              <a href="product-services.html">Produk dan Layanan</a>
              <ul>
                <li><a href="batching-plant.html">Batching Plant</a></li>
                <li>
                  <a href="general-contractor.html">General Contractor</a>
                </li>
                <li><a href="amp.html">Asphalt Mixing Plant (AMP)</a></li>
              </ul>
            </li>
            <li class="menu-active"><a href="contact.php">Kontak</a></li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->
    <main>
      <div class="container">
        <header class="profile-company">
          <h3>Kontak Kami</h3>
        </header>
        <div class="row">
          <div
            class="col-md-4 box wow profile-company text-center"
            data-wow-duration="1.4s"
          >
            <img src="img/logo.png" alt="" />
          </div>
          <div class="col-md-8 box wow" data-wow-duration="1.4s">
            <h4 class="title"><a href="">PT. MULTI RAZULKA SAKTI</a></h4>
            <p>
              Alamat : <br />Jl. Trunojoyo, Desa Bakalan Kec. Bululawang -
              Malang
            </p>
            <div class="row">
              <div class="col">
                <i class="fa fa-phone"></i>
                <a href="tel:+6281232253444">081232253444</a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <i class="fa fa-globe"></i>
                <a href="https://www.ptmultirazulkasakti.com" target="_blank"
                  >www.ptmultirazulkasakti.com</a
                >
              </div>
            </div>
            <div class="row">
              <div class="col">
                <i class="fa fa-envelope"></i>
                <a href="mailto:ptmrsindonesia@gmail.com"
                  >ptmrsindonesia@gmail.com</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <section id="contact-form">
        <div class="container">
          <header class="profile-company">
            <h3>Tinggalkan Pesan</h3>
          </header>
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="insert_pesan.php" method="post" role="form" class="contactForm">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                    data-rule="email"
                    data-msg="Please enter a valid email"
                  />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Subject"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject"
                />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  data-rule="required"
                  data-msg="Please write something for us"
                  placeholder="Message"
                ></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </section>

      <!--==========================
      Call To Action Section
    ============================-->
      <section id="call-to-action" class="wow fadeIn">
        <div class="container text-left">
          <h3>Berkomitmen dalam membangun negeri</h3>
          <p>
            Fokus dan komitmen untuk meraih kepercayaan, loyalitas, dan kepuasan
            pelanggan.
          </p>
        </div>
      </section>
      <!-- #call-to-action -->
    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="text-center">
            <img src="img/logo.png" alt="PT> Multi Razulka Sakti" />
            <h4>PT. Multi Razulka Sakti</h4>
            <div class="link-bawah">
              <a href="index.html">Beranda</a>
              <a href="profile-company.html">Tentang Kami</a>
              <a href="product-services.html">Layanan dan Produk</a>
              <a href="contact.php">Kontak</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- #footer -->

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
</html>
