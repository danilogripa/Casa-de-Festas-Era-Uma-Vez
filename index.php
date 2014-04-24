<!doctype html>
<html lang="PT-br">
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css" >
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" >
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" charset="utf-8" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	</head>
	<body>


<?php
  if(isset($_GET['resposta']) && $_GET['resposta'] == 'ok'){
    $resposta = "Contato enviado com sucesso!";
    $title = "Parabéns!"; 
  }else{
    $title = 'Seu contato não foi enviado'; 
    $resposta = "Servidores ocupados tente mais tarde!";
  } 
  if(isset($resposta) && isset($_GET['resposta'])){
    echo '
        <script>
          $(document).ready(function(){

            $("#myModal").modal("show");

          })
        </script>
        ';
      }
    ?>
    
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><?php echo $title; ?> </h4>
      </div>
      <div class="modal-body">
        <?php echo $resposta; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="modal-button" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

		<div id="main">
			<script>$(function(){$("#header").load("header.html");});</script>
			<div id="header"></div>

			<script>$(function(){$("#main_content").load("main.html");});</script>
			<div id="main_content"></div>

			<script>$(function(){$("#footer").load("footer.html");});</script>
			<div id="footer"></div>
		</div>
	    <script type="text/javascript" charset="utf-8" src="js/jquery.validate.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/plugins.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/util.js"></script>
		<script type="text/javascript" charset="utf-8" src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
