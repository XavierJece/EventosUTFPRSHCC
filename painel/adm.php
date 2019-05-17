<?php 
	header("Content-type: text/html; charset=utf-8");
	require_once '../php/Conecta.php';
	$con = new Conecta();

	session_start();
	if(!empty($_SESSION['logado']) == "sim"){
		$con->userLogado($_SESSION['user']);
	}else{
		header('Location: ../');
	}

	if(!empty($_GET['sair']) == "sim"){
		session_destroy();
		header('Location: ../');
	}


	require_once '../php/Elementos.php';

	
	$eventos = $con->getEventos('evento');
	$visitas = $con->getEventos('visita');
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
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- Font Awesome's Free -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Galeria -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css">
		
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		
</head>
<body>
	<!-- <nav class="navbar navbar-expand-lg mb-4 top-bar top-bar-Paginas navbar-static-top sps sps--abv">
		<div class="container">
			<a class="navbar-brand mx-auto" href="../index.php">
				<img src="../image/Logo/utfpr.png" alt="UTFPR Santa Helena" class="logoHead">
			</a>

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-align-justify"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapse1">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item " id="nav-item-HOME">
						<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a> 
					</li>

					<li class="nav-item" id="nav-item-VT"> <a class="nav-link" href="../visitasTecnicas.php">Visitas Técnicas</a> </li>

					<li class="nav-item active" id="nav-item-EVENTOS"> <a class="nav-link" href="../eventos.php">Eventos</a> </li>

				</ul>
			</div>


		</div>
	</nav> -->

	<?php echo $header?>


<!-- Main -->
	<main class="main-painel">

		<div class="wrapper">

			<ul class="tabs clearfix" data-tabgroup="first-tab-group">
				<li><a href="#tab1" class="active">Participações em <br> Eventos</a></li>
				<li><a href="#tab2">Visitas <br> Técnicas</a></li>
			</ul>

			<section id="first-tab-group" class="tabgroup">

				<div id="tab1" class="content-area">
					<div class="row">
						<div class="col-10"><h3>Participações em Eventos</h3></div>
						<div class="col-2 text-right">
							<a name="" id="" class="btn btn-primary " href="pagEvento.php?e=-1" role="button">
								<i class="fas fa-plus"></i> Novo
							</a>
						</div>
					</div>
					
					<table id="tblEventos" class="table table-striped">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Titulo</th>
								<th scope="col">Data</th>
								<th scope="col">Editar</th>
							</tr>
						</thead>
						<tbody>

							<?php
								foreach ($eventos as $value) {
									
									$date = date('d/m/Y',  strtotime($value['data']));

									echo'
										<tr>
											<th scope="row">' . $value["id"] . '</th>
											<td>' . $value["titulo"] . '</td>
											<td>' . $date . '</td>
											<td>
												<a name="" id="" class="btn btn-success" href="pagEvento.php?e=' . $value["id"] . '" role="button">
													<i class="fas fa-pencil-alt"></i> Editar
												</a>
											</td>
										</tr>
									';
								}
							?>
							
						</tbody>
					</table>


				</div>

				<div id="tab2" class="content-area">
					<div class="row">
						<div class="col-10"><h3>Visitas Técnicas</h3></div>
						<div class="col-2 text-right">
							<a name="" id="" class="btn btn-primary " href="pagEvento.php?e=-1" role="button">
								<i class="fas fa-plus"></i> Novo
							</a>
						</div>
					</div>
									
					<table id="tblVisita" class="table table-striped">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Titulo</th>
								<th scope="col">Data</th>
								<th scope="col">Editar</th>
							</tr>
						</thead>
						<tbody>

							<?php
								foreach ($visitas as $value) {
									
									$date = date('d/m/Y',  strtotime($value['data']));

									echo'
										<tr>
											<th scope="row">' . $value["id"] . '</th>
											<td>' . $value["titulo"] . '</td>
											<td>' . $date . '</td>
											<td>
												<a name="" id="" class="btn btn-success" href="#" role="button">
													<i class="fas fa-pencil-alt"></i> Editar
												</a>
											</td>
										</tr>
									';
								}
							?>
							
						</tbody>
					</table>

				</div>

			</section>
		</div>

		
	</main>
	
	<!-- ************ FOOTER ************  -->
	<!-- <footer class="footer-painel">
		<div class="row">
			<div class="col-lg-4 footer-utfpr"><p><a href="http://portal.utfpr.edu.br/cursos/coordenacoes/graduacao/santa-helena/sh-ciencia-da-computacao" target="_blank"> UTFPR - Santa Helena </br> Ciências da Computação</a></p>	</div>
			<hr class="separador-modal">
			<div class="col-lg-4 footer-copyright"><p><i class="far fa-copyright"></i> 2019 Cop;yright Text </p></div>
			<hr class="separador-modal">
			<div class="col-lg-4 footer-desveoper"><p>Developer by </br> Professor Xavier</p></div>
		</div>
	</footer> -->
	<?php echo $footer?>
	<!-- ************ FIM FOOTER ************  -->


<!-- JQUERY AND BOOTSTRAP  -->
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.19/sorting/date-euro.js"></script>

	<!-- Galeria -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>

	<!-- My JS -->
	<script type="text/javascript" src="../js/myjs.js"></script>

	

</body>
</html>