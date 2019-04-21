<?php 
	header("Content-type: text/html; charset=utf-8");
	require_once 'php/Conecta.php';
	
	$con = new Conecta();
	$eventos = $con->getEventos('visita');
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Participações em Eventos CC </title>		
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<!-- Icone -->
	<link rel="shortcut icon" href="/image/Logo/favicon.ico" type="image/x-icon" />
    
    <!-- BOOTSTRAP -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome's Free -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Galeria -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css">
    
    <!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/cards.css">
	<link rel="stylesheet" type="text/css" href="css/gallery-grid.css">
    
</head>
<body>
	<nav class="navbar navbar-expand-lg mb-4 top-bar top-bar-Paginas navbar-static-top sps sps--abv">
		<div class="container">
			<a class="navbar-brand mx-auto" href="index.php">
				<!-- Gra<span>freez</span> -->
				<img src="image/Logo/utfpr.png" alt="UTFPR Santa Helena" class="logoHead">
			</a>

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-align-justify"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapse1">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item " id="nav-item-HOME">
						<a class="nav-link" href="../curso-cc">Home <span class="sr-only">(current)</span></a> 
					</li>

					<li class="nav-item active" id="nav-item-VT"> <a class="nav-link" href="#">Visitas Técnicas</a> </li>

					<li class="nav-item " id="nav-item-EVENTOS"> <a class="nav-link" href="evento.php">Eventos</a> </li>

				</ul>
			</div>


		</div>
	</nav>


<!-- Main -->
	<main class="main">

		<div class=" list-article">

			<div class="row row-Organizacao">

				<!-- Custom select structure
				<div class="select_mate" data-mate-select="active" >
				  	<select name="" onchange="" onclick="return false;" id="">
				  		<option value="recentes">Mais Recentes</option>
				  		<option value="antigos">Mais Antigos</option>
				  		<option value="az" >A-Z</option>
				  		<option value="za">Z-A</option>
				  	</select>

				  	<p class="selecionado_opcion"  onclick="open_select(this)" ></p>

				  	<span onclick="open_select(this)" class="icon_select_mate" >
				  		<svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
				  			<path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
				  			<path d="M0-.75h24v24H0z" fill="none"/>
				  		</svg>
				  	</span>

				  	<div class="cont_list_select_mate">
				  		<ul class="cont_select_int">  </ul>
				  	</div>
				</div>
				  Custom select structure -->

				<div class="btn-group pull-right btn-Modo" id="switch-view">
					<button class="btn btn-primary">
						<i class="fas fa-th-large"></i>
					</button>
					<button class="btn btn-primary active">
						<i class="fas fa-th-list"></i>
					</button>
				</div>

				<div class="clearfix"></div>
			</div>

			<div class="row row-Cards"><?php
			
				foreach ($eventos as $value) {
					
					if( $con->getQtdFotos($value['id']) != 0){
					
						$capa = 'image/'.$value['tipo'].'/'.$value['id'].'/'.$con->getCapa($value['id']);
						$card = '';
						$classExpecificas = '';
						if(strlen($value['titulo']) >= 37){
							$classExpecificas = $classExpecificas . 'titulo-grande ';
						}
						
						
						if(empty($value['previa'])){
							$card = '
								<div class="article-wrapper col-lg-12">
									<article class="sem-previa '.$classExpecificas.'">
										<a href="#" class="more" data-toggle="modal" data-target="#modal-'.$value['id'].'">Ler mais</a>
										<div class="img-wrapper"><div class="img" style="background:url(\''.$capa.'\');"></div></div>
										<h1>'.$value['titulo'].'</h1>
									</article>
								</div>
							';
						}else{
							$card = '
								<div class="article-wrapper col-lg-12">
									<article class = '.$classExpecificas.'>
										<a href="#" class="more" data-toggle="modal" data-target="#modal-'.$value['id'].'">Ler mais</a>
										<div class="img-wrapper"><div class="img" style="background:url(\''.$capa.'\');"></div></div>
										<h1>'.$value['titulo'].'</h1>
										<hr class="separador-modal">
										<p>'.$value['previa'].'</p>
									</article>
								</div>
							';
						}
						
						print $card;
						
					}	
				}
				

			?></div>
		</div>

	</main>
	
	<!-- ************ FOOTER ************  -->
	<footer>
		<div class="row">
		  <div class="col-lg-4 footer-utfpr"><p><a href="http://portal.utfpr.edu.br/cursos/coordenacoes/graduacao/santa-helena/sh-ciencia-da-computacao" target="_blank"> UTFPR - Santa Helena </br> Ciências da Computação</a></p>	</div>
		  <hr class="separador-modal">
		  <div class="col-lg-4 footer-copyright"><p><i class="far fa-copyright"></i> 2019 Copyright Text </p></div>
		  <hr class="separador-modal">
		  <div class="col-lg-4 footer-desveoper"><p>Developer by </br> Professor Xavier</p></div>
		</div>
	</footer>
	<!-- ************ FIM FOOTER ************  -->

	<!-- ************ MODAL ************  -->
	
	<?php
		
		foreach ($eventos as $value) {
			
			if($con->getQtdFotos($value['id']) != 0){
			
				$classExpecificas = '';
				
				if(strlen($value['titulo']) >= 25){
					$classExpecificas = $classExpecificas . 'titulo-grande ';
				}
				if($value['id'] == 23){
					$classExpecificas = $classExpecificas . 'mais-Margin ';
				}
				
				print '
					<div class="modal fade" id="modal-'.$value['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">

								<div class="modal-header '.$classExpecificas.'">
									<h1 class="modal-titulo">'.$value['titulo'].'</h1>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<hr class="separador-modal">

								<div class="modal-body">
									'.$value['texto'].'
								
									<hr class="separador-modal">

									<div class="tz-gallery">
										<div class="row">
				';
				
				foreach ($con->getFotos($value['id']) as $valueFoto) {
					
					$foto = 'image/'.$value['tipo'].'/'.$value['id'].'/'.$valueFoto['nome'].'.'.$valueFoto['extensao'];
					$descricao = 'Sem descrição';
					if(!empty($valueFoto['descricao'])){
						$descricao =$valueFoto['descricao'];
					}
					$media = '';
					if($valueFoto['extensao'] == 'mp4'){

						
						/*$media = '
							<div class="col-sm-6 col-md-8">
								<video width="100%" height="auto" controls>
									<source src="'.$foto.'" type="video/mp4">
								</video>
							</div>
						';*/
					
					}else{
					
						$media = '
							<div class="col-sm-6 col-md-4">
								<a class="lightbox" href="'.$foto.'">
									<img src="'.$foto.'" alt="'.$descricao.'"> 
								</a>
							</div>
						';
				
					}
					
					print $media;
				}
				
				print '

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				';
				
			}	
		}
		

	?>
	
	<!-- ************ MODAL ************  -->




<!-- JQUERY AND BOOTSTRAP  -->
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	


	<!-- Galeria -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>

	<!-- My JS -->
	<script type="text/javascript" src="js/myjs.js"></script>

	

</body>
</html>