<?php
$template_email = '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600" rel="stylesheet" type="text/css">
<head>
<title>'.$envio["titulo_emkt_envio"].'</title>
<style type="text/css">
div, p, a, li, td {
	-webkit-text-size-adjust:none;
}
.ReadMsgBody {
	width: 100%;
	background-color: #d1d1d1;
}
.ExternalClass {
	width: 100%;
	background-color: #d1d1d1;
	line-height:100%;
}
body {
	width: 100%;
	height: 100%;
	background-color: #d1d1d1;
	margin:0;
	padding:0;
	-webkit-font-smoothing: antialiased;
	-webkit-text-size-adjust:100%;
}
html {
	width: 100%;
}
img {
	-ms-interpolation-mode:bicubic;
}
table[class=full] {
	padding:0 !important;
	border:none !important;
}
table td img[class=imgresponsive] {
	width:100% !important;
	height:auto !important;
	display:block !important;
}
@media only screen and (max-width: 800px) {
body {
 width:auto!important;
}
table[class=full] {
 width:100%!important;
}
table[class=devicewidth] {
 width:100% !important;
 padding-left:20px !important;
 padding-right: 20px!important;
}
table td img.responsiveimg {
 width:100% !important;
 height:auto !important;
 display:block !important;
}
}
@media only screen and (max-width: 640px) {
table[class=devicewidth] {
 width:100% !important;
}
table[class=inner] {
 width:100%!important;
 text-align: center!important;
 clear: both;
}
table td a[class=top-button] {
 width:160px !important;
  font-size:14px !important;
 line-height:37px !important;
}
table td[class=readmore-button] {
 text-align:center !important;
}
table td[class=readmore-button] a {
 float:none !important;
 display:inline-block !important;
}
.hide {
 display:none !important;
}
table td[class=smallfont] {
 border:none !important;
 font-size:26px !important;
}
table td[class=sidespace] {
 width:10px !important;
}
}
 @media only screen and (max-width: 520px) {
}
@media only screen and (max-width: 480px) {

 table {
 border-collapse: collapse;
}
table td[class=template-img] img {
 width:100% !important;
 display:block !important;
}
}
@media only screen and (max-width: 320px) {
}
</style>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="full">
  <tr>
    <td height="54">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="full">
  <tr>
    <td align="center"><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="devicewidth">
        <tr>
          <td><table width="100%" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" align="center" class="full" style="border-radius:5px 5px 0 0; background-color:#ffffff;">
              <tr>
                <td height="29">&nbsp;</td>
              </tr>
              <tr>
                <td><table border="0" cellspacing="0" cellpadding="0" align="left" class="inner" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                    <tr>
                      <td width="23" class="hide">&nbsp;</td>
                      <td height="75" class="inner" valign="middle"><a href="#"><img class="logo" src="https://www.realmat.com.br/sistema/ferramenta/templates_email/img/logo.png" width="200" height="58" alt="Logo"></a></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellspacing="0" cellpadding="0" align="right" class="inner" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                    <tr>
                      <td height="15">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="center"><a href="#" class="top-button" style="font:bold 13px/37px Arial, Helvetica, sans-serif; color:#ffffff; text-decoration:none; background:#F90; display:block; border-radius:24px; text-transform:uppercase;">ACESSAR SITE</a></td>
                      <td class="hide" width="20">&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid #dbdbdb;">&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="full">
  <tr>
    <td align="center"><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="devicewidth">
        <tr>
          <td><table width="100%" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" align="center" class="full" style="background-color:#ffffff;">
              <tr>
                <td height="23">&nbsp;</td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td width="23" class="sidespace">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="23" class="sidespace">&nbsp;</td>
                    </tr>
                  </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td width="3.33%" class="sidespace">&nbsp;</td>
                      <td width="93.33%"><a href="'.$envio["link_emkt_envio"].'"><img class="imgresponsive" src="https://www.realmat.com.br/conteudos/email_marketing/'.$envio["imagem_emkt_envio"].'" width="554" height="atuo" alt="Banner" /></a></td>
                      <td width="3.33%" class="sidespace">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="20">&nbsp;</td>
                      <td height="20">&nbsp;</td>
                      <td height="20">&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td style="border-bottom:1px solid #dbdbdb;">&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="full">
  <tr>
    <td align="center"><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="devicewidth" style="background-color:#F90;">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="full" style="background-image:url(https://www.realmat.com.br/sistema/ferramenta/templates_email/images/white-bg.gif); background-repeat:repeat-x; background-position:left top;">
              <tr style="background-color:#FFF;">
                <td height="23">&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><img src="https://www.realmat.com.br/sistema/ferramenta/templates_email/images/picture.png" width="83" height="auto" alt="picture" /></td>
              </tr>
              <tr>
                <td height="25">&nbsp;</td>
              </tr>
              <tr>
                <td style="background-color:#F90;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                      <td width="23" class="sidespace">&nbsp;</td>
                      <td align="center" style="font:15px/19px Arial, Helvetica, sans-serif; color:#ffffff;">A REALMAT Atacadista é a maior e mais completa distribuidora de artigos de papelaria, escritório e material escolar. Com sede própria na Avenida Quinze de Novembro, no bairro do Porto em Cuiabá-MT, dispomos de ambiente amplo e climatizado, com estacionamento para clientes em compras</td>
                      <td width="23" class="sidespace">&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td height="25">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="full">
  <tr>
    <td align="center"><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="devicewidth">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="full">
  <tr>
    <td align="center"><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="devicewidth">
        <tr>
          <td><table width="100%" bgcolor="#f1f1f1" border="0" cellspacing="0" cellpadding="0" align="center" class="full">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="full">
  <tr>
    <td align="center"><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="devicewidth">
        <tr>
          <td><table width="100%" bgcolor="#f1f1f1" border="0" cellspacing="0" cellpadding="0" align="center" class="full">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="full">
  <tr>
    <td align="center"><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="devicewidth">
        <tr>
          <td><table width="100%" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" align="center" class="full" style="border-radius:0 0 7px 7px;">
              <tr>
                <td height="18">&nbsp;</td>
              </tr>
              <tr>
                <td><table class="inner" align="right" width="340" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align:center;">
                    <tr>
                      <td width="21">&nbsp;</td>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr>
                            <td><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="full">
                                <tr>
                                  <td align="center" style="font:11px Helvetica,  Arial, sans-serif; color:#ffffff;"><a style="color:#000000; text-decoration:none;" href="#"> Ver no Browser</a></td>
                                  <td style="color:#000000;"> | </td>
                                  <td align="center" style="font:11px Helvetica,  Arial, sans-serif; color:#ffffff;"><a style="color:#000000; text-decoration:none;" href="#"> Descadastrar</a> | </td>
                                  <td class="hide" width="40" align="right">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td height="18">&nbsp;</td>
                                </tr>
                              </table></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                  <table class="inner" align="left" width="230" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align:center;">
                    <tr>
                      <td width="21">&nbsp;</td>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr>
                            <td align="center" style="font:11px Helvetica,  Arial, sans-serif; color:#000000;">Realmat Atacadista</td>
                          </tr>
                          <tr>
                            <td height="18">&nbsp;</td>
                          </tr>
                        </table></td>
                      <td width="21">&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="20">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>'
;
?>