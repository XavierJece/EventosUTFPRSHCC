<?php 
	header("Content-type: text/html; charset=utf-8");
	require_once 'php/Conecta.php';
	
	$con = new Conecta();
  $raiz = 'curso-cc/';

  $ultimoEvento = $con->getUltimoEvento('evento');
  $ultimoVisita = $con->getUltimoEvento('visita');  

  $capaUltimoEvento = ($con->getQtdFotos($ultimoEvento[0]['id']) != 0) ? $con->getCapa($ultimoEvento[0]['id']) : null;
  $capaUltimoVisita = ($con->getQtdFotos($ultimoVisita[0]['id']) != 0) ? $con->getCapa($ultimoVisita[0]['id']) : null;

  $capaUltimoEvento = $raiz . 'image/evento/' . $ultimoEvento[0]['id'] . '/' . $capaUltimoEvento;
  $capaUltimoVisita = $raiz . 'image/visita/' . $ultimoVisita[0]['id'] . '/' . $capaUltimoVisita;
?>


<!DOCTYPE html>


<html lang="en">
<head>
	<!-- Caracteres Especiais -->
    <meta charset="utf-8">
    
	<!-- Titulo da Pagina -->
    <title>UTFPR - Santa Helena</title>
	
	<!-- Responsividade -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Icone -->
	<link rel="shortcut icon" href="image/Logo/favicon.ico" type="image/x-icon" />
    
    <!-- BOOTSTRAP -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome's Free -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- My CSS -->
	<link rel="stylesheet" href="<?php echo $raiz?>css/style.css">

    
</head>
<body>
  <nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv">
		<div class="container">
			<a class="navbar-brand mx-auto" href="#">
				<!-- Gra<span>freez</span> -->
				<img src="<?php echo $raiz?>image/Logo/utfpr.png" alt="UTFPR Santa Helena" class="logoHead">
			</a>

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-align-justify"></i>
			</button>			


			<div class="collapse navbar-collapse" id="navbarCollapse1">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item active" id="nav-item-HOME">
						<a class="nav-link" href="#myCarousel">Home <span class="sr-only">(current)</span></a> 
					</li>

					<li class="nav-item" id="nav-item-VT"> <a class="nav-link" href="<?php echo $raiz?>visitasTecnicas.php">Visitas Técnicas</a> </li>

					<li class="nav-item" id="nav-item-EVENTOS"> <a class="nav-link" href="<?php echo $raiz?>evento.php">Eventos</a> </li>

				</ul>
			</div>


		</div>
	</nav>

<!-- Swiper Silder
    ================================================== -->
<!-- Slider main container -->
<div class="swiper-container main-slider" id="myCarousel">
  <div class="swiper-wrapper">
    <div class="swiper-slide slider-bg-position" style="background:url('<?php echo $capaUltimoEvento;?>'); opacity: 0.85;" data-hash="slide1">
    	<div class="caixa">
    		<h2 class="titulo-slide"><?php echo $ultimoEvento[0]['titulo'];?></h2> <!-- style="color: #423460;" --> 
    		<p class="subtitulo-slide"><?php echo $ultimoEvento[0]['previa'];?></p>
    	</div>
    </div>
    <div class="swiper-slide slider-bg-position" style="background:url('<?php echo $capaUltimoVisita;?>'); opacity: 0.85;" data-hash="slide2">
    	<div class="caixa">
    		<h2 class="titulo-slide"><?php echo $ultimoVisita[0]['titulo'];?></h2>
    		<p class="subtitulo-slide"><?php echo $ultimoVisita[0]['previa'];?></p>    		
    	</div> 
    </div>
  </div>
    

  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
  <!-- Add Navigation -->
  <div class="swiper-button swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
  <div class="swiper-button swiper-button-next"><i class="fa fa-chevron-right"></i></div>
</div>


<!-- 
 Benefits ==================================================
<section class="service-sec" id="benefits">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="heading">
      <h2><small>Benefits of Exercise</small>To enjoy the glow of good health, you must exercise</h2>
    </div>
        </div>
      <div class="col-md-8">
        <div class="row">
            <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-plus" aria-hidden="true"></i>
          <h3>Better Sleep</h3>
          <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
        </div>
        <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-leaf" aria-hidden="true"></i>
          <h3>Reduces Weight</h3>
          <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
        </div>
        <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-leaf" aria-hidden="true"></i>
          <h3>Improves Mood</h3>
          <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
        </div>
        <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-bell" aria-hidden="true"></i>
          <h3>Boosts Energy</h3>
          <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
        </div>
        </div>
      </div>
      <div class="col-md-4"> <img src="http://grafreez.com/wp-content/temp_demos/burnout/img/side-01.jpg" class="img-fluid" /> </div>
    </div>
  </div>
</section>

About ==================================================
<section class="about-sec parallax-section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h2><small>Who We Are</small>About<br>
          Our Blog</h2>
      </div>
      <div class="col-md-4">
        <p>To enjoy good health, to bring true happiness to one's family, to bring peace to all, one must first discipline and control one's own mind. If a man can control his mind he can find the way to Enlightenment, and all wisdom and virtue will naturally come to him.</p>
        <p>Saving our planet, lifting people out of poverty, advancing economic growth... these are one and the same fight. We must connect the dots between climate change, water scarcity, energy shortages, global health, food security and women's empowerment. Solutions to one problem must be solutions for all.</p>
      </div>
      <div class="col-md-4">
        <p>Our greatest happiness does not depend on the condition of life in which chance has placed us, but is always the result of a good conscience, good health, occupation, and freedom in all just pursuits.</p>
        <p>Being in control of your life and having realistic expectations about your day-to-day challenges are the keys to stress management, which is perhaps the most important ingredient to living a happy, healthy and rewarding life.</p>
        <p><a href="#" class="btn btn-transparent-white btn-capsul">Explore More</a></p>
      </div>
    </div>
  </div>
</section>

 <section class="action-sec">
          <div class="container">
              <div class="action-box text-center"><h2>GET FULL FREE VERSION HERE </h2><a class="btn btn-success" href="http://grafreez.com/394/fitness-website-template/" target="_blank">Free Bootstrap Templates</a></div>
          </div>
      </section>
      
      
	
 -->


<!-- JQUERY AND BOOTSTRAP  -->
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	

	<!-- My JS -->
	<script type="text/javascript" src="<?php echo $raiz?>js/myjs.js"></script>

	

</body>
</html>
