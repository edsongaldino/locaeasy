<?php require_once("site_mod_include.php");?>
<?php
    //Abre a conexão
	$pdo = Database::conexao();
    
	//consulta produtos
  $sql_consulta_produto = "SELECT produto.codigo_produto, produto.nome_produto,  produto.resumo_produto, produto.valor_produto, produto.estoque_produto, produto.situacao_produto, produto.referencia_produto, foto_produto.arquivo_foto
								FROM foto_produto
								LEFT JOIN produto ON foto_produto.codigo_produto = produto.codigo_produto
								LEFT JOIN produto_categoria ON produto.codigo_produto = produto_categoria.codigo_produto
								LEFT JOIN produto_subcategoria ON produto.codigo_produto = produto_subcategoria.codigo_produto
								WHERE produto.situacao_produto = 'L' GROUP BY foto_produto.codigo_foto ORDER BY produto.nome_produto ASC";
								$result = $pdo->query($sql_consulta_produto);
                $produtos = $result->fetchAll(PDO::FETCH_ASSOC);
                

                //consulta banners index
$sql_consulta_banner_bottom = "SELECT codigo_banner, titulo_banner, link_banner, descricao_banner, arquivo FROM banner WHERE status = 'L' AND codigo_tipo_banner = 2 ORDER BY RAND() LIMIT 3";
$query_banner_bot = $pdo->query( $sql_consulta_banner_bottom );
$banners_bottom = $query_banner_bot->fetchAll( PDO::FETCH_ASSOC );
?>
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
    <!-- Slider -->
    <section class="slide">
    <?php include "site_mod_banner.php";?>
    </section>
    <!-- End Slider -->

    <!-- Service List -->
    <section class="service-list">
      <div class="container">
        <div class="row">
        <?php foreach($produtos as $produto):?>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 1" src="conteudos/produto/<?php echo $produto["codigo_produto"];?>/<?php echo $produto["arquivo_foto"];?>">
              <div class="service-list__text">
                <h5>
                  <a href=""><?php echo $produto["nome_produto"];?></a>
                </h5>
                <p>
                <?php echo $produto["resumo_produto"];?>
                </p><br/>
                <a href="contato.php" class="au-btn au-btn--pill au-btn--yellow au-btn--medium">Orçamento</a>
              </div>
            </div>
          </div>
          <?php $result->closeCursor(); endforeach;?>
        </div>
      </div>
      <!-- Contact 2 -->
      <div class="contact2">
        <div class="container">
          <div class="row">
            <?php foreach($banners_bottom AS $banner_bottom):?>
            <div class="col-lg-4 col-md-12">
              <div class="contact2__item">
                  <a href="<?php echo $banner_bottom["link_banner"];?>"><img src="conteudos/banner/<?php echo $banner_bottom["arquivo"];?>" alt=""></a>
              </div>
            </div>
            <?php endforeach;?>	
            </div>
          </div>
        </div>
      </div>
      <!-- End Contact2 -->
    </section>
    <!-- End Service List -->

    <?php include "site_mod_info_contato.php";?>
    
    <!-- Our process -->
    <section class="our-process" style="display:none;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-12">
            <h2 class="title">
              our
              <span>
                process
              </span>
            </h2>
            <p class="title-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="our-process__item our-process__item--l-b">
              <h3>
                <i class="zmdi zmdi-accounts-alt"></i>
                meet
              </h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accuntium.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="our-process__item our-process__item--l-t">
              <h3>
                <i class="zmdi zmdi-library"></i>
                discussion
              </h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accuntium.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="our-process__item our-process__item--l-b">
              <h3>
                <i class="zmdi zmdi-puzzle-piece"></i>
                ideal
              </h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accuntium.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="our-process__item">
              <h3>
                <i class="zmdi zmdi-city-alt"></i>
                construct
              </h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accuntium.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End our process -->
    <!-- Latest Project -->
    <section class="latest-project" style="display:none;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-12">
            <h2 class="title">
              latest
              <span>
                project
              </span>
            </h2>
            <p class="title-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
          </div>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-3 col-md-6">
          <div class="latest__item">
            <img alt="Project 1" src="img/latest-project-01.jpg">
            <a href="img/latest-project-01.jpg" data-lightbox="Lastest Project" class="overlay overlay--invisible overlay--p-15">
              <div class="overlay--border">

              </div>
            </a>
            <div class="latest__item--content">
              <div class="latest__item--inner">
                <h3>Piety Spire</h3>
                <div class="cat-name">
                  <a href="">
                    <em>Bed room</em>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="latest__item">
            <img alt="Project 2" src="img/latest-project-02.jpg">
            <a href="img/latest-project-02.jpg" data-lightbox="Lastest Project" class="overlay overlay--invisible overlay--p-15">
              <div class="overlay--border">

              </div>
            </a>
            <div class="latest__item--content">
              <div class="latest__item--inner">
                <h3>Monster Den</h3>
                <div class="cat-name">
                  <a href="">
                    <em>Drawing room</em>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="latest__item">
            <img alt="Project 3" src="img/latest-project-03.jpg">
            <a href="img/latest-project-03.jpg" data-lightbox="Lastest Project" class="overlay overlay--invisible overlay--p-15">
              <div class="overlay--border">

              </div>
            </a>
            <div class="latest__item--content">
              <div class="latest__item--inner">
                <h3>Mystery Stream</h3>
                <div class="cat-name">
                  <a href="">
                    <em>Living room</em>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="latest__item">
            <img alt="Project 4" src="img/latest-project-04.jpg">
            <a href="img/latest-project-04.jpg" data-lightbox="Lastest Project" class="overlay overlay--invisible overlay--p-15">
              <div class="overlay--border">

              </div>
            </a>
            <div class="latest__item--content">
              <div class="latest__item--inner">
                <h3>Au guest</h3>
                <div class="cat-name">
                  <a href="">
                    <em>Guest Room</em>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="latest__item">
            <img alt="Project 5" src="img/latest-project-05.jpg">
            <a href="img/latest-project-05.jpg" data-lightbox="Lastest Project" class="overlay overlay--invisible overlay--p-15">
              <div class="overlay--border">

              </div>
            </a>
            <div class="latest__item--content">
              <div class="latest__item--inner">
                <h3>Au Music</h3>
                <div class="cat-name">
                  <a href="">
                    <em>Music Room</em>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="latest__item">
            <img alt="Project 6" src="img/latest-project-06.jpg">
            <a href="img/latest-project-06.jpg" data-lightbox="Lastest Project" class="overlay overlay--invisible overlay--p-15">
              <div class="overlay--border">

              </div>
            </a>
            <div class="latest__item--content">
              <div class="latest__item--inner">
                <h3>Au Resting</h3>
                <div class="cat-name">
                  <a href="">
                    <em>Bed room</em>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="latest__item">
            <img alt="Project 7" src="img/latest-project-07.jpg">
            <a href="img/latest-project-07.jpg" data-lightbox="Lastest Project" class="overlay overlay--invisible overlay--p-15">
              <div class="overlay--border">
              </div>
            </a>
            <div class="latest__item--content">
              <div class="latest__item--inner">
                <h3>Skyline</h3>
                <div class="cat-name">
                  <a href="">
                    <em>Dressing room</em>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Latest Prject -->

    <!-- Client Say -->
    <section class="client-say" style="display:none;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-12">
            <h2 class="title">
              O que nossos clientes
              <span>
                dizem
              </span>
            </h2>
            <p class="title-detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
          </div>
        </div>

        <div class="row owl-carousel owl-theme" id="owl-client-say">
          <div class="client__item item clearfix">
            <div class="client-img">
              <img alt="Client 1" src="img/client-01.jpg">
            </div>
            <div class="client-content">
              <blockquote>
                Sed ut perspiciatis under omnis iste natus error sit set voluptatem accusantium alti doloremque ipsa.
              </blockquote>
              <p class="client-name">
                Glenn Walton
              </p>
              <p class="client-job">
                <em>Designer</em>
              </p>
            </div>
          </div>
          <!-- End client item -->
          <div class="client__item item clearfix">
            <div class="client-img">
              <img alt="Client 2" src="img/client-02.jpg">
            </div>
            <div class="client-content">
              <blockquote>
                Sed ut perspiciatis under omnis iste natus error sit set voluptatem accusantium alti doloremque ipsa.
              </blockquote>
              <p class="client-name">
                Lamar Hill
              </p>
              <p class="client-job">
                <em>Developer</em>
              </p>
            </div>
          </div>
          <!-- End client item -->

          <div class="client__item item clearfix">
            <div class="client-img">
              <img alt="Client 3" src="img/client-03.jpg">
            </div>
            <div class="client-content">
              <blockquote>
                Sed ut perspiciatis under omnis iste natus error sit set voluptatem accusantium alti doloremque ipsa.
              </blockquote>
              <p class="client-name">
                Owen Silva
              </p>
              <p class="client-job">
                <em>Photographer</em>
              </p>
            </div>
          </div>
          <!-- End client item -->
          <div class="client__item item clearfix">
            <div class="client-img">
              <img alt="Client 4" src="img/client-15.jpg">
            </div>
            <div class="client-content">
              <blockquote>
                Sed ut perspiciatis under omnis iste natus error sit set voluptatem accusantium alti doloremque ipsa.
              </blockquote>
              <p class="client-name">
                Jack Man
              </p>
              <p class="client-job">
                <em>Photographer</em>
              </p>
            </div>
          </div>
          <!-- End client item -->
          <div class="client__item item clearfix">
            <div class="client-img">
              <img alt="Client 5" src="img/client-16.jpg">
            </div>
            <div class="client-content">
              <blockquote>
                Sed ut perspiciatis under omnis iste natus error sit set voluptatem accusantium alti doloremque ipsa.
              </blockquote>
              <p class="client-name">
                Jackie Lee
              </p>
              <p class="client-job">
                <em>Designer</em>
              </p>
            </div>
          </div>
          <!-- End client item -->
          <div class="client__item item clearfix">
            <div class="client-img">
              <img alt="Client 6" src="img/client-17.jpg">
            </div>
            <div class="client-content">
              <blockquote>
                Sed ut perspiciatis under omnis iste natus error sit set voluptatem accusantium alti doloremque ipsa.
              </blockquote>
              <p class="client-name">
                Micheal Lang
              </p>
              <p class="client-job">
                <em>Developer</em>
              </p>
            </div>
          </div>
          <!-- End client item -->
        </div>
      </div>
    </section>
    <!-- End client Say -->
    <!-- Partner -->
    <section class="partner" style="display:none;">
      <div class="section-content section-content--w1792">
        <div class="partner-wrap owl-carousel owl-theme" id="owl-partner" >
          <div class="partner__item item">
            <a href="">
              <img alt="Partner 1" src="img/partner-01.png">
            </a>
          </div>
          <div class="partner__item item">
            <a href="">
              <img alt="Partner 2" src="img/partner-02.png">
            </a>
          </div>
          <div class="partner__item item">
            <a href="">
              <img alt="Partner 3" src="img/partner-03.png">
            </a>
          </div>
          <div class="partner__item item">
            <a href="">
              <img alt="Partner 4" src="img/partner-04.png">
            </a>
          </div>
          <div class="partner__item item">
            <a href="">
              <img alt="Partner 5" src="img/partner-01.png">
            </a>
          </div>
          <div class="partner__item item">
            <a href="">
              <img alt="Partner 6" src="img/partner-02.png">
            </a>
          </div>
          <div class="partner__item item">
            <a href="">
              <img alt="Partner 7" src="img/partner-03.png">
            </a>
          </div>
          <div class="partner__item item">
            <a href="">
              <img alt="Partner 8" src="img/partner-04.png">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Partner -->
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