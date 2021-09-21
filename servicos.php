<?php include "site_mod_include.php";?>
<!DOCTYPE html>
<html>
<head>
<?php include "site_mod_head.php";?>
</head>

<body>
  <!-- Page Loader -->
  <div id="page-loader">
    <div class="page-loader__inner">
      <div class="page-loader__spin"></div>
    </div>
  </div>
  <!-- End Page Loader -->
  <!-- Page Wrap -->
  <div class="page-wrap">
    <!-- Header Stick -->
    <header class="header-stick">
    <?php include "site_mod_topo.php";?>
    </header>
    <!-- End Header Desktop -->
    <!-- Menu Canvas -->
    <?php include "site_mod_menu.php";?>
    <!-- End Header Mobile -->

    <!-- Navigation -->
    <section class="navigation">
      <div class="parallax parallax--ser-li">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-12">
              <h2>
                service list
              </h2>
              <ul class="breadcrumbs ul--inline ul--no-style">
                <li>
                  <a href="index.html">Home</a>
                </li>
                <span>/</span>
                <li>
                  <a href="">Services</a>
                </li>
                <span>/</span>
                <li class="active">
                  Service List
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Navigation -->
    <!-- Service List -->
    <section class="service-list">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 1" src="img/service-list-01.jpg">
              <div class="service-list__text">
                <h5>
                  <a href="">Agency interior</a>
                </h5>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sitdow volunterr voluptatem
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 2" src="img/service-list-02.jpg">
              <div class="service-list__text">
                <h5>
                  <a href="">ecommerce interior</a>
                </h5>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sitdow volunterr voluptatem
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 3" src="img/service-list-03.jpg">
              <div class="service-list__text">
                <h5>
                  <a href="">residential interior</a>
                </h5>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sitdow volunterr voluptatem
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 4" src="img/service-list-04.jpg">
              <div class="service-list__text">
                <h5>
                  <a href="">residential interior</a>
                </h5>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sitdow volunterr voluptatem
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 5" src="img/service-list-05.jpg">
              <div class="service-list__text">
                <h5>
                  <a href="">Agency interior</a>
                </h5>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sitdow volunterr voluptatem
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 6" src="img/service-list-06.jpg">
              <div class="service-list__text">
                <h5>
                  <a href="">Coffeshop interior</a>
                </h5>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sitdow volunterr voluptatem
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Contact 2 -->
      <div class="contact2">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="contact2__item">
                <p>
                  We are the reliable partner to help you complete the work
                </p>
                <div>
                  <a href="contact.html" class="au-btn au-btn--pill au-btn--yellow au-btn--medium">Contact now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-12">
              <div class="partner-wrap1 owl-carousel owl-theme" id="owl-partner-2">
                <a href="" class="partner__item item">
                  <img alt="Partner 1" src="img/partner-05.png">
                </a>
                <a href="" class="partner__item item">
                  <img alt="Partner 2" src="img/partner-06.png">
                </a>
                <a href="" class="partner__item item">
                  <img alt="Partner 3" src="img/partner-07.png">
                </a>
                <a href="" class="partner__item item">
                  <img alt="Partner 4" src="img/partner-08.png">
                </a>
                <a href="" class="partner__item item">
                  <img alt="Partner 5" src="img/partner-06.png">
                </a>
                <a href="" class="partner__item item">
                  <img alt="Partner 6" src="img/partner-07.png">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Contact2 -->
    </section>
    <!-- End Service List -->
    <!-- Footer -->
    <footer>
    <?php include "site_mod_rodape.php";?>
    </footer>
    <!-- End Footer -->
    <!-- Copyright -->
    <section class="copyright">
    <?php include "site_mod_copy.php";?>
    </section>
    <!-- End Copyright -->
    <!-- Back to top -->
    <a href="" id="btn-to-top">
      <i class="fa fa-chevron-up"></i>
    </a>
    <!-- End Back to top -->
  </div>
  <!-- End Page Wrap -->

  <!-- =================== PLUGIN JS ==================== -->
  <script src="vendor/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="vendor/wow/wow.min.js" type="text/javascript"></script>
  <script src="vendor/lightbox2/src/js/lightbox.js" type="text/javascript"></script>
  <script src="vendor/bootstrap4/popper.min.js" type="text/javascript"></script>
  <script src="vendor/bootstrap4/bootstrap.min.js" type="text/javascript"></script>
  <script src="vendor/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
  <script src="vendor/revolution/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
  <script src="vendor/revolution/jquery.themepunch.tools.min.js" type="text/javascript"></script>
  <!-- Local Revolution -->
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="vendor/revolution/local/revolution.extension.video.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      lightbox.option({
        'resizeDuration': 200,
        'wrapAround': false,
        'alwaysShowNavOnTouchDevices': true,
      });
    });
  </script>

  <!-- =================== CUSTOM JS ==================== -->
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/revo-custom.js"></script>
  <script type="text/javascript" src="js/wow-custom.js"></script>
</body>

</html>