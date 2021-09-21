<?php 
include "site_mod_include.php";
$status_envio = protege($_GET["envio"]); // id_empreendimento
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
      <div class="parallax parallax--nav-2">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-12">
              <h2>
                Contato
              </h2>
              <ul class="breadcrumbs ul--inline ul--no-style">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <span>/</span>
                <li class="active">
                  Contato
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Navigation -->
    <!-- Contact content -->
    <section class="contact-content">
      <div class="container">

        <?php if($status_envio == "erro"){?>
        <div class="mensagem alert-danger">
          <strong>Ops!</strong> Algo deu errado com sua solicitação. Pedimos desculpas! Tente novamente mais tarde.
        </div>
        <?php }?>

        <?php if($status_envio == "sucesso"){?>
        <div class="mensagem alert-success">
          <strong>OK!</strong> Sua solicitação foi enviada. <br/>Aguarde nosso contato em até 48h.
        </div>
        <?php }?>

        <div class="row">
          <div class="col-md-6">
            <div class="m-t-40">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3841.46297714022!2d-56.1300516847802!3d-15.673559989126447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939dac319f371207%3A0x998bf6420c4f63d8!2sTornav+-+Equipamentos+Aeroportu%C3%A1rios+e+Corrim%C3%B3es+de+A%C3%A7o+Inox!5e0!3m2!1spt-BR!2sbr!4v1554822306318!5m2!1spt-BR!2sbr" width="100%" height="368px" style="border:none;"></iframe>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-contact-wrap m-t-40">
              <h4>Envie nos uma mensagem</h4>
              <form class="form-contact" role="form" action="envia-contato.php" method="post">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <input type="text" name="nome" required placeholder="Seu Nome*">
                  </div>
                  <div class="col-md-6 col-12">
                    <input type="email" name="email" required placeholder="Seu E-mail*">
                  </div>
                  <div class="col-md-6 col-12">
                    <input type="text" name="telefone" required placeholder="Telefone*">
                  </div>
                  <div class="col-md-6 col-12">
                    <input type="text" name="assunto" required placeholder="Assunto*">
                  </div>
                  <div class="col-md-12">
                    <textarea name="mensagem" class="message" placeholder="Sua Mensagem"></textarea>
                  </div>
                </div>
                <div>
                  <input type="hidden" name="acao"  value="envia-form-contato">
                  <button type="submit" class="au-btn au-btn--pill au-btn--yellow au-btn--big">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Content -->
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
  <script src="vendor/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
  <script src="vendor/bootstrap4/popper.min.js" type="text/javascript"></script>
  <script src="vendor/bootstrap4/bootstrap.min.js" type="text/javascript"></script>
  <script src="vendor/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_vKbYnLTXzWiwjb7T5caUTnup7YkUBBU&callback=initMap" type="text/javascript"></script>
  <!-- =================== CUSTOM JS ==================== -->
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>