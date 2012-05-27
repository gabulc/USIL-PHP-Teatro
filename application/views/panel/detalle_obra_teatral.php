<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <title>Detalle | Obras Teatrales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/application/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/application/assets/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/application/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/application/assets/css/play-details.css">
    <link href='http://fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		<div id="top-colors">
				<div></div><!--
			--><div></div><!--
			--><div></div><!--
			--><div></div><!--
			--><div></div><!--
			-->		
		</div>

		<header class="row">
			<div class="span4 offset4">
				<h1>La Señorita Julia</h1>
				<div class="separator"></div>
			</div>
		</header>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span2">
					<button id="rating" class="pull-left btn btn-success">140 puntos</button>
				</div>
				<div class="span10">
					<div class="row-fluid">
						<h2 class="span4">La Señorita Julia</h2>
						<aside id="play-ratings" class="span6">
							<span>140 Puntos</span>
							<span>50 Likes</span>
							<span>20 Comentarios</span>
						</aside>		
					</div>

					<div class="row-fluid">
						<a href="#" class="span2">Me gustó</a>
						<a href="#" class="span2">No me gustó</a>
						<a href="#" class="span2">Comentar</a>						
					</div>

					<div class="row-fluid">
						<p class="span5"><strong>Dirige: </strong>Marian Gubbins</p>
						<p class="span5"><strong>Estreno: </strong>12 de Mayo 2011</p>
					</div>

					<div class="row-fluid">
						<p class="span5"><strong>Lugar: </strong>La Plaza Isil</p>
						<p class="span5"><strong>Funciones: </strong>De Jueves a Martes 8 p.m y Domingos 7 p.m</p>					
					</div>

					<div class="row-fluid">
						<div class="span10">
							<img src="<?php echo base_url(); ?>upload_files/img/lasenorita.png">
						</div>
					</div>

					<div class="row-fluid"><div class="separator span10"></div></div>

					<div class="row-fluid"><div class="span10"><h3>Sinópsis</h3></div></div>

					<div class="row-fluid">
						<div class="span10">
							<p>La señorita Julia, hija de un conde (Fiorella De Ferrari), tiene un encuentro con uno de sus 
								sirvientes, Juan (Bruno Odar) durante la fiesta de San Juan. A partir de ahí, se teje una historia 
								de amor.</p>
							<p>Entre dudas y urgencias eróticas, Julia parece carecer de la capacidad de decisión que Juan 
								sí tiene. Los acontecimientos se precipitan y Julia, desquiciada, sale a cumplir con su destino.</p> 
							<p>Ambos personajes son interpelados por su propia manera de enfrentar la vida, sus anhelos, la 
								condición social que los separa, pero sobre todo por la consecuencia de sus actos y la crudeza 
								en la vida cotidiana representada en Cristina, la criada novia de Juan (Camila Mac Lennan).</p>

							<p>La señorita Julia, es una obra considerada en la etapa del naturalismo uno de los momentos mas 
								difíciles en la historia del teatro porque se da en un contexto de grandes cambios políticos y 
								económicos en el mundo que marcan el temperamento de los personajes y el resquebrajamiento las 
								relaciones sociales. </p>
						</div>
					</div>

					<div class="row-fluid"><div class="separator span10"></div></div>
					
				</div>
			</div>
		</div>
	</div>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	<script>
	$(window).resize(function() {
		console.log($(window).width());
	});
	</script>
</body>
</html>