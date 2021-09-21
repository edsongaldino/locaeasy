<?php require_once("site_mod_include.php");?>
<?php
//Abre a conexão
$pdo = Database::conexao();
$codigo_texto = protege($_GET["codigo_texto"]);

//consulta textos do produto
$sql_consulta_texto = "SELECT codigo_texto, titulo, subtitulo, banner, arquivo, texto, status FROM texto WHERE codigo_texto = '".$codigo_texto."'";
$result = $pdo->query( $sql_consulta_texto );
$texto = $result->fetch( PDO::FETCH_ASSOC );
?>
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
      <div class="parallax parallax--nav-1">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-12">
              <h2>
              <?php echo $texto["titulo"];?>
              </h2>
              <ul class="breadcrumbs ul--inline ul--no-style">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <span>/</span>
                <li class="active">
                <?php echo $texto["titulo"];?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Navigation -->
    <!-- We Are -->
    <section class="we-are">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-5 col-md-12 col-12">
            <div class="we-are__left">
            <img alt="We Are 1" src="conteudos/texto/<?php echo $texto["arquivo"];?>">
            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-12">
            <div class="we-are__right">
              <h2 class="title--small"><?php echo $texto["subtitulo"];?>p</h2>
              <p>
              <?php echo $texto["texto"];?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End we are -->
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