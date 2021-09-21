<?php require_once("site_mod_include.php");?>
<?php
    //Abre a conexão
	$pdo = Database::conexao();
	
	$codigo_texto = protege($_GET["codigo_texto"]);

	//consulta textos do produto
	$sql_consulta_texto = "SELECT codigo_texto, titulo, subtitulo, banner, arquivo, texto, status FROM texto WHERE codigo_texto = '".$codigo_texto."'";
	$result = $pdo->query( $sql_consulta_texto );
	$texto = $result->fetch( PDO::FETCH_ASSOC );
    
	//consulta produtos
  $sql_consulta_produto = "SELECT produto.codigo_produto, produto.nome_produto, produto.resumo_produto, produto.valor_produto, produto.estoque_produto, produto.situacao_produto, produto.referencia_produto, foto_produto.arquivo_foto
								FROM foto_produto
								LEFT JOIN produto ON foto_produto.codigo_produto = produto.codigo_produto
								LEFT JOIN produto_categoria ON produto.codigo_produto = produto_categoria.codigo_produto
								LEFT JOIN produto_subcategoria ON produto.codigo_produto = produto_subcategoria.codigo_produto
								WHERE produto.situacao_produto = 'L' GROUP BY foto_produto.codigo_foto ORDER BY produto.nome_produto ASC";
								$result = $pdo->query($sql_consulta_produto);
								$produtos = $result->fetchAll(PDO::FETCH_ASSOC);
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
      <div class="parallax parallax--ser-li">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-12">
              <h2>
                Equipamentos
              </h2>
              <ul class="breadcrumbs ul--inline ul--no-style">
                <li>
                  <a href="index.hphp">Home</a>
                </li>
                <span>/</span>
                <li>
                  <a href="">Equipamentos</a>
                </li>
                <span>/</span>
                <li class="active">
                  Betoneiras e Compactadores
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
                <p><a href="contato.php" class="au-btn au-btn--pill au-btn--yellow au-btn--medium">Orçamento</a></p>
              </div>
            </div>
          </div>
          <?php $result->closeCursor(); endforeach;?>
        </div>
      </div>
     
    </section>
    <!-- End Service List -->

    <?php include "site_mod_info_contato.php";?>
    
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