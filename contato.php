<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" >
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/jquery.validate.js"></script>
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
		echo '<script>$(document).ready(function(){$("#myModal").modal("show");})</script>';
	}?>
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

	<div id="main_content"></div>

	<script>$(function(){$("#footer").load("footer.html");});</script>
	<div id="footer"></div>

</div>
		<script type="text/javascript" charset="utf-8" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/plugins.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/util.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/bootstrap.min.js"></script>
	</body>
	</html>
